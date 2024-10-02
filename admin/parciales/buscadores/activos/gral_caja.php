<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_caja.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_caja.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.id');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.id');

	$filtros['gral_caja.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.descripcion');

	$filtros['gral_caja.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.gral_caja_tipo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.gral_caja_tipo_id');
	$o = GralCajaTipo::getOxId($criterio->getValorDeCampo('gral_caja.gral_caja_tipo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_caja.gral_caja_tipo_id');

	$filtros['gral_caja.gral_caja_tipo_id'] = array('campo' => 'GralCajaTipo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.numero') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.numero');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.numero');

	$filtros['gral_caja.numero'] = array('campo' => 'Numero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.codigo');

	$filtros['gral_caja.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.observacion');

	$filtros['gral_caja.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.orden');

	$filtros['gral_caja.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.estado');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.estado');

	$filtros['gral_caja.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.creado');

	$filtros['gral_caja.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.creado_por');

	$filtros['gral_caja.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.modificado');

	$filtros['gral_caja.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_caja.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_caja.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_caja.modificado_por');

	$filtros['gral_caja.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

