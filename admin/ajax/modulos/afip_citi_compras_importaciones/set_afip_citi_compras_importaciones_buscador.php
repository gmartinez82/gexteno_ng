<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AfipCitiComprasImportaciones::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('afip_citi_compras_importaciones.id', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_id'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_id_comparador'));
	$criterio->add('afip_citi_compras_importaciones.descripcion', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_descripcion'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_descripcion_comparador'));
	$criterio->add('afip_citi_compras_importaciones.codigo', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_codigo'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_codigo_comparador'));
	$criterio->add('afip_citi_compras_importaciones.afip_citi_prc_id', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_prc_id'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_prc_id_comparador'));
	$criterio->add('afip_citi_compras_importaciones.afip_citi_cabecera_id', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_cabecera_id'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_cabecera_id_comparador'));
	$criterio->add('afip_citi_compras_importaciones.afip_citi_despacho_importacion', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_despacho_importacion'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_despacho_importacion_comparador'));
	$criterio->add('afip_citi_compras_importaciones.afip_citi_importe_neto_gravado', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_importe_neto_gravado'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_importe_neto_gravado_comparador'));
	$criterio->add('afip_citi_compras_importaciones.afip_citi_alicuota_iva', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_alicuota_iva'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_alicuota_iva_comparador'));
	$criterio->add('afip_citi_compras_importaciones.afip_citi_importe_impuesto_liquidado', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_importe_impuesto_liquidado'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_afip_citi_importe_impuesto_liquidado_comparador'));
	$criterio->add('afip_citi_compras_importaciones.pde_factura_id', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_pde_factura_id'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_pde_factura_id_comparador'));
	$criterio->add('afip_citi_compras_importaciones.pde_nota_credito_id', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_pde_nota_credito_id'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_pde_nota_credito_id_comparador'));
	$criterio->add('afip_citi_compras_importaciones.pde_nota_debito_id', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_pde_nota_debito_id'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_pde_nota_debito_id_comparador'));
	$criterio->add('afip_citi_compras_importaciones.observacion', Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_observacion'), Gral::getVars(1, 'buscador_afip_citi_compras_importaciones_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('afip_citi_compras_importaciones');
		$criterio->setCriterios();		
}
?>

