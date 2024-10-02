<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteVtaComprador::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_vta_comprador.id', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_id_comparador'));
	$criterio->add('cli_cliente_vta_comprador.descripcion', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_descripcion_comparador'));
	$criterio->add('cli_cliente_vta_comprador.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_vta_comprador.vta_comprador_id', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_vta_comprador_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_vta_comprador_id_comparador'));
	$criterio->add('cli_cliente_vta_comprador.predeterminado', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_predeterminado'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_predeterminado_comparador'));
	$criterio->add('cli_cliente_vta_comprador.codigo', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_codigo'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_codigo_comparador'));
	$criterio->add('cli_cliente_vta_comprador.observacion', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_observacion'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_observacion_comparador'));
	$criterio->add('cli_cliente_vta_comprador.estado', Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_estado'), Gral::getVars(1, 'buscador_cli_cliente_vta_comprador_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_vta_comprador');
		$criterio->setCriterios();		
}
?>

