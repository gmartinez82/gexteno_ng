<?php 
require_once "base/BPdeOvCentroVenta.php"; 
class PdeOvCentroVenta extends BPdeOvCentroVenta
{
    const PREFIJO_CREDENCIAL = 'CV_CENTRO_VENTA_';
    
    public function getCodigoDeCredencial(){
        return self::PREFIJO_CREDENCIAL.$this->getCodigo();
    }
    
    /* Metodo getPanPanols filtrado para select considerando credenciales de usuario */ 	
    static function getPdeOvCentroVentasCmbFxCredencial($paginador = null, $criterio = null){
        $col = PdeOvCentroVenta::getPdeOvCentroVentas($paginador, $criterio);

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
    
    static function getArrayPdeOvCentroVentaIdsXCredencial($paginador = null, $criterio = null){

        $col = PdeOvCentroVenta::getPdeOvCentroVentas($paginador, $criterio);

        $arr = array();
        $user = UsUsuario::autenticado();
        foreach($col as $o){
            $codigo = self::PREFIJO_CREDENCIAL.$o->getCodigo();
            //if(Login::esAutorizado($user, $codigo)){
            if(UsCredencial::getEsAcreditado($codigo, $user->getId())){
                $arr[] = $o->getId();
            }
        }
        return $arr;
    }    
    
    
}
?>