<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCajaTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_caja_tipo.id', Gral::getVars(1, 'buscador_gral_caja_tipo_id'), Gral::getVars(1, 'buscador_gral_caja_tipo_id_comparador'));
	$criterio->add('gral_caja_tipo.descripcion', Gral::getVars(1, 'buscador_gral_caja_tipo_descripcion'), Gral::getVars(1, 'buscador_gral_caja_tipo_descripcion_comparador'));
	$criterio->add('gral_caja_tipo.codigo', Gral::getVars(1, 'buscador_gral_caja_tipo_codigo'), Gral::getVars(1, 'buscador_gral_caja_tipo_codigo_comparador'));
	$criterio->add('gral_caja_tipo.observacion', Gral::getVars(1, 'buscador_gral_caja_tipo_observacion'), Gral::getVars(1, 'buscador_gral_caja_tipo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_caja', 'gral_caja.gral_caja_tipo_id', 'gral_caja_tipo.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_caja_tipo');
		$criterio->setCriterios();		
}
?>

