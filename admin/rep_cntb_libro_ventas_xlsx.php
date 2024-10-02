<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';
include_once 'control/seguridad.php';

$vta_punto_ventas = VtaPuntoVenta::getVtaPuntoVentas(null, null, true);
$gral_condicion_ivas = GralCondicionIva::getGralCondicionIvas(null, null, true);
$gral_tipo_ivas = GralTipoIva::getGralTipoIvas(null, null, true);
$gral_tipo_ivas_gravados = GralTipoIva::getGralTipoIvasGravados();
$vta_tributos = VtaTributo::getVtaTributos(null, null, true);
$vta_tipo_comprobantes = VtaComprobante::getVtaTipoComprobantes();

$fecha_desde = Gral::getFechaToDb($txt_filtro_desde);
$fecha_hasta = Gral::getFechaToDb($txt_filtro_hasta);

$vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa_id = $cmb_filtro_gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $cmb_filtro_gral_mes_id, $cmb_filtro_anio, $cli_cliente_id = $cmb_filtro_cli_cliente_id, $incluir_recibos = false);
//Gral::prr($vta_comprobantes);
//exit;

$arr_resumen_libro_ventas = VtaComprobante::getArrResumenLibroVentas($vta_comprobantes);
//Gral::prr($arr_resumen_libro_ventas);
//exit;

//$gral_empresa_id = 1;
$gral_empresa    = GralEmpresa::getOxId($gral_empresa_id);
$cli_cliente     = CliCliente::getOxId($cli_cliente_id);

if($gral_empresa){
    $empresa_descripcion = $gral_empresa->getDescripcion();
}

if($cli_cliente){
    $cliente_descripcion = $cli_cliente->getDescripcion();
}



/** PHPExcel */
require_once Gral::getPathAbs().'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// Create new PHPExcel object
$xls = new PHPExcel();
$xls->getProperties()->setCreator(Gral::getConfig("sistema_nombre"))
        ->setLastModifiedBy(Gral::getConfig("sistema_nombre"))
        ->setTitle(Gral::getConfig("sistema_nombre"))
        ->setSubject(Gral::getConfig("sistema_nombre"))
        ->setDescription(Gral::getConfig("sistema_nombre"))
        ->setKeywords(Gral::getConfig("sistema_nombre"))
        ->setCategory(Gral::getConfig("sistema_nombre"));


include "rep_cntb_libro_ventas_xlsx_1_resumen_subtotal.php";
include "rep_cntb_libro_ventas_xlsx_2_resumen_iva.php";
include "rep_cntb_libro_ventas_xlsx_3_resumen_otros_tributos.php";
include "rep_cntb_libro_ventas_xlsx_4_comprobantes.php";


// se reactiva el primer libro para que al abrir lo muestre
$xls->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $db_nombre_pagina.'.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>