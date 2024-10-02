<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_empresa.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_empresa.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.id');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.id');

	$filtros['gral_empresa.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.descripcion');

	$filtros['gral_empresa.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('gral_empresa.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_empresa.gral_tipo_personeria_id');

	$filtros['gral_empresa.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('gral_empresa.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_empresa.gral_condicion_iva_id');

	$filtros['gral_empresa.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
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

if($criterio->getValorDeCampo('gral_empresa.geo_localidad_id') != ''){
	$o = GeoLocalidad::getOxId($criterio->getValorDeCampo('gral_empresa.geo_localidad_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.geo_localidad_id');

	$filtros['gral_empresa.geo_localidad_id'] = array('campo' => 'Localidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.cuit');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.cuit');

	$filtros['gral_empresa.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.razon_social');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.razon_social');

	$filtros['gral_empresa.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.codigo_postal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.codigo_postal');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.codigo_postal');

	$filtros['gral_empresa.codigo_postal'] = array('campo' => 'Codigo Postal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.domicilio_legal');

	$filtros['gral_empresa.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.telefono');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.telefono');

	$filtros['gral_empresa.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.email');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.email');

	$filtros['gral_empresa.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.fecha_inicio_actividad') != ''){
	$valor = Gral::getFechaToWeb($valor = $criterio->getValorDeCampo('gral_empresa.fecha_inicio_actividad'));
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.fecha_inicio_actividad');

	$filtros['gral_empresa.fecha_inicio_actividad'] = array('campo' => 'Fecha Inicio Act', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.codigo');

	$filtros['gral_empresa.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.afip_crt') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.afip_crt');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.afip_crt');

	$filtros['gral_empresa.afip_crt'] = array('campo' => 'AFIP CRT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.afip_key') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.afip_key');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.afip_key');

	$filtros['gral_empresa.afip_key'] = array('campo' => 'AFIP KEY', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.observacion');

	$filtros['gral_empresa.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.orden');

	$filtros['gral_empresa.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_empresa.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_empresa.estado');

	$filtros['gral_empresa.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.creado');

	$filtros['gral_empresa.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.creado_por');

	$filtros['gral_empresa.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.modificado');

	$filtros['gral_empresa.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_empresa.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_empresa.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_empresa.modificado_por');

	$filtros['gral_empresa.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

