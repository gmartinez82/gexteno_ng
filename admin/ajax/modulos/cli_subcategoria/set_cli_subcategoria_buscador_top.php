<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliSubcategoria::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliSubcategoria::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_subcategoria.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_subcategoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.limite_ctacte_importe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.limite_ctacte_dias', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_subcategoria.cli_categoria_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_subcategoria');
$criterio->setCriterios();

