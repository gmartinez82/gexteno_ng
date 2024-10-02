<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralSucursalCliCliente::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_sucursal_cli_cliente.id', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_id'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_id_comparador'));
	$criterio->add('gral_sucursal_cli_cliente.descripcion', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_descripcion'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_descripcion_comparador'));
	$criterio->add('gral_sucursal_cli_cliente.gral_sucursal_id', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_gral_sucursal_id'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_gral_sucursal_id_comparador'));
	$criterio->add('gral_sucursal_cli_cliente.cli_cliente_id', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_cli_cliente_id'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_cli_cliente_id_comparador'));
	$criterio->add('gral_sucursal_cli_cliente.automatico', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_automatico'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_automatico_comparador'));
	$criterio->add('gral_sucursal_cli_cliente.codigo', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_codigo'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_codigo_comparador'));
	$criterio->add('gral_sucursal_cli_cliente.observacion', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_observacion'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_observacion_comparador'));
	$criterio->add('gral_sucursal_cli_cliente.estado', Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_estado'), Gral::getVars(1, 'buscador_gral_sucursal_cli_cliente_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_sucursal_cli_cliente');
		$criterio->setCriterios();		
}
?>

