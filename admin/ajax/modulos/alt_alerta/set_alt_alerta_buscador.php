<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AltAlerta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('alt_alerta.id', Gral::getVars(1, 'buscador_alt_alerta_id'), Gral::getVars(1, 'buscador_alt_alerta_id_comparador'));
	$criterio->add('alt_alerta.alt_modulo_id', Gral::getVars(1, 'buscador_alt_alerta_alt_modulo_id'), Gral::getVars(1, 'buscador_alt_alerta_alt_modulo_id_comparador'));
	$criterio->add('alt_alerta.alt_tipo_id', Gral::getVars(1, 'buscador_alt_alerta_alt_tipo_id'), Gral::getVars(1, 'buscador_alt_alerta_alt_tipo_id_comparador'));
	$criterio->add('alt_alerta.alt_nivel_id', Gral::getVars(1, 'buscador_alt_alerta_alt_nivel_id'), Gral::getVars(1, 'buscador_alt_alerta_alt_nivel_id_comparador'));
	$criterio->add('alt_alerta.alt_origen_id', Gral::getVars(1, 'buscador_alt_alerta_alt_origen_id'), Gral::getVars(1, 'buscador_alt_alerta_alt_origen_id_comparador'));
	$criterio->add('alt_alerta.alt_control_id', Gral::getVars(1, 'buscador_alt_alerta_alt_control_id'), Gral::getVars(1, 'buscador_alt_alerta_alt_control_id_comparador'));
	$criterio->add('alt_alerta.descripcion', Gral::getVars(1, 'buscador_alt_alerta_descripcion'), Gral::getVars(1, 'buscador_alt_alerta_descripcion_comparador'));
	$criterio->add('alt_alerta.codigo', Gral::getVars(1, 'buscador_alt_alerta_codigo'), Gral::getVars(1, 'buscador_alt_alerta_codigo_comparador'));
	$criterio->add('alt_alerta.referencia', Gral::getVars(1, 'buscador_alt_alerta_referencia'), Gral::getVars(1, 'buscador_alt_alerta_referencia_comparador'));
	$criterio->add('alt_alerta.url_redireccion', Gral::getVars(1, 'buscador_alt_alerta_url_redireccion'), Gral::getVars(1, 'buscador_alt_alerta_url_redireccion_comparador'));
	$criterio->add('alt_alerta.observacion', Gral::getVars(1, 'buscador_alt_alerta_observacion'), Gral::getVars(1, 'buscador_alt_alerta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('alt_alerta_us_usuario', 'alt_alerta_us_usuario.alt_alerta_id', 'alt_alerta.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'alt_alerta_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_alerta_envio_email', 'alt_alerta_envio_email.alt_alerta_id', 'alt_alerta.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('alt_alerta');
		$criterio->setCriterios();		
}
?>

