<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_tipo_comprobante.id', Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_id'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_id_comparador'));
	$criterio->add('ws_fe_param_tipo_comprobante.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_descripcion_comparador'));
	$criterio->add('ws_fe_param_tipo_comprobante.codigo', Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_codigo_comparador'));
	$criterio->add('ws_fe_param_tipo_comprobante.codigo_afip', Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_codigo_afip'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_codigo_afip_comparador'));
	$criterio->add('ws_fe_param_tipo_comprobante.fecha_desde', Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_fecha_desde'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_fecha_desde_comparador'));
	$criterio->add('ws_fe_param_tipo_comprobante.fecha_hasta', Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_fecha_hasta'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_fecha_hasta_comparador'));
	$criterio->add('ws_fe_param_tipo_comprobante.observacion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_comprobante_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_tipo_factura_ws_fe_param_tipo_comprobante', 'vta_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_tipo_factura_ws_fe_param_tipo_comprobante.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante', 'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito_ws_fe_param_tipo_comprobante', 'vta_tipo_nota_debito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_tipo_nota_debito_ws_fe_param_tipo_comprobante.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo_ws_fe_param_tipo_comprobante', 'vta_tipo_recibo_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_tipo_recibo_ws_fe_param_tipo_comprobante.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_punto_venta', 'ws_fe_param_punto_venta.id', 'ws_fe_ope_solicitud.ws_fe_param_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_concepto', 'ws_fe_param_tipo_concepto.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_documento', 'ws_fe_param_tipo_documento.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_moneda', 'ws_fe_param_tipo_moneda.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'ws_fe_ope_solicitud.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura_ws_fe_param_tipo_comprobante', 'pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito_ws_fe_param_tipo_comprobante', 'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante', 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'ws_fe_param_tipo_comprobante.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_tipo_comprobante');
		$criterio->setCriterios();		
}
?>

