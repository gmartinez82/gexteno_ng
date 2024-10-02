<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$id = Gral::getVars(Gral::VARS_GET, 'id', 0, Gral::TIPO_INTEGER);
$hash = Gral::getVars(Gral::VARS_GET, 'hash', '-', Gral::TIPO_STRING);

$vta_vendedor = VtaVendedor::getOxId($id);

if(!$vta_vendedor){
    echo 'No se reconoce el vendedor';
    exit;
}

if($vta_vendedor->getHash() != $hash){
    echo 'No se reconoce el hash del vendedor';
    exit;
}

include Gral::getPathAbs() . 'comps/tcpdf/tcpdf.php';

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new TCPDF('L', 'mm', array(100, 100));
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetMargins(0, 0);
$pdf->SetAutoPageBreak(true, 0); //margen inferior
$pdf->AddPage('L');

$url = Gral::getPathHttpTienda().'mods/vendedores/valoracion.php?id='.$vta_vendedor->getId().'&hash='.$vta_vendedor->getHash();

// -------------------------------------------------------------------------
// logo empresa
// -------------------------------------------------------------------------
$pdf->Image(Gral::getPathAbs().DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA, 30, 8, 30);

// -------------------------------------------------------------------------
// descripcion
// -------------------------------------------------------------------------
$pdf->setXY(5, 20);
$pdf->SetFont('dejavusans', 'B', 18);    
$pdf->MultiCell('90%', 4, $vta_vendedor->getDescripcion(), 0, 'C', false);
    
// -------------------------------------------------------------------------
// qrcode
// -------------------------------------------------------------------------
$style = array(
    'border' => 2,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    //'fgcolor' => array(250, 2, 1),
    'fgcolor' => array(0, 0, 0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);

$pdf->write2DBarcode($url, 'QRCODE,L', 25, 30, 50, 50, $style, 'N');
    
// -------------------------------------------------------------------------
// texto
// -------------------------------------------------------------------------
$pdf->setXY(5, 83);
$pdf->SetFont('dejavusans', '', 11);    
$pdf->MultiCell('90%', 4, 'Califica tu experiencia del vendedor', 0, 'C', false);

// -------------------------------------------------------------------------
// enlace
// -------------------------------------------------------------------------
$pdf->setXY(5, 90);
$pdf->SetFont('dejavusans', '', 7);    
$pdf->MultiCell('90%', 4, $url, 0, 'C', false);
$pdf->Link(5, 90, 90, 6, rawurldecode($url));

$pdf->Output(Gral::getConfig('conf_proyecto_min').'_Vendedor_'.$vta_vendedor->getCodigo().'_QR', 'I');
