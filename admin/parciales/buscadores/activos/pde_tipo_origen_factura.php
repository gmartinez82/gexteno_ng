<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_tipo_origen_factura.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_tipo_origen_factura.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.id');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.id');

	$filtros['pde_tipo_origen_factura.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.descripcion');

	$filtros['pde_tipo_origen_factura.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.codigo');

	$filtros['pde_tipo_origen_factura.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.observacion');

	$filtros['pde_tipo_origen_factura.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.orden');

	$filtros['pde_tipo_origen_factura.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.estado');

	$filtros['pde_tipo_origen_factura.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.creado');

	$filtros['pde_tipo_origen_factura.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.creado_por');

	$filtros['pde_tipo_origen_factura.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.modificado');

	$filtros['pde_tipo_origen_factura.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_origen_factura.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_origen_factura.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_origen_factura.modificado_por');

	$filtros['pde_tipo_origen_factura.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

