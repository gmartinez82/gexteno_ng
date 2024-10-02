<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTransporteResponsableFlete::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_transporte_responsable_flete.id', Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_id'), Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_id_comparador'));
	$criterio->add('eku_param_transporte_responsable_flete.descripcion', Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_descripcion'), Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_descripcion_comparador'));
	$criterio->add('eku_param_transporte_responsable_flete.codigo', Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_codigo'), Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_codigo_comparador'));
	$criterio->add('eku_param_transporte_responsable_flete.codigo_eku', Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_codigo_eku_comparador'));
	$criterio->add('eku_param_transporte_responsable_flete.observacion', Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_observacion'), Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_observacion_comparador'));
	$criterio->add('eku_param_transporte_responsable_flete.estado', Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_estado'), Gral::getVars(1, 'buscador_eku_param_transporte_responsable_flete_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_transporte_responsable_flete');
		$criterio->setCriterios();		
}
?>

