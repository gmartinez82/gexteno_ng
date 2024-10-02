<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pan_ubi_altura.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pan_ubi_altura.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.id');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.id');

	$filtros['pan_ubi_altura.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.descripcion');

	$filtros['pan_ubi_altura.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.codigo');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.codigo');

	$filtros['pan_ubi_altura.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.observacion');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.observacion');

	$filtros['pan_ubi_altura.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.orden');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.orden');

	$filtros['pan_ubi_altura.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.estado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.estado');

	$filtros['pan_ubi_altura.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.creado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.creado');

	$filtros['pan_ubi_altura.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.creado_por');

	$filtros['pan_ubi_altura.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.modificado');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.modificado');

	$filtros['pan_ubi_altura.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pan_ubi_altura.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pan_ubi_altura.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pan_ubi_altura.modificado_por');

	$filtros['pan_ubi_altura.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

