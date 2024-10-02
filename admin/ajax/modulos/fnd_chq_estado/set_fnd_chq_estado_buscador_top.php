<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndChqEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndChqEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_chq_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_chq_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_estado.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_estado.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_estado.endosado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_cheque.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('fnd_chq_cheque', 'fnd_chq_cheque.id', 'fnd_chq_estado.fnd_chq_cheque_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_estado.fnd_chq_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_chq_estado.fnd_caja_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_chq_estado.gral_caja_id', 'LEFT JOIN');
    
$criterio->addTabla('fnd_chq_estado');
$criterio->setCriterios();

