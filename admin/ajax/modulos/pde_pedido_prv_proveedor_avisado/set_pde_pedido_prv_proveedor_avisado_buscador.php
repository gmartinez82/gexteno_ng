<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdePedidoPrvProveedorAvisado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_pedido_prv_proveedor_avisado.id', Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_id'), Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_id_comparador'));
	$criterio->add('pde_pedido_prv_proveedor_avisado.pde_pedido_id', Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_pde_pedido_id_comparador'));
	$criterio->add('pde_pedido_prv_proveedor_avisado.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_prv_proveedor_id_comparador'));
	$criterio->add('pde_pedido_prv_proveedor_avisado.enviado_a', Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_enviado_a'), Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_enviado_a_comparador'));
	$criterio->add('pde_pedido_prv_proveedor_avisado.leido', Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_leido'), Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_leido_comparador'));
	$criterio->add('pde_pedido_prv_proveedor_avisado.leido_el', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_leido_el')), Gral::getVars(1, 'buscador_pde_pedido_prv_proveedor_avisado_leido_el_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_pedido_prv_proveedor_avisado');
		$criterio->setCriterios();		
}
?>

