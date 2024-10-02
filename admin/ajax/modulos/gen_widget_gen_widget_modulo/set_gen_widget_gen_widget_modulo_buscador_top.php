<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GenWidgetGenWidgetModulo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GenWidgetGenWidgetModulo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gen_widget_gen_widget_modulo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gen_widget_gen_widget_modulo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_gen_widget_modulo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_gen_widget_modulo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_gen_widget_modulo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_modulo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_modulo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_widget_modulo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gen_widget', 'gen_widget.id', 'gen_widget_gen_widget_modulo.gen_widget_id', 'LEFT JOIN');
$criterio->addRealJoin('gen_widget_modulo', 'gen_widget_modulo.id', 'gen_widget_gen_widget_modulo.gen_widget_modulo_id', 'LEFT JOIN');
    
$criterio->addTabla('gen_widget_gen_widget_modulo');
$criterio->setCriterios();

