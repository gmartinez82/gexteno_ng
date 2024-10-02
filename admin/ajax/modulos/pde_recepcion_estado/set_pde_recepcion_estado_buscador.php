<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeRecepcionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recepcion_estado.id', Gral::getVars(1, 'buscador_pde_recepcion_estado_id'), Gral::getVars(1, 'buscador_pde_recepcion_estado_id_comparador'));
	$criterio->add('pde_recepcion_estado.pde_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_estado_pde_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_estado_pde_recepcion_id_comparador'));
	$criterio->add('pde_recepcion_estado.pde_recepcion_tipo_estado_id', Gral::getVars(1, 'buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_recepcion_estado_pde_recepcion_tipo_estado_id_comparador'));
	$criterio->add('pde_recepcion_estado.pde_centro_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_estado_pde_centro_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_estado_pde_centro_recepcion_id_comparador'));
	$criterio->add('pde_recepcion_estado.pan_panol_id', Gral::getVars(1, 'buscador_pde_recepcion_estado_pan_panol_id'), Gral::getVars(1, 'buscador_pde_recepcion_estado_pan_panol_id_comparador'));
	$criterio->add('pde_recepcion_estado.cantidad', Gral::getVars(1, 'buscador_pde_recepcion_estado_cantidad'), Gral::getVars(1, 'buscador_pde_recepcion_estado_cantidad_comparador'));
	$criterio->add('pde_recepcion_estado.observacion', Gral::getVars(1, 'buscador_pde_recepcion_estado_observacion'), Gral::getVars(1, 'buscador_pde_recepcion_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recepcion_estado');
		$criterio->setCriterios();		
}
?>

