<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComprador::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comprador.id', Gral::getVars(1, 'buscador_vta_comprador_id'), Gral::getVars(1, 'buscador_vta_comprador_id_comparador'));
	$criterio->add('vta_comprador.descripcion', Gral::getVars(1, 'buscador_vta_comprador_descripcion'), Gral::getVars(1, 'buscador_vta_comprador_descripcion_comparador'));
	$criterio->add('vta_comprador.apellido', Gral::getVars(1, 'buscador_vta_comprador_apellido'), Gral::getVars(1, 'buscador_vta_comprador_apellido_comparador'));
	$criterio->add('vta_comprador.nombre', Gral::getVars(1, 'buscador_vta_comprador_nombre'), Gral::getVars(1, 'buscador_vta_comprador_nombre_comparador'));
	$criterio->add('vta_comprador.vta_tipo_comprador_id', Gral::getVars(1, 'buscador_vta_comprador_vta_tipo_comprador_id'), Gral::getVars(1, 'buscador_vta_comprador_vta_tipo_comprador_id_comparador'));
	$criterio->add('vta_comprador.geo_localidad_id', Gral::getVars(1, 'buscador_vta_comprador_geo_localidad_id'), Gral::getVars(1, 'buscador_vta_comprador_geo_localidad_id_comparador'));
	$criterio->add('vta_comprador.email', Gral::getVars(1, 'buscador_vta_comprador_email'), Gral::getVars(1, 'buscador_vta_comprador_email_comparador'));
	$criterio->add('vta_comprador.telefono', Gral::getVars(1, 'buscador_vta_comprador_telefono'), Gral::getVars(1, 'buscador_vta_comprador_telefono_comparador'));
	$criterio->add('vta_comprador.celular', Gral::getVars(1, 'buscador_vta_comprador_celular'), Gral::getVars(1, 'buscador_vta_comprador_celular_comparador'));
	$criterio->add('vta_comprador.domicilio', Gral::getVars(1, 'buscador_vta_comprador_domicilio'), Gral::getVars(1, 'buscador_vta_comprador_domicilio_comparador'));
	$criterio->add('vta_comprador.porcentaje_comision', Gral::getVars(1, 'buscador_vta_comprador_porcentaje_comision'), Gral::getVars(1, 'buscador_vta_comprador_porcentaje_comision_comparador'));
	$criterio->add('vta_comprador.codigo', Gral::getVars(1, 'buscador_vta_comprador_codigo'), Gral::getVars(1, 'buscador_vta_comprador_codigo_comparador'));
	$criterio->add('vta_comprador.observacion', Gral::getVars(1, 'buscador_vta_comprador_observacion'), Gral::getVars(1, 'buscador_vta_comprador_observacion_comparador'));
	$criterio->add('vta_comprador.estado', Gral::getVars(1, 'buscador_vta_comprador_estado'), Gral::getVars(1, 'buscador_vta_comprador_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_vta_comprador_geo_provincia_id'), Gral::getVars(1, 'buscador_vta_comprador_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'vta_comprador.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_vta_comprador_geo_pais_id'), Gral::getVars(1, 'buscador_vta_comprador_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_centro_pedido', 'cli_centro_pedido.vta_comprador_id', 'vta_comprador.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_centro_pedido.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_centro_pedido.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_vta_comprador', 'cli_cliente_vta_comprador.vta_comprador_id', 'vta_comprador.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.vta_comprador_id', 'vta_comprador.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
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
	$criterio->addRealJoin('vta_factura', 'vta_factura.vta_comprador_id', 'vta_comprador.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_factura.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_factura.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_factura.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_factura.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.vta_comprador_id', 'vta_comprador.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_tipo_estado', 'vta_comision_tipo_estado.id', 'vta_comision.vta_comision_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_comprador');
		$criterio->setCriterios();		
}
?>

