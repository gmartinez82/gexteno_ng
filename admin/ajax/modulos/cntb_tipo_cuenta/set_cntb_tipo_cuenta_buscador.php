<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbTipoCuenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_tipo_cuenta.id', Gral::getVars(1, 'buscador_cntb_tipo_cuenta_id'), Gral::getVars(1, 'buscador_cntb_tipo_cuenta_id_comparador'));
	$criterio->add('cntb_tipo_cuenta.cntb_tipo_clasificacion_id', Gral::getVars(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id'), Gral::getVars(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_clasificacion_id_comparador'));
	$criterio->add('cntb_tipo_cuenta.cntb_tipo_saldo_id', Gral::getVars(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id'), Gral::getVars(1, 'buscador_cntb_tipo_cuenta_cntb_tipo_saldo_id_comparador'));
	$criterio->add('cntb_tipo_cuenta.descripcion', Gral::getVars(1, 'buscador_cntb_tipo_cuenta_descripcion'), Gral::getVars(1, 'buscador_cntb_tipo_cuenta_descripcion_comparador'));
	$criterio->add('cntb_tipo_cuenta.codigo', Gral::getVars(1, 'buscador_cntb_tipo_cuenta_codigo'), Gral::getVars(1, 'buscador_cntb_tipo_cuenta_codigo_comparador'));
	$criterio->add('cntb_tipo_cuenta.observacion', Gral::getVars(1, 'buscador_cntb_tipo_cuenta_observacion'), Gral::getVars(1, 'buscador_cntb_tipo_cuenta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_cuenta', 'cntb_cuenta.cntb_tipo_cuenta_id', 'cntb_tipo_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_cuenta_plan', 'cntb_cuenta_plan.id', 'cntb_cuenta.cntb_cuenta_plan_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_tipo_cuenta');
		$criterio->setCriterios();		
}
?>

