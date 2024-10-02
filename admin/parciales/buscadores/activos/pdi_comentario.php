<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pdi_comentario.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pdi_comentario.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.id');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.id');

	$filtros['pdi_comentario.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.descripcion');

	$filtros['pdi_comentario.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.pdi_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.pdi_pedido_id');
	$o = PdiPedido::getOxId($criterio->getValorDeCampo('pdi_comentario.pdi_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.pdi_pedido_id');

	$filtros['pdi_comentario.pdi_pedido_id'] = array('campo' => 'PdiPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.codigo');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.codigo');

	$filtros['pdi_comentario.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.observacion');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.observacion');

	$filtros['pdi_comentario.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.orden');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.orden');

	$filtros['pdi_comentario.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.estado');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.estado');

	$filtros['pdi_comentario.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.creado');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.creado');

	$filtros['pdi_comentario.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.creado_por');

	$filtros['pdi_comentario.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.modificado');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.modificado');

	$filtros['pdi_comentario.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_comentario.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_comentario.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_comentario.modificado_por');

	$filtros['pdi_comentario.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

