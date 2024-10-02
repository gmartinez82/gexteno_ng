<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvImportacionTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_importacion_tipo_estado.id', Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_id'), Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_id_comparador'));
	$criterio->add('prv_importacion_tipo_estado.descripcion', Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_descripcion_comparador'));
	$criterio->add('prv_importacion_tipo_estado.activo', Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_activo'), Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_activo_comparador'));
	$criterio->add('prv_importacion_tipo_estado.permite_restablecer', Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_permite_restablecer'), Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_permite_restablecer_comparador'));
	$criterio->add('prv_importacion_tipo_estado.terminal', Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_terminal'), Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_terminal_comparador'));
	$criterio->add('prv_importacion_tipo_estado.codigo', Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_codigo'), Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_codigo_comparador'));
	$criterio->add('prv_importacion_tipo_estado.observacion', Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_observacion'), Gral::getVars(1, 'buscador_prv_importacion_tipo_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.prv_importacion_tipo_estado_id', 'prv_importacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_importacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_importacion.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_convenio_descuento', 'prv_convenio_descuento.id', 'prv_importacion.prv_convenio_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion_estado', 'prv_importacion_estado.prv_importacion_tipo_estado_id', 'prv_importacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_importacion_tipo_estado');
		$criterio->setCriterios();		
}
?>

