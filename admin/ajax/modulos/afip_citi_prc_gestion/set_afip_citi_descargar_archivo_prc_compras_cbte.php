<?php
$texto_afip_citi_compras_cbte = "";
foreach($afip_citi_compras_cbte as $afip_citi_compras_cbte)
{
    $texto_afip_citi_compras_cbte .= 
    $afip_citi_compras_cbte->getAfipCitiFechaComprobante().
    $afip_citi_compras_cbte->getAfipCitiTipoComprobante().
    $afip_citi_compras_cbte->getAfipCitiPuntoVenta().
    $afip_citi_compras_cbte->getAfipCitiNumeroComprobante().
    $afip_citi_compras_cbte->getAfipCitiDespachoImportacion().
    $afip_citi_compras_cbte->getAfipCitiCodigoDocumentoVendedor().
    $afip_citi_compras_cbte->getAfipCitiNumeroIdentificacionVendedor().
    $afip_citi_compras_cbte->getAfipCitiDenominacionVendedor().
    $afip_citi_compras_cbte->getAfipCitiImporteTotalOperacion().
    $afip_citi_compras_cbte->getAfipCitiImporteTotalConceptos().
    $afip_citi_compras_cbte->getAfipCitiImporteOperacionesExentas().
    $afip_citi_compras_cbte->getAfipCitiImportePercepcionesIva().
    $afip_citi_compras_cbte->getAfipCitiImportePercepcionesImpuestosNacionales().
    $afip_citi_compras_cbte->getAfipCitiImportePercepcionesIngresosBrutos().
    $afip_citi_compras_cbte->getAfipCitiImportePercepcionesImpuestosMunicipales().
    $afip_citi_compras_cbte->getAfipCitiImporteImpuestosInternos().
    $afip_citi_compras_cbte->getAfipCitiCodigoMoneda().
    $afip_citi_compras_cbte->getAfipCitiTipoCambio().
    $afip_citi_compras_cbte->getAfipCitiCantidadAlicuotasIva().
    $afip_citi_compras_cbte->getAfipCitiCodigoOperacion().
    $afip_citi_compras_cbte->getAfipCitiImporteCfComputable().
    $afip_citi_compras_cbte->getAfipCitiImporteOtrosTributos().
    $afip_citi_compras_cbte->getAfipCitiCuitEmisor().
    $afip_citi_compras_cbte->getAfipCitiDenominacionEmisor().
    $afip_citi_compras_cbte->getAfipCitiImporteIvaComision()
    ;
    
    //$texto_afip_citi_compras_cbte .= PHP_EOL;
    $texto_afip_citi_compras_cbte .= chr(13).chr(10);
}
?>
