<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NotTipoVideo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('not_tipo_video.id', Gral::getVars(1, 'buscador_not_tipo_video_id'), Gral::getVars(1, 'buscador_not_tipo_video_id_comparador'));
	$criterio->add('not_tipo_video.descripcion', Gral::getVars(1, 'buscador_not_tipo_video_descripcion'), Gral::getVars(1, 'buscador_not_tipo_video_descripcion_comparador'));
	$criterio->add('not_tipo_video.codigo', Gral::getVars(1, 'buscador_not_tipo_video_codigo'), Gral::getVars(1, 'buscador_not_tipo_video_codigo_comparador'));
	$criterio->add('not_tipo_video.observacion', Gral::getVars(1, 'buscador_not_tipo_video_observacion'), Gral::getVars(1, 'buscador_not_tipo_video_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('not_video', 'not_video.not_tipo_video_id', 'not_tipo_video.id', 'LEFT JOIN');
	$criterio->addRealJoin('not_noticia', 'not_noticia.id', 'not_video.not_noticia_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('not_tipo_video');
		$criterio->setCriterios();		
}
?>

