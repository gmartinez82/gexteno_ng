<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiPedidoDestinatario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_pedido_destinatario.id', Gral::getVars(1, 'buscador_pdi_pedido_destinatario_id'), Gral::getVars(1, 'buscador_pdi_pedido_destinatario_id_comparador'));
	$criterio->add('pdi_pedido_destinatario.descripcion', Gral::getVars(1, 'buscador_pdi_pedido_destinatario_descripcion'), Gral::getVars(1, 'buscador_pdi_pedido_destinatario_descripcion_comparador'));
	$criterio->add('pdi_pedido_destinatario.pdi_pedido_id', Gral::getVars(1, 'buscador_pdi_pedido_destinatario_pdi_pedido_id'), Gral::getVars(1, 'buscador_pdi_pedido_destinatario_pdi_pedido_id_comparador'));
	$criterio->add('pdi_pedido_destinatario.us_usuario_id', Gral::getVars(1, 'buscador_pdi_pedido_destinatario_us_usuario_id'), Gral::getVars(1, 'buscador_pdi_pedido_destinatario_us_usuario_id_comparador'));
	$criterio->add('pdi_pedido_destinatario.codigo', Gral::getVars(1, 'buscador_pdi_pedido_destinatario_codigo'), Gral::getVars(1, 'buscador_pdi_pedido_destinatario_codigo_comparador'));
	$criterio->add('pdi_pedido_destinatario.observacion', Gral::getVars(1, 'buscador_pdi_pedido_destinatario_observacion'), Gral::getVars(1, 'buscador_pdi_pedido_destinatario_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_pedido_destinatario');
		$criterio->setCriterios();		
}
?>

