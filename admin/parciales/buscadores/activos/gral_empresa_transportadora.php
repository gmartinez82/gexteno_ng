<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_empresa_transportadora.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_empresa_transportadora.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.id');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.id');

	$filtros['gral_empresa_transportadora.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.descripcion');

	$filtros['gral_empresa_transportadora.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.codigo');

	$filtros['gral_empresa_transportadora.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.observacion');

	$filtros['gral_empresa_transportadora.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.orden');

	$filtros['gral_empresa_transportadora.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_empresa_transportadora.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.estado');

	$filtros['gral_empresa_transportadora.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.creado');

	$filtros['gral_empresa_transportadora.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.creado_por');

	$filtros['gral_empresa_transportadora.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.modificado');

	$filtros['gral_empresa_transportadora.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa_transportadora.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa_transportadora.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa_transportadora.modificado_por');

	$filtros['gral_empresa_transportadora.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

