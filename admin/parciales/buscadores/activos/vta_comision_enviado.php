<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_comision_enviado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_comision_enviado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.id');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.id');

	$filtros['vta_comision_enviado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.descripcion');

	$filtros['vta_comision_enviado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.vta_comision_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.vta_comision_id');
	$o = VtaComision::getOxId($criterio->getValorDeCampo('vta_comision_enviado.vta_comision_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.vta_comision_id');

	$filtros['vta_comision_enviado.vta_comision_id'] = array('campo' => 'VtaComision', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.asunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.asunto');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.asunto');

	$filtros['vta_comision_enviado.asunto'] = array('campo' => 'Asunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.destinatario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.destinatario');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.destinatario');

	$filtros['vta_comision_enviado.destinatario'] = array('campo' => 'Destinatario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.cuerpo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.cuerpo');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.cuerpo');

	$filtros['vta_comision_enviado.cuerpo'] = array('campo' => 'Cuerpo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.adjunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.adjunto');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.adjunto');

	$filtros['vta_comision_enviado.adjunto'] = array('campo' => 'Adjunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.codigo_envio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.codigo_envio');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.codigo_envio');

	$filtros['vta_comision_enviado.codigo_envio'] = array('campo' => 'Codigo de Envio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.codigo');

	$filtros['vta_comision_enviado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.observacion');

	$filtros['vta_comision_enviado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.orden');

	$filtros['vta_comision_enviado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_comision_enviado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.estado');

	$filtros['vta_comision_enviado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.creado');

	$filtros['vta_comision_enviado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.creado_por');

	$filtros['vta_comision_enviado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.modificado');

	$filtros['vta_comision_enviado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_comision_enviado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_comision_enviado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_comision_enviado.modificado_por');

	$filtros['vta_comision_enviado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

