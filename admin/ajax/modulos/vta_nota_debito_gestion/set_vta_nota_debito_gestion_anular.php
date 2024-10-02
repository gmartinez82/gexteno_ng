<?php

include_once '_autoload.php';

$vta_nota_debito_id = Gral::getVars(Gral::VARS_POST, 'vta_nota_debito_id', 0);
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"]) {

    // se registra nuevo estado
    $vta_nota_debito_estado = $vta_nota_debito->setVtaNotaDebitoEstado(
            VtaNotaDebitoTipoEstado::TIPO_ANULADO_SIN_CAE, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>