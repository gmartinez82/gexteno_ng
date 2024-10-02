<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamCondicionAnticipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_condicion_anticipo.id', Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_id'), Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_id_comparador'));
	$criterio->add('eku_param_condicion_anticipo.descripcion', Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_descripcion'), Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_descripcion_comparador'));
	$criterio->add('eku_param_condicion_anticipo.codigo', Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_codigo'), Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_codigo_comparador'));
	$criterio->add('eku_param_condicion_anticipo.codigo_eku', Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_codigo_eku_comparador'));
	$criterio->add('eku_param_condicion_anticipo.observacion', Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_observacion'), Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_observacion_comparador'));
	$criterio->add('eku_param_condicion_anticipo.estado', Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_estado'), Gral::getVars(1, 'buscador_eku_param_condicion_anticipo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_condicion_anticipo');
		$criterio->setCriterios();		
}
?>

