<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['gen_arbol.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('gen_arbol.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.id');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.id');

	$filtros['gen_arbol.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.descripcion');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.descripcion');

	$filtros['gen_arbol.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.gen_arbol_tipo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.gen_arbol_tipo_id');
	$o = GenArbolTipo::getOxId($criterio->getValorDeCampo('gen_arbol.gen_arbol_tipo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_arbol.gen_arbol_tipo_id');

	$filtros['gen_arbol.gen_arbol_tipo_id'] = array('campo' => 'GenArbolTipo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.codigo');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.codigo');

	$filtros['gen_arbol.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.php_clase') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.php_clase');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.php_clase');

	$filtros['gen_arbol.php_clase'] = array('campo' => 'PHP Clase', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.bd_tabla') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.bd_tabla');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.bd_tabla');

	$filtros['gen_arbol.bd_tabla'] = array('campo' => 'BD Tabla', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.observacion');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.observacion');

	$filtros['gen_arbol.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.orden');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.orden');

	$filtros['gen_arbol.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('gen_arbol.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('gen_arbol.estado');

	$filtros['gen_arbol.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.creado');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.creado');

	$filtros['gen_arbol.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.creado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.creado_por');

	$filtros['gen_arbol.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.modificado');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.modificado');

	$filtros['gen_arbol.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('gen_arbol.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('gen_arbol.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('gen_arbol.modificado_por');

	$filtros['gen_arbol.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

