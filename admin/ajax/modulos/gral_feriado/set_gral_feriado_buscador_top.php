<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralFeriado::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralFeriado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_feriado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_feriado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_feriado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_feriado.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_feriado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('gral_feriado');
$criterio->setCriterios();

