<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeNotaCreditoTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_nota_credito_tipo_estado.id', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_id_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.descripcion', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_descripcion_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.codigo', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_codigo'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_codigo_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.activo', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_activo'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_activo_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.terminal', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_terminal'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_terminal_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.imputable', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_imputable'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_imputable_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.gestionable', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_gestionable'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_gestionable_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.aprobado_afip', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_aprobado_afip'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_aprobado_afip_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.contabilizable', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_contabilizable'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_contabilizable_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.anulado', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_anulado'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_anulado_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.observacion', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_observacion'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_observacion_comparador'));
	$criterio->add('pde_nota_credito_tipo_estado.estado', Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_estado'), Gral::getVars(1, 'buscador_pde_nota_credito_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.pde_nota_credito_tipo_estado_id', 'pde_nota_credito_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_nota_credito.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_credito', 'pde_tipo_origen_nota_credito.id', 'pde_nota_credito.pde_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_nota_credito.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_nota_credito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_nota_credito.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'pde_nota_credito.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'pde_nota_credito.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'pde_nota_credito.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'pde_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_estado', 'pde_nota_credito_estado.pde_nota_credito_tipo_estado_id', 'pde_nota_credito_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_nota_credito_tipo_estado');
		$criterio->setCriterios();		
}
?>

