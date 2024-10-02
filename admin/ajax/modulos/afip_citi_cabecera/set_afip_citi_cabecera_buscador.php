<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AfipCitiCabecera::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('afip_citi_cabecera.id', Gral::getVars(1, 'buscador_afip_citi_cabecera_id'), Gral::getVars(1, 'buscador_afip_citi_cabecera_id_comparador'));
	$criterio->add('afip_citi_cabecera.descripcion', Gral::getVars(1, 'buscador_afip_citi_cabecera_descripcion'), Gral::getVars(1, 'buscador_afip_citi_cabecera_descripcion_comparador'));
	$criterio->add('afip_citi_cabecera.codigo', Gral::getVars(1, 'buscador_afip_citi_cabecera_codigo'), Gral::getVars(1, 'buscador_afip_citi_cabecera_codigo_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_prc_id', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_prc_id'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_prc_id_comparador'));
	$criterio->add('afip_citi_cabecera.inicial', Gral::getVars(1, 'buscador_afip_citi_cabecera_inicial'), Gral::getVars(1, 'buscador_afip_citi_cabecera_inicial_comparador'));
	$criterio->add('afip_citi_cabecera.actual', Gral::getVars(1, 'buscador_afip_citi_cabecera_actual'), Gral::getVars(1, 'buscador_afip_citi_cabecera_actual_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_cuit_informante', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_cuit_informante'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_cuit_informante_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_periodo', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_periodo'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_periodo_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_secuencia', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_secuencia'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_secuencia_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_sin_movimiento', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_sin_movimiento'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_sin_movimiento_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_prorratear_cf_computable', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_prorratear_cf_computable_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_cf_computable_o_comprobante', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_cf_computable_o_comprobante_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_global', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_global_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_asignacion_directa', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_asignacion_directa_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_prorrateo', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_prorrateo_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_no_computable_global', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_no_computable_global_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_contribuyente_ss_y_oc', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_contribuyente_ss_y_oc_comparador'));
	$criterio->add('afip_citi_cabecera.afip_citi_importe_cf_computable_ss_y_oc', Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc'), Gral::getVars(1, 'buscador_afip_citi_cabecera_afip_citi_importe_cf_computable_ss_y_oc_comparador'));
	$criterio->add('afip_citi_cabecera.observacion', Gral::getVars(1, 'buscador_afip_citi_cabecera_observacion'), Gral::getVars(1, 'buscador_afip_citi_cabecera_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('afip_citi_ventas_cbte', 'afip_citi_ventas_cbte.afip_citi_cabecera_id', 'afip_citi_cabecera.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_ventas_cbte.afip_citi_prc_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'afip_citi_ventas_cbte.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'afip_citi_ventas_cbte.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'afip_citi_ventas_cbte.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_alicuotas', 'afip_citi_ventas_alicuotas.afip_citi_cabecera_id', 'afip_citi_cabecera.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_cbte', 'afip_citi_compras_cbte.afip_citi_cabecera_id', 'afip_citi_cabecera.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'afip_citi_compras_cbte.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'afip_citi_compras_cbte.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'afip_citi_compras_cbte.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_alicuotas', 'afip_citi_compras_alicuotas.afip_citi_cabecera_id', 'afip_citi_cabecera.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_importaciones', 'afip_citi_compras_importaciones.afip_citi_cabecera_id', 'afip_citi_cabecera.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('afip_citi_cabecera');
		$criterio->setCriterios();		
}
?>

