<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$pde_nota_credito_id = Gral::getVars(Gral::VARS_POST, "pde_nota_credito_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

//if (Ctrl::esVacio($txa_observacion)) {
//    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
//    $arr["error"] = true;
//}

if ($pde_nota_credito_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro la Nota de Credito. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    
    $pde_nota_debito = PdeNotaDebito::setInicializarPdeNotaDebitoDesdeNotaCredito($pde_nota_credito_id, $observacion = '');
//    Gral::prr($pde_nota_debito);
    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>