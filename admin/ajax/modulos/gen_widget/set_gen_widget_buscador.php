<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenWidget::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_widget.id', Gral::getVars(1, 'buscador_gen_widget_id'), Gral::getVars(1, 'buscador_gen_widget_id_comparador'));
	$criterio->add('gen_widget.descripcion', Gral::getVars(1, 'buscador_gen_widget_descripcion'), Gral::getVars(1, 'buscador_gen_widget_descripcion_comparador'));
	$criterio->add('gen_widget.gen_widget_sector_id', Gral::getVars(1, 'buscador_gen_widget_gen_widget_sector_id'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_sector_id_comparador'));
	$criterio->add('gen_widget.gen_widget_modulo_id', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_id'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_id_comparador'));
	$criterio->add('gen_widget.ancho', Gral::getVars(1, 'buscador_gen_widget_ancho'), Gral::getVars(1, 'buscador_gen_widget_ancho_comparador'));
	$criterio->add('gen_widget.codigo', Gral::getVars(1, 'buscador_gen_widget_codigo'), Gral::getVars(1, 'buscador_gen_widget_codigo_comparador'));
	$criterio->add('gen_widget.observacion', Gral::getVars(1, 'buscador_gen_widget_observacion'), Gral::getVars(1, 'buscador_gen_widget_observacion_comparador'));
	$criterio->add('gen_widget.orden', Gral::getVars(1, 'buscador_gen_widget_orden'), Gral::getVars(1, 'buscador_gen_widget_orden_comparador'));
	$criterio->add('gen_widget.estado', Gral::getVars(1, 'buscador_gen_widget_estado'), Gral::getVars(1, 'buscador_gen_widget_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_widget_gen_widget_modulo', 'gen_widget_gen_widget_modulo.gen_widget_id', 'gen_widget.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_widget_modulo', 'gen_widget_modulo.id', 'gen_widget_gen_widget_modulo.gen_widget_modulo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_widget');
		$criterio->setCriterios();		
}
?>

