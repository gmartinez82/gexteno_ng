<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteInfoSifen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_info_sifen.id', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_id'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_id_comparador'));
	$criterio->add('cli_cliente_info_sifen.descripcion', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_descripcion_comparador'));
	$criterio->add('cli_cliente_info_sifen.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_info_sifen.codigo', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_codigo'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_codigo_comparador'));
	$criterio->add('cli_cliente_info_sifen.sifen_dcodres', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_dcodres'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_dcodres_comparador'));
	$criterio->add('cli_cliente_info_sifen.sifen_dmsgres', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_dmsgres'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_dmsgres_comparador'));
	$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_druccons', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_druccons'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_druccons_comparador'));
	$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_drazcons', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_drazcons'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_drazcons_comparador'));
	$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_dcodestcons', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_dcodestcons'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_dcodestcons_comparador'));
	$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_ddesestcons', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_ddesestcons'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_ddesestcons_comparador'));
	$criterio->add('cli_cliente_info_sifen.sifen_xcontruc_drucfactelec', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_drucfactelec'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_sifen_xcontruc_drucfactelec_comparador'));
	$criterio->add('cli_cliente_info_sifen.observacion', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_observacion'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_observacion_comparador'));
	$criterio->add('cli_cliente_info_sifen.estado', Gral::getVars(1, 'buscador_cli_cliente_info_sifen_estado'), Gral::getVars(1, 'buscador_cli_cliente_info_sifen_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_info_sifen');
		$criterio->setCriterios();		
}
?>

