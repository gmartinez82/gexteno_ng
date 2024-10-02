<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoPresencia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_presencia.id', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_id'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_id_comparador'));
	$criterio->add('eku_param_tipo_presencia.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_descripcion_comparador'));
	$criterio->add('eku_param_tipo_presencia.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_codigo_comparador'));
	$criterio->add('eku_param_tipo_presencia.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_presencia.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_observacion_comparador'));
	$criterio->add('eku_param_tipo_presencia.estado', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_tipo_presencia_gral_escenario', 'eku_param_tipo_presencia_gral_escenario.eku_param_tipo_presencia_id', 'eku_param_tipo_presencia.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'eku_param_tipo_presencia_gral_escenario.gral_escenario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_presencia');
		$criterio->setCriterios();		
}
?>

