<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VehMarca::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('veh_marca.id', Gral::getVars(1, 'buscador_veh_marca_id'), Gral::getVars(1, 'buscador_veh_marca_id_comparador'));
	$criterio->add('veh_marca.descripcion', Gral::getVars(1, 'buscador_veh_marca_descripcion'), Gral::getVars(1, 'buscador_veh_marca_descripcion_comparador'));
	$criterio->add('veh_marca.codigo', Gral::getVars(1, 'buscador_veh_marca_codigo'), Gral::getVars(1, 'buscador_veh_marca_codigo_comparador'));
	$criterio->add('veh_marca.observacion', Gral::getVars(1, 'buscador_veh_marca_observacion'), Gral::getVars(1, 'buscador_veh_marca_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('veh_marca_imagen', 'veh_marca_imagen.veh_marca_id', 'veh_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('veh_modelo', 'veh_modelo.veh_marca_id', 'veh_marca.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('veh_marca');
		$criterio->setCriterios();		
}
?>

