<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteVtaPreventista::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_vta_preventista.id', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_id_comparador'));
	$criterio->add('cli_cliente_vta_preventista.descripcion', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_descripcion_comparador'));
	$criterio->add('cli_cliente_vta_preventista.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_vta_preventista.vta_preventista_id', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_vta_preventista_id'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_vta_preventista_id_comparador'));
	$criterio->add('cli_cliente_vta_preventista.predeterminado', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_predeterminado'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_predeterminado_comparador'));
	$criterio->add('cli_cliente_vta_preventista.codigo', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_codigo'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_codigo_comparador'));
	$criterio->add('cli_cliente_vta_preventista.observacion', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_observacion'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_observacion_comparador'));
	$criterio->add('cli_cliente_vta_preventista.estado', Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_estado'), Gral::getVars(1, 'buscador_cli_cliente_vta_preventista_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_vta_preventista');
		$criterio->setCriterios();		
}
?>

