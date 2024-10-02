<?php
include_once '_autoload.php';
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php"
        ;
$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador_codigo_interno = Gral::getVars(1, 'txt_buscador_codigo_interno', '');
$txt_buscador_atributo = Gral::getVars(1, 'txt_buscador_atributo', '');
$cmb_filtro_ins_tipo_insumo_id = Gral::getVars(1, 'cmb_filtro_ins_tipo_insumo_id', 0);
$cmb_filtro_porcentaje_descuento = Gral::getVars(1, 'cmb_filtro_porcentaje_descuento', -1);
$cmb_filtro_ins_etiqueta_id = Gral::getVars(1, 'cmb_filtro_ins_etiqueta_id', 0);
$cmb_filtro_ins_categoria_id = Gral::getVars(1, 'cmb_filtro_ins_categoria_id', 0);
$cmb_filtro_ins_insumo_id = Gral::getVars(1, 'cmb_filtro_ins_insumo_id', 0);
$cmb_filtro_veh_marca_id = Gral::getVars(1, 'cmb_filtro_veh_marca_id', 0);
$cmb_filtro_ins_marca_id = Gral::getVars(1, 'cmb_filtro_ins_marca_id', 0);
$cmb_filtro_veh_modelo_id = Gral::getVars(1, 'cmb_filtro_veh_modelo_id', 0);
$cmb_filtro_es_consumible = Gral::getVars(1, 'cmb_filtro_es_consumible', -1);
$cmb_filtro_es_vendible = Gral::getVars(1, 'cmb_filtro_es_vendible', -1);
$cmb_filtro_estado = Gral::getVars(1, 'cmb_filtro_estado', -1);
$cmb_filtro_ins_tipo_lista_precio_id = Gral::getVars(1, 'cmb_filtro_ins_tipo_lista_precio_id', 1);
$cmb_filtro_ordenar_por = Gral::getVars(1, 'cmb_filtro_ordenar_por', '');
$cmb_filtro_tipo_visualizacion = Gral::getVars(1, 'cmb_filtro_tipo_visualizacion', 1);

Gral::setSes('GEXTENO_KYA_INS_INSUMO_GESTION_FILTRO_TIPO_VISUALIZACION', $cmb_filtro_tipo_visualizacion);

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
//$criterio->addDistinct(false);
$criterio->setAmbiguo(true);

if ($cmb_filtro_ins_tipo_lista_precio_id != 0) {
    $criterio->addInicioSubconsulta();
    $criterio->add('ins_tipo_lista_precio.id', $cmb_filtro_ins_tipo_lista_precio_id, Criterio::IGUAL, 'ins_tipo_lista_precio_id', '');
    $criterio->add('ins_tipo_lista_precio.id is null', ' and true', Criterio::SINCOMPARADOR, '', Criterio::_OR);
    $criterio->addFinSubconsulta();
} else {
    //$ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
    $ins_tipo_lista_precio = InsTipoListaPrecio::getTipoListaPrecioPorDefaultParaUsuario($us_usuario_autenticado, $vta_vendedor_autenticado);
    $criterio->addInicioSubconsulta();
    $criterio->add('ins_tipo_lista_precio.id', $ins_tipo_lista_precio->getId(), Criterio::IGUAL, 'ins_tipo_lista_precio_id', Criterio::_OR);
    $criterio->addFinSubconsulta();
}

$criterio->addInicioSubconsulta();
$criterio->add('', 'true', '', false, Criterio::_AND);

if (!Ctrl::esVacio($txt_buscador_codigo_interno)) {
    $criterio->add('ins_insumo.codigo_interno', $txt_buscador_codigo_interno, Criterio::LIKE, false, Criterio::_AND);
}
if (!Ctrl::esVacio($txt_buscador_atributo)) {
    $criterio->add('ins_insumo.claves_atributos', $txt_buscador_atributo, Criterio::LIKE, false, Criterio::_AND);
}

if ($cmb_filtro_ins_tipo_insumo_id != 0) {
    $criterio->add('ins_tipo_insumo.id', $cmb_filtro_ins_tipo_insumo_id, Criterio::IGUAL);
}

