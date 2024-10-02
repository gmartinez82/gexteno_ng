<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(NovNovedadLeido::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
NovNovedadLeido::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('nov_novedad_leido.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('nov_novedad_leido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad_leido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad_leido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('nov_novedad', 'nov_novedad.id', 'nov_novedad_leido.nov_novedad_id', 'LEFT JOIN');
$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'nov_novedad_leido.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('nov_novedad_leido');
$criterio->setCriterios();

