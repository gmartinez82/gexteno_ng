<?php
include_once "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_POST, 'pde_factura_id', 0, GRAL::TIPO_INTEGER);
$txt_gral_centro_costo_porcentaje_afectados = Gral::getVars(Gral::VARS_POST, 'txt_gral_centro_costo_porcentaje_afectado');

$pde_factura = PdeFactura::getOxId($pde_factura_id);

$gral_centro_costos = GralCentroCosto::getGralCentroCostosParaImputacion();

$simular = true;

include "bloque_pde_factura_modal_imputar_centro_costo.php";
?>

