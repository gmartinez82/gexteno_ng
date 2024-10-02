<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['conf_categoria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('conf_categoria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.id');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.id');

	$filtros['conf_categoria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.descripcion');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.descripcion');

	$filtros['conf_categoria.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.codigo');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.codigo');

	$filtros['conf_categoria.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.observacion');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.observacion');

	$filtros['conf_categoria.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.orden');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.orden');

	$filtros['conf_categoria.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('conf_categoria.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('conf_categoria.estado');

	$filtros['conf_categoria.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.creado');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.creado');

	$filtros['conf_categoria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.creado_por');

	$filtros['conf_categoria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.modificado');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.modificado');

	$filtros['conf_categoria.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_categoria.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_categoria.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('conf_categoria.modificado_por');

	$filtros['conf_categoria.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

