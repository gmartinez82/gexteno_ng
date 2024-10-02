<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PanUbiPiso::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pan_ubi_piso.id', Gral::getVars(1, 'buscador_pan_ubi_piso_id'), Gral::getVars(1, 'buscador_pan_ubi_piso_id_comparador'));
	$criterio->add('pan_ubi_piso.descripcion', Gral::getVars(1, 'buscador_pan_ubi_piso_descripcion'), Gral::getVars(1, 'buscador_pan_ubi_piso_descripcion_comparador'));
	$criterio->add('pan_ubi_piso.codigo', Gral::getVars(1, 'buscador_pan_ubi_piso_codigo'), Gral::getVars(1, 'buscador_pan_ubi_piso_codigo_comparador'));
	$criterio->add('pan_ubi_piso.observacion', Gral::getVars(1, 'buscador_pan_ubi_piso_observacion'), Gral::getVars(1, 'buscador_pan_ubi_piso_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_pan_panol', 'ins_insumo_pan_panol.pan_ubi_piso_id', 'pan_ubi_piso.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_pan_panol.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_insumo_pan_panol.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_pasillo', 'pan_ubi_pasillo.id', 'ins_insumo_pan_panol.pan_ubi_pasillo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_estante', 'pan_ubi_estante.id', 'ins_insumo_pan_panol.pan_ubi_estante_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_altura', 'pan_ubi_altura.id', 'ins_insumo_pan_panol.pan_ubi_altura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_casillero', 'pan_ubi_casillero.id', 'ins_insumo_pan_panol.pan_ubi_casillero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_celda', 'pan_ubi_celda.id', 'ins_insumo_pan_panol.pan_ubi_celda_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_clasificacion', 'ins_clasificacion.id', 'ins_insumo_pan_panol.ins_clasificacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pan_ubi_piso');
		$criterio->setCriterios();		
}
?>

