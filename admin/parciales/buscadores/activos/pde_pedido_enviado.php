<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_pedido_enviado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_pedido_enviado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.id');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.id');

	$filtros['pde_pedido_enviado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.descripcion');

	$filtros['pde_pedido_enviado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.pde_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.pde_pedido_id');
	$o = PdePedido::getOxId($criterio->getValorDeCampo('pde_pedido_enviado.pde_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.pde_pedido_id');

	$filtros['pde_pedido_enviado.pde_pedido_id'] = array('campo' => 'PdePedidoEnviado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_pedido_enviado.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.prv_proveedor_id');

	$filtros['pde_pedido_enviado.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.asunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.asunto');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.asunto');

	$filtros['pde_pedido_enviado.asunto'] = array('campo' => 'Asunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.destinatario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.destinatario');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.destinatario');

	$filtros['pde_pedido_enviado.destinatario'] = array('campo' => 'Destinatario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.cuerpo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.cuerpo');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.cuerpo');

	$filtros['pde_pedido_enviado.cuerpo'] = array('campo' => 'Cuerpo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.adjunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.adjunto');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.adjunto');

	$filtros['pde_pedido_enviado.adjunto'] = array('campo' => 'Adjunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.codigo_envio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.codigo_envio');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.codigo_envio');

	$filtros['pde_pedido_enviado.codigo_envio'] = array('campo' => 'Codigo de Envio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.codigo');

	$filtros['pde_pedido_enviado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.observacion');

	$filtros['pde_pedido_enviado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.orden');

	$filtros['pde_pedido_enviado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_pedido_enviado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.estado');

	$filtros['pde_pedido_enviado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.creado');

	$filtros['pde_pedido_enviado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.creado_por');

	$filtros['pde_pedido_enviado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.modificado');

	$filtros['pde_pedido_enviado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_enviado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_enviado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_enviado.modificado_por');

	$filtros['pde_pedido_enviado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

