<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_pedido_destinatario.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_pedido_destinatario.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.id');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.id');

	$filtros['pde_pedido_destinatario.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.descripcion');

	$filtros['pde_pedido_destinatario.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.pde_pedido_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.pde_pedido_id');
	$o = PdePedido::getOxId($criterio->getValorDeCampo('pde_pedido_destinatario.pde_pedido_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.pde_pedido_id');

	$filtros['pde_pedido_destinatario.pde_pedido_id'] = array('campo' => 'PdePedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('pde_pedido_destinatario.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.us_usuario_id');

	$filtros['pde_pedido_destinatario.us_usuario_id'] = array('campo' => 'UsUsuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.observado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.observado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_pedido_destinatario.observado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.observado');

	$filtros['pde_pedido_destinatario.observado'] = array('campo' => 'Observado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.leido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.leido');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_pedido_destinatario.leido'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.leido');

	$filtros['pde_pedido_destinatario.leido'] = array('campo' => 'Leido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.destacado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.destacado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_pedido_destinatario.destacado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.destacado');

	$filtros['pde_pedido_destinatario.destacado'] = array('campo' => 'Destacado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.aviso_email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.aviso_email');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_pedido_destinatario.aviso_email'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.aviso_email');

	$filtros['pde_pedido_destinatario.aviso_email'] = array('campo' => 'Aviso Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.aviso_sms') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.aviso_sms');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_pedido_destinatario.aviso_sms'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.aviso_sms');

	$filtros['pde_pedido_destinatario.aviso_sms'] = array('campo' => 'Aviso Sms', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.codigo');

	$filtros['pde_pedido_destinatario.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.observacion');

	$filtros['pde_pedido_destinatario.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.orden');

	$filtros['pde_pedido_destinatario.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.estado');

	$filtros['pde_pedido_destinatario.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.creado');

	$filtros['pde_pedido_destinatario.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.creado_por');

	$filtros['pde_pedido_destinatario.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.modificado');

	$filtros['pde_pedido_destinatario.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_pedido_destinatario.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_pedido_destinatario.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_pedido_destinatario.modificado_por');

	$filtros['pde_pedido_destinatario.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

