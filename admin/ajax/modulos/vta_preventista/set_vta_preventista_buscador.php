<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPreventista::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_preventista.id', Gral::getVars(1, 'buscador_vta_preventista_id'), Gral::getVars(1, 'buscador_vta_preventista_id_comparador'));
	$criterio->add('vta_preventista.descripcion', Gral::getVars(1, 'buscador_vta_preventista_descripcion'), Gral::getVars(1, 'buscador_vta_preventista_descripcion_comparador'));
	$criterio->add('vta_preventista.apellido', Gral::getVars(1, 'buscador_vta_preventista_apellido'), Gral::getVars(1, 'buscador_vta_preventista_apellido_comparador'));
	$criterio->add('vta_preventista.nombre', Gral::getVars(1, 'buscador_vta_preventista_nombre'), Gral::getVars(1, 'buscador_vta_preventista_nombre_comparador'));
	$criterio->add('vta_preventista.email', Gral::getVars(1, 'buscador_vta_preventista_email'), Gral::getVars(1, 'buscador_vta_preventista_email_comparador'));
	$criterio->add('vta_preventista.telefono', Gral::getVars(1, 'buscador_vta_preventista_telefono'), Gral::getVars(1, 'buscador_vta_preventista_telefono_comparador'));
	$criterio->add('vta_preventista.celular', Gral::getVars(1, 'buscador_vta_preventista_celular'), Gral::getVars(1, 'buscador_vta_preventista_celular_comparador'));
	$criterio->add('vta_preventista.porcentaje_comision', Gral::getVars(1, 'buscador_vta_preventista_porcentaje_comision'), Gral::getVars(1, 'buscador_vta_preventista_porcentaje_comision_comparador'));
	$criterio->add('vta_preventista.codigo', Gral::getVars(1, 'buscador_vta_preventista_codigo'), Gral::getVars(1, 'buscador_vta_preventista_codigo_comparador'));
	$criterio->add('vta_preventista.observacion', Gral::getVars(1, 'buscador_vta_preventista_observacion'), Gral::getVars(1, 'buscador_vta_preventista_observacion_comparador'));
	$criterio->add('vta_preventista.estado', Gral::getVars(1, 'buscador_vta_preventista_estado'), Gral::getVars(1, 'buscador_vta_preventista_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente_vta_preventista', 'cli_cliente_vta_preventista.vta_preventista_id', 'vta_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_vta_preventista.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.vta_preventista_id', 'vta_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_presupuesto.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_emision', 'vta_presupuesto_tipo_emision.id', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_presupuesto.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_presupuesto.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.vta_preventista_id', 'vta_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_nota_credito.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_credito', 'vta_tipo_origen_nota_credito.id', 'vta_nota_credito.vta_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_nota_credito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_nota_credito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.vta_preventista_id', 'vta_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_debito', 'vta_tipo_origen_nota_debito.id', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.vta_preventista_id', 'vta_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.vta_preventista_id', 'vta_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.vta_preventista_id', 'vta_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_tipo_estado', 'vta_comision_tipo_estado.id', 'vta_comision.vta_comision_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_preventista');
		$criterio->setCriterios();		
}
?>

