<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralFeriado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_feriado.id', Gral::getVars(1, 'buscador_gral_feriado_id'), Gral::getVars(1, 'buscador_gral_feriado_id_comparador'));
	$criterio->add('gral_feriado.descripcion', Gral::getVars(1, 'buscador_gral_feriado_descripcion'), Gral::getVars(1, 'buscador_gral_feriado_descripcion_comparador'));
	$criterio->add('gral_feriado.codigo', Gral::getVars(1, 'buscador_gral_feriado_codigo'), Gral::getVars(1, 'buscador_gral_feriado_codigo_comparador'));
	$criterio->add('gral_feriado.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_gral_feriado_fecha')), Gral::getVars(1, 'buscador_gral_feriado_fecha_comparador'));
	$criterio->add('gral_feriado.observacion', Gral::getVars(1, 'buscador_gral_feriado_observacion'), Gral::getVars(1, 'buscador_gral_feriado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_feriado');
		$criterio->setCriterios();		
}
?>

