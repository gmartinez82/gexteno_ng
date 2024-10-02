<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pan_ubi_casillero.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pan_ubi_casillero.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.id');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.id');

	$filtros['pan_ubi_casillero.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.descripcion');

	$filtros['pan_ubi_casillero.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.codigo');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.codigo');

	$filtros['pan_ubi_casillero.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.observacion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.observacion');

	$filtros['pan_ubi_casillero.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.orden');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.orden');

	$filtros['pan_ubi_casillero.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.estado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.estado');

	$filtros['pan_ubi_casillero.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.creado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.creado');

	$filtros['pan_ubi_casillero.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.creado_por');

	$filtros['pan_ubi_casillero.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.modificado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.modificado');

	$filtros['pan_ubi_casillero.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_casillero.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_casillero.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_casillero.modificado_por');

	$filtros['pan_ubi_casillero.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

