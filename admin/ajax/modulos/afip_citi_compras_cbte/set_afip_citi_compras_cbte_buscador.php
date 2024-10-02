<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AfipCitiComprasCbte::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('afip_citi_compras_cbte.id', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_id'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_id_comparador'));
	$criterio->add('afip_citi_compras_cbte.descripcion', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_descripcion'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_descripcion_comparador'));
	$criterio->add('afip_citi_compras_cbte.codigo', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_codigo'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_codigo_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_prc_id', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_prc_id'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_prc_id_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_cabecera_id', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_cabecera_id'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_cabecera_id_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_fecha_comprobante', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_fecha_comprobante_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_tipo_comprobante', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_tipo_comprobante_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_punto_venta', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_punto_venta'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_punto_venta_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_numero_comprobante', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_numero_comprobante_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_despacho_importacion', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_despacho_importacion_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_codigo_documento_vendedor', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_documento_vendedor_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_numero_identificacion_vendedor', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_numero_identificacion_vendedor_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_denominacion_vendedor', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_denominacion_vendedor_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_total_operacion', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_total_operacion_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_total_conceptos', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_total_conceptos_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_operaciones_exentas', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_operaciones_exentas_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_percepciones_iva', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_iva_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_nacionales', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_nacionales_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_percepciones_ingresos_brutos', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_ingresos_brutos_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_percepciones_impuestos_municipales', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_percepciones_impuestos_municipales_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_impuestos_internos', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_impuestos_internos_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_codigo_moneda', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_moneda_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_tipo_cambio', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_tipo_cambio_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_cantidad_alicuotas_iva', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_cantidad_alicuotas_iva_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_codigo_operacion', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_codigo_operacion_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_cf_computable', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_cf_computable_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_otros_tributos', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_otros_tributos_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_cuit_emisor', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_cuit_emisor_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_denominacion_emisor', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_denominacion_emisor_comparador'));
	$criterio->add('afip_citi_compras_cbte.afip_citi_importe_iva_comision', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_afip_citi_importe_iva_comision_comparador'));
	$criterio->add('afip_citi_compras_cbte.pde_factura_id', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_pde_factura_id'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_pde_factura_id_comparador'));
	$criterio->add('afip_citi_compras_cbte.pde_nota_credito_id', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_pde_nota_credito_id'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_pde_nota_credito_id_comparador'));
	$criterio->add('afip_citi_compras_cbte.pde_nota_debito_id', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_pde_nota_debito_id'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_pde_nota_debito_id_comparador'));
	$criterio->add('afip_citi_compras_cbte.observacion', Gral::getVars(1, 'buscador_afip_citi_compras_cbte_observacion'), Gral::getVars(1, 'buscador_afip_citi_compras_cbte_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('afip_citi_compras_cbte');
		$criterio->setCriterios();		
}
?>

