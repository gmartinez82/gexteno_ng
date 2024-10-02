<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_cajero.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_cajero.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.id');

	$filtros['fnd_cajero.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.descripcion');

	$filtros['fnd_cajero.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.apellido');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.apellido');

	$filtros['fnd_cajero.apellido'] = array('campo' => 'Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.nombre');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.nombre');

	$filtros['fnd_cajero.nombre'] = array('campo' => 'Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.codigo');

	$filtros['fnd_cajero.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.observacion');

	$filtros['fnd_cajero.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.orden');

	$filtros['fnd_cajero.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_cajero.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.estado');

	$filtros['fnd_cajero.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.creado');

	$filtros['fnd_cajero.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.creado_por');

	$filtros['fnd_cajero.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.modificado');

	$filtros['fnd_cajero.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero.modificado_por');

	$filtros['fnd_cajero.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

