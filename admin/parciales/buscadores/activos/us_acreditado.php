<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_acreditado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_acreditado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_acreditado.id');
	$comparador = $criterio->getComparadorDeCampo('us_acreditado.id');

	$filtros['us_acreditado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_acreditado.us_credencial_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_acreditado.us_credencial_id');
	$o = UsCredencial::getOxId($criterio->getValorDeCampo('us_acreditado.us_credencial_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_acreditado.us_credencial_id');

	$filtros['us_acreditado.us_credencial_id'] = array('campo' => 'Credencial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_acreditado.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_acreditado.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_acreditado.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_acreditado.us_usuario_id');

	$filtros['us_acreditado.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_acreditado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_acreditado.creado');
	$comparador = $criterio->getComparadorDeCampo('us_acreditado.creado');

	$filtros['us_acreditado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_acreditado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_acreditado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_acreditado.creado_por');

	$filtros['us_acreditado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

