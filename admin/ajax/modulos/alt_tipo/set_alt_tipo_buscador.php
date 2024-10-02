<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AltTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('alt_tipo.id', Gral::getVars(1, 'buscador_alt_tipo_id'), Gral::getVars(1, 'buscador_alt_tipo_id_comparador'));
	$criterio->add('alt_tipo.descripcion', Gral::getVars(1, 'buscador_alt_tipo_descripcion'), Gral::getVars(1, 'buscador_alt_tipo_descripcion_comparador'));
	$criterio->add('alt_tipo.codigo', Gral::getVars(1, 'buscador_alt_tipo_codigo'), Gral::getVars(1, 'buscador_alt_tipo_codigo_comparador'));
	$criterio->add('alt_tipo.observacion', Gral::getVars(1, 'buscador_alt_tipo_observacion'), Gral::getVars(1, 'buscador_alt_tipo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('alt_alerta', 'alt_alerta.alt_tipo_id', 'alt_tipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_modulo', 'alt_modulo.id', 'alt_alerta.alt_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_nivel', 'alt_nivel.id', 'alt_alerta.alt_nivel_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_origen', 'alt_origen.id', 'alt_alerta.alt_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control', 'alt_control.id', 'alt_alerta.alt_control_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('alt_tipo');
		$criterio->setCriterios();		
}
?>

