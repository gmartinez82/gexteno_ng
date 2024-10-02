<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pdi_urgencia.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pdi_urgencia.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.id');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.id');

	$filtros['pdi_urgencia.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.descripcion');

	$filtros['pdi_urgencia.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.codigo');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.codigo');

	$filtros['pdi_urgencia.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.observacion');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.observacion');

	$filtros['pdi_urgencia.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.orden');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.orden');

	$filtros['pdi_urgencia.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.estado');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.estado');

	$filtros['pdi_urgencia.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.creado');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.creado');

	$filtros['pdi_urgencia.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.creado_por');

	$filtros['pdi_urgencia.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.modificado');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.modificado');

	$filtros['pdi_urgencia.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pdi_urgencia.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pdi_urgencia.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pdi_urgencia.modificado_por');

	$filtros['pdi_urgencia.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

