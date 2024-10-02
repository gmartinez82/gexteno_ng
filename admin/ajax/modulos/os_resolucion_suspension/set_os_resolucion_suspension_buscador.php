<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OsResolucionSuspension::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('os_resolucion_suspension.id', Gral::getVars(1, 'buscador_os_resolucion_suspension_id'), Gral::getVars(1, 'buscador_os_resolucion_suspension_id_comparador'));
	$criterio->add('os_resolucion_suspension.os_resolucion_id', Gral::getVars(1, 'buscador_os_resolucion_suspension_os_resolucion_id'), Gral::getVars(1, 'buscador_os_resolucion_suspension_os_resolucion_id_comparador'));
	$criterio->add('os_resolucion_suspension.dias_suspension', Gral::getVars(1, 'buscador_os_resolucion_suspension_dias_suspension'), Gral::getVars(1, 'buscador_os_resolucion_suspension_dias_suspension_comparador'));
	$criterio->add('os_resolucion_suspension.fecha_inicio', Gral::getFechaToDB(Gral::getVars(1, 'buscador_os_resolucion_suspension_fecha_inicio')), Gral::getVars(1, 'buscador_os_resolucion_suspension_fecha_inicio_comparador'));
	$criterio->add('os_resolucion_suspension.fecha_fin', Gral::getFechaToDB(Gral::getVars(1, 'buscador_os_resolucion_suspension_fecha_fin')), Gral::getVars(1, 'buscador_os_resolucion_suspension_fecha_fin_comparador'));
	$criterio->add('os_resolucion_suspension.fecha_reintegro', Gral::getFechaToDB(Gral::getVars(1, 'buscador_os_resolucion_suspension_fecha_reintegro')), Gral::getVars(1, 'buscador_os_resolucion_suspension_fecha_reintegro_comparador'));
	$criterio->add('os_resolucion_suspension.descripcion', Gral::getVars(1, 'buscador_os_resolucion_suspension_descripcion'), Gral::getVars(1, 'buscador_os_resolucion_suspension_descripcion_comparador'));
	$criterio->add('os_resolucion_suspension.codigo', Gral::getVars(1, 'buscador_os_resolucion_suspension_codigo'), Gral::getVars(1, 'buscador_os_resolucion_suspension_codigo_comparador'));
	$criterio->add('os_resolucion_suspension.nota_publica', Gral::getVars(1, 'buscador_os_resolucion_suspension_nota_publica'), Gral::getVars(1, 'buscador_os_resolucion_suspension_nota_publica_comparador'));
	$criterio->add('os_resolucion_suspension.observacion', Gral::getVars(1, 'buscador_os_resolucion_suspension_observacion'), Gral::getVars(1, 'buscador_os_resolucion_suspension_observacion_comparador'));
	$criterio->add('os_resolucion_suspension.estado', Gral::getVars(1, 'buscador_os_resolucion_suspension_estado'), Gral::getVars(1, 'buscador_os_resolucion_suspension_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('os_resolucion_suspension');
		$criterio->setCriterios();		
}
?>

