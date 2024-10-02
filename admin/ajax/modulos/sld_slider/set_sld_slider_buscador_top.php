<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_sld_slider_estado = Gral::getVars(Gral::VARS_POST, 'buscador_top_sld_slider_estado', -1);


$criterio = new Criterio(SldSlider::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
SldSlider::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_sld_slider_estado != -1) {
        $criterio->add('sld_slider.estado', $buscador_top_sld_slider_estado, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('sld_slider.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('sld_slider.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider.url', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('sld_slider.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'sld_slider.ins_insumo_id', 'LEFT JOIN');
    
$criterio->addTabla('sld_slider');
$criterio->setCriterios();

