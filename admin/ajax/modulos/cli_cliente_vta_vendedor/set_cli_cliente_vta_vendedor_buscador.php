<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteVtaVendedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_vta_vendedor.id', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_id_comparador'));
	$criterio->add('cli_cliente_vta_vendedor.descripcion', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_descripcion_comparador'));
	$criterio->add('cli_cliente_vta_vendedor.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_vta_vendedor.vta_vendedor_id', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_vta_vendedor_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_vta_vendedor_id_comparador'));
	$criterio->add('cli_cliente_vta_vendedor.predeterminado', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_predeterminado'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_predeterminado_comparador'));
	$criterio->add('cli_cliente_vta_vendedor.codigo', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_codigo'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_codigo_comparador'));
	$criterio->add('cli_cliente_vta_vendedor.observacion', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_observacion'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_observacion_comparador'));
	$criterio->add('cli_cliente_vta_vendedor.estado', Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_estado'), Gral::getVars(1, 'buscador_cli_cliente_vta_vendedor_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_vta_vendedor');
		$criterio->setCriterios();		
}
?>

