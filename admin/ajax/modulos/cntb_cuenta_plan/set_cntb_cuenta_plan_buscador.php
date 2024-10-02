<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbCuentaPlan::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_cuenta_plan.id', Gral::getVars(1, 'buscador_cntb_cuenta_plan_id'), Gral::getVars(1, 'buscador_cntb_cuenta_plan_id_comparador'));
	$criterio->add('cntb_cuenta_plan.descripcion', Gral::getVars(1, 'buscador_cntb_cuenta_plan_descripcion'), Gral::getVars(1, 'buscador_cntb_cuenta_plan_descripcion_comparador'));
	$criterio->add('cntb_cuenta_plan.codigo', Gral::getVars(1, 'buscador_cntb_cuenta_plan_codigo'), Gral::getVars(1, 'buscador_cntb_cuenta_plan_codigo_comparador'));
	$criterio->add('cntb_cuenta_plan.php_clase', Gral::getVars(1, 'buscador_cntb_cuenta_plan_php_clase'), Gral::getVars(1, 'buscador_cntb_cuenta_plan_php_clase_comparador'));
	$criterio->add('cntb_cuenta_plan.bd_tabla', Gral::getVars(1, 'buscador_cntb_cuenta_plan_bd_tabla'), Gral::getVars(1, 'buscador_cntb_cuenta_plan_bd_tabla_comparador'));
	$criterio->add('cntb_cuenta_plan.observacion', Gral::getVars(1, 'buscador_cntb_cuenta_plan_observacion'), Gral::getVars(1, 'buscador_cntb_cuenta_plan_observacion_comparador'));
	$criterio->add('cntb_cuenta_plan.estado', Gral::getVars(1, 'buscador_cntb_cuenta_plan_estado'), Gral::getVars(1, 'buscador_cntb_cuenta_plan_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_cuenta', 'cntb_cuenta.cntb_cuenta_plan_id', 'cntb_cuenta_plan.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_cuenta', 'cntb_tipo_cuenta.id', 'cntb_cuenta.cntb_tipo_cuenta_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_cuenta_plan');
		$criterio->setCriterios();		
}
?>

