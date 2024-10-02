<?php

include_once '_autoload.php';

$pde_nota_debito_id = Gral::getVars(Gral::VARS_POST, 'pde_nota_debito_id', 0);
$pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"]) {

    // se registra nuevo estado
    $pde_nota_debito_estado = $pde_nota_debito->setPdeNotaDebitoEstado(
            PdeNotaDebitoTipoEstado::TIPO_ANULADO, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>