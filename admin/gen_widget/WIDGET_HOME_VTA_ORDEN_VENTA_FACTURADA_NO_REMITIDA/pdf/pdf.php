<?php
include_once '_autoload.php';
include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_interno_min.php';

$widget_key = 'vta_orden_venta_facturada_no_remitida';
$widget_codigo = 'WIDGET_HOME_VTA_ORDEN_VENTA_FACTURADA_NO_REMITIDA';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
$txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
$widget_cmb_gral_sucursal_id   = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_gral_sucursal_id', 0);
$widget_cmb_vta_presupuesto_tipo_venta_id   = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_vta_presupuesto_tipo_venta_id', 0);
$txt_desde = Gral::getFechaToDb($txt_desde);
$txt_hasta = Gral::getFechaToDb($txt_hasta);

// -----------------------------------------------------------------------------
// Consulta
// -----------------------------------------------------------------------------
$vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentasFacturadasNoRemitidas($txt_desde, $txt_hasta, $widget_cmb_gral_sucursal_id, $widget_cmb_vta_presupuesto_tipo_venta_id);
//Gral::prr($vta_orden_ventas);
//exit;

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteInternoMin('L');
$pdf->SetTitle(DbConfig::CONFIG_CONF_PROYECTO_MIN.'-OV-Facturadas-No-Remitidas.pdf');

$pdf->setTitulo('OV Facturadas No Remitidas');
$pdf->setSubtitulo('Reporte de Ordenes de Venta');
$pdf->setObservacion('Generado el '.date('d/m/Y').'  a las '.date('H:i:s'));
$pdf->setUsuario('setUsuario');

$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);
//$pdf->setUsuario($user);

$pdf->setX(0);
$pdf->setY(32);

$pdf->SetMargins(10, 32, 10, true);
$pdf->SetAutoPageBreak(TRUE, 30);

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'vta_orden_ventas' => $vta_orden_ventas,
);
$archivo = "pdf_cuerpo.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);

$pdf->Output(DbConfig::CONFIG_CONF_PROYECTO_MIN.'-OV-Facturadas-No-Remitidas.pdf', 'I');
