<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['prv_preventista.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('prv_preventista.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.id');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.id');

	$filtros['prv_preventista.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.descripcion');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.descripcion');

	$filtros['prv_preventista.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.prv_proveedor_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.prv_proveedor_id');
	$o = PrvProveedor::getOxId($criterio->getValorDeCampo('prv_preventista.prv_proveedor_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_preventista.prv_proveedor_id');

	$filtros['prv_preventista.prv_proveedor_id'] = array('campo' => 'PrvProveedor', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.apellido');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.apellido');

	$filtros['prv_preventista.apellido'] = array('campo' => 'Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.nombre');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.nombre');

	$filtros['prv_preventista.nombre'] = array('campo' => 'Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.email');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.email');

	$filtros['prv_preventista.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.telefono');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.telefono');

	$filtros['prv_preventista.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.celular') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.celular');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.celular');

	$filtros['prv_preventista.celular'] = array('campo' => 'Celular', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.codigo');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.codigo');

	$filtros['prv_preventista.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.observacion');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.observacion');

	$filtros['prv_preventista.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.orden');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.orden');

	$filtros['prv_preventista.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('prv_preventista.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('prv_preventista.estado');

	$filtros['prv_preventista.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.creado');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.creado');

	$filtros['prv_preventista.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.creado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.creado_por');

	$filtros['prv_preventista.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.modificado');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.modificado');

	$filtros['prv_preventista.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('prv_preventista.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('prv_preventista.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('prv_preventista.modificado_por');

	$filtros['prv_preventista.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

