<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdePedidoDestinatario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_pedido_destinatario.id', Gral::getVars(1, 'buscador_pde_pedido_destinatario_id'), Gral::getVars(1, 'buscador_pde_pedido_destinatario_id_comparador'));
	$criterio->add('pde_pedido_destinatario.descripcion', Gral::getVars(1, 'buscador_pde_pedido_destinatario_descripcion'), Gral::getVars(1, 'buscador_pde_pedido_destinatario_descripcion_comparador'));
	$criterio->add('pde_pedido_destinatario.pde_pedido_id', Gral::getVars(1, 'buscador_pde_pedido_destinatario_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_pedido_destinatario_pde_pedido_id_comparador'));
	$criterio->add('pde_pedido_destinatario.us_usuario_id', Gral::getVars(1, 'buscador_pde_pedido_destinatario_us_usuario_id'), Gral::getVars(1, 'buscador_pde_pedido_destinatario_us_usuario_id_comparador'));
	$criterio->add('pde_pedido_destinatario.codigo', Gral::getVars(1, 'buscador_pde_pedido_destinatario_codigo'), Gral::getVars(1, 'buscador_pde_pedido_destinatario_codigo_comparador'));
	$criterio->add('pde_pedido_destinatario.observacion', Gral::getVars(1, 'buscador_pde_pedido_destinatario_observacion'), Gral::getVars(1, 'buscador_pde_pedido_destinatario_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_pedido_envio_email', 'pde_pedido_envio_email.pde_pedido_destinatario_id', 'pde_pedido_destinatario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_pedido_envio_email.pde_pedido_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_pedido_destinatario');
		$criterio->setCriterios();		
}
?>

