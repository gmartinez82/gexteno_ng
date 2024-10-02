<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_nota_credito_item.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_nota_credito_item.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.id');

	$filtros['pde_nota_credito_item.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.descripcion');

	$filtros['pde_nota_credito_item.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.pde_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.pde_nota_credito_id');
	$o = PdeNotaCredito::getOxId($criterio->getValorDeCampo('pde_nota_credito_item.pde_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.pde_nota_credito_id');

	$filtros['pde_nota_credito_item.pde_nota_credito_id'] = array('campo' => 'PdeNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.gral_tipo_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.gral_tipo_iva_id');
	$o = GralTipoIva::getOxId($criterio->getValorDeCampo('pde_nota_credito_item.gral_tipo_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.gral_tipo_iva_id');

	$filtros['pde_nota_credito_item.gral_tipo_iva_id'] = array('campo' => 'GralTipoIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.pde_nota_credito_concepto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.pde_nota_credito_concepto_id');
	$o = PdeNotaCreditoConcepto::getOxId($criterio->getValorDeCampo('pde_nota_credito_item.pde_nota_credito_concepto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.pde_nota_credito_concepto_id');

	$filtros['pde_nota_credito_item.pde_nota_credito_concepto_id'] = array('campo' => 'PdeNotaCreditoConcepto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.importe_unitario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.importe_unitario');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.importe_unitario');

	$filtros['pde_nota_credito_item.importe_unitario'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.cantidad');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.cantidad');

	$filtros['pde_nota_credito_item.cantidad'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.codigo');

	$filtros['pde_nota_credito_item.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.observacion');

	$filtros['pde_nota_credito_item.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.orden');

	$filtros['pde_nota_credito_item.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_nota_credito_item.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.estado');

	$filtros['pde_nota_credito_item.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.creado');

	$filtros['pde_nota_credito_item.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.creado_por');

	$filtros['pde_nota_credito_item.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.modificado');

	$filtros['pde_nota_credito_item.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_item.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_item.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_item.modificado_por');

	$filtros['pde_nota_credito_item.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

