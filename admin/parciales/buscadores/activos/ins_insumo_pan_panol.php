<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo_pan_panol.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo_pan_panol.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.id');

	$filtros['ins_insumo_pan_panol.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.ins_insumo_id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.ins_insumo_id');

	$filtros['ins_insumo_pan_panol.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_panol_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_panol_id');
	$o = PanPanol::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_panol_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_panol_id');

	$filtros['ins_insumo_pan_panol.pan_panol_id'] = array('campo' => 'PanPanol', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_piso_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_piso_id');
	$o = PanUbiPiso::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_piso_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_piso_id');

	$filtros['ins_insumo_pan_panol.pan_ubi_piso_id'] = array('campo' => 'PanUbiPiso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_pasillo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_pasillo_id');
	$o = PanUbiPasillo::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_pasillo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_pasillo_id');

	$filtros['ins_insumo_pan_panol.pan_ubi_pasillo_id'] = array('campo' => 'PanUbiPasillo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_estante_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_estante_id');
	$o = PanUbiEstante::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_estante_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_estante_id');

	$filtros['ins_insumo_pan_panol.pan_ubi_estante_id'] = array('campo' => 'PanUbiEstante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_altura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_altura_id');
	$o = PanUbiAltura::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_altura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_altura_id');

	$filtros['ins_insumo_pan_panol.pan_ubi_altura_id'] = array('campo' => 'PanUbiAltura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_casillero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_casillero_id');
	$o = PanUbiCasillero::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_casillero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_casillero_id');

	$filtros['ins_insumo_pan_panol.pan_ubi_casillero_id'] = array('campo' => 'PanUbiCasillero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_celda_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_celda_id');
	$o = PanUbiCelda::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.pan_ubi_celda_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.pan_ubi_celda_id');

	$filtros['ins_insumo_pan_panol.pan_ubi_celda_id'] = array('campo' => 'PanUbiCelda', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.ins_clasificacion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.ins_clasificacion_id');
	$o = InsClasificacion::getOxId($criterio->getValorDeCampo('ins_insumo_pan_panol.ins_clasificacion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.ins_clasificacion_id');

	$filtros['ins_insumo_pan_panol.ins_clasificacion_id'] = array('campo' => 'Clasificacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.punto_minimo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.punto_minimo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.punto_minimo');

	$filtros['ins_insumo_pan_panol.punto_minimo'] = array('campo' => 'Punto de Minimo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.punto_pedido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.punto_pedido');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.punto_pedido');

	$filtros['ins_insumo_pan_panol.punto_pedido'] = array('campo' => 'Punto de Pedido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.punto_maximo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.punto_maximo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.punto_maximo');

	$filtros['ins_insumo_pan_panol.punto_maximo'] = array('campo' => 'Punto de Maximo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.creado');

	$filtros['ins_insumo_pan_panol.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.creado_por');

	$filtros['ins_insumo_pan_panol.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.modificado');

	$filtros['ins_insumo_pan_panol.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_pan_panol.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_pan_panol.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_pan_panol.modificado_por');

	$filtros['ins_insumo_pan_panol.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

