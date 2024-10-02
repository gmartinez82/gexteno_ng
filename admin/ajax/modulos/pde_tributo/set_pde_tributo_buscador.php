<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeTributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_tributo.id', Gral::getVars(1, 'buscador_pde_tributo_id'), Gral::getVars(1, 'buscador_pde_tributo_id_comparador'));
	$criterio->add('pde_tributo.descripcion', Gral::getVars(1, 'buscador_pde_tributo_descripcion'), Gral::getVars(1, 'buscador_pde_tributo_descripcion_comparador'));
	$criterio->add('pde_tributo.alicuota_porcentual', Gral::getVars(1, 'buscador_pde_tributo_alicuota_porcentual'), Gral::getVars(1, 'buscador_pde_tributo_alicuota_porcentual_comparador'));
	$criterio->add('pde_tributo.alicuota_decimal', Gral::getVars(1, 'buscador_pde_tributo_alicuota_decimal'), Gral::getVars(1, 'buscador_pde_tributo_alicuota_decimal_comparador'));
	$criterio->add('pde_tributo.formula', Gral::getVars(1, 'buscador_pde_tributo_formula'), Gral::getVars(1, 'buscador_pde_tributo_formula_comparador'));
	$criterio->add('pde_tributo.cntb_cuenta_id', Gral::getVars(1, 'buscador_pde_tributo_cntb_cuenta_id'), Gral::getVars(1, 'buscador_pde_tributo_cntb_cuenta_id_comparador'));
	$criterio->add('pde_tributo.es_retencion', Gral::getVars(1, 'buscador_pde_tributo_es_retencion'), Gral::getVars(1, 'buscador_pde_tributo_es_retencion_comparador'));
	$criterio->add('pde_tributo.es_percepcion', Gral::getVars(1, 'buscador_pde_tributo_es_percepcion'), Gral::getVars(1, 'buscador_pde_tributo_es_percepcion_comparador'));
	$criterio->add('pde_tributo.codigo', Gral::getVars(1, 'buscador_pde_tributo_codigo'), Gral::getVars(1, 'buscador_pde_tributo_codigo_comparador'));
	$criterio->add('pde_tributo.observacion', Gral::getVars(1, 'buscador_pde_tributo_observacion'), Gral::getVars(1, 'buscador_pde_tributo_observacion_comparador'));
	$criterio->add('pde_tributo.estado', Gral::getVars(1, 'buscador_pde_tributo_estado'), Gral::getVars(1, 'buscador_pde_tributo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_tributo_exencion', 'pde_tributo_exencion.pde_tributo_id', 'pde_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_tributo_exencion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_tributo', 'pde_factura_pde_tributo.pde_tributo_id', 'pde_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_tributo.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_tributo', 'pde_nota_credito_pde_tributo.pde_tributo_id', 'pde_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_pde_tributo.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_pde_tributo', 'pde_nota_debito_pde_tributo.pde_tributo_id', 'pde_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_nota_debito_pde_tributo.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_pde_tributo', 'pde_recibo_pde_tributo.pde_tributo_id', 'pde_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'pde_recibo_pde_tributo.pde_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_pde_tributo', 'pde_orden_pago_pde_tributo.pde_tributo_id', 'pde_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_pde_tributo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_tributo');
		$criterio->setCriterios();		
}
?>

