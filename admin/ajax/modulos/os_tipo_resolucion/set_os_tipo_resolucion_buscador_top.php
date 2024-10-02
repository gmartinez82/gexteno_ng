<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OsTipoResolucion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OsTipoResolucion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('os_tipo_resolucion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('os_tipo_resolucion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_resolucion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_resolucion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_resolucion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('os_tipo_resolucion');
$criterio->setCriterios();

