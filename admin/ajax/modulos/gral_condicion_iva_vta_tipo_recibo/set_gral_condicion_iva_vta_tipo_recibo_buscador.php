<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCondicionIvaVtaTipoRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_condicion_iva_vta_tipo_recibo.id', Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_id_comparador'));
	$criterio->add('gral_condicion_iva_vta_tipo_recibo.descripcion', Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_descripcion'), Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_descripcion_comparador'));
	$criterio->add('gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id', Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_gral_condicion_iva_id_comparador'));
	$criterio->add('gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id', Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_vta_tipo_recibo_id_comparador'));
	$criterio->add('gral_condicion_iva_vta_tipo_recibo.codigo', Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_codigo'), Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_codigo_comparador'));
	$criterio->add('gral_condicion_iva_vta_tipo_recibo.observacion', Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_observacion'), Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_observacion_comparador'));
	$criterio->add('gral_condicion_iva_vta_tipo_recibo.estado', Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_estado'), Gral::getVars(1, 'buscador_gral_condicion_iva_vta_tipo_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_condicion_iva_vta_tipo_recibo');
		$criterio->setCriterios();		
}
?>

