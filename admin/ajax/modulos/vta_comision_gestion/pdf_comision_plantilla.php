<?php

include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$vta_comision_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_id', 0);
if ($vta_comision_id != 0) {
    $vta_comision = VtaComision::getOxId($vta_comision_id);
}
$vta_comision_vta_comprobantes = $vta_comision->getVtaComisionVtaComprobantes();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Orden de Comision";
$tipo_letra = 'X';
$codigo = $vta_comision->getCodigo();
$fecha = Gral::getFechaToWEB($vta_comision->getFechaEmision());

// -----------------------------------------------------------------------------
// Info del Comisionista
// -----------------------------------------------------------------------------
$comisionista = $vta_comision->getPersonaDescripcion();


// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobante();
$pdf->SetTitle($vta_comision->getNombreArchivoAdjuntoComision());

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);

$pdf->setCliente($comisionista);
$pdf->setDomicilio($domicilio);
$pdf->setLocalidad($localidad);
$pdf->setProvincia($provincia);
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
$pdf->SetAutoPageBreak(TRUE, 50);

// -----------------------------------------------------------------------------
// Comprobantes afectados
// -----------------------------------------------------------------------------
$param = array(
    'vta_comision_id' => $vta_comision->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_comision_gestion/pdf_comision_plantilla_tabla_comprobantes.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Forma de Pago
// -----------------------------------------------------------------------------
$param = array(
    'vta_comision_id' => $vta_comision->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_comision_gestion/pdf_comision_plantilla_tabla_forma_pago.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);


// -----------------------------------------------------------------------------
// Totales de Comprobante
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_comision_gestion/pdf_comision_plantilla_bloque_totales.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);
?>