if ($cmb_filtro_porcentaje_descuento == 1) { // solo opcion SI habilitada
    //$criterio->add('ins_lista_precio.porcentaje_descuento', 1, Criterio::MAYORIGUAL);
    $criterio->add('ins_lista_precio.porcentaje_descuento', 'ins_tipo_lista_precio.porcentaje_descuento_maximo', Criterio::MAYOR, false, Criterio::_AND, false);
}

if ($cmb_filtro_ins_etiqueta_id != 0) {
    $criterio->add('ins_etiqueta.id', $cmb_filtro_ins_etiqueta_id, Criterio::IGUAL);
}

if ($cmb_filtro_ins_categoria_id != 0) {
    $ins_categoria = InsCategoria::getOxId($cmb_filtro_ins_categoria_id);
    if ($ins_categoria) {
        //$criterio->add('ins_categoria.id', $cmb_filtro_ins_categoria_id, Criterio::IGUAL);
        $criterio->add('ins_categoria.codigo', $ins_categoria->getCodigo(), Criterio::LIKE);
    }
}

if ($cmb_filtro_ins_insumo_id != 0) {
    $criterio->add('ins_insumo.id', $cmb_filtro_ins_insumo_id, Criterio::IGUAL);
}

if ($cmb_filtro_veh_marca_id != 0) {
    $criterio->add('veh_marca.id', $cmb_filtro_veh_marca_id, Criterio::IGUAL);
}

if ($cmb_filtro_ins_marca_id != 0) {
    $criterio->add('ins_marca.id', $cmb_filtro_ins_marca_id, Criterio::IGUAL);
}

if ($cmb_filtro_veh_modelo_id != 0) {
    $criterio->add('veh_modelo.id', $cmb_filtro_veh_modelo_id, Criterio::IGUAL);
}

if ($cmb_filtro_es_consumible != -1) { // solo opcion SI
    $criterio->add('ins_insumo.es_consumible', $cmb_filtro_es_consumible, Criterio::IGUAL);
} else {
    //$criterio->add('ins_insumo.es_consumible', 1, Criterio::IGUAL);
}

if ($cmb_filtro_es_vendible != -1) { // solo opcion SI
    $criterio->add('ins_insumo.es_vendible', $cmb_filtro_es_vendible, Criterio::IGUAL);
} else {
    //$criterio->add('ins_insumo.es_vendible', 1, Criterio::IGUAL);
}

if ($cmb_filtro_estado != -1) { // solo opcion SI habilitada
    $criterio->add('ins_insumo.estado', $cmb_filtro_estado, Criterio::IGUAL);
} else {
    $criterio->add('ins_insumo.estado', 1, Criterio::IGUAL);
}

$criterio->addFinSubconsulta();

if ($txt_buscador != '') {
    $criterio->addInicioSubconsulta();
    //$criterio->add('ins_insumo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add('ins_insumo.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo_ins_marca.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo_prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.notas_internas', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.codigo_barra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);

    //$criterio->add('prv_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    //$criterio->add('prv_insumo.codigo_proveedor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    //$criterio->add('prv_insumo.codigo_marca', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    //$criterio->add('ins_insumo.codigo_marca', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    //$criterio->add('ins_insumo.codigo_interno', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    //$criterio->add('ins_insumo.codigo_barra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    //$criterio->add('ins_matriz.codigo_pieza', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    //$criterio->add('ins_insumo.codigo_interno', $txt_buscador_codigo_interno, Criterio::LIKE, false, Criterio::_OR);

    $criterio->addFinSubconsulta();
}

$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo.ins_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'ins_insumo.ins_matriz_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_unidad_medida_pedido', 'ins_unidad_medida_pedido.id', 'ins_insumo.ins_unidad_medida_pedido_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_veh_modelo', 'ins_insumo_veh_modelo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'ins_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
$criterio->addRealJoin('veh_modelo', 'veh_modelo.id', 'ins_insumo_veh_modelo.veh_modelo_id', 'LEFT JOIN');
$criterio->addRealJoin('veh_marca', 'veh_marca.id', 'veh_modelo.veh_marca_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_ins_marca', 'ins_insumo_ins_marca.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
//$criterio->addRealJoin('prv_insumo', 'prv_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_tipo_insumo', 'ins_tipo_insumo.id', 'ins_insumo.ins_tipo_insumo_id', 'LEFT JOIN');

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
?>