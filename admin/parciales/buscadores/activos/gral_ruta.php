<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_ruta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_ruta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.id');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.id');

	$filtros['gral_ruta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.descripcion');

	$filtros['gral_ruta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.codigo');

	$filtros['gral_ruta.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.observacion');

	$filtros['gral_ruta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.orden');

	$filtros['gral_ruta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_ruta.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_ruta.estado');

	$filtros['gral_ruta.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.creado');

	$filtros['gral_ruta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.creado_por');

	$filtros['gral_ruta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.modificado');

	$filtros['gral_ruta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_ruta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_ruta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_ruta.modificado_por');

	$filtros['gral_ruta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

