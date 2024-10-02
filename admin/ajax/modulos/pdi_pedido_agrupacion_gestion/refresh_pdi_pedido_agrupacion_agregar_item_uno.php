<?php

include "_autoload.php";

$key = Gral::getVars(Gral::VARS_POST, 'key', 0);
$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_POST, 'agrupacion_id', 0);

$cmb_pan_panol_origen = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_origen', 0);
$cmb_pan_panol_destino = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_destino', 0);

$insumo_id = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
$txt_cantidads = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);

$txt_cantidad = $txt_cantidads[$key];


$ins_insumo        = InsInsumo::getOxId($insumo_id);
$pan_panol_origen  = PanPanol::getOxId($cmb_pan_panol_origen);
$pan_panol_destino = PanPanol::getOxId($cmb_pan_panol_destino);

include "modal_pdi_pedido_agrupacion_agregar_item_uno.php";
?>