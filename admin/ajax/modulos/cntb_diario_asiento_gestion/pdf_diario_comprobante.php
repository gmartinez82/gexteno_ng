<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_contabilidad.php';

$cntb_ejercicio_id = Gral::getVars(2, 'cntb_ejercicio_id', 0);
$fecha_desde = Gral::getVars(2, 'fecha_desde', 0);
$fecha_hasta = Gral::getVars(2, 'fecha_hasta', 0);

$fecha_desde = Gral::getFechaToDB($fecha_desde);
$fecha_hasta = Gral::getFechaToDB($fecha_hasta);

$cntb_ejercicio = CntbEjercicio::getOxId($cntb_ejercicio_id);
//$cntb_diario_asientos = $cntb_ejercicio->getCntbDiarioAsientosOrdenadosParaDiario($fecha_desde, $fecha_hasta);

//Gral::prr($cntb_ejercicio);
//Gral::prr($cntb_diario_asientos);
//exit;

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Libro Diario";
$ejericio = $cntb_ejercicio->getDescripcion();
$fecha = date('Y-m-d');


// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteContabilidad($orientation = 'l');
$pdf->SetTitle($tipo);

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setEjericio($ejericio);
$pdf->setFechaDesde($fecha_desde);
$pdf->setFechaHasta($fecha_hasta);
$pdf->setFecha($fecha);

// -----------------------------------------------------------------------------

$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->setUsuario($user);

$pdf->setX(0);
$pdf->setY(51);

$pdf->SetMargins(10, 55, 10, true);
$pdf->SetAutoPageBreak(TRUE, 15);

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'cntb_ejercicio_id' => $cntb_ejercicio->getId(),
    'fecha_desde' => $fecha_desde,
    'fecha_hasta' => $fecha_hasta,
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/cntb_diario_asiento_gestion/pdf_diario_plantilla_tabla.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);


$pdf->Output('Libro Diario', 'I');
?>