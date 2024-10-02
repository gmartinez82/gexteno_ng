<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AppMovModulo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AppMovModulo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('app_mov_modulo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('app_mov_modulo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('app_mov_modulo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('app_mov_modulo');
$criterio->setCriterios();

