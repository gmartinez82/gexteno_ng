<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndChqTipoEmisorFndChqTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndChqTipoEmisorFndChqTipoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_emisor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_chq_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('fnd_chq_tipo_emisor', 'fnd_chq_tipo_emisor.id', 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id', 'LEFT JOIN');
$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('fnd_chq_tipo_emisor_fnd_chq_tipo_estado');
$criterio->setCriterios();

