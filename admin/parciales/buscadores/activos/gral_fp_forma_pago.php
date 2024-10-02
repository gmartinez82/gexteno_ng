<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_fp_forma_pago.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_fp_forma_pago.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.id');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.id');

	$filtros['gral_fp_forma_pago.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.descripcion');

	$filtros['gral_fp_forma_pago.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.descripcion_corta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.descripcion_corta');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.descripcion_corta');

	$filtros['gral_fp_forma_pago.descripcion_corta'] = array('campo' => 'Descripcion Corta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.codigo');

	$filtros['gral_fp_forma_pago.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.contado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.contado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.contado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.contado');

	$filtros['gral_fp_forma_pago.contado'] = array('campo' => 'Contado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.inmediato') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.inmediato');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.inmediato'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.inmediato');

	$filtros['gral_fp_forma_pago.inmediato'] = array('campo' => 'Inmediato', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.recibo_automatico') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.recibo_automatico');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.recibo_automatico'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.recibo_automatico');

	$filtros['gral_fp_forma_pago.recibo_automatico'] = array('campo' => 'Recibo Automatico', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.para_compra') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.para_compra');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.para_compra'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_compra');

	$filtros['gral_fp_forma_pago.para_compra'] = array('campo' => 'Para Compra', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.para_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.para_venta');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.para_venta'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_venta');

	$filtros['gral_fp_forma_pago.para_venta'] = array('campo' => 'Para Venta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.para_cobro') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.para_cobro');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.para_cobro'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_cobro');

	$filtros['gral_fp_forma_pago.para_cobro'] = array('campo' => 'Para Cobro', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.para_pago') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.para_pago');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.para_pago'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.para_pago');

	$filtros['gral_fp_forma_pago.para_pago'] = array('campo' => 'Para Pago', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.cntb_cuenta_compra') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.cntb_cuenta_compra');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.cntb_cuenta_compra');

	$filtros['gral_fp_forma_pago.cntb_cuenta_compra'] = array('campo' => 'CntbCuentaCompra', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.cntb_cuenta_venta') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.cntb_cuenta_venta');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.cntb_cuenta_venta');

	$filtros['gral_fp_forma_pago.cntb_cuenta_venta'] = array('campo' => 'CntbCuentaVenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.requiere_referencia') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.requiere_referencia');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.requiere_referencia'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.requiere_referencia');

	$filtros['gral_fp_forma_pago.requiere_referencia'] = array('campo' => 'Req Referencia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.requiere_info_extendida') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.requiere_info_extendida');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.requiere_info_extendida'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.requiere_info_extendida');

	$filtros['gral_fp_forma_pago.requiere_info_extendida'] = array('campo' => 'Req Info Ext', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.requiere_conciliacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.requiere_conciliacion');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.requiere_conciliacion'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.requiere_conciliacion');

	$filtros['gral_fp_forma_pago.requiere_conciliacion'] = array('campo' => 'Req Conciliacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.observacion');

	$filtros['gral_fp_forma_pago.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.orden');

	$filtros['gral_fp_forma_pago.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_fp_forma_pago.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.estado');

	$filtros['gral_fp_forma_pago.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.creado');

	$filtros['gral_fp_forma_pago.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.creado_por');

	$filtros['gral_fp_forma_pago.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.modificado');

	$filtros['gral_fp_forma_pago.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_fp_forma_pago.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_fp_forma_pago.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_fp_forma_pago.modificado_por');

	$filtros['gral_fp_forma_pago.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

