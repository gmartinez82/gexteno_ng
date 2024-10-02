<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeFacturaTipoConcepto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_factura_tipo_concepto.id', Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_id'), Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_id_comparador'));
	$criterio->add('pde_factura_tipo_concepto.descripcion', Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_descripcion'), Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_descripcion_comparador'));
	$criterio->add('pde_factura_tipo_concepto.codigo', Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_codigo'), Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_codigo_comparador'));
	$criterio->add('pde_factura_tipo_concepto.cntb_cuenta_id', Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_cntb_cuenta_id'), Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_cntb_cuenta_id_comparador'));
	$criterio->add('pde_factura_tipo_concepto.observacion', Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_observacion'), Gral::getVars(1, 'buscador_pde_factura_tipo_concepto_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_factura_concepto', 'pde_factura_concepto.pde_factura_tipo_concepto_id', 'pde_factura_tipo_concepto.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_cuenta', 'cntb_cuenta.id', 'pde_factura_concepto.cntb_cuenta_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_factura_tipo_concepto');
		$criterio->setCriterios();		
}
?>

