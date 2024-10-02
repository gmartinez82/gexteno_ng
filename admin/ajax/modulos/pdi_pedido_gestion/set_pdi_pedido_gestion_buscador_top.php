<?php

include "_autoload.php";
$user = UsUsuario::autenticado();

$txt_buscador = Gral::getVars(1, 'txt_buscador', 0);
$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");
$cmb_filtro_pan_panol_origen = Gral::getVars(1, 'cmb_filtro_pan_panol_origen');
$cmb_filtro_pan_panol_destino = Gral::getVars(1, 'cmb_filtro_pan_panol_destino');
//$cmb_filtro_veh_coche_id = Gral::getVars(1, 'cmb_filtro_veh_coche_id');
$cmb_filtro_ins_categoria_id = Gral::getVars(1, 'cmb_filtro_ins_categoria_id');
$cmb_filtro_ins_insumo_id = Gral::getVars(1, 'cmb_filtro_ins_insumo_id');
$cmb_filtro_pdi_estado_id = Gral::getVars(1, 'cmb_filtro_pdi_estado_id', 0);
$cmb_filtro_activo = Gral::getVars(1, 'cmb_filtro_activo', -1);
$cmb_filtro_destacado = Gral::getVars(1, 'cmb_filtro_destacado', -1);
$cmb_filtro_leido = Gral::getVars(1, 'cmb_filtro_leido', -1);
$cmb_filtro_requiere_atencion = Gral::getVars(1, 'cmb_filtro_requiere_atencion', -1);
$cmb_filtro_pdi_tipo_origen_id = Gral::getVars(1, 'cmb_filtro_pdi_tipo_origen_id', 0);

// se inicializan los galpons que el usuario puede gestionar
echo $string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);
$criterio->addTabla('pdi_pedido');

$criterio->addInicioSubconsulta();
/*
  if(!$user->getAbsoluto()){
  $criterio->add('pdi_pedido_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL , false, '');
  $criterio->add('pdi_pedido_destinatario.estado', 1, Criterio::IGUAL);

  $criterio->add('pdi_estado.actual', 1, Criterio::IGUAL);
  }else{
  $criterio->add('pdi_estado.actual', 1, Criterio::IGUAL, false, '');
  }

 */
//$criterio->add('pdi_estado.actual', 1, Criterio::IGUAL, false, '');
$criterio->add('pdi_tipo_estado.gestionable', 1, Criterio::IGUAL, false, '');
$criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);

//if (!$user->getAbsoluto()) {
    $criterio->addInicioSubconsulta();
    $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
    $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
//}

if ($txt_filtro_desde != "") {
    $criterio->add('pdi_pedido.creado::DATE', Gral::getFechaToDB($txt_filtro_desde), Criterio::MAYORIGUAL);
}
if ($txt_filtro_hasta != "") {
    $criterio->add('pdi_pedido.creado::DATE', Gral::getFechaToDB($txt_filtro_hasta), Criterio::MENORIGUAL);
}
    
    
if ($cmb_filtro_pan_panol_origen != 0) {
    $criterio->add('pdi_pedido.pan_panol_origen', $cmb_filtro_pan_panol_origen, Criterio::IGUAL);
}
if ($cmb_filtro_pan_panol_destino != 0) {
    $criterio->add('pdi_pedido.pan_panol_destino', $cmb_filtro_pan_panol_destino, Criterio::IGUAL);
}

if ($cmb_filtro_ins_categoria_id != 0) {
    $ins_categoria = InsCategoria::getOxId($cmb_filtro_ins_categoria_id);
    if($ins_categoria){
        //$criterio->add('ins_categoria.id', $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
        $criterio->add('ins_categoria.codigo', $ins_categoria->getCodigo(), Criterio::LIKE);
    }
}
if ($cmb_filtro_ins_insumo_id != 0) {
    $criterio->add('pdi_pedido.ins_insumo_id', $cmb_filtro_ins_insumo_id, Criterio::IGUAL);
}
if ($cmb_filtro_pdi_estado_id != 0) {
    $criterio->add('pdi_tipo_estado.id', $cmb_filtro_pdi_estado_id, Criterio::IGUAL);
}
if ($cmb_filtro_activo != -1) {
    $criterio->add('pdi_tipo_estado.activo', $cmb_filtro_activo, Criterio::IGUAL);
}
if ($cmb_filtro_destacado != -1) {
    $criterio->add('pdi_pedido_destinatario.destacado', $cmb_filtro_destacado, Criterio::IGUAL);
}
if ($cmb_filtro_leido != -1) {
    $criterio->add('pdi_pedido_destinatario.leido', $cmb_filtro_leido, Criterio::IGUAL);
}
if ($cmb_filtro_requiere_atencion != -1) {
    $criterio->add('pdi_tipo_origen.requiere_atencion', $cmb_filtro_requiere_atencion, Criterio::IGUAL);
}
if ($cmb_filtro_pdi_tipo_origen_id != 0) {
    $criterio->add('pdi_pedido.pdi_tipo_origen_id', $cmb_filtro_pdi_tipo_origen_id, Criterio::IGUAL);
}
$criterio->addFinSubconsulta();

if ($txt_buscador !== 0) {
    $criterio->addInicioSubconsulta();
    $criterio->add('pdi_pedido.codigo', $txt_buscador, Criterio::LIKE);
    $criterio->add('pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pdi_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pdi_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->add('pdi_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_barra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_barra_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('pdi_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_stock_tipo_movimiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pdi_pedido.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.pdi_pedido_id', 'pdi_pedido.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_movimiento.pan_panol_id', 'LEFT JOIN');
//$criterio->addRealJoin('pdi_pedido_destinatario', 'pdi_pedido_destinatario.pdi_pedido_id', 'pdi_pedido.id', 'LEFT JOIN');
//$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pdi_pedido_destinatario.us_usuario_id', 'LEFT JOIN');
//$criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id', 'LEFT JOIN');

$criterio->setCriterios();
?>
