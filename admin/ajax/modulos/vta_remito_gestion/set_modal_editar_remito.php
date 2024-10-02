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
$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '', Gral::TIPO_STRING);
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '', Gral::TIPO_STRING);
$txt_nro_sucursal = Gral::getVars(Gral::VARS_POST, "txt_nro_sucursal", '', Gral::TIPO_STRING);
$txt_nro_punto_venta = Gral::getVars(Gral::VARS_POST, "txt_nro_punto_venta", '', Gral::TIPO_STRING);
$txt_nro_comprobante = Gral::getVars(Gral::VARS_POST, "txt_nro_comprobante", '', Gral::TIPO_STRING);

$vta_remito = VtaRemito::getOxId($vta_remito_id);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_MODIFICAR_NRO_COMPROBANTE')) {
    if (!Ctrl::esDigito($txt_nro_sucursal)) {
        $arr["txt_nro_sucursal"] = Lang::_lang("Debe ingresar un numero de sucursal", true);
        $arr["error"] = true;
    } else {
        if (strlen($txt_nro_sucursal) != DbConfig::VARS_CANTIDAD_NRO_SUCURSAL) {
            $arr["txt_nro_sucursal"] = Lang::_lang("Debe ingresar un numero de sucursal valido, por ejemplo 001", true);
            $arr["error"] = true;
        }
    }    
    if (!Ctrl::esDigito($txt_nro_punto_venta)) {
        $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido", true);
        $arr["error"] = true;
    } else {
        if (strlen($txt_nro_punto_venta) != DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE) {
            $arr["txt_nro_punto_venta"] = Lang::_lang("Debe ingresar un punto de venta valido, por ejemplo 001", true);
            $arr["error"] = true;
        }
    }
    if (!Ctrl::esDigito($txt_nro_comprobante)) {
        $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido", true);
        $arr["error"] = true;
    } else {
        if (strlen($txt_nro_comprobante) != DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE) {
            $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido, por ejemplo 00154578", true);
            $arr["error"] = true;
        }
    }
}


if (!$arr["error"])
{

    $vta_remito->setModificarDatosComprobante($txa_nota_interna, $txa_nota_publica, $txt_nro_sucursal, $txt_nro_punto_venta, $txt_nro_comprobante);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
