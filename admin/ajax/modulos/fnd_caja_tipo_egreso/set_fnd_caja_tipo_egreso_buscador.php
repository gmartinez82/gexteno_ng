<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndCajaTipoEgreso::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_caja_tipo_egreso.id', Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_id'), Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_id_comparador'));
	$criterio->add('fnd_caja_tipo_egreso.descripcion', Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_descripcion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_descripcion_comparador'));
	$criterio->add('fnd_caja_tipo_egreso.codigo', Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_codigo'), Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_codigo_comparador'));
	$criterio->add('fnd_caja_tipo_egreso.observacion', Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_observacion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_observacion_comparador'));
	$criterio->add('fnd_caja_tipo_egreso.estado', Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_estado'), Gral::getVars(1, 'buscador_fnd_caja_tipo_egreso_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_caja_egreso', 'fnd_caja_egreso.fnd_caja_tipo_egreso_id', 'fnd_caja_tipo_egreso.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_caja_egreso.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'fnd_caja_egreso.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_caja_tipo_egreso');
		$criterio->setCriterios();		
}
?>

