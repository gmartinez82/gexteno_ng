<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$vta_recibo_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_id', 0);
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
$vta_recibo_items = $vta_recibo->getVtaReciboItems();

$cli_cliente = $vta_recibo->getCliCliente();

//$gral_fp_forma_pago = $vta_recibo->getGralFpFormaPago();
$vta_tipo_recibo = $vta_recibo->getVtaTipoRecibo();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Recibo";
$tipo_letra = $vta_tipo_recibo->getCodigoMin();
$codigo = $vta_recibo->getCodigo();
$afip_cae = $vta_recibo->getCae();
$afip_cae_vencimiento = $vta_recibo->getCaeVencimiento();
$afip_numero_comprobante = $vta_recibo->getNumeroComprobanteCompleto();
$fecha = Gral::getFechaToWEB($vta_recibo->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_recibo->getPersonaDescripcion();
$cuit = $vta_recibo->getPersonaDocumento();
$condicion_iva = "Consumidor Final";
if($cli_cliente->getId() != 'null'){
    $domicilio = $cli_cliente->getDomicilioLegal();
    $localidad = $cli_cliente->getGeoLocalidad()->getDescripcion()." (CP ".$cli_cliente->getCodigoPostal().")";
    $provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $cuit = $cli_cliente->getCuit();
    $cuit = $vta_recibo->getPersonaDocumento();
    $iibb = "-";
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobante();
$pdf->SetTitle($vta_recibo->getNombreArchivoAdjuntoRecibo());

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

//Gral::prr($vta_recibo);
//Gral::prr($vta_recibo->getWsFeOpeSolicitudXVtaReciboWsFeOpeSolicitud());
//Gral::prr($vta_recibo->getWsFeOpeSolicitudXVtaReciboWsFeOpeSolicitud()->getWsFeOpeSolicitudRespuesta());

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'vta_recibo_id' => $vta_recibo->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_recibo_gestion/pdf_recibo_plantilla_tabla_items.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Totales de Comprobante
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_recibo_gestion/pdf_recibo_plantilla_bloque_totales.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'vta_recibo_id' => $vta_recibo->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_recibo_gestion/pdf_recibo_plantilla_tabla_items_cheques.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Comprobantes Vinculados
// -----------------------------------------------------------------------------
$param = array(
    'vta_recibo_id' => $vta_recibo->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_recibo_gestion/pdf_recibo_plantilla_tabla_comprobantes.php";
$html = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html);

// -----------------------------------------------------------------------------
// Leyendas
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_recibo_gestion/pdf_recibo_plantilla_leyendas.php";
$html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla_leyendas);

?>