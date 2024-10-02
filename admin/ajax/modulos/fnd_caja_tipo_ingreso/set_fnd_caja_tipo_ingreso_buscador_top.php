<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndCajaTipoIngreso::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndCajaTipoIngreso::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_caja_tipo_ingreso.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_caja_tipo_ingreso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_ingreso.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_ingreso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_caja_tipo_ingreso.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('fnd_caja_tipo_ingreso');
$criterio->setCriterios();

