<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_remito_py.php';

// -----------------------------------------------------------------------------
// constantes de configuracion
// -----------------------------------------------------------------------------
// Items del Comprobante
define('CONST_EJE_X_PRODUCTO_CANTIDAD', 31);
define('CONST_EJE_X_PRODUCTO_CONTADOR', 46);
define('CONST_EJE_X_PRODUCTO_1ER_SEPARADOR', 54);
define('CONST_EJE_X_PRODUCTO_CODIGO', 57);
define('CONST_EJE_X_PRODUCTO_2DO_SEPARADOR', 77.5);
define('CONST_EJE_X_PRODUCTO_DESCRIPCION', 81);

// -----------------------------------------------------------------------------
// Obtencion de Datos
// -----------------------------------------------------------------------------
$vta_remito_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_id', 0);
if($vta_remito_id != 0){
    $vta_remito = VtaRemito::getOxId($vta_remito_id);
}

$cli_cliente = $vta_remito->getCliCliente();

$vta_remito_vta_orden_ventas = $vta_remito->getVtaRemitoVtaOrdenVentas();
$pan_panol = $vta_remito->getPanPanol();
$geo_localidad = $pan_panol->getGeoLocalidad();
$gral_empresa_transportadora = $vta_remito->getGralEmpresaTransportadora();

// se obtiene el estado despachado solamente si lo tiene
$vta_remito_estado_despachado = $vta_remito->getVtaRemitoEstadoXCodigoDeVtaRemitoTipoEstado(VtaRemitoTipoEstado::TIPO_DESPACHADO);

$user = UsUsuario::autenticado();

$vta_presupuesto = $vta_remito->getVtaPresupuesto();
if($vta_presupuesto->getId() != 'null'){
    $vendedor = $vta_presupuesto->getVtaVendedorId();
}

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Remito";
$tipo_letra = "X";
$codigo = $vta_remito->getCodigo();
$fecha = Gral::getFechaToWEB($vta_remito->getFecha());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_remito->getPersonaDescripcion();
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
$pdf = new PDFComprobanteAfipPy('P', 'mm', array(200, 210));
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

$pdf->SetFont('Helvetica', '', 7);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(255, 0, 0);

// -----------------------------------------------------------------------------
// Datos de Cliente
// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
// 1° COLUMNA
// -----------------------------------------------------------------------------
$vta_facturas_vinculadas = $vta_remito->getVtaFacturasVinculadas();
foreach ($vta_facturas_vinculadas as $vta_factura_vinculada) {
    $factura_codigo = $vta_factura_vinculada->getNumeroComprobanteCompleto();
    $factura_fecha = $vta_factura_vinculada->getFechaEmision();
    $gral_fp_forma_pago = $vta_factura_vinculada->getGralFpFormaPago();
}

if($cli_cliente->getId() != 'null'){
    // razon social
    $pdf->setXY(49.5, 40);
    $pdf->Cell(1, 3, $cli_cliente->getRazonSocial(), 0, 1, 'L', 1);

    // domicilio
    $pdf->setXY(33, 45);
    $pdf->Cell(1, 3, $cli_cliente->getDomicilioLegal().' - Tel '.$cli_cliente->getTelefono(), 0, 1, 'L', 1);
}

// numero de factura asociado a la nota de remito
$pdf->setXY(52, 52.7);
$pdf->Cell(1, 3, $factura_codigo, 0, 1, 'L', 1);

// fecha expedicion
$pdf->setXY(46, 57);
$pdf->Cell(1, 3, Gral::getFechaToWEB($factura_fecha), 0, 1, 'L', 1);

// direccion partida
$pdf->setXY(57, 65);
$pdf->Cell(1, 3, $pan_panol->getDomicilio(), 0, 1, 'L', 1);

// localidad partida
$pdf->setXY(30, 69);
$pdf->Cell(1, 3, $geo_localidad->getDescripcion(), 0, 1, 'L', 1);

