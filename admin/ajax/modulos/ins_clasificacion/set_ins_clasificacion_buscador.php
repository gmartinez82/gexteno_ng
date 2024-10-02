<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsClasificacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_clasificacion.id', Gral::getVars(1, 'buscador_ins_clasificacion_id'), Gral::getVars(1, 'buscador_ins_clasificacion_id_comparador'));
	$criterio->add('ins_clasificacion.descripcion', Gral::getVars(1, 'buscador_ins_clasificacion_descripcion'), Gral::getVars(1, 'buscador_ins_clasificacion_descripcion_comparador'));
	$criterio->add('ins_clasificacion.codigo', Gral::getVars(1, 'buscador_ins_clasificacion_codigo'), Gral::getVars(1, 'buscador_ins_clasificacion_codigo_comparador'));
	$criterio->add('ins_clasificacion.observacion', Gral::getVars(1, 'buscador_ins_clasificacion_observacion'), Gral::getVars(1, 'buscador_ins_clasificacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_pan_panol', 'ins_insumo_pan_panol.ins_clasificacion_id', 'ins_clasificacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_pan_panol.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_insumo_pan_panol.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_piso', 'pan_ubi_piso.id', 'ins_insumo_pan_panol.pan_ubi_piso_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_pasillo', 'pan_ubi_pasillo.id', 'ins_insumo_pan_panol.pan_ubi_pasillo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_estante', 'pan_ubi_estante.id', 'ins_insumo_pan_panol.pan_ubi_estante_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_altura', 'pan_ubi_altura.id', 'ins_insumo_pan_panol.pan_ubi_altura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_casillero', 'pan_ubi_casillero.id', 'ins_insumo_pan_panol.pan_ubi_casillero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_celda', 'pan_ubi_celda.id', 'ins_insumo_pan_panol.pan_ubi_celda_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_clasificacion');
		$criterio->setCriterios();		
}
?>

