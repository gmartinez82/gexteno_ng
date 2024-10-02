<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	$filtros['vta_comisionista.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_comisionista.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.id');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.id');

	$filtros['vta_comisionista.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.descripcion');

	$filtros['vta_comisionista.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.apellido');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.apellido');

	$filtros['vta_comisionista.apellido'] = array('campo' => 'Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.nombre');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.nombre');

	$filtros['vta_comisionista.nombre'] = array('campo' => 'Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.codigo');

	$filtros['vta_comisionista.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.observacion');

	$filtros['vta_comisionista.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.orden');

	$filtros['vta_comisionista.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comisionista.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.estado');

	$filtros['vta_comisionista.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.creado');

	$filtros['vta_comisionista.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.creado_por');

	$filtros['vta_comisionista.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.modificado');

	$filtros['vta_comisionista.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comisionista.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comisionista.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comisionista.modificado_por');

	$filtros['vta_comisionista.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

