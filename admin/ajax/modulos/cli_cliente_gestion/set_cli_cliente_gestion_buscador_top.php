<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_id', '');
$buscador_top_cli_cliente_preventista_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_preventista_id', 0);
$buscador_top_cli_cliente_comprador_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_comprador_id', 0);
$buscador_top_cli_cliente_vendedor_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_vendedor_id', 0);
$buscador_top_cli_cliente_provincia_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_provincia_id', 0);
$buscador_top_cli_cliente_localidad_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_localidad_id', 0);
$buscador_top_cli_cliente_gral_zona_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_zona_id', 0);
$buscador_top_cli_cliente_gral_tipo_personeria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_tipo_personeria_id', 0);
$buscador_top_cli_cliente_cli_tipo_cliente_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_cli_tipo_cliente_id', 0);
$buscador_top_cli_cliente_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_condicion_iva_id', 0);
$buscador_top_cli_cliente_cli_grupo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_cli_grupo_id', 0);
$buscador_top_cli_cliente_cli_categoria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_cli_categoria_id', 0);
$buscador_top_cli_cliente_estado = Gral::getVars(1, 'buscador_top_cli_cliente_estado', -1);
$buscador_top_cli_cliente_tienda = Gral::getVars(1, 'buscador_top_cli_cliente_tienda', -1);
$buscador_top_cli_cliente_gral_sucursal_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_sucursal_id', 0);
$buscador_top_cli_cliente_tipo_estado_venta_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tipo_estado_venta_id', 0);
$buscador_top_cli_cliente_tipo_gestion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tipo_gestion_id', 0);
$buscador_top_cli_cliente_periodicidad_gestion_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_periodicidad_gestion_id', 0);
$buscador_top_cli_cliente_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_tipo_documento_id', 0);
$buscador_top_cli_cliente_ruc_valido = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_ruc_valido', -1);
$buscador_top_cli_cliente_tiene_info_sifen = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tiene_info_sifen', -1);
$buscador_top_cli_cliente_tipo_estado_sifen = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_tipo_estado_sifen', '');


