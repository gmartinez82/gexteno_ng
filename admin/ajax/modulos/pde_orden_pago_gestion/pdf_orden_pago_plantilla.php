<?php

include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
if ($pde_orden_pago_id != 0) {
    $pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);
}
$pde_orden_pago_pde_comprobantes = $pde_orden_pago->getPdeOrdenPagoPdeComprobantes();

$prv_proveedor = $pde_orden_pago->getPrvProveedor();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Orden de Pago";
$tipo_letra = 'X';
$codigo = $pde_orden_pago->getCodigo();
$fecha = Gral::getFechaToWEB($pde_orden_pago->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Proveedor
// -----------------------------------------------------------------------------
$proveedor = $pde_orden_pago->getPersonaDescripcion();
$condicion_iva = "Consumidor Final";
if ($prv_proveedor->getId() != 'null') {
    $domicilio = $prv_proveedor->getDomicilioLegal();
    $localidad = $prv_proveedor->getGeoLocalidad()->getDescripcion() . " (CP " . $prv_proveedor->getCodigoPostal() . ")";
    $provincia = $prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getDescripcion() . " - " . $prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $prv_proveedor->getGralCondicionIva()->getDescripcion();
    $cuit = $prv_proveedor->getCuit();
    $iibb = "-";
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobante();
$pdf->SetTitle($pde_orden_pago->getNombreArchivoAdjuntoOrdenPago());

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);

$pdf->setCliente($proveedor);
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
$pdf->SetAutoPageBreak(TRUE, 30);

// -----------------------------------------------------------------------------
// Comprobantes afectados
// -----------------------------------------------------------------------------
$param = array(
    'pde_orden_pago_id' => $pde_orden_pago->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_orden_pago_gestion/pdf_orden_pago_plantilla_tabla_comprobantes.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Retenciones afectadas
// -----------------------------------------------------------------------------
$param = array(
    'pde_orden_pago_id' => $pde_orden_pago->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_orden_pago_gestion/pdf_orden_pago_plantilla_tabla_retenciones.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Forma de Pago
// -----------------------------------------------------------------------------
$param = array(
    'pde_orden_pago_id' => $pde_orden_pago->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_orden_pago_gestion/pdf_orden_pago_plantilla_tabla_forma_pago.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);


// -----------------------------------------------------------------------------
// Totales de Comprobante
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_orden_pago_gestion/pdf_orden_pago_plantilla_bloque_totales.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Leyendas
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_orden_pago_gestion/pdf_orden_pago_plantilla_leyendas.php";
$html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla_leyendas);
?>