<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliSubcategoriaVtaDescuentoFinanciero::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_subcategoria_vta_descuento_financiero.id', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_id'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_id_comparador'));
	$criterio->add('cli_subcategoria_vta_descuento_financiero.descripcion', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_descripcion'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_descripcion_comparador'));
	$criterio->add('cli_subcategoria_vta_descuento_financiero.cli_subcategoria_id', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_cli_subcategoria_id'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_cli_subcategoria_id_comparador'));
	$criterio->add('cli_subcategoria_vta_descuento_financiero.vta_descuento_financiero_id', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_vta_descuento_financiero_id'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_vta_descuento_financiero_id_comparador'));
	$criterio->add('cli_subcategoria_vta_descuento_financiero.predeterminado', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_predeterminado'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_predeterminado_comparador'));
	$criterio->add('cli_subcategoria_vta_descuento_financiero.codigo', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_codigo'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_codigo_comparador'));
	$criterio->add('cli_subcategoria_vta_descuento_financiero.observacion', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_observacion'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_observacion_comparador'));
	$criterio->add('cli_subcategoria_vta_descuento_financiero.estado', Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_estado'), Gral::getVars(1, 'buscador_cli_subcategoria_vta_descuento_financiero_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_subcategoria_vta_descuento_financiero');
		$criterio->setCriterios();		
}
?>

