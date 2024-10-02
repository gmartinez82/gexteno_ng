<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComisionista::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comisionista.id', Gral::getVars(1, 'buscador_vta_comisionista_id'), Gral::getVars(1, 'buscador_vta_comisionista_id_comparador'));
	$criterio->add('vta_comisionista.descripcion', Gral::getVars(1, 'buscador_vta_comisionista_descripcion'), Gral::getVars(1, 'buscador_vta_comisionista_descripcion_comparador'));
	$criterio->add('vta_comisionista.apellido', Gral::getVars(1, 'buscador_vta_comisionista_apellido'), Gral::getVars(1, 'buscador_vta_comisionista_apellido_comparador'));
	$criterio->add('vta_comisionista.nombre', Gral::getVars(1, 'buscador_vta_comisionista_nombre'), Gral::getVars(1, 'buscador_vta_comisionista_nombre_comparador'));
	$criterio->add('vta_comisionista.codigo', Gral::getVars(1, 'buscador_vta_comisionista_codigo'), Gral::getVars(1, 'buscador_vta_comisionista_codigo_comparador'));
	$criterio->add('vta_comisionista.observacion', Gral::getVars(1, 'buscador_vta_comisionista_observacion'), Gral::getVars(1, 'buscador_vta_comisionista_observacion_comparador'));
	$criterio->add('vta_comisionista.estado', Gral::getVars(1, 'buscador_vta_comisionista_estado'), Gral::getVars(1, 'buscador_vta_comisionista_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.vta_comisionista_id', 'vta_comisionista.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_presupuesto.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_presupuesto.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_comisionista');
		$criterio->setCriterios();		
}
?>

