<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_api_consumer.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_api_consumer.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.id');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.id');

	$filtros['gen_api_consumer.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.descripcion');

	$filtros['gen_api_consumer.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.gen_api_proyecto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.gen_api_proyecto_id');
	$o = GenApiProyecto::getOxId($criterio->getValorDeCampo('gen_api_consumer.gen_api_proyecto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.gen_api_proyecto_id');

	$filtros['gen_api_consumer.gen_api_proyecto_id'] = array('campo' => 'GenApiProyecto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.consumer') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.consumer');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.consumer');

	$filtros['gen_api_consumer.consumer'] = array('campo' => 'Consumer', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.secret_code') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.secret_code');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.secret_code');

	$filtros['gen_api_consumer.secret_code'] = array('campo' => 'Secret Code', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.codigo');

	$filtros['gen_api_consumer.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.observacion');

	$filtros['gen_api_consumer.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.orden');

	$filtros['gen_api_consumer.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.estado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.estado');

	$filtros['gen_api_consumer.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.creado');

	$filtros['gen_api_consumer.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.creado_por');

	$filtros['gen_api_consumer.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.modificado');

	$filtros['gen_api_consumer.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_consumer.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_consumer.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_api_consumer.modificado_por');

	$filtros['gen_api_consumer.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

