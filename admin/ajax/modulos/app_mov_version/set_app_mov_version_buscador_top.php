<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AppMovVersion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AppMovVersion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('app_mov_version.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('app_mov_version.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.version', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.version_minima', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_version.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('app_mov_modulo', 'app_mov_modulo.id', 'app_mov_version.app_mov_modulo_id', 'LEFT JOIN');
    
$criterio->addTabla('app_mov_version');
$criterio->setCriterios();

