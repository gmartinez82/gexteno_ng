<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['conf_variable.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('conf_variable.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.id');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.id');

	$filtros['conf_variable.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.descripcion');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.descripcion');

	$filtros['conf_variable.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.conf_categoria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.conf_categoria_id');
	$o = ConfCategoria::getOxId($criterio->getValorDeCampo('conf_variable.conf_categoria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('conf_variable.conf_categoria_id');

	$filtros['conf_variable.conf_categoria_id'] = array('campo' => 'Categoria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.valor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.valor');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.valor');

	$filtros['conf_variable.valor'] = array('campo' => 'valor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.codigo');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.codigo');

	$filtros['conf_variable.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.observacion');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.observacion');

	$filtros['conf_variable.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.orden');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.orden');

	$filtros['conf_variable.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('conf_variable.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('conf_variable.estado');

	$filtros['conf_variable.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.creado');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.creado');

	$filtros['conf_variable.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.creado_por');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.creado_por');

	$filtros['conf_variable.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.modificado');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.modificado');

	$filtros['conf_variable.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('conf_variable.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('conf_variable.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('conf_variable.modificado_por');

	$filtros['conf_variable.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

