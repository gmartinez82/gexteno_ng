<?php 
require_once "base/BGralRuta.php"; 
class GralRuta extends BGralRuta
{
    /**
     * 
     * @return type
     */
    public function getGeoLocalidadsCmbXGralRutaGeoLocalidad()
    {
        //$col = GralRuta::getGralRutas($paginador, $criterio);
        $col = GralRuta::getGeoLocalidadsXGralRutaGeoLocalidad();
        
        $cont = 0;
        $arr = array();
        foreach($col as $o){
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();			
        }
        return $arr;
    }
}
?>