<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaRemitoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaRemitoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_remito_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_remito_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.cantidad_bultos', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.costo_envio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.guia', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.nota_interna', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'vta_remito_estado.vta_remito_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito_estado.vta_remito_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_remito_estado.gral_empresa_transportadora_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_remito_estado');
$criterio->setCriterios();

