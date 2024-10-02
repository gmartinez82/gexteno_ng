<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_lenguaje.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_lenguaje.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.id');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.id');

	$filtros['gral_lenguaje.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.descripcion');

	$filtros['gral_lenguaje.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.codigo');

	$filtros['gral_lenguaje.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.observacion');

	$filtros['gral_lenguaje.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.orden');

	$filtros['gral_lenguaje.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_lenguaje.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.estado');

	$filtros['gral_lenguaje.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.creado');

	$filtros['gral_lenguaje.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.creado_por');

	$filtros['gral_lenguaje.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.modificado');

	$filtros['gral_lenguaje.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_lenguaje.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_lenguaje.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_lenguaje.modificado_por');

	$filtros['gral_lenguaje.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

