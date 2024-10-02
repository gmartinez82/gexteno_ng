<?php
include_once '_autoload.php';

define('FPDF_FONTPATH', Gral::getPathAbs().'comps/fpdf/font/');
include Gral::getPathAbs().'comps/fpdf/pdf.php';

$id = Gral::getVars(2, 'id', 0);
$pde_recepcion = PdeRecepcion::getOxId($id);
$pde_oc = $pde_recepcion->getPdeOc();
$pde_pedido = $pde_oc->getPdePedido();
$pde_cotizacion = $pde_oc->getPdeCotizacion();
$pde_condicion_pagos = $pde_cotizacion->getPdeCondicionPagosOrdenados();

$user = UsUsuario::autenticado();

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->setUsuario($user);

// nombre del reporte
$pdf->setNombreReporte(utf8_decode('RECEPCION DE COMPRA'));


// Pares
$x = 20;
$y = 34;
$pdf->setParSimple('Cod', $pde_recepcion->getCodigo(), 145, 23);
$pdf->setParSimple('Ctr PDE', $pde_recepcion->getPdePedido()->getPdeCentroPedido()->getDescripcion(), $x, $y = $y+6);
$pdf->setParSimple('Fecha', Gral::getFechaToWeb($pde_recepcion->getFechaEntrega()), $x, $y = $y+6);
$pdf->setParSimple('Proveedor', $pde_recepcion->getPrvProveedor()->getDescripcion(), $x, $y = $y+6);
$pdf->setParSimple('Entregar en', $pde_recepcion->getPdeCentroRecepcion()->getDescripcion(), $x, $y = $y+6);
$pdf->setParSimple('Responsable', $pde_recepcion->getPdeCentroRecepcion()->getResponsable(), $x, $y = $y+6);
$pdf->setParSimple('Telefono', $pde_recepcion->getPdeCentroRecepcion()->getTelefono(), $x, $y = $y+6);
$pdf->setParMultiCell('Domicilio', $pde_recepcion->getPdeCentroRecepcion()->getDomicilio(), $x, $y = $y+6, $w = 60, $h = 4);
$y = $pdf->GetY();
$pdf->setParSimple('Localidad', $pde_recepcion->getPdeCentroRecepcion()->getGeoLocalidad()->getDescripcionCompleta(), $x, $y = $y+6);


$x = 110;
$y = 34;
$pdf->setParSimple('Categoria', $pde_recepcion->getInsInsumo()->getInsCategoria()->getDescripcion(), $x, $y = $y+6);
$pdf->setParMultiCell('Insumo', $pde_recepcion->getInsInsumo()->getDescripcion(), $x, $y = $y+6, $w = 70, $h = 4);
$y = $pdf->GetY();
$pdf->setParSimple('Marca', $pde_recepcion->getInsMarca()->getDescripcion(), $x, $y = $y+6);
$pdf->setParSimple('Cantidad', $pde_recepcion->getCantidad().' de '.$pde_oc->getCantidad(), $x, $y = $y+6);
$pdf->setParSimple('Imp Unidad', Gral::_echoImp($pde_recepcion->getImporteUnidad(), $pde_recepcion->getGralMoneda(), true), $x,$y = $y+6);
$pdf->setParSimple('Imp Total', Gral::_echoImp($pde_recepcion->getImporteTotal(), $pde_recepcion->getGralMoneda(), true), $x,$y = $y+6);
$pdf->setParSimple('Estado', $pde_recepcion->getPdeRecepcionEstadoActual()->getPdeRecepcionTipoEstado()->getDescripcion(), $x, $y = $y+6);
$pdf->setParSimple('Fact/Compr', $pde_recepcion->getNroComprobante(), $x, $y = $y+6);


$x = 20;
$y = 90;
$pdf->setParSimple('Cod OC', $pde_oc->getCodigo(), $x, $y = $y+6);
$pdf->setParSimple('Generada', Gral::getFechaToWeb($pde_oc->getCreado()), $x, $y = $y+6);
$pdf->setParSimple('Entrega Estim', Gral::getFechaToWeb($pde_oc->getFechaEntrega()), $x, $y = $y+6);
$pdf->setParSimple('Estado', $pde_oc->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getDescripcion(), $x, $y = $y+6);


$x = 110;
$y = 90;
$pdf->setParSimple('Imp OC Unidad', Gral::_echoImp($pde_oc->getImporteUnidad(), $pde_oc->getGralMoneda(), true), $x,$y = $y+6);
$pdf->setParSimple('Imp OC Total', Gral::_echoImp($pde_oc->getImporteTotal(), $pde_oc->getGralMoneda(), true), $x,$y = $y+6);


$x = 20;
$y = 120;
// Detalle de Condiciones de Pago Aceptadas por Proveedor
foreach($pde_condicion_pagos as $pde_condicion_pago){
	$condicion_pagos_desc.= $pde_condicion_pago->getDescripcion().', ';
}
$pdf->setParMultiCell('Cond Pago', $condicion_pagos_desc, $x, $y, 130, 5);



