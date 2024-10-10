<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_ticket_kude.php';

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura = VtaFactura::getOxId($vta_factura_id);


// ----------------------------------------------------------------------------------
// Instancia el EkuDe vinculado al Comprobante
// ----------------------------------------------------------------------------------
$eku_de = $vta_factura->getEkuDeActualDelComprobante();


$gral_tipo_ivas = GralTipoIva::getGralTipoIvas(null, null, true, array(array("campo" => "orden", "orden" => "asc")));
$eku_de_e700_g_dtip_d_e_g_cam_items = $eku_de->getEkuDeE700GDtipDEGCamItems(null, null, true);
$eku_de_f001_g_tot_sub = $eku_de->getEkuDeF001GTotSub();

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

$eku_F008_dtotope = $eku_de_f001_g_tot_sub->getEkuF008Dtotope();
$eku_F009_dtotdesc = $eku_de_f001_g_tot_sub->getEkuF009Dtotdesc();

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
$pdf->setNumeroComprobante($numero_comprobante);
$pdf->setFecha($fecha);

//receptor
$receptor_razon_social = substr($receptor_razon_social, 0, 40);
$receptor_domicilio = substr($receptor_domicilio, 0, 40);
$pdf->setReceptorRuc($receptor_ruc);
$pdf->setReceptorDocumento($receptor_doc);
$pdf->setReceptorRazonSocial($receptor_razon_social);
$pdf->setReceptorCondicionOperacion($receptor_condicion_operacion);


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
$y = 90;
$y_alto = 4;
$line_x = 3;
$line_y = 70;

$style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
// -------------------------------------------------------------------------------------------
$pdf->Line($line_x, $y += $y_alto, $x + $line_y, $y, 'D', array('all' => $style_line));

$pdf->setXY($x, $y += $y_alto);
$pdf->Cell(1, 3, 'Productos', 0, 1, 'L', 0);


// -----------------------------------------------------------------------------
// Cabeceras de Productos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', 'B', 7);

$pdf->setXY($x, $y += $y_alto + 1);
$pdf->Cell(1, 3, 'Cod Art', 0, 1, 'L', 0);

$pdf->setXY($x + 15, $y);
$pdf->Cell(1, 3, 'Descripcion', 0, 1, 'L', 0);

$pdf->setXY($x + 43, $y);
$pdf->Cell(1, 3, 'Cant', 0, 1, 'L', 0);

$pdf->setXY($x + 52, $y);
$pdf->Cell(1, 3, 'Total', 0, 1, 'L', 0);


// -----------------------------------------------------------------------------
// Listado de Productos
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 7);

foreach ( $eku_de_e700_g_dtip_d_e_g_cam_items as $i => $eku_de_e700_g_dtip_d_e_g_cam_item )
{
    $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE720GDtipDEGCamItemGValorItem();
    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE730GDtipDEGCamItemGCamIVA();
    
    $eku_de_e701_dCodInt = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE701Dcodint();
    $eku_de_e708_dDesProSer = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE708Ddesproser();
    $eku_de_e711_dCantProSer = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser();
    $eku_de_e721_dPUniProSer = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE721Dpuniproser();
    $importe_x_eku_e734_dtasaiva = $eku_de_e711_dCantProSer * $eku_de_e721_dPUniProSer;
    
    $pdf->setXY($x, $y = $y + $y_alto + 0);
    $pdf->Cell(1, 3, $eku_de_e701_dCodInt, 0, 1, 'L', 0);
    
    $pdf->setXY($x + 15, $y);
    $pdf->Cell(1, 3, substr(($eku_de_e708_dDesProSer), 0, 20), 0, 1, 'L', 0);
    
    $pdf->setXY($x + 43, $y);
    $pdf->Cell(1, 3, $eku_de_e711_dCantProSer, 0, 1, 'L', 0);
    
    $pdf->setXY($x + 52, $y);
    $pdf->Cell(1, 3, Gral::_echoImp($importe_x_eku_e734_dtasaiva, false, true), 0, 1, 'L', 0);
}


$style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
// -------------------------------------------------------------------------------------------
$pdf->Line($line_x, $y += $y_alto + 2, $x + $line_y, $y, 'D', array('all' => $style_line));

// -----------------------------------------------------------------------------
// Subtotal
// -----------------------------------------------------------------------------
$pdf->SetFont('Helvetica', '', 8);

// label
$pdf->setXY($x, $y += $y_alto);
$pdf->Cell(1, 3, 'Total Operación', 0, 1, 'L', 0);

// dato
$pdf->setXY($x + 65, $y);
$pdf->Cell(1, 3, Gral::_echoImp($eku_F008_dtotope, false, true), 0, 1, 'R', 0);

// label
$pdf->setXY($x, $y += $y_alto + 2);
$pdf->Cell(1, 3, 'Total Descuento en Gs', 0, 1, 'L', 0);

