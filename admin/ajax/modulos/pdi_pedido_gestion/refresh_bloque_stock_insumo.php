<?php
include "_autoload.php";

Gral::setSes('MECANO_PDI_AJUSTE_INS_IDENTIFICADO_ARRAY_TMP', null);

$insumo_id = Gral::getVars(2, 'id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$panol_origen_id = Gral::getVars(2, 'panol_origen_id', 0);
$pan_panol = PanPanol::getOxId($panol_origen_id);


include "bloque_stock_insumo.php";
?>