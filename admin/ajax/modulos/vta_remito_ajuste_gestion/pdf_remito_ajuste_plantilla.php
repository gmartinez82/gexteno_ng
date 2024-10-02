<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_sinlogo.php';

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', 0);
if($vta_remito_ajuste_id != 0){
    $vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);
}

$cli_cliente = $vta_remito_ajuste->getCliCliente();

$vta_remito_ajuste_vta_orden_ventas = $vta_remito_ajuste->getVtaRemitoAjusteVtaOrdenVentas();

// se obtiene el estado despachado solamente si lo tiene
$vta_remito_ajuste_estado_despachado = $vta_remito_ajuste->getVtaRemitoAjusteEstadoXCodigoDeVtaRemitoAjusteTipoEstado(VtaRemitoAjusteTipoEstado::TIPO_DESPACHADO);

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Remito Ajuste";
$tipo_letra = "X";
$codigo = $vta_remito_ajuste->getCodigo();
$fecha = Gral::getFechaToWEB($vta_remito_ajuste->getFecha());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_remito_ajuste->getPersonaDescripcion();
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
$pdf->SetTitle($vta_remito_ajuste->getNombreArchivoAdjuntoRemitoAjuste());

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
    'vta_remito_ajuste_id' => $vta_remito_ajuste->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_remito_ajuste_gestion/pdf_remito_ajuste_plantilla_tabla.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);

// -----------------------------------------------------------------------------
// Leyendas
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_remito_ajuste_gestion/pdf_remito_ajuste_plantilla_leyendas.php";
$html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

//$pdf->writeHTML($html_tabla_leyendas);

// -----------------------------------------------------------------------------
// Despacho de RemitoAjuste
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_remito_ajuste_gestion/pdf_remito_ajuste_plantilla_tabla_despacho.php";
$html_tabla_despacho = Gral::get_include_contents($archivo, $param);

//$pdf->writeHTML($html_tabla_despacho);
?>