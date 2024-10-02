<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AfipCitiComprasAlicuotas::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('afip_citi_compras_alicuotas.id', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_id'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_id_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.descripcion', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_descripcion'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_descripcion_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.codigo', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_codigo'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_codigo_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_prc_id', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_prc_id'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_prc_id_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_cabecera_id', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_cabecera_id'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_cabecera_id_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_tipo_comprobante', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_tipo_comprobante'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_tipo_comprobante_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_punto_venta', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_punto_venta'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_punto_venta_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_numero_comprobante', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_numero_comprobante'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_numero_comprobante_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_codigo_documento_vendedor', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_codigo_documento_vendedor'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_codigo_documento_vendedor_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_numero_identificacion_vendedor', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_numero_identificacion_vendedor'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_numero_identificacion_vendedor_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_importe_neto_gravado', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_importe_neto_gravado'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_importe_neto_gravado_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_alicuota_iva', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_alicuota_iva'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_alicuota_iva_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.afip_citi_importe_impuesto_liquidado', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_importe_impuesto_liquidado'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_afip_citi_importe_impuesto_liquidado_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.pde_factura_id', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_pde_factura_id'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_pde_factura_id_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.pde_nota_credito_id', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_pde_nota_credito_id'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_pde_nota_credito_id_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.pde_nota_debito_id', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_pde_nota_debito_id'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_pde_nota_debito_id_comparador'));
	$criterio->add('afip_citi_compras_alicuotas.observacion', Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_observacion'), Gral::getVars(1, 'buscador_afip_citi_compras_alicuotas_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('afip_citi_compras_alicuotas');
		$criterio->setCriterios();		
}
?>

