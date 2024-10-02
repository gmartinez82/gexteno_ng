<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$palabras_claves = Gral::getVars(2, 'palabras_claves', '');

$ins_venta_ml_infos = $ins_insumo->getInsVentaMlInfos();
$ins_venta_ml_info = $ins_venta_ml_infos[0];

$categoria = Gral::getVars(2, 'categoria', 0);
$ml_category = MlCategory::getOxCodigoMl($categoria);

if (!$ins_venta_ml_info) {
    $ins_venta_ml_info = new InsVentaMlInfo();
    $ins_venta_ml_info->setDescripcion($ins_insumo->getDescripcion());
}

if($categoria !== '0'){
    $ins_venta_ml_info->setMlCategoryCod($categoria);
}

include "bloque_categorias_propuestas.php";