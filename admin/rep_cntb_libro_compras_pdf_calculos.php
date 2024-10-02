<?php

switch (get_class($pde_comprobante)) {
    case 'PdeFactura':
    case 'PdeNotaDebito':
        $multiplicador = 1;
        break;
    case 'PdeNotaCredito':
        $multiplicador = (-1);
        break;
    default:
        $multiplicador = 1;
}

$importe_subtotal_neto_gravado = $pde_comprobante->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_GRAVADO) * $multiplicador;
$importe_subtotal_neto_no_gravado = $pde_comprobante->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_NO_GRAVADO) * $multiplicador;
$importe_subtotal_neto_exento = $pde_comprobante->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_EXENTO) * $multiplicador;
$importe_subtotal_neto_no_gravado_exento = $importe_subtotal_neto_no_gravado + $importe_subtotal_neto_exento;

$arr_tributo_full = $pde_comprobante->getArrTributoComprobanteFull();

$importe_iva_importe = $pde_comprobante->getImporteIvaImporte() * $multiplicador;
$importe_tributos_importe = $pde_comprobante->getImporteTributoImporte(false, $arr_tributo_full) * $multiplicador;

$importe_tributos_perc_iva_importe = $pde_comprobante->getImporteTributoImporte(PdeTributo::TRIBUTO_PERCEPCIONES_IVA, $arr_tributo_full) * $multiplicador;
$importe_tributos_perc_iibb_mnes_importe = $pde_comprobante->getImporteTributoImporte(PdeTributo::TRIBUTO_PERCEPCIONES_IIBB_MNES, $arr_tributo_full) * $multiplicador;
$importe_tributos_perc_iibb_bsas_importe = $pde_comprobante->getImporteTributoImporte(PdeTributo::TRIBUTO_PERCEPCIONES_IIBB_BSAS, $arr_tributo_full) * $multiplicador;

$importe_total_comprobante_individual_sumado = $importe_subtotal_neto_gravado + $importe_subtotal_neto_no_gravado_exento + $importe_iva_importe + $importe_tributos_importe;
$importe_otros_tributos_importe = round($importe_tributos_importe - $importe_tributos_perc_iva_importe - $importe_tributos_perc_iibb_mnes_importe - $importe_tributos_perc_iibb_bsas_importe, 2);

$importe_total_comprobante = $pde_comprobante->getImporteTotal() * $multiplicador;

$importe_total_mensual_subtotal_neto_gravado += $importe_subtotal_neto_gravado;
$importe_total_mensual_subtotal_neto_no_gravado += $importe_subtotal_neto_no_gravado;
$importe_total_mensual_iva_importe += $importe_iva_importe;
$importe_total_mensual_perc_iva_importe += $importe_tributos_perc_iva_importe;
$importe_total_mensual_perc_iibb_mnes_importe += $importe_tributos_perc_iibb_mnes_importe;
$importe_total_mensual_perc_iibb_bsas_importe += $importe_tributos_perc_iibb_bsas_importe;
$importe_total_mensual_tributos_importe += $importe_tributos_importe;
$importe_total_mensual_total_comprobante += $importe_total_comprobante;
