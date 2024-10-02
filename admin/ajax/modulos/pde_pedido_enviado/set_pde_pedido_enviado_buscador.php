<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdePedidoEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_pedido_enviado.id', Gral::getVars(1, 'buscador_pde_pedido_enviado_id'), Gral::getVars(1, 'buscador_pde_pedido_enviado_id_comparador'));
	$criterio->add('pde_pedido_enviado.descripcion', Gral::getVars(1, 'buscador_pde_pedido_enviado_descripcion'), Gral::getVars(1, 'buscador_pde_pedido_enviado_descripcion_comparador'));
	$criterio->add('pde_pedido_enviado.pde_pedido_id', Gral::getVars(1, 'buscador_pde_pedido_enviado_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_pedido_enviado_pde_pedido_id_comparador'));
	$criterio->add('pde_pedido_enviado.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_pedido_enviado_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_pedido_enviado_prv_proveedor_id_comparador'));
	$criterio->add('pde_pedido_enviado.asunto', Gral::getVars(1, 'buscador_pde_pedido_enviado_asunto'), Gral::getVars(1, 'buscador_pde_pedido_enviado_asunto_comparador'));
	$criterio->add('pde_pedido_enviado.destinatario', Gral::getVars(1, 'buscador_pde_pedido_enviado_destinatario'), Gral::getVars(1, 'buscador_pde_pedido_enviado_destinatario_comparador'));
	$criterio->add('pde_pedido_enviado.cuerpo', Gral::getVars(1, 'buscador_pde_pedido_enviado_cuerpo'), Gral::getVars(1, 'buscador_pde_pedido_enviado_cuerpo_comparador'));
	$criterio->add('pde_pedido_enviado.adjunto', Gral::getVars(1, 'buscador_pde_pedido_enviado_adjunto'), Gral::getVars(1, 'buscador_pde_pedido_enviado_adjunto_comparador'));
	$criterio->add('pde_pedido_enviado.codigo_envio', Gral::getVars(1, 'buscador_pde_pedido_enviado_codigo_envio'), Gral::getVars(1, 'buscador_pde_pedido_enviado_codigo_envio_comparador'));
	$criterio->add('pde_pedido_enviado.codigo', Gral::getVars(1, 'buscador_pde_pedido_enviado_codigo'), Gral::getVars(1, 'buscador_pde_pedido_enviado_codigo_comparador'));
	$criterio->add('pde_pedido_enviado.observacion', Gral::getVars(1, 'buscador_pde_pedido_enviado_observacion'), Gral::getVars(1, 'buscador_pde_pedido_enviado_observacion_comparador'));
	$criterio->add('pde_pedido_enviado.estado', Gral::getVars(1, 'buscador_pde_pedido_enviado_estado'), Gral::getVars(1, 'buscador_pde_pedido_enviado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_pedido_enviado');
		$criterio->setCriterios();		
}
?>

