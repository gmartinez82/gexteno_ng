<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['xml_lenguaje_codigo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('xml_lenguaje_codigo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.id');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.id');

	$filtros['xml_lenguaje_codigo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.descripcion');

	$filtros['xml_lenguaje_codigo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_tipo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_tipo_id');
	$o = XmlLenguajeTipo::getOxId($criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_tipo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.xml_lenguaje_tipo_id');

	$filtros['xml_lenguaje_codigo.xml_lenguaje_tipo_id'] = array('campo' => 'XmlLenguajeTipo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_pagina_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_pagina_id');
	$o = XmlLenguajePagina::getOxId($criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_pagina_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.xml_lenguaje_pagina_id');

	$filtros['xml_lenguaje_codigo.xml_lenguaje_pagina_id'] = array('campo' => 'XmlLenguajePagina', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_entorno_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_entorno_id');
	$o = XmlLenguajeEntorno::getOxId($criterio->getValorDeCampo('xml_lenguaje_codigo.xml_lenguaje_entorno_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.xml_lenguaje_entorno_id');

	$filtros['xml_lenguaje_codigo.xml_lenguaje_entorno_id'] = array('campo' => 'XmlLenguajeEntorno', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.codigo');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.codigo');

	$filtros['xml_lenguaje_codigo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.observacion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.observacion');

	$filtros['xml_lenguaje_codigo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.orden');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.orden');

	$filtros['xml_lenguaje_codigo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('xml_lenguaje_codigo.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.estado');

	$filtros['xml_lenguaje_codigo.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.creado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.creado');

	$filtros['xml_lenguaje_codigo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.creado_por');

	$filtros['xml_lenguaje_codigo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.modificado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.modificado');

	$filtros['xml_lenguaje_codigo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_codigo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_codigo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_codigo.modificado_por');

	$filtros['xml_lenguaje_codigo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

