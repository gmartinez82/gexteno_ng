<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(SldSlider::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('sld_slider.id', Gral::getVars(1, 'buscador_sld_slider_id'), Gral::getVars(1, 'buscador_sld_slider_id_comparador'));
	$criterio->add('sld_slider.descripcion', Gral::getVars(1, 'buscador_sld_slider_descripcion'), Gral::getVars(1, 'buscador_sld_slider_descripcion_comparador'));
	$criterio->add('sld_slider.ins_insumo_id', Gral::getVars(1, 'buscador_sld_slider_ins_insumo_id'), Gral::getVars(1, 'buscador_sld_slider_ins_insumo_id_comparador'));
	$criterio->add('sld_slider.url', Gral::getVars(1, 'buscador_sld_slider_url'), Gral::getVars(1, 'buscador_sld_slider_url_comparador'));
	$criterio->add('sld_slider.codigo', Gral::getVars(1, 'buscador_sld_slider_codigo'), Gral::getVars(1, 'buscador_sld_slider_codigo_comparador'));
	$criterio->add('sld_slider.observacion', Gral::getVars(1, 'buscador_sld_slider_observacion'), Gral::getVars(1, 'buscador_sld_slider_observacion_comparador'));
	$criterio->add('sld_slider.estado', Gral::getVars(1, 'buscador_sld_slider_estado'), Gral::getVars(1, 'buscador_sld_slider_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('sld_slider_imagen', 'sld_slider_imagen.sld_slider_id', 'sld_slider.id', 'LEFT JOIN');
	$criterio->addRealJoin('sld_tipo_imagen', 'sld_tipo_imagen.id', 'sld_slider_imagen.sld_tipo_imagen_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('sld_slider');
		$criterio->setCriterios();		
}
?>

