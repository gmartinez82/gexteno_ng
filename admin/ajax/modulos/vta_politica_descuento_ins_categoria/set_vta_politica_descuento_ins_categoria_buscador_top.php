<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaPoliticaDescuentoInsCategoria::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaPoliticaDescuentoInsCategoria::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_politica_descuento_ins_categoria.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_politica_descuento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_categoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_categoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_categoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_politica_descuento_ins_categoria.vta_politica_descuento_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'vta_politica_descuento_ins_categoria.ins_categoria_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_politica_descuento_ins_categoria');
$criterio->setCriterios();

