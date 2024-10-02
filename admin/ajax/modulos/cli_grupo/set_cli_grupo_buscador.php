<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliGrupo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_grupo.id', Gral::getVars(1, 'buscador_cli_grupo_id'), Gral::getVars(1, 'buscador_cli_grupo_id_comparador'));
	$criterio->add('cli_grupo.descripcion', Gral::getVars(1, 'buscador_cli_grupo_descripcion'), Gral::getVars(1, 'buscador_cli_grupo_descripcion_comparador'));
	$criterio->add('cli_grupo.documento', Gral::getVars(1, 'buscador_cli_grupo_documento'), Gral::getVars(1, 'buscador_cli_grupo_documento_comparador'));
	$criterio->add('cli_grupo.codigo', Gral::getVars(1, 'buscador_cli_grupo_codigo'), Gral::getVars(1, 'buscador_cli_grupo_codigo_comparador'));
	$criterio->add('cli_grupo.observacion', Gral::getVars(1, 'buscador_cli_grupo_observacion'), Gral::getVars(1, 'buscador_cli_grupo_observacion_comparador'));
	$criterio->add('cli_grupo.estado', Gral::getVars(1, 'buscador_cli_grupo_estado'), Gral::getVars(1, 'buscador_cli_grupo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.cli_grupo_id', 'cli_grupo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'cli_cliente.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_cliente.cli_subcategoria_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_grupo');
		$criterio->setCriterios();		
}
?>

