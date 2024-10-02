<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamVehiculoTipoVenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_vehiculo_tipo_venta.id', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_id'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_id_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_venta.descripcion', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_descripcion'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_descripcion_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_venta.codigo', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_codigo'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_codigo_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_venta.codigo_eku', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_codigo_eku_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_venta.observacion', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_observacion'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_observacion_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_venta.estado', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_estado'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_venta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_vehiculo_tipo_venta');
		$criterio->setCriterios();		
}
?>

