<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComisionVtaFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comision_vta_factura.id', Gral::getVars(1, 'buscador_vta_comision_vta_factura_id'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_id_comparador'));
	$criterio->add('vta_comision_vta_factura.descripcion', Gral::getVars(1, 'buscador_vta_comision_vta_factura_descripcion'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_descripcion_comparador'));
	$criterio->add('vta_comision_vta_factura.vta_comision_id', Gral::getVars(1, 'buscador_vta_comision_vta_factura_vta_comision_id'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_vta_comision_id_comparador'));
	$criterio->add('vta_comision_vta_factura.vta_factura_id', Gral::getVars(1, 'buscador_vta_comision_vta_factura_vta_factura_id'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_vta_factura_id_comparador'));
	$criterio->add('vta_comision_vta_factura.base_comisionable', Gral::getVars(1, 'buscador_vta_comision_vta_factura_base_comisionable'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_base_comisionable_comparador'));
	$criterio->add('vta_comision_vta_factura.importe_afectado', Gral::getVars(1, 'buscador_vta_comision_vta_factura_importe_afectado'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_importe_afectado_comparador'));
	$criterio->add('vta_comision_vta_factura.porcentaje_comision', Gral::getVars(1, 'buscador_vta_comision_vta_factura_porcentaje_comision'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_porcentaje_comision_comparador'));
	$criterio->add('vta_comision_vta_factura.importe_comision', Gral::getVars(1, 'buscador_vta_comision_vta_factura_importe_comision'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_importe_comision_comparador'));
	$criterio->add('vta_comision_vta_factura.codigo', Gral::getVars(1, 'buscador_vta_comision_vta_factura_codigo'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_codigo_comparador'));
	$criterio->add('vta_comision_vta_factura.observacion', Gral::getVars(1, 'buscador_vta_comision_vta_factura_observacion'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_observacion_comparador'));
	$criterio->add('vta_comision_vta_factura.estado', Gral::getVars(1, 'buscador_vta_comision_vta_factura_estado'), Gral::getVars(1, 'buscador_vta_comision_vta_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_comision_vta_factura');
		$criterio->setCriterios();		
}
?>

