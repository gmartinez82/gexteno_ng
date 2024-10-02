<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['alt_control_us_usuario.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('alt_control_us_usuario.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control_us_usuario.id');
	$comparador = $criterio->getComparadorDeCampo('alt_control_us_usuario.id');

	$filtros['alt_control_us_usuario.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control_us_usuario.alt_control_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control_us_usuario.alt_control_id');
	$o = AltControl::getOxId($criterio->getValorDeCampo('alt_control_us_usuario.alt_control_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_control_us_usuario.alt_control_id');

	$filtros['alt_control_us_usuario.alt_control_id'] = array('campo' => 'Control', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control_us_usuario.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control_us_usuario.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('alt_control_us_usuario.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_control_us_usuario.us_usuario_id');

	$filtros['alt_control_us_usuario.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control_us_usuario.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control_us_usuario.creado');
	$comparador = $criterio->getComparadorDeCampo('alt_control_us_usuario.creado');

	$filtros['alt_control_us_usuario.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_control_us_usuario.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_control_us_usuario.creado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_control_us_usuario.creado_por');

	$filtros['alt_control_us_usuario.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

