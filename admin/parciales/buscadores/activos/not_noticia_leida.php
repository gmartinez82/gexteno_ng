<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_noticia_leida.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_noticia_leida.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.id');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.id');

	$filtros['not_noticia_leida.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.descripcion');

	$filtros['not_noticia_leida.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.not_noticia_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.not_noticia_id');
	$o = NotNoticia::getOxId($criterio->getValorDeCampo('not_noticia_leida.not_noticia_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.not_noticia_id');

	$filtros['not_noticia_leida.not_noticia_id'] = array('campo' => 'NotNoticia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.codigo');

	$filtros['not_noticia_leida.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.sesion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.sesion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.sesion');

	$filtros['not_noticia_leida.sesion'] = array('campo' => 'Sesion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.numero_ip') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.numero_ip');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.numero_ip');

	$filtros['not_noticia_leida.numero_ip'] = array('campo' => 'IP', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.observacion');

	$filtros['not_noticia_leida.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.orden');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.orden');

	$filtros['not_noticia_leida.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.estado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.estado');

	$filtros['not_noticia_leida.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.creado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.creado');

	$filtros['not_noticia_leida.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.creado_por');

	$filtros['not_noticia_leida.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.modificado');

	$filtros['not_noticia_leida.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_leida.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_leida.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_leida.modificado_por');

	$filtros['not_noticia_leida.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

