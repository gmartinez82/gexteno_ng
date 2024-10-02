<?php
include "_autoload.php";

$us_memo_id = Gral::getVars(Gral::VARS_POST, 'us_memo_id', 0);
$txt_descripcion = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', '');
$cmb_us_memo_tipo_id = Gral::getVars(Gral::VARS_POST, 'cmb_us_memo_tipo_id', 0);
$cmb_us_memo_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_us_memo_tipo_estado_id', 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');

$arr["error"] = false;

// se controla la descripcion
if (Ctrl::esVacio($txt_descripcion)) {
    $arr["txt_descripcion"] = "Debe ingresar un titulo";
    $arr["error"] = true;
}

// se controla el tipo
if ($cmb_us_memo_tipo_id == 0) {
    $arr["cmb_us_memo_tipo_id"] = "Debe seleccionar un tipo";
    $arr["error"] = true;
}

// se controla el tipo de estado
if ($cmb_us_memo_tipo_estado_id == 0) {
    $arr["cmb_us_memo_tipo_estado_id"] = "Debe seleccionar un tipo de estado";
    $arr["error"] = true;
}

// se controla la observacion
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = "Debe ingresar comentarios para la nota";
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $us_memo = UsMemo::setRegistrarUsMemo($us_memo_id, $txt_descripcion, $cmb_us_memo_tipo_id, $cmb_us_memo_tipo_estado_id, $txa_observacion);
    $arr["us_memo_id"] = $us_memo->getId();
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;