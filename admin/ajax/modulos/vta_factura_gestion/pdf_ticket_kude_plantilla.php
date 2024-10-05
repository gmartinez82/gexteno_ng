<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_ticket_kude.php';

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);


// ----------------------------------------------------------------------------------
// Instancia el EkuDe vinculado al Comprobante
// ----------------------------------------------------------------------------------
$eku_de = $vta_factura->getEkuDeActualDelComprobante();

// -----------------------------------------------------------------------------------
// datos del emisor
// -----------------------------------------------------------------------------------
$eku_de_d100_g_dat_gral_ope_g_emis = $eku_de->getEkuDeD100GDatGralOpeGEmis();

$eku_d105_dnomemi = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD105Dnomemi();
$eku_d106_dnomfanemi = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD106Dnomfanemi();
$eku_d107_ddiremi = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD107Ddiremi();
$eku_d116_ddesciuemi = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD116Ddesciuemi();
$eku_d117_dtelemi = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD117Dtelemi();
$eku_d118_demaile = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD118Demaile();
$eku_d101_drucem = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD101Drucem();
$eku_d102_dcvemi = $eku_de_d100_g_dat_gral_ope_g_emis->getEkuD102Ddvemi();


$eku_de_d130_g_dat_gral_ope_g_emis_g_act_ecos = $eku_de->getEkuDeD130GDatGralOpeGEmisGActEcos();
$eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = $eku_de_d130_g_dat_gral_ope_g_emis_g_act_ecos[0];
$eku_d131_cacteco = $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEkuD131Cacteco();
$eku_d132_ddesacteco = $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEkuD132Ddesacteco();

$eku_de_c001_g_timb = $eku_de->getEkuDeC001GTimb();
$eku_c002_itide = $eku_de_c001_g_timb->getEkuC002Itide();
$eku_c003_destide = $eku_de_c001_g_timb->getEkuC003Ddestide();
$eku_c004_dnumtim = $eku_de_c001_g_timb->getEkuC004Dnumtim();
$eku_c008_dfeinit = $eku_de_c001_g_timb->getEkuC008Dfeinit();
$eku_c010_dserienum = $eku_de_c001_g_timb->getEkuC010Dserienum();
$eku_C005_dest = $eku_de_c001_g_timb->getEkuC005Dest();
$eku_C006_dpunexp = $eku_de_c001_g_timb->getEkuC006Dpunexp();
$eku_C007_dnumdoc = $eku_de_c001_g_timb->getEkuC007Dnumdoc();

$eku_de_e600_g_dtip_d_e_g_cam_cond = $eku_de->getEkuDeE600GDtipDEGCamCond();
$eku_e602_ddcondope = $eku_de_e600_g_dtip_d_e_g_cam_cond->getEkuE602Ddcondope();

$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = $eku_de->getEkuDeE640GDtipDEGCamCondGPagCred();


if($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred){
    //$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = new EkuDeE640GDtipDEGCamCondGPagCred();
    
    if($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE641Icondcred() == 2){ // Cuotas
        $eku_e602_ddcondope .= ' - '.$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE642Ddcondcred().': '.$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE644Dcuotas();
    }
    if($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE641Icondcred() == 1){ // Plazo
        $eku_e602_ddcondope .= ' - '.$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE642Ddcondcred().': '.$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE643Dplazocre();
    }
}

// -----------------------------------------------------------------------------------
// datos del receptor
// -----------------------------------------------------------------------------------
$eku_de_d200_g_dat_gral_ope_g_dat_rec = $eku_de->getEkuDeD200GDatGralOpeGDatRec();

$eku_d201_inatrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD201Inatrec();
$eku_d206_drucrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec();
$eku_d207_ddvrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD207Ddvrec();
$eku_d210_dnumidrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec();

$eku_d211_dnomrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD211Dnomrec();
$eku_d213_ddirrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD213Ddirrec();
$eku_d214_dtelrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD214Dtelrec();
$eku_d216_demailrec = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD216Demailrec();


$eku_de_d010_g_dat_gral_ope_g_ope_com = $eku_de->getEkuDeD010GDatGralOpeGOpeCom();
$eku_d012_destiptra = $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD012Ddestiptra();
$eku_d016_ddesmoneope = $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD016Ddesmoneope();
$eku_d016_cmoneope = $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD015Cmoneope();

$eku_d018_dticam = $eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD018DTiCam();

$eku_de_d001_g_dat_gral_ope = $eku_de->getEkuDeD001GDatGralOpe();
$eku_D002_dfeemide = $eku_de_d001_g_dat_gral_ope->getEkuD002Dfeemide();


