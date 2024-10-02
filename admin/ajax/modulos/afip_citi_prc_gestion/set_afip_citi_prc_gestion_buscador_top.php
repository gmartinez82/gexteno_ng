<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador');

$criterio = new Criterio(AfipCitiPrc::SES_CRITERIOS);
$criterio->setAmbiguo(true);

$criterio->add('afip_citi_prc.id', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.anio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.orden', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.creado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.modificado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.modificado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'afip_citi_prc.gral_empresa_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'afip_citi_prc.gral_mes_id', 'LEFT JOIN');
$criterio->addTabla('afip_citi_prc');
$criterio->setCriterios();
?>

