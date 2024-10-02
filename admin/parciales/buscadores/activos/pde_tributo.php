<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_tributo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_tributo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.id');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.id');

	$filtros['pde_tributo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.descripcion');

	$filtros['pde_tributo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.alicuota_porcentual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.alicuota_porcentual');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.alicuota_porcentual');

	$filtros['pde_tributo.alicuota_porcentual'] = array('campo' => 'Alicuota Porcentual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.alicuota_decimal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.alicuota_decimal');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.alicuota_decimal');

	$filtros['pde_tributo.alicuota_decimal'] = array('campo' => 'Alicuota Decimal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.formula') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.formula');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.formula');

	$filtros['pde_tributo.formula'] = array('campo' => 'Formula', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.cntb_cuenta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.cntb_cuenta_id');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.cntb_cuenta_id');

	$filtros['pde_tributo.cntb_cuenta_id'] = array('campo' => 'CntbCuenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.codigo');

	$filtros['pde_tributo.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.observacion');

	$filtros['pde_tributo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.orden');

	$filtros['pde_tributo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_tributo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_tributo.estado');

	$filtros['pde_tributo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.creado');

	$filtros['pde_tributo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.creado_por');

	$filtros['pde_tributo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.modificado');

	$filtros['pde_tributo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tributo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tributo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tributo.modificado_por');

	$filtros['pde_tributo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