// provincia partida
$pdf->setXY(110, 68);
$pdf->Cell(1, 3, $geo_localidad->getGeoProvincia()->getDescripcion(), 0, 1, 'L', 1);

if($cli_cliente->getId() != 'null'){
    // direccion llegada
    $pdf->setXY(57, 73.2);
    $pdf->Cell(1, 3, $cli_cliente->getDomicilioLegal(), 0, 1, 'L', 1);

    // localidad llegada
    $pdf->setXY(30, 77.5);
    $pdf->Cell(1, 3, $cli_cliente->getGeoLocalidad()->getDescripcion(), 0, 1, 'L', 1);

    // provincia llegada
    $pdf->setXY(110, 77);
    $pdf->Cell(1, 3, $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion(), 0, 1, 'L', 1);
}

if($gral_empresa_transportadora->getId() != 'null'){
    // empresa transportadora razon social
    $pdf->setXY(64, 118);
    $pdf->Cell(1, 3, $gral_empresa_transportadora->getDescripcion(), 0, 1, 'L', 1);

    // empresa transportadora domicilio
    $pdf->setXY(34, 121.3);
    $pdf->Cell(1, 3, $gral_empresa_transportadora->getDomicilio(), 0, 1, 'L', 1);

    // empresa transportadora documento
    $pdf->setXY(156, 118);
    $pdf->Cell(1, 3, $gral_empresa_transportadora->getDocumento(), 0, 1, 'L', 1);
}

// -----------------------------------------------------------------------------
// 2° COLUMNA
// -----------------------------------------------------------------------------
// fecha emision
$pdf->setXY(166, 36);
$pdf->Cell(1, 3, Gral::getFechaToWEB($vta_remito->getFecha()), 0, 1, 'L', 1);

// documento
$pdf->setXY(153.5, 40.5);
$pdf->Cell(1, 3, $cli_cliente->getCuit(), 0, 1, 'L', 1);

// forma de pago
if($gral_fp_forma_pago){
    $pdf->setXY(169, 51.5);
    $pdf->Cell(1, 3, $gral_fp_forma_pago->getDescripcion(), 0, 1, 'L', 1);
}

// -----------------------------------------------------------------------------
// Ordenes de Venta del Comprobante
// -----------------------------------------------------------------------------
$alto_fila = 5;
$eje_y = 132;
$cont = 1;
foreach($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta){

    $vta_orden_venta = $vta_remito_vta_orden_venta->getVtaOrdenVenta();
    
    // cantidad
    $pdf->setXY(CONST_EJE_X_PRODUCTO_CANTIDAD, $eje_y);
    //$pdf->Cell(1, 3, 123456, 0, 1, 'C', 1);//FORMATO
    $pdf->Cell(1, 3, $vta_orden_venta->getCantidad(), 0, 1, 'C', 1);
    
    // contador
    $pdf->setXY(CONST_EJE_X_PRODUCTO_CONTADOR, $eje_y);
    //$pdf->Cell(1, 3, 123, 0, 1, 'L', 1);//FORMATO
    $pdf->Cell(1, 3, '# '.$cont, 0, 1, 'L', 1);
        
    // codigo
    $pdf->setXY(CONST_EJE_X_PRODUCTO_CODIGO, $eje_y);
    //$pdf->Cell(1, 3, 123456, 0, 1, 'L', 1);//FORMATO
    $pdf->Cell(1, 3, $vta_orden_venta->getInsInsumo()->getCodigoInterno(), 0, 1, 'L', 1);
    
    // descripcion
    $pdf->setXY(CONST_EJE_X_PRODUCTO_DESCRIPCION, $eje_y);
    $pdf->Cell(1, 3, $vta_orden_venta->getDescripcion(), 0, 1, 'L', 1);
    
    $cont++;
    $eje_y = $eje_y + $alto_fila;
}
