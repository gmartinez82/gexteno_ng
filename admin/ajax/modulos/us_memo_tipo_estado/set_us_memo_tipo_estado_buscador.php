<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsMemoTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_memo_tipo_estado.id', Gral::getVars(1, 'buscador_us_memo_tipo_estado_id'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_id_comparador'));
	$criterio->add('us_memo_tipo_estado.descripcion', Gral::getVars(1, 'buscador_us_memo_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_descripcion_comparador'));
	$criterio->add('us_memo_tipo_estado.codigo', Gral::getVars(1, 'buscador_us_memo_tipo_estado_codigo'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_codigo_comparador'));
	$criterio->add('us_memo_tipo_estado.activo', Gral::getVars(1, 'buscador_us_memo_tipo_estado_activo'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_activo_comparador'));
	$criterio->add('us_memo_tipo_estado.terminal', Gral::getVars(1, 'buscador_us_memo_tipo_estado_terminal'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_terminal_comparador'));
	$criterio->add('us_memo_tipo_estado.anulado', Gral::getVars(1, 'buscador_us_memo_tipo_estado_anulado'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_anulado_comparador'));
	$criterio->add('us_memo_tipo_estado.observacion', Gral::getVars(1, 'buscador_us_memo_tipo_estado_observacion'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_observacion_comparador'));
	$criterio->add('us_memo_tipo_estado.estado', Gral::getVars(1, 'buscador_us_memo_tipo_estado_estado'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('us_memo', 'us_memo.us_memo_tipo_estado_id', 'us_memo_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_memo.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_memo_tipo', 'us_memo_tipo.id', 'us_memo.us_memo_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_memo_estado', 'us_memo_estado.us_memo_tipo_estado_id', 'us_memo_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_memo_tipo_estado');
		$criterio->setCriterios();		
}
?>

