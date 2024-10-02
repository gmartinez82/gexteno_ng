<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaTributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_tributo.id', Gral::getVars(1, 'buscador_vta_tributo_id'), Gral::getVars(1, 'buscador_vta_tributo_id_comparador'));
	$criterio->add('vta_tributo.descripcion', Gral::getVars(1, 'buscador_vta_tributo_descripcion'), Gral::getVars(1, 'buscador_vta_tributo_descripcion_comparador'));
	$criterio->add('vta_tributo.alicuota_porcentual', Gral::getVars(1, 'buscador_vta_tributo_alicuota_porcentual'), Gral::getVars(1, 'buscador_vta_tributo_alicuota_porcentual_comparador'));
	$criterio->add('vta_tributo.alicuota_decimal', Gral::getVars(1, 'buscador_vta_tributo_alicuota_decimal'), Gral::getVars(1, 'buscador_vta_tributo_alicuota_decimal_comparador'));
	$criterio->add('vta_tributo.formula', Gral::getVars(1, 'buscador_vta_tributo_formula'), Gral::getVars(1, 'buscador_vta_tributo_formula_comparador'));
	$criterio->add('vta_tributo.cntb_cuenta_id', Gral::getVars(1, 'buscador_vta_tributo_cntb_cuenta_id'), Gral::getVars(1, 'buscador_vta_tributo_cntb_cuenta_id_comparador'));
	$criterio->add('vta_tributo.codigo', Gral::getVars(1, 'buscador_vta_tributo_codigo'), Gral::getVars(1, 'buscador_vta_tributo_codigo_comparador'));
	$criterio->add('vta_tributo.observacion', Gral::getVars(1, 'buscador_vta_tributo_observacion'), Gral::getVars(1, 'buscador_vta_tributo_observacion_comparador'));
	$criterio->add('vta_tributo.estado', Gral::getVars(1, 'buscador_vta_tributo_estado'), Gral::getVars(1, 'buscador_vta_tributo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_tributo_ws_fe_param_tipo_tributo', 'vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id', 'vta_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_tributo', 'ws_fe_param_tipo_tributo.id', 'vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tributo_exencion', 'vta_tributo_exencion.vta_tributo_id', 'vta_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_tributo_exencion.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_vta_tributo', 'vta_nota_credito_vta_tributo.vta_tributo_id', 'vta_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_credito_vta_tributo.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_vta_tributo', 'vta_nota_debito_vta_tributo.vta_tributo_id', 'vta_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'vta_nota_debito_vta_tributo.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_vta_tributo', 'vta_recibo_vta_tributo.vta_tributo_id', 'vta_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_recibo_vta_tributo.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_tributo', 'vta_factura_vta_tributo.vta_tributo_id', 'vta_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_tributo.vta_factura_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_tributo');
		$criterio->setCriterios();		
}
?>

