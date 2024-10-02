<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaPresupuestoCancelacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaPresupuestoCancelacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_presupuesto_cancelacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_presupuesto_cancelacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_cancelacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_cancelacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_cancelacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_presupuesto_cancelacion');
$criterio->setCriterios();

