<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_pdi.php';

$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pdi_pedido_agrupacion_id', 0, Gral::TIPO_INTEGER);
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);

$pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidos();

$user = UsUsuario::autenticado();

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "Pedido Interno";
$tipo_letra = "X";
$codigo = $pdi_pedido_agrupacion->getCodigo();
$fecha = Gral::getFechaToWEB($pdi_pedido_agrupacion->getCreado());


// -----------------------------------------------------------------------------
// Info 
// -----------------------------------------------------------------------------

$origen = $pdi_pedido_agrupacion->getPanPanolOrigenObj()->getDescripcion();
$destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj()->getDescripcion();
$urgencia = $pdi_pedido_agrupacion->getPdiUrgencia()->getDescripcion();
//$observacion = $pdi_pedido_agrupacion->getObservacion();


// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobantePDI();
$pdf->SetTitle($pdi_pedido_agrupacion->getNombreArchivoAdjuntoPedidoAgrupacion());
$pdf->SetTitle('');

// -----------------------------------------------------------------------------
$pdf->setTipo($tipo);
$pdf->setTipoLetra($tipo_letra);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);

$pdf->setOrigen($origen);
$pdf->setDestino($destino);
$pdf->setUrgencia($urgencia);

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
    'pdi_pedido_agrupacion_id' => $pdi_pedido_agrupacion->getId(),
);

$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pdi_pedido_agrupacion_gestion/pdf_pdi_pedido_agrupacion_gestion_plantilla_tabla.php";
$html_tabla = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla);

// -----------------------------------------------------------------------------
// Leyendas
// -----------------------------------------------------------------------------
$archivo = Gral::getPathAbs() . "admin/ajax/modulos/pdi_pedido_agrupacion_gestion/pdf_pdi_pedido_agrupacion_gestion_plantilla_leyendas.php";
$html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

$pdf->writeHTML($html_tabla_leyendas);


?>