<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.id');

	$filtros['ins_insumo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_categoria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_categoria_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_categoria_id');

	$filtros['ins_insumo.ins_categoria_id'] = array('campo' => 'InsCategoria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_matriz_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_matriz_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_matriz_id');

	$filtros['ins_insumo.ins_matriz_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.descripcion');

	$filtros['ins_insumo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_marca_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_marca_id');
	$o = InsMarca::getOxId($criterio->getValorDeCampo('ins_insumo.ins_marca_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_marca_id');

	$filtros['ins_insumo.ins_marca_id'] = array('campo' => 'InsMarca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.descripcion_corta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.descripcion_corta');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.descripcion_corta');

	$filtros['ins_insumo.descripcion_corta'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.descripcion_web') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.descripcion_web');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.descripcion_web');

	$filtros['ins_insumo.descripcion_web'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo');

	$filtros['ins_insumo.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.codigo_marca') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.codigo_marca');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_marca');

	$filtros['ins_insumo.codigo_marca'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.codigo_interno') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.codigo_interno');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_interno');

	$filtros['ins_insumo.codigo_interno'] = array('campo' => 'Codigo Interno', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.codigo_barra') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.codigo_barra');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_barra');

	$filtros['ins_insumo.codigo_barra'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.codigo_barra_interno') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.codigo_barra_interno');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.codigo_barra_interno');

	$filtros['ins_insumo.codigo_barra_interno'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_id');
	$o = InsUnidadMedida::getOxId($criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_unidad_medida_id');

	$filtros['ins_insumo.ins_unidad_medida_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.es_comprable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.es_comprable');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.es_comprable'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.es_comprable');

	$filtros['ins_insumo.es_comprable'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.es_consumible') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.es_consumible');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.es_consumible'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.es_consumible');

	$filtros['ins_insumo.es_consumible'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.es_transformable_origen') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.es_transformable_origen');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.es_transformable_origen'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.es_transformable_origen');

	$filtros['ins_insumo.es_transformable_origen'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.es_transformable_destino') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.es_transformable_destino');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.es_transformable_destino'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.es_transformable_destino');

	$filtros['ins_insumo.es_transformable_destino'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_pedido_id');
	$o = InsUnidadMedidaPedido::getOxId($criterio->getValorDeCampo('ins_insumo.ins_unidad_medida_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_unidad_medida_pedido_id');

	$filtros['ins_insumo.ins_unidad_medida_pedido_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_tipo_consumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_tipo_consumo_id');
	$o = InsTipoConsumo::getOxId($criterio->getValorDeCampo('ins_insumo.ins_tipo_consumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_consumo_id');

	$filtros['ins_insumo.ins_tipo_consumo_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.retornable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.retornable');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.retornable'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.retornable');

	$filtros['ins_insumo.retornable'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.identificable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.identificable');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.identificable'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.identificable');

	$filtros['ins_insumo.identificable'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.control_stock') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.control_stock');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.control_stock'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.control_stock');

	$filtros['ins_insumo.control_stock'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.punto_minimo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.punto_minimo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.punto_minimo');

	$filtros['ins_insumo.punto_minimo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.punto_pedido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.punto_pedido');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.punto_pedido');

	$filtros['ins_insumo.punto_pedido'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.punto_maximo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.punto_maximo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.punto_maximo');

	$filtros['ins_insumo.punto_maximo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.cantidad_maxima_pedido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.cantidad_maxima_pedido');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.cantidad_maxima_pedido');

	$filtros['ins_insumo.cantidad_maxima_pedido'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_tipo_necesidad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_tipo_necesidad_id');
	$o = InsTipoNecesidad::getOxId($criterio->getValorDeCampo('ins_insumo.ins_tipo_necesidad_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_necesidad_id');

	$filtros['ins_insumo.ins_tipo_necesidad_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_nivel_aprovisionamiento_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_nivel_aprovisionamiento_id');
	$o = InsNivelAprovisionamiento::getOxId($criterio->getValorDeCampo('ins_insumo.ins_nivel_aprovisionamiento_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_nivel_aprovisionamiento_id');

	$filtros['ins_insumo.ins_nivel_aprovisionamiento_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.hereda_marcas') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.hereda_marcas');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.hereda_marcas'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.hereda_marcas');

	$filtros['ins_insumo.hereda_marcas'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.venta_web') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.venta_web');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.venta_web'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.venta_web');

	$filtros['ins_insumo.venta_web'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.venta_mercadolibre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.venta_mercadolibre');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo.venta_mercadolibre'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.venta_mercadolibre');

	$filtros['ins_insumo.venta_mercadolibre'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_compra') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_compra');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_compra'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.gral_tipo_iva_compra');

	$filtros['ins_insumo.gral_tipo_iva_compra'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_venta');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('ins_insumo.gral_tipo_iva_venta'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.gral_tipo_iva_venta');

	$filtros['ins_insumo.gral_tipo_iva_venta'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_tipo_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_tipo_insumo_id');
	$o = InsTipoInsumo::getOxId($criterio->getValorDeCampo('ins_insumo.ins_tipo_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_insumo_id');

	$filtros['ins_insumo.ins_tipo_insumo_id'] = array('campo' => 'InsTipoInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.ins_tipo_fabricante_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.ins_tipo_fabricante_id');
	$o = InsTipoFabricante::getOxId($criterio->getValorDeCampo('ins_insumo.ins_tipo_fabricante_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo.ins_tipo_fabricante_id');

	$filtros['ins_insumo.ins_tipo_fabricante_id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.notas_internas') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.notas_internas');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.notas_internas');

	$filtros['ins_insumo.notas_internas'] = array('campo' => 'Notas Internas', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.observacion');

	$filtros['ins_insumo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.datos_migracion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.datos_migracion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.datos_migracion');

	$filtros['ins_insumo.datos_migracion'] = array('campo' => 'Datos Migracion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.claves') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.claves');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.claves');

	$filtros['ins_insumo.claves'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.claves_atributos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.claves_atributos');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.claves_atributos');

	$filtros['ins_insumo.claves_atributos'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.orden');

	$filtros['ins_insumo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.estado');

	$filtros['ins_insumo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.creado');

	$filtros['ins_insumo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.creado_por');

	$filtros['ins_insumo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.modificado');

	$filtros['ins_insumo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo.modificado_por');

	$filtros['ins_insumo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

