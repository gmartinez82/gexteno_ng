<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(XmlLenguajeTraduccion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
XmlLenguajeTraduccion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('xml_lenguaje_traduccion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('xml_lenguaje_traduccion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_traduccion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_traduccion.traduccion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_traduccion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_traduccion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_lenguaje.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_lenguaje.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_lenguaje.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_codigo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_codigo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_codigo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_lenguaje', 'gral_lenguaje.id', 'xml_lenguaje_traduccion.gral_lenguaje_id', 'LEFT JOIN');
$criterio->addRealJoin('xml_lenguaje_codigo', 'xml_lenguaje_codigo.id', 'xml_lenguaje_traduccion.xml_lenguaje_codigo_id', 'LEFT JOIN');
    
$criterio->addTabla('xml_lenguaje_traduccion');
$criterio->setCriterios();

