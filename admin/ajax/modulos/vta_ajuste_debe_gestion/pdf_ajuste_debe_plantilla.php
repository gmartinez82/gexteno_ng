<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_ajuste_py.php';

// -----------------------------------------------------------------------------
// constantes de configuracion
// -----------------------------------------------------------------------------
// Datos de Cliente
define('CONST_EJE_X_CLIENTE_1ER_COL', 15);
define('CONST_EJE_X_CLIENTE_2DO_COL', 132);
// Items del Comprobante
define('CONST_EJE_X_PRODUCTO_CANTIDAD', 19);
define('CONST_EJE_X_PRODUCTO_DESCRIPCION', 30);
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
$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_id', 0);
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
$vta_ajuste_debe_items = $vta_ajuste_debe->getVtaAjusteDebeItems(null, null, true);
$vta_ajuste_debe_vta_orden_ventas = $vta_ajuste_debe->getVtaAjusteDebeVtaOrdenVentas();
$vta_punto_venta = $vta_ajuste_debe->getVtaPuntoVenta();

$cli_cliente = $vta_ajuste_debe->getCliCliente();

$gral_fp_forma_pago = $vta_ajuste_debe->getGralFpFormaPago();
$vta_tipo_ajuste_debe = $vta_ajuste_debe->getVtaTipoAjusteDebe();