// Emisor
$cliente = $eku_d105_dnomemi;
$emisor_nombre_fantasia = $eku_d106_dnomfanemi;
$domicilio = $eku_d107_ddiremi;
$vta_punto_venta_localidad = $eku_d116_ddesciuemi;
$telefono = $eku_d117_dtelemi;
$email = $eku_d118_demaile;
$actividad = $eku_d131_cacteco . ' - ' . $eku_d132_ddesacteco;
$actividad = $eku_d132_ddesacteco;
$cuit = $eku_d101_drucem.'-'.$eku_d102_dcvemi;
$timbrado = $eku_c004_dnumtim;
$fecha = Gral::getFechaToWEB($eku_c008_dfeinit);
$serie = $eku_c010_dserienum;
$tipo_comprobante_descripcion = $eku_c003_destide;
$tipo_comprobante_codigo = "CODIGO";
$numero_comprobante = $eku_C005_dest . '-' . $eku_C006_dpunexp . '-' . $eku_C007_dnumdoc;


//Receptor
if(trim($eku_d206_drucrec) != ''){
    $receptor_ruc = $eku_d206_drucrec.'-'.$eku_d207_ddvrec;
}
$receptor_doc = $eku_d210_dnumidrec;
$receptor_razon_social = $eku_d211_dnomrec;
$receptor_domicilio = $eku_d213_ddirrec;
$receptor_telefono = $eku_d214_dtelrec;
$receptor_email = $eku_d216_demailrec;

$eku_D002_dfeemide = str_replace('T', ' ', $eku_D002_dfeemide);
$receptor_fecha_hora_emision = ($eku_D002_dfeemide);
$receptor_fecha_hora_emision = Gral::getFechaHoraToWEB($receptor_fecha_hora_emision);

$receptor_moneda_operacion = $eku_d016_cmoneope;//$eku_d016_ddesmoneope;
$receptor_tipo_cambio = $eku_d018_dticam;
$receptor_condicion_operacion = $eku_e602_ddcondope;
$receptor_tipo_transaccion = $eku_d012_destiptra;



$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentas();
$vta_punto_venta = $vta_factura->getVtaPuntoVenta();

$cli_cliente = $vta_factura->getCliCliente();

$gral_fp_forma_pago = $vta_factura->getGralFpFormaPago();
$vta_tipo_factura = $vta_factura->getVtaTipoFactura();

$wf_fe_param_tipo_comprobante = $vta_factura->getWsFeParamTipoComprobante();

$user = UsUsuario::autenticado();

$vta_presupuesto = $vta_factura->getVtaPresupuesto();
if ($vta_presupuesto) {
    $vendedor = $vta_presupuesto->getVtaVendedorId();
}

$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentas(null, null, true);
$vta_factura_items = $vta_factura->getVtaFacturaItems(null, null, true);

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFTicketKude('P', 'mm', array(80, 220 + (count($vta_factura_vta_orden_ventas) * 5)));
$pdf->SetTitle($vta_factura->getNombreArchivoAdjuntoFactura());

// -----------------------------------------------------------------------------
$pdf->setCUIT($cuit);
$pdf->setDomicilio($domicilio);
$pdf->setPuntoVentaLocalidad($vta_punto_venta_localidad);
$pdf->setTelefono($telefono);
$pdf->setEmail($email);
$pdf->setActividad($actividad);
$pdf->setTimbrado($timbrado);
$pdf->setReceptorFechaHoraEmision($receptor_fecha_hora_emision);

$pdf->setFecha($fecha);

$pdf->AddFont('DejaVuSans', '', Gral::getPathAbs().'comps/tcpdf/fonts/dejavusans.php');
$pdf->AddFont('DejaVuSansCondensed', '', Gral::getPathAbs().'comps/tcpdf/fonts/dejavusanscondensed.php');

// -----------------------------------------------------------------------------
// Se crea pagina y margenes
// -----------------------------------------------------------------------------
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 11);

// -----------------------------------------------------------------------------
// Productos
// -----------------------------------------------------------------------------

$x = 3;
$y = 85;
$y_alto = 4;
$line_x = 3;
$line_y = 70;

$pdf->setXY($x, $y += $y_alto);
$pdf->Cell(1, 3, 'Productos', 0, 1, 'L', 0);

// -----------------------------------------------------------------------------
// Cabeceras de Productos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', 'B', 7);

