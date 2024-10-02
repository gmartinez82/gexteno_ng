<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOrdenPagoPdeFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_orden_pago_pde_factura.id', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_id'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_id_comparador'));
	$criterio->add('pde_orden_pago_pde_factura.descripcion', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_descripcion'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_descripcion_comparador'));
	$criterio->add('pde_orden_pago_pde_factura.pde_orden_pago_id', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_pde_orden_pago_id'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_pde_orden_pago_id_comparador'));
	$criterio->add('pde_orden_pago_pde_factura.pde_factura_id', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_pde_factura_id'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_pde_factura_id_comparador'));
	$criterio->add('pde_orden_pago_pde_factura.importe_afectado', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_importe_afectado'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_importe_afectado_comparador'));
	$criterio->add('pde_orden_pago_pde_factura.codigo', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_codigo'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_codigo_comparador'));
	$criterio->add('pde_orden_pago_pde_factura.observacion', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_observacion'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_observacion_comparador'));
	$criterio->add('pde_orden_pago_pde_factura.estado', Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_estado'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_orden_pago_pde_factura');
		$criterio->setCriterios();		
}
?>

