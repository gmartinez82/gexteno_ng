<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_prca_proceso.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_prca_proceso.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.id');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.id');

	$filtros['gen_prca_proceso.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.descripcion');

	$filtros['gen_prca_proceso.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.codigo');

	$filtros['gen_prca_proceso.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.observacion');

	$filtros['gen_prca_proceso.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.orden');

	$filtros['gen_prca_proceso.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_prca_proceso.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.estado');

	$filtros['gen_prca_proceso.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.creado');

	$filtros['gen_prca_proceso.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.creado_por');

	$filtros['gen_prca_proceso.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.modificado');

	$filtros['gen_prca_proceso.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_proceso.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_proceso.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_proceso.modificado_por');

	$filtros['gen_prca_proceso.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

