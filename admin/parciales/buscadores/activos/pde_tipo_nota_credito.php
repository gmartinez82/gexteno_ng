<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_tipo_nota_credito.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_tipo_nota_credito.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.id');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.id');

	$filtros['pde_tipo_nota_credito.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.descripcion');

	$filtros['pde_tipo_nota_credito.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.codigo_min') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.codigo_min');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.codigo_min');

	$filtros['pde_tipo_nota_credito.codigo_min'] = array('campo' => 'Codigo Min', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.codigo');

	$filtros['pde_tipo_nota_credito.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.observacion');

	$filtros['pde_tipo_nota_credito.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.orden');

	$filtros['pde_tipo_nota_credito.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('pde_tipo_nota_credito.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.estado');

	$filtros['pde_tipo_nota_credito.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.creado');

	$filtros['pde_tipo_nota_credito.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.creado_por');

	$filtros['pde_tipo_nota_credito.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.modificado');

	$filtros['pde_tipo_nota_credito.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_tipo_nota_credito.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_tipo_nota_credito.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_tipo_nota_credito.modificado_por');

	$filtros['pde_tipo_nota_credito.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

