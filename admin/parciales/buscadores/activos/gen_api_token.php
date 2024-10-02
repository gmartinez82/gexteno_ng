<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_api_token.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_api_token.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.id');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.id');

	$filtros['gen_api_token.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.descripcion');

	$filtros['gen_api_token.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.gen_api_consumer_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.gen_api_consumer_id');
	$o = GenApiConsumer::getOxId($criterio->getValorDeCampo('gen_api_token.gen_api_consumer_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_api_token.gen_api_consumer_id');

	$filtros['gen_api_token.gen_api_consumer_id'] = array('campo' => 'GenApiConsumer', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.gen_api_proyecto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.gen_api_proyecto_id');
	$o = GenApiProyecto::getOxId($criterio->getValorDeCampo('gen_api_token.gen_api_proyecto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_api_token.gen_api_proyecto_id');

	$filtros['gen_api_token.gen_api_proyecto_id'] = array('campo' => 'GenApiProyecto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.vencimiento') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.vencimiento');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.vencimiento');

	$filtros['gen_api_token.vencimiento'] = array('campo' => 'Vencimiento', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.activo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.activo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_api_token.activo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_api_token.activo');

	$filtros['gen_api_token.activo'] = array('campo' => 'Activo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.codigo');

	$filtros['gen_api_token.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.observacion');

	$filtros['gen_api_token.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.orden');

	$filtros['gen_api_token.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.estado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.estado');

	$filtros['gen_api_token.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.creado');

	$filtros['gen_api_token.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.creado_por');

	$filtros['gen_api_token.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.modificado');

	$filtros['gen_api_token.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_token.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_token.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_api_token.modificado_por');

	$filtros['gen_api_token.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

