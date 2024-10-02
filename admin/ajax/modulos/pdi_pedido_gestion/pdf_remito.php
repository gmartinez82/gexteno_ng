<?php

include_once '_autoload.php';

define('FPDF_FONTPATH', Gral::getPathAbs() . 'comps/fpdf/font/');
include Gral::getPathAbs() . 'comps/fpdf/pdf.php';

$chk_pdi_pedido_id = $_POST['chk_pdi_pedido_id'];
if (!is_array($chk_pdi_pedido_id)) {
    $chk_pdi_pedido_id = $_GET['chk_pdi_pedido_id'];
}
//Gral::prr($chk_pdi_pedido_id);
//exit;

$user = UsUsuario::autenticado();

$pdf = new PDF();
$pdf->AddPage('L');
$pdf->SetFont('Arial', 'B', 12);
$pdf->setUsuario($user);

// nombre del reporte
$pdf->setNombreReporte(utf8_decode('Remito de Pedidos Internos PDI'));

$texto_comentario = 'Remito X de Movimientos Internos de Insumos';

/* texto comentario */
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 11);
$pdf->SetFillColor(255, 255, 255);
$pdf->setXY(20, 35);
$pdf->Cell(1, 3, $texto_comentario, 0, 1, 'L', 1);

// Par 
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->setXY(20, 41);
$pdf->Cell(1, 3, 'Emitido', 0, 1, 'L', 1);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(255, 255, 255);
$pdf->setXY(35, 41);
$pdf->Cell(1, 3, date('d/m/Y H:i'), 0, 1, 'L', 1);



// Detalle de Insumos Enviados 

$datos = array();
if (is_array($chk_pdi_pedido_id)) {
    foreach ($chk_pdi_pedido_id as $pdi_pedido_id) {

        $pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);

        $ins_insumo = $pdi_pedido->getInsInsumo();
        $ins_categoria = $ins_insumo->getInsCategoria();

        $pdi_estado = $pdi_pedido->getPdiEstadoActual();
        $cantidad = $pdi_estado->getCantidad();
        $pdi_tipo_estado = $pdi_estado->getPdiTipoEstado();

        $pan_panol_origen = PanPanol::getOxId($pdi_pedido->getPanPanolOrigen());
        $pan_panol_destino = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
        
        $ins_insumo_pan_panol_origen = $ins_insumo->getUbicacionEnPanol($pan_panol_origen);
        $ins_insumo_pan_panol_destino = $ins_insumo->getUbicacionEnPanol($pan_panol_destino);
        

        /*
        $origen = '';
        $tal_insumo_solicitado = $pdi_pedido->getTalInsumoSolicitado();
        if ($tal_insumo_solicitado) {
            $tal_tarea_resuelta = $tal_insumo_solicitado->getTalTareaResuelta();
            $tal_orden_trabajo = $tal_tarea_resuelta->getTalOrdenTrabajo();
            $tal_tarea_base = $tal_tarea_resuelta->getTalTareaBase();
            $veh_coche = $tal_orden_trabajo->getVehCoche();

            $origen = $veh_coche->getDescripcion();
            $origen_ubicacion = ($tal_tarea_base) ? $tal_tarea_base->getId() : '';
        } else {
            $origen = $pan_panol_origen->getCodigoCorto();
            $origen_ubicacion = ($ins_insumo_pan_panol_origen) ? $ins_insumo_pan_panol_origen->getDescripcion() : '';
        }
        */

        $dato = array(
            'id' => $pdi_pedido->getId(),
            'origen' => $pan_panol_origen->getCodigoCorto(),
            'origen_ubicacion' => $origen_ubicacion,
            'destino' => $pan_panol_destino->getCodigoCorto(),
            'destino_ubicacion' => ($ins_insumo_pan_panol_destino) ? $ins_insumo_pan_panol_destino->getDescripcion() : '',
            'categoria' => substr(strtoupper($ins_categoria->getDescripcion()), 0, 3),
            'insumo' => $ins_insumo->getDescripcion(),
            'cantidad' => $cantidad,
            'estado' => $pdi_tipo_estado->getDescripcion(),
            'fecha' => Gral::getFechaHoraToWeb($pdi_estado->getCreado()),
        );
        //Gral::prr($dato);
        $datos[] = $dato;
    }
}

$pdf->Ln(5);
$pdf->setTabla($datos, array(
    'id' => array(
        'ancho' => 15,
        'alineacion' => 'C',
        'index' => 'id',
        'label' => '#Ped',
    ),
    'origen' => array(
        'ancho' => 12,
        'alineacion' => 'C',
        'index' => 'origen',
        'label' => 'Solic',
    ),
    'origen_ubicacion' => array(
        'ancho' => 28,
        'alineacion' => 'C',
        'index' => 'origen_ubicacion',
        'label' => 'UBI',
    ),
    'destino' => array(
        'ancho' => 12,
        'alineacion' => 'C',
        'index' => 'destino',
        'label' => 'Solic a',
    ),
    'destino_ubicacion' => array(
        'ancho' => 28,
        'alineacion' => 'C',
        'index' => 'destino_ubicacion',
        'label' => 'UBI',
    ),
    'insumo' => array(
        'ancho' => 100,
        'alineacion' => 'L',
        'index' => 'insumo',
        'label' => 'Insumo',
    ),
    'cantidad' => array(
        'ancho' => 12,
        'alineacion' => 'C',
        'index' => 'cantidad',
        'label' => 'Cant',
    ),
    'estado' => array(
        'ancho' => 25,
        'alineacion' => 'C',
        'index' => 'estado',
        'label' => 'Estado',
    ),
    'fecha' => array(
        'ancho' => 30,
        'alineacion' => 'C',
        'index' => 'fecha',
        'label' => 'Fecha',
    ),
        ), array('margin_left' => -5)
);


$pdf->Ln(25);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(15);
$pdf->Cell(1, 3, '
..........................................
	                               ............................................
	                               ............................................
											 
											 ', 0, 1, 'L', 1);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(15);
$pdf->Cell(1, 3, utf8_decode('    
			Responsable de Envío                                 
			Responsable de Transporte                              
			Responsable de Recepción
			'), 0, 1, 'L', 1);

$pdf->Output();
?>