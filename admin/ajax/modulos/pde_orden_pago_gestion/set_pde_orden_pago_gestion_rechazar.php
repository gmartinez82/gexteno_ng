<?php

include_once '_autoload.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_POST, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar un motivo de rechazo", true);
}

if (!$arr["error"])
{
    // se registra nuevo estado
    //$pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_RECHAZADO, $txa_observacion);
    $pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoRechazar($txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>