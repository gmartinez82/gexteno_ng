<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(NotNoticiaArchivo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
NotNoticiaArchivo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('not_noticia_archivo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('not_noticia_archivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_archivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_archivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_archivo.archivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_archivo.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_archivo.tipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_archivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_archivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_archivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('not_noticia', 'not_noticia.id', 'not_noticia_archivo.not_noticia_id', 'LEFT JOIN');
$criterio->addRealJoin('not_tipo_archivo', 'not_tipo_archivo.id', 'not_noticia_archivo.not_tipo_archivo_id', 'LEFT JOIN');
    
$criterio->addTabla('not_noticia_archivo');
$criterio->setCriterios();

