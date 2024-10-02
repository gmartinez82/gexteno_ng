<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo_imagen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo_imagen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.id');

	$filtros['ins_insumo_imagen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.ins_insumo_id');

	$filtros['ins_insumo_imagen.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.ins_tipo_imagen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.ins_tipo_imagen_id');
	$o = InsTipoImagen::getOxId($criterio->getValorDeCampo('ins_insumo_imagen.ins_tipo_imagen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.ins_tipo_imagen_id');

	$filtros['ins_insumo_imagen.ins_tipo_imagen_id'] = array('campo' => 'InsTipoImagen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.descripcion');

	$filtros['ins_insumo_imagen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.codigo');

	$filtros['ins_insumo_imagen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.observacion');

	$filtros['ins_insumo_imagen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.archivo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.archivo');

	$filtros['ins_insumo_imagen.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.peso');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.peso');

	$filtros['ins_insumo_imagen.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.tipo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.tipo');

	$filtros['ins_insumo_imagen.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.alto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.alto');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.alto');

	$filtros['ins_insumo_imagen.alto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.ancho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.ancho');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.ancho');

	$filtros['ins_insumo_imagen.ancho'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.orden');

	$filtros['ins_insumo_imagen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.estado');

	$filtros['ins_insumo_imagen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.creado');

	$filtros['ins_insumo_imagen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.creado_por');

	$filtros['ins_insumo_imagen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.modificado');

	$filtros['ins_insumo_imagen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_imagen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_imagen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_imagen.modificado_por');

	$filtros['ins_insumo_imagen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

