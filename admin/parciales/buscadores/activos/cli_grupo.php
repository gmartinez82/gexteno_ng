<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_grupo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_grupo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.id');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.id');

	$filtros['cli_grupo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.descripcion');

	$filtros['cli_grupo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.codigo');

	$filtros['cli_grupo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.observacion');

	$filtros['cli_grupo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.orden');

	$filtros['cli_grupo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_grupo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_grupo.estado');

	$filtros['cli_grupo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.creado');

	$filtros['cli_grupo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.creado_por');

	$filtros['cli_grupo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.modificado');

	$filtros['cli_grupo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_grupo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_grupo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_grupo.modificado_por');

	$filtros['cli_grupo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

