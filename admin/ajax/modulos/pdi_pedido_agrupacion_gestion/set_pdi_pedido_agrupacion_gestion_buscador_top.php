<?php

include "_autoload.php";
$user = UsUsuario::autenticado();

$txt_buscador = Gral::getVars(Gral::VARS_POST, 'txt_buscador', 0);

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', '', Gral::TIPO_STRING);
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', '', Gral::TIPO_STRING);
$cmb_filtro_pan_panol_origen = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pan_panol_origen', 0, Gral::TIPO_INTEGER);
$cmb_filtro_pan_panol_destino = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pan_panol_destino', 0, Gral::TIPO_INTEGER);
$cmb_filtro_pdi_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pdi_estado_id', 0, Gral::TIPO_INTEGER);
$cmb_filtro_pdi_pedido_agrupacion_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'cmb_filtro_pdi_pedido_agrupacion_tipo_estado_id', 0, Gral::TIPO_INTEGER);


// se inicializan los galpons que el usuario puede gestionar
$string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdiPedidoAgrupacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);
$criterio->addTabla(PdiPedidoAgrupacion::GEN_TABLA);

$criterio->addInicioSubconsulta();
$criterio->add('', 'true', '', false, '');

if ($txt_filtro_desde != "") {
    $criterio->add('pdi_pedido_agrupacion.creado::DATE', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != "") {
    $criterio->add('pdi_pedido_agrupacion.creado::DATE', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}

if ($cmb_filtro_pan_panol_origen != 0) {
    $criterio->add(PdiPedidoAgrupacion::GEN_ATTR_PAN_PANOL_ORIGEN, $cmb_filtro_pan_panol_origen, Criterio::IGUAL);
}

if ($cmb_filtro_pan_panol_destino != 0) {
    $criterio->add(PdiPedidoAgrupacion::GEN_ATTR_PAN_PANOL_DESTINO, $cmb_filtro_pan_panol_destino, Criterio::IGUAL);
}

if ($cmb_filtro_pdi_estado_id != 0) {
    $criterio->add(PdiTipoEstado::GEN_ATTR_ID, $cmb_filtro_pdi_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_pdi_pedido_agrupacion_tipo_estado_id != 0) {
    $criterio->add(PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ID, $cmb_filtro_pdi_pedido_agrupacion_tipo_estado_id, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

$criterio->addInicioSubconsulta();
$criterio->add(PdiPedidoAgrupacion::GEN_ATTR_PAN_PANOL_ORIGEN, $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
$criterio->add(PdiPedidoAgrupacion::GEN_ATTR_PAN_PANOL_DESTINO, $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_OR);
$criterio->addFinSubconsulta();

if ($txt_buscador !== 0) {
    $criterio->addInicioSubconsulta();
    $criterio->add(PdiPedidoAgrupacion::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE);
    $criterio->add(InsInsumo::GEN_ATTR_CLAVES, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PdiTipoEstado::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, PdiPedidoAgrupacion::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdiPedido::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PAN_PANOL_ORIGEN, 'LEFT JOIN');
//$criterio->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PAN_PANOL_DESTINO, 'LEFT JOIN');
$criterio->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdiPedidoAgrupacionTipoEstado::GEN_TABLA, PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ID, PdiPedidoAgrupacion::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID, 'LEFT JOIN');

$criterio->setCriterios();
?>
