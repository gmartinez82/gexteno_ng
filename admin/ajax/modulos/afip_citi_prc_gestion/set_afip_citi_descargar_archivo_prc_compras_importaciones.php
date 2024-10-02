<?php
$texto_afip_citi_compras_importaciones = "";
foreach($afip_citi_compras_importaciones as $afip_citi_compra_importacion)
{
    $texto_afip_citi_compras_importaciones .= 
    $afip_citi_compra_importacion->getAfipCitiDespachoImportacion().
    $afip_citi_compra_importacion->getAfipCitiImporteNetoGravado().
    $afip_citi_compra_importacion->getAfipCitiAlicuotaIva().
    $afip_citi_compra_importacion->getAfipCitiImporteImpuestoLiquidado()
    ;
    
    //$texto_afip_citi_compras_importaciones .= PHP_EOL;
    $texto_afip_citi_compras_importaciones .= chr(13).chr(10);
}
?>