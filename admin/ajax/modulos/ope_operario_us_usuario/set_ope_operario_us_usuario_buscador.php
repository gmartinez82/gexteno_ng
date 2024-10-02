<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OpeOperarioUsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ope_operario_us_usuario.id', Gral::getVars(1, 'buscador_ope_operario_us_usuario_id'), Gral::getVars(1, 'buscador_ope_operario_us_usuario_id_comparador'));
	$criterio->add('ope_operario_us_usuario.descripcion', Gral::getVars(1, 'buscador_ope_operario_us_usuario_descripcion'), Gral::getVars(1, 'buscador_ope_operario_us_usuario_descripcion_comparador'));
	$criterio->add('ope_operario_us_usuario.ope_operario_id', Gral::getVars(1, 'buscador_ope_operario_us_usuario_ope_operario_id'), Gral::getVars(1, 'buscador_ope_operario_us_usuario_ope_operario_id_comparador'));
	$criterio->add('ope_operario_us_usuario.us_usuario_id', Gral::getVars(1, 'buscador_ope_operario_us_usuario_us_usuario_id'), Gral::getVars(1, 'buscador_ope_operario_us_usuario_us_usuario_id_comparador'));
	$criterio->add('ope_operario_us_usuario.codigo', Gral::getVars(1, 'buscador_ope_operario_us_usuario_codigo'), Gral::getVars(1, 'buscador_ope_operario_us_usuario_codigo_comparador'));
	$criterio->add('ope_operario_us_usuario.observacion', Gral::getVars(1, 'buscador_ope_operario_us_usuario_observacion'), Gral::getVars(1, 'buscador_ope_operario_us_usuario_observacion_comparador'));
	$criterio->add('ope_operario_us_usuario.estado', Gral::getVars(1, 'buscador_ope_operario_us_usuario_estado'), Gral::getVars(1, 'buscador_ope_operario_us_usuario_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ope_operario_us_usuario');
		$criterio->setCriterios();		
}
?>

