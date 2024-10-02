<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCondicionIvaPdeTipoFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_condicion_iva_pde_tipo_factura.id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_factura.descripcion', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_descripcion'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_descripcion_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_factura.gral_condicion_iva_id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_gral_condicion_iva_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_factura.pde_tipo_factura_id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_pde_tipo_factura_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_factura.predeterminado', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_predeterminado'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_predeterminado_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_factura.codigo', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_codigo'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_codigo_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_factura.observacion', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_observacion'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_observacion_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_factura.estado', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_estado'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_condicion_iva_pde_tipo_factura');
		$criterio->setCriterios();		
}
?>

