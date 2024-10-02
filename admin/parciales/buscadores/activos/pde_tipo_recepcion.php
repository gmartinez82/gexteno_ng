<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_tipo_recepcion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_tipo_recepcion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.id');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.id');

	$filtros['pde_tipo_recepcion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.descripcion');

	$filtros['pde_tipo_recepcion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.codigo');

	$filtros['pde_tipo_recepcion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.observacion');

	$filtros['pde_tipo_recepcion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.orden');

	$filtros['pde_tipo_recepcion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.estado');

	$filtros['pde_tipo_recepcion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.creado');

	$filtros['pde_tipo_recepcion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.creado_por');

	$filtros['pde_tipo_recepcion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.modificado');

	$filtros['pde_tipo_recepcion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_recepcion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_recepcion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_recepcion.modificado_por');

	$filtros['pde_tipo_recepcion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

