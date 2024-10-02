<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_prca_ejecucion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_prca_ejecucion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.id');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.id');

	$filtros['gen_prca_ejecucion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.descripcion');

	$filtros['gen_prca_ejecucion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.gen_api_proyecto_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.gen_api_proyecto_id');
	$o = GenApiProyecto::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion.gen_api_proyecto_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.gen_api_proyecto_id');

	$filtros['gen_prca_ejecucion.gen_api_proyecto_id'] = array('campo' => 'GenApiProyecto', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.gen_prca_proceso_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.gen_prca_proceso_id');
	$o = GenPrcaProceso::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion.gen_prca_proceso_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.gen_prca_proceso_id');

	$filtros['gen_prca_ejecucion.gen_prca_proceso_id'] = array('campo' => 'GenPrcaProceso', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.fechahora_inicio') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.fechahora_inicio');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.fechahora_inicio');

	$filtros['gen_prca_ejecucion.fechahora_inicio'] = array('campo' => 'Fecha Hora Inicio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.fechahora_fin') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.fechahora_fin');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.fechahora_fin');

	$filtros['gen_prca_ejecucion.fechahora_fin'] = array('campo' => 'Fecha Hora Fin', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.iniciado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.iniciado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion.iniciado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.iniciado');

	$filtros['gen_prca_ejecucion.iniciado'] = array('campo' => 'Iniciado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.finalizado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.finalizado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion.finalizado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.finalizado');

	$filtros['gen_prca_ejecucion.finalizado'] = array('campo' => 'Finalizado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.codigo');

	$filtros['gen_prca_ejecucion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.id_remoto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.id_remoto');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.id_remoto');

	$filtros['gen_prca_ejecucion.id_remoto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.confirmado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.confirmado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_prca_ejecucion.confirmado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.confirmado');

	$filtros['gen_prca_ejecucion.confirmado'] = array('campo' => 'Confirmado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.observacion');

	$filtros['gen_prca_ejecucion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.orden');

	$filtros['gen_prca_ejecucion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.estado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.estado');

	$filtros['gen_prca_ejecucion.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.creado');

	$filtros['gen_prca_ejecucion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.creado_por');

	$filtros['gen_prca_ejecucion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.modificado');

	$filtros['gen_prca_ejecucion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_prca_ejecucion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_prca_ejecucion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_prca_ejecucion.modificado_por');

	$filtros['gen_prca_ejecucion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

