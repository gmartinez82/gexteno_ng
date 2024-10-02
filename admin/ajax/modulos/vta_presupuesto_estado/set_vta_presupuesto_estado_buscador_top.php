<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaPresupuestoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaPresupuestoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_presupuesto_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_presupuesto_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_estado.vta_presupuesto_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto_estado.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_presupuesto_estado');
$criterio->setCriterios();

