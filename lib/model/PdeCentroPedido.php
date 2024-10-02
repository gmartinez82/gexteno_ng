<?php 
require_once "base/BPdeCentroPedido.php"; 
class PdeCentroPedido extends BPdeCentroPedido
{
    const PREFIJO_CREDENCIAL = 'CP_';

    /* Control de PrvProveedor */
    public function control(){
        $error = new DbError();	
        
        // descripcion
        if(!Ctrl::esVacio($this->getDescripcion())){
            if(Ctrl::esMaxCaracteres(100, $this->getDescripcion())){
                $error->addError(505, 'Descripcion', 'descripcion');
            }
        }else{
            $error->addError(100, 'Descripcion', 'descripcion');
        }
        
        $o = self::getOxDescripcion($this->getDescripcion());
        if($o && $o->getId() != $this->getId()){
            $error->addError(140, 'Descripcion', 'descripcion');
        }

        // codigo
        if(!Ctrl::esVacio($this->getCodigo())){
            if(Ctrl::esMaxCaracteres(100, $this->getCodigo())){
                $error->addError(505, 'Codigo', 'codigo');
            }
            
            $o = self::getOxCodigo($this->getCodigo());
            if($o && $o->getId() != $this->getId()){
                $error->addError(140, 'Codigo', 'codigo');
            }
        }else{
            //$error->addError(100, 'Codigo', 'codigo');
        }
        
        
        // localidad
        if(Ctrl::esNull($this->getGeoLocalidadId())){
            $error->addError(100, 'Localidad', 'geo_localidad_id');
        }
        
        // moneda
        if(Ctrl::esNull($this->getGralMonedaId())){
            $error->addError(100, 'Moneda', 'gral_moneda_id');
        }
        
        return $error;
    }
    
    public function getCodigoDeCredencial(){
        return self::PREFIJO_CREDENCIAL.$this->getCodigo();
    }
    
    /* Metodo getPanPanols filtrado para select considerando credenciales de usuario */ 	
    static function getPdeCentroPedidosCmbFxCredencial($paginador = null, $criterio = null){
        $col = PdeCentroPedido::getPdeCentroPedidos($paginador, $criterio);

        $cont = 0;
        $arr = array();
        $user = UsUsuario::autenticado();
        foreach($col as $o){
            $codigo = self::PREFIJO_CREDENCIAL.$o->getCodigo();
            //if(Login::esAutorizado($user, $codigo)){
            if(UsCredencial::getEsAcreditado($codigo, $user->getId())){
                $cont++;
                $arr[$cont]['cod'] = $o->getId();
                $arr[$cont]['descripcion'] = $o->getDescripcion();
            }			
        }
        return $arr;
    }
    
    static function getArrayPdeCentroPedidoIdsXCredencial($paginador = null, $criterio = null){

        $col = PdeCentroPedido::getPdeCentroPedidos($paginador, $criterio);

        $arr = array();
        $user = UsUsuario::autenticado();
        foreach($col as $o){
            $codigo = self::PREFIJO_CREDENCIAL.$o->getCodigo();
            //if(Login::esAutorizado($user, $codigo)){
            //if(UsCredencial::getEsAcreditado($codigo, $user->getId())){
                $arr[] = $o->getId();
            //}
        }
        return $arr;
    }
    
    static function getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn($paginador = null, $criterio = null){
        $arr = self::getArrayPdeCentroPedidoIdsXCredencial($paginador, $criterio);
        if(is_array($arr) && count($arr) >= 1){
            $in_string = '('.implode(', ', $arr).')';
        }else{
            $in_string = '(0)';
        }
        return $in_string;
    }
    
    public function getPdeCentroRecepcionsCmbXPdeCentroPedidoPdeCentroRecepcion() {
        $os = parent::getPdeCentroRecepcionsXPdeCentroPedidoPdeCentroRecepcion();
        
        $cont = 0;
        $arr = array();
        foreach($os as $o){
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }
    
}
?>