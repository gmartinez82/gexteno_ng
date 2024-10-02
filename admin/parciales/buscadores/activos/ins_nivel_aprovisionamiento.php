<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_nivel_aprovisionamiento.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.id');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.id');

	$filtros['ins_nivel_aprovisionamiento.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.descripcion');

	$filtros['ins_nivel_aprovisionamiento.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.codigo');

	$filtros['ins_nivel_aprovisionamiento.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.observacion');

	$filtros['ins_nivel_aprovisionamiento.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.orden');

	$filtros['ins_nivel_aprovisionamiento.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.estado');

	$filtros['ins_nivel_aprovisionamiento.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.creado');

	$filtros['ins_nivel_aprovisionamiento.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.creado_por');

	$filtros['ins_nivel_aprovisionamiento.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.modificado');

	$filtros['ins_nivel_aprovisionamiento.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_nivel_aprovisionamiento.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_nivel_aprovisionamiento.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_nivel_aprovisionamiento.modificado_por');

	$filtros['ins_nivel_aprovisionamiento.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

