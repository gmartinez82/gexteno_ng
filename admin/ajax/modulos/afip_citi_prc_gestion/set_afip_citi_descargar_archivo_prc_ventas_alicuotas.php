<?php
$texto_afip_citi_ventas_alicuotas = "";
foreach($afip_citi_ventas_alicuotas as $afip_citi_ventas_alicuota)
{
    $texto_afip_citi_ventas_alicuotas .= 
    $afip_citi_ventas_alicuota->getAfipCitiTipoComprobante().
    $afip_citi_ventas_alicuota->getAfipCitiPuntoVenta().
    $afip_citi_ventas_alicuota->getAfipCitiNumeroComprobante().
    $afip_citi_ventas_alicuota->getAfipCitiImporteNetoGravado().
    $afip_citi_ventas_alicuota->getAfipCitiAlicuotaIva().
    $afip_citi_ventas_alicuota->getAfipCitiImporteImpuestoLiquidado()
    ;

    //$texto_afip_citi_ventas_alicuotas .= PHP_EOL;
    $texto_afip_citi_ventas_alicuotas .= chr(13).chr(10);
}
?>