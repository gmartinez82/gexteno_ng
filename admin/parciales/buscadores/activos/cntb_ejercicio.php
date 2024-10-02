<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_ejercicio.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_ejercicio.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.id');

	$filtros['cntb_ejercicio.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.descripcion');

	$filtros['cntb_ejercicio.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('cntb_ejercicio.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.gral_empresa_id');

	$filtros['cntb_ejercicio.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.fecha_inicio') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('cntb_ejercicio.fecha_inicio'));
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.fecha_inicio');

	$filtros['cntb_ejercicio.fecha_inicio'] = array('campo' => 'Fecha Inicio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.fecha_fin') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('cntb_ejercicio.fecha_fin'));
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.fecha_fin');

	$filtros['cntb_ejercicio.fecha_fin'] = array('campo' => 'Fecha Fin', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.codigo');

	$filtros['cntb_ejercicio.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.observacion');

	$filtros['cntb_ejercicio.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.orden');

	$filtros['cntb_ejercicio.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.estado');

	$filtros['cntb_ejercicio.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.creado');

	$filtros['cntb_ejercicio.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.creado_por');

	$filtros['cntb_ejercicio.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.modificado');

	$filtros['cntb_ejercicio.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_ejercicio.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_ejercicio.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_ejercicio.modificado_por');

	$filtros['cntb_ejercicio.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

