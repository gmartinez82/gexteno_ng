<?php
include "_autoload.php";
//Este archivo es llamado por el js
$arr = array();

$gral_novedad_id = Gral::getVars(1, "gral_novedad_id", 0);

$gral_novedad = GralNovedad::getOxId($gral_novedad_id);
if($gral_novedad)
{
    $gral_novedad_codigo = $gral_novedad->getCodigo();
    $gral_novedad_horas  = $gral_novedad->getHoras();
    $pln_jornadas        = $gral_novedad->getPlnJornadas();
//    if($pln_jornadas)
//    {
//        foreach($pln_jornadas as $o){
//            $cont++;
//            $arr[$cont]['cod'] = $o->getId();
//            $arr[$cont]['descripcion'] = $o->getDescripcion();
//        }
//    }
}

//Se incluye el html
include "div_par_pln_jornada_alta_novedad.php";
?>
