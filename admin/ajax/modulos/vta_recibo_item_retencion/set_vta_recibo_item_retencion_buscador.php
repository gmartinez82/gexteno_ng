<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaReciboItemRetencion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_recibo_item_retencion.id', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_id'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_id_comparador'));
	$criterio->add('vta_recibo_item_retencion.descripcion', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_descripcion'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_descripcion_comparador'));
	$criterio->add('vta_recibo_item_retencion.vta_recibo_id', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_vta_recibo_id'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_vta_recibo_id_comparador'));
	$criterio->add('vta_recibo_item_retencion.vta_recibo_item_id', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_vta_recibo_item_id'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_vta_recibo_item_id_comparador'));
	$criterio->add('vta_recibo_item_retencion.numero_comprobante', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_numero_comprobante'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_numero_comprobante_comparador'));
	$criterio->add('vta_recibo_item_retencion.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_recibo_item_retencion_fecha_emision')), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_fecha_emision_comparador'));
	$criterio->add('vta_recibo_item_retencion.importe_base_imponible', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_importe_base_imponible'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_importe_base_imponible_comparador'));
	$criterio->add('vta_recibo_item_retencion.importe_retencion', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_importe_retencion'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_importe_retencion_comparador'));
	$criterio->add('vta_recibo_item_retencion.codigo', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_codigo'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_codigo_comparador'));
	$criterio->add('vta_recibo_item_retencion.observacion', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_observacion'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_observacion_comparador'));
	$criterio->add('vta_recibo_item_retencion.estado', Gral::getVars(1, 'buscador_vta_recibo_item_retencion_estado'), Gral::getVars(1, 'buscador_vta_recibo_item_retencion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_recibo_item_retencion');
		$criterio->setCriterios();		
}
?>

