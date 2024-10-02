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
$txt_nro_comprobante = Gral::getVars(Gral::VARS_POST, "txt_nro_comprobante", '', Gral::TIPO_STRING);

$vta_remito = VtaRemito::getOxId($vta_remito_id);

$proximo_numero_comprobante = $vta_remito->getProximoNumeroComprobante();
$proximo_numero_comprobante = str_pad($proximo_numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if (!Ctrl::esDigito($txt_nro_comprobante)) {
    $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido", true);
    $arr["error"] = true;
} else {
    if (strlen($txt_nro_comprobante) != DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE) {
        $arr["txt_nro_comprobante"] = Lang::_lang("Debe ingresar un nro de comprobante valido, por ejemplo 00154578", true);
        $arr["error"] = true;
    }else{
        // ---------------------------------------------------------------------
        // se comprueba que el numero de factura sea realmente el que debe ser
        // ---------------------------------------------------------------------
        if($txt_nro_comprobante != $proximo_numero_comprobante){
            $arr["txt_nro_comprobante"] = Lang::_lang("El numero de comprobante ingresado parece no ser el proximo disponible", true).' - Proximo a Registrar: '.$proximo_numero_comprobante;
            $arr["error"] = true;
        }
    }
}

if(Ctrl::esVacio($txa_nota_interna)){
    //$arr["txa_nota_interna"] = Lang::_lang("Debe ingresar comentarios", true);
    //$arr["error"] = true;    
}

if (!$arr["error"])
{
    
    $vta_remito->setAsignarNumeroComprobante($txt_nro_comprobante, $txa_nota_interna);
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
