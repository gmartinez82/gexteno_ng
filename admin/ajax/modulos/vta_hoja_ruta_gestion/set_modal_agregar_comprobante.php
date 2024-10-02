<?php

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
//$identificador = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$identificador = Gral::getVars(Gral::VARS_POST, 'identificador_modal', 0, Gral::TIPO_INTEGER);
$identificador_comprobante = Gral::getVars(Gral::VARS_POST, 'identificador_comprobante', 0, Gral::TIPO_INTEGER);
$vincular = Gral::getVars(Gral::VARS_POST, 'vincular', -1, Gral::TIPO_INTEGER);
$clase = Gral::getVars(Gral::VARS_POST, 'clase', '', Gral::TIPO_STRING);

$vta_hoja_ruta = VtaHojaRuta::getOxId($identificador);
$vta_remito = VtaRemito::getOxId($identificador_comprobante);
$obj_vta_comprobante = $clase::getOxId($identificador_comprobante);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr['error'] = false;

if (!$arr['error'])
{
    if($vincular == 1)
    {
        $obj_vta_comprobante->setHojaRuta($identificador);
    }
    elseif($vincular == 0)
    {
        $obj_vta_comprobante->setDesvincularHojaRuta();
    }
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
?>