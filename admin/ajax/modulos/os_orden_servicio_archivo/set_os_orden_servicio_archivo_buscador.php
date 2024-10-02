<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OsOrdenServicioArchivo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('os_orden_servicio_archivo.id', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_id'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_id_comparador'));
	$criterio->add('os_orden_servicio_archivo.descripcion', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_descripcion'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_descripcion_comparador'));
	$criterio->add('os_orden_servicio_archivo.os_orden_servicio_id', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_os_orden_servicio_id'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_os_orden_servicio_id_comparador'));
	$criterio->add('os_orden_servicio_archivo.codigo', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_codigo'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_codigo_comparador'));
	$criterio->add('os_orden_servicio_archivo.observacion', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_observacion'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_observacion_comparador'));
	$criterio->add('os_orden_servicio_archivo.archivo', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_archivo'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_archivo_comparador'));
	$criterio->add('os_orden_servicio_archivo.peso', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_peso'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_peso_comparador'));
	$criterio->add('os_orden_servicio_archivo.tipo', Gral::getVars(1, 'buscador_os_orden_servicio_archivo_tipo'), Gral::getVars(1, 'buscador_os_orden_servicio_archivo_tipo_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('os_orden_servicio_archivo');
		$criterio->setCriterios();		
}
?>

