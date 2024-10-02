<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeAsch01Req::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_asch01_req.id', Gral::getVars(1, 'buscador_eku_de_asch01_req_id'), Gral::getVars(1, 'buscador_eku_de_asch01_req_id_comparador'));
	$criterio->add('eku_de_asch01_req.descripcion', Gral::getVars(1, 'buscador_eku_de_asch01_req_descripcion'), Gral::getVars(1, 'buscador_eku_de_asch01_req_descripcion_comparador'));
	$criterio->add('eku_de_asch01_req.eku_de_id', Gral::getVars(1, 'buscador_eku_de_asch01_req_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_asch01_req_eku_de_id_comparador'));
	$criterio->add('eku_de_asch01_req.eku_asch02_did', Gral::getVars(1, 'buscador_eku_de_asch01_req_eku_asch02_did'), Gral::getVars(1, 'buscador_eku_de_asch01_req_eku_asch02_did_comparador'));
	$criterio->add('eku_de_asch01_req.eku_asch03_xde', Gral::getVars(1, 'buscador_eku_de_asch01_req_eku_asch03_xde'), Gral::getVars(1, 'buscador_eku_de_asch01_req_eku_asch03_xde_comparador'));
	$criterio->add('eku_de_asch01_req.codigo', Gral::getVars(1, 'buscador_eku_de_asch01_req_codigo'), Gral::getVars(1, 'buscador_eku_de_asch01_req_codigo_comparador'));
	$criterio->add('eku_de_asch01_req.observacion', Gral::getVars(1, 'buscador_eku_de_asch01_req_observacion'), Gral::getVars(1, 'buscador_eku_de_asch01_req_observacion_comparador'));
	$criterio->add('eku_de_asch01_req.estado', Gral::getVars(1, 'buscador_eku_de_asch01_req_estado'), Gral::getVars(1, 'buscador_eku_de_asch01_req_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_de_arsch01_resp', 'eku_de_arsch01_resp.eku_de_asch01_req_id', 'eku_de_asch01_req.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_arsch01_resp.eku_de_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_arsch01_resp_mensaje', 'eku_de_arsch01_resp_mensaje.eku_de_asch01_req_id', 'eku_de_asch01_req.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_asch01_req');
		$criterio->setCriterios();		
}
?>

