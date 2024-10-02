<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenWidgetSector::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_widget_sector.id', Gral::getVars(1, 'buscador_gen_widget_sector_id'), Gral::getVars(1, 'buscador_gen_widget_sector_id_comparador'));
	$criterio->add('gen_widget_sector.descripcion', Gral::getVars(1, 'buscador_gen_widget_sector_descripcion'), Gral::getVars(1, 'buscador_gen_widget_sector_descripcion_comparador'));
	$criterio->add('gen_widget_sector.codigo', Gral::getVars(1, 'buscador_gen_widget_sector_codigo'), Gral::getVars(1, 'buscador_gen_widget_sector_codigo_comparador'));
	$criterio->add('gen_widget_sector.observacion', Gral::getVars(1, 'buscador_gen_widget_sector_observacion'), Gral::getVars(1, 'buscador_gen_widget_sector_observacion_comparador'));
	$criterio->add('gen_widget_sector.estado', Gral::getVars(1, 'buscador_gen_widget_sector_estado'), Gral::getVars(1, 'buscador_gen_widget_sector_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_widget_modulo', 'gen_widget_modulo.gen_widget_sector_id', 'gen_widget_sector.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_widget', 'gen_widget.gen_widget_sector_id', 'gen_widget_sector.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_widget_sector');
		$criterio->setCriterios();		
}
?>

