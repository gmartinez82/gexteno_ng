<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$pan_panol_id = Gral::getVars(2, 'pan_panol_id', 0);
$veh_coche_id = Gral::getVars(2, 'veh_coche_id', 0);
$buscar = Gral::getVars(1, 'buscar', '.');

$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_categoria = $ins_insumo->getInsCategoria();
$veh_coche = VehCoche::getOxId($veh_coche_id);

$array_en_sesion = Gral::getSes('MECANO_PDI_SALIENTE_INS_IDENTIFICADO_ARRAY_TMP');
if(!is_array($array_en_sesion)) $array_en_sesion = array();
$array_en_sesion_implode = implode(',', $array_en_sesion);
$array_en_sesion_implode_string = '(0)';
if(count($array_en_sesion) > 0){
	$array_en_sesion_implode_string = '('.$array_en_sesion_implode.')';
}
//Gral::prr($array_en_sesion);
//Gral::prr($array_en_sesion_implode);

$buscar_con_restriccion_coche = true;
$aparicion_asterisco = strrpos($buscar, '#');
if($aparicion_asterisco){
	$buscar_con_restriccion_coche = false;
	$buscar = str_replace('#', '', $buscar);
}

$c = new Criterio();
$c->addInicioSubconsulta();
	$c->add('ins_categoria.id', $ins_categoria->getId(), Criterio::IGUAL, false, ''); // se proponen insumos identificados de la misma categoria del insumo
	//$c->add('ins_insumo.id', $insumo_id, Criterio::IGUAL, false, '');
	if(trim($array_en_sesion_implode_string) != ''){
		$c->add('ins_insumo_identificado.id', $array_en_sesion_implode_string, Criterio::NOTIN);
	}
	if($pan_panol_id != 0){
		$c->add('ins_insumo_identificado_movimiento.pan_panol_id', $pan_panol_id, Criterio::IGUAL);
		$c->add('ins_insumo_identificado_movimiento.actual', 1, Criterio::IGUAL);
	}
	if($veh_coche_id != 0 && $buscar_con_restriccion_coche){
		$c->add('ins_insumo_identificado_movimiento.veh_coche_id', $veh_coche_id, Criterio::IGUAL);
		$c->add('ins_insumo_identificado_movimiento.actual', 1, Criterio::IGUAL);
	}
	
$c->addFinSubconsulta();

if($buscar != '...'){
$c->addInicioSubconsulta();

	$c->add('', 'false', '', false, Criterio::_AND);

	$c->add('ins_insumo.descripcion', $buscar, Criterio::LIKE, false, Criterio::_OR);
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
       <div class="noresultado"><?php Lang::_lang('No se encontraron insumos de la categoria') ?> <strong><?php Gral::_echo($ins_categoria->getDescripcion()) ?></strong> en el coche <strong><?php Gral::_echo(($veh_coche) ? $veh_coche->getDescripcion() : '') ?></strong></div>
<?php } ?>

