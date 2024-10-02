<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_vendedor.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_vendedor.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.id');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.id');

	$filtros['vta_vendedor.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.descripcion');

	$filtros['vta_vendedor.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.apellido');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.apellido');

	$filtros['vta_vendedor.apellido'] = array('campo' => 'Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.nombre');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.nombre');

	$filtros['vta_vendedor.nombre'] = array('campo' => 'Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.vta_tipo_vendedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.vta_tipo_vendedor_id');
	$o = VtaTipoVendedor::getOxId($criterio->getValorDeCampo('vta_vendedor.vta_tipo_vendedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.vta_tipo_vendedor_id');

	$filtros['vta_vendedor.vta_tipo_vendedor_id'] = array('campo' => 'VtaTipoVendedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.email');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.email');

	$filtros['vta_vendedor.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.telefono');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.telefono');

	$filtros['vta_vendedor.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.celular') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.celular');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.celular');

	$filtros['vta_vendedor.celular'] = array('campo' => 'Celular', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.porcentaje_comision') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.porcentaje_comision');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.porcentaje_comision');

	$filtros['vta_vendedor.porcentaje_comision'] = array('campo' => 'Porc Comision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.codigo');

	$filtros['vta_vendedor.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.observacion');

	$filtros['vta_vendedor.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.orden');

	$filtros['vta_vendedor.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_vendedor.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.estado');

	$filtros['vta_vendedor.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.creado');

	$filtros['vta_vendedor.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.creado_por');

	$filtros['vta_vendedor.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.modificado');

	$filtros['vta_vendedor.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_vendedor.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_vendedor.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_vendedor.modificado_por');

	$filtros['vta_vendedor.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

