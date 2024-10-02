<?php

include_once '_autoload.php';

$pde_factura_id = Gral::getVars(Gral::VARS_POST, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);

$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_nota_interna)) {
    //$arr["error"] = true;
    //$arr["txa_nota_interna"] = Lang::_lang("Debe ingresar una nota interna", true);
}

if (!$arr["error"]) {
    // se modifica la nota interna
    $pde_factura->setNotaInterna($txa_nota_interna);
    $pde_factura->save();
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>