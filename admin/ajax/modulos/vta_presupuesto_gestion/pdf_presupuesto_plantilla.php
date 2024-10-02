<?php

include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante.php';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos();

$cli_cliente = $vta_presupuesto->getCliCliente();

$vta_vendedor = $vta_presupuesto->getVtaVendedor();
$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
$vta_comprador = $vta_presupuesto->getVtaComprador();

$gral_fp_cuota = $vta_presupuesto->getGralFpCuota();
$gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
$gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Presupuesto";
$tipo_letra = "X";
$codigo = $vta_presupuesto->getCodigo();
$fecha = Gral::getFechaToWEB($vta_presupuesto->getFecha());
$vta_vendedor = $vta_presupuesto->getVtaVendedor();
$vendedor = $vta_vendedor->getId().' - '.$vta_vendedor->getNombre();

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_presupuesto->getPersonaDescripcion();
$condicion_iva = "Consumidor Final";
if ($cli_cliente->getId() != 'null') {
    $cliente = $cli_cliente->getId() . ' - ' . $cli_cliente->getRazonSocial();
    if(trim($cli_cliente->getRazonSocial()) != trim($cli_cliente->getDescripcion())){
        $cliente.= ' - ' . $cli_cliente->getDescripcion();
    }
    
    $domicilio = $cli_cliente->getDomicilioLegal();
    $localidad = $cli_cliente->getGeoLocalidad()->getDescripcion() . " (CP " . $cli_cliente->getCodigoPostal() . ")";
    $provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion() . " - " . $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $cuit = $cli_cliente->getCuit();
    $iibb = "-";
    $telefono = $cli_cliente->getTelefono();
}

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobante();
$pdf->SetTitle($vta_presupuesto->getNombreArchivoAdjuntoPresupuesto());

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);
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

$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->setUsuario($user);

$pdf->setX(0);
$pdf->setY(80);

$pdf->SetMargins(10, 80, 10, true);
$pdf->SetAutoPageBreak(TRUE, 0); // valor anterior 50, pero generaba conflicto con margenes
// -----------------------------------------------------------------------------
// Cuerpo de Comprobante
// -----------------------------------------------------------------------------
$param = array(
    'vta_presupuesto_id' => $vta_presupuesto->getId(),
);
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_presupuesto_gestion/pdf_presupuesto_plantilla_tabla.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);

// -----------------------------------------------------------------------------
// Totales de Comprobante
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_presupuesto_gestion/pdf_presupuesto_plantilla_tabla_totales.php";
$html_tabla_totales = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla_totales);

// -----------------------------------------------------------------------------
// Leyendas
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_presupuesto_gestion/pdf_presupuesto_plantilla_leyendas.php";
$html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla_leyendas);
?>