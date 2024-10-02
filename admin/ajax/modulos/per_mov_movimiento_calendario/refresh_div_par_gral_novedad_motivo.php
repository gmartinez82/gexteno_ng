<?php
include "_autoload.php";
//Este archivo es llamado por el js
$arr = array();

$gral_novedad_id = Gral::getVars(1, "gral_novedad_id", 0);

$gral_novedad = GralNovedad::getOxId($gral_novedad_id);
if($gral_novedad)
{
    $gral_novedad_motivos = $gral_novedad->getGralNovedadMotivos();
    if($gral_novedad_motivos)
    {
        foreach($gral_novedad_motivos as $o){
            $cont++;
            $arr_motivo[$cont]['cod'] = $o->getId();
            $arr_motivo[$cont]['descripcion'] = $o->getDescripcion();
        }
    }
}

//Se incluye el html
include "div_par_gral_novedad_motivo.php";
?>
