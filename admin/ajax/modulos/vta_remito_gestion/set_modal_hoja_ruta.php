<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$vta_remito_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_id', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$cmb_vta_hoja_ruta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_hoja_ruta_id", null, Gral::TIPO_INTEGER);


$vta_remito = VtaRemito::getOxId($vta_remito_id);
$vta_hoja_ruta = VtaHojaRuta::getOxId($cmb_vta_hoja_ruta_id);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if ($cmb_vta_hoja_ruta_id == 0)
{
    $arr["cmb_vta_hoja_ruta_id"] = Lang::_lang("Debe seleccionar una hoja de ruta para el remito", true);
    $arr["error"] = true;
}else{
    $vta_hoja_ruta_tipo_estado = $vta_hoja_ruta->getVtaHojaRutaTipoEstado();
    if(!$vta_hoja_ruta_tipo_estado->getEditable())
    {
        $arr["cmb_vta_hoja_ruta_id"] = Lang::_lang("La hoja de ruta no se puede editar", true);
        $arr["error"] = true;
    }    
}


if (!$arr["error"])
{
    $vta_remito->setHojaRuta($cmb_vta_hoja_ruta_id);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
