<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

error_reporting(E_ERROR);
ini_set('display_errors', '1');

include "_autoload.php";

$afip_citi_prc_id = Gral::getVars(Gral::VARS_POST, "afip_citi_prc_id", 0);
$txt_secuencia    = Gral::getVars(Gral::VARS_POST, "txt_secuencia", '');
$txa_observacion  = Gral::getVars(Gral::VARS_POST, "txa_observacion", "");

$arr["error"] = false;


if (Ctrl::esVacio($txt_secuencia)){
    $arr["txt_secuencia"] = Lang::_lang("Debe indicar una secuencia", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)){
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $afip_citi_prc = AfipCitiPrc::getOxId($afip_citi_prc_id);

    $afip_citi_prc->setRenegerarAfipCitiPrc($txa_observacion, $txt_secuencia);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>