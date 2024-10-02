<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_oc_reclamo_motivo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.id');

	$filtros['pde_oc_reclamo_motivo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.descripcion');

	$filtros['pde_oc_reclamo_motivo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.codigo');

	$filtros['pde_oc_reclamo_motivo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.puntaje') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.puntaje');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.puntaje');

	$filtros['pde_oc_reclamo_motivo.puntaje'] = array('campo' => 'Puntaje', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.observacion');

	$filtros['pde_oc_reclamo_motivo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.orden');

	$filtros['pde_oc_reclamo_motivo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.estado');

	$filtros['pde_oc_reclamo_motivo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.creado');

	$filtros['pde_oc_reclamo_motivo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.creado_por');

	$filtros['pde_oc_reclamo_motivo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.modificado');

	$filtros['pde_oc_reclamo_motivo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_reclamo_motivo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_reclamo_motivo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_reclamo_motivo.modificado_por');

	$filtros['pde_oc_reclamo_motivo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

