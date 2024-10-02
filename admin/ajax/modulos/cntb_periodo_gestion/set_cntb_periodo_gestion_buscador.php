<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbPeriodo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_periodo.id', Gral::getVars(1, 'buscador_cntb_periodo_id'), Gral::getVars(1, 'buscador_cntb_periodo_id_comparador'));
	$criterio->add('cntb_periodo.descripcion', Gral::getVars(1, 'buscador_cntb_periodo_descripcion'), Gral::getVars(1, 'buscador_cntb_periodo_descripcion_comparador'));
	$criterio->add('cntb_periodo.cntb_ejercicio_id', Gral::getVars(1, 'buscador_cntb_periodo_cntb_ejercicio_id'), Gral::getVars(1, 'buscador_cntb_periodo_cntb_ejercicio_id_comparador'));
	$criterio->add('cntb_periodo.anio', Gral::getVars(1, 'buscador_cntb_periodo_anio'), Gral::getVars(1, 'buscador_cntb_periodo_anio_comparador'));
	$criterio->add('cntb_periodo.gral_mes_id', Gral::getVars(1, 'buscador_cntb_periodo_gral_mes_id'), Gral::getVars(1, 'buscador_cntb_periodo_gral_mes_id_comparador'));
	$criterio->add('cntb_periodo.fecha_inicio', Gral::getFechaToDB(Gral::getVars(1, 'buscador_cntb_periodo_fecha_inicio')), Gral::getVars(1, 'buscador_cntb_periodo_fecha_inicio_comparador'));
	$criterio->add('cntb_periodo.fecha_fin', Gral::getFechaToDB(Gral::getVars(1, 'buscador_cntb_periodo_fecha_fin')), Gral::getVars(1, 'buscador_cntb_periodo_fecha_fin_comparador'));
	$criterio->add('cntb_periodo.codigo', Gral::getVars(1, 'buscador_cntb_periodo_codigo'), Gral::getVars(1, 'buscador_cntb_periodo_codigo_comparador'));
	$criterio->add('cntb_periodo.observacion', Gral::getVars(1, 'buscador_cntb_periodo_observacion'), Gral::getVars(1, 'buscador_cntb_periodo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.id', 'cntb_diario_asiento.cntb_ejercicio_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_asiento', 'cntb_tipo_asiento.id', 'cntb_diario_asiento.cntb_tipo_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_origen', 'cntb_tipo_origen.id', 'cntb_diario_asiento.cntb_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_movimiento', 'cntb_tipo_movimiento.id', 'cntb_diario_asiento.cntb_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'cntb_diario_asiento.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_factura', 'cntb_diario_asiento_vta_factura.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'cntb_diario_asiento_vta_factura.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_nota_credito', 'cntb_diario_asiento_vta_nota_credito.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'cntb_diario_asiento_vta_nota_credito.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_nota_debito', 'cntb_diario_asiento_vta_nota_debito.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_recibo', 'cntb_diario_asiento_vta_recibo.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'cntb_diario_asiento_vta_recibo.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_factura', 'cntb_diario_asiento_pde_factura.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'cntb_diario_asiento_pde_factura.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_nota_credito', 'cntb_diario_asiento_pde_nota_credito.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'cntb_diario_asiento_pde_nota_credito.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_nota_debito', 'cntb_diario_asiento_pde_nota_debito.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'cntb_diario_asiento_pde_nota_debito.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_recibo', 'cntb_diario_asiento_pde_recibo.cntb_periodo_id', 'cntb_periodo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'cntb_diario_asiento_pde_recibo.pde_recibo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_periodo');
		$criterio->setCriterios();		
}
?>

