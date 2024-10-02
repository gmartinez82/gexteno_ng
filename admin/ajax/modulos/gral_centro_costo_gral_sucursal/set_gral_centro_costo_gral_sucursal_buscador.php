<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCentroCostoGralSucursal::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_centro_costo_gral_sucursal.id', Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_id'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_id_comparador'));
	$criterio->add('gral_centro_costo_gral_sucursal.descripcion', Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_descripcion'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_descripcion_comparador'));
	$criterio->add('gral_centro_costo_gral_sucursal.gral_centro_costo_id', Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_gral_centro_costo_id'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_gral_centro_costo_id_comparador'));
	$criterio->add('gral_centro_costo_gral_sucursal.gral_sucursal_id', Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_gral_sucursal_id'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_gral_sucursal_id_comparador'));
	$criterio->add('gral_centro_costo_gral_sucursal.codigo', Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_codigo'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_codigo_comparador'));
	$criterio->add('gral_centro_costo_gral_sucursal.observacion', Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_observacion'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_observacion_comparador'));
	$criterio->add('gral_centro_costo_gral_sucursal.estado', Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_estado'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_sucursal_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_centro_costo_gral_sucursal');
		$criterio->setCriterios();		
}
?>

