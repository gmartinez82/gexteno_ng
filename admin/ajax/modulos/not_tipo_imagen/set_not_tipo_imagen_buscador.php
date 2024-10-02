<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NotTipoImagen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('not_tipo_imagen.id', Gral::getVars(1, 'buscador_not_tipo_imagen_id'), Gral::getVars(1, 'buscador_not_tipo_imagen_id_comparador'));
	$criterio->add('not_tipo_imagen.descripcion', Gral::getVars(1, 'buscador_not_tipo_imagen_descripcion'), Gral::getVars(1, 'buscador_not_tipo_imagen_descripcion_comparador'));
	$criterio->add('not_tipo_imagen.codigo', Gral::getVars(1, 'buscador_not_tipo_imagen_codigo'), Gral::getVars(1, 'buscador_not_tipo_imagen_codigo_comparador'));
	$criterio->add('not_tipo_imagen.observacion', Gral::getVars(1, 'buscador_not_tipo_imagen_observacion'), Gral::getVars(1, 'buscador_not_tipo_imagen_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('not_noticia_imagen', 'not_noticia_imagen.not_tipo_imagen_id', 'not_tipo_imagen.id', 'LEFT JOIN');
	$criterio->addRealJoin('not_noticia', 'not_noticia.id', 'not_noticia_imagen.not_noticia_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('not_tipo_imagen');
		$criterio->setCriterios();		
}
?>

