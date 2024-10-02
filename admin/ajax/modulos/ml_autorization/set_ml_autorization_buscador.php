<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlAutorization::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_autorization.id', Gral::getVars(1, 'buscador_ml_autorization_id'), Gral::getVars(1, 'buscador_ml_autorization_id_comparador'));
	$criterio->add('ml_autorization.descripcion', Gral::getVars(1, 'buscador_ml_autorization_descripcion'), Gral::getVars(1, 'buscador_ml_autorization_descripcion_comparador'));
	$criterio->add('ml_autorization.codigo', Gral::getVars(1, 'buscador_ml_autorization_codigo'), Gral::getVars(1, 'buscador_ml_autorization_codigo_comparador'));
	$criterio->add('ml_autorization.ml_access_token', Gral::getVars(1, 'buscador_ml_autorization_ml_access_token'), Gral::getVars(1, 'buscador_ml_autorization_ml_access_token_comparador'));
	$criterio->add('ml_autorization.ml_refresh_code', Gral::getVars(1, 'buscador_ml_autorization_ml_refresh_code'), Gral::getVars(1, 'buscador_ml_autorization_ml_refresh_code_comparador'));
	$criterio->add('ml_autorization.inicial', Gral::getVars(1, 'buscador_ml_autorization_inicial'), Gral::getVars(1, 'buscador_ml_autorization_inicial_comparador'));
	$criterio->add('ml_autorization.actual', Gral::getVars(1, 'buscador_ml_autorization_actual'), Gral::getVars(1, 'buscador_ml_autorization_actual_comparador'));
	$criterio->add('ml_autorization.observacion', Gral::getVars(1, 'buscador_ml_autorization_observacion'), Gral::getVars(1, 'buscador_ml_autorization_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_autorization');
		$criterio->setCriterios();		
}
?>

