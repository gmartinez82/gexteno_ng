<?php

include_once '_autoload.php';

$pde_nota_credito_id = Gral::getVars(Gral::VARS_POST, 'pde_nota_credito_id', 0);
$pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"]) {

    // se registra nuevo estado
    $pde_nota_credito_estado = $pde_nota_credito->setPdeNotaCreditoEstado(
            PdeNotaCreditoTipoEstado::TIPO_ANULADO, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>