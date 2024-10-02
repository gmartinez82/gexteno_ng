<?php
include_once '_autoload.php';

include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_kude.php';

$vta_nota_credito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_id', 0);
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);


// ----------------------------------------------------------------------------------
// Instancia el EkuDe vinculado al Comprobante
// ----------------------------------------------------------------------------------
$eku_de = $vta_nota_credito->getEkuDeActualDelComprobante();
//Gral::prr($eku_de);

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
$eku_c003_destide = $eku_de_c001_g_timb->getEkuC003Ddestide();$eku_c004_dnumtim = $eku_de_c001_g_timb->getEkuC004Dnumtim();
$eku_c008_dfeinit = $eku_de_c001_g_timb->getEkuC008Dfeinit();
$eku_c010_dserienum = $eku_de_c001_g_timb->getEkuC010Dserienum();
$eku_C005_dest = $eku_de_c001_g_timb->getEkuC005Dest();
$eku_C006_dpunexp = $eku_de_c001_g_timb->getEkuC006Dpunexp();
$eku_C007_dnumdoc = $eku_de_c001_g_timb->getEkuC007Dnumdoc();

$eku_de_e600_g_dtip_d_e_g_cam_cond = $eku_de->getEkuDeE600GDtipDEGCamCond();
if($eku_de_e600_g_dtip_d_e_g_cam_cond){
    $eku_e602_ddcondope = $eku_de_e600_g_dtip_d_e_g_cam_cond->getEkuE602Ddcondope();
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

//$eku_d215_dtelrec = "????????";


// -----------------------------------------------------------------------------
// datos propios de la NC / ND
// -----------------------------------------------------------------------------
$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e = $eku_de->getEkuDeE400GDtipDEGCamNCDE();
$eku_e401_Imotemi = $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE401Imotemi();
$eku_e402_Ddesmotemi = $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE402Ddesmotemi();

$eku_de_h001_g_cam_d_e_asoc = $eku_de->getEkuDeH001GCamDEAsoc();
$eku_h002_Itipdocaso = $eku_de_h001_g_cam_d_e_asoc->getEkuH002Itipdocaso();
$eku_h003_Ddestipdocaso = $eku_de_h001_g_cam_d_e_asoc->getEkuH003Ddestipdocaso();
$eku_h004_Dcdcderef = $eku_de_h001_g_cam_d_e_asoc->getEkuH004Dcdcderef();


//exit;

/*
METODO BASE
linea 1916
setGenerarXmlDE
*/



//$vta_nota_credito_vta_orden_ventas = $vta_nota_credito->getVtaNotaCreditoVtaOrdenVentas();
$vta_punto_venta = $vta_nota_credito->getVtaPuntoVenta();

$cli_cliente = $vta_nota_credito->getCliCliente();

$gral_fp_forma_pago = $vta_nota_credito->getGralFpFormaPago();
$vta_tipo_nota_credito = $vta_nota_credito->getVtaTipoNotaCredito();

$wf_fe_param_tipo_comprobante = $vta_nota_credito->getWsFeParamTipoComprobante();

$user = UsUsuario::autenticado();

//$vta_presupuesto = $vta_nota_credito->getVtaPresupuesto();
//if($vta_presupuesto){
//    $vendedor = $vta_presupuesto->getVtaVendedorId();
//}
/*

// -----------------------------------------------------------------------------
// Info de la Empresa
// -----------------------------------------------------------------------------
$tipo = "NotaCredito";
$tipo_letra = $vta_tipo_nota_credito->getCodigoMin();
$codigo = $vta_nota_credito->getCodigo();
$afip_codigo_barra = $vta_nota_credito->getBarcodeAFIPParaComprobante();
$afip_cae = $vta_nota_credito->getCae();
$afip_cae_vencimiento = $vta_nota_credito->getCaeVencimiento();
$afip_numero_comprobante = $vta_nota_credito->getNumeroComprobanteCompleto();
//$afip_codigo_tipo_comprobante = $wf_fe_param_tipo_comprobante->getCodigoAfip();
$fecha = Gral::getFechaToWEB($vta_nota_credito->getFechaEmision());

// -----------------------------------------------------------------------------
// Info de Cliente
// -----------------------------------------------------------------------------
$cliente = $vta_nota_credito->getPersonaDescripcion();
$cuit = $vta_nota_credito->getPersonaDocumento();
$condicion_iva = "Consumidor Final";
if ( $cli_cliente->getId() != 'null' ){
    $cliente = $cli_cliente->getId() . ' - ' . $cli_cliente->getRazonSocial();
    //$cliente = $cli_cliente->getId() . ' - ' . $vta_nota_credito->getPersonaDescripcion();
    $cliente = $vta_nota_credito->getPersonaDescripcion();

    $domicilio = $cli_cliente->getDomicilioLegal();
    $localidad = $cli_cliente->getGeoLocalidad()->getDescripcion()." (CP ".$cli_cliente->getCodigoPostal().")";
    $provincia = $cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion()." - ".$cli_cliente->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();
    $condicion_iva = $cli_cliente->getGralCondicionIva()->getDescripcion();
    $cuit = $cli_cliente->getCuit();
    $cuit = $vta_nota_credito->getPersonaDocumento();
    $iibb = "-";
    $telefono = $cli_cliente->getTelefono();
}
*/


// Emisor
$cliente = $eku_d105_dnomemi;
$emisor_nombre_fantasia = $eku_d106_dnomfanemi;
$domicilio = $eku_d107_ddiremi;
$vta_punto_venta_localidad = $eku_d116_ddesciuemi;
$telefono = $eku_d117_dtelemi;
$email = $eku_d118_demaile;
$actividad = $eku_d131_cacteco . ' - ' . $eku_d132_ddesacteco;
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


// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteKude();
$pdf->SetTitle($vta_nota_credito->getNombreArchivoAdjuntoNotaCredito());

// -----------------------------------------------------------------------------
$pdf->setTipoComprobanteDescripcion($tipo_comprobante_descripcion);
$pdf->setTipoComprobanteCodigo(EkuParamTipoDe::TIPO_NOTA_DE_CREDITO_ELECTRONICA);
$pdf->setCodigo($codigo);
$pdf->setFecha($fecha);
$pdf->setVendedor($vendedor);
$pdf->setPuntoVentaDomicilio($vta_punto_venta->getDomicilioFiscal());


$pdf->setCliente($cliente);
$pdf->setEmisorNombreFantasia($emisor_nombre_fantasia);
$pdf->setDomicilio($domicilio);
$pdf->setPuntoVentaLocalidad($vta_punto_venta_localidad);
$pdf->setTelefono($telefono);
$pdf->setEmail($email);
$pdf->setActividad($actividad);
$pdf->setCUIT($cuit);
$pdf->setTimbrado($timbrado);
$pdf->setFecha($fecha);
$pdf->setSerie($serie);
$pdf->setNumeroComprobante($numero_comprobante);


//receptor
$pdf->setReceptorRuc($receptor_ruc);
$pdf->setReceptorDocumento($receptor_doc);
$pdf->setReceptorRazonSocial($receptor_razon_social);
$pdf->setReceptorDomicilio($receptor_domicilio);
$pdf->setReceptorTelefono($receptor_telefono);
$pdf->setReceptorEmail($receptor_email);
$pdf->setReceptorFechaHoraEmision($receptor_fecha_hora_emision);
$pdf->setReceptorMonedaOperacion($receptor_moneda_operacion);
$pdf->setReceptorTipoCambio($receptor_tipo_cambio);
$pdf->setReceptorCondicionOperacion($receptor_condicion_operacion);
$pdf->setReceptorTipoTransaccion($receptor_tipo_transaccion);

$pdf->setTipoDocumentoAsociado($eku_h003_Ddestipdocaso);
$pdf->setMotivoEmision($eku_e402_Ddesmotemi);



$pdf->setLocalidad($localidad);
$pdf->setProvincia($provincia);
$pdf->setCondicionIva($condicion_iva);
$pdf->setIIBB($iibb);

$pdf->setSifenCodigoBarra($afip_codigo_barra);
$pdf->setSifenCae($afip_cae);
$pdf->setSifenCaeVencimiento($afip_cae_vencimiento);
//$pdf->setNumeroComprobante($afip_numero_comprobante);
$pdf->setSifenCodigoTipoComprobante($afip_codigo_tipo_comprobante);

$pdf->setSifenComprobanteUrlQR($vta_nota_credito->getSIFEN_DTE_URL());
$pdf->setSifenCdc($eku_de->getCdcFormateadoParaComprobante());

// -----------------------------------------------------------------------------

$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 12);
$pdf->setUsuario($user);

