<?php

require_once "base/BUsNavegacion.php";

class UsNavegacion extends BUsNavegacion {

    const GEN_CLASE_AUDITORIA = false;

    /*
     * Autor: Pablo Rosen
     * Fecha: 31/08/2012 16:15 hs.
     * Return void
     * 
     * Metodo que registra en UsNavegacion pas paginas por donde navega el usuario.
     */

    static function registrarNavegacion() {
        $archivo = array_pop(explode('/', $_SERVER['PHP_SELF']));
        $us_usuario = UsUsuario::autenticado();

        $us_ultima = UsNavegacion::getOxSession(session_id());
        if ($us_ultima) {
            if ($us_ultima->getPagina() == $archivo)
                return; // no registra en permanencia		
        }

        $us_navegacion = new UsNavegacion();
        $us_navegacion->setUsUsuarioId($us_usuario->getId());
        $us_navegacion->setSession(session_id());
        $us_navegacion->setNavegador($_SERVER['HTTP_USER_AGENT']);
        $us_navegacion->setPagina($archivo);
        $us_navegacion->setUrl('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
        $us_navegacion->setUrlReferer($_SERVER['HTTP_REFERER']);
        $us_navegacion->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);
        $us_navegacion->setObservacion('');
        $us_navegacion->setEstado(1);
        $us_navegacion->save();
    }

    /*
      Autor: Pablo Rosen
      Fecha: 31/08/2012 16:15 hs.
      Return void

      Metodo que registra en UsNavegacion pas paginas por donde navega el usuario.
     */

    static function getNavegacionUltimaDeUsuarioParaBtnRegresar($user) {
        $c = new Criterio();
        $c->add('estado', 1, Criterio::IGUAL);
        $c->addTabla('us_navegacion');
        $c->addOrden('id', 'desc');
        $c->setCriterios();
        $p = new Paginador(1, 1);
        $us_navegacions = $user->getUsNavegacions($p, $c);
        foreach ($us_navegacions as $us_navegacion) {
            return $us_navegacion;
        }
        return false;
    }

    /*
      Autor: Pablo Rosen
      Fecha: 31/08/2012 16:15 hs.
      Return void

      Metodo que registra en UsNavegacion pas paginas por donde navega el usuario.
     */

    static function getNavegacionsDeUsuarioParaBtnRegresar($user, $cantidad = 10) {
        $c = new Criterio();
        $c->add('estado', 1, Criterio::IGUAL);
        $c->addTabla('us_navegacion');
        $c->addOrden('id', 'desc');
        $c->setCriterios();
        $p = new Paginador($cantidad, 1);
        $us_navegacions = $user->getUsNavegacions($p, $c);

        return $us_navegacions;
    }

    static function getUrlBtnRegresar($default = '?') {
        $user = UsUsuario::autenticado();

        $btn_volver_url = $default;
        $us_navegacion = UsNavegacion::getNavegacionUltimaDeUsuarioParaBtnRegresar($user);
        if ($us_navegacion) {
            if (trim($us_navegacion->getUrlReferer()) != '') {
                if (strstr($us_navegacion->getUrlReferer(), '_adm.php')) {
                    $btn_volver_url = $us_navegacion->getUrlReferer();
                }
                if (strstr($us_navegacion->getUrlReferer(), '_gestion.php')) {
                    $btn_volver_url = $us_navegacion->getUrlReferer();
                }
            }
        }

        return $btn_volver_url;
    }

    static function getPaginasCmb() {
        $sql = "SELECT 
                    pagina
                FROM us_navegacion
                WHERE TRUE
                GROUP BY 1
                ORDER BY 1 ASC 
                ";

        //Gral::pr($sql);
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        $arr = array();
        while ($fila = pg_fetch_object($cons->getResultado())) {
            $cont++;
            $arr[$cont]['cod'] = $fila->pagina;
            $arr[$cont]['descripcion'] = $fila->pagina;
        }
        return $arr;
    }

}

?>