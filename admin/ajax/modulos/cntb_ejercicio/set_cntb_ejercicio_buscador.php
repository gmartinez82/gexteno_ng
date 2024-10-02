<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbEjercicio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_ejercicio.id', Gral::getVars(1, 'buscador_cntb_ejercicio_id'), Gral::getVars(1, 'buscador_cntb_ejercicio_id_comparador'));
	$criterio->add('cntb_ejercicio.descripcion', Gral::getVars(1, 'buscador_cntb_ejercicio_descripcion'), Gral::getVars(1, 'buscador_cntb_ejercicio_descripcion_comparador'));
	$criterio->add('cntb_ejercicio.gral_empresa_id', Gral::getVars(1, 'buscador_cntb_ejercicio_gral_empresa_id'), Gral::getVars(1, 'buscador_cntb_ejercicio_gral_empresa_id_comparador'));
	$criterio->add('cntb_ejercicio.fecha_inicio', Gral::getFechaToDB(Gral::getVars(1, 'buscador_cntb_ejercicio_fecha_inicio')), Gral::getVars(1, 'buscador_cntb_ejercicio_fecha_inicio_comparador'));
	$criterio->add('cntb_ejercicio.fecha_fin', Gral::getFechaToDB(Gral::getVars(1, 'buscador_cntb_ejercicio_fecha_fin')), Gral::getVars(1, 'buscador_cntb_ejercicio_fecha_fin_comparador'));
	$criterio->add('cntb_ejercicio.codigo', Gral::getVars(1, 'buscador_cntb_ejercicio_codigo'), Gral::getVars(1, 'buscador_cntb_ejercicio_codigo_comparador'));
	$criterio->add('cntb_ejercicio.observacion', Gral::getVars(1, 'buscador_cntb_ejercicio_observacion'), Gral::getVars(1, 'buscador_cntb_ejercicio_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.cntb_ejercicio_id', 'cntb_ejercicio.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'cntb_periodo.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'cntb_periodo.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.cntb_ejercicio_id', 'cntb_ejercicio.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_asiento', 'cntb_tipo_asiento.id', 'cntb_diario_asiento.cntb_tipo_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_origen', 'cntb_tipo_origen.id', 'cntb_diario_asiento.cntb_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_movimiento', 'cntb_tipo_movimiento.id', 'cntb_diario_asiento.cntb_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'cntb_diario_asiento.gral_actividad_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_ejercicio');
		$criterio->setCriterios();		
}
?>

