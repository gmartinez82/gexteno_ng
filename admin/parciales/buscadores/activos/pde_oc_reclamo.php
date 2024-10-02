<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_oc_reclamo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_oc_reclamo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.id');

	$filtros['pde_oc_reclamo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.descripcion');

	$filtros['pde_oc_reclamo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.codigo');

	$filtros['pde_oc_reclamo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_id');
	$o = PdeOc::getOxId($criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.pde_oc_id');

	$filtros['pde_oc_reclamo.pde_oc_id'] = array('campo' => 'PdeOc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('pde_oc_reclamo.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.prv_proveedor_id');

	$filtros['pde_oc_reclamo.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_reclamo_motivo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_reclamo_motivo_id');
	$o = PdeOcReclamoMotivo::getOxId($criterio->getValorDeCampo('pde_oc_reclamo.pde_oc_reclamo_motivo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.pde_oc_reclamo_motivo_id');

	$filtros['pde_oc_reclamo.pde_oc_reclamo_motivo_id'] = array('campo' => 'PdeOcReclamoMotivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.observacion');

	$filtros['pde_oc_reclamo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.orden');

	$filtros['pde_oc_reclamo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.estado');

	$filtros['pde_oc_reclamo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.creado');

	$filtros['pde_oc_reclamo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.creado_por');

	$filtros['pde_oc_reclamo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.modificado');

	$filtros['pde_oc_reclamo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo.modificado_por');

	$filtros['pde_oc_reclamo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

