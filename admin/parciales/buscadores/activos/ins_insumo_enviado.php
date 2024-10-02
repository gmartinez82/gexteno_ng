<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ins_insumo_enviado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ins_insumo_enviado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.id');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.id');

	$filtros['ins_insumo_enviado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.descripcion');

	$filtros['ins_insumo_enviado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.ins_insumo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.ins_insumo_id');
	$o = InsInsumo::getOxId($criterio->getValorDeCampo('ins_insumo_enviado.ins_insumo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.ins_insumo_id');

	$filtros['ins_insumo_enviado.ins_insumo_id'] = array('campo' => 'InsInsumo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.asunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.asunto');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.asunto');

	$filtros['ins_insumo_enviado.asunto'] = array('campo' => 'Asunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.destinatario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.destinatario');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.destinatario');

	$filtros['ins_insumo_enviado.destinatario'] = array('campo' => 'Destinatario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.cuerpo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.cuerpo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.cuerpo');

	$filtros['ins_insumo_enviado.cuerpo'] = array('campo' => 'Cuerpo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.adjunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.adjunto');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.adjunto');

	$filtros['ins_insumo_enviado.adjunto'] = array('campo' => 'Adjunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.codigo_envio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.codigo_envio');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.codigo_envio');

	$filtros['ins_insumo_enviado.codigo_envio'] = array('campo' => 'Codigo de Envio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.codigo');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.codigo');

	$filtros['ins_insumo_enviado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.observacion');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.observacion');

	$filtros['ins_insumo_enviado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.orden');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.orden');

	$filtros['ins_insumo_enviado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ins_insumo_enviado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.estado');

	$filtros['ins_insumo_enviado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.creado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.creado');

	$filtros['ins_insumo_enviado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.creado_por');

	$filtros['ins_insumo_enviado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.modificado');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.modificado');

	$filtros['ins_insumo_enviado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ins_insumo_enviado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ins_insumo_enviado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ins_insumo_enviado.modificado_por');

	$filtros['ins_insumo_enviado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

