<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VehCocheImagen::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VehCocheImagen::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('veh_coche_imagen.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('veh_coche_imagen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche_imagen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche_imagen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche_imagen.archivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche_imagen.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche_imagen.tipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche_imagen.alto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche_imagen.ancho', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('veh_coche.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('veh_coche', 'veh_coche.id', 'veh_coche_imagen.veh_coche_id', 'LEFT JOIN');
    
$criterio->addTabla('veh_coche_imagen');
$criterio->setCriterios();

