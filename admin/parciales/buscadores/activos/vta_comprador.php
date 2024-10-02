<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_comprador.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_comprador.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.id');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.id');

	$filtros['vta_comprador.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.descripcion');

	$filtros['vta_comprador.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.apellido');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.apellido');

	$filtros['vta_comprador.apellido'] = array('campo' => 'Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.nombre');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.nombre');

	$filtros['vta_comprador.nombre'] = array('campo' => 'Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.vta_tipo_comprador_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.vta_tipo_comprador_id');
	$o = VtaTipoComprador::getOxId($criterio->getValorDeCampo('vta_comprador.vta_tipo_comprador_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comprador.vta_tipo_comprador_id');

	$filtros['vta_comprador.vta_tipo_comprador_id'] = array('campo' => 'VtaTipoComprador', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_provincia.geo_pais_id') != ''){
	$o = GeoPais::getOxId($criterio->getValorDeCampo('geo_provincia.geo_pais_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');

	$filtros['geo_provincia.geo_pais_id'] = array('campo' => 'Pais', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('geo_localidad.geo_provincia_id') != ''){
	$o = GeoProvincia::getOxId($criterio->getValorDeCampo('geo_localidad.geo_provincia_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');

	$filtros['geo_localidad.geo_provincia_id'] = array('campo' => 'Provincia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.geo_localidad_id') != ''){
	$o = GeoLocalidad::getOxId($criterio->getValorDeCampo('vta_comprador.geo_localidad_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.geo_localidad_id');

	$filtros['vta_comprador.geo_localidad_id'] = array('campo' => 'Localidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.email');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.email');

	$filtros['vta_comprador.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.telefono');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.telefono');

	$filtros['vta_comprador.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.celular') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.celular');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.celular');

	$filtros['vta_comprador.celular'] = array('campo' => 'Celular', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.domicilio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.domicilio');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.domicilio');

	$filtros['vta_comprador.domicilio'] = array('campo' => 'Domicilio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.porcentaje_comision') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.porcentaje_comision');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.porcentaje_comision');

	$filtros['vta_comprador.porcentaje_comision'] = array('campo' => 'Porc Comision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.codigo');

	$filtros['vta_comprador.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.observacion');

	$filtros['vta_comprador.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.orden');

	$filtros['vta_comprador.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comprador.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comprador.estado');

	$filtros['vta_comprador.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.creado');

	$filtros['vta_comprador.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.creado_por');

	$filtros['vta_comprador.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.modificado');

	$filtros['vta_comprador.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comprador.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comprador.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comprador.modificado_por');

	$filtros['vta_comprador.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

