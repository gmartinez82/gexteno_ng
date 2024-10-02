<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(NotVideo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
NotVideo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('not_video.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('not_video.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_video.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_video.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_video.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_video.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_tipo_video.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('not_noticia', 'not_noticia.id', 'not_video.not_noticia_id', 'LEFT JOIN');
$criterio->addRealJoin('not_tipo_video', 'not_tipo_video.id', 'not_video.not_tipo_video_id', 'LEFT JOIN');
    
$criterio->addTabla('not_video');
$criterio->setCriterios();

