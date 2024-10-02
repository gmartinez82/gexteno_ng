<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$cmb_filtro_ins_etiqueta_id = Gral::getVars(1, 'cmb_filtro_ins_etiqueta_id', 0);
$cmb_filtro_ins_categoria_id = Gral::getVars(1, 'cmb_filtro_ins_categoria_id', 0);
$cmb_filtro_prv_proveedor_id = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_ins_marca_id = Gral::getVars(1, 'cmb_filtro_ins_marca_id', 0);
$cmb_filtro_ins_clasificacion_id = Gral::getVars(1, 'cmb_filtro_ins_clasificacion_id', 0);
$cmb_filtro_pan_panol_id = Gral::getVars(1, 'cmb_filtro_pan_panol_id', 0);
$cmb_filtro_ins_stock_resumen_tipo_estado_id = Gral::getVars(1, 'cmb_filtro_ins_stock_resumen_tipo_estado_id', 0);
$cmb_filtro_estado = Gral::getVars(1, 'cmb_filtro_estado', -1);
$cmb_filtro_requiere_reabastecimiento = Gral::getVars(1, 'cmb_filtro_requiere_reabastecimiento', -1);

$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
$criterio->setAmbiguo(true);

$criterio->addSelect(InsInsumo::GEN_ATTR_DESCRIPCION);

$criterio->addInicioSubconsulta();
$criterio->add('ins_stock_resumen.estado', 1, Criterio::IGUAL, false, '');

if ($cmb_filtro_ins_etiqueta_id != 0) {
    $criterio->add('ins_etiqueta.id', $cmb_filtro_ins_etiqueta_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_categoria_id != 0) {
    $ins_categoria = InsCategoria::getOxId($cmb_filtro_ins_categoria_id);
    if($ins_categoria){
        //$criterio->add('ins_categoria.id', $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
        $criterio->add('ins_categoria.codigo', $ins_categoria->getCodigo(), Criterio::LIKE);
    }
}
if ($cmb_filtro_prv_proveedor_id != 0) {
    $criterio->add('prv_proveedor.id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_marca_id != 0) {
    $criterio->add('ins_marca.id', $cmb_filtro_ins_marca_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_clasificacion_id != 0) {
    $criterio->add('ins_clasificacion.id', $cmb_filtro_ins_clasificacion_id, Criterio::IGUAL);
}
if ($cmb_filtro_pan_panol_id != 0) {
    $criterio->add('ins_stock_resumen.pan_panol_id', $cmb_filtro_pan_panol_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_stock_resumen_tipo_estado_id != 0) {
    $criterio->add('ins_stock_resumen_tipo_estado.id', $cmb_filtro_ins_stock_resumen_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_requiere_reabastecimiento != -1) {
    $criterio->add('ins_stock_resumen_tipo_estado.requiere_reabastecimiento', $cmb_filtro_requiere_reabastecimiento, Criterio::IGUAL);
}
if ($cmb_filtro_estado != -1) { // solo opcion SI habilitada
    $criterio->add('ins_insumo.estado', $cmb_filtro_estado, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    $criterio->add('ins_stock_resumen.descripcion', $txt_buscador, Criterio::LIKE);
    $criterio->add('ins_stock_resumen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addTabla('ins_stock_resumen');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_resumen.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_pan_panol', 'ins_insumo_pan_panol.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_clasificacion', 'ins_clasificacion.id', 'ins_insumo_pan_panol.ins_clasificacion_id', 'LEFT JOIN');

$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo.ins_marca_id', 'LEFT JOIN');

$criterio->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');

$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_resumen.pan_panol_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_stock_resumen_tipo_estado', 'ins_stock_resumen_tipo_estado.id', 'ins_stock_resumen.ins_stock_resumen_tipo_estado_id', 'LEFT JOIN');

//$criterio->addRealJoin('prv_insumo', 'prv_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
//$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_insumo.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_prv_proveedor.prv_proveedor_id', 'LEFT JOIN');

$criterio->setCriterios();
?>