$pdf->setX(0);
$pdf->setY(84);

$pdf->SetMargins(10, 84, 10, true);
$pdf->SetAutoPageBreak(TRUE, 50);

//Gral::prr($vta_nota_credito);
//Gral::prr($vta_nota_credito->getWsFeOpeSolicitudXVtaNotaCreditoWsFeOpeSolicitud());
//Gral::prr($vta_nota_credito->getWsFeOpeSolicitudXVtaNotaCreditoWsFeOpeSolicitud()->getWsFeOpeSolicitudRespuesta());

if($vta_nota_credito->getCae() != ''){
    // -----------------------------------------------------------------------------
    // Cuerpo de Comprobante
    // -----------------------------------------------------------------------------
    $param = array(
        'vta_nota_credito_id' => $vta_nota_credito->getId(),
    );
    $archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_nota_credito_gestion/pdf_nota_credito_kude_plantilla_tabla.php";
    $html_tabla = Gral::get_include_contents($archivo, $param);

    $pdf->writeHTML($html_tabla);

    // -----------------------------------------------------------------------------
    // Totales de Comprobante
    // -----------------------------------------------------------------------------
    $archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_nota_credito_gestion/pdf_nota_credito_plantilla_bloque_totales.php";
    $html_tabla_totales = Gral::get_include_contents($archivo, $param);

    //$pdf->writeHTML($html_tabla_totales);

    // -----------------------------------------------------------------------------
    // Leyendas
    // -----------------------------------------------------------------------------
    $archivo = Gral::getPathAbs() . "admin/ajax/modulos/vta_nota_credito_gestion/pdf_nota_credito_plantilla_leyendas.php";
    $html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

    //$pdf->writeHTML($html_tabla_leyendas);
}else{
    $pdf->writeHTML('El comprobante no tiene un CAE generado, se debe generar para poder imprimir.');
}