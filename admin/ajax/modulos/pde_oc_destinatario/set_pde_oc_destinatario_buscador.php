<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcDestinatario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_destinatario.id', Gral::getVars(1, 'buscador_pde_oc_destinatario_id'), Gral::getVars(1, 'buscador_pde_oc_destinatario_id_comparador'));
	$criterio->add('pde_oc_destinatario.descripcion', Gral::getVars(1, 'buscador_pde_oc_destinatario_descripcion'), Gral::getVars(1, 'buscador_pde_oc_destinatario_descripcion_comparador'));
	$criterio->add('pde_oc_destinatario.pde_oc_id', Gral::getVars(1, 'buscador_pde_oc_destinatario_pde_oc_id'), Gral::getVars(1, 'buscador_pde_oc_destinatario_pde_oc_id_comparador'));
	$criterio->add('pde_oc_destinatario.us_usuario_id', Gral::getVars(1, 'buscador_pde_oc_destinatario_us_usuario_id'), Gral::getVars(1, 'buscador_pde_oc_destinatario_us_usuario_id_comparador'));
	$criterio->add('pde_oc_destinatario.codigo', Gral::getVars(1, 'buscador_pde_oc_destinatario_codigo'), Gral::getVars(1, 'buscador_pde_oc_destinatario_codigo_comparador'));
	$criterio->add('pde_oc_destinatario.observacion', Gral::getVars(1, 'buscador_pde_oc_destinatario_observacion'), Gral::getVars(1, 'buscador_pde_oc_destinatario_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc_envio_email', 'pde_oc_envio_email.pde_oc_destinatario_id', 'pde_oc_destinatario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_oc_envio_email.pde_oc_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_destinatario');
		$criterio->setCriterios();		
}
?>

