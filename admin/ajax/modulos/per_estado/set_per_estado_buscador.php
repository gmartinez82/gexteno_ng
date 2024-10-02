<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_estado.id', Gral::getVars(1, 'buscador_per_estado_id'), Gral::getVars(1, 'buscador_per_estado_id_comparador'));
	$criterio->add('per_estado.per_persona_id', Gral::getVars(1, 'buscador_per_estado_per_persona_id'), Gral::getVars(1, 'buscador_per_estado_per_persona_id_comparador'));
	$criterio->add('per_estado.per_tipo_estado_id', Gral::getVars(1, 'buscador_per_estado_per_tipo_estado_id'), Gral::getVars(1, 'buscador_per_estado_per_tipo_estado_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_estado');
		$criterio->setCriterios();		
}
?>

