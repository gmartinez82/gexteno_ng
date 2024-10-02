<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbTipoSaldo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_tipo_saldo.id', Gral::getVars(1, 'buscador_cntb_tipo_saldo_id'), Gral::getVars(1, 'buscador_cntb_tipo_saldo_id_comparador'));
	$criterio->add('cntb_tipo_saldo.descripcion', Gral::getVars(1, 'buscador_cntb_tipo_saldo_descripcion'), Gral::getVars(1, 'buscador_cntb_tipo_saldo_descripcion_comparador'));
	$criterio->add('cntb_tipo_saldo.codigo', Gral::getVars(1, 'buscador_cntb_tipo_saldo_codigo'), Gral::getVars(1, 'buscador_cntb_tipo_saldo_codigo_comparador'));
	$criterio->add('cntb_tipo_saldo.observacion', Gral::getVars(1, 'buscador_cntb_tipo_saldo_observacion'), Gral::getVars(1, 'buscador_cntb_tipo_saldo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_tipo_cuenta', 'cntb_tipo_cuenta.cntb_tipo_saldo_id', 'cntb_tipo_saldo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_clasificacion', 'cntb_tipo_clasificacion.id', 'cntb_tipo_cuenta.cntb_tipo_clasificacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_cuenta', 'cntb_diario_asiento_cuenta.cntb_tipo_saldo_id', 'cntb_tipo_saldo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_cuenta.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_cuenta', 'cntb_cuenta.id', 'cntb_diario_asiento_cuenta.cntb_cuenta_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_tipo_saldo');
		$criterio->setCriterios();		
}
?>

