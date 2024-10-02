<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOcEstadoFacturacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOcEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_oc_estado_facturacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_oc_estado_facturacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_estado_facturacion.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_estado_facturacion.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_estado_facturacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_estado_facturacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_estado_facturacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_oc_estado_facturacion.pde_oc_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc_estado_facturacion.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_oc_estado_facturacion');
$criterio->setCriterios();

