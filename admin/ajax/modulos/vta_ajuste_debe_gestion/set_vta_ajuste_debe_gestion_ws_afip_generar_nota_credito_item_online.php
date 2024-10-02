<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_POST, "vta_ajuste_debe_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($vta_ajuste_debe_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro la AjusteDebe", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);

    $vta_nota_credito = VtaNotaCredito::setInicializarVtaNotaCreditoDesdeAjusteDebeItem($vta_ajuste_debe, $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>