<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_nota_debito_archivo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_nota_debito_archivo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.id');

	$filtros['pde_nota_debito_archivo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.descripcion');

	$filtros['pde_nota_debito_archivo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.pde_nota_debito_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.pde_nota_debito_id');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.pde_nota_debito_id');

	$filtros['pde_nota_debito_archivo.pde_nota_debito_id'] = array('campo' => 'PdeNotaDebito', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.codigo');

	$filtros['pde_nota_debito_archivo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.observacion');

	$filtros['pde_nota_debito_archivo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.orden');

	$filtros['pde_nota_debito_archivo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.estado');

	$filtros['pde_nota_debito_archivo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.creado');

	$filtros['pde_nota_debito_archivo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.creado_por');

	$filtros['pde_nota_debito_archivo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.modificado');

	$filtros['pde_nota_debito_archivo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.modificado_por');

	$filtros['pde_nota_debito_archivo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.archivo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.archivo');

	$filtros['pde_nota_debito_archivo.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.peso');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.peso');

	$filtros['pde_nota_debito_archivo.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_nota_debito_archivo.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_nota_debito_archivo.tipo');
	$comparador = $criterio->getComparadorDeCampo('pde_nota_debito_archivo.tipo');

	$filtros['pde_nota_debito_archivo.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

