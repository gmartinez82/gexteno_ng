<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_usuario_auditoria.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_usuario_auditoria.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.id');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.id');

	$filtros['us_usuario_auditoria.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.descripcion');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.descripcion');

	$filtros['us_usuario_auditoria.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.us_usuario_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.us_usuario_id');
	$o = UsUsuario::getOxId($criterio->getValorDeCampo('us_usuario_auditoria.us_usuario_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.us_usuario_id');

	$filtros['us_usuario_auditoria.us_usuario_id'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.tabla') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.tabla');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.tabla');

	$filtros['us_usuario_auditoria.tabla'] = array('campo' => 'Tabla', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.accion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.accion');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.accion');

	$filtros['us_usuario_auditoria.accion'] = array('campo' => 'Accion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.pagina') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.pagina');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.pagina');

	$filtros['us_usuario_auditoria.pagina'] = array('campo' => 'Pagina', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.url') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.url');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.url');

	$filtros['us_usuario_auditoria.url'] = array('campo' => 'Url', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.comando') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.comando');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.comando');

	$filtros['us_usuario_auditoria.comando'] = array('campo' => 'Comando', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.dato_before') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.dato_before');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.dato_before');

	$filtros['us_usuario_auditoria.dato_before'] = array('campo' => 'Before', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.dato_after') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.dato_after');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.dato_after');

	$filtros['us_usuario_auditoria.dato_after'] = array('campo' => 'After', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.observacion');

	$filtros['us_usuario_auditoria.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.orden');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.orden');

	$filtros['us_usuario_auditoria.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_usuario_auditoria.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.estado');

	$filtros['us_usuario_auditoria.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.creado');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.creado');

	$filtros['us_usuario_auditoria.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.creado_por');

	$filtros['us_usuario_auditoria.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.modificado');

	$filtros['us_usuario_auditoria.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario_auditoria.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario_auditoria.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_usuario_auditoria.modificado_por');

	$filtros['us_usuario_auditoria.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

