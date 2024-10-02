<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NotVideo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('not_video.id', Gral::getVars(1, 'buscador_not_video_id'), Gral::getVars(1, 'buscador_not_video_id_comparador'));
	$criterio->add('not_video.descripcion', Gral::getVars(1, 'buscador_not_video_descripcion'), Gral::getVars(1, 'buscador_not_video_descripcion_comparador'));
	$criterio->add('not_video.not_noticia_id', Gral::getVars(1, 'buscador_not_video_not_noticia_id'), Gral::getVars(1, 'buscador_not_video_not_noticia_id_comparador'));
	$criterio->add('not_video.not_tipo_video_id', Gral::getVars(1, 'buscador_not_video_not_tipo_video_id'), Gral::getVars(1, 'buscador_not_video_not_tipo_video_id_comparador'));
	$criterio->add('not_video.codigo', Gral::getVars(1, 'buscador_not_video_codigo'), Gral::getVars(1, 'buscador_not_video_codigo_comparador'));
	$criterio->add('not_video.observacion', Gral::getVars(1, 'buscador_not_video_observacion'), Gral::getVars(1, 'buscador_not_video_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('not_video');
		$criterio->setCriterios();		
}
?>

