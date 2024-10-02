<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$txt_buscador = Gral::getVars(1, 'txt_buscador', 0);
$cmb_filtro_pde_centro_pedido_id = Gral::getVars(1, 'cmb_filtro_pde_centro_pedido_id', 0);
$cmb_filtro_prv_proveedor_id = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id');
$cmb_filtro_ins_categoria_id = Gral::getVars(1, 'cmb_filtro_ins_categoria_id');
$cmb_filtro_ins_insumo_id = Gral::getVars(1, 'cmb_filtro_ins_insumo_id');
$cmb_filtro_pde_oc_agrupacion_estado_id = Gral::getVars(1, 'cmb_filtro_pde_oc_agrupacion_estado_id', 0);
$cmb_filtro_destacado = Gral::getVars(1, 'cmb_filtro_destacado', -1);

// se inicializan los centros de pedido que el usuario puede gestionar
$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
$criterio->addDistinct(true);
$criterio->addTabla('pde_oc_agrupacion');

$criterio->addInicioSubconsulta();
$criterio->add('', 'true', '', false, '');
//$criterio->add('pde_oc_agrupacion.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN, false, '');

if($cmb_filtro_pde_centro_pedido_id != 0){
    $criterio->add('pde_centro_pedido.id', $cmb_filtro_pde_centro_pedido_id, Criterio::IGUAL);
}
if($cmb_filtro_prv_proveedor_id != 0){
    $criterio->add('prv_proveedor.id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if($cmb_filtro_ins_categoria_id != 0){
    $criterio->add('ins_categoria.id', $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
}
if($cmb_filtro_ins_insumo_id != 0){
    $criterio->add('pde_oc_agrupacion.ins_insumo_id', $cmb_filtro_ins_insumo_id, Criterio::IGUAL);
}
if($cmb_filtro_pde_oc_agrupacion_estado_id != 0){
    $criterio->add('pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id', $cmb_filtro_pde_oc_agrupacion_estado_id, Criterio::IGUAL);
}
if($cmb_filtro_destacado != -1){
    $criterio->add('pde_oc_agrupacion_destinatario.destacado', $cmb_filtro_destacado, Criterio::IGUAL);
}
$criterio->addFinSubconsulta();

$criterio->addInicioSubconsulta();
$criterio->add('pde_oc_agrupacion.codigo', $txt_buscador, Criterio::LIKE);
$criterio->add('pde_oc_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

$criterio->add('ins_insumo.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->addFinSubconsulta();


$criterio->addRealJoin('pde_oc_agrupacion_tipo_estado', 'pde_oc_agrupacion_tipo_estado.id', 'pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_oc', 'pde_oc.pde_oc_agrupacion_id', 'pde_oc_agrupacion.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc_agrupacion.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc_agrupacion.pde_centro_pedido_id', 'LEFT JOIN');
$criterio->setCriterios();
?>
