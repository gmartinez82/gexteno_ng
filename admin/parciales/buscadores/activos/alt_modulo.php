<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['alt_modulo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('alt_modulo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.id');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.id');

	$filtros['alt_modulo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.descripcion');

	$filtros['alt_modulo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.codigo');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.codigo');

	$filtros['alt_modulo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.observacion');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.observacion');

	$filtros['alt_modulo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.orden');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.orden');

	$filtros['alt_modulo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.estado');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.estado');

	$filtros['alt_modulo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.creado');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.creado');

	$filtros['alt_modulo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.creado_por');

	$filtros['alt_modulo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.modificado');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.modificado');

	$filtros['alt_modulo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.modificado_por');

	$filtros['alt_modulo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.clase') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.clase');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.clase');

	$filtros['alt_modulo.clase'] = array('campo' => 'Clase', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('alt_modulo.tabla') != ''){
	$valor = $valor = $criterio->getValorDeCampo('alt_modulo.tabla');
	$comparador = $criterio->getComparadorDeCampo('alt_modulo.tabla');

	$filtros['alt_modulo.tabla'] = array('campo' => 'Tabla', 'valor' => $valor, 'comparador' => $comparador);
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

