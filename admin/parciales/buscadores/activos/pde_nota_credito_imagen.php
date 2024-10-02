<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_nota_credito_imagen.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_nota_credito_imagen.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.id');

	$filtros['pde_nota_credito_imagen.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.pde_nota_credito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.pde_nota_credito_id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.pde_nota_credito_id');

	$filtros['pde_nota_credito_imagen.pde_nota_credito_id'] = array('campo' => 'PdeNotaCredito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.descripcion');

	$filtros['pde_nota_credito_imagen.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.codigo');

	$filtros['pde_nota_credito_imagen.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.observacion');

	$filtros['pde_nota_credito_imagen.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.archivo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.archivo');

	$filtros['pde_nota_credito_imagen.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.peso');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.peso');

	$filtros['pde_nota_credito_imagen.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.tipo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.tipo');

	$filtros['pde_nota_credito_imagen.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.alto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.alto');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.alto');

	$filtros['pde_nota_credito_imagen.alto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.ancho') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.ancho');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.ancho');

	$filtros['pde_nota_credito_imagen.ancho'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.orden');

	$filtros['pde_nota_credito_imagen.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.estado');

	$filtros['pde_nota_credito_imagen.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.creado');

	$filtros['pde_nota_credito_imagen.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.creado_por');

	$filtros['pde_nota_credito_imagen.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.modificado');

	$filtros['pde_nota_credito_imagen.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_credito_imagen.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_credito_imagen.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_credito_imagen.modificado_por');

	$filtros['pde_nota_credito_imagen.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

