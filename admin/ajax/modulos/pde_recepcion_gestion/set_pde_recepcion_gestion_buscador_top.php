<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$txt_buscador = Gral::getVars(1, 'txt_buscador', 0);
$cmb_filtro_pde_centro_pedido_id = Gral::getVars(1, 'cmb_filtro_pde_centro_pedido_id', 0);
$cmb_filtro_prv_proveedor_id = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_ins_etiqueta_id = Gral::getVars(1, 'cmb_filtro_ins_etiqueta_id', 0);
$cmb_filtro_ins_categoria_id = Gral::getVars(1, 'cmb_filtro_ins_categoria_id');
$cmb_filtro_ins_insumo_id = Gral::getVars(1, 'cmb_filtro_ins_insumo_id', 0);
$cmb_filtro_pde_tipo_recepcion_id = Gral::getVars(1, 'cmb_filtro_pde_tipo_recepcion_id', 0);
$cmb_filtro_pde_recepcion_tipo_estado_id = Gral::getVars(1, 'cmb_filtro_pde_recepcion_tipo_estado_id', 0);
$cmb_filtro_pde_centro_recepcion_id = Gral::getVars(1, 'cmb_filtro_pde_centro_recepcion_id', 0);

$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);
$criterio->addTabla('pde_recepcion');


$criterio->addInicioSubconsulta();
$criterio->add('pde_oc.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN, false, '');
/*
if(!$user->getAbsoluto()){
    $criterio->add('pde_recepcion_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
    $criterio->add('pde_recepcion_destinatario.estado', 1, Criterio::IGUAL);
}
*/

if($cmb_filtro_pde_centro_pedido_id != 0){
    $criterio->add('pde_centro_pedido.id', $cmb_filtro_pde_centro_pedido_id, Criterio::IGUAL);
}
if($cmb_filtro_prv_proveedor_id != 0){
    $criterio->add('prv_proveedor.id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if($cmb_filtro_ins_etiqueta_id != 0){
    $criterio->add('ins_etiqueta.id', $cmb_filtro_ins_etiqueta_id, Criterio::IGUAL);
}
if($cmb_filtro_ins_categoria_id != 0){
    $criterio->add('ins_categoria.id', $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
}
if($cmb_filtro_ins_insumo_id != 0){
    $criterio->add('pde_recepcion.ins_insumo_id', $cmb_filtro_ins_insumo_id, Criterio::IGUAL);
}
if($cmb_filtro_pde_tipo_recepcion_id != 0){
    $criterio->add('pde_recepcion.pde_tipo_recepcion_id', $cmb_filtro_pde_tipo_recepcion_id, Criterio::IGUAL);
}
if($cmb_filtro_pde_recepcion_tipo_estado_id != 0){
    $criterio->add('pde_recepcion_estado.pde_recepcion_tipo_estado_id', $cmb_filtro_pde_recepcion_tipo_estado_id, Criterio::IGUAL);
}
if($cmb_filtro_pde_centro_recepcion_id != 0){
    $criterio->add('pde_recepcion.pde_centro_recepcion_id', $cmb_filtro_pde_centro_recepcion_id, Criterio::IGUAL);
}
$criterio->addFinSubconsulta();


$criterio->addInicioSubconsulta();
$criterio->add('pde_recepcion.codigo', $txt_buscador, Criterio::LIKE);
$criterio->add('pde_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.nro_comprobante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('ins_marca.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('ins_marca.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('ins_marca.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo_barra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo_barra_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->addFinSubconsulta();

$criterio->addRealJoin('pde_recepcion_destinatario', 'pde_recepcion_destinatario.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_recepcion_destinatario.us_usuario_id', 'LEFT JOIN');

$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion.pde_centro_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recepcion.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_recepcion.pde_pedido_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id', 'LEFT JOIN');
//$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'pde_recepcion.ins_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_recepcion.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc.pde_centro_pedido_id', 'LEFT JOIN');

$criterio->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');

$criterio->addTabla('pde_recepcion');
$criterio->setCriterios();
?>

