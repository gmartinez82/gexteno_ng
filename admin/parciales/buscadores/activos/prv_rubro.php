<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_rubro.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_proveedor_prv_rubro.prv_proveedor_id') != ''){
	$valor = $criterio->getValorDeCampo('prv_proveedor_prv_rubro.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_proveedor_prv_rubro.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_proveedor_prv_rubro.prv_proveedor_id');

	$filtros['prv_proveedor_prv_rubro.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.id');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.id');

	$filtros['prv_rubro.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.descripcion');

	$filtros['prv_rubro.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.codigo');

	$filtros['prv_rubro.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.observacion');

	$filtros['prv_rubro.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.orden');

	$filtros['prv_rubro.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.estado');

	$filtros['prv_rubro.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.creado');

	$filtros['prv_rubro.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.creado_por');

	$filtros['prv_rubro.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.modificado');

	$filtros['prv_rubro.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_rubro.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_rubro.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_rubro.modificado_por');

	$filtros['prv_rubro.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

