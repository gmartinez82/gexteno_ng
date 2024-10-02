<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsListaPrecio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_lista_precio.id', Gral::getVars(1, 'buscador_ins_lista_precio_id'), Gral::getVars(1, 'buscador_ins_lista_precio_id_comparador'));
	$criterio->add('ins_lista_precio.ins_insumo_id', Gral::getVars(1, 'buscador_ins_lista_precio_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_lista_precio_ins_insumo_id_comparador'));
	$criterio->add('ins_lista_precio.ins_tipo_lista_precio_id', Gral::getVars(1, 'buscador_ins_lista_precio_ins_tipo_lista_precio_id'), Gral::getVars(1, 'buscador_ins_lista_precio_ins_tipo_lista_precio_id_comparador'));
	$criterio->add('ins_lista_precio.importe_calculado', Gral::getVars(1, 'buscador_ins_lista_precio_importe_calculado'), Gral::getVars(1, 'buscador_ins_lista_precio_importe_calculado_comparador'));
	$criterio->add('ins_lista_precio.importe_manual', Gral::getVars(1, 'buscador_ins_lista_precio_importe_manual'), Gral::getVars(1, 'buscador_ins_lista_precio_importe_manual_comparador'));
	$criterio->add('ins_lista_precio.importe_venta', Gral::getVars(1, 'buscador_ins_lista_precio_importe_venta'), Gral::getVars(1, 'buscador_ins_lista_precio_importe_venta_comparador'));
	$criterio->add('ins_lista_precio.porcentaje_incremento', Gral::getVars(1, 'buscador_ins_lista_precio_porcentaje_incremento'), Gral::getVars(1, 'buscador_ins_lista_precio_porcentaje_incremento_comparador'));
	$criterio->add('ins_lista_precio.porcentaje_descuento', Gral::getVars(1, 'buscador_ins_lista_precio_porcentaje_descuento'), Gral::getVars(1, 'buscador_ins_lista_precio_porcentaje_descuento_comparador'));
	$criterio->add('ins_lista_precio.cantidad_minima_venta', Gral::getVars(1, 'buscador_ins_lista_precio_cantidad_minima_venta'), Gral::getVars(1, 'buscador_ins_lista_precio_cantidad_minima_venta_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'ins_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_lista_precio');
		$criterio->setCriterios();		
}
?>

