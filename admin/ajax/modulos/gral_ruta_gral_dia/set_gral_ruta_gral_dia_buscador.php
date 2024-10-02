<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralRutaGralDia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_ruta_gral_dia.id', Gral::getVars(1, 'buscador_gral_ruta_gral_dia_id'), Gral::getVars(1, 'buscador_gral_ruta_gral_dia_id_comparador'));
	$criterio->add('gral_ruta_gral_dia.descripcion', Gral::getVars(1, 'buscador_gral_ruta_gral_dia_descripcion'), Gral::getVars(1, 'buscador_gral_ruta_gral_dia_descripcion_comparador'));
	$criterio->add('gral_ruta_gral_dia.gral_ruta_id', Gral::getVars(1, 'buscador_gral_ruta_gral_dia_gral_ruta_id'), Gral::getVars(1, 'buscador_gral_ruta_gral_dia_gral_ruta_id_comparador'));
	$criterio->add('gral_ruta_gral_dia.gral_dia_id', Gral::getVars(1, 'buscador_gral_ruta_gral_dia_gral_dia_id'), Gral::getVars(1, 'buscador_gral_ruta_gral_dia_gral_dia_id_comparador'));
	$criterio->add('gral_ruta_gral_dia.codigo', Gral::getVars(1, 'buscador_gral_ruta_gral_dia_codigo'), Gral::getVars(1, 'buscador_gral_ruta_gral_dia_codigo_comparador'));
	$criterio->add('gral_ruta_gral_dia.observacion', Gral::getVars(1, 'buscador_gral_ruta_gral_dia_observacion'), Gral::getVars(1, 'buscador_gral_ruta_gral_dia_observacion_comparador'));
	$criterio->add('gral_ruta_gral_dia.estado', Gral::getVars(1, 'buscador_gral_ruta_gral_dia_estado'), Gral::getVars(1, 'buscador_gral_ruta_gral_dia_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_ruta_gral_dia');
		$criterio->setCriterios();		
}
?>

