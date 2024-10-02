<?php

set_time_limit(0);

include_once 'control/seguridad.php';
include_once '_autoload.php';
include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_contabilidad.php';

$vta_punto_ventas = VtaPuntoVenta::getVtaPuntoVentas(null, null, true);
$gral_condicion_ivas = GralCondicionIva::getGralCondicionIvas(null, null, true);
$gral_tipo_ivas = GralTipoIva::getGralTipoIvas(null, null, true);
$gral_tipo_ivas_gravados = GralTipoIva::getGralTipoIvasGravados();
$vta_tributos = VtaTributo::getVtaTributos(null, null, true);
$vta_tipo_comprobantes = VtaComprobante::getVtaTipoComprobantes();

$gral_mes = GralMes::getOxId($cmb_filtro_gral_mes_id);

$vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa_id = $cmb_filtro_gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $cmb_filtro_gral_mes_id, $cmb_filtro_anio, $cli_cliente_id = $cmb_filtro_cli_cliente_id, $incluir_recibos = false);
//Gral::prr($vta_comprobantes);
//exit;

$fecha_desde = Date::getPrimeraFechaDelMes($gral_mes->getCodigoNumero(), $cmb_filtro_anio);
$fecha_hasta = Date::getUltimaFechaDelMes($gral_mes->getCodigoNumero(), $cmb_filtro_anio);


//$gral_empresa_id = 1;
$gral_empresa    = GralEmpresa::getOxId($gral_empresa_id);
$cli_cliente     = CliCliente::getOxId($cli_cliente_id);

if($gral_empresa){
    $empresa_descripcion = $gral_empresa->getDescripcion();
}

if($cli_cliente){
    $cliente_descripcion = $cli_cliente->getDescripcion();
}


$arr_vta_comprobantes_paginados = array();
$pagina = 1;
$contador = 1;
foreach ($vta_comprobantes as $vta_comprobante) {
    $contador++;
    $arr_vta_comprobantes_paginados[$pagina][] = $vta_comprobante;

    if ($contador > 20) {
        $pagina++;
        $contador = 1;
    }
}
//Gral::prr($arr_vta_comprobantes_paginados);
//exit;


$tipo = "Libro de Ventas";

// -----------------------------------------------------------------------------
// Se inicializa PDF
// -----------------------------------------------------------------------------
$pdf = new PDFComprobanteContabilidad($orientation = 'L');
$pdf->SetTitle($tipo);

$pdf->setTipo($tipo);
//$pdf->setCuenta($cuenta);
//$pdf->setEjericio($ejericio);
$pdf->setFechaDesde($fecha_desde);
$pdf->setFechaHasta($fecha_hasta);
$pdf->setFecha($fecha);
$pdf->setEmpresa($empresa_descripcion);
$pdf->setProveedor($proveedor_descripcion);

foreach ($arr_vta_comprobantes_paginados as $pagina => $vta_comprobantes_pagina) {

    $pdf->AddPage();
    $pdf->SetFont('Helvetica', 'B', 12);

    $pdf->setX(0);
    $pdf->setY(52.5);

    $pdf->SetMargins(10, 55, 10, true);
    $pdf->SetAutoPageBreak(TRUE, 10);

    foreach ($vta_comprobantes_pagina as $i => $vta_comprobante) {
        
        include "rep_cntb_libro_ventas_pdf_calculos.php";

        $importe_total_libro_subtotal_neto_gravado += $importe_subtotal_neto_gravado;
        $importe_total_libro_subtotal_neto_no_gravado += $importe_subtotal_neto_no_gravado;
        $importe_total_libro_iva_21_importe += $importe_iva_importe_21;
        $importe_total_libro_iva_105_importe += $importe_iva_importe_105;
        $importe_total_libro_perc_iibb_mnes_importe += $importe_tributos_perc_iibb_mnes_importe;
        $importe_total_libro_tributos_importe += $importe_tributos_importe;
        $importe_total_libro_total_comprobante += $importe_total_comprobante;
    }

    $arr_total_libro_acumulado = array(
        'importe_total_libro_subtotal_neto_gravado' => $importe_total_libro_subtotal_neto_gravado,
        'importe_total_libro_subtotal_neto_no_gravado' => $importe_total_libro_subtotal_neto_no_gravado,
        'importe_total_libro_iva_21_importe' => $importe_total_libro_iva_21_importe,
        'importe_total_libro_iva_105_importe' => $importe_total_libro_iva_105_importe,
        'importe_total_libro_perc_iibb_mnes_importe' => $importe_total_libro_perc_iibb_mnes_importe,
        'importe_total_libro_tributos_importe' => $importe_total_libro_tributos_importe,
        'importe_total_libro_total_comprobante' => $importe_total_libro_total_comprobante,
    );

    // -----------------------------------------------------------------------------
    // Cuerpo de Comprobante
    // -----------------------------------------------------------------------------
    $param = array(
        'pagina' => $pagina,
        'gral_empresa_id' => ($gral_empresa) ? $gral_empresa->getId() : false,
        'prv_proveedor_id' => ($prv_proveedor) ? $prv_proveedor->getId() : false,
        'fecha_desde' => $fecha_desde,
        'fecha_hasta' => $fecha_hasta,
        'vta_comprobantes_pagina' => $vta_comprobantes_pagina,
        'arr_total_libro_acumulado' => $arr_total_libro_acumulado,
    );
    $archivo = Gral::getPathAbs() . "admin/rep_cntb_libro_ventas_pdf_tabla.php";
    $html_tabla = Gral::get_include_contents($archivo, $param);
    $pdf->writeHTML($html_tabla);
}

$pdf->Output(Gral::getConfig('conf_proyecto_min').' - Libro de Ventas', 'I');
exit;
?>