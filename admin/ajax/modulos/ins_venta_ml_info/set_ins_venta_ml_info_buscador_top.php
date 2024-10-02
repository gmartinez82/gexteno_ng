<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(InsVentaMlInfo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
InsVentaMlInfo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ins_venta_ml_info.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_venta_ml_info.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.descripcion_breve', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.descripcion_empresa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.importe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_identificador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_category_desc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_category_cod', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_listing_type_desc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_condition_desc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_shipping_mode_desc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_permalink', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_start_time', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_expiration_time', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_seller', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_status', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_initial_quantity', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_available_quantity', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_sold_quantity', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_price', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_ultima_actualizacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_free_shipping', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.ml_local_pickup', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_venta_ml_info.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_category.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_category.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_category.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_listing_type.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_listing_type.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_listing_type.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_condition.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_condition.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_condition.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_shipping_mode.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_shipping_mode.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_shipping_mode.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ml_item_status.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_venta_ml_info.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_category', 'ml_category.id', 'ins_venta_ml_info.ml_category_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_listing_type', 'ml_listing_type.id', 'ins_venta_ml_info.ml_listing_type_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_condition', 'ml_condition.id', 'ins_venta_ml_info.ml_condition_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_shipping_mode', 'ml_shipping_mode.id', 'ins_venta_ml_info.ml_shipping_mode_id', 'LEFT JOIN');
$criterio->addRealJoin('ml_item_status', 'ml_item_status.id', 'ins_venta_ml_info.ml_item_status_id', 'LEFT JOIN');
    
$criterio->addTabla('ins_venta_ml_info');
$criterio->setCriterios();

