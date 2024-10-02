<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(XmlLenguajeEntorno::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
XmlLenguajeEntorno::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('xml_lenguaje_entorno.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('xml_lenguaje_entorno.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_entorno.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('xml_lenguaje_entorno.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('xml_lenguaje_entorno');
$criterio->setCriterios();

