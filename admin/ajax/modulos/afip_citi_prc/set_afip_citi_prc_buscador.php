<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AfipCitiPrc::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('afip_citi_prc.id', Gral::getVars(1, 'buscador_afip_citi_prc_id'), Gral::getVars(1, 'buscador_afip_citi_prc_id_comparador'));
	$criterio->add('afip_citi_prc.descripcion', Gral::getVars(1, 'buscador_afip_citi_prc_descripcion'), Gral::getVars(1, 'buscador_afip_citi_prc_descripcion_comparador'));
	$criterio->add('afip_citi_prc.codigo', Gral::getVars(1, 'buscador_afip_citi_prc_codigo'), Gral::getVars(1, 'buscador_afip_citi_prc_codigo_comparador'));
	$criterio->add('afip_citi_prc.gral_empresa_id', Gral::getVars(1, 'buscador_afip_citi_prc_gral_empresa_id'), Gral::getVars(1, 'buscador_afip_citi_prc_gral_empresa_id_comparador'));
	$criterio->add('afip_citi_prc.anio', Gral::getVars(1, 'buscador_afip_citi_prc_anio'), Gral::getVars(1, 'buscador_afip_citi_prc_anio_comparador'));
	$criterio->add('afip_citi_prc.gral_mes_id', Gral::getVars(1, 'buscador_afip_citi_prc_gral_mes_id'), Gral::getVars(1, 'buscador_afip_citi_prc_gral_mes_id_comparador'));
	$criterio->add('afip_citi_prc.observacion', Gral::getVars(1, 'buscador_afip_citi_prc_observacion'), Gral::getVars(1, 'buscador_afip_citi_prc_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('afip_citi_cabecera', 'afip_citi_cabecera.afip_citi_prc_id', 'afip_citi_prc.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_cbte', 'afip_citi_ventas_cbte.afip_citi_prc_id', 'afip_citi_prc.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'afip_citi_ventas_cbte.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'afip_citi_ventas_cbte.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'afip_citi_ventas_cbte.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_alicuotas', 'afip_citi_ventas_alicuotas.afip_citi_prc_id', 'afip_citi_prc.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_cbte', 'afip_citi_compras_cbte.afip_citi_prc_id', 'afip_citi_prc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'afip_citi_compras_cbte.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'afip_citi_compras_cbte.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'afip_citi_compras_cbte.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_alicuotas', 'afip_citi_compras_alicuotas.afip_citi_prc_id', 'afip_citi_prc.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_importaciones', 'afip_citi_compras_importaciones.afip_citi_prc_id', 'afip_citi_prc.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('afip_citi_prc');
		$criterio->setCriterios();		
}
?>

