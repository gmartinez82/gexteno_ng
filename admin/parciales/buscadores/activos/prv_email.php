<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_email.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_email.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.id');
	$comparador = $criterio->getComparadorDeCampo('prv_email.id');

	$filtros['prv_email.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_email.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_email.prv_proveedor_id');

	$filtros['prv_email.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_email.descripcion');

	$filtros['prv_email.descripcion'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_email.codigo');

	$filtros['prv_email.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_email.observacion');

	$filtros['prv_email.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_email.orden');

	$filtros['prv_email.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.estado');
	$comparador = $criterio->getComparadorDeCampo('prv_email.estado');

	$filtros['prv_email.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_email.creado');

	$filtros['prv_email.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_email.creado_por');

	$filtros['prv_email.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_email.modificado');

	$filtros['prv_email.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_email.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_email.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_email.modificado_por');

	$filtros['prv_email.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

