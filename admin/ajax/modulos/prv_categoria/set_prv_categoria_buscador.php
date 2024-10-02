<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvCategoria::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_categoria.id', Gral::getVars(1, 'buscador_prv_categoria_id'), Gral::getVars(1, 'buscador_prv_categoria_id_comparador'));
	$criterio->add('prv_categoria.descripcion', Gral::getVars(1, 'buscador_prv_categoria_descripcion'), Gral::getVars(1, 'buscador_prv_categoria_descripcion_comparador'));
	$criterio->add('prv_categoria.codigo', Gral::getVars(1, 'buscador_prv_categoria_codigo'), Gral::getVars(1, 'buscador_prv_categoria_codigo_comparador'));
	$criterio->add('prv_categoria.observacion', Gral::getVars(1, 'buscador_prv_categoria_observacion'), Gral::getVars(1, 'buscador_prv_categoria_observacion_comparador'));
	$criterio->add('prv_categoria.estado', Gral::getVars(1, 'buscador_prv_categoria_estado'), Gral::getVars(1, 'buscador_prv_categoria_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.prv_categoria_id', 'prv_categoria.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'prv_proveedor.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'prv_proveedor.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'prv_proveedor.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_grupo', 'prv_grupo.id', 'prv_proveedor.prv_grupo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_categoria');
		$criterio->setCriterios();		
}
?>

