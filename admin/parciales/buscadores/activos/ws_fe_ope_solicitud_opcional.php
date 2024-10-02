<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ws_fe_ope_solicitud_opcional.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.id');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.id');

	$filtros['ws_fe_ope_solicitud_opcional.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.descripcion');

	$filtros['ws_fe_ope_solicitud_opcional.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id');
	$o = WsFeOpeSolicitud::getOxId($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id');

	$filtros['ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id'] = array('campo' => 'WsFeOpeSolicitud', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo');

	$filtros['ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_valor') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_valor');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.ws_fe_afip_valor');

	$filtros['ws_fe_ope_solicitud_opcional.ws_fe_afip_valor'] = array('campo' => 'Valor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.codigo');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.codigo');

	$filtros['ws_fe_ope_solicitud_opcional.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.observacion');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.observacion');

	$filtros['ws_fe_ope_solicitud_opcional.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.creado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.creado');

	$filtros['ws_fe_ope_solicitud_opcional.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.creado_por');

	$filtros['ws_fe_ope_solicitud_opcional.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.modificado');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.modificado');

	$filtros['ws_fe_ope_solicitud_opcional.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ws_fe_ope_solicitud_opcional.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ws_fe_ope_solicitud_opcional.modificado_por');

	$filtros['ws_fe_ope_solicitud_opcional.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

