<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_ticket_kude.php';

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);
$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentas();
$vta_punto_venta = $vta_factura->getVtaPuntoVenta();

$cli_cliente = $vta_factura->getCliCliente();

$gral_fp_forma_pago = $vta_factura->getGralFpFormaPago();
$vta_tipo_factura = $vta_factura->getVtaTipoFactura();

$wf_fe_param_tipo_comprobante = $vta_factura->getWsFeParamTipoComprobante();

$user = UsUsuario::autenticado();

$vta_presupuesto = $vta_factura->getVtaPresupuesto();
if ($vta_presupuesto) {
    $vendedor = $vta_presupuesto->getVtaVendedorId();
}

$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentas(null, null, true);
$vta_factura_items = $vta_factura->getVtaFacturaItems(null, null, true);

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Factura";
$tipo_letra = $vta_tipo_factura->getCodigoMin();
$codigo = $vta_factura->getCodigo();
$afip_codigo_barra = $vta_factura->getBarcodeAFIPParaComprobante();
$afip_cae = $vta_factura->getCae();
$afip_cae_vencimiento = $vta_factura->getCaeVencimiento();
$afip_numero_comprobante = $vta_factura->getNumeroComprobanteCompleto();
if($wf_fe_param_tipo_comprobante){
    $afip_codigo_tipo_comprobante = $wf_fe_param_tipo_comprobante->getCodigoAfip();
}
$fecha = Gral::getFechaToWEB($vta_factura->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_factura->getPersonaDescripcion();
$cuit = $vta_factura->getPersonaDocumento();
$condicion_iva = "Consumidor Final";
if ($cli_cliente->getId() != 'null') {
    $cliente = $cli_cliente->getId() . ' - ' . $cli_cliente->getRazonSocial();
    $domicilio = $cli_cliente->getDomicilioLegal();
    $localidad = $cli_cliente->getGeoLocalidad()->getDescripcion() . " (CP " . $cli_cliente->getCodigoPostal() . ")";
    $provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion() . " - " . $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $cuit = $cli_cliente->getCuit();
    $iibb = "-";
    $telefono = $cli_cliente->getTelefono();
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFTicketKude('P', 'mm', array(80, 220 + (count($vta_factura_vta_orden_ventas) * 5)));
$pdf->SetTitle($vta_factura->getNombreArchivoAdjuntoFactura());

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);
$pdf->setVendedor($vendedor);
$pdf->setPuntoVentaLocalidad($vta_punto_venta->getGeoLocalidad()->getDescripcionFull($incluir_pais = false));
$pdf->setPuntoVentaDomicilio($vta_punto_venta->getDomicilioFiscal());

$pdf->setCliente($cliente);
$pdf->setDomicilio($domicilio);
$pdf->setLocalidad($localidad);
$pdf->setProvincia($provincia);
$pdf->setCondicionIva($condicion_iva);
$pdf->setCUIT($cuit);
$pdf->setIIBB($iibb);
$pdf->setTelefono($telefono);

//$pdf->setAfipCodigoBarra($afip_codigo_barra);
//$pdf->setAfipCae($afip_cae);
//$pdf->setAfipCaeVencimiento($afip_cae_vencimiento);
//$pdf->setNumeroComprobante($afip_numero_comprobante);
//$pdf->setAfipCodigoTipoComprobante($afip_codigo_tipo_comprobante);

//$pdf->setAfipComprobanteUrlQR($vta_factura->getAfipComprobanteUrlQR());


$pdf->AddFont('DejaVuSans', '', Gral::getPathAbs().'comps/tcpdf/fonts/dejavusans.php');
$pdf->AddFont('DejaVuSansCondensed', '', Gral::getPathAbs().'comps/tcpdf/fonts/dejavusanscondensed.php');

// -----------------------------------------------------------------------------
// Se crea pagina y margenes
// -----------------------------------------------------------------------------
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 11);


//$pdf->SetMargins(1, 1, 1, true);
// -----------------------------------------------------------------------------
// Productos
// -----------------------------------------------------------------------------

$x = 3;
$y = 117;
$y_alto = 4;
$line_x = 3;
$line_y = 70;

$pdf->setXY($x, $y += $y_alto);
$pdf->Cell(1, 3, 'Productos', 0, 1, 'L', 0);

