<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

include "_autoload.php";

$cmb_gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$cmb_gral_mes_id     = Gral::getVars(Gral::VARS_POST, "cmb_gral_mes_id", 0);
$cmb_anio            = Gral::getVars(Gral::VARS_POST, "cmb_anio", 0);



// se realizan los controles de datos
$arr["error"] = false;

if ($cmb_gral_empresa_id == 0){
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe indicar una empresa", true);
    $arr["error"] = true;
}


if ($cmb_gral_mes_id == 0){
    $arr["cmb_gral_mes_id"] = Lang::_lang("Debe indicar un mes", true);
    $arr["error"] = true;
}

if ($cmb_anio == 0){
    $arr["cmb_anio"] = Lang::_lang("Debe indicar un anio", true);
    $arr["error"] = true;
}


//controlar que no haya un proceso para la misma empresa, mismo mes y mismo año (llamar a un metodo que hay q hacer)
$afip_citi_prc = AfipCitiPrc::getAfipCitiPrcInicializado($cmb_gral_empresa_id, $cmb_gral_mes_id, $cmb_anio);
if($afip_citi_prc)
{
    $arr["prc_afip_citi"] = Lang::_lang("El proceso seleccionado ya fue generado", true);
    $arr["error"] = true;
}

if (!$arr["error"]) 
{
    //llamar al inicializar
    AfipCitiPrc::setInicializarAfipCitiPrc($cmb_gral_empresa_id, $cmb_gral_mes_id, $cmb_anio);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>