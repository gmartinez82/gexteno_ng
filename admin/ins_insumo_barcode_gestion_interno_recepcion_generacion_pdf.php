<?php

include "_autoload.php";

$pde_recepcion_id = Gral::getVars(2, 'pde_recepcion_id', 0);
$cantidad         = Gral::getVars(2, 'cantidad', 1);

$pde_recepcion = PdeRecepcion::getOxId($pde_recepcion_id);
if($pde_recepcion)
{
    $ins_insumo = InsInsumo::getOxId($pde_recepcion->getInsInsumoId());

    $fecha_recepcion = Gral::getFechaToWEB($pde_recepcion->getFechaEntrega());
    $costo_en_letras = Gral::getNumeroEnLetrasCodificadoPorPalabraClave($pde_recepcion->getImporteUnidad());
    $proveedor_id    = $pde_recepcion->getPrvProveedorId();
}




//header('Content-Disposition: attachment; filename="epl.txt"');
//echo $ins_insumo->getBarcodeInternoCodigoEPL($cantidad);

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
    
    $pdf->Image('imgs/logos/logo_horizontal_fondo_blanco.png', 5, 1, 30);
    
    $pdf->SetFont('Arial', 'B', 14);    
    $pdf->setXY(45, 0);
    $pdf->Cell(50, 13, $ins_insumo->getCodigoInterno(), 0, 1, 'R', false);
    
    $pdf->setXY(5, 11);
    $pdf->SetFont('Arial', '', 10);    
    $pdf->MultiCell('90%', 4, html_entity_decode($ins_insumo->getDescripcionCorta()), 0, 1, 'C', false);
    
    $pdf->EAN13(6, 21, $codigo, 8, .5);
    
    $pdf->SetFont('Arial', '', 8);    
    $pdf->setXY(45, 16);
    $pdf->Cell(50, 13, $fecha_recepcion, 0, 1, 'R', false);

    $pdf->SetFont('Arial', '', 8);    
    $pdf->setXY(45, 19);
    $pdf->Cell(50, 13, $costo_en_letras, 0, 1, 'R', false);

    $pdf->SetFont('Arial', '', 8);    
    $pdf->setXY(45, 22);
    $pdf->Cell(50, 13, $proveedor_id, 0, 1, 'R', false);
}

$pdf->Output(Gral::getConfig('conf_proyecto_min').'_Etiquetas', 'I');
?>
