<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliCentroPedido::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliCentroPedido::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_centro_pedido.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_centro_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_pedido.domicilio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_pedido.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_pedido.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_pedido.responsable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_pedido.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_centro_pedido.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'cli_centro_pedido.vta_comprador_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_centro_pedido.geo_localidad_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_centro_pedido');
$criterio->setCriterios();

