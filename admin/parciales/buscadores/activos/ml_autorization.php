<?php
$filtros = array();

if($criterio->getAmbiguo()){
	$valor = $criterio->getValorDeCampoXPos(0);
	if($valor == '') return;
	
	$comparador = Criterio::LIKE;

	//$filtros['ml_autorization.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if(!$criterio->getAmbiguo()){

if($criterio->getValorDeCampo('ml_autorization.id') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.id');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.id');

	$filtros['ml_autorization.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.descripcion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.descripcion');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.descripcion');

	$filtros['ml_autorization.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.codigo') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.codigo');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.codigo');

	$filtros['ml_autorization.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.ml_access_token') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.ml_access_token');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.ml_access_token');

	$filtros['ml_autorization.ml_access_token'] = array('campo' => 'ML Access Token', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.ml_refresh_code') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.ml_refresh_code');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.ml_refresh_code');

	$filtros['ml_autorization.ml_refresh_code'] = array('campo' => 'ML Refresh Code', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.inicial') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.inicial');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ml_autorization.inicial'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_autorization.inicial');

	$filtros['ml_autorization.inicial'] = array('campo' => 'Inicial', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.actual') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.actual');
	$o = GralSiNo::getOxId($criterio->getValorDeCampo('ml_autorization.actual'));
	$valor = $o->getDescripcion();

	$comparador = $criterio->getComparadorDeCampo('ml_autorization.actual');

	$filtros['ml_autorization.actual'] = array('campo' => 'Actual', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.observacion') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.observacion');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.observacion');

	$filtros['ml_autorization.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.orden') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.orden');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.orden');

	$filtros['ml_autorization.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.estado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.estado');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.estado');

	$filtros['ml_autorization.estado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.creado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.creado');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.creado');

	$filtros['ml_autorization.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.creado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.creado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.creado_por');

	$filtros['ml_autorization.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.modificado') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.modificado');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.modificado');

	$filtros['ml_autorization.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
}

if($criterio->getValorDeCampo('ml_autorization.modificado_por') != ''){
	$valor = $valor = $criterio->getValorDeCampo('ml_autorization.modificado_por');
	$comparador = $criterio->getComparadorDeCampo('ml_autorization.modificado_por');

	$filtros['ml_autorization.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
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

