<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['pde_recibo_archivo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('pde_recibo_archivo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.id');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.id');

	$filtros['pde_recibo_archivo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.descripcion');

	$filtros['pde_recibo_archivo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.pde_recibo_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.pde_recibo_id');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.pde_recibo_id');

	$filtros['pde_recibo_archivo.pde_recibo_id'] = array('campo' => 'PdeRecibo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.codigo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.codigo');

	$filtros['pde_recibo_archivo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.observacion');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.observacion');

	$filtros['pde_recibo_archivo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.orden');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.orden');

	$filtros['pde_recibo_archivo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.estado');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.estado');

	$filtros['pde_recibo_archivo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.creado');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.creado');

	$filtros['pde_recibo_archivo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.creado_por');

	$filtros['pde_recibo_archivo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.modificado');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.modificado');

	$filtros['pde_recibo_archivo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.modificado_por');

	$filtros['pde_recibo_archivo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.archivo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.archivo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.archivo');

	$filtros['pde_recibo_archivo.archivo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.peso') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.peso');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.peso');

	$filtros['pde_recibo_archivo.peso'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('pde_recibo_archivo.tipo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('pde_recibo_archivo.tipo');
	$comparador = $criterio->getComparadorDeCampo('pde_recibo_archivo.tipo');

	$filtros['pde_recibo_archivo.tipo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

