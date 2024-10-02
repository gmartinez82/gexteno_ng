<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$pde_factura_id = Gral::getVars(Gral::VARS_POST, "pde_factura_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($pde_factura_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro la Factura", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    $pde_factura = PdeNotaCredito::setInicializarPdeNotaCreditoDesdeFacturaItem($pde_factura_id, $observacion = '');
    //Gral::prr($pde_factura);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>