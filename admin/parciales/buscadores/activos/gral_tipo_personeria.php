<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_tipo_personeria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_tipo_personeria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.id');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.id');

	$filtros['gral_tipo_personeria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.descripcion');

	$filtros['gral_tipo_personeria.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.codigo');

	$filtros['gral_tipo_personeria.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.observacion');

	$filtros['gral_tipo_personeria.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.orden');

	$filtros['gral_tipo_personeria.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_tipo_personeria.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.estado');

	$filtros['gral_tipo_personeria.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.creado');

	$filtros['gral_tipo_personeria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.creado_por');

	$filtros['gral_tipo_personeria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.modificado');

	$filtros['gral_tipo_personeria.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_tipo_personeria.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_tipo_personeria.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_tipo_personeria.modificado_por');

	$filtros['gral_tipo_personeria.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

