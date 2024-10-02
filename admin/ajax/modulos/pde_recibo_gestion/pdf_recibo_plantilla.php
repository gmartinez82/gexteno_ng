<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$pde_recibo_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_id', 0);
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
$pde_recibo_items = $pde_recibo->getPdeReciboItems();

$prv_proveedor = $pde_recibo->getPrvProveedor();

//$gral_fp_forma_pago = $pde_recibo->getGralFpFormaPago();
$pde_tipo_recibo = $pde_recibo->getPdeTipoRecibo();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Nota de Debito";
$tipo_letra = $pde_tipo_recibo->getCodigoMin();
$codigo = $pde_recibo->getCodigo();
$afip_cae = $pde_recibo->getCae();
$afip_cae_vencimiento = $pde_recibo->getCaeVencimiento();
$afip_numero_comprobante = $pde_recibo->getNumeroComprobanteCompleto();
$fecha = Gral::getFechaToWEB($pde_recibo->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Proveedor
// -----------------------------------------------------------------------------
$cliente = $pde_recibo->getPersonaDescripcion();
$condicion_iva = "Consumidor Final";
if($prv_proveedor->getId() != 'null'){
    $domicilio = $prv_proveedor->getDomicilioLegal();
    $localidad = $prv_proveedor->getGeoLocalidad()->getDescripcion()." (CP ".$prv_proveedor->getCodigoPostal().")";
    $provincia = $prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$prv_proveedor->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $prv_proveedor->getGralCondicionIva()->getDescripcion();
    $cuit = $prv_proveedor->getCuit();
    $iibb = "-";
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobante();
$pdf->SetTitle($pde_recibo->getNombreArchivoAdjuntoRecibo());

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);

$pdf->setProveedor($cliente);
$pdf->setDomicilio($domicilio);
$pdf->setLocalidad($localidad);
$pdf->setProvincia($provincia);
$pdf->setCondicionIva($condicion_iva);
$pdf->setCUIT($cuit);
$pdf->setIIBB($iibb);

//$pdf->setCae($afip_cae);
//$pdf->setCaeVencimiento($afip_cae_vencimiento);
//$pdf->setNumeroComprobante($afip_numero_comprobante);
// -----------------------------------------------------------------------------

$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->setUsuario($user);

$pdf->setX(0);
$pdf->setY(80);

$pdf->SetMargins(10, 80, 10, true);
$pdf->SetAutoPageBreak(TRUE, 50);

//Gral::prr($pde_recibo);
//Gral::prr($pde_recibo->getWsFeOpeSolicitudXPdeReciboWsFeOpeSolicitud());
//Gral::prr($pde_recibo->getWsFeOpeSolicitudXPdeReciboWsFeOpeSolicitud()->getWsFeOpeSolicitudRespuesta());

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'pde_recibo_id' => $pde_recibo->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_recibo_gestion/pdf_recibo_plantilla_tabla.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Totales de Comprobante
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pde_recibo_gestion/pdf_recibo_plantilla_bloque_totales.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);
?>