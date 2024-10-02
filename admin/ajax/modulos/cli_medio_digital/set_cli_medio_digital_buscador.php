<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliMedioDigital::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_medio_digital.id', Gral::getVars(1, 'buscador_cli_medio_digital_id'), Gral::getVars(1, 'buscador_cli_medio_digital_id_comparador'));
	$criterio->add('cli_medio_digital.descripcion', Gral::getVars(1, 'buscador_cli_medio_digital_descripcion'), Gral::getVars(1, 'buscador_cli_medio_digital_descripcion_comparador'));
	$criterio->add('cli_medio_digital.cli_cliente_id', Gral::getVars(1, 'buscador_cli_medio_digital_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_medio_digital_cli_cliente_id_comparador'));
	$criterio->add('cli_medio_digital.cli_tipo_medio_digital_id', Gral::getVars(1, 'buscador_cli_medio_digital_cli_tipo_medio_digital_id'), Gral::getVars(1, 'buscador_cli_medio_digital_cli_tipo_medio_digital_id_comparador'));
	$criterio->add('cli_medio_digital.codigo', Gral::getVars(1, 'buscador_cli_medio_digital_codigo'), Gral::getVars(1, 'buscador_cli_medio_digital_codigo_comparador'));
	$criterio->add('cli_medio_digital.observacion', Gral::getVars(1, 'buscador_cli_medio_digital_observacion'), Gral::getVars(1, 'buscador_cli_medio_digital_observacion_comparador'));
	$criterio->add('cli_medio_digital.estado', Gral::getVars(1, 'buscador_cli_medio_digital_estado'), Gral::getVars(1, 'buscador_cli_medio_digital_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_medio_digital');
		$criterio->setCriterios();		
}
?>

