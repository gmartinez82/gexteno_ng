<?php

include_once '_autoload.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_POST, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_nota_publica)) {
    $arr["error"] = true;
    $arr["txa_nota_publica"] = Lang::_lang("Debe ingresar una nota publica", true);
}

if (!$arr["error"]) {
    // se modifica la nota publica
    $pde_orden_pago->setNotaPublica($txa_nota_publica);
    $pde_orden_pago->save();
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>