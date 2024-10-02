<?php

include_once '_autoload.php';

$vta_recibo_id = Gral::getVars(Gral::VARS_POST, 'vta_recibo_id', 0);
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"]) {

    // se registra nuevo estado
    //$vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_ANULADO, $txa_observacion);
    $vta_recibo_estado = $vta_recibo->setVtaReciboAnular($txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>