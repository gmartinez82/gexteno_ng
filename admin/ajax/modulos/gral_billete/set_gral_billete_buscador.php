<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralBillete::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_billete.id', Gral::getVars(1, 'buscador_gral_billete_id'), Gral::getVars(1, 'buscador_gral_billete_id_comparador'));
	$criterio->add('gral_billete.descripcion', Gral::getVars(1, 'buscador_gral_billete_descripcion'), Gral::getVars(1, 'buscador_gral_billete_descripcion_comparador'));
	$criterio->add('gral_billete.gral_moneda_id', Gral::getVars(1, 'buscador_gral_billete_gral_moneda_id'), Gral::getVars(1, 'buscador_gral_billete_gral_moneda_id_comparador'));
	$criterio->add('gral_billete.importe', Gral::getVars(1, 'buscador_gral_billete_importe'), Gral::getVars(1, 'buscador_gral_billete_importe_comparador'));
	$criterio->add('gral_billete.codigo', Gral::getVars(1, 'buscador_gral_billete_codigo'), Gral::getVars(1, 'buscador_gral_billete_codigo_comparador'));
	$criterio->add('gral_billete.observacion', Gral::getVars(1, 'buscador_gral_billete_observacion'), Gral::getVars(1, 'buscador_gral_billete_observacion_comparador'));
	$criterio->add('gral_billete.orden', Gral::getVars(1, 'buscador_gral_billete_orden'), Gral::getVars(1, 'buscador_gral_billete_orden_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_caja_gral_billete', 'fnd_caja_gral_billete.gral_billete_id', 'gral_billete.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_caja_gral_billete.fnd_caja_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_billete');
		$criterio->setCriterios();		
}
?>

