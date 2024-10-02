<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_estado.id', Gral::getVars(1, 'buscador_pde_estado_id'), Gral::getVars(1, 'buscador_pde_estado_id_comparador'));
	$criterio->add('pde_estado.pde_pedido_id', Gral::getVars(1, 'buscador_pde_estado_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_estado_pde_pedido_id_comparador'));
	$criterio->add('pde_estado.pde_tipo_estado_id', Gral::getVars(1, 'buscador_pde_estado_pde_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_estado_pde_tipo_estado_id_comparador'));
	$criterio->add('pde_estado.observacion', Gral::getVars(1, 'buscador_pde_estado_observacion'), Gral::getVars(1, 'buscador_pde_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_estado');
		$criterio->setCriterios();		
}
?>

