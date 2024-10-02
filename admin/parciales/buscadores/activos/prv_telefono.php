<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_telefono.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_telefono.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.id');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.id');

	$filtros['prv_telefono.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_telefono.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_telefono.prv_proveedor_id');

	$filtros['prv_telefono.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.prv_telefono_tipo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.prv_telefono_tipo_id');
	$o = PrvTelefonoTipo::getOxId($criterio->getValorDeCampo('prv_telefono.prv_telefono_tipo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_telefono.prv_telefono_tipo_id');

	$filtros['prv_telefono.prv_telefono_tipo_id'] = array('campo' => 'PrvTelefonoTipo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.descripcion');

	$filtros['prv_telefono.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.geo_pais_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.geo_pais_id');
	$o = GeoPais::getOxId($criterio->getValorDeCampo('prv_telefono.geo_pais_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_telefono.geo_pais_id');

	$filtros['prv_telefono.geo_pais_id'] = array('campo' => 'GeoPais', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.codigo');

	$filtros['prv_telefono.codigo'] = array('campo' => 'Cod Area', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.telefono');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.telefono');

	$filtros['prv_telefono.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.observacion');

	$filtros['prv_telefono.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.orden');

	$filtros['prv_telefono.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.estado');

	$filtros['prv_telefono.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.creado');

	$filtros['prv_telefono.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.creado_por');

	$filtros['prv_telefono.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.modificado');

	$filtros['prv_telefono.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_telefono.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_telefono.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_telefono.modificado_por');

	$filtros['prv_telefono.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

