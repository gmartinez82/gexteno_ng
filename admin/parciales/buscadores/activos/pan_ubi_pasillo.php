<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pan_ubi_pasillo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pan_ubi_pasillo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.id');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.id');

	$filtros['pan_ubi_pasillo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.descripcion');

	$filtros['pan_ubi_pasillo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.codigo');

	$filtros['pan_ubi_pasillo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.observacion');

	$filtros['pan_ubi_pasillo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.orden');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.orden');

	$filtros['pan_ubi_pasillo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.estado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.estado');

	$filtros['pan_ubi_pasillo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.creado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.creado');

	$filtros['pan_ubi_pasillo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.creado_por');

	$filtros['pan_ubi_pasillo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.modificado');

	$filtros['pan_ubi_pasillo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_pasillo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_pasillo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_pasillo.modificado_por');

	$filtros['pan_ubi_pasillo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

