<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_estado.id', Gral::getVars(1, 'buscador_pdi_estado_id'), Gral::getVars(1, 'buscador_pdi_estado_id_comparador'));
	$criterio->add('pdi_estado.pdi_pedido_id', Gral::getVars(1, 'buscador_pdi_estado_pdi_pedido_id'), Gral::getVars(1, 'buscador_pdi_estado_pdi_pedido_id_comparador'));
	$criterio->add('pdi_estado.pdi_tipo_estado_id', Gral::getVars(1, 'buscador_pdi_estado_pdi_tipo_estado_id'), Gral::getVars(1, 'buscador_pdi_estado_pdi_tipo_estado_id_comparador'));
	$criterio->add('pdi_estado.cantidad', Gral::getVars(1, 'buscador_pdi_estado_cantidad'), Gral::getVars(1, 'buscador_pdi_estado_cantidad_comparador'));
	$criterio->add('pdi_estado.cantidad_stock_real', Gral::getVars(1, 'buscador_pdi_estado_cantidad_stock_real'), Gral::getVars(1, 'buscador_pdi_estado_cantidad_stock_real_comparador'));
	$criterio->add('pdi_estado.cantidad_stock_comprometida', Gral::getVars(1, 'buscador_pdi_estado_cantidad_stock_comprometida'), Gral::getVars(1, 'buscador_pdi_estado_cantidad_stock_comprometida_comparador'));
	$criterio->add('pdi_estado.fechahora', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_pdi_estado_fechahora')), Gral::getVars(1, 'buscador_pdi_estado_fechahora_comparador'));
	$criterio->add('pdi_estado.venta_perdida', Gral::getVars(1, 'buscador_pdi_estado_venta_perdida'), Gral::getVars(1, 'buscador_pdi_estado_venta_perdida_comparador'));
	$criterio->add('pdi_estado.observacion', Gral::getVars(1, 'buscador_pdi_estado_observacion'), Gral::getVars(1, 'buscador_pdi_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_estado');
		$criterio->setCriterios();		
}
?>

