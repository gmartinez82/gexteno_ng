<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeArsch01Resp::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_arsch01_resp.id', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_id'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_id_comparador'));
	$criterio->add('eku_de_arsch01_resp.descripcion', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_descripcion'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_descripcion_comparador'));
	$criterio->add('eku_de_arsch01_resp.eku_de_id', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_de_id_comparador'));
	$criterio->add('eku_de_arsch01_resp.eku_de_asch01_req_id', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_de_asch01_req_id'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_de_asch01_req_id_comparador'));
	$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp02_id_cdc', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp02_id_cdc'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp02_id_cdc_comparador'));
	$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp03_ddecproc', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp03_ddecproc'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp03_ddecproc_comparador'));
	$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp04_ddigval', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp04_ddigval'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp04_ddigval_comparador'));
	$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp050_destres', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp050_destres'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp050_destres_comparador'));
	$criterio->add('eku_de_arsch01_resp.eku_arsch01_pp051_dprotaut', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp051_dprotaut'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_eku_arsch01_pp051_dprotaut_comparador'));
	$criterio->add('eku_de_arsch01_resp.codigo', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_codigo'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_codigo_comparador'));
	$criterio->add('eku_de_arsch01_resp.observacion', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_observacion'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_observacion_comparador'));
	$criterio->add('eku_de_arsch01_resp.estado', Gral::getVars(1, 'buscador_eku_de_arsch01_resp_estado'), Gral::getVars(1, 'buscador_eku_de_arsch01_resp_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_de_arsch01_resp_mensaje', 'eku_de_arsch01_resp_mensaje.eku_de_arsch01_resp_id', 'eku_de_arsch01_resp.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_arsch01_resp_mensaje.eku_de_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_de_asch01_req', 'eku_de_asch01_req.id', 'eku_de_arsch01_resp_mensaje.eku_de_asch01_req_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_arsch01_resp');
		$criterio->setCriterios();		
}
?>

