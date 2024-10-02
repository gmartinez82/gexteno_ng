<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['app_mov_dispositivo.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('app_mov_dispositivo.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.id');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.id');

	$filtros['app_mov_dispositivo.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.descripcion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.descripcion');

	$filtros['app_mov_dispositivo.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.codigo');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.codigo');

	$filtros['app_mov_dispositivo.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.so_descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.so_descripcion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.so_descripcion');

	$filtros['app_mov_dispositivo.so_descripcion'] = array('campo' => 'S.O. Descr', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.so_version') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.so_version');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.so_version');

	$filtros['app_mov_dispositivo.so_version'] = array('campo' => 'S.O. Version', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.marca') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.marca');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.marca');

	$filtros['app_mov_dispositivo.marca'] = array('campo' => 'Marca', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.modelo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.modelo');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.modelo');

	$filtros['app_mov_dispositivo.modelo'] = array('campo' => 'Modelo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.imei') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.imei');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.imei');

	$filtros['app_mov_dispositivo.imei'] = array('campo' => 'IMEI', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.telefono_nro') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.telefono_nro');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.telefono_nro');

	$filtros['app_mov_dispositivo.telefono_nro'] = array('campo' => 'Telefono Nro', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.titular_apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.titular_apellido');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.titular_apellido');

	$filtros['app_mov_dispositivo.titular_apellido'] = array('campo' => 'Titular Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.titular_nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.titular_nombre');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.titular_nombre');

	$filtros['app_mov_dispositivo.titular_nombre'] = array('campo' => 'Titular Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.observacion');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.observacion');

	$filtros['app_mov_dispositivo.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.orden');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.orden');

	$filtros['app_mov_dispositivo.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.estado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.estado');

	$filtros['app_mov_dispositivo.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.creado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.creado');

	$filtros['app_mov_dispositivo.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.creado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.creado_por');

	$filtros['app_mov_dispositivo.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.modificado');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.modificado');

	$filtros['app_mov_dispositivo.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('app_mov_dispositivo.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('app_mov_dispositivo.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('app_mov_dispositivo.modificado_por');

	$filtros['app_mov_dispositivo.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

