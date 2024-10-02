<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeFacturaPdeRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_factura_pde_recibo.id', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_id'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_id_comparador'));
	$criterio->add('pde_factura_pde_recibo.descripcion', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_descripcion'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_descripcion_comparador'));
	$criterio->add('pde_factura_pde_recibo.pde_factura_id', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_pde_factura_id'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_pde_factura_id_comparador'));
	$criterio->add('pde_factura_pde_recibo.pde_recibo_id', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_pde_recibo_id'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_pde_recibo_id_comparador'));
	$criterio->add('pde_factura_pde_recibo.importe_afectado', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_importe_afectado'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_importe_afectado_comparador'));
	$criterio->add('pde_factura_pde_recibo.codigo', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_codigo'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_codigo_comparador'));
	$criterio->add('pde_factura_pde_recibo.observacion', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_observacion'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_observacion_comparador'));
	$criterio->add('pde_factura_pde_recibo.estado', Gral::getVars(1, 'buscador_pde_factura_pde_recibo_estado'), Gral::getVars(1, 'buscador_pde_factura_pde_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_factura_pde_recibo');
		$criterio->setCriterios();		
}
?>

