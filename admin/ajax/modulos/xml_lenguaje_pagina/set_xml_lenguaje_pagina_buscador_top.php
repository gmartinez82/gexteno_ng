<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(XmlLenguajePagina::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
XmlLenguajePagina::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('xml_lenguaje_pagina.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('xml_lenguaje_pagina.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_pagina.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_pagina.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('xml_lenguaje_pagina');
$criterio->setCriterios();

