<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeCentroRecepcionPanPanol::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_centro_recepcion_pan_panol.id', Gral::getVars(1, 'buscador_pde_centro_recepcion_pan_panol_id'), Gral::getVars(1, 'buscador_pde_centro_recepcion_pan_panol_id_comparador'));
	$criterio->add('pde_centro_recepcion_pan_panol.pde_centro_recepcion_id', Gral::getVars(1, 'buscador_pde_centro_recepcion_pan_panol_pde_centro_recepcion_id'), Gral::getVars(1, 'buscador_pde_centro_recepcion_pan_panol_pde_centro_recepcion_id_comparador'));
	$criterio->add('pde_centro_recepcion_pan_panol.pan_panol_id', Gral::getVars(1, 'buscador_pde_centro_recepcion_pan_panol_pan_panol_id'), Gral::getVars(1, 'buscador_pde_centro_recepcion_pan_panol_pan_panol_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_centro_recepcion_pan_panol');
		$criterio->setCriterios();		
}
?>

