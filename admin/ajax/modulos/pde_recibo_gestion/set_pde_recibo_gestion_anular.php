<?php

include_once '_autoload.php';

$pde_recibo_id = Gral::getVars(Gral::VARS_POST, 'pde_recibo_id', 0);
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion))
{
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de anulacion", true);
}

if (!$arr["error"])
{
    // se registra nuevo estado
    $pde_recibo_estado = $pde_recibo->setPdeReciboAnular($txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>