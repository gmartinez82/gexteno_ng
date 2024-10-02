<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

$fecha_desde = Gral::getVars(Gral::VARS_GET, 'fecha_desde', '');
$fecha_hasta = Gral::getVars(Gral::VARS_GET, 'fecha_hasta', '');

$otros = Gral::getVars(Gral::VARS_GET, 'otros', '0');

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Resumen de Cuenta de Cliente";
$fecha = date('d/m/Y H:i');
$tipo_letra = '--';

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $cli_cliente->getRazonSocial();
$domicilio = $cli_cliente->getDomicilioLegal();
$localidad = $cli_cliente->getGeoLocalidad()->getDescripcion()." (CP ".$cli_cliente->getCodigoPostal().")";
$provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
$condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
$cuit = $cli_cliente->getCuit();
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
    'cli_cliente_id' => $cli_cliente->getId(),
    'fecha_desde' => $fecha_desde,
    'fecha_hasta' => $fecha_hasta,
    'otros' => $otros,
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_comprobante_gestion/pdf_resumen_cuenta_plantilla_tabla.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);
?>