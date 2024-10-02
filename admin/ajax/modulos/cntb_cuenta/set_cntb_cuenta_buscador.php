<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbCuenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_cuenta.id', Gral::getVars(1, 'buscador_cntb_cuenta_id'), Gral::getVars(1, 'buscador_cntb_cuenta_id_comparador'));
	$criterio->add('cntb_cuenta.descripcion', Gral::getVars(1, 'buscador_cntb_cuenta_descripcion'), Gral::getVars(1, 'buscador_cntb_cuenta_descripcion_comparador'));
	$criterio->add('cntb_cuenta.familia_descripcion', Gral::getVars(1, 'buscador_cntb_cuenta_familia_descripcion'), Gral::getVars(1, 'buscador_cntb_cuenta_familia_descripcion_comparador'));
	$criterio->add('cntb_cuenta.cntb_cuenta_plan_id', Gral::getVars(1, 'buscador_cntb_cuenta_cntb_cuenta_plan_id'), Gral::getVars(1, 'buscador_cntb_cuenta_cntb_cuenta_plan_id_comparador'));
	$criterio->add('cntb_cuenta.cntb_cuenta_padre', Gral::getVars(1, 'buscador_cntb_cuenta_cntb_cuenta_padre'), Gral::getVars(1, 'buscador_cntb_cuenta_cntb_cuenta_padre_comparador'));
	$criterio->add('cntb_cuenta.cntb_tipo_cuenta_id', Gral::getVars(1, 'buscador_cntb_cuenta_cntb_tipo_cuenta_id'), Gral::getVars(1, 'buscador_cntb_cuenta_cntb_tipo_cuenta_id_comparador'));
	$criterio->add('cntb_cuenta.numero', Gral::getVars(1, 'buscador_cntb_cuenta_numero'), Gral::getVars(1, 'buscador_cntb_cuenta_numero_comparador'));
	$criterio->add('cntb_cuenta.nivel', Gral::getVars(1, 'buscador_cntb_cuenta_nivel'), Gral::getVars(1, 'buscador_cntb_cuenta_nivel_comparador'));
	$criterio->add('cntb_cuenta.imputable', Gral::getVars(1, 'buscador_cntb_cuenta_imputable'), Gral::getVars(1, 'buscador_cntb_cuenta_imputable_comparador'));
	$criterio->add('cntb_cuenta.codigo', Gral::getVars(1, 'buscador_cntb_cuenta_codigo'), Gral::getVars(1, 'buscador_cntb_cuenta_codigo_comparador'));
	$criterio->add('cntb_cuenta.observacion', Gral::getVars(1, 'buscador_cntb_cuenta_observacion'), Gral::getVars(1, 'buscador_cntb_cuenta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_tributo', 'vta_tributo.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_concepto', 'vta_nota_credito_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_concepto', 'vta_nota_debito_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_concepto', 'vta_recibo_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_concepto', 'vta_factura_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tributo', 'pde_tributo.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_concepto', 'pde_factura_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_concepto', 'pde_nota_credito_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_concepto', 'pde_nota_debito_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_concepto', 'pde_recibo_concepto.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_cuenta', 'cntb_diario_asiento_cuenta.cntb_cuenta_id', 'cntb_cuenta.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_cuenta.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_saldo', 'cntb_tipo_saldo.id', 'cntb_diario_asiento_cuenta.cntb_tipo_saldo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_cuenta');
		$criterio->setCriterios();		
}
?>

