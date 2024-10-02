<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PrdOrdenTrabajoTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoTipoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_orden_trabajo_tipo_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_orden_trabajo_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.activo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.terminal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.anulado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.gestionable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.color', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.color_secundario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_orden_trabajo_tipo_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('prd_orden_trabajo_tipo_estado');
$criterio->setCriterios();

