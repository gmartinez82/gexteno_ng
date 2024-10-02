<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeFacturaItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_factura_item.id', Gral::getVars(1, 'buscador_pde_factura_item_id'), Gral::getVars(1, 'buscador_pde_factura_item_id_comparador'));
	$criterio->add('pde_factura_item.descripcion', Gral::getVars(1, 'buscador_pde_factura_item_descripcion'), Gral::getVars(1, 'buscador_pde_factura_item_descripcion_comparador'));
	$criterio->add('pde_factura_item.pde_factura_id', Gral::getVars(1, 'buscador_pde_factura_item_pde_factura_id'), Gral::getVars(1, 'buscador_pde_factura_item_pde_factura_id_comparador'));
	$criterio->add('pde_factura_item.gral_tipo_iva_id', Gral::getVars(1, 'buscador_pde_factura_item_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_pde_factura_item_gral_tipo_iva_id_comparador'));
	$criterio->add('pde_factura_item.pde_factura_concepto_id', Gral::getVars(1, 'buscador_pde_factura_item_pde_factura_concepto_id'), Gral::getVars(1, 'buscador_pde_factura_item_pde_factura_concepto_id_comparador'));
	$criterio->add('pde_factura_item.importe_unitario', Gral::getVars(1, 'buscador_pde_factura_item_importe_unitario'), Gral::getVars(1, 'buscador_pde_factura_item_importe_unitario_comparador'));
	$criterio->add('pde_factura_item.cantidad', Gral::getVars(1, 'buscador_pde_factura_item_cantidad'), Gral::getVars(1, 'buscador_pde_factura_item_cantidad_comparador'));
	$criterio->add('pde_factura_item.codigo', Gral::getVars(1, 'buscador_pde_factura_item_codigo'), Gral::getVars(1, 'buscador_pde_factura_item_codigo_comparador'));
	$criterio->add('pde_factura_item.observacion', Gral::getVars(1, 'buscador_pde_factura_item_observacion'), Gral::getVars(1, 'buscador_pde_factura_item_observacion_comparador'));
	$criterio->add('pde_factura_item.estado', Gral::getVars(1, 'buscador_pde_factura_item_estado'), Gral::getVars(1, 'buscador_pde_factura_item_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_factura_item');
		$criterio->setCriterios();		
}
?>

