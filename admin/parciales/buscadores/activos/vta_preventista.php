<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_preventista.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_preventista.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.id');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.id');

	$filtros['vta_preventista.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.descripcion');

	$filtros['vta_preventista.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.apellido');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.apellido');

	$filtros['vta_preventista.apellido'] = array('campo' => 'Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.nombre');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.nombre');

	$filtros['vta_preventista.nombre'] = array('campo' => 'Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.email');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.email');

	$filtros['vta_preventista.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.telefono');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.telefono');

	$filtros['vta_preventista.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.celular') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.celular');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.celular');

	$filtros['vta_preventista.celular'] = array('campo' => 'Celular', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.porcentaje_comision') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.porcentaje_comision');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.porcentaje_comision');

	$filtros['vta_preventista.porcentaje_comision'] = array('campo' => 'Porc Comision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.codigo');

	$filtros['vta_preventista.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.observacion');

	$filtros['vta_preventista.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.orden');

	$filtros['vta_preventista.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_preventista.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_preventista.estado');

	$filtros['vta_preventista.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.creado');

	$filtros['vta_preventista.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.creado_por');

	$filtros['vta_preventista.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.modificado');

	$filtros['vta_preventista.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_preventista.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_preventista.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_preventista.modificado_por');

	$filtros['vta_preventista.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

