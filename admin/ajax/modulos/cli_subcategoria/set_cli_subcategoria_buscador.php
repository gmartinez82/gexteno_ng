<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliSubcategoria::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_subcategoria.id', Gral::getVars(1, 'buscador_cli_subcategoria_id'), Gral::getVars(1, 'buscador_cli_subcategoria_id_comparador'));
	$criterio->add('cli_subcategoria.descripcion', Gral::getVars(1, 'buscador_cli_subcategoria_descripcion'), Gral::getVars(1, 'buscador_cli_subcategoria_descripcion_comparador'));
	$criterio->add('cli_subcategoria.cli_categoria_id', Gral::getVars(1, 'buscador_cli_subcategoria_cli_categoria_id'), Gral::getVars(1, 'buscador_cli_subcategoria_cli_categoria_id_comparador'));
	$criterio->add('cli_subcategoria.limite_ctacte_importe', Gral::getVars(1, 'buscador_cli_subcategoria_limite_ctacte_importe'), Gral::getVars(1, 'buscador_cli_subcategoria_limite_ctacte_importe_comparador'));
	$criterio->add('cli_subcategoria.limite_ctacte_dias', Gral::getVars(1, 'buscador_cli_subcategoria_limite_ctacte_dias'), Gral::getVars(1, 'buscador_cli_subcategoria_limite_ctacte_dias_comparador'));
	$criterio->add('cli_subcategoria.codigo', Gral::getVars(1, 'buscador_cli_subcategoria_codigo'), Gral::getVars(1, 'buscador_cli_subcategoria_codigo_comparador'));
	$criterio->add('cli_subcategoria.observacion', Gral::getVars(1, 'buscador_cli_subcategoria_observacion'), Gral::getVars(1, 'buscador_cli_subcategoria_observacion_comparador'));
	$criterio->add('cli_subcategoria.estado', Gral::getVars(1, 'buscador_cli_subcategoria_estado'), Gral::getVars(1, 'buscador_cli_subcategoria_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.cli_subcategoria_id', 'cli_subcategoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'cli_cliente.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria_ins_tipo_lista_precio', 'cli_subcategoria_ins_tipo_lista_precio.cli_subcategoria_id', 'cli_subcategoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'cli_subcategoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria_vta_descuento_financiero', 'cli_subcategoria_vta_descuento_financiero.cli_subcategoria_id', 'cli_subcategoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'cli_subcategoria_vta_descuento_financiero.vta_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria_gral_fp_forma_pago', 'cli_subcategoria_gral_fp_forma_pago.cli_subcategoria_id', 'cli_subcategoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'cli_subcategoria_gral_fp_forma_pago.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_subcategoria');
		$criterio->setCriterios();		
}
?>