$pdf->setXY($x, $y += $y_alto + 2);
$pdf->Cell(1, 3, 'Cant', 0, 1, 'L', 0);

$pdf->setXY($x + 10, $y);
$pdf->Cell(1, 3, 'Descripcion', 0, 1, 'L', 0);

if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
    $pdf->setXY($x + 43, $y);
    $pdf->Cell(1, 3, 'IVA', 0, 1, 'L', 0);
}
    
$pdf->setXY($x + 65, $y);
$pdf->Cell(1, 3, 'Neto', 0, 1, 'R', 0);


// -----------------------------------------------------------------------------
// Listado de Productos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);

foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
    $ins_insumo = $vta_factura_vta_orden_venta->getInsInsumo();
    $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();
    $importe_total = $vta_factura_vta_orden_venta->getImporteTotalParaComprobante();

    $pdf->setXY($x, $y = $y + $y_alto + 0);
    $pdf->Cell(1, 3, $vta_factura_vta_orden_venta->getCantidad(), 0, 1, 'L', 0);

    $pdf->setXY($x + 10, $y);
    $pdf->Cell(1, 3, substr(($vta_factura_vta_orden_venta->getDescripcion()), 0, 20), 0, 1, 'L', 0);

    if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
        $pdf->setXY($x + 43, $y);
        $pdf->Cell(1, 3, $gral_tipo_iva->getValorIva(), 0, 1, 'L', 0);
    }
    
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($importe_total, false, true), 0, 1, 'R', 0);
}


// -----------------------------------------------------------------------------
// Subtotal
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);

if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
    // label
    $pdf->setXY($x, $y += $y_alto + 4);
    $pdf->Cell(1, 3, 'Subtotal Gravado', 0, 1, 'L', 0);

    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO), false, true), 0, 1, 'R', 0);
    
    // label
    $pdf->setXY($x, $y += $y_alto + 0);
    $pdf->Cell(1, 3, 'Subtotal No Gravado', 0, 1, 'L', 0);

    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO), false, true), 0, 1, 'R', 0);
    
    // label
    $pdf->setXY($x, $y += $y_alto + 0);
    $pdf->Cell(1, 3, 'Subtotal Exento', 0, 1, 'L', 0);
    
    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_EXENTO), false, true), 0, 1, 'R', 0);
}
else {
    // label
    $pdf->setXY($x, $y += $y_alto + 4);
    //$pdf->Cell(1, 3, 'Subtotal Gravado', 0, 1, 'L', 0);
    $pdf->Cell(1, 3, 'Subtotal', 0, 1, 'L', 0);
    
    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaSubtotalParaComprobante(), false, true), 0, 1, 'R', 0);
}

// -----------------------------------------------------------------------------
// IVA
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);
if ($vta_factura->getVtaTipoFactura()->getCodigo() == VtaTipoFactura::TIPO_FACTURA_A) {
    /*foreach ($vta_factura->getArrIvaParaCitiFacturaFull() as $iva_tipo => $arr_iva_uno) {
        // label
        $pdf->setXY($x, $y += $y_alto + 0);
        $pdf->Cell(1, 3, $arr_iva_uno['descripcion'], 0, 1, 'L', 0);

        // dato
        $pdf->setXY($x + 65, $y);
        $pdf->Cell(1, 3, Gral::_echoImp($arr_iva_uno['importe_iva'], false, true), 0, 1, 'R', 0);
    }*/
}

// -----------------------------------------------------------------------------
// Tributos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);
foreach ($vta_factura->getArrVtaTributosAplicados() as $vta_tributo_id => $arr_tributo) {
    // label
    $pdf->setXY($x, $y += $y_alto + 0);
    $pdf->Cell(1, 3, $arr_tributo['vta_tributo_descripcion'], 0, 1, 'L', 0);

    // dato
    $pdf->setXY($x + 65, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($arr_tributo['importe'], false, true), 0, 1, 'R', 0);
}

// -----------------------------------------------------------------------------
// Total
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', 'B', 8);

// label
$pdf->setXY($x, $y += $y_alto + 4);
$pdf->Cell(1, 3, 'Total', 0, 1, 'L', 0);

// dato
$pdf->setXY($x + 65, $y);
$pdf->Cell(1, 3, Gral::_echoImp($vta_factura->getVtaFacturaTotal(), false, true), 0, 1, 'R', 0);


$style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
// -------------------------------------------------------------------------------------------
$pdf->Line($line_x, $y += $y_alto + 6, $x + $line_y, $y, 'D', array('all' => $style_line));
?>
