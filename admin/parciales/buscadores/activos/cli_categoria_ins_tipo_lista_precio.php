<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['cli_categoria_ins_tipo_lista_precio.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.id');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.id');

	$filtros['cli_categoria_ins_tipo_lista_precio.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.descripcion');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.descripcion');

	$filtros['cli_categoria_ins_tipo_lista_precio.descripcion'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.cli_categoria_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.cli_categoria_id');
	$o = CliCategoria::getOxId($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.cli_categoria_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.cli_categoria_id');

	$filtros['cli_categoria_ins_tipo_lista_precio.cli_categoria_id'] = array('campo' => 'CliCategoria', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id');
	$o = InsTipoListaPrecio::getOxId($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id');

	$filtros['cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id'] = array('campo' => 'InsTipoListaPrecio', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.predeterminado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.predeterminado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.predeterminado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.predeterminado');

	$filtros['cli_categoria_ins_tipo_lista_precio.predeterminado'] = array('campo' => 'Predeterminado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.codigo');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.codigo');

	$filtros['cli_categoria_ins_tipo_lista_precio.codigo'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.observacion');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.observacion');

	$filtros['cli_categoria_ins_tipo_lista_precio.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.orden');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.orden');

	$filtros['cli_categoria_ins_tipo_lista_precio.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.estado');

	$filtros['cli_categoria_ins_tipo_lista_precio.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.creado');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.creado');

	$filtros['cli_categoria_ins_tipo_lista_precio.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.creado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.creado_por');

	$filtros['cli_categoria_ins_tipo_lista_precio.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.modificado');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.modificado');

	$filtros['cli_categoria_ins_tipo_lista_precio.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('cli_categoria_ins_tipo_lista_precio.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('cli_categoria_ins_tipo_lista_precio.modificado_por');

	$filtros['cli_categoria_ins_tipo_lista_precio.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

