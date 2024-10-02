<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.descripcion', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_descripcion'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_descripcion_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.pde_nota_credito_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_pde_nota_credito_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_pde_nota_credito_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.pde_factura_pde_recepcion_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_pde_factura_pde_recepcion_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_pde_factura_pde_recepcion_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.ins_insumo_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_ins_insumo_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.ins_unidad_medida_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_ins_unidad_medida_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_ins_unidad_medida_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.gral_tipo_iva_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_gral_tipo_iva_id_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.importe_unitario', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_importe_unitario'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_importe_unitario_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.cantidad', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_cantidad'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_cantidad_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.codigo', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_codigo'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_codigo_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.observacion', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_observacion'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_observacion_comparador'));
	$criterio->add('pde_nota_credito_pde_factura_pde_recepcion.estado', Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_estado'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_factura_pde_recepcion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_nota_credito_pde_factura_pde_recepcion');
		$criterio->setCriterios();		
}
?>

