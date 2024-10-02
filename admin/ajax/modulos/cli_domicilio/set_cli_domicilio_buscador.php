<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliDomicilio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_domicilio.id', Gral::getVars(1, 'buscador_cli_domicilio_id'), Gral::getVars(1, 'buscador_cli_domicilio_id_comparador'));
	$criterio->add('cli_domicilio.cli_cliente_id', Gral::getVars(1, 'buscador_cli_domicilio_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_domicilio_cli_cliente_id_comparador'));
	$criterio->add('cli_domicilio.descripcion', Gral::getVars(1, 'buscador_cli_domicilio_descripcion'), Gral::getVars(1, 'buscador_cli_domicilio_descripcion_comparador'));
	$criterio->add('cli_domicilio.codigo', Gral::getVars(1, 'buscador_cli_domicilio_codigo'), Gral::getVars(1, 'buscador_cli_domicilio_codigo_comparador'));
	$criterio->add('cli_domicilio.observacion', Gral::getVars(1, 'buscador_cli_domicilio_observacion'), Gral::getVars(1, 'buscador_cli_domicilio_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_domicilio');
		$criterio->setCriterios();		
}
?>

