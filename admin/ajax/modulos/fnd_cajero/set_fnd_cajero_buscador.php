<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndCajero::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_cajero.id', Gral::getVars(1, 'buscador_fnd_cajero_id'), Gral::getVars(1, 'buscador_fnd_cajero_id_comparador'));
	$criterio->add('fnd_cajero.descripcion', Gral::getVars(1, 'buscador_fnd_cajero_descripcion'), Gral::getVars(1, 'buscador_fnd_cajero_descripcion_comparador'));
	$criterio->add('fnd_cajero.apellido', Gral::getVars(1, 'buscador_fnd_cajero_apellido'), Gral::getVars(1, 'buscador_fnd_cajero_apellido_comparador'));
	$criterio->add('fnd_cajero.nombre', Gral::getVars(1, 'buscador_fnd_cajero_nombre'), Gral::getVars(1, 'buscador_fnd_cajero_nombre_comparador'));
	$criterio->add('fnd_cajero.codigo', Gral::getVars(1, 'buscador_fnd_cajero_codigo'), Gral::getVars(1, 'buscador_fnd_cajero_codigo_comparador'));
	$criterio->add('fnd_cajero.observacion', Gral::getVars(1, 'buscador_fnd_cajero_observacion'), Gral::getVars(1, 'buscador_fnd_cajero_observacion_comparador'));
	$criterio->add('fnd_cajero.estado', Gral::getVars(1, 'buscador_fnd_cajero_estado'), Gral::getVars(1, 'buscador_fnd_cajero_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.fnd_cajero_id', 'fnd_cajero.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_caja.gral_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_tipo_estado', 'fnd_caja_tipo_estado.id', 'fnd_caja.fnd_caja_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_cajero_us_usuario', 'fnd_cajero_us_usuario.fnd_cajero_id', 'fnd_cajero.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'fnd_cajero_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_cajero_gral_caja', 'fnd_cajero_gral_caja.fnd_cajero_id', 'fnd_cajero.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_cajero');
		$criterio->setCriterios();		
}
?>

