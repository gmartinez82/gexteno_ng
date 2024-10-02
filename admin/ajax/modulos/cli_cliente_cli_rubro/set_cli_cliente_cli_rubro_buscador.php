<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteCliRubro::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_cli_rubro.id', Gral::getVars(1, 'buscador_cli_cliente_cli_rubro_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_rubro_id_comparador'));
	$criterio->add('cli_cliente_cli_rubro.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_cli_rubro_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_rubro_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_cli_rubro.cli_rubro_id', Gral::getVars(1, 'buscador_cli_cliente_cli_rubro_cli_rubro_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_rubro_cli_rubro_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_cli_rubro');
		$criterio->setCriterios();		
}
?>

