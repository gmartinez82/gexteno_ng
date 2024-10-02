<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_categoria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_categoria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.id');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.id');

	$filtros['cli_categoria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.descripcion');

	$filtros['cli_categoria.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.codigo');

	$filtros['cli_categoria.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.observacion');

	$filtros['cli_categoria.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.orden');

	$filtros['cli_categoria.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_categoria.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_categoria.estado');

	$filtros['cli_categoria.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.creado');

	$filtros['cli_categoria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.creado_por');

	$filtros['cli_categoria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.modificado');

	$filtros['cli_categoria.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria.modificado_por');

	$filtros['cli_categoria.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

