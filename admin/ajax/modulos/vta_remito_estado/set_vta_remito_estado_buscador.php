<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaRemitoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_remito_estado.id', Gral::getVars(1, 'buscador_vta_remito_estado_id'), Gral::getVars(1, 'buscador_vta_remito_estado_id_comparador'));
	$criterio->add('vta_remito_estado.descripcion', Gral::getVars(1, 'buscador_vta_remito_estado_descripcion'), Gral::getVars(1, 'buscador_vta_remito_estado_descripcion_comparador'));
	$criterio->add('vta_remito_estado.vta_remito_id', Gral::getVars(1, 'buscador_vta_remito_estado_vta_remito_id'), Gral::getVars(1, 'buscador_vta_remito_estado_vta_remito_id_comparador'));
	$criterio->add('vta_remito_estado.vta_remito_tipo_estado_id', Gral::getVars(1, 'buscador_vta_remito_estado_vta_remito_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_remito_estado_vta_remito_tipo_estado_id_comparador'));
	$criterio->add('vta_remito_estado.inicial', Gral::getVars(1, 'buscador_vta_remito_estado_inicial'), Gral::getVars(1, 'buscador_vta_remito_estado_inicial_comparador'));
	$criterio->add('vta_remito_estado.actual', Gral::getVars(1, 'buscador_vta_remito_estado_actual'), Gral::getVars(1, 'buscador_vta_remito_estado_actual_comparador'));
	$criterio->add('vta_remito_estado.cantidad_bultos', Gral::getVars(1, 'buscador_vta_remito_estado_cantidad_bultos'), Gral::getVars(1, 'buscador_vta_remito_estado_cantidad_bultos_comparador'));
	$criterio->add('vta_remito_estado.peso', Gral::getVars(1, 'buscador_vta_remito_estado_peso'), Gral::getVars(1, 'buscador_vta_remito_estado_peso_comparador'));
	$criterio->add('vta_remito_estado.costo_envio', Gral::getVars(1, 'buscador_vta_remito_estado_costo_envio'), Gral::getVars(1, 'buscador_vta_remito_estado_costo_envio_comparador'));
	$criterio->add('vta_remito_estado.gral_empresa_transportadora_id', Gral::getVars(1, 'buscador_vta_remito_estado_gral_empresa_transportadora_id'), Gral::getVars(1, 'buscador_vta_remito_estado_gral_empresa_transportadora_id_comparador'));
	$criterio->add('vta_remito_estado.guia', Gral::getVars(1, 'buscador_vta_remito_estado_guia'), Gral::getVars(1, 'buscador_vta_remito_estado_guia_comparador'));
	$criterio->add('vta_remito_estado.codigo', Gral::getVars(1, 'buscador_vta_remito_estado_codigo'), Gral::getVars(1, 'buscador_vta_remito_estado_codigo_comparador'));
	$criterio->add('vta_remito_estado.nota_interna', Gral::getVars(1, 'buscador_vta_remito_estado_nota_interna'), Gral::getVars(1, 'buscador_vta_remito_estado_nota_interna_comparador'));
	$criterio->add('vta_remito_estado.observacion', Gral::getVars(1, 'buscador_vta_remito_estado_observacion'), Gral::getVars(1, 'buscador_vta_remito_estado_observacion_comparador'));
	$criterio->add('vta_remito_estado.estado', Gral::getVars(1, 'buscador_vta_remito_estado_estado'), Gral::getVars(1, 'buscador_vta_remito_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_remito_estado');
		$criterio->setCriterios();		
}
?>

