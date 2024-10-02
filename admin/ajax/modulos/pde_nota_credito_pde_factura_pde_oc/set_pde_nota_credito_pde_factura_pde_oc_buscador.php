<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeOc::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.descripcion', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_descripcion'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_descripcion_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.pde_nota_credito_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_pde_nota_credito_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_pde_nota_credito_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.pde_factura_pde_oc_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_pde_factura_pde_oc_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_pde_factura_pde_oc_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.ins_insumo_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_ins_insumo_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.ins_unidad_medida_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_ins_unidad_medida_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_ins_unidad_medida_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.gral_tipo_iva_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_gral_tipo_iva_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.importe_unitario', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_importe_unitario'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_importe_unitario_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.cantidad', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_cantidad'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_cantidad_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.codigo', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_codigo'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_codigo_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.observacion', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_observacion'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_observacion_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_oc.estado', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_estado'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_oc_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_nota_credito_pde_factura_pde_oc');
		$criterio->setCriterios();		
}
?>

