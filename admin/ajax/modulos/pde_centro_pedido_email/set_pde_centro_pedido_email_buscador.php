<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeCentroPedidoEmail::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_centro_pedido_email.id', Gral::getVars(1, 'buscador_pde_centro_pedido_email_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_email_id_comparador'));
	$criterio->add('pde_centro_pedido_email.descripcion', Gral::getVars(1, 'buscador_pde_centro_pedido_email_descripcion'), Gral::getVars(1, 'buscador_pde_centro_pedido_email_descripcion_comparador'));
	$criterio->add('pde_centro_pedido_email.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pde_centro_pedido_email_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_email_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_centro_pedido_email.codigo', Gral::getVars(1, 'buscador_pde_centro_pedido_email_codigo'), Gral::getVars(1, 'buscador_pde_centro_pedido_email_codigo_comparador'));
	$criterio->add('pde_centro_pedido_email.observacion', Gral::getVars(1, 'buscador_pde_centro_pedido_email_observacion'), Gral::getVars(1, 'buscador_pde_centro_pedido_email_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_centro_pedido_email');
		$criterio->setCriterios();		
}
?>

