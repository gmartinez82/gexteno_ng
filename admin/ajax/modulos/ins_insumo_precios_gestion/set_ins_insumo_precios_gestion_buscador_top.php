<?php

include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', 0);

$txt_filtro_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_desde', "");
$txt_filtro_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_hasta', "");
$cmb_filtro_prv_proveedor_id = Gral::getVars(1, 'cmb_filtro_prv_proveedor_id', 0);
$cmb_filtro_ins_tipo_insumo_id = Gral::getVars(1, 'cmb_filtro_ins_tipo_insumo_id', 0);
$cmb_filtro_ins_etiqueta_id = Gral::getVars(1, 'cmb_filtro_ins_etiqueta_id', 0);
$cmb_filtro_ins_categoria_id = Gral::getVars(1, 'cmb_filtro_ins_categoria_id', 0);
$cmb_filtro_ins_marca_id = Gral::getVars(1, 'cmb_filtro_ins_marca_id', 0);

$cmb_filtro_iva_incluido = Gral::getVars(1, 'cmb_filtro_iva_incluido', 0);
$txt_filtro_costo_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_costo_desde', "");
$txt_filtro_costo_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_costo_hasta', "");
$cmb_filtro_venta_web = Gral::getVars(1, 'cmb_filtro_venta_web', -1);
$cmb_filtro_porcentaje_descuento = Gral::getVars(1, 'cmb_filtro_porcentaje_descuento', -1);
$cmb_filtro_porcentaje_incremento = Gral::getVars(1, 'cmb_filtro_porcentaje_incremento', -1);
$cmb_filtro_importe_manual = Gral::getVars(1, 'cmb_filtro_importe_manual', -1);
$cmb_filtro_ins_tipo_lista_precio_id = Gral::getVars(1, 'cmb_filtro_ins_tipo_lista_precio_id', 0);
$cmb_filtro_ordenar_por = Gral::getVars(1, 'cmb_filtro_ordenar_por', '');

Gral::setSes(DbConfig::CONFIG_SISTEMA_CODIGO.DbConfig::CONFIG_CONF_PROYECTO_MIN.'INS_INSUMO_PRECIOS_GESTION_FILTRO_IVA_INCLUIDO', $cmb_filtro_iva_incluido);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
//$criterio->addDistinct(false);
$criterio->setAmbiguo(true);

if ($cmb_filtro_ins_tipo_lista_precio_id != 0) {
    $criterio->add('ins_tipo_lista_precio.id', $cmb_filtro_ins_tipo_lista_precio_id, Criterio::IGUAL, 'ins_tipo_lista_precio_id', Criterio::_OR);
} else {
    $ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
    $criterio->add('ins_tipo_lista_precio.id', $ins_tipo_lista_precio->getId(), Criterio::IGUAL, 'ins_tipo_lista_precio_id', Criterio::_OR);
}


$criterio->addInicioSubconsulta();
$criterio->add('ins_insumo.estado', 1, Criterio::IGUAL, false, Criterio::_AND);

