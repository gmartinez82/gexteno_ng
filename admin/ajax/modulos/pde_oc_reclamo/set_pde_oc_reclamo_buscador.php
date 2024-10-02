<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcReclamo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_reclamo.id', Gral::getVars(1, 'buscador_pde_oc_reclamo_id'), Gral::getVars(1, 'buscador_pde_oc_reclamo_id_comparador'));
	$criterio->add('pde_oc_reclamo.descripcion', Gral::getVars(1, 'buscador_pde_oc_reclamo_descripcion'), Gral::getVars(1, 'buscador_pde_oc_reclamo_descripcion_comparador'));
	$criterio->add('pde_oc_reclamo.codigo', Gral::getVars(1, 'buscador_pde_oc_reclamo_codigo'), Gral::getVars(1, 'buscador_pde_oc_reclamo_codigo_comparador'));
	$criterio->add('pde_oc_reclamo.pde_oc_id', Gral::getVars(1, 'buscador_pde_oc_reclamo_pde_oc_id'), Gral::getVars(1, 'buscador_pde_oc_reclamo_pde_oc_id_comparador'));
	$criterio->add('pde_oc_reclamo.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_oc_reclamo_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_oc_reclamo_prv_proveedor_id_comparador'));
	$criterio->add('pde_oc_reclamo.pde_oc_reclamo_motivo_id', Gral::getVars(1, 'buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id'), Gral::getVars(1, 'buscador_pde_oc_reclamo_pde_oc_reclamo_motivo_id_comparador'));
	$criterio->add('pde_oc_reclamo.observacion', Gral::getVars(1, 'buscador_pde_oc_reclamo_observacion'), Gral::getVars(1, 'buscador_pde_oc_reclamo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc_reclamo_destinatario', 'pde_oc_reclamo_destinatario.pde_oc_reclamo_id', 'pde_oc_reclamo.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_oc_reclamo_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_reclamo_envio_email', 'pde_oc_reclamo_envio_email.pde_oc_reclamo_id', 'pde_oc_reclamo.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_reclamo');
		$criterio->setCriterios();		
}
?>

