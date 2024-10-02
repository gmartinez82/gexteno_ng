<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_sucursal.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_sucursal.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.id');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.id');

	$filtros['gral_sucursal.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.descripcion');

	$filtros['gral_sucursal.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('gral_sucursal.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.gral_empresa_id');

	$filtros['gral_sucursal.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.domicilio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.domicilio');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.domicilio');

	$filtros['gral_sucursal.domicilio'] = array('campo' => 'Domicilio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.telefono');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.telefono');

	$filtros['gral_sucursal.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.email');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.email');

	$filtros['gral_sucursal.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.codigo_postal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.codigo_postal');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.codigo_postal');

	$filtros['gral_sucursal.codigo_postal'] = array('campo' => 'Codigo Postal', 'valor' => $valor, 'comparador' => $comparador);
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

if($criterio->getValorDeCampo('gral_sucursal.geo_localidad_id') != ''){
	$o = GeoLocalidad::getOxId($criterio->getValorDeCampo('gral_sucursal.geo_localidad_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.geo_localidad_id');

	$filtros['gral_sucursal.geo_localidad_id'] = array('campo' => 'Localidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.codigo');

	$filtros['gral_sucursal.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.observacion');

	$filtros['gral_sucursal.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.orden');

	$filtros['gral_sucursal.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_sucursal.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.estado');

	$filtros['gral_sucursal.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.creado');

	$filtros['gral_sucursal.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.creado_por');

	$filtros['gral_sucursal.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.modificado');

	$filtros['gral_sucursal.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_sucursal.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_sucursal.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_sucursal.modificado_por');

	$filtros['gral_sucursal.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

