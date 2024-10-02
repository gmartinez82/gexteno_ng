<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaHojaRuta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_hoja_ruta.id', Gral::getVars(1, 'buscador_vta_hoja_ruta_id'), Gral::getVars(1, 'buscador_vta_hoja_ruta_id_comparador'));
	$criterio->add('vta_hoja_ruta.descripcion', Gral::getVars(1, 'buscador_vta_hoja_ruta_descripcion'), Gral::getVars(1, 'buscador_vta_hoja_ruta_descripcion_comparador'));
	$criterio->add('vta_hoja_ruta.gral_ruta_id', Gral::getVars(1, 'buscador_vta_hoja_ruta_gral_ruta_id'), Gral::getVars(1, 'buscador_vta_hoja_ruta_gral_ruta_id_comparador'));
	$criterio->add('vta_hoja_ruta.ope_chofer_id', Gral::getVars(1, 'buscador_vta_hoja_ruta_ope_chofer_id'), Gral::getVars(1, 'buscador_vta_hoja_ruta_ope_chofer_id_comparador'));
	$criterio->add('vta_hoja_ruta.vta_hoja_ruta_tipo_estado_id', Gral::getVars(1, 'buscador_vta_hoja_ruta_vta_hoja_ruta_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_hoja_ruta_vta_hoja_ruta_tipo_estado_id_comparador'));
	$criterio->add('vta_hoja_ruta.codigo', Gral::getVars(1, 'buscador_vta_hoja_ruta_codigo'), Gral::getVars(1, 'buscador_vta_hoja_ruta_codigo_comparador'));
	$criterio->add('vta_hoja_ruta.observacion', Gral::getVars(1, 'buscador_vta_hoja_ruta_observacion'), Gral::getVars(1, 'buscador_vta_hoja_ruta_observacion_comparador'));
	$criterio->add('vta_hoja_ruta.estado', Gral::getVars(1, 'buscador_vta_hoja_ruta_estado'), Gral::getVars(1, 'buscador_vta_hoja_ruta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_hoja_ruta_estado', 'vta_hoja_ruta_estado.vta_hoja_ruta_id', 'vta_hoja_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta_tipo_estado', 'vta_hoja_ruta_tipo_estado.id', 'vta_hoja_ruta_estado.vta_hoja_ruta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta_vta_remito', 'vta_hoja_ruta_vta_remito.vta_hoja_ruta_id', 'vta_hoja_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'vta_hoja_ruta_vta_remito.vta_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta_vta_remito_ajuste', 'vta_hoja_ruta_vta_remito_ajuste.vta_hoja_ruta_id', 'vta_hoja_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste', 'vta_remito_ajuste.id', 'vta_hoja_ruta_vta_remito_ajuste.vta_remito_ajuste_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_hoja_ruta');
		$criterio->setCriterios();		
}
?>

