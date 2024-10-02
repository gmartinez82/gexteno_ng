<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvEmail::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_email.id', Gral::getVars(1, 'buscador_prv_email_id'), Gral::getVars(1, 'buscador_prv_email_id_comparador'));
	$criterio->add('prv_email.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_email_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_email_prv_proveedor_id_comparador'));
	$criterio->add('prv_email.descripcion', Gral::getVars(1, 'buscador_prv_email_descripcion'), Gral::getVars(1, 'buscador_prv_email_descripcion_comparador'));
	$criterio->add('prv_email.codigo', Gral::getVars(1, 'buscador_prv_email_codigo'), Gral::getVars(1, 'buscador_prv_email_codigo_comparador'));
	$criterio->add('prv_email.observacion', Gral::getVars(1, 'buscador_prv_email_observacion'), Gral::getVars(1, 'buscador_prv_email_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_email');
		$criterio->setCriterios();		
}
?>

