<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliCategoria::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_categoria.id', Gral::getVars(1, 'buscador_cli_categoria_id'), Gral::getVars(1, 'buscador_cli_categoria_id_comparador'));
	$criterio->add('cli_categoria.descripcion', Gral::getVars(1, 'buscador_cli_categoria_descripcion'), Gral::getVars(1, 'buscador_cli_categoria_descripcion_comparador'));
	$criterio->add('cli_categoria.codigo', Gral::getVars(1, 'buscador_cli_categoria_codigo'), Gral::getVars(1, 'buscador_cli_categoria_codigo_comparador'));
	$criterio->add('cli_categoria.observacion', Gral::getVars(1, 'buscador_cli_categoria_observacion'), Gral::getVars(1, 'buscador_cli_categoria_observacion_comparador'));
	$criterio->add('cli_categoria.estado', Gral::getVars(1, 'buscador_cli_categoria_estado'), Gral::getVars(1, 'buscador_cli_categoria_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.cli_categoria_id', 'cli_categoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'cli_cliente.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria_ins_tipo_lista_precio', 'cli_categoria_ins_tipo_lista_precio.cli_categoria_id', 'cli_categoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria_vta_descuento_financiero', 'cli_categoria_vta_descuento_financiero.cli_categoria_id', 'cli_categoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'cli_categoria_vta_descuento_financiero.vta_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria_gral_fp_forma_pago', 'cli_categoria_gral_fp_forma_pago.cli_categoria_id', 'cli_categoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'cli_categoria_gral_fp_forma_pago.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_categoria');
		$criterio->setCriterios();		
}
?>

