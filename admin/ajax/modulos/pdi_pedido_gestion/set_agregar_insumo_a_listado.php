<?php
include "_autoload.php";

$insumo_id = Gral::getVars(1, 'insumo_id', 0);
$cantidad = Gral::getVars(1, 'cantidad', 0);
$ot_id = Gral::getVars(1, 'ot_id', 0);
$tarea_resuelta_id = Gral::getVars(1, 'tarea_resuelta_id', 0);

$indice = $insumo_id.'-'.$ot_id.'-'.$tarea_resuelta_id;

$array = Gral::getSes('PDI_PEDIDO_IMPUTAR_MASIVO');

$array[$indice] = $cantidad;
Gral::setSes('PDI_PEDIDO_IMPUTAR_MASIVO', $array);
?>