// Detalle de Estados de Recepcion 
$datos = array();
$pde_recepcion_estados = $pde_recepcion->getPdeRecepcionEstados();
foreach($pde_recepcion_estados as $pde_recepcion_estado){
	
	$pde_recepcion_tipo_estado = $pde_recepcion_estado->getPdeRecepcionTipoEstado();
	
	$dato = array(
		'fecha' => Gral::getFechaHoraToWeb($pde_recepcion_estado->getCreado()), 
		'estado' => $pde_recepcion_tipo_estado->getDescripcion(), 
		'observacion' => $pde_recepcion_estado->getObservacion(), 
	);
	//Gral::prr($dato);
	$datos[] = $dato;
}

$pdf->Ln(5);
$pdf->setTabla($datos, array(
	'fecha' => array(
					'ancho' => 30,
					'alineacion' => 'C',
					'index' => 'fecha',
					'label' => 'Fecha',
					),
	'estado' => array(
					'ancho' => 35,
					'alineacion' => 'C',
					'index' => 'estado',
					'label' => 'Estado',
					),
	'observacion' => array(
					'ancho' => 125,
					'alineacion' => 'L',
					'index' => 'observacion',
					'label' => 'Comentarios',
					),
	),
	array('margin_left' => 1)
	);


$pdf->Ln(10);
$pdf->setLinea('Cotizaciones Registradas');

// Detalle de Cotizaciones 
$datos = array();
$arr_proveedors_cotizaron = array();
$pde_cotizacions = $pde_pedido->getPdeCotizacions();
$cont = 0;
foreach($pde_cotizacions as $pde_cotizacion){
	$cont++;
	$dato = array(
		'cont' => $cont, 
		'fecha' => Gral::getFechaToWeb($pde_cotizacion->getCreado()), 
		'proveedor' => $pde_cotizacion->getPrvProveedor()->getDescripcion(), 
		'fecha_entrega' => Gral::getFechaToWeb($pde_cotizacion->getFechaEntrega()), 
		'marca' => $pde_cotizacion->getInsMarca()->getDescripcion(), 
		'cantidad' => $pde_cotizacion->getCantidad(), 
		'importe_unitario' => Gral::_echoImp($pde_cotizacion->getImporteUnidad(), $pde_cotizacion->getGralMoneda(), true), 
		'importe_total' => Gral::_echoImp($pde_cotizacion->getImporteTotal(), $pde_cotizacion->getGralMoneda(), true), 
		'genera_oc' => ($pde_cotizacion->getPdeOc()) ? 'SI' : '', 
	);
	//Gral::prr($dato);
	$datos[] = $dato;
	
	$arr_proveedors_cotizaron[$pde_cotizacion->getPrvProveedorId()] = $pde_cotizacion->getPrvProveedorId();
}

$prv_proveedors = $pde_pedido->getPrvProveedorsXPdePedidoPrvProveedor();
foreach($prv_proveedors as $prv_proveedor){
	$cotizo = in_array($prv_proveedor->getId(), $arr_proveedors_cotizaron);
	if(!$cotizo){
		// se agregan proveedores que no cotizaron
		$cont++;
		$dato = array(
			'cont' => $cont, 
			'fecha' => '-',
			'proveedor' => $prv_proveedor->getDescripcion(), 
			'fecha_entrega' => '', 
			'marca' => 'No Cotizó',
			'cantidad' => '',
			'importe_unitario' => '',
			'importe_total' => '',
			'genera_oc' => '',
		);
		//Gral::prr($dato);
		$datos[] = $dato;
	}
}

$pdf->setTabla($datos, array(
	'cont' => array(
					'ancho' => 5,
					'alineacion' => 'C',
					'index' => 'cont',
					'label' => '',
					),
	'fecha' => array(
					'ancho' => 18,
					'alineacion' => 'C',
					'index' => 'fecha',
					'label' => 'Fecha',
					),
	'proveedor' => array(
					'ancho' => 50,
					'alineacion' => 'L',
					'index' => 'proveedor',
					'label' => 'Proveedor',
					),
	'fecha_entrega' => array(
					'ancho' => 18,
					'alineacion' => 'C',
					'index' => 'fecha_entrega',
					'label' => 'Entrega',
					),
	'marca' => array(
					'ancho' => 30,
					'alineacion' => 'C',
					'index' => 'marca',
					'label' => 'Marca',
					),
	'cantidad' => array(
					'ancho' => 10,
					'alineacion' => 'C',
					'index' => 'cantidad',
					'label' => 'Cant',
					),
	'importe_unitario' => array(
					'ancho' => 25,
					'alineacion' => 'R',
					'index' => 'importe_unitario',
					'label' => 'Imp Uni',
					),
	'importe_total' => array(
					'ancho' => 25,
					'alineacion' => 'R',
					'index' => 'importe_total',
					'label' => 'Imp Tot',
					),
	'genera_oc' => array(
					'ancho' => 10,
					'alineacion' => 'C',
					'index' => 'genera_oc',
					'label' => 'OC',
					),
	),
	array('margin_left' => 1)
	);


$pdf->Output();
?>