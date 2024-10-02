<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['nov_novedad_imagen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('nov_novedad_imagen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.id');

	$filtros['nov_novedad_imagen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.nov_novedad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.nov_novedad_id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.nov_novedad_id');

	$filtros['nov_novedad_imagen.nov_novedad_id'] = array('campo' => 'NovNovedad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.descripcion');

	$filtros['nov_novedad_imagen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.codigo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.codigo');

	$filtros['nov_novedad_imagen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.observacion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.observacion');

	$filtros['nov_novedad_imagen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.archivo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.archivo');

	$filtros['nov_novedad_imagen.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.peso');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.peso');

	$filtros['nov_novedad_imagen.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.tipo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.tipo');

	$filtros['nov_novedad_imagen.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.alto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.alto');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.alto');

	$filtros['nov_novedad_imagen.alto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.ancho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.ancho');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.ancho');

	$filtros['nov_novedad_imagen.ancho'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.orden');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.orden');

	$filtros['nov_novedad_imagen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.estado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.estado');

	$filtros['nov_novedad_imagen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.creado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.creado');

	$filtros['nov_novedad_imagen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.creado_por');

	$filtros['nov_novedad_imagen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.modificado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.modificado');

	$filtros['nov_novedad_imagen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_imagen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_imagen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_imagen.modificado_por');

	$filtros['nov_novedad_imagen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

