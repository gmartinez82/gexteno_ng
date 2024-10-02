<?php
include "_autoload.php";

$cmb_pan_panol_origen = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_origen', 0);
$pan_panol_origen = PanPanol::getOxId($cmb_pan_panol_origen);

$cmb_pan_panol_destino = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_destino', 0);
$pan_panol_destino = PanPanol::getOxId($cmb_pan_panol_destino);

include "modal_pdi_pedido_agrupacion_agregar_item_datos.php";
?>