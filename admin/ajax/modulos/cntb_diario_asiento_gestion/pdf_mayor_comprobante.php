<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_contabilidad.php';

$cntb_ejercicio_id = Gral::getVars(2, 'cntb_ejercicio_id', 0);
$cntb_ejercicio = CntbEjercicio::getOxId($cntb_ejercicio_id);

$cntb_cuenta_id = Gral::getVars(2, 'cntb_cuenta_id', 0);
$cntb_cuenta = CntbCuenta::getOxId($cntb_cuenta_id);

//$fecha_desde = '2019-01-01';
//$fecha_hasta = '2019-01-31';
//$cntb_diario_asiento_cuentas = $cntb_ejercicio->getCntbDiarioAsientoCuentasOrdenadosParaMayor($cntb_cuenta, $fecha_desde, $fecha_hasta);

//Gral::prr($cntb_ejercicio);
//Gral::prr($cntb_diario_asiento_cuentas);
//exit;
$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Libro Mayor";
$ejericio = $cntb_ejercicio->getDescripcion();
$cuenta = $cntb_cuenta->getNumero().' - '.$cntb_cuenta->getDescripcion();
$fecha = date('Y-m-d');


// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteContabilidad($orientation = 'L');
$pdf->SetTitle($tipo);

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setCuenta($cuenta);
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
    'cntb_cuenta_id' => $cntb_cuenta->getId(),
    'fecha_desde' => $fecha_desde,
    'fecha_hasta' => $fecha_hasta,
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/cntb_diario_asiento_gestion/pdf_mayor_plantilla_tabla.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);

$pdf->Output('Libro Mayor', 'I');
?>