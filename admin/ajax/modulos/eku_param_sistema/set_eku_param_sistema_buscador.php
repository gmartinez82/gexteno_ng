<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamSistema::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_sistema.id', Gral::getVars(1, 'buscador_eku_param_sistema_id'), Gral::getVars(1, 'buscador_eku_param_sistema_id_comparador'));
	$criterio->add('eku_param_sistema.descripcion', Gral::getVars(1, 'buscador_eku_param_sistema_descripcion'), Gral::getVars(1, 'buscador_eku_param_sistema_descripcion_comparador'));
	$criterio->add('eku_param_sistema.codigo', Gral::getVars(1, 'buscador_eku_param_sistema_codigo'), Gral::getVars(1, 'buscador_eku_param_sistema_codigo_comparador'));
	$criterio->add('eku_param_sistema.codigo_eku', Gral::getVars(1, 'buscador_eku_param_sistema_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_sistema_codigo_eku_comparador'));
	$criterio->add('eku_param_sistema.observacion', Gral::getVars(1, 'buscador_eku_param_sistema_observacion'), Gral::getVars(1, 'buscador_eku_param_sistema_observacion_comparador'));
	$criterio->add('eku_param_sistema.estado', Gral::getVars(1, 'buscador_eku_param_sistema_estado'), Gral::getVars(1, 'buscador_eku_param_sistema_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_sistema');
		$criterio->setCriterios();		
}
?>

