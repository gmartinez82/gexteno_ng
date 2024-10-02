<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(XmlLenguajeCodigo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
XmlLenguajeCodigo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('xml_lenguaje_codigo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('xml_lenguaje_codigo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_codigo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_codigo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_codigo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_tipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_tipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_tipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_pagina.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_pagina.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_pagina.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_entorno.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_entorno.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_entorno.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('xml_lenguaje_tipo', 'xml_lenguaje_tipo.id', 'xml_lenguaje_codigo.xml_lenguaje_tipo_id', 'LEFT JOIN');
$criterio->addRealJoin('xml_lenguaje_pagina', 'xml_lenguaje_pagina.id', 'xml_lenguaje_codigo.xml_lenguaje_pagina_id', 'LEFT JOIN');
$criterio->addRealJoin('xml_lenguaje_entorno', 'xml_lenguaje_entorno.id', 'xml_lenguaje_codigo.xml_lenguaje_entorno_id', 'LEFT JOIN');
    
$criterio->addTabla('xml_lenguaje_codigo');
$criterio->setCriterios();

