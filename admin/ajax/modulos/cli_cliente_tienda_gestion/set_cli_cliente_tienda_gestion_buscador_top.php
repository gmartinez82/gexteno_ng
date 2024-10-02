<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_cli_cliente_tienda_provincia_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tienda_provincia_id', 0);
$buscador_top_cli_cliente_tienda_localidad_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tienda_localidad_id', 0);
$buscador_top_cli_cliente_tienda_cli_categoria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tienda_cli_categoria_id', 0);
$buscador_top_cli_cliente_tienda_estado = Gral::getVars(1, 'buscador_top_cli_cliente_tienda_estado', -1);
$buscador_top_cli_cliente_tienda_verificar = Gral::getVars(1, 'buscador_top_cli_cliente_tienda_verificar', -1);
$buscador_top_cli_cliente_tienda_gral_tipo_personeria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tienda_gral_tipo_personeria_id', 0);
$buscador_top_cli_cliente_tienda_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tienda_gral_condicion_iva_id', 0);


$criterio = new Criterio(CliClienteTienda::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliClienteTienda::setAplicarFiltrosDeAlcance($criterio);


$criterio->addInicioSubconsulta();
$criterio->addTrueInicialEnWhere();

if ($buscador_top_cli_cliente_tienda_provincia_id != 0) {
    $criterio->add('geo_provincia.id', $buscador_top_cli_cliente_tienda_provincia_id, Criterio::IGUAL);
}

if ($buscador_top_cli_cliente_tienda_localidad_id != 0) {
    $criterio->add('geo_localidad.id', $buscador_top_cli_cliente_tienda_localidad_id, Criterio::IGUAL);
}

if ($buscador_top_cli_cliente_tienda_cli_categoria_id != 0) {
    $criterio->add('cli_cliente.cli_categoria_id', $buscador_top_cli_cliente_tienda_cli_categoria_id, Criterio::IGUAL);
}

if ($buscador_top_cli_cliente_tienda_estado != -1) { // solo opcion SI habilitada
    $criterio->add('cli_cliente_tienda.estado', $buscador_top_cli_cliente_tienda_estado, Criterio::IGUAL);
}

if ($buscador_top_cli_cliente_tienda_verificar != -1) { // solo opcion SI habilitada
    $criterio->add('cli_cliente_tienda.verificar', $buscador_top_cli_cliente_tienda_verificar, Criterio::IGUAL);
}

if ($buscador_top_cli_cliente_tienda_gral_tipo_personeria_id != 0) {
    $criterio->add('cli_cliente_tienda.gral_tipo_personeria_id', $buscador_top_cli_cliente_tienda_gral_tipo_personeria_id, Criterio::IGUAL);
}

if ($buscador_top_cli_cliente_tienda_gral_condicion_iva_id != 0) {
    $criterio->add('cli_cliente_tienda.gral_condicion_iva_id', $buscador_top_cli_cliente_tienda_gral_condicion_iva_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if($txt_buscador != '-----')
{
    $criterio->addInicioSubconsulta();

    $criterio->add('cli_cliente_tienda.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('cli_cliente_tienda.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.telefono_whatsapp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.codigo_postal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.usuario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.verificar', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente_tienda.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_tipo_personeria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_tipo_personeria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_tipo_personeria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_condicion_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_condicion_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_condicion_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_tipo_documento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_tipo_documento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('gral_tipo_documento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_tienda.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente_tienda.gral_tipo_personeria_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente_tienda.gral_condicion_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente_tienda.gral_tipo_documento_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente_tienda.geo_localidad_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_cliente_tienda');
$criterio->setCriterios();

