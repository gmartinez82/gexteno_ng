<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PrvImportacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PrvImportacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('prv_importacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prv_importacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion.descuento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion.cantidad_tab1', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion.cantidad_tab2', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion.cantidad_tab3', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion.cantidad_tab4', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_importacion_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_marca.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_marca.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_marca.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_convenio_descuento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_convenio_descuento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_convenio_descuento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prv_importacion_tipo_estado', 'prv_importacion_tipo_estado.id', 'prv_importacion.prv_importacion_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_importacion.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_importacion.ins_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_convenio_descuento', 'prv_convenio_descuento.id', 'prv_importacion.prv_convenio_descuento_id', 'LEFT JOIN');
    
$criterio->addTabla('prv_importacion');
$criterio->setCriterios();

