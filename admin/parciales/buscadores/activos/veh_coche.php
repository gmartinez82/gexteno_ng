<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['veh_coche.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('veh_coche.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.id');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.id');

	$filtros['veh_coche.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_modelo.veh_marca_id') != ''){
	$o = VehMarca::getOxId($criterio->getValorDeCampo('veh_modelo.veh_marca_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('veh_modelo.veh_marca_id');

	$filtros['veh_modelo.veh_marca_id'] = array('campo' => 'Marca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.veh_modelo_id') != ''){
	$o = VehModelo::getOxId($criterio->getValorDeCampo('veh_coche.veh_modelo_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('veh_coche.veh_modelo_id');

	$filtros['veh_coche.veh_modelo_id'] = array('campo' => 'Modelo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.descripcion');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.descripcion');

	$filtros['veh_coche.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.version') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.version');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.version');

	$filtros['veh_coche.version'] = array('campo' => 'Version', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.codigo');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.codigo');

	$filtros['veh_coche.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.patente') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.patente');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.patente');

	$filtros['veh_coche.patente'] = array('campo' => 'Patente', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.anio');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.anio');

	$filtros['veh_coche.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.observacion');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.observacion');

	$filtros['veh_coche.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.orden');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.orden');

	$filtros['veh_coche.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.estado');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.estado');

	$filtros['veh_coche.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.creado');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.creado');

	$filtros['veh_coche.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.creado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.creado_por');

	$filtros['veh_coche.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.modificado');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.modificado');

	$filtros['veh_coche.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_coche.modificado_por');

	$filtros['veh_coche.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

