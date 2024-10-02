<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['xml_lenguaje_pagina.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('xml_lenguaje_pagina.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.id');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.id');

	$filtros['xml_lenguaje_pagina.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.descripcion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.descripcion');

	$filtros['xml_lenguaje_pagina.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.codigo');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.codigo');

	$filtros['xml_lenguaje_pagina.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.observacion');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.observacion');

	$filtros['xml_lenguaje_pagina.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.orden');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.orden');

	$filtros['xml_lenguaje_pagina.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.estado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.estado');

	$filtros['xml_lenguaje_pagina.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.creado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.creado');

	$filtros['xml_lenguaje_pagina.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.creado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.creado_por');

	$filtros['xml_lenguaje_pagina.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.modificado');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.modificado');

	$filtros['xml_lenguaje_pagina.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('xml_lenguaje_pagina.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('xml_lenguaje_pagina.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('xml_lenguaje_pagina.modificado_por');

	$filtros['xml_lenguaje_pagina.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

