<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['nov_novedad_destinatario.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('nov_novedad_destinatario.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.id');

	$filtros['nov_novedad_destinatario.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.nov_novedad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.nov_novedad_id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.nov_novedad_id');

	$filtros['nov_novedad_destinatario.nov_novedad_id'] = array('campo' => 'NovNovedad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('nov_novedad_destinatario.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.us_usuario_id');

	$filtros['nov_novedad_destinatario.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.descripcion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.descripcion');

	$filtros['nov_novedad_destinatario.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.codigo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.codigo');

	$filtros['nov_novedad_destinatario.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.observacion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.observacion');

	$filtros['nov_novedad_destinatario.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.orden');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.orden');

	$filtros['nov_novedad_destinatario.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.estado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.estado');

	$filtros['nov_novedad_destinatario.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.creado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.creado');

	$filtros['nov_novedad_destinatario.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.creado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.creado_por');

	$filtros['nov_novedad_destinatario.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.modificado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.modificado');

	$filtros['nov_novedad_destinatario.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_destinatario.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_destinatario.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_destinatario.modificado_por');

	$filtros['nov_novedad_destinatario.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

