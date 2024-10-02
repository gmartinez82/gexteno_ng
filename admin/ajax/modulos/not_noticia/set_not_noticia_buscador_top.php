<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(NotNoticia::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
NotNoticia::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('not_noticia.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('not_noticia.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.copete', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.cuerpo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.destacado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_categoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_categoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_categoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('not_categoria', 'not_categoria.id', 'not_noticia.not_categoria_id', 'LEFT JOIN');
    
$criterio->addTabla('not_noticia');
$criterio->setCriterios();

