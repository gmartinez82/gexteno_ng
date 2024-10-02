<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(FndCajeroGralCaja::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
FndCajeroGralCaja::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('fnd_cajero_gral_caja.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('fnd_cajero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('fnd_cajero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_caja.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('fnd_cajero', 'fnd_cajero.id', 'fnd_cajero_gral_caja.fnd_cajero_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_cajero_gral_caja.gral_caja_id', 'LEFT JOIN');
    
$criterio->addTabla('fnd_cajero_gral_caja');
$criterio->setCriterios();

