<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcReclamoMotivo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_reclamo_motivo.id', Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_id'), Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_id_comparador'));
	$criterio->add('pde_oc_reclamo_motivo.descripcion', Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_descripcion'), Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_descripcion_comparador'));
	$criterio->add('pde_oc_reclamo_motivo.codigo', Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_codigo'), Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_codigo_comparador'));
	$criterio->add('pde_oc_reclamo_motivo.puntaje', Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_puntaje'), Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_puntaje_comparador'));
	$criterio->add('pde_oc_reclamo_motivo.observacion', Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_observacion'), Gral::getVars(1, 'buscador_pde_oc_reclamo_motivo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc_reclamo', 'pde_oc_reclamo.pde_oc_reclamo_motivo_id', 'pde_oc_reclamo_motivo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_oc_reclamo.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc_reclamo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_reclamo_motivo');
		$criterio->setCriterios();		
}
?>

