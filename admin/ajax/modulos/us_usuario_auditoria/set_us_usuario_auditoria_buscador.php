<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsUsuarioAuditoria::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_usuario_auditoria.id', Gral::getVars(1, 'buscador_us_usuario_auditoria_id'), Gral::getVars(1, 'buscador_us_usuario_auditoria_id_comparador'));
	$criterio->add('us_usuario_auditoria.descripcion', Gral::getVars(1, 'buscador_us_usuario_auditoria_descripcion'), Gral::getVars(1, 'buscador_us_usuario_auditoria_descripcion_comparador'));
	$criterio->add('us_usuario_auditoria.us_usuario_id', Gral::getVars(1, 'buscador_us_usuario_auditoria_us_usuario_id'), Gral::getVars(1, 'buscador_us_usuario_auditoria_us_usuario_id_comparador'));
	$criterio->add('us_usuario_auditoria.tabla', Gral::getVars(1, 'buscador_us_usuario_auditoria_tabla'), Gral::getVars(1, 'buscador_us_usuario_auditoria_tabla_comparador'));
	$criterio->add('us_usuario_auditoria.accion', Gral::getVars(1, 'buscador_us_usuario_auditoria_accion'), Gral::getVars(1, 'buscador_us_usuario_auditoria_accion_comparador'));
	$criterio->add('us_usuario_auditoria.pagina', Gral::getVars(1, 'buscador_us_usuario_auditoria_pagina'), Gral::getVars(1, 'buscador_us_usuario_auditoria_pagina_comparador'));
	$criterio->add('us_usuario_auditoria.url', Gral::getVars(1, 'buscador_us_usuario_auditoria_url'), Gral::getVars(1, 'buscador_us_usuario_auditoria_url_comparador'));
	$criterio->add('us_usuario_auditoria.comando', Gral::getVars(1, 'buscador_us_usuario_auditoria_comando'), Gral::getVars(1, 'buscador_us_usuario_auditoria_comando_comparador'));
	$criterio->add('us_usuario_auditoria.dato_before', Gral::getVars(1, 'buscador_us_usuario_auditoria_dato_before'), Gral::getVars(1, 'buscador_us_usuario_auditoria_dato_before_comparador'));
	$criterio->add('us_usuario_auditoria.dato_after', Gral::getVars(1, 'buscador_us_usuario_auditoria_dato_after'), Gral::getVars(1, 'buscador_us_usuario_auditoria_dato_after_comparador'));
	$criterio->add('us_usuario_auditoria.observacion', Gral::getVars(1, 'buscador_us_usuario_auditoria_observacion'), Gral::getVars(1, 'buscador_us_usuario_auditoria_observacion_comparador'));
	$criterio->add('us_usuario_auditoria.estado', Gral::getVars(1, 'buscador_us_usuario_auditoria_estado'), Gral::getVars(1, 'buscador_us_usuario_auditoria_estado_comparador'));
	$criterio->add('us_usuario_auditoria.creado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_usuario_auditoria_creado')), Gral::getVars(1, 'buscador_us_usuario_auditoria_creado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_usuario_auditoria');
		$criterio->setCriterios();		
}
?>

