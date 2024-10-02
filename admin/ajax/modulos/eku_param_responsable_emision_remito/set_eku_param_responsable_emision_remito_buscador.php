<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamResponsableEmisionRemito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_responsable_emision_remito.id', Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_id'), Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_id_comparador'));
	$criterio->add('eku_param_responsable_emision_remito.descripcion', Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_descripcion'), Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_descripcion_comparador'));
	$criterio->add('eku_param_responsable_emision_remito.codigo', Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_codigo'), Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_codigo_comparador'));
	$criterio->add('eku_param_responsable_emision_remito.codigo_eku', Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_codigo_eku_comparador'));
	$criterio->add('eku_param_responsable_emision_remito.observacion', Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_observacion'), Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_observacion_comparador'));
	$criterio->add('eku_param_responsable_emision_remito.estado', Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_estado'), Gral::getVars(1, 'buscador_eku_param_responsable_emision_remito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_responsable_emision_remito');
		$criterio->setCriterios();		
}
?>

