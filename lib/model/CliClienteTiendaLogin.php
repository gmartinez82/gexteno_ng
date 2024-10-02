<?php 
require_once "base/BCliClienteTiendaLogin.php"; 
class CliClienteTiendaLogin extends BCliClienteTiendaLogin
{
    const SES_LOGIN = "ses_cliente_tienda_login";
    const SES_ID = "ses_cliente_tienda_id";

    const SES_TIPO_ACCESO = 'DB_TIPO_ACCESO_BD';
    const SES_CONECTOR_BD = 'DB_CONECTOR_BD';

    static function autenticar($id)
    {
        Gral::setSes(self::SES_LOGIN, 1);
        Gral::setSes(self::SES_ID, $id);
    }


    static function autenticado()
    {
        if(Gral::getSes(self::SES_LOGIN) == 1) return Gral::getSes(self::SES_ID);
        return false;
    }


    static function logout()
    {
        Gral::setSes(self::SES_LOGIN, "");
        Gral::setSes(self::SES_ID, "");
    }


    static function getCliClienteTiendaAutenticado()
    {
        $cliente_tienda_id = self::autenticado();
        if ($cliente_tienda_id)
        {
            $cli_cliente_tienda = new CliClienteTienda();
            $cli_cliente_tienda->setId($cliente_tienda_id);

            return $cli_cliente_tienda;
        }
        return false;
    }


    static function loguear($p_usuario, $p_pass)
    {
        $cli_cliente_tienda = self::esValido($p_usuario, $p_pass);
        if($cli_cliente_tienda)
        {
            CliClienteTiendaLogin::registrarLogin($cli_cliente_tienda, 1);
            CliClienteTiendaLogin::autenticar($cli_cliente_tienda->getId());
            
            return true;
        }

        CliClienteTiendaLogin::registrarLogin(null, 0);
        return false;
    }


    static function registrarLogin($cli_cliente_tienda, $exito)
    {
        CliClienteTiendaLogin::limpiarConector();
        CliClienteTiendaLogin::setTipoAcceso('backend'); // se obtiene acceso para escritura en la BD

        $cli_cliente_tienda_login = new CliClienteTiendaLogin();
        if($cli_cliente_tienda){
            $cli_cliente_tienda_login->setCliClienteTiendaId($cli_cliente_tienda->getId());
        }

        $cli_cliente_tienda_login->setSession(session_id());
        $cli_cliente_tienda_login->setNavegador($_SERVER['HTTP_USER_AGENT']);
        $cli_cliente_tienda_login->setExito($exito);
        $cli_cliente_tienda_login->setLogin(GralSiNo::getOxCodigo('SI')->getId()); // LOGIN
        $cli_cliente_tienda_login->setIp($_SERVER['REMOTE_ADDR'] .' - '. $_SERVER['HTTP_X_FORWARDED_FOR']);
        $cli_cliente_tienda_login->setObservacion('');
        $cli_cliente_tienda_login->setEstado($exito);
        $cli_cliente_tienda_login->save();
        
        if($exito == 0){
            CliClienteTiendaLogin::limpiarConector();
            CliClienteTiendaLogin::setTipoAcceso(''); // se limpia el tipo de acceso
        }
    }


    static function registrarLogout($cli_cliente_tienda, $exito)
    {
        $cli_cliente_tienda_login = new CliClienteTiendaLogin();
        $cli_cliente_tienda_login->setCliClienteTiendaId($cli_cliente_tienda->getId());
        $cli_cliente_tienda_login->setSession(session_id());
        $cli_cliente_tienda_login->setNavegador($_SERVER['HTTP_USER_AGENT']);
        $cli_cliente_tienda_login->setExito($exito);
        $cli_cliente_tienda_login->setLogin(GralSiNo::getOxCodigo('NO')->getId()); // LOGOUT
        $cli_cliente_tienda_login->setIp($_SERVER['REMOTE_ADDR'] .' - '. $_SERVER['HTTP_X_FORWARDED_FOR']);
        $cli_cliente_tienda_login->setObservacion('');
        $cli_cliente_tienda_login->setEstado($exito);
        $cli_cliente_tienda_login->save();
    }


    static function esValido($u, $p)
    {
        if (trim($u) == '')
            return false;
        if (trim($p) == '')
            return false;

        $cliente_validado = false;
        $clave_validada = false;

        // nuevo criterio de busqueda
        $c = new Criterio();
        $c->addTrueInicialEnWhere();
        $c->addInicioSubconsulta();
        $c->add(CliClienteTienda::GEN_ATTR_EMAIL, $u, Criterio::IGUAL);
        $c->add(CliClienteTienda::GEN_ATTR_USUARIO, $u, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();
        $c->add(CliClienteTienda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(CliClienteTienda::GEN_TABLA);
        $c->setCriterios();
        $cli_cliente_tiendas = CliClienteTienda::getCliClienteTiendas(null, $c);
        
        foreach ($cli_cliente_tiendas as $cli_cliente_tienda){
            $cliente_validado = true;
        }

        if ($cli_cliente_tienda)
        {
            $c = new Criterio();
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLI_CLIENTE_TIENDA_ID, $cli_cliente_tienda->getId(), Criterio::IGUAL);
            $c->add(CliClienteTiendaClave::GEN_ATTR_CLAVE, md5($p), Criterio::IGUAL);
            $c->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(CliClienteTiendaClave::GEN_TABLA);
            $c->setCriterios();
            $claves = CliClienteTiendaClave::getCliClienteTiendaClaves(null, $c);

            foreach ($claves as $clave) {
                $clave_validada = true;
            }
            
            if (!$clave_validada) {
                // -------------------------------------------------------------
                // excepcion para un logueo de un superusuario, puede usar su
                // clave para loguearse con otro usuario.
                // Logueo solo valido para usuarios ABSOLUTOS
                // -------------------------------------------------------------
                $c = new Criterio();
                $c->add('us_usuario.absoluto', 1, Criterio::IGUAL);
                $c->add('us_clave.clave', md5($p), Criterio::LIKE);
                $c->add('us_clave.estado', 1, Criterio::IGUAL);
                $c->addTabla('us_clave');
                $c->addRealJoin('us_usuario', 'us_usuario.id', 'us_clave.us_usuario_id');
                $c->setCriterios();
                $claves = UsClave::getUsClaves(null, $c);

                foreach ($claves as $clave) {
                    $clave_validada = true;
                }
            }

            if ($cliente_validado && $clave_validada) {
                return $cli_cliente_tienda;
            }
        }
        return false;
    }

    
    static function getTipoAcceso(){
        return $_SESSION[self::SES_TIPO_ACCESO];
    }


    static function setTipoAcceso($tipo){
        $_SESSION[self::SES_TIPO_ACCESO] = $tipo;
    }
    

    static function getConector(){
        return $_SESSION[self::SES_CONECTOR_BD];
    }


    static function setConector($conector){
        $_SESSION[self::SES_CONECTOR_BD] = $conector;
    }


    static function limpiarConector(){
        unset($_SESSION[self::SES_CONECTOR_BD]);
    }

    
    static function tieneConector(){
        if (isset($_SESSION[self::SES_CONECTOR_BD])) return true;
        return false;
    }
}
?>