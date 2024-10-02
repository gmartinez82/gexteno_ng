<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OsResolucion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('os_resolucion.id', Gral::getVars(1, 'buscador_os_resolucion_id'), Gral::getVars(1, 'buscador_os_resolucion_id_comparador'));
	$criterio->add('os_resolucion.os_orden_servicio_id', Gral::getVars(1, 'buscador_os_resolucion_os_orden_servicio_id'), Gral::getVars(1, 'buscador_os_resolucion_os_orden_servicio_id_comparador'));
	$criterio->add('os_resolucion.os_tipo_resolucion_id', Gral::getVars(1, 'buscador_os_resolucion_os_tipo_resolucion_id'), Gral::getVars(1, 'buscador_os_resolucion_os_tipo_resolucion_id_comparador'));
	$criterio->add('os_resolucion.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_os_resolucion_fecha')), Gral::getVars(1, 'buscador_os_resolucion_fecha_comparador'));
	$criterio->add('os_resolucion.descripcion', Gral::getVars(1, 'buscador_os_resolucion_descripcion'), Gral::getVars(1, 'buscador_os_resolucion_descripcion_comparador'));
	$criterio->add('os_resolucion.codigo', Gral::getVars(1, 'buscador_os_resolucion_codigo'), Gral::getVars(1, 'buscador_os_resolucion_codigo_comparador'));
	$criterio->add('os_resolucion.nota_publica', Gral::getVars(1, 'buscador_os_resolucion_nota_publica'), Gral::getVars(1, 'buscador_os_resolucion_nota_publica_comparador'));
	$criterio->add('os_resolucion.observacion', Gral::getVars(1, 'buscador_os_resolucion_observacion'), Gral::getVars(1, 'buscador_os_resolucion_observacion_comparador'));
	$criterio->add('os_resolucion.estado', Gral::getVars(1, 'buscador_os_resolucion_estado'), Gral::getVars(1, 'buscador_os_resolucion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('os_resolucion_suspension', 'os_resolucion_suspension.os_resolucion_id', 'os_resolucion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('os_resolucion');
		$criterio->setCriterios();		
}
?>

