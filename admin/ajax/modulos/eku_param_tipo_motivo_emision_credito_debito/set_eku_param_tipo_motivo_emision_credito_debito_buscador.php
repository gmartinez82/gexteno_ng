<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoMotivoEmisionCreditoDebito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_motivo_emision_credito_debito.id', Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_id'), Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_id_comparador'));
	$criterio->add('eku_param_tipo_motivo_emision_credito_debito.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_descripcion_comparador'));
	$criterio->add('eku_param_tipo_motivo_emision_credito_debito.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_codigo_comparador'));
	$criterio->add('eku_param_tipo_motivo_emision_credito_debito.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_motivo_emision_credito_debito.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_observacion_comparador'));
	$criterio->add('eku_param_tipo_motivo_emision_credito_debito.estado', Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_motivo_emision_credito_debito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_motivo_emision_credito_debito');
		$criterio->setCriterios();		
}
?>

