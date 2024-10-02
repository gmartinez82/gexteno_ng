<?php

include_once '_autoload.php';
include_once Gral::getPathAbs() . "admin/control/init.php";

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$fnd_caja_id = Gral::getVars(Gral::VARS_GET, 'fnd_caja_id', 0);
if ($fnd_caja_id != 0) {
    $fnd_caja = FndCaja::getOxId($fnd_caja_id);
}
$arr_resumen_caja = $fnd_caja->getArrResumenCaja();

if ($us_usuario_autenticado && $us_usuario_autenticado->getId() == 1) {
    //Gral::prr($arr_resumen_caja);
    //exit;
}

$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();

$fnd_caja_estado_apertura = $fnd_caja->getEstadoApertura();
$fnd_caja_estado_cierre = $fnd_caja->getEstadoCierre();
$fnd_caja_estado_rendicion = $fnd_caja->getEstadoRendicion();


$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Control de Caja";
$tipo_letra = 'X';
$codigo = $fnd_caja->getCodigo();
$fecha = Gral::getFechaToWEB(date('Y-m-d'));

// -----------------------------------------------------------------------------
// Info de Proveedor
// -----------------------------------------------------------------------------
$cajero = $fnd_caja->getFndCajero()->getDescripcion();
if ($fnd_caja_estado_apertura) {
    $tipo_estado_apertura = 'Apertura:   ' . Gral::getFEchaHoraToWeb($fnd_caja_estado_apertura->getCreado());
}
if ($fnd_caja_estado_cierre) {
    $tipo_estado_cierre = 'Cierre:       ' . Gral::getFEchaHoraToWeb($fnd_caja_estado_cierre->getCreado());
}
if ($fnd_caja_estado_rendicion) {
    $tipo_estado_rendicion = 'Rendicion: ' . Gral::getFEchaHoraToWeb($fnd_caja_estado_rendicion->getCreado()).' - '.$fnd_caja_estado_rendicion->getCreadoPorDescripcion();
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobante();
$pdf->SetTitle($fnd_caja->getNombreArchivoAdjuntoCaja());

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);

$pdf->setCliente($cajero);
$pdf->setDomicilio($tipo_estado_apertura);
$pdf->setLocalidad($tipo_estado_cierre);
$pdf->setProvincia($tipo_estado_rendicion);
$pdf->setCondicionIva($condicion_iva);
$pdf->setCUIT($cuit);
$pdf->setIIBB($iibb);
// -----------------------------------------------------------------------------

$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->setUsuario($user);

$pdf->setX(0);
$pdf->setY(80);

$pdf->SetMargins(10, 80, 10, true);
$pdf->SetAutoPageBreak(TRUE, 10);

// -----------------------------------------------------------------------------
// Comprobantes afectados
// -----------------------------------------------------------------------------
$param = array(
    'fnd_caja_id' => $fnd_caja->getId(),
    'arr_resumen_caja' => $arr_resumen_caja,
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/fnd_caja_gestion/pdf_caja_plantilla_tabla_resumen_general.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);
?>