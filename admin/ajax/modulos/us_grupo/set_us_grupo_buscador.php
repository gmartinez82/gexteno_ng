<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsGrupo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	$criterio->add('us_agrupado.us_usuario_id', Gral::getVars(1, 'buscador_us_agrupado_us_usuario_id'), Gral::getVars(1, 'buscador_us_agrupado_us_usuario_id_comparador'));
	$criterio->add('us_agrupador.us_credencial_id', Gral::getVars(1, 'buscador_us_agrupador_us_credencial_id'), Gral::getVars(1, 'buscador_us_agrupador_us_credencial_id_comparador'));
	
	// criterios agregados por atributos de clase
	$criterio->add('us_grupo.id', Gral::getVars(1, 'buscador_us_grupo_id'), Gral::getVars(1, 'buscador_us_grupo_id_comparador'));
	$criterio->add('us_grupo.descripcion', Gral::getVars(1, 'buscador_us_grupo_descripcion'), Gral::getVars(1, 'buscador_us_grupo_descripcion_comparador'));
	$criterio->add('us_grupo.codigo', Gral::getVars(1, 'buscador_us_grupo_codigo'), Gral::getVars(1, 'buscador_us_grupo_codigo_comparador'));
	$criterio->add('us_grupo.observacion', Gral::getVars(1, 'buscador_us_grupo_observacion'), Gral::getVars(1, 'buscador_us_grupo_observacion_comparador'));
	$criterio->add('us_grupo.estado', Gral::getVars(1, 'buscador_us_grupo_estado'), Gral::getVars(1, 'buscador_us_grupo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('us_agrupador', 'us_agrupador.us_grupo_id', 'us_grupo.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_credencial', 'us_credencial.id', 'us_agrupador.us_credencial_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_agrupado', 'us_agrupado.us_grupo_id', 'us_grupo.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_agrupado.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_us_grupo', 'nov_novedad_us_grupo.us_grupo_id', 'us_grupo.id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad', 'nov_novedad.id', 'nov_novedad_us_grupo.nov_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control_us_grupo', 'alt_control_us_grupo.us_grupo_id', 'us_grupo.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control', 'alt_control.id', 'alt_control_us_grupo.alt_control_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_grupo');
		$criterio->setCriterios();		
}
?>

