<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NotNoticia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('not_noticia.id', Gral::getVars(1, 'buscador_not_noticia_id'), Gral::getVars(1, 'buscador_not_noticia_id_comparador'));
	$criterio->add('not_noticia.descripcion', Gral::getVars(1, 'buscador_not_noticia_descripcion'), Gral::getVars(1, 'buscador_not_noticia_descripcion_comparador'));
	$criterio->add('not_noticia.not_categoria_id', Gral::getVars(1, 'buscador_not_noticia_not_categoria_id'), Gral::getVars(1, 'buscador_not_noticia_not_categoria_id_comparador'));
	$criterio->add('not_noticia.codigo', Gral::getVars(1, 'buscador_not_noticia_codigo'), Gral::getVars(1, 'buscador_not_noticia_codigo_comparador'));
	$criterio->add('not_noticia.copete', Gral::getVars(1, 'buscador_not_noticia_copete'), Gral::getVars(1, 'buscador_not_noticia_copete_comparador'));
	$criterio->add('not_noticia.cuerpo', Gral::getVars(1, 'buscador_not_noticia_cuerpo'), Gral::getVars(1, 'buscador_not_noticia_cuerpo_comparador'));
	$criterio->add('not_noticia.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_not_noticia_fecha')), Gral::getVars(1, 'buscador_not_noticia_fecha_comparador'));
	$criterio->add('not_noticia.destacado', Gral::getVars(1, 'buscador_not_noticia_destacado'), Gral::getVars(1, 'buscador_not_noticia_destacado_comparador'));
	$criterio->add('not_noticia.observacion', Gral::getVars(1, 'buscador_not_noticia_observacion'), Gral::getVars(1, 'buscador_not_noticia_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('not_noticia_imagen', 'not_noticia_imagen.not_noticia_id', 'not_noticia.id', 'LEFT JOIN');
	$criterio->addRealJoin('not_tipo_imagen', 'not_tipo_imagen.id', 'not_noticia_imagen.not_tipo_imagen_id', 'LEFT JOIN');
	$criterio->addRealJoin('not_noticia_archivo', 'not_noticia_archivo.not_noticia_id', 'not_noticia.id', 'LEFT JOIN');
	$criterio->addRealJoin('not_tipo_archivo', 'not_tipo_archivo.id', 'not_noticia_archivo.not_tipo_archivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('not_video', 'not_video.not_noticia_id', 'not_noticia.id', 'LEFT JOIN');
	$criterio->addRealJoin('not_tipo_video', 'not_tipo_video.id', 'not_video.not_tipo_video_id', 'LEFT JOIN');
	$criterio->addRealJoin('not_relacionada', 'not_relacionada.not_noticia_id', 'not_noticia.id', 'LEFT JOIN');
	$criterio->addRealJoin('not_noticia_leida', 'not_noticia_leida.not_noticia_id', 'not_noticia.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('not_noticia');
		$criterio->setCriterios();		
}
?>

