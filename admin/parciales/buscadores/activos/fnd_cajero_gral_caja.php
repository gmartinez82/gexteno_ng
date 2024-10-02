<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['fnd_cajero_gral_caja.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('fnd_cajero_gral_caja.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero_gral_caja.id');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero_gral_caja.id');

	$filtros['fnd_cajero_gral_caja.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero_gral_caja.fnd_cajero_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero_gral_caja.fnd_cajero_id');
	$o = FndCajero::getOxId($criterio->getValorDeCampo('fnd_cajero_gral_caja.fnd_cajero_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_cajero_gral_caja.fnd_cajero_id');

	$filtros['fnd_cajero_gral_caja.fnd_cajero_id'] = array('campo' => 'FndCajero', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero_gral_caja.gral_caja_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero_gral_caja.gral_caja_id');
	$o = GralCaja::getOxId($criterio->getValorDeCampo('fnd_cajero_gral_caja.gral_caja_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('fnd_cajero_gral_caja.gral_caja_id');

	$filtros['fnd_cajero_gral_caja.gral_caja_id'] = array('campo' => 'GralCaja', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero_gral_caja.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero_gral_caja.creado');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero_gral_caja.creado');

	$filtros['fnd_cajero_gral_caja.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('fnd_cajero_gral_caja.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('fnd_cajero_gral_caja.creado_por');
	$comparador = $criterio->getComparadorDeCampo('fnd_cajero_gral_caja.creado_por');

	$filtros['fnd_cajero_gral_caja.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

