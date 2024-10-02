<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['alt_alerta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('alt_alerta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.id');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.id');

	$filtros['alt_alerta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.alt_modulo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.alt_modulo_id');
	$o = AltModulo::getOxId($criterio->getValorDeCampo('alt_alerta.alt_modulo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_modulo_id');

	$filtros['alt_alerta.alt_modulo_id'] = array('campo' => 'Modulo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.alt_tipo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.alt_tipo_id');
	$o = AltTipo::getOxId($criterio->getValorDeCampo('alt_alerta.alt_tipo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_tipo_id');

	$filtros['alt_alerta.alt_tipo_id'] = array('campo' => 'Tipo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.alt_nivel_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.alt_nivel_id');
	$o = AltNivel::getOxId($criterio->getValorDeCampo('alt_alerta.alt_nivel_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_nivel_id');

	$filtros['alt_alerta.alt_nivel_id'] = array('campo' => 'Nivel', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.alt_origen_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.alt_origen_id');
	$o = AltOrigen::getOxId($criterio->getValorDeCampo('alt_alerta.alt_origen_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_origen_id');

	$filtros['alt_alerta.alt_origen_id'] = array('campo' => 'Origen', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.alt_control_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.alt_control_id');
	$o = AltControl::getOxId($criterio->getValorDeCampo('alt_alerta.alt_control_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta.alt_control_id');

	$filtros['alt_alerta.alt_control_id'] = array('campo' => 'Control', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.descripcion');

	$filtros['alt_alerta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.codigo');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.codigo');

	$filtros['alt_alerta.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.referencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.referencia');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.referencia');

	$filtros['alt_alerta.referencia'] = array('campo' => 'Referencia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.url_redireccion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.url_redireccion');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.url_redireccion');

	$filtros['alt_alerta.url_redireccion'] = array('campo' => 'Url Redirecc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.observacion');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.observacion');

	$filtros['alt_alerta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.orden');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.orden');

	$filtros['alt_alerta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.estado');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.estado');

	$filtros['alt_alerta.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.creado');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.creado');

	$filtros['alt_alerta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.creado_por');

	$filtros['alt_alerta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.modificado');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.modificado');

	$filtros['alt_alerta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta.modificado_por');

	$filtros['alt_alerta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

