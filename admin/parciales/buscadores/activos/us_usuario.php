<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['us_usuario.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('us_agrupado.us_grupo_id') != ''){
	$valor = $criterio->getValorDeCampo('us_agrupado.us_grupo_id');
	$o = UsGrupo::getOxId($criterio->getValorDeCampo('us_agrupado.us_grupo_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_agrupado.us_grupo_id');

	$filtros['us_agrupado.us_grupo_id'] = array('campo' => 'UsGrupo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_acreditado.us_credencial_id') != ''){
	$valor = $criterio->getValorDeCampo('us_acreditado.us_credencial_id');
	$o = UsCredencial::getOxId($criterio->getValorDeCampo('us_acreditado.us_credencial_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_acreditado.us_credencial_id');

	$filtros['us_acreditado.us_credencial_id'] = array('campo' => 'UsCredencial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.id');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.id');

	$filtros['us_usuario.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.gral_lenguaje_id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.gral_lenguaje_id');
	$o = GralLenguaje::getOxId($criterio->getValorDeCampo('us_usuario.gral_lenguaje_id'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario.gral_lenguaje_id');

	$filtros['us_usuario.gral_lenguaje_id'] = array('campo' => 'Lenguaje', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.descripcion');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.descripcion');

	$filtros['us_usuario.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.apellido') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.apellido');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.apellido');

	$filtros['us_usuario.apellido'] = array('campo' => 'Apellido', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.nombre') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.nombre');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.nombre');

	$filtros['us_usuario.nombre'] = array('campo' => 'Nombre', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.usuario') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.usuario');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.usuario');

	$filtros['us_usuario.usuario'] = array('campo' => 'Usuario', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.codigo');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.codigo');

	$filtros['us_usuario.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.hash') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.hash');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.hash');

	$filtros['us_usuario.hash'] = array('campo' => 'Hash', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.email') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.email');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.email');

	$filtros['us_usuario.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.telefono') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.telefono');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.telefono');

	$filtros['us_usuario.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.celular') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.celular');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.celular');

	$filtros['us_usuario.celular'] = array('campo' => 'Celular', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.absoluto') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.absoluto');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_usuario.absoluto'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario.absoluto');

	$filtros['us_usuario.absoluto'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.observacion');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.observacion');

	$filtros['us_usuario.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.orden');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.orden');

	$filtros['us_usuario.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.activado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.activado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_usuario.activado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario.activado');

	$filtros['us_usuario.activado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.estado');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('us_usuario.estado'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('us_usuario.estado');

	$filtros['us_usuario.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.creado');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.creado');

	$filtros['us_usuario.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.creado_por');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.creado_por');

	$filtros['us_usuario.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.modificado');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.modificado');

	$filtros['us_usuario.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('us_usuario.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('us_usuario.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('us_usuario.modificado_por');

	$filtros['us_usuario.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

