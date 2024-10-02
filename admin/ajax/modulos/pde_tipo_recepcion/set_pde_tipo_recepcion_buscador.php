<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeTipoRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_tipo_recepcion.id', Gral::getVars(1, 'buscador_pde_tipo_recepcion_id'), Gral::getVars(1, 'buscador_pde_tipo_recepcion_id_comparador'));
	$criterio->add('pde_tipo_recepcion.descripcion', Gral::getVars(1, 'buscador_pde_tipo_recepcion_descripcion'), Gral::getVars(1, 'buscador_pde_tipo_recepcion_descripcion_comparador'));
	$criterio->add('pde_tipo_recepcion.codigo', Gral::getVars(1, 'buscador_pde_tipo_recepcion_codigo'), Gral::getVars(1, 'buscador_pde_tipo_recepcion_codigo_comparador'));
	$criterio->add('pde_tipo_recepcion.observacion', Gral::getVars(1, 'buscador_pde_tipo_recepcion_observacion'), Gral::getVars(1, 'buscador_pde_tipo_recepcion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.pde_tipo_recepcion_id', 'pde_tipo_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion_agrupacion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recepcion_agrupacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.pde_tipo_recepcion_id', 'pde_tipo_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_recepcion.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_recepcion.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_tipo_recepcion');
		$criterio->setCriterios();		
}
?>

