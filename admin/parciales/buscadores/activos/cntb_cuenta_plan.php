<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cntb_cuenta_plan.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cntb_cuenta_plan.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.id');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.id');

	$filtros['cntb_cuenta_plan.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.descripcion');

	$filtros['cntb_cuenta_plan.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.codigo');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.codigo');

	$filtros['cntb_cuenta_plan.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.php_clase') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.php_clase');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.php_clase');

	$filtros['cntb_cuenta_plan.php_clase'] = array('campo' => 'PHP Clase', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.bd_tabla') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.bd_tabla');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.bd_tabla');

	$filtros['cntb_cuenta_plan.bd_tabla'] = array('campo' => 'BD Tabla', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.observacion');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.observacion');

	$filtros['cntb_cuenta_plan.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.orden');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.orden');

	$filtros['cntb_cuenta_plan.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cntb_cuenta_plan.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.estado');

	$filtros['cntb_cuenta_plan.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.creado');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.creado');

	$filtros['cntb_cuenta_plan.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.creado_por');

	$filtros['cntb_cuenta_plan.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.modificado');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.modificado');

	$filtros['cntb_cuenta_plan.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cntb_cuenta_plan.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cntb_cuenta_plan.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cntb_cuenta_plan.modificado_por');

	$filtros['cntb_cuenta_plan.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

