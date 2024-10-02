<?php

include_once '_autoload.php';

//include('ExceptionHandler.php');
//include('WsAa.php');
//include('WsAfip.php');

/**
 * WsAa
 */
$wsaa = new WsAa('wsfev1');

if ($wsaa->get_expiration() < date("Y-m-d h:m:i")) {
    if ($wsaa->generar_TA()) {
        echo '<br>Nuevo TA';
    } else {
        echo '<br>Error al obtener el TA';
    }
} else {
    echo '<br>TA expiration: ' . $wsaa->get_expiration();
}


/**
 * WsAfip (WSFEV1)
 */
$wsfev1 = new WsAfip();

// Carga el archivo TA.xml
$wsfev1->openTA();

// =============================================================================
// =============================================================================
//$tipo_documentos = $wsfev1->FEParamGetTiposDoc();
//Gral::prr($tipo_documentos);
//$tipo_conceptos = $wsfev1->FEParamGetTiposConcepto();
//Gral::prr($tipo_conceptos);
//$tipo_ivas = $wsfev1->FEParamGetTiposIva();
//Gral::prr($tipo_ivas);
//$tipo_monedas = $wsfev1->FEParamGetTiposMonedas();
//Gral::prr($tipo_monedas);
//$tipo_opcionals = $wsfev1->FEParamGetTiposOpcional();
//Gral::prr($tipo_opcionals);
//$tipo_tributos = $wsfev1->FEParamGetTiposTributos();
//Gral::prr($tipo_tributos);
//$punto_ventas = $wsfev1->FEParamGetPtosVenta();
//Gral::prr($punto_ventas);
//$moneda_id = 'DOL';
//$cotizacions = $wsfev1->FEParamGetCotizacion($moneda_id);
//Gral::prr($cotizacions);
//$tipo_paiss = $wsfev1->FEParamGetTiposPaises();
//Gral::prr($tipo_paiss);
//$dummy = $wsfev1->FEDummy();
//Gral::prr($dummy);
//
//$punto_venta = 4000; //Punto de Venta
//$tipo_comprobante = 1; //1=Factura A
//$numero_comprobante = 4;
//$comprobante = $wsfev1->FECompConsultar($numero_comprobante, $tipo_comprobante, $punto_venta);
//Gral::prr($comprobante);
//$comprobante = $wsfev1->FECompConsultar(3, $tipo_comprobante, $punto_venta);
//Gral::prr($comprobante);


//exit();

// =============================================================================
// =============================================================================

$ptovta = 4000; //Punto de Venta
$tipocbte = 1; //1=Factura A

$regfe['CbteTipo'] = $tipocbte;
$regfe['Concepto'] = 1;
$regfe['DocTipo'] = 80; //80=CUIL
//$regfe['DocNro'] = 20288184578; // Pablo
$regfe['DocNro'] = 30709676772; // V&E

//$regfe['CbteDesde']=$cbte; 	// nro de comprobante desde (para cuando es lote)
//$regfe['CbteHasta']=$cbte;	// nro de comprobante hasta (para cuando es lote)
$regfe['CbteFch'] = date('Ymd');  // fecha emision de factura
$regfe['ImpNeto'] = 100;   // neto gravado
$regfe['ImpTotConc'] = 0;   // no gravado
$regfe['ImpIVA'] = 21;   // IVA liquidado
$regfe['ImpTrib'] = 0;   // otros tributos
$regfe['ImpOpEx'] = 0;   // operacion exentas
$regfe['ImpTotal'] = 121;   // total de la factura. ImpNeto + ImpTotConc + ImpIVA + ImpTrib + ImpOpEx
$regfe['FchServDesde'] = null; // solo concepto 2 o 3
$regfe['FchServHasta'] = null; // solo concepto 2 o 3
$regfe['FchVtoPago'] = null;  // solo concepto 2 o 3
$regfe['MonId'] = 'PES';    // Id de moneda 'PES'
$regfe['MonCotiz'] = 1;   // Cotizacion moneda. Solo exportacion

// Comprobantes asociados (solo notas de crédito y débito):
//$regfeasoc['Tipo'] = 91; //91; //tipo 91|5			
//$regfeasoc['PtoVta'] = 1;
//$regfeasoc['Nro'] = 1;

// Detalle de otros tributos
$regfetrib['Id'] = 1;
$regfetrib['Desc'] = 'impuesto';
$regfetrib['BaseImp'] = 0;
$regfetrib['Alic'] = 0;
$regfetrib['Importe'] = 0;

// Detalle de iva
$regfeiva['Id'] = 5;
$regfeiva['BaseImp'] = 100;
$regfeiva['Importe'] = 21;

//$regfetrib['otro_array_otro'] = $regfeivas;
//$regfeiva['otro_array_tributo'] = $regfetrib;
//$regfe['otro_array_iva'] = $regfeiva;


//Gral::prr($regfeiva);
//Gral::prr($regfeasoc);
//Gral::prr($regfetrib);
//Gral::prr($regfe);
//Gral::wLogArray($regfe);
//exit();

$nro = $wsfev1->FECompUltimoAutorizado($ptovta, $tipocbte);

if ($nro == false && $nro != 0) {
    echo "<br>Error al obtener el ultimo numero autorizado<br>";
    $nro = 0;
    $nro1 = 0;
    echo "Code: ", $wsfev1->Code, "<br>";
    echo "Msg: ", $wsfev1->Msg, "<br>";
    echo "Obs: ", $wsfev1->ObsCode, "<br>";
    echo "Msg: ", $wsfev1->ObsMsg, "<br>";
} else {
    echo "<br>FECompUltimoAutorizado: $nro <br>";
    $nro1 = $nro + 1;
}

//FECAESolicitar($cbte, $ptovta, $regfe, $regfeasoc, $regfetrib, $regfeiva);
//FECAESolicitar($numero_comprobante, $punto_venta, $array_fe, $array_fe_tributo, $array_fe_iva, $array_fe_comprobante_asociado, $array_fe_opcional);
//$cae = $wsfev1->FECAESolicitar($nro1, // ultimo numero de comprobante autorizado mas uno 
//        $ptovta, // el punto de venta
//        $regfe, // los datos a facturar
//        $regfetrib, 
//        $regfeiva,
//        $regfeasoc, 
//        $regfeopc 
//);

$respuesta_solicitud = $wsfev1->FECAESolicitar($nro1, // ultimo numero de comprobante autorizado mas uno 
        $ptovta, // el punto de venta
        $regfe, // los datos a facturar
        $regfetrib, 
        $regfeiva
);

$caenum = $respuesta_solicitud['CAE'];
$caefvt = $respuesta_solicitud['CAEFchVto'];

if ($respuesta_solicitud == false || $respuesta_solicitud['CAE'] <= 0) {
    echo "<br>Error al obtener CAE<br>";
    echo "Code: ", $wsfev1->Code, "<br>";
    echo "Msg: ", $wsfev1->Msg, "<br>";
    echo "Obs: ", $wsfev1->ObsCode, "<br>";
    echo "Msg: ", $wsfev1->ObsMsg, "<br>";
}

if ($caenum <= 0 || $caenum == '' || $caenum == false) {
    echo "<br>";
    echo "Error al obtener CAE";
    echo "<br>";
} else {
    echo "<br>";
    echo "Ok";
    echo "<br>";
}

echo "<br>";
echo "Nro: ";
echo $nro + 1;
echo "<br>";
echo "Cae: ", $caenum;
echo "<br>";
echo "Fecha Vto: ", $caefvt;
echo "<br>";

echo "================================================================";
Gral::prr($respuesta_solicitud);
Gral::wLogArray($regfe);
?>