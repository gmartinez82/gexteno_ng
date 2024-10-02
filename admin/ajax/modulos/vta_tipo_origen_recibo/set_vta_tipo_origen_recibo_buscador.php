<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaTipoOrigenRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_tipo_origen_recibo.id', Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_id'), Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_id_comparador'));
	$criterio->add('vta_tipo_origen_recibo.descripcion', Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_descripcion'), Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_descripcion_comparador'));
	$criterio->add('vta_tipo_origen_recibo.codigo', Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_codigo'), Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_codigo_comparador'));
	$criterio->add('vta_tipo_origen_recibo.observacion', Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_observacion'), Gral::getVars(1, 'buscador_vta_tipo_origen_recibo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.vta_tipo_origen_recibo_id', 'vta_tipo_origen_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_recibo.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_recibo.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_recibo.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_recibo.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_recibo.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_recibo.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_recibo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_recibo.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_recibo.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_recibo.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_recibo.gral_sucursal_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_tipo_origen_recibo');
		$criterio->setCriterios();		
}
?>

