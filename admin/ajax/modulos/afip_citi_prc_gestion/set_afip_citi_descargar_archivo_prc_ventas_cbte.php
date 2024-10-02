<?php
$texto_afip_citi_ventas_cbte = "";
foreach($afip_citi_ventas_cbte as $afip_citi_venta_cbte)
{
    $texto_afip_citi_ventas_cbte .= 
    $afip_citi_venta_cbte->getAfipCitiFechaComprobante().
    $afip_citi_venta_cbte->getAfipCitiTipoComprobante().
    $afip_citi_venta_cbte->getAfipCitiPuntoVenta().
    $afip_citi_venta_cbte->getAfipCitiNumeroComprobante().
    $afip_citi_venta_cbte->getAfipCitiNumeroComprobanteHasta().
    $afip_citi_venta_cbte->getAfipCitiCodigoDocumentoComprador().
    $afip_citi_venta_cbte->getAfipCitiNumeroIdentificacionComprador().
    $afip_citi_venta_cbte->getAfipCitiDenominacionComprador().
    $afip_citi_venta_cbte->getAfipCitiImporteTotalOperacion().
    $afip_citi_venta_cbte->getAfipCitiImporteTotalConceptos().
    $afip_citi_venta_cbte->getAfipCitiImportePercepcionNoCategorizados().
    $afip_citi_venta_cbte->getAfipCitiImporteOperacionesExentas().
    $afip_citi_venta_cbte->getAfipCitiImportePercepcionesImpuestosNacionales().
    $afip_citi_venta_cbte->getAfipCitiImportePercepcionesIngresosBrutos().
    $afip_citi_venta_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales().
    $afip_citi_venta_cbte->getAfipCitiImporteImpuestosInternos().
    $afip_citi_venta_cbte->getAfipCitiCodigoMoneda().
    $afip_citi_venta_cbte->getAfipCitiTipoCambio().
    $afip_citi_venta_cbte->getAfipCitiCantidadAlicuotasIva().
    $afip_citi_venta_cbte->getAfipCitiCodigoOperacion().
    $afip_citi_venta_cbte->getAfipCitiImporteOtrosTributos().
    $afip_citi_venta_cbte->getAfipCitiFechaVencimientoPago()
    ;
    
    //$texto_afip_citi_ventas_cbte .= PHP_EOL;
    $texto_afip_citi_ventas_cbte .= chr(13).chr(10);
}
?>