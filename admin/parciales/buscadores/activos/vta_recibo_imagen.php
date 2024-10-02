<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_recibo_imagen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_recibo_imagen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.id');

	$filtros['vta_recibo_imagen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.vta_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.vta_recibo_id');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.vta_recibo_id');

	$filtros['vta_recibo_imagen.vta_recibo_id'] = array('campo' => 'VtaRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.descripcion');

	$filtros['vta_recibo_imagen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.codigo');

	$filtros['vta_recibo_imagen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.observacion');

	$filtros['vta_recibo_imagen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.archivo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.archivo');

	$filtros['vta_recibo_imagen.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.peso');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.peso');

	$filtros['vta_recibo_imagen.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.tipo');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.tipo');

	$filtros['vta_recibo_imagen.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.alto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.alto');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.alto');

	$filtros['vta_recibo_imagen.alto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.ancho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.ancho');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.ancho');

	$filtros['vta_recibo_imagen.ancho'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.orden');

	$filtros['vta_recibo_imagen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.estado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.estado');

	$filtros['vta_recibo_imagen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.creado');

	$filtros['vta_recibo_imagen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.creado_por');

	$filtros['vta_recibo_imagen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.modificado');

	$filtros['vta_recibo_imagen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_recibo_imagen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_recibo_imagen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_recibo_imagen.modificado_por');

	$filtros['vta_recibo_imagen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

