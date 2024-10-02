<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsUnidadMedida::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_unidad_medida.id', Gral::getVars(1, 'buscador_ins_unidad_medida_id'), Gral::getVars(1, 'buscador_ins_unidad_medida_id_comparador'));
	$criterio->add('ins_unidad_medida.descripcion', Gral::getVars(1, 'buscador_ins_unidad_medida_descripcion'), Gral::getVars(1, 'buscador_ins_unidad_medida_descripcion_comparador'));
	$criterio->add('ins_unidad_medida.descripcion_corta', Gral::getVars(1, 'buscador_ins_unidad_medida_descripcion_corta'), Gral::getVars(1, 'buscador_ins_unidad_medida_descripcion_corta_comparador'));
	$criterio->add('ins_unidad_medida.fraccionable', Gral::getVars(1, 'buscador_ins_unidad_medida_fraccionable'), Gral::getVars(1, 'buscador_ins_unidad_medida_fraccionable_comparador'));
	$criterio->add('ins_unidad_medida.codigo', Gral::getVars(1, 'buscador_ins_unidad_medida_codigo'), Gral::getVars(1, 'buscador_ins_unidad_medida_codigo_comparador'));
	$criterio->add('ins_unidad_medida.observacion', Gral::getVars(1, 'buscador_ins_unidad_medida_observacion'), Gral::getVars(1, 'buscador_ins_unidad_medida_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'ins_insumo.ins_matriz_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida_pedido', 'ins_unidad_medida_pedido.id', 'ins_insumo.ins_unidad_medida_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_consumo', 'ins_tipo_consumo.id', 'ins_insumo.ins_tipo_consumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_necesidad', 'ins_tipo_necesidad.id', 'ins_insumo.ins_tipo_necesidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_nivel_aprovisionamiento', 'ins_nivel_aprovisionamiento.id', 'ins_insumo.ins_nivel_aprovisionamiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_insumo', 'ins_tipo_insumo.id', 'ins_insumo.ins_tipo_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_fabricante', 'ins_tipo_fabricante.id', 'ins_insumo.ins_tipo_fabricante_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_vta_factura_vta_orden_venta', 'vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.id', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_orden_venta.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_factura_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_factura_vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_oc', 'pde_factura_pde_oc.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_oc.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_factura_pde_oc.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_recepcion', 'pde_factura_pde_recepcion.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'pde_factura_pde_recepcion.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_recepcion', 'pde_nota_credito_pde_factura_pde_recepcion.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_pde_factura_pde_recepcion.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_oc', 'pde_nota_credito_pde_factura_pde_oc.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_vta_orden_venta', 'vta_ajuste_debe_vta_orden_venta.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.id', 'vta_ajuste_debe_vta_orden_venta.vta_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta', 'vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber', 'vta_ajuste_haber.id', 'vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta.vta_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_unidad_medida_ins_unidad_medida', 'eku_param_unidad_medida_ins_unidad_medida.ins_unidad_medida_id', 'ins_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_unidad_medida', 'eku_param_unidad_medida.id', 'eku_param_unidad_medida_ins_unidad_medida.eku_param_unidad_medida_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_unidad_medida');
		$criterio->setCriterios();		
}
?>

