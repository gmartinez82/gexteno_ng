<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_centro_recepcion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_centro_recepcion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.id');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.id');

	$filtros['cli_centro_recepcion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.descripcion');

	$filtros['cli_centro_recepcion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.cli_cliente_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.cli_cliente_id');
	$o = CliCliente::getOxId($criterio->getValorDeCampo('cli_centro_recepcion.cli_cliente_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.cli_cliente_id');

	$filtros['cli_centro_recepcion.cli_cliente_id'] = array('campo' => 'CliCliente', 'valor' => $valor, 'comparador' => $comparador);
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

if($criterio->getValorDeCampo('cli_centro_recepcion.geo_localidad_id') != ''){
	$o = GeoLocalidad::getOxId($criterio->getValorDeCampo('cli_centro_recepcion.geo_localidad_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.geo_localidad_id');

	$filtros['cli_centro_recepcion.geo_localidad_id'] = array('campo' => 'Localidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.domicilio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.domicilio');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.domicilio');

	$filtros['cli_centro_recepcion.domicilio'] = array('campo' => 'Domicilio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.email');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.email');

	$filtros['cli_centro_recepcion.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.telefono');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.telefono');

	$filtros['cli_centro_recepcion.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.responsable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.responsable');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.responsable');

	$filtros['cli_centro_recepcion.responsable'] = array('campo' => 'Responsable', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.codigo_postal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.codigo_postal');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.codigo_postal');

	$filtros['cli_centro_recepcion.codigo_postal'] = array('campo' => 'Codigo Postal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.codigo');

	$filtros['cli_centro_recepcion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.observacion');

	$filtros['cli_centro_recepcion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.orden');

	$filtros['cli_centro_recepcion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_centro_recepcion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.estado');

	$filtros['cli_centro_recepcion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.creado');

	$filtros['cli_centro_recepcion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.creado_por');

	$filtros['cli_centro_recepcion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.modificado');

	$filtros['cli_centro_recepcion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_centro_recepcion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_centro_recepcion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_centro_recepcion.modificado_por');

	$filtros['cli_centro_recepcion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

