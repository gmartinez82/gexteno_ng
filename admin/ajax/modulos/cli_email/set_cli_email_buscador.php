<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliEmail::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_email.id', Gral::getVars(1, 'buscador_cli_email_id'), Gral::getVars(1, 'buscador_cli_email_id_comparador'));
	$criterio->add('cli_email.cli_cliente_id', Gral::getVars(1, 'buscador_cli_email_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_email_cli_cliente_id_comparador'));
	$criterio->add('cli_email.descripcion', Gral::getVars(1, 'buscador_cli_email_descripcion'), Gral::getVars(1, 'buscador_cli_email_descripcion_comparador'));
	$criterio->add('cli_email.codigo', Gral::getVars(1, 'buscador_cli_email_codigo'), Gral::getVars(1, 'buscador_cli_email_codigo_comparador'));
	$criterio->add('cli_email.observacion', Gral::getVars(1, 'buscador_cli_email_observacion'), Gral::getVars(1, 'buscador_cli_email_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_email');
		$criterio->setCriterios();		
}
?>

