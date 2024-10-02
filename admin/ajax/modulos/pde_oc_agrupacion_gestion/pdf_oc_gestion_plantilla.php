<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_compra.php';

$pde_oc_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pde_oc_agrupacion_id', 0);
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);

$pde_proveedor = $pde_oc_agrupacion->getPrvProveedor();
$pde_ocs = $pde_oc_agrupacion->getPdeOcs();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Orden de Compra";
$tipo_letra = "X";
$codigo = $pde_oc_agrupacion->getCodigo();
$fecha = Gral::getFechaToWEB($pde_oc_agrupacion->getCreado());


// -----------------------------------------------------------------------------
// Info del Proveedor
// -----------------------------------------------------------------------------
$condicion_iva = "Consumidor Final";
if($pde_proveedor->getId() != 'null'){
    $proveedor = $pde_proveedor->getDescripcion();
    $domicilio = $pde_proveedor->getDomicilio();
    $localidad = $pde_proveedor->getGeoLocalidad()->getDescripcion()." (CP ".$pde_proveedor->getCodigoPostal().")";
    $provincia = $pde_proveedor->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$pde_proveedor->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $pde_proveedor->getGralCondicionIva()->getDescripcion();
    $cuit = $pde_proveedor->getCuit();
    $iibb = "-";
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteCompra();
$pdf->SetTitle($pde_oc_agrupacion->getNombreArchivoAdjuntoOrdenCompraAgrupacion());

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);

$pdf->setProveedor($proveedor);
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
$pdf->SetAutoPageBreak(TRUE, 20);

//$pdf->Image(Gral::getPathAbs().'admin/imgs/logos/logo_vertical_positivo_500.png', 50, 50, 100, '', '', '', '', false, 300);


// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'pde_oc_agrupacion_id' => $pde_oc_agrupacion->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_oc_agrupacion_gestion/pdf_oc_gestion_plantilla_tabla.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);

// -----------------------------------------------------------------------------
// Totales de Comprobante
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_oc_agrupacion_gestion/pdf_oc_gestion_plantilla_tabla_totales.php";
$html_tabla_totales = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla_totales);

// -----------------------------------------------------------------------------
// Leyendas
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_oc_agrupacion_gestion/pdf_oc_gestion_plantilla_leyendas.php";
$html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla_leyendas);
?>