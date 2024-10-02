<?php
include "_autoload.php";
//Este archivo es llamado por el js
$arr = array();

$gral_novedad_motivo_id = Gral::getVars(1, "gral_novedad_motivo_id", 0);

$gral_novedad_motivo = GralNovedadMotivo::getOxId($gral_novedad_motivo_id);
if($gral_novedad_motivo)
{
    $gral_novedad_motivo_extendidos = $gral_novedad_motivo->getGralNovedadMotivoExtendidos();
    if($gral_novedad_motivo_extendidos)
    {
        foreach($gral_novedad_motivo_extendidos as $o){
            $cont++;
            $arr_motivo_extendido[$cont]['cod']         = $o->getId();
            $arr_motivo_extendido[$cont]['descripcion'] = $o->getDescripcion();
        }
    }
}


//Se incluye el html
include "div_par_gral_novedad_motivo_extendido.php";
?>

   