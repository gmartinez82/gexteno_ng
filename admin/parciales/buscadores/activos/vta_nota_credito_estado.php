<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_nota_credito_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_nota_credito_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.id');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.id');

	$filtros['vta_nota_credito_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.descripcion');

	$filtros['vta_nota_credito_estado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.vta_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.vta_nota_credito_id');
	$o = VtaNotaCredito::getOxId($criterio->getValorDeCampo('vta_nota_credito_estado.vta_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.vta_nota_credito_id');

	$filtros['vta_nota_credito_estado.vta_nota_credito_id'] = array('campo' => 'VtaNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.vta_nota_credito_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.vta_nota_credito_tipo_estado_id');
	$o = VtaNotaCreditoTipoEstado::getOxId($criterio->getValorDeCampo('vta_nota_credito_estado.vta_nota_credito_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.vta_nota_credito_tipo_estado_id');

	$filtros['vta_nota_credito_estado.vta_nota_credito_tipo_estado_id'] = array('campo' => 'VtaNotaCreditoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_nota_credito_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.inicial');

	$filtros['vta_nota_credito_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_nota_credito_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.actual');

	$filtros['vta_nota_credito_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.codigo');

	$filtros['vta_nota_credito_estado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.observacion');

	$filtros['vta_nota_credito_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.orden');

	$filtros['vta_nota_credito_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_nota_credito_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.estado');

	$filtros['vta_nota_credito_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.creado');

	$filtros['vta_nota_credito_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.creado_por');

	$filtros['vta_nota_credito_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.modificado');

	$filtros['vta_nota_credito_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_estado.modificado_por');

	$filtros['vta_nota_credito_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

