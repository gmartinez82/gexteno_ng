<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gral_condicion_iva_pde_tipo_nota_debito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.id');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.id');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.descripcion');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id');
	$o = GralCondicionIva::getOxId($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id');
	$o = PdeTipoNotaDebito::getOxId($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id'] = array('campo' => 'PdeTipoNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.codigo');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.codigo');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.observacion');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.observacion');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.orden');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.orden');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.estado');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.creado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.creado');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.creado_por');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.modificado');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.modificado');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gral_condicion_iva_pde_tipo_nota_debito.modificado_por');

	$filtros['gral_condicion_iva_pde_tipo_nota_debito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

