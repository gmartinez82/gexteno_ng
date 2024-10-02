<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GenWidgetSector::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GenWidgetSector::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gen_widget_sector.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gen_widget_sector.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_sector.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_sector.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_sector.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('gen_widget_sector');
$criterio->setCriterios();

