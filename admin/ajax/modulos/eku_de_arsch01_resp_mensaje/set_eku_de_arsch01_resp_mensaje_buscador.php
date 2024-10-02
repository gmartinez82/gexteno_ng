<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeArsch01RespMensaje::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_arsch01_resp_mensaje.id', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_id'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_id_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.descripcion', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_descripcion'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_descripcion_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.eku_de_id', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_de_id_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.eku_de_asch01_req_id', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_de_asch01_req_id'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_de_asch01_req_id_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.eku_de_arsch01_resp_id', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_de_arsch01_resp_id'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_de_arsch01_resp_id_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.eku_arsch01_pp052_dcodres', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_arsch01_pp052_dcodres'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_arsch01_pp052_dcodres_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.eku_arsch01_pp053_dmsgres', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_arsch01_pp053_dmsgres'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_eku_arsch01_pp053_dmsgres_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.codigo', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_codigo'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_codigo_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.observacion', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_observacion'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_observacion_comparador'));
	$criterio->add('eku_de_arsch01_resp_mensaje.estado', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_estado'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_mensaje_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_arsch01_resp_mensaje');
		$criterio->setCriterios();		
}
?>

