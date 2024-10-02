<?php

switch (get_class($vta_comprobante)) {
    case 'VtaFactura':
    case 'VtaNotaDebito':
        $multiplicador = 1;
        break;
    case 'VtaNotaCredito':
        $multiplicador = (-1);
        break;
    default:
        $multiplicador = 1;
}

$importe_subtotal_neto_gravado = $vta_comprobante->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_GRAVADO) * $multiplicador;
$importe_subtotal_neto_no_gravado = $vta_comprobante->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) * $multiplicador;
$importe_subtotal_neto_exento = $vta_comprobante->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO) * $multiplicador;
$importe_subtotal_neto_no_gravado_exento = $importe_subtotal_neto_no_gravado + $importe_subtotal_neto_exento;

$arr_iva_full = $vta_comprobante->getArrIvaComprobanteFull();
$arr_tributo_full = $vta_comprobante->getArrTributoComprobanteFull();

$importe_iva_importe_21 = $vta_comprobante->getImporteIvaImporte(GralTipoIva::TIPO_21, $arr_iva_full) * $multiplicador;
$importe_iva_importe_105 = $vta_comprobante->getImporteIvaImporte(GralTipoIva::TIPO_105, $arr_iva_full) * $multiplicador;
$importe_tributos_importe = $vta_comprobante->getImporteTributoImporte(false, $arr_tributo_full) * $multiplicador;

$importe_tributos_perc_iibb_mnes_importe = $vta_comprobante->getImporteTributoImporte(VtaTributo::TRIBUTO_PERCEPCIONES_IIBB, $arr_tributo_full) * $multiplicador;

$importe_total_comprobante_individual_sumado = $importe_subtotal_neto_gravado + $importe_subtotal_neto_no_gravado_exento + $importe_iva_importe_21 + $importe_iva_importe_105 + $importe_tributos_importe;
$importe_otros_tributos_importe = round($importe_tributos_importe - $importe_tributos_perc_iibb_mnes_importe, 2);

$importe_total_comprobante = $vta_comprobante->getImporteTotal() * $multiplicador;

$importe_total_mensual_subtotal_neto_gravado += $importe_subtotal_neto_gravado;
$importe_total_mensual_subtotal_neto_no_gravado += $importe_subtotal_neto_no_gravado;
$importe_total_mensual_iva_21_importe += $importe_iva_importe_21;
$importe_total_mensual_iva_105_importe += $importe_iva_importe_105;
$importe_total_mensual_perc_iibb_mnes_importe += $importe_tributos_perc_iibb_mnes_importe;
$importe_total_mensual_tributos_importe += $importe_tributos_importe;
$importe_total_mensual_total_comprobante += $importe_total_comprobante;
