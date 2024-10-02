<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_oc_enviado.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_oc_enviado.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.id');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.id');

	$filtros['pde_oc_enviado.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.descripcion');

	$filtros['pde_oc_enviado.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.pde_oc_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.pde_oc_id');
	$o = PdeOc::getOxId($criterio->getValorDeCampo('pde_oc_enviado.pde_oc_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.pde_oc_id');

	$filtros['pde_oc_enviado.pde_oc_id'] = array('campo' => 'PdeOc', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.asunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.asunto');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.asunto');

	$filtros['pde_oc_enviado.asunto'] = array('campo' => 'Asunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.destinatario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.destinatario');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.destinatario');

	$filtros['pde_oc_enviado.destinatario'] = array('campo' => 'Destinatario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.cuerpo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.cuerpo');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.cuerpo');

	$filtros['pde_oc_enviado.cuerpo'] = array('campo' => 'Cuerpo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.adjunto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.adjunto');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.adjunto');

	$filtros['pde_oc_enviado.adjunto'] = array('campo' => 'Adjunto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.codigo_envio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.codigo_envio');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.codigo_envio');

	$filtros['pde_oc_enviado.codigo_envio'] = array('campo' => 'Codigo de Envio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.codigo');

	$filtros['pde_oc_enviado.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.observacion');

	$filtros['pde_oc_enviado.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.orden');

	$filtros['pde_oc_enviado.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_oc_enviado.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.estado');

	$filtros['pde_oc_enviado.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.creado');

	$filtros['pde_oc_enviado.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.creado_por');

	$filtros['pde_oc_enviado.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.modificado');

	$filtros['pde_oc_enviado.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_oc_enviado.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_oc_enviado.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_oc_enviado.modificado_por');

	$filtros['pde_oc_enviado.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

