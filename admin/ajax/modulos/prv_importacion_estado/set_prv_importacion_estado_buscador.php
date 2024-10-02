<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvImportacionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_importacion_estado.id', Gral::getVars(1, 'buscador_prv_importacion_estado_id'), Gral::getVars(1, 'buscador_prv_importacion_estado_id_comparador'));
	$criterio->add('prv_importacion_estado.descripcion', Gral::getVars(1, 'buscador_prv_importacion_estado_descripcion'), Gral::getVars(1, 'buscador_prv_importacion_estado_descripcion_comparador'));
	$criterio->add('prv_importacion_estado.prv_importacion_id', Gral::getVars(1, 'buscador_prv_importacion_estado_prv_importacion_id'), Gral::getVars(1, 'buscador_prv_importacion_estado_prv_importacion_id_comparador'));
	$criterio->add('prv_importacion_estado.prv_importacion_tipo_estado_id', Gral::getVars(1, 'buscador_prv_importacion_estado_prv_importacion_tipo_estado_id'), Gral::getVars(1, 'buscador_prv_importacion_estado_prv_importacion_tipo_estado_id_comparador'));
	$criterio->add('prv_importacion_estado.codigo', Gral::getVars(1, 'buscador_prv_importacion_estado_codigo'), Gral::getVars(1, 'buscador_prv_importacion_estado_codigo_comparador'));
	$criterio->add('prv_importacion_estado.observacion', Gral::getVars(1, 'buscador_prv_importacion_estado_observacion'), Gral::getVars(1, 'buscador_prv_importacion_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_importacion_estado');
		$criterio->setCriterios();		
}
?>

