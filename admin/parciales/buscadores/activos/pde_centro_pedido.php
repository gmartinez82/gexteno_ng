<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_centro_pedido.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_centro_pedido.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.id');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.id');

	$filtros['pde_centro_pedido.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.descripcion');

	$filtros['pde_centro_pedido.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
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

if($criterio->getValorDeCampo('pde_centro_pedido.geo_localidad_id') != ''){
	$o = GeoLocalidad::getOxId($criterio->getValorDeCampo('pde_centro_pedido.geo_localidad_id'));
	$valor = $o->getDescripcion();
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.geo_localidad_id');

	$filtros['pde_centro_pedido.geo_localidad_id'] = array('campo' => 'Localidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.responsable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.responsable');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.responsable');

	$filtros['pde_centro_pedido.responsable'] = array('campo' => 'Responsable', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.email');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.email');

	$filtros['pde_centro_pedido.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.telefono');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.telefono');

	$filtros['pde_centro_pedido.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.domicilio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.domicilio');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.domicilio');

	$filtros['pde_centro_pedido.domicilio'] = array('campo' => 'Domicilio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.empresa') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.empresa');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.empresa');

	$filtros['pde_centro_pedido.empresa'] = array('campo' => 'Empresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.url_dominio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.url_dominio');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.url_dominio');

	$filtros['pde_centro_pedido.url_dominio'] = array('campo' => 'URL Dominio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.email_prefijo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.email_prefijo');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.email_prefijo');

	$filtros['pde_centro_pedido.email_prefijo'] = array('campo' => 'Email Prefijo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.codigo');

	$filtros['pde_centro_pedido.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.observacion');

	$filtros['pde_centro_pedido.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.orden');

	$filtros['pde_centro_pedido.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.estado');

	$filtros['pde_centro_pedido.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.creado');

	$filtros['pde_centro_pedido.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.creado_por');

	$filtros['pde_centro_pedido.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.modificado');

	$filtros['pde_centro_pedido.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_centro_pedido.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_centro_pedido.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_centro_pedido.modificado_por');

	$filtros['pde_centro_pedido.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

