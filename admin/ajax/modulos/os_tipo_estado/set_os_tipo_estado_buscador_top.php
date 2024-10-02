<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OsTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OsTipoEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('os_tipo_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('os_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('os_tipo_estado');
$criterio->setCriterios();

