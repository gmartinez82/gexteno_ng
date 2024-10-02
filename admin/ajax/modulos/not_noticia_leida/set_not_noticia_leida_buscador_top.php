<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(NotNoticiaLeida::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
NotNoticiaLeida::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('not_noticia_leida.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('not_noticia_leida.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_leida.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_leida.sesion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_leida.numero_ip', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia_leida.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('not_noticia.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('not_noticia', 'not_noticia.id', 'not_noticia_leida.not_noticia_id', 'LEFT JOIN');
    
$criterio->addTabla('not_noticia_leida');
$criterio->setCriterios();

