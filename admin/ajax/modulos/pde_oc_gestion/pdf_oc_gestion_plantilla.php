<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_compra.php';

$id = Gral::getVars(2, 'pde_oc_id', 0);
$pde_oc = PdeOc::getOxId($id);

$pde_pedido = $pde_oc->getPdePedido();
$pde_cotizacion = $pde_oc->getPdeCotizacion();
$pde_proveedor = $pde_oc->getPrvProveedor();
//$pde_condicion_pagos = $pde_cotizacion->getPdeCondicionPagosOrdenados();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Orden de Compra";
$tipo_letra = "X";
$codigo = $pde_oc->getCodigo();
$fecha = Gral::getFechaToWEB($pde_oc->getCreado());


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
$pdf->SetTitle($pde_oc->getNombreArchivoAdjuntoOrdenCompra());

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
$pdf->SetAutoPageBreak(TRUE, 50);

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'pde_oc_id' => $pde_oc->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_oc_gestion/pdf_oc_gestion_plantilla_tabla.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);

?>