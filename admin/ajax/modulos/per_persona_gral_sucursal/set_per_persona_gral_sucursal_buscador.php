<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerPersonaGralSucursal::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_persona_gral_sucursal.id', Gral::getVars(1, 'buscador_per_persona_gral_sucursal_id'), Gral::getVars(1, 'buscador_per_persona_gral_sucursal_id_comparador'));
	$criterio->add('per_persona_gral_sucursal.per_persona_id', Gral::getVars(1, 'buscador_per_persona_gral_sucursal_per_persona_id'), Gral::getVars(1, 'buscador_per_persona_gral_sucursal_per_persona_id_comparador'));
	$criterio->add('per_persona_gral_sucursal.gral_sucursal_id', Gral::getVars(1, 'buscador_per_persona_gral_sucursal_gral_sucursal_id'), Gral::getVars(1, 'buscador_per_persona_gral_sucursal_gral_sucursal_id_comparador'));
	$criterio->add('per_persona_gral_sucursal.codigo', Gral::getVars(1, 'buscador_per_persona_gral_sucursal_codigo'), Gral::getVars(1, 'buscador_per_persona_gral_sucursal_codigo_comparador'));
	$criterio->add('per_persona_gral_sucursal.estado', Gral::getVars(1, 'buscador_per_persona_gral_sucursal_estado'), Gral::getVars(1, 'buscador_per_persona_gral_sucursal_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_persona_gral_sucursal');
		$criterio->setCriterios();		
}
?>

