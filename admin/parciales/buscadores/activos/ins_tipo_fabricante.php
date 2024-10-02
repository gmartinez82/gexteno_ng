<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_tipo_fabricante.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_tipo_fabricante.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.id');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.id');

	$filtros['ins_tipo_fabricante.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.descripcion');

	$filtros['ins_tipo_fabricante.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.codigo');

	$filtros['ins_tipo_fabricante.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.observacion');

	$filtros['ins_tipo_fabricante.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.orden');

	$filtros['ins_tipo_fabricante.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.estado');

	$filtros['ins_tipo_fabricante.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.creado');

	$filtros['ins_tipo_fabricante.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.creado_por');

	$filtros['ins_tipo_fabricante.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.modificado');

	$filtros['ins_tipo_fabricante.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_tipo_fabricante.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_tipo_fabricante.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_tipo_fabricante.modificado_por');

	$filtros['ins_tipo_fabricante.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

