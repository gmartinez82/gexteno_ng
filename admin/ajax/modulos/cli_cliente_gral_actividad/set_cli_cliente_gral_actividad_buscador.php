<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteGralActividad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_gral_actividad.id', Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_id_comparador'));
	$criterio->add('cli_cliente_gral_actividad.descripcion', Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_descripcion_comparador'));
	$criterio->add('cli_cliente_gral_actividad.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_gral_actividad.gral_actividad_id', Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_gral_actividad_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_gral_actividad_id_comparador'));
	$criterio->add('cli_cliente_gral_actividad.codigo', Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_codigo'), Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_codigo_comparador'));
	$criterio->add('cli_cliente_gral_actividad.observacion', Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_observacion'), Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_observacion_comparador'));
	$criterio->add('cli_cliente_gral_actividad.estado', Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_estado'), Gral::getVars(1, 'buscador_cli_cliente_gral_actividad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_gral_actividad');
		$criterio->setCriterios();		
}
?>

