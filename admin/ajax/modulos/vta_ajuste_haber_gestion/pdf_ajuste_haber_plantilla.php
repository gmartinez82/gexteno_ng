<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_sinlogo.php';

$vta_ajuste_haber_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_id', 0);
$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
$vta_ajuste_haber_items = $vta_ajuste_haber->getVtaAjusteHaberItems();

$cli_cliente = $vta_ajuste_haber->getCliCliente();

//$gral_fp_forma_pago = $vta_ajuste_haber->getGralFpFormaPago();
$vta_tipo_ajuste_haber = $vta_ajuste_haber->getVtaTipoAjusteHaber();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Ajuste Haber";
$tipo_letra = $vta_tipo_ajuste_haber->getCodigoMin();
$codigo = $vta_ajuste_haber->getCodigo();
$afip_cae = $vta_ajuste_haber->getCae();
$afip_cae_vencimiento = $vta_ajuste_haber->getCaeVencimiento();
$afip_numero_comprobante = $vta_ajuste_haber->getNumeroComprobanteCompleto();
$fecha = Gral::getFechaToWEB($vta_ajuste_haber->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_ajuste_haber->getPersonaDescripcion();
$condicion_iva = "Consumidor Final";
if($cli_cliente->getId() != 'null'){
    $domicilio = $cli_cliente->getDomicilioLegal();
    $localidad = $cli_cliente->getGeoLocalidad()->getDescripcion()." (CP ".$cli_cliente->getCodigoPostal().")";
    $provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $cuit = $cli_cliente->getCuit();
    $iibb = "-";
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteSinLogo();
$pdf->SetTitle($vta_ajuste_haber->getNombreArchivoAdjuntoAjusteHaber());

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

//Gral::prr($vta_ajuste_haber);
//Gral::prr($vta_ajuste_haber->getWsFeOpeSolicitudXVtaAjusteHaberWsFeOpeSolicitud());
//Gral::prr($vta_ajuste_haber->getWsFeOpeSolicitudXVtaAjusteHaberWsFeOpeSolicitud()->getWsFeOpeSolicitudRespuesta());

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'vta_ajuste_haber_id' => $vta_ajuste_haber->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_ajuste_haber_gestion/pdf_ajuste_haber_plantilla_tabla_items.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Totales de Comprobante
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_ajuste_haber_gestion/pdf_ajuste_haber_plantilla_bloque_totales.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'vta_ajuste_haber_id' => $vta_ajuste_haber->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_ajuste_haber_gestion/pdf_ajuste_haber_plantilla_tabla_items_cheques.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Comprobantes Vinculados
// -----------------------------------------------------------------------------
$param = array(
    'vta_ajuste_haber_id' => $vta_ajuste_haber->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_ajuste_haber_gestion/pdf_ajuste_haber_plantilla_tabla_comprobantes.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);
?>