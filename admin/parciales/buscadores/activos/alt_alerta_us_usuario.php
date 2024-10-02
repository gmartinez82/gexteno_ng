<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['alt_alerta_us_usuario.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('alt_alerta_us_usuario.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.id');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.id');

	$filtros['alt_alerta_us_usuario.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.alt_alerta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.alt_alerta_id');
	$o = AltAlerta::getOxId($criterio->getValorDeCampo('alt_alerta_us_usuario.alt_alerta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.alt_alerta_id');

	$filtros['alt_alerta_us_usuario.alt_alerta_id'] = array('campo' => 'Alerta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('alt_alerta_us_usuario.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.us_usuario_id');

	$filtros['alt_alerta_us_usuario.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.observado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.observado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('alt_alerta_us_usuario.observado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.observado');

	$filtros['alt_alerta_us_usuario.observado'] = array('campo' => 'Observado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.leido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.leido');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('alt_alerta_us_usuario.leido'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.leido');

	$filtros['alt_alerta_us_usuario.leido'] = array('campo' => 'Leido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.destacado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.destacado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('alt_alerta_us_usuario.destacado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.destacado');

	$filtros['alt_alerta_us_usuario.destacado'] = array('campo' => 'Destacado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.aviso_email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.aviso_email');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('alt_alerta_us_usuario.aviso_email'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.aviso_email');

	$filtros['alt_alerta_us_usuario.aviso_email'] = array('campo' => 'Aviso Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.aviso_sms') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.aviso_sms');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('alt_alerta_us_usuario.aviso_sms'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.aviso_sms');

	$filtros['alt_alerta_us_usuario.aviso_sms'] = array('campo' => 'Aviso Sms', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.creado');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.creado');

	$filtros['alt_alerta_us_usuario.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_us_usuario.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_us_usuario.creado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_us_usuario.creado_por');

	$filtros['alt_alerta_us_usuario.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

