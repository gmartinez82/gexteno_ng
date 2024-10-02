<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OsEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('os_estado.id', Gral::getVars(1, 'buscador_os_estado_id'), Gral::getVars(1, 'buscador_os_estado_id_comparador'));
	$criterio->add('os_estado.os_orden_servicio_id', Gral::getVars(1, 'buscador_os_estado_os_orden_servicio_id'), Gral::getVars(1, 'buscador_os_estado_os_orden_servicio_id_comparador'));
	$criterio->add('os_estado.os_tipo_estado_id', Gral::getVars(1, 'buscador_os_estado_os_tipo_estado_id'), Gral::getVars(1, 'buscador_os_estado_os_tipo_estado_id_comparador'));
	$criterio->add('os_estado.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_os_estado_fecha')), Gral::getVars(1, 'buscador_os_estado_fecha_comparador'));
	$criterio->add('os_estado.descripcion', Gral::getVars(1, 'buscador_os_estado_descripcion'), Gral::getVars(1, 'buscador_os_estado_descripcion_comparador'));
	$criterio->add('os_estado.codigo', Gral::getVars(1, 'buscador_os_estado_codigo'), Gral::getVars(1, 'buscador_os_estado_codigo_comparador'));
	$criterio->add('os_estado.observacion', Gral::getVars(1, 'buscador_os_estado_observacion'), Gral::getVars(1, 'buscador_os_estado_observacion_comparador'));
	$criterio->add('os_estado.estado', Gral::getVars(1, 'buscador_os_estado_estado'), Gral::getVars(1, 'buscador_os_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('os_estado');
		$criterio->setCriterios();		
}
?>

