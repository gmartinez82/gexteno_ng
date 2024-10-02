<?php

$texto_afip_citi_compras_alicuotas = "";
foreach($afip_citi_compras_alicuotas as $afip_citi_compras_alicuota)
{
    $texto_afip_citi_compras_alicuotas .= 
    $afip_citi_compras_alicuota->getAfipCitiTipoComprobante().
    $afip_citi_compras_alicuota->getAfipCitiPuntoVenta().
    $afip_citi_compras_alicuota->getAfipCitiNumeroComprobante().
    $afip_citi_compras_alicuota->getAfipCitiCodigoDocumentoVendedor().
    $afip_citi_compras_alicuota->getAfipCitiNumeroIdentificacionVendedor().
    $afip_citi_compras_alicuota->getAfipCitiImporteNetoGravado().
    $afip_citi_compras_alicuota->getAfipCitiAlicuotaIva().
    $afip_citi_compras_alicuota->getAfipCitiImporteImpuestoLiquidado()
    ;
    
    //$texto_afip_citi_compras_alicuotas .= PHP_EOL;
    $texto_afip_citi_compras_alicuotas .= chr(13).chr(10);
}


?>