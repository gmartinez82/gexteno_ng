<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador');

$criterio = new Criterio(NovNovedad::SES_CRITERIOS);
$criterio->setAmbiguo(true);

$criterio->add('nov_novedad.id', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.descripcion_breve', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('nov_novedad.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.descripcion_extendida', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.orden', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.creado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.modificado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.modificado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->addTabla('nov_novedad');
$criterio->setCriterios();
?>

