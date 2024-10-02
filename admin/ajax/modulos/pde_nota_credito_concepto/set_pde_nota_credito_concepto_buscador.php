<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeNotaCreditoConcepto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_nota_credito_concepto.id', Gral::getVars(1, 'buscador_pde_nota_credito_concepto_id'), Gral::getVars(1, 'buscador_pde_nota_credito_concepto_id_comparador'));
	$criterio->add('pde_nota_credito_concepto.descripcion', Gral::getVars(1, 'buscador_pde_nota_credito_concepto_descripcion'), Gral::getVars(1, 'buscador_pde_nota_credito_concepto_descripcion_comparador'));
	$criterio->add('pde_nota_credito_concepto.codigo', Gral::getVars(1, 'buscador_pde_nota_credito_concepto_codigo'), Gral::getVars(1, 'buscador_pde_nota_credito_concepto_codigo_comparador'));
	$criterio->add('pde_nota_credito_concepto.cntb_cuenta_id', Gral::getVars(1, 'buscador_pde_nota_credito_concepto_cntb_cuenta_id'), Gral::getVars(1, 'buscador_pde_nota_credito_concepto_cntb_cuenta_id_comparador'));
	$criterio->add('pde_nota_credito_concepto.observacion', Gral::getVars(1, 'buscador_pde_nota_credito_concepto_observacion'), Gral::getVars(1, 'buscador_pde_nota_credito_concepto_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_nota_credito_item', 'pde_nota_credito_item.pde_nota_credito_concepto_id', 'pde_nota_credito_concepto.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_item.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_nota_credito_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_nota_credito_concepto');
		$criterio->setCriterios();		
}
?>

