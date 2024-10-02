<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_moneda.id', Gral::getVars(1, 'buscador_gral_moneda_id'), Gral::getVars(1, 'buscador_gral_moneda_id_comparador'));
	$criterio->add('gral_moneda.descripcion', Gral::getVars(1, 'buscador_gral_moneda_descripcion'), Gral::getVars(1, 'buscador_gral_moneda_descripcion_comparador'));
	$criterio->add('gral_moneda.codigo', Gral::getVars(1, 'buscador_gral_moneda_codigo'), Gral::getVars(1, 'buscador_gral_moneda_codigo_comparador'));
	$criterio->add('gral_moneda.codigo_iso', Gral::getVars(1, 'buscador_gral_moneda_codigo_iso'), Gral::getVars(1, 'buscador_gral_moneda_codigo_iso_comparador'));
	$criterio->add('gral_moneda.numero_iso', Gral::getVars(1, 'buscador_gral_moneda_numero_iso'), Gral::getVars(1, 'buscador_gral_moneda_numero_iso_comparador'));
	$criterio->add('gral_moneda.simbolo', Gral::getVars(1, 'buscador_gral_moneda_simbolo'), Gral::getVars(1, 'buscador_gral_moneda_simbolo_comparador'));
	$criterio->add('gral_moneda.moneda_base', Gral::getVars(1, 'buscador_gral_moneda_moneda_base'), Gral::getVars(1, 'buscador_gral_moneda_moneda_base_comparador'));
	$criterio->add('gral_moneda.por_default', Gral::getVars(1, 'buscador_gral_moneda_por_default'), Gral::getVars(1, 'buscador_gral_moneda_por_default_comparador'));
	$criterio->add('gral_moneda.observacion', Gral::getVars(1, 'buscador_gral_moneda_observacion'), Gral::getVars(1, 'buscador_gral_moneda_observacion_comparador'));
	$criterio->add('gral_moneda.orden', Gral::getVars(1, 'buscador_gral_moneda_orden'), Gral::getVars(1, 'buscador_gral_moneda_orden_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_moneda_tipo_cambio', 'gral_moneda_tipo_cambio.gral_moneda_id', 'gral_moneda.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_billete', 'gral_billete.gral_moneda_id', 'gral_moneda.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.gral_moneda_id', 'gral_moneda.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_recibo_item.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_recibo_item.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_recibo_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_concepto', 'vta_recibo_concepto.id', 'vta_recibo_item.vta_recibo_concepto_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_moneda');
		$criterio->setCriterios();		
}
?>