// dato
$pdf->setXY($x + 65, $y);
$pdf->Cell(1, 3, Gral::_echoImp($eku_F009_dtotdesc, false, true), 0, 1, 'R', 0);

// label
$pdf->setXY($x, $y += $y_alto + 2);
$pdf->Cell(1, 3, 'Detalle totales (Base Imponible)', 0, 1, 'L', 0);

foreach($gral_tipo_ivas as $gral_tipo_iva)
{
    $valor_iva = $gral_tipo_iva->getValorIva();
    $eku_e734_dtasaiva = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva();
    
    $subtotal_iva = 0;
    if ( $valor_iva == $eku_e734_dtasaiva )
    {
        switch ( $valor_iva )
        {
            case GralTipoIva::TIPO_5: 
                $subtotal_iva = $eku_de_f001_g_tot_sub->getEkuF004Dsub5();
                break;
            case GralTipoIva::TIPO_10:
                $subtotal_iva = $eku_de_f001_g_tot_sub->getEkuF005Dsub10();
                break;
            case GralTipoIva::TIPO_EXENTO:
                $subtotal_iva = $eku_de_f001_g_tot_sub->getEkuF002Dsubexe();
                break;
        }
        
        // label
        $pdf->setXY($x, $y += $y_alto);
        $pdf->Cell(1, 3, 'Sub total Gravadas ' . $gral_tipo_iva->getDescripcion(), 0, 1, 'L', 0);
        
        // dato
        $pdf->setXY($x + 65, $y);
        $pdf->Cell(1, 3, Gral::_echoImp($subtotal_iva, false, true), 0, 1, 'R', 0);
    }
}

// -----------------------------------------------------------------------------
// IVA
// -----------------------------------------------------------------------------

$pdf->setXY($x, $y += $y_alto + 2);
$pdf->Cell(1, 3, 'Detalle del impuesto', 0, 1, 'L', 0);

foreach ( $gral_tipo_ivas as $gral_tipo_iva )
{
    $valor_iva = $gral_tipo_iva->getValorIva();
    $eku_e734_dtasaiva = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva();

    $iva_liquidacion = 0;
    if ( $valor_iva == $eku_e734_dtasaiva )
    {
        switch ( $valor_iva )
        {
            case GralTipoIva::TIPO_5: 
                $iva_liquidacion = $eku_de_f001_g_tot_sub->getEkuF015Diva5();
                break;
            case GralTipoIva::TIPO_10:
                $iva_liquidacion = $eku_de_f001_g_tot_sub->getEkuF016Diva10();
                break;
            case GralTipoIva::TIPO_EXENTO:
                $iva_liquidacion = $eku_de_f001_g_tot_sub->getEkuF017Dtotiva();
                break;
        }
        
        // label
        $pdf->setXY($x, $y += $y_alto);
        $pdf->Cell(1, 3, $gral_tipo_iva->getDescripcion(), 0, 1, 'L', 0);
        
        // dato
        $pdf->setXY($x + 65, $y);
        $pdf->Cell(1, 3, Gral::_echoImp($iva_liquidacion, false, true), 0, 1, 'R', 0);
    }
}

// label
$pdf->setXY($x, $y += $y_alto + 2);
$pdf->Cell(1, 3, 'Liquidación total del iva' .'X: ' . $pdf->GetX()   . ' - Y: ' . $pdf->GetY(), 0, 1, 'L', 0);

// dato
$pdf->setXY($x + 65, $y);
$pdf->Cell(1, 3, Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF017Dtotiva(), false, true), 0, 1, 'R', 0);



$style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
// -------------------------------------------------------------------------------------------
$pdf->Line($line_x, $y += $y_alto + 2, $x + $line_y, $y, 'D', array('all' => $style_line));


$pdf->SetFont('Helvetica', '', 8);

// cliente
$pdf->setXY($x, $y += $y_alto);
$pdf->Cell(1, 3, 'Cliente: ' . $receptor_razon_social, 0, 1, 'L', 0);

// Documento
$pdf->setXY($x, $y += $y_alto + 1);
$pdf->Cell(1, 3, 'Documento: ' . $receptor_documento, 0, 1, 'L', 0);

// RUC
$pdf->setXY($x, $y += $y_alto + 1);
$pdf->Cell(1, 3, 'RUC: ' . $receptor_ruc, 0, 1, 'L', 0);

// condicion venta
$pdf->setXY($x, $y += $y_alto + 1);
$pdf->Cell(1, 3, "Condición de Venta: " . $receptor_condicion_operacion, 0, 1, 'L', 0);

$style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
// -------------------------------------------------------------------------------------------
$pdf->Line($line_x, $y += $y_alto + 2,  $x + $line_y, $y, 'D', array('all' => $style_line));

//$pdf->setXY($pdf->GetX(), $pdf->GetY()+ 6);
//$pdf->Cell(1, 3, 'X: ' . $pdf->GetX(), 0, 1, 'L', 0);
?>