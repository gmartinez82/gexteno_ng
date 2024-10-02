<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteGralFpAgrupacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_gral_fp_agrupacion.id', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_id_comparador'));
	$criterio->add('cli_cliente_gral_fp_agrupacion.descripcion', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_descripcion_comparador'));
	$criterio->add('cli_cliente_gral_fp_agrupacion.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_gral_fp_agrupacion.gral_fp_agrupacion_id', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_gral_fp_agrupacion_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_gral_fp_agrupacion_id_comparador'));
	$criterio->add('cli_cliente_gral_fp_agrupacion.predeterminado', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_predeterminado'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_predeterminado_comparador'));
	$criterio->add('cli_cliente_gral_fp_agrupacion.codigo', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_codigo'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_codigo_comparador'));
	$criterio->add('cli_cliente_gral_fp_agrupacion.observacion', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_observacion'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_observacion_comparador'));
	$criterio->add('cli_cliente_gral_fp_agrupacion.estado', Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_estado'), Gral::getVars(1, 'buscador_cli_cliente_gral_fp_agrupacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_gral_fp_agrupacion');
		$criterio->setCriterios();		
}
?>

