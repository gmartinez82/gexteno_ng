<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPresupuestoTipoEmision::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_presupuesto_tipo_emision.id', Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_id'), Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_id_comparador'));
	$criterio->add('vta_presupuesto_tipo_emision.descripcion', Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_descripcion'), Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_descripcion_comparador'));
	$criterio->add('vta_presupuesto_tipo_emision.codigo', Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_codigo'), Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_codigo_comparador'));
	$criterio->add('vta_presupuesto_tipo_emision.observacion', Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_observacion'), Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_observacion_comparador'));
	$criterio->add('vta_presupuesto_tipo_emision.estado', Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_estado'), Gral::getVars(1, 'buscador_vta_presupuesto_tipo_emision_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'vta_presupuesto_tipo_emision.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_presupuesto.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_presupuesto.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_presupuesto.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_presupuesto.gral_sucursal_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_presupuesto_tipo_emision');
		$criterio->setCriterios();		
}
?>

