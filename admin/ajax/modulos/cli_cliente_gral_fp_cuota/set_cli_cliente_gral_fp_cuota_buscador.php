<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteGralFpCuota::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_gral_fp_cuota.id', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_id_comparador'));
	$criterio->add('cli_cliente_gral_fp_cuota.descripcion', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_descripcion_comparador'));
	$criterio->add('cli_cliente_gral_fp_cuota.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_gral_fp_cuota.gral_fp_cuota_id', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_gral_fp_cuota_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_gral_fp_cuota_id_comparador'));
	$criterio->add('cli_cliente_gral_fp_cuota.predeterminado', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_predeterminado'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_predeterminado_comparador'));
	$criterio->add('cli_cliente_gral_fp_cuota.codigo', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_codigo'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_codigo_comparador'));
	$criterio->add('cli_cliente_gral_fp_cuota.observacion', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_observacion'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_observacion_comparador'));
	$criterio->add('cli_cliente_gral_fp_cuota.estado', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_estado'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_cuota_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_gral_fp_cuota');
		$criterio->setCriterios();		
}
?>

