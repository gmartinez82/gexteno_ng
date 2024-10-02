<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_api_proyecto.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_api_proyecto.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.id');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.id');

	$filtros['gen_api_proyecto.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.descripcion');

	$filtros['gen_api_proyecto.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.url_api') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.url_api');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.url_api');

	$filtros['gen_api_proyecto.url_api'] = array('campo' => 'Url Api', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.codigo');

	$filtros['gen_api_proyecto.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.observacion');

	$filtros['gen_api_proyecto.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.orden');

	$filtros['gen_api_proyecto.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.estado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.estado');

	$filtros['gen_api_proyecto.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.creado');

	$filtros['gen_api_proyecto.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.creado_por');

	$filtros['gen_api_proyecto.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.modificado');

	$filtros['gen_api_proyecto.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_api_proyecto.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_api_proyecto.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_api_proyecto.modificado_por');

	$filtros['gen_api_proyecto.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

