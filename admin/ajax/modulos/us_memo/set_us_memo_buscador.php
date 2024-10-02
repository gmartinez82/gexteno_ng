<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsMemo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_memo.id', Gral::getVars(1, 'buscador_us_memo_id'), Gral::getVars(1, 'buscador_us_memo_id_comparador'));
	$criterio->add('us_memo.descripcion', Gral::getVars(1, 'buscador_us_memo_descripcion'), Gral::getVars(1, 'buscador_us_memo_descripcion_comparador'));
	$criterio->add('us_memo.us_usuario_id', Gral::getVars(1, 'buscador_us_memo_us_usuario_id'), Gral::getVars(1, 'buscador_us_memo_us_usuario_id_comparador'));
	$criterio->add('us_memo.us_memo_tipo_estado_id', Gral::getVars(1, 'buscador_us_memo_us_memo_tipo_estado_id'), Gral::getVars(1, 'buscador_us_memo_us_memo_tipo_estado_id_comparador'));
	$criterio->add('us_memo.us_memo_tipo_id', Gral::getVars(1, 'buscador_us_memo_us_memo_tipo_id'), Gral::getVars(1, 'buscador_us_memo_us_memo_tipo_id_comparador'));
	$criterio->add('us_memo.codigo', Gral::getVars(1, 'buscador_us_memo_codigo'), Gral::getVars(1, 'buscador_us_memo_codigo_comparador'));
	$criterio->add('us_memo.observacion', Gral::getVars(1, 'buscador_us_memo_observacion'), Gral::getVars(1, 'buscador_us_memo_observacion_comparador'));
	$criterio->add('us_memo.orden', Gral::getVars(1, 'buscador_us_memo_orden'), Gral::getVars(1, 'buscador_us_memo_orden_comparador'));
	$criterio->add('us_memo.estado', Gral::getVars(1, 'buscador_us_memo_estado'), Gral::getVars(1, 'buscador_us_memo_estado_comparador'));
	$criterio->add('us_memo.creado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_memo_creado')), Gral::getVars(1, 'buscador_us_memo_creado_comparador'));
	$criterio->add('us_memo.modificado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_memo_modificado')), Gral::getVars(1, 'buscador_us_memo_modificado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('us_memo_estado', 'us_memo_estado.us_memo_id', 'us_memo.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_memo_tipo_estado', 'us_memo_tipo_estado.id', 'us_memo_estado.us_memo_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_memo');
		$criterio->setCriterios();		
}
?>

