<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_nota_debito_concepto.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_nota_debito_concepto.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.id');

	$filtros['pde_nota_debito_concepto.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.descripcion');

	$filtros['pde_nota_debito_concepto.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.codigo');

	$filtros['pde_nota_debito_concepto.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.cntb_cuenta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.cntb_cuenta_id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.cntb_cuenta_id');

	$filtros['pde_nota_debito_concepto.cntb_cuenta_id'] = array('campo' => 'CntbCuenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.observacion');

	$filtros['pde_nota_debito_concepto.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.orden');

	$filtros['pde_nota_debito_concepto.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.estado');

	$filtros['pde_nota_debito_concepto.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.creado');

	$filtros['pde_nota_debito_concepto.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.creado_por');

	$filtros['pde_nota_debito_concepto.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.modificado');

	$filtros['pde_nota_debito_concepto.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_concepto.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_concepto.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_concepto.modificado_por');

	$filtros['pde_nota_debito_concepto.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

