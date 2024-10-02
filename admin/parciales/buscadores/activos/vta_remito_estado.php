<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_remito_estado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_remito_estado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.id');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.id');

	$filtros['vta_remito_estado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.descripcion');

	$filtros['vta_remito_estado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.vta_remito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.vta_remito_id');
	$o = VtaRemito::getOxId($criterio->getValorDeCampo('vta_remito_estado.vta_remito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.vta_remito_id');

	$filtros['vta_remito_estado.vta_remito_id'] = array('campo' => 'VtaRemito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.vta_remito_tipo_estado_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.vta_remito_tipo_estado_id');
	$o = VtaRemitoTipoEstado::getOxId($criterio->getValorDeCampo('vta_remito_estado.vta_remito_tipo_estado_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.vta_remito_tipo_estado_id');

	$filtros['vta_remito_estado.vta_remito_tipo_estado_id'] = array('campo' => 'VtaRemitoTipoEstado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito_estado.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.inicial');

	$filtros['vta_remito_estado.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito_estado.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.actual');

	$filtros['vta_remito_estado.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.cantidad_bultos') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.cantidad_bultos');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito_estado.cantidad_bultos'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.cantidad_bultos');

	$filtros['vta_remito_estado.cantidad_bultos'] = array('campo' => 'Cant Bultos', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.peso');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito_estado.peso'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.peso');

	$filtros['vta_remito_estado.peso'] = array('campo' => 'Peso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.costo_envio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.costo_envio');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito_estado.costo_envio'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.costo_envio');

	$filtros['vta_remito_estado.costo_envio'] = array('campo' => 'Costo Envio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.gral_empresa_transportadora_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.gral_empresa_transportadora_id');
	$o = GralEmpresaTransportadora::getOxId($criterio->getValorDeCampo('vta_remito_estado.gral_empresa_transportadora_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.gral_empresa_transportadora_id');

	$filtros['vta_remito_estado.gral_empresa_transportadora_id'] = array('campo' => 'GralEmpresaTransportadora', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.guia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.guia');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.guia');

	$filtros['vta_remito_estado.guia'] = array('campo' => 'Guia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.codigo');

	$filtros['vta_remito_estado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.nota_interna') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.nota_interna');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.nota_interna');

	$filtros['vta_remito_estado.nota_interna'] = array('campo' => 'Nota Interna', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.observacion');

	$filtros['vta_remito_estado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.orden');

	$filtros['vta_remito_estado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_remito_estado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.estado');

	$filtros['vta_remito_estado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.creado');

	$filtros['vta_remito_estado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.creado_por');

	$filtros['vta_remito_estado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.modificado');

	$filtros['vta_remito_estado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_remito_estado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_remito_estado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_remito_estado.modificado_por');

	$filtros['vta_remito_estado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

