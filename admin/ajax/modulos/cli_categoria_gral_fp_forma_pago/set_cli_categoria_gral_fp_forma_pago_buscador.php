<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliCategoriaGralFpFormaPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_categoria_gral_fp_forma_pago.id', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_id_comparador'));
	$criterio->add('cli_categoria_gral_fp_forma_pago.descripcion', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_descripcion'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_descripcion_comparador'));
	$criterio->add('cli_categoria_gral_fp_forma_pago.cli_categoria_id', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_cli_categoria_id'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_cli_categoria_id_comparador'));
	$criterio->add('cli_categoria_gral_fp_forma_pago.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_gral_fp_forma_pago_id_comparador'));
	$criterio->add('cli_categoria_gral_fp_forma_pago.predeterminado', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_predeterminado'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_predeterminado_comparador'));
	$criterio->add('cli_categoria_gral_fp_forma_pago.codigo', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_codigo'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_codigo_comparador'));
	$criterio->add('cli_categoria_gral_fp_forma_pago.observacion', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_observacion'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_observacion_comparador'));
	$criterio->add('cli_categoria_gral_fp_forma_pago.estado', Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_estado'), Gral::getVars(1, 'buscador_cli_categoria_gral_fp_forma_pago_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_categoria_gral_fp_forma_pago');
		$criterio->setCriterios();		
}
?>

