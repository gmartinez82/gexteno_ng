<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeCentroPedidoUsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_centro_pedido_us_usuario.id', Gral::getVars(1, 'buscador_pde_centro_pedido_us_usuario_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_us_usuario_id_comparador'));
	$criterio->add('pde_centro_pedido_us_usuario.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pde_centro_pedido_us_usuario_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_us_usuario_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_centro_pedido_us_usuario.us_usuario_id', Gral::getVars(1, 'buscador_pde_centro_pedido_us_usuario_us_usuario_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_us_usuario_us_usuario_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_centro_pedido_us_usuario');
		$criterio->setCriterios();		
}
?>

