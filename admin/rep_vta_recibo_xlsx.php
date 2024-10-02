<?php

set_time_limit(0);

include_once 'control/seguridad.php';
include_once '_autoload.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 'A');
define('DB_XLS_CONFIG_PRIMER_FILA', '1');
// ----------------------------------------------------------------------------

$criterio = new Criterio();
$criterio->addDistinct(true);

if($txt_filtro_desde != ''){
    $criterio->add(VtaRecibo::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_desde).' 00:00:00', Criterio::MAYORIGUAL);
}

if($txt_filtro_hasta != ''){
    $criterio->add(VtaRecibo::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_hasta).' 23:59:59', Criterio::MENORIGUAL);
}

if($cmb_filtro_cli_cliente_id != 0){
    $criterio->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_tipo_recibo_id != 0){
    $criterio->add(VtaRecibo::GEN_ATTR_VTA_TIPO_RECIBO_ID, $cmb_filtro_vta_tipo_recibo_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_condicion_iva_id != 0){
    $criterio->add(VtaRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_caja_id != 0){
    $criterio->add(GralCaja::GEN_ATTR_ID, $cmb_filtro_gral_caja_id, Criterio::IGUAL);
}

if($cmb_filtro_fnd_caja_id != 0){
    $criterio->add(FndCaja::GEN_ATTR_ID, $cmb_filtro_fnd_caja_id, Criterio::IGUAL);
}

if($cmb_filtro_fnd_cajero_id != 0){
    $criterio->add(FndCajero::GEN_ATTR_ID, $cmb_filtro_fnd_cajero_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_empresa_id != 0){
    $criterio->add(VtaRecibo::GEN_ATTR_FND_CAJe, $cmb_filtro_gral_empresa_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_recibo_tipo_pago_id != 0){
    $criterio->add(VtaReciboTipoPago::GEN_ATTR_ID, $cmb_filtro_vta_recibo_tipo_pago_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_recibo_tipo_estado_id != 0){
    $criterio->add(VtaReciboTipoEstado::GEN_ATTR_ID, $cmb_filtro_vta_recibo_tipo_estado_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_recibo_condicion_pago_id != 0){
    $criterio->add(VtaReciboCondicionPago::GEN_ATTR_ID, $cmb_filtro_vta_recibo_condicion_pago_id, Criterio::IGUAL);
}

$criterio->addTabla(VtaRecibo::GEN_TABLA);
$criterio->addRealJoin(FndCaja::GEN_TABLA, FndCaja::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_FND_CAJA_ID);
$criterio->addRealJoin(FndCajero::GEN_TABLA, FndCajero::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJERO_ID);
$criterio->addRealJoin(GralCaja::GEN_TABLA, GralCaja::GEN_ATTR_ID, FndCaja::GEN_ATTR_GRAL_CAJA_ID);
$criterio->addRealJoin(VtaReciboTipoPago::GEN_TABLA, VtaReciboTipoPago::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_PAGO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaReciboCondicionPago::GEN_TABLA, VtaReciboCondicionPago::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_CONDICION_PAGO_ID, 'LEFT JOIN');

$criterio->setCriterios();
$vta_recibos = VtaRecibo::getVtaRecibos(null, $criterio);
//Gral::prr($vta_recibos);
//exit;

/** PHPExcel */
require_once Gral::getPathAbs().'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

$xls = new PHPExcel();
$xls->getProperties()->setCreator(Gral::getConfig("sistema_nombre"))
        ->setLastModifiedBy(Gral::getConfig("sistema_nombre"))
        ->setTitle(Gral::getConfig("sistema_nombre"))
        ->setSubject(Gral::getConfig("sistema_nombre"))
        ->setDescription(Gral::getConfig("sistema_nombre"))
        ->setKeywords(Gral::getConfig("sistema_nombre"))
        ->setCategory(Gral::getConfig("sistema_nombre"));

// -----------------------------------------------------------------------------
// se inicializa hoja
// -----------------------------------------------------------------------------
$xls->setActiveSheetIndex(0);
$xls->getActiveSheet()->setTitle('Datos');

// -----------------------------------------------------------------------------
// Cabecera
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$cols = array(
    $columna++ => array("ancho" => 20, "titulo" => "Codigo"  , "indice" => "codigo"),
    $columna++ => array("ancho" => 20, "titulo" => "Fecha"   , "indice" => "fecha"),
    $columna++ => array("ancho" => 50, "titulo" => "Cliente" , "indice" => "cliente"),
    $columna++ => array("ancho" => 20, "titulo" => "Cuit"    , "indice" => "cuit"),
    $columna++ => array("ancho" => 20, "titulo" => "Tipo"    , "indice" => "tipo"),
    $columna++ => array("ancho" => 20, "titulo" => "Total"   , "indice" => "total"),
    $columna++ => array("ancho" => 20, "titulo" => "Tipo Estado"   , "indice" => "tipo_estado"),
    $columna++ => array("ancho" => 29, "titulo" => "Tipo Pago"    , "indice" => "tipo_pago"),
    $columna++ => array("ancho" => 20, "titulo" => "Condicion Pago"   , "indice" => "condicion_pago"),
    $columna++ => array("ancho" => 20, "titulo" => "Cajero"   , "indice" => "cajero"),
    $columna++ => array("ancho" => 20, "titulo" => "Caja Diaria"   , "indice" => "fnd_caja"),
    $columna++ => array("ancho" => 20, "titulo" => "Caja"   , "indice" => "gral_caja"),
);

$linea = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($cols as $i => $col) {
    $xls->getActiveSheet()->getStyle($i . $linea)->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->setBold(true);
    $xls->getActiveSheet()->getColumnDimension($i)->setWidth($col['ancho']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle($i . $linea)->getFill()->getStartColor()->setARGB('666666');
    $xls->getActiveSheet()->setCellValue($i . $linea, $col['titulo']);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($i . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
}

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

foreach ($vta_recibos as $vta_recibo)
{
    $total         = "";
    $fecha         = Gral::getFechaToWeb($vta_recibo->getFechaEmision());
    $codigo        = $vta_recibo->getCodigo();
    $cliente       = $vta_recibo->getPersonaDescripcion();
    $cliente_cuit  = $vta_recibo->getCuit();
    $tipo          = $vta_recibo->getVtaTipoRecibo()->getCodigoMin();
    $total         = $vta_recibo->getVtaReciboTotal();
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    
    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($codigo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($fecha, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cliente, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cliente_cuit, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($tipo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo->getVtaReciboTipoEstado()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo->getVtaReciboTipoPago()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo->getVtaReciboCondicionPago()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo->getFndCaja()->getFndCajero()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo->getFndCaja()->getCodigo(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo->getFndCaja()->getGralCaja()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
}

// -----------------------------------------------------------------------------
//Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->freezePane(DB_XLS_CONFIG_PRIMER_COLUMNA.(DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
//Insertar filtros
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->setAutoFilter(DB_XLS_CONFIG_PRIMER_COLUMNA.DB_XLS_CONFIG_PRIMER_FILA.':'.$columna_ultima.DB_XLS_CONFIG_PRIMER_FILA);

// -----------------------------------------------------------------------------
// Genera el archivo de salida
// -----------------------------------------------------------------------------
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . DbConfig::CONFIG_GRAL_CLIENTE_MIN.'-'. $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>