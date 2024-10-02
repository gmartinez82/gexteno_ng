<?php
/*
 * Impresion de Etiquetas con TCPDF y barcode C39
 */

include "_autoload.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo = InsInsumo::getOxId($id);

$cantidad = Gral::getVars(2, 'cantidad', 1);

include Gral::getPathAbs() . 'comps/tcpdf/tcpdf.php';

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new TCPDF('L', 'mm', array(35, 100));
$pdf = new TCPDF('L', 'mm', array(29, 90));
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetMargins(0, 0);
$pdf->SetAutoPageBreak(true, 0); //margen inferior

for ($i = 1; $i <= $cantidad; $i++) {    
    $pdf->AddPage('L');
    
    $id = $ins_insumo->getId();
    $codigo = $ins_insumo->getCodigoBarraInterno();
    $codigo_interno = $ins_insumo->getCodigoInterno();
    $codigo_barra_numerico = str_replace(InsInsumo::PREFIJO_INSUMO_BARCODE,'', $codigo);
    $codigo_barra_numerico = substr($codigo_barra_numerico, -6);
    
    //$codigo_barra_numerico = 33011;
    
    // -------------------------------------------------------------------------
    // logo empresa
    // -------------------------------------------------------------------------
    $pdf->Image(Gral::getPathAbs().DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA, 3, 1, 30);
    
    // -------------------------------------------------------------------------
    // codigo interno 
    // -------------------------------------------------------------------------
    $pdf->SetFont('dejavusans', 'B', 14);    
    $pdf->setXY(45, 0);
    $pdf->Cell(40, 13, $codigo, 0, 1, 'R', false);
    
    // -------------------------------------------------------------------------
    // descripcion corta
    // -------------------------------------------------------------------------
    $pdf->setXY(5, 10);
    $pdf->SetFont('dejavusans', '', 8);    
    $pdf->MultiCell('80%', 4, $ins_insumo->getDescripcionCorta(), 0, 'C', false);

    // -------------------------------------------------------------------------
    // barcode
    // -------------------------------------------------------------------------
    $style = array(
        'text' => true,
        'font' => 'dejavusans',
        'fontsize' => 6,
    );    
    $pdf->write1DBarcode($codigo_barra_numerico, 'C39', 7, 18, 80, 10, 0.6, $style, 'N');
}

$pdf->Output(Gral::getConfig('conf_proyecto_min').'_Etiquetas_'.$codigo_barra_numerico, 'I');
