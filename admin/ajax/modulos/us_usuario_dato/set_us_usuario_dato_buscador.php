<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsUsuarioDato::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_usuario_dato.id', Gral::getVars(1, 'buscador_us_usuario_dato_id'), Gral::getVars(1, 'buscador_us_usuario_dato_id_comparador'));
	$criterio->add('us_usuario_dato.us_usuario_id', Gral::getVars(1, 'buscador_us_usuario_dato_us_usuario_id'), Gral::getVars(1, 'buscador_us_usuario_dato_us_usuario_id_comparador'));
	$criterio->add('us_usuario_dato.email', Gral::getVars(1, 'buscador_us_usuario_dato_email'), Gral::getVars(1, 'buscador_us_usuario_dato_email_comparador'));
	$criterio->add('us_usuario_dato.telefono', Gral::getVars(1, 'buscador_us_usuario_dato_telefono'), Gral::getVars(1, 'buscador_us_usuario_dato_telefono_comparador'));
	$criterio->add('us_usuario_dato.observacion', Gral::getVars(1, 'buscador_us_usuario_dato_observacion'), Gral::getVars(1, 'buscador_us_usuario_dato_observacion_comparador'));
	$criterio->add('us_usuario_dato.estado', Gral::getVars(1, 'buscador_us_usuario_dato_estado'), Gral::getVars(1, 'buscador_us_usuario_dato_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_usuario_dato');
		$criterio->setCriterios();		
}
?>

