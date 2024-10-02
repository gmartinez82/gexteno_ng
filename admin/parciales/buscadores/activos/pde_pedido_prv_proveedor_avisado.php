<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_pedido_prv_proveedor_avisado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.id');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.id');

	$filtros['pde_pedido_prv_proveedor_avisado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.pde_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.pde_pedido_id');
	$o = PdePedido::getOxId($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.pde_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.pde_pedido_id');

	$filtros['pde_pedido_prv_proveedor_avisado.pde_pedido_id'] = array('campo' => 'PdePedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.prv_proveedor_id');

	$filtros['pde_pedido_prv_proveedor_avisado.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.enviado_a') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.enviado_a');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.enviado_a');

	$filtros['pde_pedido_prv_proveedor_avisado.enviado_a'] = array('campo' => 'Destinatario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.leido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.leido');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.leido'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.leido');

	$filtros['pde_pedido_prv_proveedor_avisado.leido'] = array('campo' => 'Leido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.leido_el') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.leido_el');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.leido_el');

	$filtros['pde_pedido_prv_proveedor_avisado.leido_el'] = array('campo' => 'Leido El', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.creado');

	$filtros['pde_pedido_prv_proveedor_avisado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.creado_por');

	$filtros['pde_pedido_prv_proveedor_avisado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.modificado');

	$filtros['pde_pedido_prv_proveedor_avisado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_prv_proveedor_avisado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_prv_proveedor_avisado.modificado_por');

	$filtros['pde_pedido_prv_proveedor_avisado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

