<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['not_noticia_archivo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('not_noticia_archivo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.id');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.id');

	$filtros['not_noticia_archivo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.descripcion');

	$filtros['not_noticia_archivo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.not_noticia_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.not_noticia_id');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.not_noticia_id');

	$filtros['not_noticia_archivo.not_noticia_id'] = array('campo' => 'NotNoticia', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.not_tipo_archivo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.not_tipo_archivo_id');
	$o = NotTipoArchivo::getOxId($criterio->getValorDeCampo('not_noticia_archivo.not_tipo_archivo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.not_tipo_archivo_id');

	$filtros['not_noticia_archivo.not_tipo_archivo_id'] = array('campo' => 'NotTipoArchivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.codigo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.codigo');

	$filtros['not_noticia_archivo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.observacion');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.observacion');

	$filtros['not_noticia_archivo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.orden');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.orden');

	$filtros['not_noticia_archivo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.estado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.estado');

	$filtros['not_noticia_archivo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.creado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.creado');

	$filtros['not_noticia_archivo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.creado_por');

	$filtros['not_noticia_archivo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.modificado');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.modificado');

	$filtros['not_noticia_archivo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.modificado_por');

	$filtros['not_noticia_archivo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.archivo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.archivo');

	$filtros['not_noticia_archivo.archivo'] = array('campo' => 'Archivo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.peso');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.peso');

	$filtros['not_noticia_archivo.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('not_noticia_archivo.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('not_noticia_archivo.tipo');
	$comparador = $criterio->getComparadorDeCampo('not_noticia_archivo.tipo');

	$filtros['not_noticia_archivo.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

