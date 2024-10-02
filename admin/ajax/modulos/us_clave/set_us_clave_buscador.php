<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsClave::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_clave.id', Gral::getVars(1, 'buscador_us_clave_id'), Gral::getVars(1, 'buscador_us_clave_id_comparador'));
	$criterio->add('us_clave.us_usuario_id', Gral::getVars(1, 'buscador_us_clave_us_usuario_id'), Gral::getVars(1, 'buscador_us_clave_us_usuario_id_comparador'));
	$criterio->add('us_clave.clave', Gral::getVars(1, 'buscador_us_clave_clave'), Gral::getVars(1, 'buscador_us_clave_clave_comparador'));
	$criterio->add('us_clave.observacion', Gral::getVars(1, 'buscador_us_clave_observacion'), Gral::getVars(1, 'buscador_us_clave_observacion_comparador'));
	$criterio->add('us_clave.estado', Gral::getVars(1, 'buscador_us_clave_estado'), Gral::getVars(1, 'buscador_us_clave_estado_comparador'));
	$criterio->add('us_clave.creado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_clave_creado')), Gral::getVars(1, 'buscador_us_clave_creado_comparador'));
	$criterio->add('us_clave.modificado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_clave_modificado')), Gral::getVars(1, 'buscador_us_clave_modificado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_clave');
		$criterio->setCriterios();		
}
?>

