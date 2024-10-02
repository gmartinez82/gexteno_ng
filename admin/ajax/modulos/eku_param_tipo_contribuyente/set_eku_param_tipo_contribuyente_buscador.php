<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoContribuyente::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_contribuyente.id', Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_id'), Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_id_comparador'));
	$criterio->add('eku_param_tipo_contribuyente.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_descripcion_comparador'));
	$criterio->add('eku_param_tipo_contribuyente.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_codigo_comparador'));
	$criterio->add('eku_param_tipo_contribuyente.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_contribuyente.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_observacion_comparador'));
	$criterio->add('eku_param_tipo_contribuyente.estado', Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_contribuyente_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_tipo_contribuyente_gral_tipo_personeria', 'eku_param_tipo_contribuyente_gral_tipo_personeria.eku_param_tipo_contribuyente_id', 'eku_param_tipo_contribuyente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'eku_param_tipo_contribuyente_gral_tipo_personeria.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_contribuyente');
		$criterio->setCriterios();		
}
?>

