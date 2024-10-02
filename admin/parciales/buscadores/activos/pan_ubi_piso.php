<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pan_ubi_piso.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pan_ubi_piso.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.id');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.id');

	$filtros['pan_ubi_piso.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.descripcion');

	$filtros['pan_ubi_piso.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.codigo');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.codigo');

	$filtros['pan_ubi_piso.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.observacion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.observacion');

	$filtros['pan_ubi_piso.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.orden');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.orden');

	$filtros['pan_ubi_piso.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.estado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.estado');

	$filtros['pan_ubi_piso.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.creado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.creado');

	$filtros['pan_ubi_piso.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.creado_por');

	$filtros['pan_ubi_piso.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.modificado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.modificado');

	$filtros['pan_ubi_piso.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_piso.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_piso.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_piso.modificado_por');

	$filtros['pan_ubi_piso.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

