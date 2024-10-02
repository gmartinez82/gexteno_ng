<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliClienteGralFpAgrupacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliClienteGralFpAgrupacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_cliente_gral_fp_agrupacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_cliente_gral_fp_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_gral_fp_agrupacion.predeterminado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_gral_fp_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_gral_fp_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_gral_fp_agrupacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_gral_fp_agrupacion.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_fp_agrupacion', 'gral_fp_agrupacion.id', 'cli_cliente_gral_fp_agrupacion.gral_fp_agrupacion_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_cliente_gral_fp_agrupacion');
$criterio->setCriterios();

