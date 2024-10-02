<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliClienteVtaPreventista::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliClienteVtaPreventista::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_cliente_vta_preventista.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_cliente_vta_preventista.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_vta_preventista.predeterminado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_vta_preventista.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_vta_preventista.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_vta_preventista.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_preventista.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_vta_preventista.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'cli_cliente_vta_preventista.vta_preventista_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_cliente_vta_preventista');
$criterio->setCriterios();

