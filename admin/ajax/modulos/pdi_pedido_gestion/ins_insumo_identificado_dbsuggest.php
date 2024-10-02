<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$pan_panol_id = Gral::getVars(2, 'pan_panol_id', 0);
$veh_coche_id = Gral::getVars(2, 'veh_coche_id', 0);
$buscar = Gral::getVars(1, 'buscar', '.');

$array_en_sesion = Gral::getSes('MECANO_PDI_AJUSTE_INS_IDENTIFICADO_ARRAY_TMP');
if(!is_array($array_en_sesion)) $array_en_sesion = array();
$array_en_sesion_implode = implode(',', $array_en_sesion);
//Gral::prr($array_en_sesion);
//Gral::prr($array_en_sesion_implode);

$c = new Criterio();

$c->addInicioSubconsulta();
	$c->add('ins_insumo.id', $insumo_id, Criterio::IGUAL, false, '');
	$c->add('ins_insumo_identificado_tipo_estado.stock_activo', 1, Criterio::IGUAL);
	
	if(trim($array_en_sesion_implode) != ''){
		$c->add('ins_insumo_identificado.id', '('.$array_en_sesion_implode.')', Criterio::NOTIN);
	}
	if($pan_panol_id != 0){
		$c->add('ins_insumo_identificado_movimiento.pan_panol_id', $pan_panol_id, Criterio::IGUAL);
		$c->add('ins_insumo_identificado_movimiento.actual', 1, Criterio::IGUAL);
	}
	if($veh_coche_id != 0){
		$c->add('ins_insumo_identificado_movimiento.veh_coche_id', $veh_coche_id, Criterio::IGUAL);
		$c->add('ins_insumo_identificado_movimiento.actual', 1, Criterio::IGUAL);
	}
	
$c->addFinSubconsulta();

if($buscar != '...'){
$c->addInicioSubconsulta();

	$c->add('ins_insumo.descripcion', $buscar, Criterio::LIKE, false, Criterio::_AND);
	$c->add('ins_insumo.codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('ins_insumo.observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);

	$c->add('ins_insumo_identificado.descripcion', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('ins_insumo_identificado.codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('ins_insumo_identificado.observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);

	$c->add('ins_categoria.descripcion', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('ins_categoria.codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('ins_categoria.observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);
$c->addFinSubconsulta();
}

$c->addTabla('ins_insumo_identificado');
$c->addRealJoin('ins_insumo_identificado_movimiento', 'ins_insumo_identificado_movimiento.ins_insumo_identificado_id', 'ins_insumo_identificado.id', 'LEFT JOIN');
$c->addRealJoin('ins_insumo_identificado_tipo_estado', 'ins_insumo_identificado_tipo_estado.id', 'ins_insumo_identificado_movimiento.ins_insumo_identificado_tipo_estado_id', 'LEFT JOIN');
$c->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_identificado.ins_insumo_id', 'LEFT JOIN');
$c->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$c->addOrden('ins_insumo_identificado.descripcion', 'asc');
$c->setCriterios();

$os = InsInsumoIdentificado::getInsInsumoIdentificados(null, $c);
	
if(count($os) > 0){
?>
<ul>
   <?php 
   	foreach($os as $o){ 
		include "dbsuggest_uno_identificado.php";
   	} ?>
</ul>
<?php }else{ ?>
       <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php } ?>

