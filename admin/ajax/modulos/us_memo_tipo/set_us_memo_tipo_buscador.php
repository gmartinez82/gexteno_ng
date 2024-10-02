<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsMemoTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_memo_tipo.id', Gral::getVars(1, 'buscador_us_memo_tipo_id'), Gral::getVars(1, 'buscador_us_memo_tipo_id_comparador'));
	$criterio->add('us_memo_tipo.descripcion', Gral::getVars(1, 'buscador_us_memo_tipo_descripcion'), Gral::getVars(1, 'buscador_us_memo_tipo_descripcion_comparador'));
	$criterio->add('us_memo_tipo.codigo', Gral::getVars(1, 'buscador_us_memo_tipo_codigo'), Gral::getVars(1, 'buscador_us_memo_tipo_codigo_comparador'));
	$criterio->add('us_memo_tipo.observacion', Gral::getVars(1, 'buscador_us_memo_tipo_observacion'), Gral::getVars(1, 'buscador_us_memo_tipo_observacion_comparador'));
	$criterio->add('us_memo_tipo.estado', Gral::getVars(1, 'buscador_us_memo_tipo_estado'), Gral::getVars(1, 'buscador_us_memo_tipo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('us_memo', 'us_memo.us_memo_tipo_id', 'us_memo_tipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_memo.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_memo_tipo_estado', 'us_memo_tipo_estado.id', 'us_memo.us_memo_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_memo_tipo');
		$criterio->setCriterios();		
}
?>

