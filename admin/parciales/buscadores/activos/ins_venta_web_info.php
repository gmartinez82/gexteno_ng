<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_venta_web_info.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_venta_web_info.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.id');

	$filtros['ins_venta_web_info.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.ins_insumo_id');

	$filtros['ins_venta_web_info.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.descripcion');

	$filtros['ins_venta_web_info.descripcion'] = array('campo' => 'Titulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.codigo');

	$filtros['ins_venta_web_info.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.destacado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.destacado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_venta_web_info.destacado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.destacado');

	$filtros['ins_venta_web_info.destacado'] = array('campo' => 'Destacado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.badge') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.badge');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.badge');

	$filtros['ins_venta_web_info.badge'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.descripcion_breve') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.descripcion_breve');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.descripcion_breve');

	$filtros['ins_venta_web_info.descripcion_breve'] = array('campo' => 'Desc Breve', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.descripcion_ext') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.descripcion_ext');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.descripcion_ext');

	$filtros['ins_venta_web_info.descripcion_ext'] = array('campo' => 'Desc Extendida', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.observacion');

	$filtros['ins_venta_web_info.observacion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.orden');

	$filtros['ins_venta_web_info.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.estado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.estado');

	$filtros['ins_venta_web_info.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.creado');

	$filtros['ins_venta_web_info.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.creado_por');

	$filtros['ins_venta_web_info.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.modificado');

	$filtros['ins_venta_web_info.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_venta_web_info.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_venta_web_info.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_venta_web_info.modificado_por');

	$filtros['ins_venta_web_info.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

