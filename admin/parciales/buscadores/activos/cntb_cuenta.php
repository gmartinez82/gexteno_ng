<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_cuenta.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_cuenta.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.id');

	$filtros['cntb_cuenta.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.descripcion');

	$filtros['cntb_cuenta.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.familia_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.familia_descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.familia_descripcion');

	$filtros['cntb_cuenta.familia_descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.cntb_cuenta_plan_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.cntb_cuenta_plan_id');
	$o = CntbCuentaPlan::getOxId($criterio->getValorDeCampo('cntb_cuenta.cntb_cuenta_plan_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.cntb_cuenta_plan_id');

	$filtros['cntb_cuenta.cntb_cuenta_plan_id'] = array('campo' => 'CntbCuentaPlan', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.cntb_cuenta_padre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.cntb_cuenta_padre');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.cntb_cuenta_padre');

	$filtros['cntb_cuenta.cntb_cuenta_padre'] = array('campo' => 'Cuenta Padre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.cntb_tipo_cuenta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.cntb_tipo_cuenta_id');
	$o = CntbTipoCuenta::getOxId($criterio->getValorDeCampo('cntb_cuenta.cntb_tipo_cuenta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.cntb_tipo_cuenta_id');

	$filtros['cntb_cuenta.cntb_tipo_cuenta_id'] = array('campo' => 'CntbTipoCuenta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.numero') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.numero');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.numero');

	$filtros['cntb_cuenta.numero'] = array('campo' => 'Numero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.nivel') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.nivel');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.nivel');

	$filtros['cntb_cuenta.nivel'] = array('campo' => 'Nivel', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.imputable') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.imputable');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cntb_cuenta.imputable'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.imputable');

	$filtros['cntb_cuenta.imputable'] = array('campo' => 'Imputable', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.codigo');

	$filtros['cntb_cuenta.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.observacion');

	$filtros['cntb_cuenta.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.orden');

	$filtros['cntb_cuenta.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.estado');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.estado');

	$filtros['cntb_cuenta.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.creado');

	$filtros['cntb_cuenta.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.creado_por');

	$filtros['cntb_cuenta.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.modificado');

	$filtros['cntb_cuenta.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta.modificado_por');

	$filtros['cntb_cuenta.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

