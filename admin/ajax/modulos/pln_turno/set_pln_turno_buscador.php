<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PlnTurno::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pln_turno.id', Gral::getVars(1, 'buscador_pln_turno_id'), Gral::getVars(1, 'buscador_pln_turno_id_comparador'));
	$criterio->add('pln_turno.descripcion', Gral::getVars(1, 'buscador_pln_turno_descripcion'), Gral::getVars(1, 'buscador_pln_turno_descripcion_comparador'));
	$criterio->add('pln_turno.codigo', Gral::getVars(1, 'buscador_pln_turno_codigo'), Gral::getVars(1, 'buscador_pln_turno_codigo_comparador'));
	$criterio->add('pln_turno.observacion', Gral::getVars(1, 'buscador_pln_turno_observacion'), Gral::getVars(1, 'buscador_pln_turno_observacion_comparador'));
	$criterio->add('pln_turno.estado', Gral::getVars(1, 'buscador_pln_turno_estado'), Gral::getVars(1, 'buscador_pln_turno_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pln_turno_novedad', 'pln_turno_novedad.pln_turno_id', 'pln_turno.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad', 'gral_novedad.id', 'pln_turno_novedad.gral_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'pln_turno_novedad.pln_jornada_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pln_turno');
		$criterio->setCriterios();		
}
?>

