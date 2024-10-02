<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_agrupador.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_agrupador.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_agrupador.id');
	$comparador = $criterio->getComparadorDeCampo('us_agrupador.id');

	$filtros['us_agrupador.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_agrupador.us_credencial_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_agrupador.us_credencial_id');
	$o = UsCredencial::getOxId($criterio->getValorDeCampo('us_agrupador.us_credencial_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_agrupador.us_credencial_id');

	$filtros['us_agrupador.us_credencial_id'] = array('campo' => 'Credencial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_agrupador.us_grupo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_agrupador.us_grupo_id');
	$o = UsGrupo::getOxId($criterio->getValorDeCampo('us_agrupador.us_grupo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_agrupador.us_grupo_id');

	$filtros['us_agrupador.us_grupo_id'] = array('campo' => 'Grupo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_agrupador.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_agrupador.creado');
	$comparador = $criterio->getComparadorDeCampo('us_agrupador.creado');

	$filtros['us_agrupador.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_agrupador.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_agrupador.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_agrupador.creado_por');

	$filtros['us_agrupador.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

