<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pan_ubi_estante.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pan_ubi_estante.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.id');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.id');

	$filtros['pan_ubi_estante.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.descripcion');

	$filtros['pan_ubi_estante.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.codigo');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.codigo');

	$filtros['pan_ubi_estante.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.observacion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.observacion');

	$filtros['pan_ubi_estante.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.orden');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.orden');

	$filtros['pan_ubi_estante.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.estado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.estado');

	$filtros['pan_ubi_estante.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.creado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.creado');

	$filtros['pan_ubi_estante.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.creado_por');

	$filtros['pan_ubi_estante.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.modificado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.modificado');

	$filtros['pan_ubi_estante.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_estante.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_estante.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_estante.modificado_por');

	$filtros['pan_ubi_estante.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

