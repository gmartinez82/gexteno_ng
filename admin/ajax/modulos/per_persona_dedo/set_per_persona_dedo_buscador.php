<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerPersonaDedo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_persona_dedo.id', Gral::getVars(1, 'buscador_per_persona_dedo_id'), Gral::getVars(1, 'buscador_per_persona_dedo_id_comparador'));
	$criterio->add('per_persona_dedo.descripcion', Gral::getVars(1, 'buscador_per_persona_dedo_descripcion'), Gral::getVars(1, 'buscador_per_persona_dedo_descripcion_comparador'));
	$criterio->add('per_persona_dedo.per_persona_id', Gral::getVars(1, 'buscador_per_persona_dedo_per_persona_id'), Gral::getVars(1, 'buscador_per_persona_dedo_per_persona_id_comparador'));
	$criterio->add('per_persona_dedo.codigo', Gral::getVars(1, 'buscador_per_persona_dedo_codigo'), Gral::getVars(1, 'buscador_per_persona_dedo_codigo_comparador'));
	$criterio->add('per_persona_dedo.dedo_numero', Gral::getVars(1, 'buscador_per_persona_dedo_dedo_numero'), Gral::getVars(1, 'buscador_per_persona_dedo_dedo_numero_comparador'));
	$criterio->add('per_persona_dedo.dedo_info', Gral::getVars(1, 'buscador_per_persona_dedo_dedo_info'), Gral::getVars(1, 'buscador_per_persona_dedo_dedo_info_comparador'));
	$criterio->add('per_persona_dedo.observacion', Gral::getVars(1, 'buscador_per_persona_dedo_observacion'), Gral::getVars(1, 'buscador_per_persona_dedo_observacion_comparador'));
	$criterio->add('per_persona_dedo.estado', Gral::getVars(1, 'buscador_per_persona_dedo_estado'), Gral::getVars(1, 'buscador_per_persona_dedo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_persona_dedo');
		$criterio->setCriterios();		
}
?>

