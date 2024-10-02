<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AltControl::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('alt_control.id', Gral::getVars(1, 'buscador_alt_control_id'), Gral::getVars(1, 'buscador_alt_control_id_comparador'));
	$criterio->add('alt_control.descripcion', Gral::getVars(1, 'buscador_alt_control_descripcion'), Gral::getVars(1, 'buscador_alt_control_descripcion_comparador'));
	$criterio->add('alt_control.codigo', Gral::getVars(1, 'buscador_alt_control_codigo'), Gral::getVars(1, 'buscador_alt_control_codigo_comparador'));
	$criterio->add('alt_control.observacion', Gral::getVars(1, 'buscador_alt_control_observacion'), Gral::getVars(1, 'buscador_alt_control_observacion_comparador'));
	$criterio->add('alt_control.control', Gral::getVars(1, 'buscador_alt_control_control'), Gral::getVars(1, 'buscador_alt_control_control_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('alt_control_us_usuario', 'alt_control_us_usuario.alt_control_id', 'alt_control.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'alt_control_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_alerta', 'alt_alerta.alt_control_id', 'alt_control.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_modulo', 'alt_modulo.id', 'alt_alerta.alt_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_tipo', 'alt_tipo.id', 'alt_alerta.alt_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_nivel', 'alt_nivel.id', 'alt_alerta.alt_nivel_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_origen', 'alt_origen.id', 'alt_alerta.alt_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control_us_grupo', 'alt_control_us_grupo.alt_control_id', 'alt_control.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_grupo', 'us_grupo.id', 'alt_control_us_grupo.us_grupo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('alt_control');
		$criterio->setCriterios();		
}
?>

