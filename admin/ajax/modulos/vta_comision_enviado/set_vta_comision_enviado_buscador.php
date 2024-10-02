<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComisionEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comision_enviado.id', Gral::getVars(1, 'buscador_vta_comision_enviado_id'), Gral::getVars(1, 'buscador_vta_comision_enviado_id_comparador'));
	$criterio->add('vta_comision_enviado.descripcion', Gral::getVars(1, 'buscador_vta_comision_enviado_descripcion'), Gral::getVars(1, 'buscador_vta_comision_enviado_descripcion_comparador'));
	$criterio->add('vta_comision_enviado.vta_comision_id', Gral::getVars(1, 'buscador_vta_comision_enviado_vta_comision_id'), Gral::getVars(1, 'buscador_vta_comision_enviado_vta_comision_id_comparador'));
	$criterio->add('vta_comision_enviado.asunto', Gral::getVars(1, 'buscador_vta_comision_enviado_asunto'), Gral::getVars(1, 'buscador_vta_comision_enviado_asunto_comparador'));
	$criterio->add('vta_comision_enviado.destinatario', Gral::getVars(1, 'buscador_vta_comision_enviado_destinatario'), Gral::getVars(1, 'buscador_vta_comision_enviado_destinatario_comparador'));
	$criterio->add('vta_comision_enviado.cuerpo', Gral::getVars(1, 'buscador_vta_comision_enviado_cuerpo'), Gral::getVars(1, 'buscador_vta_comision_enviado_cuerpo_comparador'));
	$criterio->add('vta_comision_enviado.adjunto', Gral::getVars(1, 'buscador_vta_comision_enviado_adjunto'), Gral::getVars(1, 'buscador_vta_comision_enviado_adjunto_comparador'));
	$criterio->add('vta_comision_enviado.codigo_envio', Gral::getVars(1, 'buscador_vta_comision_enviado_codigo_envio'), Gral::getVars(1, 'buscador_vta_comision_enviado_codigo_envio_comparador'));
	$criterio->add('vta_comision_enviado.codigo', Gral::getVars(1, 'buscador_vta_comision_enviado_codigo'), Gral::getVars(1, 'buscador_vta_comision_enviado_codigo_comparador'));
	$criterio->add('vta_comision_enviado.observacion', Gral::getVars(1, 'buscador_vta_comision_enviado_observacion'), Gral::getVars(1, 'buscador_vta_comision_enviado_observacion_comparador'));
	$criterio->add('vta_comision_enviado.estado', Gral::getVars(1, 'buscador_vta_comision_enviado_estado'), Gral::getVars(1, 'buscador_vta_comision_enviado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_comision_enviado');
		$criterio->setCriterios();		
}
?>

