<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_domicilio.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_domicilio.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.id');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.id');

	$filtros['prv_domicilio.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_domicilio.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.prv_proveedor_id');

	$filtros['prv_domicilio.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.descripcion');

	$filtros['prv_domicilio.descripcion'] = array('campo' => 'Domicilio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.codigo');

	$filtros['prv_domicilio.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.observacion');

	$filtros['prv_domicilio.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.orden');

	$filtros['prv_domicilio.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.estado');

	$filtros['prv_domicilio.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.creado');

	$filtros['prv_domicilio.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.creado_por');

	$filtros['prv_domicilio.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.modificado');

	$filtros['prv_domicilio.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_domicilio.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_domicilio.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_domicilio.modificado_por');

	$filtros['prv_domicilio.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

