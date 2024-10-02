<?php
/*
 * Impresion de Etiquetas con FPDF y barcode EAN13
 */

include "_autoload.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo = InsInsumo::getOxId($id);

$cantidad = Gral::getVars(2, 'cantidad', 1);

include Gral::getPathAbs() . 'comps/fpdf/fpdf.php';

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new FPDF('P', 'mm', array(100,35));
$pdf->SetMargins(0, 0);
$pdf->SetAutoPageBreak(true, 0); //margen inferior

for ($i = 1; $i <= $cantidad; $i++) {    
    $pdf->AddPage('P');
    
    $codigo = $ins_insumo->getCodigoBarraInterno();

    $pdf->Image(Gral::getPathAbs().DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA, 5, 1, 30);
    
    $pdf->SetFont('Arial', 'B', 14);    
    $pdf->setXY(45, 0);
    $pdf->Cell(50, 13, $codigo, 0, 1, 'R', false);
    
    $pdf->setXY(5, 11);
    $pdf->SetFont('Arial', '', 10);    
    $pdf->MultiCell('90%', 4, $ins_insumo->getDescripcionCorta(), 0, 1, 'C', false);
    
    $pdf->EAN13(6, 20, $codigo, 9, .9);
    
}

$pdf->Output(Gral::getConfig('conf_proyecto_min').'_Etiquetas', 'I');
?>