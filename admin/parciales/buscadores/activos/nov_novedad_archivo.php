<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['nov_novedad_archivo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('nov_novedad_archivo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.id');

	$filtros['nov_novedad_archivo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.descripcion');

	$filtros['nov_novedad_archivo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.nov_novedad_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.nov_novedad_id');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.nov_novedad_id');

	$filtros['nov_novedad_archivo.nov_novedad_id'] = array('campo' => 'NovNovedad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.codigo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.codigo');

	$filtros['nov_novedad_archivo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.observacion');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.observacion');

	$filtros['nov_novedad_archivo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.orden');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.orden');

	$filtros['nov_novedad_archivo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.estado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.estado');

	$filtros['nov_novedad_archivo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.creado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.creado');

	$filtros['nov_novedad_archivo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.creado_por');

	$filtros['nov_novedad_archivo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.modificado');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.modificado');

	$filtros['nov_novedad_archivo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.modificado_por');

	$filtros['nov_novedad_archivo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.archivo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.archivo');

	$filtros['nov_novedad_archivo.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.peso');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.peso');

	$filtros['nov_novedad_archivo.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('nov_novedad_archivo.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('nov_novedad_archivo.tipo');
	$comparador = $criterio->getComparadorDeCampo('nov_novedad_archivo.tipo');

	$filtros['nov_novedad_archivo.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

