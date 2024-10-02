<?php 
require_once "base/BGralSucursal.php"; 
class GralSucursal extends BGralSucursal
{
    const SUCURSAL_ENCARNACION = 'ENCARNACION';
    const SUCURSAL_VIRTUAL = 'VIRTUAL';    
    const SUCURSAL_PREVENTA = 'PREVENTA';    
    const SUCURSAL_TELEMARKETING = 'TELEMARKETING';    
    
    /**
     * 
     * @return type
     */
    public function getPanPanolVinculado(){
        $pan_panol = $this->getPanPanolXGralSucursalPanPanol(null, null, true);
        $pan_panol = $this->getPanPanolXGralSucursalPanPanol(null, null);
        return $pan_panol;
    }
    
    /**
     * 
     * @return type
     */
    static function getGralSucursalsCmbPorAlcance(){
        $user = UsUsuario::autenticado();
        
        // sucursales a las que tiene acceso el usuario
        $ids = $user->getGralSucursalUsUsuariosId();            

        $criterio = new Criterio();
        $criterio->add(self::GEN_ATTR_ID, $ids, Criterio::IN_ARRAY);
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden('2');
        $criterio->setCriterios();

        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);

        $col = GralSucursal::getGralSucursals($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach($col as $o){
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
        }
        return $arr;
    }
    
    /**
     * 
     * @param type $clientes_vinculados
     * @return string
     */
    static function getGralSucursalsCmbPorAlcanceYDetalleClientes($clientes_vinculados = false) {
        
        $user = UsUsuario::autenticado();
        
        // sucursales a las que tiene acceso el usuario
        $ids = $user->getGralSucursalUsUsuariosId();            

        $criterio = new Criterio();
        $criterio->add(self::GEN_ATTR_ID, $ids, Criterio::IN_ARRAY);
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(self::GEN_TABLA);
        if($clientes_vinculados){
            $criterio->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
            $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID);
        }
        
        $criterio->addOrden('2');
        $criterio->setCriterios();

        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);

        $col = GralSucursal::getGralSucursals($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach($col as $o){
            
            $cli_clientes_vinculados = $o->getCliClientesHabilitadosXGralSucursalCliCliente(null, null, true);
            
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect().' - '.count($cli_clientes_vinculados).' Clientes Vinculados';
        }
        return $arr;
    }
    
    /**
     * 
     */
    public function getCliClientesHabilitadosXGralSucursalCliCliente($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
        $c = new Criterio();
        if($estado){
            $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            //$c->add(GralSucursalCliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }
        $c->add(GralSucursalCliCliente::GEN_ATTR_GRAL_SUCURSAL_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(CliCliente::GEN_TABLA);
        $c->addRealJoin(GralSucursalCliCliente::GEN_TABLA, GralSucursalCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
        $c->addOrden(2);
        $c->setCriterios();

        $os = CliCliente::getCliClientes($paginador, $c);
        return $os;
    }
    
    /**
     * 
     * @return type
     */
    static function getGralSucursalsParaRetiro(){
        $c = new Criterio();
        $c->add(GralSucursal::GEN_ATTR_CODIGO, GralSucursal::SUCURSAL_VIRTUAL, Criterio::DISTINTO);
        $c->add(GralSucursal::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(GralSucursal::GEN_TABLA);
        $c->addOrden(GralSucursal::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();
        
        $gral_sucursals = GralSucursal::getGralSucursals(null, $c);
        return $gral_sucursals;
    }
    
    /**
     * 
     * @return string
     */
    static function getGralSucursalsParaRetiroCmb(){
        $os = self::getGralSucursalsParaRetiro();

        $cont = 0;
        $arr = array();
        foreach($os as $o){
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion().' ('.$o->getDomicilio().')';			
        }
        return $arr;        
    }
    
    /**
     * 
     * @return boolean
     */
    public function getRestringeVentaSinStock(){
        $restriccion = false;
        
        switch ($this->getCodigo()){
            case GralSucursal::SUCURSAL_ENCARNACION: 
                $restriccion = true;
                break;
            default: 
                $restriccion = false;
        }
        
        return $restriccion;
    }
    
}
?>
