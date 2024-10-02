<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['vta_nota_credito_enviado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('vta_nota_credito_enviado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.id');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.id');

	$filtros['vta_nota_credito_enviado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.descripcion');

	$filtros['vta_nota_credito_enviado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.vta_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.vta_nota_credito_id');
	$o = VtaNotaCredito::getOxId($criterio->getValorDeCampo('vta_nota_credito_enviado.vta_nota_credito_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.vta_nota_credito_id');

	$filtros['vta_nota_credito_enviado.vta_nota_credito_id'] = array('campo' => 'VtaNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.asunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.asunto');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.asunto');

	$filtros['vta_nota_credito_enviado.asunto'] = array('campo' => 'Asunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.destinatario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.destinatario');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.destinatario');

	$filtros['vta_nota_credito_enviado.destinatario'] = array('campo' => 'Destinatario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.cuerpo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.cuerpo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.cuerpo');

	$filtros['vta_nota_credito_enviado.cuerpo'] = array('campo' => 'Cuerpo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.adjunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.adjunto');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.adjunto');

	$filtros['vta_nota_credito_enviado.adjunto'] = array('campo' => 'Adjunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.codigo_envio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.codigo_envio');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.codigo_envio');

	$filtros['vta_nota_credito_enviado.codigo_envio'] = array('campo' => 'Codigo de Envio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.codigo');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.codigo');

	$filtros['vta_nota_credito_enviado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.observacion');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.observacion');

	$filtros['vta_nota_credito_enviado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.orden');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.orden');

	$filtros['vta_nota_credito_enviado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('vta_nota_credito_enviado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.estado');

	$filtros['vta_nota_credito_enviado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.creado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.creado');

	$filtros['vta_nota_credito_enviado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.creado_por');

	$filtros['vta_nota_credito_enviado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.modificado');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.modificado');

	$filtros['vta_nota_credito_enviado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('vta_nota_credito_enviado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('vta_nota_credito_enviado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('vta_nota_credito_enviado.modificado_por');

	$filtros['vta_nota_credito_enviado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

