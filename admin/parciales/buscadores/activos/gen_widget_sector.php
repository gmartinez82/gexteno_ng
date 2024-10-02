<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_widget_sector.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_widget_sector.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.id');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.id');

	$filtros['gen_widget_sector.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.descripcion');

	$filtros['gen_widget_sector.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.codigo');

	$filtros['gen_widget_sector.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.observacion');

	$filtros['gen_widget_sector.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.orden');

	$filtros['gen_widget_sector.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_widget_sector.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.estado');

	$filtros['gen_widget_sector.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.creado');

	$filtros['gen_widget_sector.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.creado_por');

	$filtros['gen_widget_sector.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.modificado');

	$filtros['gen_widget_sector.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_widget_sector.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_widget_sector.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_widget_sector.modificado_por');

	$filtros['gen_widget_sector.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

