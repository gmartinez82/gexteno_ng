<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamCaracteristicasCarga::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_caracteristicas_carga.id', Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_id'), Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_id_comparador'));
	$criterio->add('eku_param_caracteristicas_carga.descripcion', Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_descripcion'), Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_descripcion_comparador'));
	$criterio->add('eku_param_caracteristicas_carga.codigo', Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_codigo'), Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_codigo_comparador'));
	$criterio->add('eku_param_caracteristicas_carga.codigo_eku', Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_codigo_eku_comparador'));
	$criterio->add('eku_param_caracteristicas_carga.observacion', Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_observacion'), Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_observacion_comparador'));
	$criterio->add('eku_param_caracteristicas_carga.estado', Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_estado'), Gral::getVars(1, 'buscador_eku_param_caracteristicas_carga_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_caracteristicas_carga');
		$criterio->setCriterios();		
}
?>

