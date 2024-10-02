<?php

include "_autoload.php";

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_GET, 'vta_hoja_ruta_id', 0, Gral::TIPO_INTEGER);
$hoja_ruta_tipo_estado_codigo = Gral::getVars(Gral::VARS_GET, 'hoja_ruta_tipo_estado_codigo', '', Gral::TIPO_STRING);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$cmb_ope_chofer_id = Gral::getVars(Gral::VARS_POST, 'cmb_ope_chofer_id', 0, Gral::TIPO_INTEGER);
$txa_observacion  = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);

//Gral::prr($_POST);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;


if ($cmb_ope_chofer_id == 0)
{
    $arr['cmb_ope_chofer_id'] = Lang::_lang('Debe seleccionar un chofer', true);
    $arr['error'] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang('Debe ingresar una observacion', true);
}

if (!$arr["error"])
{
    $vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);
    $vta_hoja_ruta_estado = $vta_hoja_ruta->setVtaHojaRutaEstado($hoja_ruta_tipo_estado_codigo, $txa_observacion, $cmb_ope_chofer_id);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
?>