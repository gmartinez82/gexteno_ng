<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_centro_pedido_pde_centro_recepcion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_pde_centro_recepcion.id');

	$filtros['pde_centro_pedido_pde_centro_recepcion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id');

	$filtros['pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id');
	$o = PdeCentroRecepcion::getOxId($criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id');

	$filtros['pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id'] = array('campo' => 'PdeCentroRecepcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_pde_centro_recepcion.creado');

	$filtros['pde_centro_pedido_pde_centro_recepcion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_pde_centro_recepcion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_pde_centro_recepcion.creado_por');

	$filtros['pde_centro_pedido_pde_centro_recepcion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

