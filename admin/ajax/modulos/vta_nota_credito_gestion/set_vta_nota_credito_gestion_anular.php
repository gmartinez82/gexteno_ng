<?php

include_once '_autoload.php';

$vta_nota_credito_id = Gral::getVars(Gral::VARS_POST, 'vta_nota_credito_id', 0);
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"]) {

    // se registra nuevo estado
    $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(
            VtaNotaCreditoTipoEstado::TIPO_ANULADO_SIN_CAE, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>