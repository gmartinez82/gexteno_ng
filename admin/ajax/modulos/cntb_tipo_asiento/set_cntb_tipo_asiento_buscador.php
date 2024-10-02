<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbTipoAsiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_tipo_asiento.id', Gral::getVars(1, 'buscador_cntb_tipo_asiento_id'), Gral::getVars(1, 'buscador_cntb_tipo_asiento_id_comparador'));
	$criterio->add('cntb_tipo_asiento.descripcion', Gral::getVars(1, 'buscador_cntb_tipo_asiento_descripcion'), Gral::getVars(1, 'buscador_cntb_tipo_asiento_descripcion_comparador'));
	$criterio->add('cntb_tipo_asiento.codigo', Gral::getVars(1, 'buscador_cntb_tipo_asiento_codigo'), Gral::getVars(1, 'buscador_cntb_tipo_asiento_codigo_comparador'));
	$criterio->add('cntb_tipo_asiento.observacion', Gral::getVars(1, 'buscador_cntb_tipo_asiento_observacion'), Gral::getVars(1, 'buscador_cntb_tipo_asiento_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.cntb_tipo_asiento_id', 'cntb_tipo_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.id', 'cntb_diario_asiento.cntb_ejercicio_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_origen', 'cntb_tipo_origen.id', 'cntb_diario_asiento.cntb_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_movimiento', 'cntb_tipo_movimiento.id', 'cntb_diario_asiento.cntb_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'cntb_diario_asiento.gral_actividad_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_tipo_asiento');
		$criterio->setCriterios();		
}
?>

