<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOcTipoEstadoFacturacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOcTipoEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_oc_tipo_estado_facturacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_oc_tipo_estado_facturacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.activo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.terminal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_tipo_estado_facturacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('pde_oc_tipo_estado_facturacion');
$criterio->setCriterios();

