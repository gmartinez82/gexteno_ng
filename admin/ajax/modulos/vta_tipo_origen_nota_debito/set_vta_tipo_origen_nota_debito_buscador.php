<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaTipoOrigenNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_tipo_origen_nota_debito.id', Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_id'), Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_id_comparador'));
	$criterio->add('vta_tipo_origen_nota_debito.descripcion', Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_descripcion'), Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_descripcion_comparador'));
	$criterio->add('vta_tipo_origen_nota_debito.codigo', Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_codigo'), Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_codigo_comparador'));
	$criterio->add('vta_tipo_origen_nota_debito.observacion', Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_observacion'), Gral::getVars(1, 'buscador_vta_tipo_origen_nota_debito_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'vta_tipo_origen_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_nota_debito.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_nota_debito.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_debito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_nota_debito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_nota_debito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_nota_debito.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_nota_debito.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_nota_debito.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_nota_debito.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_nota_debito.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_debito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_nota_debito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_tipo_origen_nota_debito');
		$criterio->setCriterios();		
}
?>

