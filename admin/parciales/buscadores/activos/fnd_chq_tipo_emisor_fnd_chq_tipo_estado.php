<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.id');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id');
	$o = FndChqTipoEmisor::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id'] = array('campo' => 'FndChqTipoEmisor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id');
	$o = FndChqTipoEstado::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id'] = array('campo' => 'FndChqTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible');
	$o = FndChqTipoEstado::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible'));
	$valor = $o->getDescripcion();
	
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible'] = array('campo' => 'FndChqTipoEstadoPosible', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico'] = array('campo' => 'Cambio Automatico', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual'] = array('campo' => 'Cambio Manual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado'] = array('campo' => 'Predeterminado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante'] = array('campo' => 'Cambio Otro Comprobante', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo'] = array('campo' => 'Cambio Simultaneo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.orden');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado_por');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado_por');

	$filtros['fnd_chq_tipo_emisor_fnd_chq_tipo_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

