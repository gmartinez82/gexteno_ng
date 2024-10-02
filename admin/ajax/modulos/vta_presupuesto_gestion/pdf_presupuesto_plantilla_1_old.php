<?php
include_once '_autoload.php';

define('FPDF_FONTPATH', Gral::getPathAbs() . 'comps/fpdf181/font/');
include Gral::getPathAbs() . 'comps/fpdf181/pdf.php';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos();

$vta_vendedor = $vta_presupuesto->getVtaVendedor();
$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
$vta_comprador = $vta_presupuesto->getVtaComprador();

$gral_fp_cuota = $vta_presupuesto->getGralFpCuota();
$gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
$gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();

$user = UsUsuario::autenticado();

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->setUsuario($user);

// nombre del reporte
$pdf->setNombreReporte(utf8_decode('PRESUPUESTO'));


// Pares
$x = 20;
$y = 34;
$pdf->setParSimple('', $vta_presupuesto->getCodigo(), 145, 24);

// col 1
$pdf->setParSimple('Fecha:', Gral::getFechaToWEB($vta_presupuesto->getFecha()), 20, 34);
$pdf->setParSimple('Valido hasta:', Gral::getFechaToWEB($vta_presupuesto->getFechaVencimiento()), 20, 40);
$pdf->setParSimple('Cliente:', $vta_presupuesto->getPersonaDescripcion(), 20, 46);

// col 2
$pdf->setParSimple('Vendedor:', $vta_vendedor->getDescripcion(), 120, 34);
$pdf->setParSimple('Lista:', $ins_tipo_lista_precio->getDescripcion(), 120, 40);
$pdf->setParSimple('Comprador:', $vta_comprador->getDescripcion(), 120, 46);


// Detalle de Items (Tabla)
$datos = array();
foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {

    $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
    $importe_unitario = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento();
    $importe_total = $importe_unitario*$vta_presupuesto_ins_insumo->getCantidad();

    $dato = array(
        'id' => $ins_insumo->getId(),
        'insumo' => $vta_presupuesto_ins_insumo->getDescripcion(),
        'cantidad' => $vta_presupuesto_ins_insumo->getCantidad(),
        'descuento' => ($vta_presupuesto_ins_insumo->getDescuento() != 0) ? $vta_presupuesto_ins_insumo->getDescuento().' %' : '-',
        'importe_unitario' => Gral::_echoImp($importe_unitario, false, true),
        'importe_total' => Gral::_echoImp($importe_total, false, true),
    );
    //Gral::prr($dato);
    $datos[] = $dato;
}

$pdf->Ln(5);
$pdf->setTabla($datos, array(
    'id' => array(
        'ancho' => 20,
        'alineacion' => 'C',
        'index' => 'id',
        'label' => 'Id',
    ),
    'cantidad' => array(
        'ancho' => 12,
        'alineacion' => 'C',
        'index' => 'cantidad',
        'label' => 'Cant',
    ),
    'insumo' => array(
        'ancho' => 97,
        'alineacion' => 'L',
        'index' => 'insumo',
        'label' => 'Insumo',
    ),
    'descuento' => array(
        'ancho' => 13,
        'alineacion' => 'C',
        'index' => 'descuento',
        'label' => 'Desc %',
    ),
    'importe_unitario' => array(
        'ancho' => 22,
        'alineacion' => 'R',
        'index' => 'importe_unitario',
        'label' => 'Imp Unit',
    ),
    'importe_total' => array(
        'ancho' => 25,
        'alineacion' => 'R',
        'index' => 'importe_total',
        'label' => 'Imp Total',
    ),
        ), array('margin_left' => -5)
);

// Pie de pag
$x = $pdf->GetX() + 5;
$y = $pdf->GetY() + 10;

$pdf->setParSimpleVtaPresupuesto('Subtotal:', Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva(), false, true), $x, $y);
$pdf->setParSimpleVtaPresupuesto('Descuento:', Gral::_echoImp($vta_presupuesto->getImporteTotalDescuento(), false, true), $x+50, $y);
$pdf->setParSimpleVtaPresupuesto('IVA:', Gral::_echoImp($vta_presupuesto->getIvaPresupuesto(), false, true), $x+100, $y);
$pdf->setParSimpleVtaPresupuesto('Total:', Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConIva(), false, true), $x+145, $y);

$x = $pdf->GetX();
$y = $pdf->GetY() + 80;

$pdf->setParSimpleVtaPresupuesto('Condiciones de Pago Predefinidas', $gral_fp_forma_pago->getDescripcion().' - '.$gral_fp_medio_pago->getDescripcion().' - '.$gral_fp_cuota->getDescripcion(), $x, $y);
?>