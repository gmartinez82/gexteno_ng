<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaRemito::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_remito.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_remito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.persona_documento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.persona_email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.fecha', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.en_domicilio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_remito_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_remito.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_remito.gral_tipo_documento_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_remito.vta_presupuesto_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_remito.cli_centro_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_remito.gral_sucursal_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_remito');
$criterio->setCriterios();

