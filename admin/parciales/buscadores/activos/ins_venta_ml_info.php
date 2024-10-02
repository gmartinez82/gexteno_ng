<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_venta_ml_info.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_venta_ml_info.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.id');

	$filtros['ins_venta_ml_info.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ins_insumo_id');

	$filtros['ins_venta_ml_info.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.descripcion');

	$filtros['ins_venta_ml_info.descripcion'] = array('campo' => 'Titulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.descripcion_breve') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.descripcion_breve');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.descripcion_breve');

	$filtros['ins_venta_ml_info.descripcion_breve'] = array('campo' => 'Desc Breve', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.descripcion_empresa') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.descripcion_empresa');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.descripcion_empresa');

	$filtros['ins_venta_ml_info.descripcion_empresa'] = array('campo' => 'Desc Empresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.cantidad');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.cantidad');

	$filtros['ins_venta_ml_info.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.importe') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.importe');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.importe');

	$filtros['ins_venta_ml_info.importe'] = array('campo' => 'Importe', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.codigo');

	$filtros['ins_venta_ml_info.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_identificador') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_identificador');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_identificador');

	$filtros['ins_venta_ml_info.ml_identificador'] = array('campo' => 'ML ID', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_category_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_category_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_category_id');

	$filtros['ins_venta_ml_info.ml_category_id'] = array('campo' => 'ML Cat', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_category_desc') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_category_desc');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_category_desc');

	$filtros['ins_venta_ml_info.ml_category_desc'] = array('campo' => 'ML Cat', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_category_cod') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_category_cod');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_category_cod');

	$filtros['ins_venta_ml_info.ml_category_cod'] = array('campo' => 'ML Cat Cod', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_listing_type_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_listing_type_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_listing_type_id');

	$filtros['ins_venta_ml_info.ml_listing_type_id'] = array('campo' => 'ML Listing Type', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_listing_type_desc') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_listing_type_desc');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_listing_type_desc');

	$filtros['ins_venta_ml_info.ml_listing_type_desc'] = array('campo' => 'ML Listing Type', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_condition_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_condition_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_condition_id');

	$filtros['ins_venta_ml_info.ml_condition_id'] = array('campo' => 'ML Condition', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_condition_desc') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_condition_desc');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_condition_desc');

	$filtros['ins_venta_ml_info.ml_condition_desc'] = array('campo' => 'ML Condition', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_shipping_mode_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_shipping_mode_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_shipping_mode_id');

	$filtros['ins_venta_ml_info.ml_shipping_mode_id'] = array('campo' => 'ML Shipping Mode', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_shipping_mode_desc') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_shipping_mode_desc');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_shipping_mode_desc');

	$filtros['ins_venta_ml_info.ml_shipping_mode_desc'] = array('campo' => 'ML Shipping Mode', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_permalink') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_permalink');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_permalink');

	$filtros['ins_venta_ml_info.ml_permalink'] = array('campo' => 'ML Permalink', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_start_time') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_start_time');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_start_time');

	$filtros['ins_venta_ml_info.ml_start_time'] = array('campo' => 'ML Start Time', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_expiration_time') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_expiration_time');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_expiration_time');

	$filtros['ins_venta_ml_info.ml_expiration_time'] = array('campo' => 'ML Exp Time', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_seller') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_seller');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_seller');

	$filtros['ins_venta_ml_info.ml_seller'] = array('campo' => 'ML Seller', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_status') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_status');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_status');

	$filtros['ins_venta_ml_info.ml_status'] = array('campo' => 'ML Status', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_item_status_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_item_status_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_item_status_id');

	$filtros['ins_venta_ml_info.ml_item_status_id'] = array('campo' => 'MlItemStatus', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_initial_quantity') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_initial_quantity');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_initial_quantity');

	$filtros['ins_venta_ml_info.ml_initial_quantity'] = array('campo' => 'ML Initial Quantity', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_available_quantity') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_available_quantity');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_available_quantity');

	$filtros['ins_venta_ml_info.ml_available_quantity'] = array('campo' => 'ML Available Quantity', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_sold_quantity') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_sold_quantity');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_sold_quantity');

	$filtros['ins_venta_ml_info.ml_sold_quantity'] = array('campo' => 'ML Sold Quantity', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_price') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_price');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_price');

	$filtros['ins_venta_ml_info.ml_price'] = array('campo' => 'ML Price', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_ultima_actualizacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_ultima_actualizacion');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_ultima_actualizacion');

	$filtros['ins_venta_ml_info.ml_ultima_actualizacion'] = array('campo' => 'ML Ult Act', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_free_shipping') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_free_shipping');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_venta_ml_info.ml_free_shipping'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_free_shipping');

	$filtros['ins_venta_ml_info.ml_free_shipping'] = array('campo' => 'ML Free Shipping', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.ml_local_pickup') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.ml_local_pickup');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_venta_ml_info.ml_local_pickup'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.ml_local_pickup');

	$filtros['ins_venta_ml_info.ml_local_pickup'] = array('campo' => 'ML Local Pickup', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.observacion');

	$filtros['ins_venta_ml_info.observacion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.orden');

	$filtros['ins_venta_ml_info.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.estado');

	$filtros['ins_venta_ml_info.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.editado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.editado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.editado');

	$filtros['ins_venta_ml_info.editado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.publicado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.publicado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.publicado');

	$filtros['ins_venta_ml_info.publicado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.creado');

	$filtros['ins_venta_ml_info.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.creado_por');

	$filtros['ins_venta_ml_info.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.modificado');

	$filtros['ins_venta_ml_info.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_ml_info.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_ml_info.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_ml_info.modificado_por');

	$filtros['ins_venta_ml_info.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

} // cierre IF no ambiguo
?>
<?php if(count($filtros) > 0){ ?>
<div class='filtros'>
    <div class='titulo'><?php Lang::_lang('Criterios de Busqueda Activos') ?></div>
    <?php foreach($filtros as $i => $v){ ?>
    <div class='filtro'>
        <div class='campo'><?php Gral::_echo($v['campo']) ?></div>
        <div class='comparador'><?php Gral::_echo(Criterio::getComparadorDescripcion($v['comparador'])) ?></div>
        <div class='valor'><?php Gral::_echo($v['valor']) ?></div>
        <div class='eliminar'><a class="filtro-eliminar" href='?qf=1&c=<?php Gral::_echo($i) ?>' title='Quitar Filtro'><img src='imgs/btn_elim.gif' height='16' align='absmiddle' border='0'></a></div>
    </div>
    <?php } ?>
</div>
<?php } ?>

