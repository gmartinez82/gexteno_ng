<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_widget.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_widget.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.id');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.id');

	$filtros['gen_widget.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.descripcion');

	$filtros['gen_widget.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.gen_widget_sector_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.gen_widget_sector_id');
	$o = GenWidgetSector::getOxId($criterio->getValorDeCampo('gen_widget.gen_widget_sector_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_widget.gen_widget_sector_id');

	$filtros['gen_widget.gen_widget_sector_id'] = array('campo' => 'Widget Sector', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.ancho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.ancho');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.ancho');

	$filtros['gen_widget.ancho'] = array('campo' => 'Ancho', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.codigo');

	$filtros['gen_widget.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.observacion');

	$filtros['gen_widget.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.orden');

	$filtros['gen_widget.orden'] = array('campo' => 'Orden', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_widget.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_widget.estado');

	$filtros['gen_widget.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.creado');

	$filtros['gen_widget.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.creado_por');

	$filtros['gen_widget.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.modificado');

	$filtros['gen_widget.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_widget.modificado_por');

	$filtros['gen_widget.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

