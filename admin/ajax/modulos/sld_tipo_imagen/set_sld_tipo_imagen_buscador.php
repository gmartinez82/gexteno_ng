<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(SldTipoImagen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('sld_tipo_imagen.id', Gral::getVars(1, 'buscador_sld_tipo_imagen_id'), Gral::getVars(1, 'buscador_sld_tipo_imagen_id_comparador'));
	$criterio->add('sld_tipo_imagen.descripcion', Gral::getVars(1, 'buscador_sld_tipo_imagen_descripcion'), Gral::getVars(1, 'buscador_sld_tipo_imagen_descripcion_comparador'));
	$criterio->add('sld_tipo_imagen.codigo', Gral::getVars(1, 'buscador_sld_tipo_imagen_codigo'), Gral::getVars(1, 'buscador_sld_tipo_imagen_codigo_comparador'));
	$criterio->add('sld_tipo_imagen.observacion', Gral::getVars(1, 'buscador_sld_tipo_imagen_observacion'), Gral::getVars(1, 'buscador_sld_tipo_imagen_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('sld_slider_imagen', 'sld_slider_imagen.sld_tipo_imagen_id', 'sld_tipo_imagen.id', 'LEFT JOIN');
	$criterio->addRealJoin('sld_slider', 'sld_slider.id', 'sld_slider_imagen.sld_slider_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('sld_tipo_imagen');
		$criterio->setCriterios();		
}
?>

