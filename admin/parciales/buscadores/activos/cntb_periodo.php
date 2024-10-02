<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_periodo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_periodo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.id');

	$filtros['cntb_periodo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.descripcion');

	$filtros['cntb_periodo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('cntb_periodo.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.gral_empresa_id');

	$filtros['cntb_periodo.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.cntb_ejercicio_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.cntb_ejercicio_id');
	$o = CntbEjercicio::getOxId($criterio->getValorDeCampo('cntb_periodo.cntb_ejercicio_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.cntb_ejercicio_id');

	$filtros['cntb_periodo.cntb_ejercicio_id'] = array('campo' => 'CntbEjercicio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.anio');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.anio');

	$filtros['cntb_periodo.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('cntb_periodo.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.gral_mes_id');

	$filtros['cntb_periodo.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.fecha_inicio') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('cntb_periodo.fecha_inicio'));
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.fecha_inicio');

	$filtros['cntb_periodo.fecha_inicio'] = array('campo' => 'Fecha Inicio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.fecha_fin') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('cntb_periodo.fecha_fin'));
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.fecha_fin');

	$filtros['cntb_periodo.fecha_fin'] = array('campo' => 'Fecha Fin', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.codigo');

	$filtros['cntb_periodo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.observacion');

	$filtros['cntb_periodo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.orden');

	$filtros['cntb_periodo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.estado');

	$filtros['cntb_periodo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.creado');

	$filtros['cntb_periodo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.creado_por');

	$filtros['cntb_periodo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.modificado');

	$filtros['cntb_periodo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_periodo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_periodo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_periodo.modificado_por');

	$filtros['cntb_periodo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

