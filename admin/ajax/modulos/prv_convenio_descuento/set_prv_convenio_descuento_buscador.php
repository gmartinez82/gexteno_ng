<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvConvenioDescuento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_convenio_descuento.id', Gral::getVars(1, 'buscador_prv_convenio_descuento_id'), Gral::getVars(1, 'buscador_prv_convenio_descuento_id_comparador'));
	$criterio->add('prv_convenio_descuento.descripcion', Gral::getVars(1, 'buscador_prv_convenio_descuento_descripcion'), Gral::getVars(1, 'buscador_prv_convenio_descuento_descripcion_comparador'));
	$criterio->add('prv_convenio_descuento.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_convenio_descuento_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_convenio_descuento_prv_proveedor_id_comparador'));
	$criterio->add('prv_convenio_descuento.codigo', Gral::getVars(1, 'buscador_prv_convenio_descuento_codigo'), Gral::getVars(1, 'buscador_prv_convenio_descuento_codigo_comparador'));
	$criterio->add('prv_convenio_descuento.porcentaje_descuento', Gral::getVars(1, 'buscador_prv_convenio_descuento_porcentaje_descuento'), Gral::getVars(1, 'buscador_prv_convenio_descuento_porcentaje_descuento_comparador'));
	$criterio->add('prv_convenio_descuento.observacion', Gral::getVars(1, 'buscador_prv_convenio_descuento_observacion'), Gral::getVars(1, 'buscador_prv_convenio_descuento_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.prv_convenio_descuento_id', 'prv_convenio_descuento.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion_tipo_estado', 'prv_importacion_tipo_estado.id', 'prv_importacion.prv_importacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_importacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_importacion.ins_marca_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_convenio_descuento');
		$criterio->setCriterios();		
}
?>

