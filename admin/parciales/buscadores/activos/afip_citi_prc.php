<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['afip_citi_prc.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('afip_citi_prc.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.id');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.id');

	$filtros['afip_citi_prc.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.descripcion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.descripcion');

	$filtros['afip_citi_prc.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.codigo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.codigo');

	$filtros['afip_citi_prc.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.gral_empresa_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.gral_empresa_id');
	$o = GralEmpresa::getOxId($criterio->getValorDeCampo('afip_citi_prc.gral_empresa_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.gral_empresa_id');

	$filtros['afip_citi_prc.gral_empresa_id'] = array('campo' => 'GralEmpresa', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.anio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.anio');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.anio');

	$filtros['afip_citi_prc.anio'] = array('campo' => 'Anio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.gral_mes_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.gral_mes_id');
	$o = GralMes::getOxId($criterio->getValorDeCampo('afip_citi_prc.gral_mes_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.gral_mes_id');

	$filtros['afip_citi_prc.gral_mes_id'] = array('campo' => 'GralMes', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.observacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.observacion');

	$filtros['afip_citi_prc.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.orden');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.orden');

	$filtros['afip_citi_prc.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.estado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.estado');

	$filtros['afip_citi_prc.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.creado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.creado');

	$filtros['afip_citi_prc.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.creado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.creado_por');

	$filtros['afip_citi_prc.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.modificado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.modificado');

	$filtros['afip_citi_prc.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_prc.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_prc.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_prc.modificado_por');

	$filtros['afip_citi_prc.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

