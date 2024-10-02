<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['xml_lenguaje_traduccion.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.id');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.id');

	$filtros['xml_lenguaje_traduccion.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.gral_lenguaje_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.gral_lenguaje_id');
	$o = GralLenguaje::getOxId($criterio->getValorDeCampo('xml_lenguaje_traduccion.gral_lenguaje_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.gral_lenguaje_id');

	$filtros['xml_lenguaje_traduccion.gral_lenguaje_id'] = array('campo' => 'Lenguaje', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.xml_lenguaje_codigo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.xml_lenguaje_codigo_id');
	$o = XmlLenguajeCodigo::getOxId($criterio->getValorDeCampo('xml_lenguaje_traduccion.xml_lenguaje_codigo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.xml_lenguaje_codigo_id');

	$filtros['xml_lenguaje_traduccion.xml_lenguaje_codigo_id'] = array('campo' => 'Lenguaje Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.descripcion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.descripcion');

	$filtros['xml_lenguaje_traduccion.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.codigo');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.codigo');

	$filtros['xml_lenguaje_traduccion.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.traduccion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.traduccion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.traduccion');

	$filtros['xml_lenguaje_traduccion.traduccion'] = array('campo' => 'Traduccion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.observacion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.observacion');

	$filtros['xml_lenguaje_traduccion.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.orden');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.orden');

	$filtros['xml_lenguaje_traduccion.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('xml_lenguaje_traduccion.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.estado');

	$filtros['xml_lenguaje_traduccion.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.creado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.creado');

	$filtros['xml_lenguaje_traduccion.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.creado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.creado_por');

	$filtros['xml_lenguaje_traduccion.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.modificado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.modificado');

	$filtros['xml_lenguaje_traduccion.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_traduccion.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_traduccion.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_traduccion.modificado_por');

	$filtros['xml_lenguaje_traduccion.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

