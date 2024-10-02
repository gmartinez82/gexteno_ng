<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo_destino_transformacion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.id');

	$filtros['ins_insumo_destino_transformacion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.ins_insumo_id');

	$filtros['ins_insumo_destino_transformacion.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.ins_insumo_destino') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.ins_insumo_destino');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.ins_insumo_destino');

	$filtros['ins_insumo_destino_transformacion.ins_insumo_destino'] = array('campo' => 'InsInsumo Destino', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.cantidad') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.cantidad');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.cantidad');

	$filtros['ins_insumo_destino_transformacion.cantidad'] = array('campo' => 'Cantidad', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.descripcion');

	$filtros['ins_insumo_destino_transformacion.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.codigo');

	$filtros['ins_insumo_destino_transformacion.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.observacion');

	$filtros['ins_insumo_destino_transformacion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.orden');

	$filtros['ins_insumo_destino_transformacion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.estado');

	$filtros['ins_insumo_destino_transformacion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.creado');

	$filtros['ins_insumo_destino_transformacion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.creado_por');

	$filtros['ins_insumo_destino_transformacion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.modificado');

	$filtros['ins_insumo_destino_transformacion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_destino_transformacion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_destino_transformacion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_destino_transformacion.modificado_por');

	$filtros['ins_insumo_destino_transformacion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

