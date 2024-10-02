<?php

include_once '_autoload.php';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);


$cmb_ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, "cmb_ins_tipo_lista_precio_id", 0, Gral::TIPO_INTEGER);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '', Gral::TIPO_STRING);

// control de datos
$arr["error"] = false;

if ($cmb_ins_tipo_lista_precio_id == 0) {
    $arr["error"] = true;
    $arr["cmb_ins_tipo_lista_precio_id"] = Lang::_lang("Debe ingresar un tipo de lista", true);
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"]) {

    // --------------------------------------------------------------------------
    // se registra nueva lista de precios
    // --------------------------------------------------------------------------
    $ins_tipo_lista_precio = $vta_presupuesto->setCambiarTipoListaPrecio($cmb_ins_tipo_lista_precio_id, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>