<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbTipoOrigen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_tipo_origen.id', Gral::getVars(1, 'buscador_cntb_tipo_origen_id'), Gral::getVars(1, 'buscador_cntb_tipo_origen_id_comparador'));
	$criterio->add('cntb_tipo_origen.descripcion', Gral::getVars(1, 'buscador_cntb_tipo_origen_descripcion'), Gral::getVars(1, 'buscador_cntb_tipo_origen_descripcion_comparador'));
	$criterio->add('cntb_tipo_origen.codigo', Gral::getVars(1, 'buscador_cntb_tipo_origen_codigo'), Gral::getVars(1, 'buscador_cntb_tipo_origen_codigo_comparador'));
	$criterio->add('cntb_tipo_origen.observacion', Gral::getVars(1, 'buscador_cntb_tipo_origen_observacion'), Gral::getVars(1, 'buscador_cntb_tipo_origen_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.cntb_tipo_origen_id', 'cntb_tipo_origen.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.id', 'cntb_diario_asiento.cntb_ejercicio_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_asiento', 'cntb_tipo_asiento.id', 'cntb_diario_asiento.cntb_tipo_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_movimiento', 'cntb_tipo_movimiento.id', 'cntb_diario_asiento.cntb_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'cntb_diario_asiento.gral_actividad_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_tipo_origen');
		$criterio->setCriterios();		
}
?>

