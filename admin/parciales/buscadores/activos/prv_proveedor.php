<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_proveedor.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_proveedor.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.id');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.id');

	$filtros['prv_proveedor.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.descripcion');

	$filtros['prv_proveedor.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.gral_tipo_personeria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.gral_tipo_personeria_id');
	$o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('prv_proveedor.gral_tipo_personeria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.gral_tipo_personeria_id');

	$filtros['prv_proveedor.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('prv_proveedor.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.gral_condicion_iva_id');

	$filtros['prv_proveedor.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
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

if($criterio->getValorDeCampo('prv_proveedor.geo_localidad_id') != ''){
	$o = GeoLocalidad::getOxId($criterio->getValorDeCampo('prv_proveedor.geo_localidad_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.geo_localidad_id');

	$filtros['prv_proveedor.geo_localidad_id'] = array('campo' => 'Localidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.razon_social') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.razon_social');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.razon_social');

	$filtros['prv_proveedor.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.cuit') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.cuit');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.cuit');

	$filtros['prv_proveedor.cuit'] = array('campo' => 'CUIT', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.domicilio_legal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.domicilio_legal');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.domicilio_legal');

	$filtros['prv_proveedor.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.telefono');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.telefono');

	$filtros['prv_proveedor.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.email');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.email');

	$filtros['prv_proveedor.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.codigo');

	$filtros['prv_proveedor.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.codigo_min') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.codigo_min');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.codigo_min');

	$filtros['prv_proveedor.codigo_min'] = array('campo' => 'Codigo Min', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.prv_grupo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.prv_grupo_id');
	$o = PrvGrupo::getOxId($criterio->getValorDeCampo('prv_proveedor.prv_grupo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.prv_grupo_id');

	$filtros['prv_proveedor.prv_grupo_id'] = array('campo' => 'PrvGrupo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.prv_categoria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.prv_categoria_id');
	$o = PrvCategoria::getOxId($criterio->getValorDeCampo('prv_proveedor.prv_categoria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.prv_categoria_id');

	$filtros['prv_proveedor.prv_categoria_id'] = array('campo' => 'PrvCategoria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.codigo_postal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.codigo_postal');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.codigo_postal');

	$filtros['prv_proveedor.codigo_postal'] = array('campo' => 'Codigo Postal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.puntaje_promedio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.puntaje_promedio');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.puntaje_promedio');

	$filtros['prv_proveedor.puntaje_promedio'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.observacion');

	$filtros['prv_proveedor.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.datos_migracion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.datos_migracion');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.datos_migracion');

	$filtros['prv_proveedor.datos_migracion'] = array('campo' => 'Datos Migracion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.claves') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.claves');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.claves');

	$filtros['prv_proveedor.claves'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.orden');

	$filtros['prv_proveedor.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.estado');

	$filtros['prv_proveedor.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.creado');

	$filtros['prv_proveedor.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.creado_por');

	$filtros['prv_proveedor.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.modificado');

	$filtros['prv_proveedor.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_proveedor.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_proveedor.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_proveedor.modificado_por');

	$filtros['prv_proveedor.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

