<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_param_tipo_pais.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.id');

	$filtros['ws_fe_param_tipo_pais.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.descripcion');

	$filtros['ws_fe_param_tipo_pais.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.codigo');

	$filtros['ws_fe_param_tipo_pais.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.codigo_afip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.codigo_afip');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.codigo_afip');

	$filtros['ws_fe_param_tipo_pais.codigo_afip'] = array('campo' => 'Codigo Afip', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.observacion');

	$filtros['ws_fe_param_tipo_pais.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.orden');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.orden');

	$filtros['ws_fe_param_tipo_pais.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.estado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.estado');

	$filtros['ws_fe_param_tipo_pais.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.creado');

	$filtros['ws_fe_param_tipo_pais.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.creado_por');

	$filtros['ws_fe_param_tipo_pais.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.modificado');

	$filtros['ws_fe_param_tipo_pais.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_param_tipo_pais.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_param_tipo_pais.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_param_tipo_pais.modificado_por');

	$filtros['ws_fe_param_tipo_pais.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

