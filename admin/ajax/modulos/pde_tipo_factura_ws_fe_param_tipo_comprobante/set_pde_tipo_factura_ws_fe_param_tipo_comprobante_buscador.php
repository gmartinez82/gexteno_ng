<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeTipoFacturaWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_tipo_factura_ws_fe_param_tipo_comprobante.id', Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_id'), Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_id_comparador'));
	$criterio->add('pde_tipo_factura_ws_fe_param_tipo_comprobante.descripcion', Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion'), Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_descripcion_comparador'));
	$criterio->add('pde_tipo_factura_ws_fe_param_tipo_comprobante.pde_tipo_factura_id', Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id'), Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_pde_tipo_factura_id_comparador'));
	$criterio->add('pde_tipo_factura_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id'), Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_ws_fe_param_tipo_comprobante_id_comparador'));
	$criterio->add('pde_tipo_factura_ws_fe_param_tipo_comprobante.codigo', Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo'), Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_codigo_comparador'));
	$criterio->add('pde_tipo_factura_ws_fe_param_tipo_comprobante.observacion', Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion'), Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_observacion_comparador'));
	$criterio->add('pde_tipo_factura_ws_fe_param_tipo_comprobante.estado', Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado'), Gral::getVars(1, 'buscador_pde_tipo_factura_ws_fe_param_tipo_comprobante_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_tipo_factura_ws_fe_param_tipo_comprobante');
		$criterio->setCriterios();		
}
?>

