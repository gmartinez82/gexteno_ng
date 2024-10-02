<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_grupo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_grupo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.id');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.id');

	$filtros['prv_grupo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.descripcion');

	$filtros['prv_grupo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.codigo');

	$filtros['prv_grupo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.observacion');

	$filtros['prv_grupo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.orden');

	$filtros['prv_grupo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('prv_grupo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_grupo.estado');

	$filtros['prv_grupo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.creado');

	$filtros['prv_grupo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.creado_por');

	$filtros['prv_grupo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.modificado');

	$filtros['prv_grupo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_grupo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_grupo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_grupo.modificado_por');

	$filtros['prv_grupo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

