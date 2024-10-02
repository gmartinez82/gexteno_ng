<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_landscape.php';

$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_GET, 'vta_hoja_ruta_id', 0, Gral::TIPO_INTEGER);
if($vta_hoja_ruta_id != 0)
{
    $vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);

    $user = UsUsuario::autenticado();

    // -----------------------------------------------------------------------------
    // Info de la Empresa
    // -----------------------------------------------------------------------------
    $tipo = "Hoja de Ruta";
    $tipo_letra = "X";
    $codigo = $vta_hoja_ruta->getCodigo();
    $fecha = Gral::getFechaToWEB($vta_hoja_ruta->getFechaDespacho());

    // -----------------------------------------------------------------------------
    // Info de Chofer
    // -----------------------------------------------------------------------------
    $cliente = $vta_hoja_ruta->getOpeChofer()->getDescripcion();
    $ruta = $vta_hoja_ruta->getGralRuta()->getDescripcion();
    
    // -----------------------------------------------------------------------------
    // Se inicializa PDF
    // -----------------------------------------------------------------------------
    //$pdf = new PDFComprobante();
    $pdf = new PDFComprobanteLandscape();
    $pdf->SetTitle($vta_hoja_ruta->getNombreArchivoAdjuntoHojaRuta());

    // -----------------------------------------------------------------------------
    $pdf->setTipo($tipo);
    $pdf->setTipoLetra($tipo_letra);
    $pdf->setCodigo($codigo);
    $pdf->setFecha($fecha);
    $pdf->setRuta($ruta);
    $pdf->setVendedor($vendedor);

    $pdf->setCliente($cliente);
    $pdf->setDomicilio($domicilio);
    $pdf->setLocalidad($localidad);
    $pdf->setProvincia($provincia);
    $pdf->setCondicionIva($condicion_iva);
    $pdf->setCUIT($cuit);
    $pdf->setIIBB($iibb);
    $pdf->setTelefono($telefono);
    // -----------------------------------------------------------------------------

    $pdf->AddPage('L');
    $pdf->SetFont('Helvetica', 'B', 12);
    $pdf->setUsuario($user);

    $pdf->setX(0);
    $pdf->setY(51);

    $pdf->SetMargins(10, 51, 10, true);
    $pdf->SetAutoPageBreak(TRUE, 10);

    // -----------------------------------------------------------------------------
    // Cuerpo de Comprobante
    // -----------------------------------------------------------------------------
    $param = array(
        'vta_hoja_ruta_id' => $vta_hoja_ruta->getId(),
    );
    $archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_hoja_ruta_gestion/pdf_hoja_ruta_plantilla_tabla.php";
    $html_tabla = Gral::get_include_contents($archivo, $param);

    $pdf->writeHTML($html_tabla);

    // -----------------------------------------------------------------------------
    // Leyendas
    // -----------------------------------------------------------------------------
    $archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_hoja_ruta_gestion/pdf_hoja_ruta_plantilla_leyendas.php";
    $html_tabla = Gral::get_include_contents($archivo, $param);

    $pdf->writeHTML($html_tabla);
}
?>