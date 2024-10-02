<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(NovNovedadArchivo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
NovNovedadArchivo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('nov_novedad_archivo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('nov_novedad_archivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad_archivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad_archivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad_archivo.archivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad_archivo.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad_archivo.tipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('nov_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('nov_novedad', 'nov_novedad.id', 'nov_novedad_archivo.nov_novedad_id', 'LEFT JOIN');
    
$criterio->addTabla('nov_novedad_archivo');
$criterio->setCriterios();

