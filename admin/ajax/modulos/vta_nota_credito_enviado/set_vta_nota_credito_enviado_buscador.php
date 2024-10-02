<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaNotaCreditoEnviado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_nota_credito_enviado.id', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_id'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_id_comparador'));
	$criterio->add('vta_nota_credito_enviado.descripcion', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_descripcion'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_descripcion_comparador'));
	$criterio->add('vta_nota_credito_enviado.vta_nota_credito_id', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_vta_nota_credito_id'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_vta_nota_credito_id_comparador'));
	$criterio->add('vta_nota_credito_enviado.asunto', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_asunto'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_asunto_comparador'));
	$criterio->add('vta_nota_credito_enviado.destinatario', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_destinatario'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_destinatario_comparador'));
	$criterio->add('vta_nota_credito_enviado.cuerpo', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_cuerpo'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_cuerpo_comparador'));
	$criterio->add('vta_nota_credito_enviado.adjunto', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_adjunto'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_adjunto_comparador'));
	$criterio->add('vta_nota_credito_enviado.codigo_envio', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_codigo_envio'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_codigo_envio_comparador'));
	$criterio->add('vta_nota_credito_enviado.codigo', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_codigo'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_codigo_comparador'));
	$criterio->add('vta_nota_credito_enviado.observacion', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_observacion'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_observacion_comparador'));
	$criterio->add('vta_nota_credito_enviado.estado', Gral::getVars(1, 'buscador_vta_nota_credito_enviado_estado'), Gral::getVars(1, 'buscador_vta_nota_credito_enviado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_nota_credito_enviado');
		$criterio->setCriterios();		
}
?>

