<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaComision::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_comision.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_comision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_comision.vta_preventista_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_comision.vta_comprador_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_comision.vta_vendedor_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comision_tipo_estado', 'vta_comision_tipo_estado.id', 'vta_comision.vta_comision_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_comision');
$criterio->setCriterios();

