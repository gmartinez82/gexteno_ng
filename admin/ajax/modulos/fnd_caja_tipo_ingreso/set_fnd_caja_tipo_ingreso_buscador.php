<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndCajaTipoIngreso::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_caja_tipo_ingreso.id', Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_id'), Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_id_comparador'));
	$criterio->add('fnd_caja_tipo_ingreso.descripcion', Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_descripcion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_descripcion_comparador'));
	$criterio->add('fnd_caja_tipo_ingreso.codigo', Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_codigo'), Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_codigo_comparador'));
	$criterio->add('fnd_caja_tipo_ingreso.observacion', Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_observacion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_observacion_comparador'));
	$criterio->add('fnd_caja_tipo_ingreso.estado', Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_estado'), Gral::getVars(1, 'buscador_fnd_caja_tipo_ingreso_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_caja_ingreso', 'fnd_caja_ingreso.fnd_caja_tipo_ingreso_id', 'fnd_caja_tipo_ingreso.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_caja_ingreso.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'fnd_caja_ingreso.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_caja_tipo_ingreso');
		$criterio->setCriterios();		
}
?>

