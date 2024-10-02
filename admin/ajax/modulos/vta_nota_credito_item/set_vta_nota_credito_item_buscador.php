<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaNotaCreditoItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_nota_credito_item.id', Gral::getVars(1, 'buscador_vta_nota_credito_item_id'), Gral::getVars(1, 'buscador_vta_nota_credito_item_id_comparador'));
	$criterio->add('vta_nota_credito_item.descripcion', Gral::getVars(1, 'buscador_vta_nota_credito_item_descripcion'), Gral::getVars(1, 'buscador_vta_nota_credito_item_descripcion_comparador'));
	$criterio->add('vta_nota_credito_item.vta_nota_credito_id', Gral::getVars(1, 'buscador_vta_nota_credito_item_vta_nota_credito_id'), Gral::getVars(1, 'buscador_vta_nota_credito_item_vta_nota_credito_id_comparador'));
	$criterio->add('vta_nota_credito_item.gral_tipo_iva_id', Gral::getVars(1, 'buscador_vta_nota_credito_item_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_vta_nota_credito_item_gral_tipo_iva_id_comparador'));
	$criterio->add('vta_nota_credito_item.vta_nota_credito_concepto_id', Gral::getVars(1, 'buscador_vta_nota_credito_item_vta_nota_credito_concepto_id'), Gral::getVars(1, 'buscador_vta_nota_credito_item_vta_nota_credito_concepto_id_comparador'));
	$criterio->add('vta_nota_credito_item.importe_unitario', Gral::getVars(1, 'buscador_vta_nota_credito_item_importe_unitario'), Gral::getVars(1, 'buscador_vta_nota_credito_item_importe_unitario_comparador'));
	$criterio->add('vta_nota_credito_item.cantidad', Gral::getVars(1, 'buscador_vta_nota_credito_item_cantidad'), Gral::getVars(1, 'buscador_vta_nota_credito_item_cantidad_comparador'));
	$criterio->add('vta_nota_credito_item.percepcion_iibb_aplica', Gral::getVars(1, 'buscador_vta_nota_credito_item_percepcion_iibb_aplica'), Gral::getVars(1, 'buscador_vta_nota_credito_item_percepcion_iibb_aplica_comparador'));
	$criterio->add('vta_nota_credito_item.codigo', Gral::getVars(1, 'buscador_vta_nota_credito_item_codigo'), Gral::getVars(1, 'buscador_vta_nota_credito_item_codigo_comparador'));
	$criterio->add('vta_nota_credito_item.observacion', Gral::getVars(1, 'buscador_vta_nota_credito_item_observacion'), Gral::getVars(1, 'buscador_vta_nota_credito_item_observacion_comparador'));
	$criterio->add('vta_nota_credito_item.estado', Gral::getVars(1, 'buscador_vta_nota_credito_item_estado'), Gral::getVars(1, 'buscador_vta_nota_credito_item_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_nota_credito_item');
		$criterio->setCriterios();		
}
?>

