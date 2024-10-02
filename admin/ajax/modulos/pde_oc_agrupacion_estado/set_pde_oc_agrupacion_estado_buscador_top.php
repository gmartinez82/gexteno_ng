<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOcAgrupacionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOcAgrupacionEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_oc_agrupacion_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_oc_agrupacion_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc_agrupacion_estado.pde_oc_agrupacion_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_oc_agrupacion_tipo_estado', 'pde_oc_agrupacion_tipo_estado.id', 'pde_oc_agrupacion_estado.pde_oc_agrupacion_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_oc_agrupacion_estado');
$criterio->setCriterios();