//$wf_fe_param_tipo_comprobante = $vta_ajuste_debe->getWsFeParamTipoComprobante();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "AjusteDebe";
$tipo_letra = $vta_tipo_ajuste_debe->getCodigoMin();
$codigo = $vta_ajuste_debe->getCodigo();
$afip_codigo_barra = $vta_ajuste_debe->getBarcodeAFIPParaComprobante();
$afip_cae = $vta_ajuste_debe->getCae();
$afip_cae_vencimiento = $vta_ajuste_debe->getCaeVencimiento();
$afip_numero_comprobante = $vta_ajuste_debe->getNumeroComprobanteCompleto();
//$afip_codigo_tipo_comprobante = $wf_fe_param_tipo_comprobante->getCodigoAfip();
$fecha = Gral::getFechaToWEB($vta_ajuste_debe->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_ajuste_debe->getPersonaDescripcion();
$cuit = $vta_ajuste_debe->getPersonaDocumento();
$condicion_iva = "Consumidor Final";
if($cli_cliente->getId() != 'null'){
    $domicilio = $cli_cliente->getDomicilioLegal();
    $localidad = $cli_cliente->getGeoLocalidad()->getDescripcion()." (CP ".$cli_cliente->getCodigoPostal().")";
    $provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $cuit = $cli_cliente->getCuit();
    $iibb = "-";
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteAjustePy('L', 'mm', array(206, 175));
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
$pdf->setXY(CONST_EJE_X_CLIENTE_1ER_COL, $eje_y);
$pdf->Cell(1, 3, 'Fecha de Emision: ' . Gral::getFechaToWEB($vta_ajuste_debe->getFechaEmision()), 0, 1, 'L', 1);

// razon social
$pdf->setXY(CONST_EJE_X_CLIENTE_1ER_COL, ($eje_y+=$alto_fila));
$pdf->Cell(1, 3, 'Nombre o Razon Social: ' . $vta_ajuste_debe->getPersonaDescripcion(), 0, 1, 'L', 1);

// documento
$pdf->setXY(CONST_EJE_X_CLIENTE_2DO_COL, $eje_y);
$pdf->Cell(1, 3, 'C.I. o RUC: ' . $vta_ajuste_debe->getPersonaDocumento(), 0, 1, 'L', 1);

// domicilio
$pdf->setXY(CONST_EJE_X_CLIENTE_1ER_COL, ($eje_y+=$alto_fila));
$pdf->Cell(1, 3, 'Direccion: ' . $vta_ajuste_debe->getDomicilioLegal(), 0, 1, 'L', 1);

// numero de nota de remito asociada al ajuste debe
$vta_remito_ajustes_vinculados = $vta_ajuste_debe->getVtaRemitoAjustesVinculados();
foreach ($vta_remito_ajustes_vinculados as $vta_remito_ajuste_vinculado) {
    $remito_codigo = $vta_remito_ajuste_vinculado->getCodigo();
}
$pdf->setXY(CONST_EJE_X_CLIENTE_2DO_COL, $eje_y);
$pdf->Cell(1, 3, 'Nota de Remision Nro: ' . $remito_codigo, 0, 1, 'L', 1);

// -----------------------------------------------------------------------------
// Ordenes de Venta del Comprobante
// -----------------------------------------------------------------------------
$alto_fila = 10;
$eje_y = 72;
foreach($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta){
    
    $vta_orden_venta = $vta_ajuste_debe_vta_orden_venta->getVtaOrdenVenta();
    $importe_total_iva_exento_incluido = $vta_ajuste_debe_vta_orden_venta->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_EXENTO);
    $importe_total_iva_5_incluido = $vta_ajuste_debe_vta_orden_venta->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_5);
    $importe_total_iva_10_incluido = $vta_ajuste_debe_vta_orden_venta->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_10);
    
    // cantidad
    $pdf->setXY(CONST_EJE_X_PRODUCTO_CANTIDAD, $eje_y);
    //$pdf->Cell(1, 3, 123456, 0, 1, 'C', 1);//FORMATO
    $pdf->Cell(1, 3, $vta_ajuste_debe_vta_orden_venta->getCantidad(), 0, 1, 'C', 1);

    // descripcion
    $pdf->setXY(CONST_EJE_X_PRODUCTO_DESCRIPCION, $eje_y);
    $pdf->MultiCell(80, 5, $vta_orden_venta->getDescripcion(), 0, 'L', false, 1);

    // importe unitario
    $pdf->setXY(CONST_EJE_X_PRODUCTO_IMP_UNITARIO, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($vta_ajuste_debe_vta_orden_venta->getImporteUnitarioParaComprobante(), false, true, ' '), 0, 1, 'R', 1);

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
// Items del Comprobante
// -----------------------------------------------------------------------------
$alto_fila = 10;
$eje_y = 72;
foreach($vta_ajuste_debe_items as $vta_ajuste_debe_item){
    
    $importe_total_iva_exento_incluido = $vta_ajuste_debe_item->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_EXENTO);
    $importe_total_iva_5_incluido = $vta_ajuste_debe_item->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_5);
    $importe_total_iva_10_incluido = $vta_ajuste_debe_item->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_10);

    // cantidad
    $pdf->setXY(CONST_EJE_X_PRODUCTO_CANTIDAD, $eje_y);
    //$pdf->Cell(1, 3, 123456, 0, 1, 'C', 1);//FORMATO
    $pdf->Cell(1, 3, $vta_ajuste_debe_item->getCantidad(), 0, 1, 'C', 1);

    // descripcion
    $pdf->setXY(CONST_EJE_X_PRODUCTO_DESCRIPCION, $eje_y);
    $pdf->MultiCell(80, 5, $vta_ajuste_debe_item->getDescripcion(), 0, 'L', false, 1);

    // importe unitario
    $pdf->setXY(CONST_EJE_X_PRODUCTO_IMP_UNITARIO, $eje_y);
    //$pdf->Cell(1, 3, Gral::_echoImp(123456789, false, true, ' '), 0, 1, 'R', 1);//FORMATO
    $pdf->Cell(1, 3, Gral::_echoImp($vta_ajuste_debe_item->getImporteUnitarioParaComprobante(), false, true, ' '), 0, 1, 'R', 1);

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
$importe_iva_exento = $vta_ajuste_debe->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_EXENTO);
$importe_iva_5 = $vta_ajuste_debe->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_5);
$importe_iva_10 = $vta_ajuste_debe->getImporteTotalPorTipoIVA(GralTipoIva::TIPO_10);
$total = $vta_ajuste_debe->getVtaAjusteDebeTotal();

$eje_y = 119.8;
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

// total en letras
$eje_y = 128;
$pdf->setXY(CONST_EJE_X_CLIENTE_1ER_COL, $eje_y);
//$pdf->MultiCell(130, 5, ucfirst(strtolower(Gral::numtoletras(444444444))), 0, 'L', false, 1);//FORMATO
$pdf->MultiCell(130, 5, Gral::getNumeroEscritoEnLetras($total), 0, 'L', false, 1);

// total en numeros
$eje_y = 128.5;
$pdf->setXY(CONST_EJE_X_TOTALIZADOR_TOTAL, $eje_y);
//$pdf->Cell(1, 3, Gral::_echoImp(987654321, false, true, ' '), 0, 1, 'R', 1);//FORMATO
$pdf->Cell(1, 3, Gral::_echoImp($total, false, true, ' '), 0, 1, 'R', 1);

$importe_iva = $vta_ajuste_debe->getImporteIvaImporte(false, false);
$importe_iva_10 = $vta_ajuste_debe->getImporteIvaImporte(GralTipoIva::TIPO_10, false);
$importe_iva_5 = $vta_ajuste_debe->getImporteIvaImporte(GralTipoIva::TIPO_5, false);

$eje_y = 138.6;
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
