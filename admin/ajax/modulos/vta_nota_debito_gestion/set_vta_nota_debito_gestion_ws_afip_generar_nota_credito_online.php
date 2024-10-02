<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$vta_nota_debito_id = Gral::getVars(Gral::VARS_POST, "vta_nota_debito_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($vta_nota_debito_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro la Nota de Debito", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
    $vta_nota_credito = VtaNotaCredito::setInicializarVtaNotaCreditoDesdeNotaDebito($vta_nota_debito, $observacion = '');
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>