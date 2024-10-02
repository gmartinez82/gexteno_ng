<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliSubcategoriaVtaDescuentoFinanciero::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliSubcategoriaVtaDescuentoFinanciero::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_subcategoria_vta_descuento_financiero.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_subcategoria_vta_descuento_financiero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria_vta_descuento_financiero.predeterminado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria_vta_descuento_financiero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria_vta_descuento_financiero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria_vta_descuento_financiero.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_descuento_financiero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_descuento_financiero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_descuento_financiero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_subcategoria_vta_descuento_financiero.cli_subcategoria_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'cli_subcategoria_vta_descuento_financiero.vta_descuento_financiero_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_subcategoria_vta_descuento_financiero');
$criterio->setCriterios();

