<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliClienteInfoSifen::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
CliClienteInfoSifen::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('cli_cliente_info_sifen.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_cliente_info_sifen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.sifen_dcodres', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.sifen_dmsgres', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_druccons', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_drazcons', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_dcodestcons', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_ddesestcons', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_drucfactelec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_info_sifen.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_info_sifen.cli_cliente_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_cliente_info_sifen');
$criterio->setCriterios();

