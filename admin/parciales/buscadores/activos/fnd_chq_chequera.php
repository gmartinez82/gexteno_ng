<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_chq_chequera.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_chq_chequera.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.id');

	$filtros['fnd_chq_chequera.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.descripcion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.descripcion');

	$filtros['fnd_chq_chequera.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.gral_banco_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.gral_banco_id');
	$o = GralBanco::getOxId($criterio->getValorDeCampo('fnd_chq_chequera.gral_banco_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.gral_banco_id');

	$filtros['fnd_chq_chequera.gral_banco_id'] = array('campo' => 'GralBanco', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.codigo_sucursal') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.codigo_sucursal');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.codigo_sucursal');

	$filtros['fnd_chq_chequera.codigo_sucursal'] = array('campo' => 'Codigo Sucursal', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.titular') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.titular');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.titular');

	$filtros['fnd_chq_chequera.titular'] = array('campo' => 'Titular', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.codigo');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.codigo');

	$filtros['fnd_chq_chequera.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.observacion');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.observacion');

	$filtros['fnd_chq_chequera.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.orden');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.orden');

	$filtros['fnd_chq_chequera.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.estado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.estado');

	$filtros['fnd_chq_chequera.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.creado');

	$filtros['fnd_chq_chequera.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.creado_por');

	$filtros['fnd_chq_chequera.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.modificado');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.modificado');

	$filtros['fnd_chq_chequera.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_chq_chequera.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_chq_chequera.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_chq_chequera.modificado_por');

	$filtros['fnd_chq_chequera.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

