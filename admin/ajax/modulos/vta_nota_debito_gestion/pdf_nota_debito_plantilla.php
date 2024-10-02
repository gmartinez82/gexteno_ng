<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_afip_py.php';

// -----------------------------------------------------------------------------
// constantes de configuracion
// -----------------------------------------------------------------------------
// Datos de Cliente
define('CONST_EJE_X_CLIENTE_1ER_COL', 15);
define('CONST_EJE_X_CLIENTE_2DO_COL', 132);
// Items del Comprobante
define('CONST_EJE_X_PRODUCTO_CANTIDAD', 19);
define('CONST_EJE_X_PRODUCTO_DESCRIPCION', 32);
define('CONST_EJE_X_PRODUCTO_IMP_UNITARIO', 128);
define('CONST_EJE_X_PRODUCTO_EXENTO', 150);
define('CONST_EJE_X_PRODUCTO_IVA_5', 171);
define('CONST_EJE_X_PRODUCTO_IVA_10', 194.5);
// Datos Totalizadores
define('CONST_EJE_X_TOTALIZADOR_TOTAL', 190);
define('CONST_EJE_X_TOTALIZADOR_LIQ_IVA_5', 62);
define('CONST_EJE_X_TOTALIZADOR_LIQ_IVA_10', 116);
define('CONST_EJE_X_TOTALIZADOR_TOTAL_LIQ_IVA', 173);
$alto_fila = 5;

// -----------------------------------------------------------------------------
// Obtencion de Datos
// -----------------------------------------------------------------------------
$vta_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_debito_id', 0);
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
$vta_punto_venta = $vta_nota_debito->getVtaPuntoVenta();

$vta_nota_debito_items = $vta_nota_debito->getVtaNotaDebitoItems();

$cli_cliente = $vta_nota_debito->getCliCliente();

//$gral_fp_forma_pago = $vta_nota_debito->getGralFpFormaPago();
$vta_tipo_nota_debito = $vta_nota_debito->getVtaTipoNotaDebito();

$wf_fe_param_tipo_comprobante = $vta_nota_debito->getWsFeParamTipoComprobante();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Nota de Debito";
$tipo_letra = $vta_tipo_nota_debito->getCodigoMin();
$codigo = $vta_nota_debito->getCodigo();
//$afip_codigo_barra = $vta_nota_debito->getBarcodeAFIPParaComprobante();
$afip_cae = $vta_nota_debito->getCae();
$afip_cae_vencimiento = $vta_nota_debito->getCaeVencimiento();
$afip_numero_comprobante = $vta_nota_debito->getNumeroComprobanteCompleto();
//$afip_codigo_tipo_comprobante = $wf_fe_param_tipo_comprobante->getCodigoAfip();
$fecha = Gral::getFechaToWEB($vta_nota_debito->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_nota_debito->getPersonaDescripcion();
$condicion_iva = "Consumidor Final";
if($cli_cliente->getId() != 'null'){
    $cliente = $cli_cliente->getId() . ' - ' . $cli_cliente->getRazonSocial();
    $domicilio = $cli_cliente->getDomicilioLegal();
    $localidad = $cli_cliente->getGeoLocalidad()->getDescripcion()." (CP ".$cli_cliente->getCodigoPostal().")";
    $provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $cuit = $cli_cliente->getCuit();
    $iibb = "-";
    $telefono = $cli_cliente->getTelefono();
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteAfipPy('L', 'mm', array(206, 175));
//$pdf->setPrintHeader(false);
//$pdf->setPrintFooter(false);

// -----------------------------------------------------------------------------
// Configuracion PDF
// -----------------------------------------------------------------------------
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);

$pdf->setX(0);
$pdf->setY(0);

$pdf->SetMargins(0, 0, 0, true);
//$pdf->SetAutoPageBreak(TRUE, 50);

$pdf->SetFont('Helvetica', '', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(255, 0, 0);

// -----------------------------------------------------------------------------
// Datos de Cliente
// -----------------------------------------------------------------------------
$eje_y = 47;
// fecha emision
$arr_fecha = Date::getArrFecha($vta_nota_debito->getFechaEmision());
$pdf->setXY(CONST_EJE_X_CLIENTE_1ER_COL, $eje_y);
$pdf->Cell(1, 3, $arr_fecha['dia'], 0, 1, 'L', 1);
$pdf->setXY(33, $eje_y);
$pdf->Cell(1, 3, $arr_fecha['mes'], 0, 1, 'L', 1);
$pdf->setXY(113, $eje_y);
$pdf->Cell(1, 3, $arr_fecha['anio'], 0, 1, 'L', 1);

// razon social
$pdf->setXY(CONST_EJE_X_CLIENTE_1ER_COL, ($eje_y+=$alto_fila));
$pdf->Cell(1, 3, $vta_nota_debito->getPersonaDescripcion(), 0, 1, 'L', 1);

// documento
$pdf->setXY(CONST_EJE_X_CLIENTE_2DO_COL, $eje_y);
$pdf->Cell(1, 3, $vta_nota_debito->getPersonaDocumento(), 0, 1, 'L', 1);

// domicilio
$pdf->setXY(CONST_EJE_X_CLIENTE_1ER_COL, ($eje_y+=$alto_fila));
$pdf->Cell(1, 3, $vta_nota_debito->getDomicilioLegal(), 0, 1, 'L', 1);

// numero factura asociada a la nota de debito
$vta_nota_debito_vta_nota_creditos = $vta_nota_debito->getVtaNotaDebitoVtaNotaCreditos(null, null, true);
foreach ($vta_nota_debito_vta_nota_creditos as $vta_nota_debito_vta_nota_credito) {
    $siglas = $vta_nota_debito_vta_nota_credito->getVtaNotaCredito()->getTipoComprobanteSiglas();
    $numero_factura = $vta_nota_debito_vta_nota_credito->getVtaNotaCredito()->getNumeroNotaCreditoCompleto();  
}
$pdf->setXY(CONST_EJE_X_CLIENTE_2DO_COL, $eje_y);
$pdf->Cell(1, 3, $siglas . ' ' . $numero_factura, 0, 1, 'L', 1);

// -----------------------------------------------------------------------------
// Items del Comprobante
// -----------------------------------------------------------------------------
$eje_y = 72;
foreach($vta_nota_debito_items as $vta_nota_debito_item){
    
    $importe_total_iva_exento_incluido = $vta_nota_debito_item->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_EXENTO);
    $importe_total_iva_5_incluido = $vta_nota_debito_item->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_5);
    $importe_total_iva_10_incluido = $vta_nota_debito_item->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_10);
    
    // cantidad
    $pdf->setXY(CONST_EJE_X_PRODUCTO_CANTIDAD, $eje_y);
    //$pdf->Cell(1, 3, 1234, 0, 1, 'C', 1);//FORMATO
    $pdf->Cell(1, 3, $vta_nota_debito_item->getCantidad(), 0, 1, 'C', 1);
    
    // descripcion
    $pdf->setXY(CONST_EJE_X_PRODUCTO_DESCRIPCION, $eje_y);
    if(strlen($vta_nota_debito_item->getDescripcion()) > 45) {
        $pdf->Cell(1, 3, substr($vta_nota_debito_item->getDescripcion(), 0, 45) . '...', 0, 1, 'L', 1);
    } else {
        $pdf->Cell(1, 3, $vta_nota_debito_item->getDescripcion(), 0, 1, 'L', 1);
    }
    
    // importe unitario
    $pdf->setXY(CONST_EJE_X_PRODUCTO_IMP_UNITARIO, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($vta_nota_debito_item->getImporteUnitarioParaComprobante(), false, true, ' '), 0, 1, 'R', 1);
    
    // valor de venta exento
    if($importe_total_iva_exento_incluido > 0){
        $pdf->setXY(CONST_EJE_X_PRODUCTO_EXENTO, $eje_y);
        //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
        $pdf->Cell(1, 3, Gral::_echoImp($importe_total_iva_exento_incluido, false, true, ' '), 0, 1, 'R', 1);
    }
    
    // valor de venta iva 5%
    if($importe_total_iva_5_incluido > 0){
        $pdf->setXY(CONST_EJE_X_PRODUCTO_IVA_5, $eje_y);
        //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
        $pdf->Cell(1, 3, Gral::_echoImp($importe_total_iva_5_incluido, false, true, ' '), 0, 1, 'R', 1);
    }
    
    // valor de venta iva 10%
    if($importe_total_iva_10_incluido > 0){
        $pdf->setXY(CONST_EJE_X_PRODUCTO_IVA_10, $eje_y);
        //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
        $pdf->Cell(1, 3, Gral::_echoImp($importe_total_iva_10_incluido, false, true, ' '), 0, 1, 'R', 1);
    }
    
    $eje_y = $eje_y + $alto_fila;
}

