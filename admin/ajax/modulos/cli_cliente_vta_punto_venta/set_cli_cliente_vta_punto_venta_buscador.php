<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteVtaPuntoVenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_vta_punto_venta.id', Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_id_comparador'));
	$criterio->add('cli_cliente_vta_punto_venta.descripcion', Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_descripcion_comparador'));
	$criterio->add('cli_cliente_vta_punto_venta.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_vta_punto_venta.vta_punto_venta_id', Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_vta_punto_venta_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_vta_punto_venta_id_comparador'));
	$criterio->add('cli_cliente_vta_punto_venta.codigo', Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_codigo'), Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_codigo_comparador'));
	$criterio->add('cli_cliente_vta_punto_venta.observacion', Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_observacion'), Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_observacion_comparador'));
	$criterio->add('cli_cliente_vta_punto_venta.estado', Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_estado'), Gral::getVars(1, 'buscador_cli_cliente_vta_punto_venta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_vta_punto_venta');
		$criterio->setCriterios();		
}
?>

