<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$modulo                     = Gral::getVars(Gral::VARS_POST, 'modulo', 0);
$key                        = Gral::getVars(Gral::VARS_POST, "key", 0);
$txt_descripcion            = Gral::getVars(Gral::VARS_POST, "txt_retencion_descripcion", '');
$txt_numero_comprobante     = Gral::getVars(Gral::VARS_POST, "txt_retencion_numero_comprobante", '');
$txt_fecha_emision          = Gral::getVars(Gral::VARS_POST, "txt_retencion_fecha_emision", '');
$txt_importe_base_imponible = Gral::getVars(Gral::VARS_POST, "txt_retencion_importe_base_imponible", '');
$txt_importe_base_imponible = Gral::getImporteDesdePriceFormatToDB($txt_importe_base_imponible);
$txa_observacion            = Gral::getVars(Gral::VARS_POST, "txa_retencion_observacion", '');
$var_sesion_random          = Gral::getVars(Gral::VARS_POST, 'var_sesion_random', '');

$var_sesion_modulo = $modulo.'_retencion_info'.$var_sesion_random;


// Convertimos las fechas al formato requerido
//$txt_fecha_cobro = Gral::getFechaToDB($txt_fecha_cobro);
//$txt_fecha_emision = Gral::getFechaToDB($txt_fecha_emision);

$arr["error"] = false;

if ($key == 0) {
    $arr["error_general"] = Lang::_lang("Ups! ocurrio un error", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_descripcion)) {
    $arr["txt_retencion_descripcion"] = Lang::_lang("Debe agregar una descripcion", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_numero_comprobante)) {
    $arr["txt_retencion_numero_comprobante"] = Lang::_lang("Debe agregar un numero de comprobante", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_fecha_emision)) {
    $arr["txt_retencion_fecha_emision"] = Lang::_lang("Debe agregar una fecha", true);
    $arr["error"] = true;
} else {
    $txt_fecha_emision = Gral::getFechaToDB($txt_fecha_emision);
    if (!Ctrl::esFechaValida($txt_fecha_emision)) {
        $arr["txt_retencion_fecha_emision"] = Lang::_lang("Debe agregar una fecha valida", true);
        $arr["error"] = true;
    }
}
if ($txt_importe_base_imponible == 0) {
    $arr["txt_retencion_importe_base_imponible"] = Lang::_lang("Importe invalido", true);
    $arr["error"] = true;
} elseif (!Ctrl::esNumero($txt_importe_base_imponible)) {
    $arr["txt_retencion_importe_base_imponible"] = Lang::_lang("Importe invalido", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_retencion_observacion"] = Lang::_lang("Debe agregar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    $arrays = Gral::getSes($var_sesion_modulo);

    $arr['descripcion'] = $txt_descripcion;
    $arr['numero_comprobante'] = $txt_numero_comprobante;
    $arr['fecha_emision'] = $txt_fecha_emision;
    $arr['importe_base_imponible'] = $txt_importe_base_imponible;
    $arr['observacion'] = $txa_observacion;

    $arrays[$key] = $arr;
    Gral::setSes($var_sesion_modulo, $arrays);
    //Gral::prr(Gral::getSes('vta_recibo_retencion_info'));
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>