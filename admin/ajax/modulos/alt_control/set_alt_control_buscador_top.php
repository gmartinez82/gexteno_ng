<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AltControl::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AltControl::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('alt_control.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('alt_control.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('alt_control.control', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('alt_control');
$criterio->setCriterios();

