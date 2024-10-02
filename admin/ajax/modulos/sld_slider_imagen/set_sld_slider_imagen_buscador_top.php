<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(SldSliderImagen::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
SldSliderImagen::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('sld_slider_imagen.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('sld_slider_imagen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider_imagen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider_imagen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider_imagen.archivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider_imagen.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider_imagen.tipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider_imagen.alto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider_imagen.ancho', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_tipo_imagen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_tipo_imagen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_tipo_imagen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('sld_slider', 'sld_slider.id', 'sld_slider_imagen.sld_slider_id', 'LEFT JOIN');
$criterio->addRealJoin('sld_tipo_imagen', 'sld_tipo_imagen.id', 'sld_slider_imagen.sld_tipo_imagen_id', 'LEFT JOIN');
    
$criterio->addTabla('sld_slider_imagen');
$criterio->setCriterios();

