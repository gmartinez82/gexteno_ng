<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OpeChofer::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ope_chofer.id', Gral::getVars(1, 'buscador_ope_chofer_id'), Gral::getVars(1, 'buscador_ope_chofer_id_comparador'));
	$criterio->add('ope_chofer.descripcion', Gral::getVars(1, 'buscador_ope_chofer_descripcion'), Gral::getVars(1, 'buscador_ope_chofer_descripcion_comparador'));
	$criterio->add('ope_chofer.apellido', Gral::getVars(1, 'buscador_ope_chofer_apellido'), Gral::getVars(1, 'buscador_ope_chofer_apellido_comparador'));
	$criterio->add('ope_chofer.nombre', Gral::getVars(1, 'buscador_ope_chofer_nombre'), Gral::getVars(1, 'buscador_ope_chofer_nombre_comparador'));
	$criterio->add('ope_chofer.email', Gral::getVars(1, 'buscador_ope_chofer_email'), Gral::getVars(1, 'buscador_ope_chofer_email_comparador'));
	$criterio->add('ope_chofer.telefono', Gral::getVars(1, 'buscador_ope_chofer_telefono'), Gral::getVars(1, 'buscador_ope_chofer_telefono_comparador'));
	$criterio->add('ope_chofer.celular', Gral::getVars(1, 'buscador_ope_chofer_celular'), Gral::getVars(1, 'buscador_ope_chofer_celular_comparador'));
	$criterio->add('ope_chofer.codigo', Gral::getVars(1, 'buscador_ope_chofer_codigo'), Gral::getVars(1, 'buscador_ope_chofer_codigo_comparador'));
	$criterio->add('ope_chofer.observacion', Gral::getVars(1, 'buscador_ope_chofer_observacion'), Gral::getVars(1, 'buscador_ope_chofer_observacion_comparador'));
	$criterio->add('ope_chofer.estado', Gral::getVars(1, 'buscador_ope_chofer_estado'), Gral::getVars(1, 'buscador_ope_chofer_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.ope_chofer_id', 'ope_chofer.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta', 'gral_ruta.id', 'vta_hoja_ruta.gral_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta_tipo_estado', 'vta_hoja_ruta_tipo_estado.id', 'vta_hoja_ruta.vta_hoja_ruta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_chofer_us_usuario', 'ope_chofer_us_usuario.ope_chofer_id', 'ope_chofer.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'ope_chofer_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ope_chofer');
		$criterio->setCriterios();		
}
?>

