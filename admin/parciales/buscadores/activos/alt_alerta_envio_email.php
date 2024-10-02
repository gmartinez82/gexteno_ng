<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['alt_alerta_envio_email.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('alt_alerta_envio_email.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.id');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.id');

	$filtros['alt_alerta_envio_email.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.descripcion');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.descripcion');

	$filtros['alt_alerta_envio_email.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_id');
	$o = AltAlerta::getOxId($criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.alt_alerta_id');

	$filtros['alt_alerta_envio_email.alt_alerta_id'] = array('campo' => 'AltAlerta', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_us_usuario_id');
	$o = AltAlertaUsUsuario::getOxId($criterio->getValorDeCampo('alt_alerta_envio_email.alt_alerta_us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.alt_alerta_us_usuario_id');

	$filtros['alt_alerta_envio_email.alt_alerta_us_usuario_id'] = array('campo' => 'AltAlertaUsUsuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.asunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.asunto');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.asunto');

	$filtros['alt_alerta_envio_email.asunto'] = array('campo' => 'Asunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.email');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.email');

	$filtros['alt_alerta_envio_email.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.cuerpo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.cuerpo');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.cuerpo');

	$filtros['alt_alerta_envio_email.cuerpo'] = array('campo' => 'Cuerpo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.adjunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.adjunto');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.adjunto');

	$filtros['alt_alerta_envio_email.adjunto'] = array('campo' => 'Adjunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.codigo_envio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.codigo_envio');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.codigo_envio');

	$filtros['alt_alerta_envio_email.codigo_envio'] = array('campo' => 'Codigo de Envio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.codigo');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.codigo');

	$filtros['alt_alerta_envio_email.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.observacion');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.observacion');

	$filtros['alt_alerta_envio_email.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.orden');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.orden');

	$filtros['alt_alerta_envio_email.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('alt_alerta_envio_email.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.estado');

	$filtros['alt_alerta_envio_email.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.creado');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.creado');

	$filtros['alt_alerta_envio_email.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.creado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.creado_por');

	$filtros['alt_alerta_envio_email.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.modificado');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.modificado');

	$filtros['alt_alerta_envio_email.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_alerta_envio_email.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_alerta_envio_email.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_alerta_envio_email.modificado_por');

	$filtros['alt_alerta_envio_email.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

