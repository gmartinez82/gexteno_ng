<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['afip_citi_compras_importaciones.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.id');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.id');

	$filtros['afip_citi_compras_importaciones.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.descripcion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.descripcion');

	$filtros['afip_citi_compras_importaciones.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.codigo');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.codigo');

	$filtros['afip_citi_compras_importaciones.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_prc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_prc_id');
	$o = AfipCitiPrc::getOxId($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_prc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.afip_citi_prc_id');

	$filtros['afip_citi_compras_importaciones.afip_citi_prc_id'] = array('campo' => 'AfipCitiPrc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_cabecera_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_cabecera_id');
	$o = AfipCitiCabecera::getOxId($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_cabecera_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.afip_citi_cabecera_id');

	$filtros['afip_citi_compras_importaciones.afip_citi_cabecera_id'] = array('campo' => 'AfipCitiCabecera', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_despacho_importacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_despacho_importacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.afip_citi_despacho_importacion');

	$filtros['afip_citi_compras_importaciones.afip_citi_despacho_importacion'] = array('campo' => 'afip_citi_despacho_importacion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_importe_neto_gravado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_importe_neto_gravado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.afip_citi_importe_neto_gravado');

	$filtros['afip_citi_compras_importaciones.afip_citi_importe_neto_gravado'] = array('campo' => 'afip_citi_importe_neto_gravado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_alicuota_iva') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_alicuota_iva');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.afip_citi_alicuota_iva');

	$filtros['afip_citi_compras_importaciones.afip_citi_alicuota_iva'] = array('campo' => 'afip_citi_alicuota_iva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_importe_impuesto_liquidado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.afip_citi_importe_impuesto_liquidado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.afip_citi_importe_impuesto_liquidado');

	$filtros['afip_citi_compras_importaciones.afip_citi_importe_impuesto_liquidado'] = array('campo' => 'afip_citi_importe_impuesto_liquidado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_factura_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_factura_id');
	$o = PdeFactura::getOxId($criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_factura_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.pde_factura_id');

	$filtros['afip_citi_compras_importaciones.pde_factura_id'] = array('campo' => 'PdeFactura', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_nota_credito_id');
	$o = PdeNotaCredito::getOxId($criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.pde_nota_credito_id');

	$filtros['afip_citi_compras_importaciones.pde_nota_credito_id'] = array('campo' => 'PdeNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_nota_debito_id');
	$o = PdeNotaDebito::getOxId($criterio->getValorDeCampo('afip_citi_compras_importaciones.pde_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.pde_nota_debito_id');

	$filtros['afip_citi_compras_importaciones.pde_nota_debito_id'] = array('campo' => 'PdeNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.observacion');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.observacion');

	$filtros['afip_citi_compras_importaciones.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.orden');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.orden');

	$filtros['afip_citi_compras_importaciones.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.estado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.estado');

	$filtros['afip_citi_compras_importaciones.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.creado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.creado');

	$filtros['afip_citi_compras_importaciones.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.creado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.creado_por');

	$filtros['afip_citi_compras_importaciones.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.modificado');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.modificado');

	$filtros['afip_citi_compras_importaciones.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('afip_citi_compras_importaciones.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('afip_citi_compras_importaciones.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('afip_citi_compras_importaciones.modificado_por');

	$filtros['afip_citi_compras_importaciones.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

