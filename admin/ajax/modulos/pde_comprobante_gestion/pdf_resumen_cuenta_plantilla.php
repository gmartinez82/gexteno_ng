<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$prv_proveedor_id = Gral::getVars(Gral::VARS_GET, 'prv_proveedor_id', 0);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$fecha_desde = Gral::getVars(Gral::VARS_GET, 'fecha_desde', '');
$fecha_hasta = Gral::getVars(Gral::VARS_GET, 'fecha_hasta', '');

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Resumen de Cuenta de Proveedor";
$fecha = date('d/m/Y H:i');
$tipo_letra = '--';

// -----------------------------------------------------------------------------
// Info de Proveedor
// -----------------------------------------------------------------------------
$cliente = $prv_proveedor->getRazonSocial();
$domicilio = $prv_proveedor->getDomicilioLegal();
$localidad = $prv_proveedor->getGeoLocalidad()->getDescripcion()." (CP ".$prv_proveedor->getCodigoPostal().")";
$provincia = $prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
$condicion_iva = $prv_proveedor->getGralCondicionIva()->getDescripcion();
$cuit = $prv_proveedor->getCuit();
$iibb = "-";

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobante();
$pdf->SetTitle('Resumen de Cuenta');

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);

$pdf->setCliente($cliente);
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
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'prv_proveedor_id' => $prv_proveedor->getId(),
    'fecha_desde' => $fecha_desde,
    'fecha_hasta' => $fecha_hasta,
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_comprobante_gestion/pdf_resumen_cuenta_plantilla_tabla.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);
?>