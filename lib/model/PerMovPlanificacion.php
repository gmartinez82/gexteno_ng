<?php 
require_once "base/BPerMovPlanificacion.php"; 
class PerMovPlanificacion extends BPerMovPlanificacion
{
    static function getArrRangoHorasFormateado($arr_desde, $arr_hasta)
    {
        $arr = array();
        foreach($arr_desde as $i => $v)
        {
            $arr[$i]["desde"] = $v;
            $arr[$i]["hasta"] = $arr_hasta[$i];
        }
        return $arr;
    }
}
?>