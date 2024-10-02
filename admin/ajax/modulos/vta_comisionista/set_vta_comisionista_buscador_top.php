<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador');

$criterio = new Criterio(VtaComisionista::SES_CRITERIOS);
$criterio->setAmbiguo(true);

$criterio->add('vta_comisionista.id', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.orden', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.creado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.modificado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comisionista.modificado_por', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->addTabla('vta_comisionista');
$criterio->setCriterios();
?>

