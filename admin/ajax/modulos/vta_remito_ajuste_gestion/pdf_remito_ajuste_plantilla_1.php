<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf.php';

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', 0);
if($vta_remito_ajuste_id != 0){
    $vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);
}

$vta_remito_ajuste_vta_orden_ventas = $vta_remito_ajuste->getVtaRemitoAjusteVtaOrdenVentas();

// se obtiene el estado despachado solamente si lo tiene
$vta_remito_ajuste_estado_despachado = $vta_remito_ajuste->getVtaRemitoAjusteEstadoXCodigoDeVtaRemitoAjusteTipoEstado(VtaRemitoAjusteTipoEstado::TIPO_DESPACHADO);

$user = UsUsuario::autenticado();

$pdf = new PDF();
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();
//$pdf->AddFont('DejaVuSansCondensed', '', Gral::getPathAbs().'comps/tcpdf/DejaVuSansCondensed.php');
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->setUsuario($user);

// nombre del reporte
$pdf->setNombreReporte(utf8_decode('REMITO'));

// Pares
$x = 20;
$y = 34;
$pdf->setParSimple('', $vta_remito_ajuste->getCodigo(), 145, 24);

// col 1
$pdf->setParSimple('Fecha:', Gral::getFechaToWEB($vta_remito_ajuste->getFecha()), 20, 34);
$pdf->setParSimple('Cliente:', $vta_remito_ajuste->getCliCliente()->getDescripcion(), 20, 40);

// col 2
if($vta_remito_ajuste_estado_despachado){
    $pdf->setParSimple('Empresa:', $vta_remito_ajuste_estado_despachado->getGralEmpresaTransportadora()->getDescripcion(), 120, 34);
    $pdf->setParSimple('Guia:', $vta_remito_ajuste_estado_despachado->getGuia(), 120, 40);
    $pdf->setParSimple('Fecha:', Gral::getFEchaToWeb($vta_remito_ajuste_estado_despachado->getCreado()), 120, 46);
    $pdf->setParSimple('Costo:', '$ '.$vta_remito_ajuste_estado_despachado->getCostoEnvio(), 120, 52);
    $pdf->setParSimple('Bultos:', $vta_remito_ajuste_estado_despachado->getCantidadBultos(), 120, 58);
    $pdf->setParSimple('Peso:', $vta_remito_ajuste_estado_despachado->getPeso().' kg', 120, 64);
}


$param = array(
    'vta_remito_ajuste_id' => $vta_remito_ajuste->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_remito_ajuste_gestion/pdf_remito_plantilla_tabla.php";
$html = Gral::get_include_contents($archivo, $param);


$pdf->writeHTML($html);
?>