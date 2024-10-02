<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenWidgetGenWidgetModulo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_widget_gen_widget_modulo.id', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_id'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_id_comparador'));
	$criterio->add('gen_widget_gen_widget_modulo.descripcion', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_descripcion'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_descripcion_comparador'));
	$criterio->add('gen_widget_gen_widget_modulo.gen_widget_id', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_gen_widget_id'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_gen_widget_id_comparador'));
	$criterio->add('gen_widget_gen_widget_modulo.gen_widget_modulo_id', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_gen_widget_modulo_id'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_gen_widget_modulo_id_comparador'));
	$criterio->add('gen_widget_gen_widget_modulo.codigo', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_codigo'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_codigo_comparador'));
	$criterio->add('gen_widget_gen_widget_modulo.observacion', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_observacion'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_observacion_comparador'));
	$criterio->add('gen_widget_gen_widget_modulo.estado', Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_estado'), Gral::getVars(1, 'buscador_gen_widget_gen_widget_modulo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_widget_gen_widget_modulo');
		$criterio->setCriterios();		
}
?>

