<?php
include "_autoload.php";

$panol_id = Gral::getVars(2, 'panol_id', 0);
$coche_id = Gral::getVars(2, 'coche_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$veh_coche = VehCoche::getOxId($coche_id);
$ope_operario = OpeOperario::getOxId($operario_id);

$array_imputar_masivo = Gral::getSes('PDI_PEDIDO_IMPUTAR_MASIVO');

include "bloque_imputar_masivo_detalle.php";
?>