if ($txt_filtro_desde != "") {
    $criterio->add('ins_insumo_costo.modificado', $txt_filtro_desde.' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != "") {
    $criterio->add('ins_insumo_costo.modificado', $txt_filtro_hasta.' 23:59:59', Criterio::MENORIGUAL);
}

if ($cmb_filtro_prv_proveedor_id != 0) {
    $criterio->add('prv_proveedor.id', $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_tipo_insumo_id != 0) {
    $criterio->add('ins_tipo_insumo.id', $cmb_filtro_ins_tipo_insumo_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_etiqueta_id != 0) {
    $criterio->add('ins_etiqueta.id', $cmb_filtro_ins_etiqueta_id, Criterio::IGUAL);
}
if ($cmb_filtro_ins_categoria_id != 0) {
    $ins_categoria = InsCategoria::getOxId($cmb_filtro_ins_categoria_id);
    if($ins_categoria){
        //$criterio->add('ins_categoria.id', $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
        $criterio->add('ins_categoria.codigo', $ins_categoria->getCodigo(), Criterio::LIKE);
    }
}
if ($cmb_filtro_ins_marca_id != 0) {
    $criterio->add('ins_marca.id', $cmb_filtro_ins_marca_id, Criterio::IGUAL);
}

if ($txt_filtro_costo_desde != "") {
    $criterio->add('ins_insumo_costo.costo', $txt_filtro_costo_desde, Criterio::MAYORIGUAL);
}

if ($txt_filtro_costo_hasta != "") {
    $criterio->add('ins_insumo_costo.costo', $txt_filtro_costo_hasta, Criterio::MENORIGUAL);
}

if ($cmb_filtro_venta_web != -1) {
    $criterio->add('ins_insumo.venta_web', $cmb_filtro_venta_web, Criterio::IGUAL);
}
if ($cmb_filtro_porcentaje_descuento == 1) { // solo opcion SI habilitada
    $criterio->add('ins_lista_precio.porcentaje_descuento', 1, Criterio::MAYORIGUAL);
}
if ($cmb_filtro_porcentaje_incremento == 1) { // solo opcion SI habilitada
    $criterio->add('ins_lista_precio.porcentaje_incremento', 1, Criterio::MAYORIGUAL);
}
if ($cmb_filtro_importe_manual == 1) { // solo opcion SI habilitada
    $criterio->add('ins_lista_precio.importe_manual', 1, Criterio::MAYORIGUAL);
}

$criterio->addFinSubconsulta();

$criterio->addInicioSubconsulta();
//$criterio->add('ins_insumo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ins_insumo.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.orden', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('ins_insumo.codigo_marca', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('ins_insumo.codigo_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('ins_insumo.codigo_barra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
//$criterio->add('ins_matriz.codigo_pieza', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

$criterio->addFinSubconsulta();

$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo.ins_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'ins_insumo.ins_matriz_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_unidad_medida_pedido', 'ins_unidad_medida_pedido.id', 'ins_insumo.ins_unidad_medida_pedido_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_veh_modelo', 'ins_insumo_veh_modelo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'ins_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
$criterio->addRealJoin('veh_modelo', 'veh_modelo.id', 'ins_insumo_veh_modelo.veh_modelo_id', 'LEFT JOIN');
$criterio->addRealJoin('veh_marca', 'veh_marca.id', 'veh_modelo.veh_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_tipo_insumo', 'ins_tipo_insumo.id', 'ins_insumo.ins_tipo_insumo_id', 'LEFT JOIN');

//$criterio->addRealJoin('prv_insumo', 'prv_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
//$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_insumo.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_prv_proveedor.prv_proveedor_id', 'LEFT JOIN');

//$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.ins_insumo_id', 'ins_insumo.id and ins_insumo_costo.actual = 1', 'LEFT JOIN');

$criterio->addTabla('ins_insumo');

if ($cmb_filtro_ordenar_por != '') {
    switch ($cmb_filtro_ordenar_por) {
        case 'importe-venta-mayor':
            $criterio->addOrden('ins_lista_precio.importe_calculado', 'desc nulls last');
            $criterio->addSelect('ins_lista_precio.importe_calculado');
            break;
        case 'importe-venta-menor':
            $criterio->addOrden('ins_lista_precio.importe_calculado', 'asc nulls last');
            $criterio->addSelect('ins_lista_precio.importe_calculado');
            break;
        case 'porcentaje-venta-mayor':
            $criterio->addOrden('ins_lista_precio.porcentaje_incremento', 'desc nulls last');
            $criterio->addSelect('ins_lista_precio.porcentaje_incremento');
            break;
        case 'porcentaje-venta-menor':
            $criterio->addOrden('ins_lista_precio.porcentaje_incremento', 'asc nulls last');
            $criterio->addSelect('ins_lista_precio.porcentaje_incremento');
            break;
        case 'costo-fecha-mayor':
            $criterio->addOrden('ins_insumo_costo.modificado', 'desc nulls last');
            $criterio->addSelect('ins_insumo_costo.modificado');
            $criterio->addInicioSubconsulta();
            $criterio->add('ins_insumo_costo.actual', 1, Criterio::IGUAL);
            $criterio->add('ins_insumo_costo.actual', ' and true', Criterio::IS_NULL, false, Criterio::_OR);
            $criterio->addFinSubconsulta();
            break;
        case 'costo-fecha-menor':
            $criterio->addOrden('ins_insumo_costo.modificado', 'asc nulls last');
            $criterio->addSelect('ins_insumo_costo.modificado');
            $criterio->addInicioSubconsulta();
            $criterio->add('ins_insumo_costo.actual', 1, Criterio::IGUAL);
            $criterio->add('ins_insumo_costo.actual', ' and true', Criterio::IS_NULL, false, Criterio::_OR);
            $criterio->addFinSubconsulta();
            break;
        case 'descripcion':
            $criterio->addOrden('ins_insumo.descripcion', 'asc');
            break;
        case 'codigo_interno':
            $criterio->addOrden('ins_insumo.codigo_interno', 'asc');
            break;
        default:
            $criterio->addOrden('ins_insumo.id', 'desc');
    }
}

$criterio->setCriterios();