$criterio = new Criterio(CliCliente::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliCliente::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_cli_cliente_id != '') {
        $criterio->add('cli_cliente.id', $buscador_top_cli_cliente_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_preventista_id != 0) {
        $criterio->add('vta_preventista.id', $buscador_top_cli_cliente_preventista_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_comprador_id != 0) {
        $criterio->add('vta_comprador.id', $buscador_top_cli_cliente_comprador_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_vendedor_id != 0) {
        $criterio->add('vta_vendedor.id', $buscador_top_cli_cliente_vendedor_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_provincia_id != 0) {
        $criterio->add('geo_provincia.id', $buscador_top_cli_cliente_provincia_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_localidad_id != 0) {
        $criterio->add('geo_localidad.id', $buscador_top_cli_cliente_localidad_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_gral_zona_id != 0) {
        $criterio->add('gral_zona.id', $buscador_top_cli_cliente_gral_zona_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_gral_tipo_personeria_id != 0) {
        $criterio->add('cli_cliente.gral_tipo_personeria_id', $buscador_top_cli_cliente_gral_tipo_personeria_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_cli_tipo_cliente_id != 0) {
        $criterio->add('cli_cliente.cli_tipo_cliente_id', $buscador_top_cli_cliente_cli_tipo_cliente_id, Criterio::IGUAL);
    }    
    if ($buscador_top_cli_cliente_gral_condicion_iva_id != 0) {
        $criterio->add('cli_cliente.gral_condicion_iva_id', $buscador_top_cli_cliente_gral_condicion_iva_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_gral_tipo_documento_id != 0) {
        $criterio->add('cli_cliente.gral_tipo_documento_id', $buscador_top_cli_cliente_gral_tipo_documento_id, Criterio::IGUAL);
    }
    if($buscador_top_cli_cliente_ruc_valido != -1){
        if($buscador_top_cli_cliente_ruc_valido == 1){
            $criterio->add('cli_cliente.codigo', 'RUC-VALIDO', Criterio::IGUAL);
        }else{
            $criterio->add('cli_cliente.codigo', 'RUC-NO-VALIDO', Criterio::IGUAL);
        }
    }
    if($buscador_top_cli_cliente_tiene_info_sifen != -1){
        if($buscador_top_cli_cliente_tiene_info_sifen == 1){
            $criterio->add('cli_cliente_info_sifen.id', Criterio::VACIO, Criterio::IS_NOT_NULL);
        }else{
            $criterio->add('cli_cliente_info_sifen.id', Criterio::VACIO, Criterio::IS_NULL);
        }
    }
    
    if ($buscador_top_cli_cliente_tipo_estado_sifen != '') {
        if ($buscador_top_cli_cliente_tipo_estado_sifen == 'SIFEN-SIN-RESPUESTA') {
            $criterio->add(CliClienteInfoSifen::GEN_ATTR_CODIGO, array("'-2'"), Criterio::IN_ARRAY);
        }elseif ($buscador_top_cli_cliente_tipo_estado_sifen == 'SIFEN-RUC-NO-EXISTE') {
            $criterio->add(CliClienteInfoSifen::GEN_ATTR_CODIGO, array("'-1'"), Criterio::IN_ARRAY);
        }else{
            $criterio->add(CliClienteInfoSifen::GEN_ATTR_SIFEN_XCONTRUC_DCODESTCONS, $buscador_top_cli_cliente_tipo_estado_sifen, Criterio::IGUAL);        
        }
    }
    
    if ($buscador_top_cli_cliente_cli_grupo_id != 0) {
        $criterio->add('cli_cliente.cli_grupo_id', $buscador_top_cli_cliente_cli_grupo_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_cli_categoria_id != 0) {
        $criterio->add('cli_cliente.cli_categoria_id', $buscador_top_cli_cliente_cli_categoria_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_estado != -1) { // solo opcion SI habilitada
        $criterio->add('cli_cliente.estado', $buscador_top_cli_cliente_estado, Criterio::IGUAL);
    }    
    if ($buscador_top_cli_cliente_tienda == 1) { 
        $criterio->add('cli_cliente_tienda.id', 1, Criterio::MAYORIGUAL);
    }elseif ($buscador_top_cli_cliente_tienda == 0){
        $criterio->add('cli_cliente_tienda.id', Criterio::IS_NULL, Criterio::SINCOMPARADOR);        
    }
    if($buscador_top_cli_cliente_gral_sucursal_id != 0){
        $criterio->add('gral_sucursal.id', $buscador_top_cli_cliente_gral_sucursal_id, Criterio::IGUAL);
    }
    if($buscador_top_cli_cliente_tipo_estado_venta_id != 0){
        $criterio->add('cli_cliente_tipo_estado_venta.id', $buscador_top_cli_cliente_tipo_estado_venta_id, Criterio::IGUAL);
    }
    if($buscador_top_cli_cliente_tipo_gestion_id != 0){
        $criterio->add('cli_cliente_tipo_gestion.id', $buscador_top_cli_cliente_tipo_gestion_id, Criterio::IGUAL);
    }
    if($buscador_top_cli_cliente_periodicidad_gestion_id != 0){
        $criterio->add('cli_cliente_periodicidad_gestion.id', $buscador_top_cli_cliente_periodicidad_gestion_id, Criterio::IGUAL);
    }
    $criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
        $criterio->add('cli_cliente.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
        $criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
        $criterio->add('cli_cliente.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
        $criterio->add('cli_cliente.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
        $criterio->add('cli_cliente.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
        $criterio->add('cli_cliente.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
        $criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
        $criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
        
        $criterio->add('cli_cliente_tienda.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_vta_preventista', 'cli_cliente_vta_preventista.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'cli_cliente_vta_preventista.vta_preventista_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_vta_comprador', 'cli_cliente_vta_comprador.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'cli_cliente_vta_comprador.vta_comprador_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_vta_vendedor', 'cli_cliente_vta_vendedor.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'cli_cliente_vta_vendedor.vta_vendedor_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_zona_cli_cliente', 'gral_zona_cli_cliente.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
$criterio->addRealJoin('gral_zona', 'gral_zona.id', 'gral_zona_cli_cliente.gral_zona_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_sucursal_cli_cliente', 'gral_sucursal_cli_cliente.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_cli_cliente.gral_sucursal_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_estado_venta', 'cli_cliente_tipo_estado_venta.id', 'cli_cliente.cli_cliente_tipo_estado_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_gestion', 'cli_cliente_tipo_gestion.id', 'cli_cliente.cli_cliente_tipo_gestion_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_periodicidad_gestion', 'cli_cliente_periodicidad_gestion.id', 'cli_cliente.cli_cliente_periodicidad_gestion_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_info_sifen', 'cli_cliente_info_sifen.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');

$criterio->addRealJoin('cli_cliente_tienda', 'cli_cliente_tienda.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');

$criterio->addTabla('cli_cliente');
$criterio->setCriterios();

