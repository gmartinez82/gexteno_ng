<?php 
require_once "base/BGralActividad.php"; 
class GralActividad extends BGralActividad
{ 
    const ACTIVIDAD_VENTAS_MAYORISTAS = 'VENTAS_MAYORISTAS';    
    const ACTIVIDAD_VENTAS_MINORISTAS = 'VENTAS_MINORISTAS';    
    const ACTIVIDAD_SERVICIOS_TALLER = 'SERVICIOS_TALLER';
    
    public function getCodigoMin(){
        $codigo_min = '-';
        
        switch($this->getCodigo()){
            case self::ACTIVIDAD_VENTAS_MAYORISTAS: $codigo_min = 'MAY'; break;
            case self::ACTIVIDAD_VENTAS_MINORISTAS: $codigo_min = 'MIN'; break;
            case self::ACTIVIDAD_SERVICIOS_TALLER: $codigo_min = 'TAL'; break;
        }
        
        return $codigo_min;
    }
    
}
?>