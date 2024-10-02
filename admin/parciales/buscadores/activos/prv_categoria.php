<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_categoria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_categoria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.id');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.id');

	$filtros['prv_categoria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.descripcion');

	$filtros['prv_categoria.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.codigo');

	$filtros['prv_categoria.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.observacion');

	$filtros['prv_categoria.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.orden');

	$filtros['prv_categoria.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('prv_categoria.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_categoria.estado');

	$filtros['prv_categoria.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.creado');

	$filtros['prv_categoria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.creado_por');

	$filtros['prv_categoria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.modificado');

	$filtros['prv_categoria.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_categoria.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_categoria.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_categoria.modificado_por');

	$filtros['prv_categoria.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

