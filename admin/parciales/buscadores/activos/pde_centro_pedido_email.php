<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_centro_pedido_email.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_centro_pedido_email.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.id');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.id');

	$filtros['pde_centro_pedido_email.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.descripcion');

	$filtros['pde_centro_pedido_email.descripcion'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.pde_centro_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.pde_centro_pedido_id');
	$o = PdeCentroPedido::getOxId($criterio->getValorDeCampo('pde_centro_pedido_email.pde_centro_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.pde_centro_pedido_id');

	$filtros['pde_centro_pedido_email.pde_centro_pedido_id'] = array('campo' => 'PdeCentroPedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.codigo');

	$filtros['pde_centro_pedido_email.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.observacion');

	$filtros['pde_centro_pedido_email.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.orden');

	$filtros['pde_centro_pedido_email.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.estado');

	$filtros['pde_centro_pedido_email.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.creado');

	$filtros['pde_centro_pedido_email.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.creado_por');

	$filtros['pde_centro_pedido_email.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.modificado');

	$filtros['pde_centro_pedido_email.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido_email.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido_email.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido_email.modificado_por');

	$filtros['pde_centro_pedido_email.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

