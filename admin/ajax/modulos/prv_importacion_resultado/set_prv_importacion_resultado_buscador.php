<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvImportacionResultado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_importacion_resultado.id', Gral::getVars(1, 'buscador_prv_importacion_resultado_id'), Gral::getVars(1, 'buscador_prv_importacion_resultado_id_comparador'));
	$criterio->add('prv_importacion_resultado.descripcion', Gral::getVars(1, 'buscador_prv_importacion_resultado_descripcion'), Gral::getVars(1, 'buscador_prv_importacion_resultado_descripcion_comparador'));
	$criterio->add('prv_importacion_resultado.prv_importacion_id', Gral::getVars(1, 'buscador_prv_importacion_resultado_prv_importacion_id'), Gral::getVars(1, 'buscador_prv_importacion_resultado_prv_importacion_id_comparador'));
	$criterio->add('prv_importacion_resultado.codigo', Gral::getVars(1, 'buscador_prv_importacion_resultado_codigo'), Gral::getVars(1, 'buscador_prv_importacion_resultado_codigo_comparador'));
	$criterio->add('prv_importacion_resultado.observacion', Gral::getVars(1, 'buscador_prv_importacion_resultado_observacion'), Gral::getVars(1, 'buscador_prv_importacion_resultado_observacion_comparador'));
	$criterio->add('prv_importacion_resultado.observacion_tecnica', Gral::getVars(1, 'buscador_prv_importacion_resultado_observacion_tecnica'), Gral::getVars(1, 'buscador_prv_importacion_resultado_observacion_tecnica_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_importacion_resultado');
		$criterio->setCriterios();		
}
?>

