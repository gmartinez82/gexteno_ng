<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsCredencial::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	$criterio->add('us_acreditado.us_usuario_id', Gral::getVars(1, 'buscador_us_acreditado_us_usuario_id'), Gral::getVars(1, 'buscador_us_acreditado_us_usuario_id_comparador'));
	$criterio->add('us_agrupador.us_grupo_id', Gral::getVars(1, 'buscador_us_agrupador_us_grupo_id'), Gral::getVars(1, 'buscador_us_agrupador_us_grupo_id_comparador'));
	
	// criterios agregados por atributos de clase
	$criterio->add('us_credencial.id', Gral::getVars(1, 'buscador_us_credencial_id'), Gral::getVars(1, 'buscador_us_credencial_id_comparador'));
	$criterio->add('us_credencial.descripcion', Gral::getVars(1, 'buscador_us_credencial_descripcion'), Gral::getVars(1, 'buscador_us_credencial_descripcion_comparador'));
	$criterio->add('us_credencial.codigo', Gral::getVars(1, 'buscador_us_credencial_codigo'), Gral::getVars(1, 'buscador_us_credencial_codigo_comparador'));
	$criterio->add('us_credencial.observacion', Gral::getVars(1, 'buscador_us_credencial_observacion'), Gral::getVars(1, 'buscador_us_credencial_observacion_comparador'));
	$criterio->add('us_credencial.estado', Gral::getVars(1, 'buscador_us_credencial_estado'), Gral::getVars(1, 'buscador_us_credencial_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('us_agrupador', 'us_agrupador.us_credencial_id', 'us_credencial.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_grupo', 'us_grupo.id', 'us_agrupador.us_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_acreditado', 'us_acreditado.us_credencial_id', 'us_credencial.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_acreditado.us_usuario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_credencial');
		$criterio->setCriterios();		
}
?>

