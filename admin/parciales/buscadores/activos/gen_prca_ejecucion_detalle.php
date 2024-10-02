<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_prca_ejecucion_detalle.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.id');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.id');

	$filtros['gen_prca_ejecucion_detalle.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.descripcion');

	$filtros['gen_prca_ejecucion_detalle.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_api_proyecto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_api_proyecto_id');
	$o = GenApiProyecto::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_api_proyecto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.gen_api_proyecto_id');

	$filtros['gen_prca_ejecucion_detalle.gen_api_proyecto_id'] = array('campo' => 'GenApiProyecto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_proceso_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_proceso_id');
	$o = GenPrcaProceso::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_proceso_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.gen_prca_proceso_id');

	$filtros['gen_prca_ejecucion_detalle.gen_prca_proceso_id'] = array('campo' => 'GenPrcaProceso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_ejecucion_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_ejecucion_id');
	$o = GenPrcaEjecucion::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.gen_prca_ejecucion_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.gen_prca_ejecucion_id');

	$filtros['gen_prca_ejecucion_detalle.gen_prca_ejecucion_id'] = array('campo' => 'GenPrcaEjecucion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.fechahora_inicio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.fechahora_inicio');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.fechahora_inicio');

	$filtros['gen_prca_ejecucion_detalle.fechahora_inicio'] = array('campo' => 'Fecha Hora Inicio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.fechahora_fin') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.fechahora_fin');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.fechahora_fin');

	$filtros['gen_prca_ejecucion_detalle.fechahora_fin'] = array('campo' => 'Fecha Hora Fin', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.iniciado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.iniciado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.iniciado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.iniciado');

	$filtros['gen_prca_ejecucion_detalle.iniciado'] = array('campo' => 'Iniciado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.finalizado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.finalizado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.finalizado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.finalizado');

	$filtros['gen_prca_ejecucion_detalle.finalizado'] = array('campo' => 'Finalizado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.codigo');

	$filtros['gen_prca_ejecucion_detalle.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.id_remoto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.id_remoto');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.id_remoto');

	$filtros['gen_prca_ejecucion_detalle.id_remoto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.confirmado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.confirmado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.confirmado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.confirmado');

	$filtros['gen_prca_ejecucion_detalle.confirmado'] = array('campo' => 'Confirmado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.observacion');

	$filtros['gen_prca_ejecucion_detalle.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.orden');

	$filtros['gen_prca_ejecucion_detalle.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.estado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.estado');

	$filtros['gen_prca_ejecucion_detalle.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.creado');

	$filtros['gen_prca_ejecucion_detalle.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.creado_por');

	$filtros['gen_prca_ejecucion_detalle.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.modificado');

	$filtros['gen_prca_ejecucion_detalle.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion_detalle.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion_detalle.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion_detalle.modificado_por');

	$filtros['gen_prca_ejecucion_detalle.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

