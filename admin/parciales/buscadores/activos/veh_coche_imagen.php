<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['veh_coche_imagen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('veh_coche_imagen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.id');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.id');

	$filtros['veh_coche_imagen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.veh_coche_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.veh_coche_id');
	$o = VehCoche::getOxId($criterio->getValorDeCampo('veh_coche_imagen.veh_coche_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.veh_coche_id');

	$filtros['veh_coche_imagen.veh_coche_id'] = array('campo' => 'VehCoche', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.descripcion');

	$filtros['veh_coche_imagen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.codigo');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.codigo');

	$filtros['veh_coche_imagen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.observacion');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.observacion');

	$filtros['veh_coche_imagen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.archivo');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.archivo');

	$filtros['veh_coche_imagen.archivo'] = array('campo' => 'Archivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.peso');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.peso');

	$filtros['veh_coche_imagen.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.tipo');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.tipo');

	$filtros['veh_coche_imagen.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.alto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.alto');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.alto');

	$filtros['veh_coche_imagen.alto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.ancho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.ancho');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.ancho');

	$filtros['veh_coche_imagen.ancho'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.orden');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.orden');

	$filtros['veh_coche_imagen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.estado');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.estado');

	$filtros['veh_coche_imagen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.creado');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.creado');

	$filtros['veh_coche_imagen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.creado_por');

	$filtros['veh_coche_imagen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.modificado');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.modificado');

	$filtros['veh_coche_imagen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('veh_coche_imagen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('veh_coche_imagen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('veh_coche_imagen.modificado_por');

	$filtros['veh_coche_imagen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

