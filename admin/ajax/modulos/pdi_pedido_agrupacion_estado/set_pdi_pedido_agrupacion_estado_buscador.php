<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiPedidoAgrupacionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_pedido_agrupacion_estado.id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_pdi_pedido_agrupacion_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_pdi_pedido_agrupacion_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_tipo_estado_id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_pdi_pedido_agrupacion_tipo_estado_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_pdi_pedido_agrupacion_tipo_estado_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion_estado.observacion', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_observacion'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_pedido_agrupacion_estado');
		$criterio->setCriterios();		
}
?>

