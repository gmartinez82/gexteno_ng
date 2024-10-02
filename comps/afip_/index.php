<?php
//phpinfo();

include_once '_autoload.php';

error_reporting(E_ERROR);
ini_set('display_errors', '1');


//exit();
// ========== Actualizar Tipificaciones ==========

$gral_empresa = GralEmpresa::getOxId(1);

//WsAfip::setActualizarTipificacionesAfip($gral_empresa);

//WsAfipProceso::setWsFeParamTipoDocumentosDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamPuntoVentasDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamTipoComprobantesDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamTipoConceptosDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamTipoIvaDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamTipoMonedasDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamTipoOpcionalDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamTipoPaisDesdeWsAfip($gral_empresa);
//WsAfipProceso::setWsFeParamTipoTributoDesdeWsAfip($gral_empresa);

//$fe_dummy = WsAfipProceso::FEDummy($gral_empresa);
//Gral::prr($fe_dummy);

//Gral::prr();

//exit();
// ========== Fin Actualizar Tipificaciones ==========

/**
 * WSAA
 */
$wsaa = new WsAa($gral_empresa);
/*
if ($wsaa->get_expiration() < date("Y-m-d h:m:i")) {
    if ($wsaa->generar_TA()) {
        echo '<br>Nuevo TA';
    } else {
        echo '<br>Error al obtener el TA';
    }
} else {
    echo '<br>TA expiration: ' . $wsaa->get_expiration();
}
*/
$wsaa->generar_TA();
echo '<br>TA expiration: ' . $wsaa->get_expiration().'<br>' ;

/**
 * WSFEV1
 */
$wsfev1 = new WsAfip($gral_empresa->getCuit());

// Carga el archivo TA.xml
$wsfev1->openTA();

//$wsfev1->setActualizarTipificacionesAfip($gral_empresa);

$dummy = $wsfev1->FEDummy();
Gral::prr($dummy);

//$tipo_documentos = $wsfev1->FEParamGetTiposDoc();
//Gral::prr($tipo_documentos);
//$tipo_conceptos = $wsfev1->FEParamGetTiposConcepto();
//Gral::prr($tipo_conceptos);
//$tipo_ivas = $wsfev1->FEParamGetTiposIva();
//Gral::prr($tipo_ivas);
//$tipo_monedas = $wsfev1->FEParamGetTiposMonedas();
//Gral::prr($tipo_monedas);
//$tipo_opcionals = $wsfev1->FEParamGetTiposOpcional();
//Gral::prr($tipo_opcionals);
//$tipo_tributos = $wsfev1->FEParamGetTiposTributos();
//Gral::prr($tipo_tributos);
//$punto_ventas = $wsfev1->FEParamGetPtosVenta();
//Gral::prr($punto_ventas);
//$tipo_comprobantes = $wsfev1->FEParamGetTiposCbte();
//Gral::prr($tipo_comprobantes);
//$moneda_id = 'DOL';
//$cotizacions = $wsfev1->FEParamGetCotizacion($moneda_id);
//Gral::prr($cotizacions);
//$tipo_paiss = $wsfev1->FEParamGetTiposPaises();
//Gral::prr($tipo_paiss);

//$punto_venta = 4000; //Punto de Venta
//$tipo_comprobante = 1; //1=Factura A
//$numero_comprobante = 4;
//$comprobante = $wsfev1->FECompConsultar($numero_comprobante, $tipo_comprobante, $punto_venta);
//Gral::prr($comprobante);
//$comprobante = $wsfev1->FECompConsultar(3, $tipo_comprobante, $punto_venta);
//Gral::prr($comprobante);


