<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_agrupacion_item.id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_id_comparador'));
	$criterio->add('pde_oc_agrupacion_item.descripcion', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_descripcion'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_descripcion_comparador'));
	$criterio->add('pde_oc_agrupacion_item.codigo', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_codigo'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_codigo_comparador'));
	$criterio->add('pde_oc_agrupacion_item.pde_oc_agrupacion_id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_pde_oc_agrupacion_id_comparador'));
	$criterio->add('pde_oc_agrupacion_item.ins_insumo_id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_ins_insumo_id_comparador'));
	$criterio->add('pde_oc_agrupacion_item.cantidad', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_cantidad'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_cantidad_comparador'));
	$criterio->add('pde_oc_agrupacion_item.prv_insumo_id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_id_comparador'));
	$criterio->add('pde_oc_agrupacion_item.prv_insumo_costo_id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_costo_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_insumo_costo_id_comparador'));
	$criterio->add('pde_oc_agrupacion_item.importe_esperado', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_importe_esperado'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_importe_esperado_comparador'));
	$criterio->add('pde_oc_agrupacion_item.afecta_costo', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_afecta_costo'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_afecta_costo_comparador'));
	$criterio->add('pde_oc_agrupacion_item.prv_descuento_financiero_id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_financiero_id_comparador'));
	$criterio->add('pde_oc_agrupacion_item.prv_descuento_comercial_id', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_prv_descuento_comercial_id_comparador'));
	$criterio->add('pde_oc_agrupacion_item.observacion', Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_observacion'), Gral::getVars(1, 'buscador_pde_oc_agrupacion_item_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_agrupacion_item');
		$criterio->setCriterios();		
}
?>