// -----------------------------------------------------------------------------
// Datos Totalizadores
// -----------------------------------------------------------------------------
$importe_iva_exento = $vta_nota_debito->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_EXENTO);
$importe_iva_5 = $vta_nota_debito->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_5);
$importe_iva_10 = $vta_nota_debito->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_10);

$eje_y = 120;
// total valor de venta exento
if($importe_iva_exento > 0){
    $pdf->setXY(CONST_EJE_X_PRODUCTO_EXENTO, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($importe_iva_exento, false, true, ' '), 0, 1, 'R', 1);
}

// total valor de venta iva 5%
if($importe_iva_5 > 0){
    $pdf->setXY(CONST_EJE_X_PRODUCTO_IVA_5, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($importe_iva_5, false, true, ' '), 0, 1, 'R', 1);
}

// total valor de venta iva 10%
if($importe_iva_10 > 0){
    $pdf->setXY(CONST_EJE_X_PRODUCTO_IVA_10, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($importe_iva_10, false, true, ' '), 0, 1, 'R', 1);
}

// total
$eje_y = 128.5;
$pdf->setXY(CONST_EJE_X_TOTALIZADOR_TOTAL, $eje_y);
//$pdf->Cell(1, 3, Gral::_echoImp(987654321, false, true, ' '), 0, 1, 'R', 1);//FORMATO
$pdf->Cell(1, 3, Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoTotal(), false, true, ' '), 0, 1, 'R', 1);

$importe_iva = $vta_nota_debito->getImporteIvaImporte(false, false);
$importe_iva_10 = $vta_nota_debito->getImporteIvaImporte(GralTipoIva::TIPO_10, false);
$importe_iva_5 = $vta_nota_debito->getImporteIvaImporte(GralTipoIva::TIPO_5, false);

$eje_y = 138.5;
// total liquidacion iva 5%
if($importe_iva_5 > 0){
    $pdf->setXY(CONST_EJE_X_TOTALIZADOR_LIQ_IVA_5, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(147258369, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($importe_iva_5, false, true, ' '), 0, 1, 'R', 1);
}

// total liquidacion iva 10%
if($importe_iva_10 > 0){
    $pdf->setXY(CONST_EJE_X_TOTALIZADOR_LIQ_IVA_10, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(147258369, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($importe_iva_10, false, true, ' '), 0, 1, 'R', 1);
}

// total liquidacion iva
if($importe_iva > 0){
    $pdf->setXY(CONST_EJE_X_TOTALIZADOR_TOTAL_LIQ_IVA, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(147258369, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($importe_iva, false, true, ' '), 0, 1, 'R', 1);
}