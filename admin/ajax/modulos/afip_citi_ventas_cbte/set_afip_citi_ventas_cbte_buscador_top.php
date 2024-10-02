<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AfipCitiVentasCbte::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AfipCitiVentasCbte::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('afip_citi_ventas_cbte.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('afip_citi_ventas_cbte.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_fecha_comprobante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_tipo_comprobante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_punto_venta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_numero_comprobante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_numero_comprobante_hasta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_codigo_documento_comprador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_numero_identificacion_comprador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_denominacion_comprador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_total_operacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_total_conceptos', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_percepcion_no_categorizados', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_operaciones_exentas', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_nacionales', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_percepciones_ingresos_brutos', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_percepciones_impuestos_municipales', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_impuestos_internos', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_codigo_moneda', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_tipo_cambio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_cantidad_alicuotas_iva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_codigo_operacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_importe_otros_tributos', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.afip_citi_fecha_vencimiento_pago', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_ventas_cbte.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_cabecera.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_debito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_ventas_cbte.afip_citi_prc_id', 'LEFT JOIN');
$criterio->addRealJoin('afip_citi_cabecera', 'afip_citi_cabecera.id', 'afip_citi_ventas_cbte.afip_citi_cabecera_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'afip_citi_ventas_cbte.vta_factura_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'afip_citi_ventas_cbte.vta_nota_credito_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'afip_citi_ventas_cbte.vta_nota_debito_id', 'LEFT JOIN');
    
$criterio->addTabla('afip_citi_ventas_cbte');
$criterio->setCriterios();