// -----------------------------------------------------------------------------
// Cabeceras de Productos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', 'B', 7);

$pdf->setXY($x, $y += $y_alto + 2);
$pdf->Cell(1, 3, 'Cant', 0, 1, 'L', 0);

$pdf->setXY($x + 10, $y);
$pdf->Cell(1, 3, 'Descripcion', 0, 1, 'L', 0);

if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
    $pdf->setXY($x + 43, $y);
    $pdf->Cell(1, 3, 'IVA', 0, 1, 'L', 0);
}
    
$pdf->setXY($x + 65, $y);
$pdf->Cell(1, 3, 'Neto', 0, 1, 'R', 0);


// -----------------------------------------------------------------------------
// Listado de Productos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);

foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
    $ins_insumo = $vta_factura_vta_orden_venta->getInsInsumo();
    $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();
    $importe_total = $vta_factura_vta_orden_venta->getImporteTotalParaComprobante();

    $pdf->setXY($x, $y = $y + $y_alto + 0);
    $pdf->Cell(1, 3, $vta_factura_vta_orden_venta->getCantidad(), 0, 1, 'L', 0);

    $pdf->setXY($x + 10, $y);
    $pdf->Cell(1, 3, substr(($vta_factura_vta_orden_venta->getDescripcion()), 0, 20), 0, 1, 'L', 0);

    if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
        $pdf->setXY($x + 43, $y);
        $pdf->Cell(1, 3, $gral_tipo_iva->getValorIva(), 0, 1, 'L', 0);
    }
    
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($importe_total, false, true), 0, 1, 'R', 0);
}


// -----------------------------------------------------------------------------
// Subtotal
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);

if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
    // label
    $pdf->setXY($x, $y += $y_alto + 4);
    $pdf->Cell(1, 3, 'Subtotal Gravado', 0, 1, 'L', 0);

    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO), false, true), 0, 1, 'R', 0);
    
    // label
    $pdf->setXY($x, $y += $y_alto + 0);
    $pdf->Cell(1, 3, 'Subtotal No Gravado', 0, 1, 'L', 0);

    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO), false, true), 0, 1, 'R', 0);
    
    // label
    $pdf->setXY($x, $y += $y_alto + 0);
    $pdf->Cell(1, 3, 'Subtotal Exento', 0, 1, 'L', 0);
    
    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_EXENTO), false, true), 0, 1, 'R', 0);
}
else {
    // label
    $pdf->setXY($x, $y += $y_alto + 4);
    //$pdf->Cell(1, 3, 'Subtotal Gravado', 0, 1, 'L', 0);
    $pdf->Cell(1, 3, 'Subtotal', 0, 1, 'L', 0);
    
    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotalParaComprobante(), false, true), 0, 1, 'R', 0);
}

// -----------------------------------------------------------------------------
// IVA
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);
if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
    /*foreach ($vta_factura->getArrIvaParaCitiFacturaFull() as $iva_tipo => $arr_iva_uno) {
        // label
        $pdf->setXY($x, $y += $y_alto + 0);
        $pdf->Cell(1, 3, $arr_iva_uno['descripcion'], 0, 1, 'L', 0);

        // dato
        $pdf->setXY($x + 65, $y);
        $pdf->Cell(1, 3, Gral::_echoImp($arr_iva_uno['importe_iva'], false, true), 0, 1, 'R', 0);
    }*/
}

// -----------------------------------------------------------------------------
// Tributos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);
foreach ($vta_factura->getArrVtaTributosAplicados() as $vta_tributo_id => $arr_tributo) {
    // label
    $pdf->setXY($x, $y += $y_alto + 0);
    $pdf->Cell(1, 3, $arr_tributo['vta_tributo_descripcion'], 0, 1, 'L', 0);

    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($arr_tributo['importe'], false, true), 0, 1, 'R', 0);
}

// -----------------------------------------------------------------------------
// Total
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', 'B', 8);

// label
$pdf->setXY($x, $y += $y_alto + 4);
$pdf->Cell(1, 3, 'Total', 0, 1, 'L', 0);

// dato
$pdf->setXY($x + 65, $y);
$pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaTotal(), false, true), 0, 1, 'R', 0);


$style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
// -------------------------------------------------------------------------------------------
$pdf->Line($line_x, $y += $y_alto + 6, $x + $line_y, $y, 'D', array('all' => $style_line));
?>
