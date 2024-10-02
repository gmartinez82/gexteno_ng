<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaFacturaConcepto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_factura_concepto.id', Gral::getVars(1, 'buscador_vta_factura_concepto_id'), Gral::getVars(1, 'buscador_vta_factura_concepto_id_comparador'));
	$criterio->add('vta_factura_concepto.descripcion', Gral::getVars(1, 'buscador_vta_factura_concepto_descripcion'), Gral::getVars(1, 'buscador_vta_factura_concepto_descripcion_comparador'));
	$criterio->add('vta_factura_concepto.codigo', Gral::getVars(1, 'buscador_vta_factura_concepto_codigo'), Gral::getVars(1, 'buscador_vta_factura_concepto_codigo_comparador'));
	$criterio->add('vta_factura_concepto.cntb_cuenta_id', Gral::getVars(1, 'buscador_vta_factura_concepto_cntb_cuenta_id'), Gral::getVars(1, 'buscador_vta_factura_concepto_cntb_cuenta_id_comparador'));
	$criterio->add('vta_factura_concepto.observacion', Gral::getVars(1, 'buscador_vta_factura_concepto_observacion'), Gral::getVars(1, 'buscador_vta_factura_concepto_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_factura_item', 'vta_factura_item.vta_factura_concepto_id', 'vta_factura_concepto.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_item.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_factura_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_factura_concepto');
		$criterio->setCriterios();		
}
?>

