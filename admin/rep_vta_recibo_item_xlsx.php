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
$criterio->addDistinct(false);

if($txt_filtro_desde != ''){
    $criterio->add(VtaReciboItem::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_desde).' 00:00:00', Criterio::MAYORIGUAL);
}

if($txt_filtro_hasta != ''){
    $criterio->add(VtaReciboItem::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_hasta).' 23:59:59', Criterio::MENORIGUAL);
}

if($cmb_filtro_gral_fp_forma_pago_id != 0){
    $criterio->add(VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, $cmb_filtro_gral_fp_forma_pago_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_fp_forma_pago_requiere_conciliacion != -1){
    $criterio->add(GralFpFormaPago::GEN_ATTR_REQUIERE_CONCILIACION, $cmb_filtro_gral_fp_forma_pago_requiere_conciliacion, Criterio::IGUAL);
}

if($cmb_filtro_vta_recibo_concepto_id != 0){
    $criterio->add(VtaReciboItem::GEN_ATTR_VTA_RECIBO_CONCEPTO_ID, $cmb_filtro_vta_recibo_concepto_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_recibo_item_conciliado != -1){
    $criterio->add(VtaReciboItem::GEN_ATTR_CONCILIADO, $cmb_filtro_vta_recibo_item_conciliado, Criterio::IGUAL);
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

$criterio->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_ID, VtaReciboItem::GEN_ATTR_VTA_RECIBO_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralFpFormaPago::GEN_TABLA, GralFpFormaPago::GEN_ATTR_ID, VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaReciboItem::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaReciboConcepto::GEN_TABLA, VtaReciboConcepto::GEN_ATTR_ID, VtaReciboItem::GEN_ATTR_VTA_RECIBO_CONCEPTO_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndCaja::GEN_TABLA, FndCaja::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_FND_CAJA_ID);
$criterio->addRealJoin(FndCajero::GEN_TABLA, FndCajero::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJERO_ID);
$criterio->addRealJoin(GralCaja::GEN_TABLA, GralCaja::GEN_ATTR_ID, FndCaja::GEN_ATTR_GRAL_CAJA_ID);

$criterio->addTabla(VtaReciboItem::GEN_TABLA);
$criterio->setCriterios();
$vta_recibo_items = VtaReciboItem::getVtaReciboItems(null, $criterio);
//Gral::prr($vta_recibo_items);
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
    $columna++ => array("ancho" => 10, "titulo" => "#"                    , "indice" => "id"),
    $columna++ => array("ancho" => 55, "titulo" => "Descripcion"          , "indice" => "descripcion"),
    $columna++ => array("ancho" => 15, "titulo" => "Generado"             , "indice" => "generado"),
    $columna++ => array("ancho" => 30, "titulo" => "Forma Pago"           , "indice" => "forma_pago"),
    $columna++ => array("ancho" => 30, "titulo" => "Concepto"             , "indice" => "concepto"),
    $columna++ => array("ancho" => 20, "titulo" => "Importe"              , "indice" => "importe"),
    $columna++ => array("ancho" => 20, "titulo" => "Requiere Conciliacion", "indice" => "conciliado"),
    $columna++ => array("ancho" => 20, "titulo" => "Conciliado"           , "indice" => "conciliado"),
    $columna++ => array("ancho" => 20, "titulo" => "Importe Conciliado"   , "indice" => "importe_conciliado"),
    $columna++ => array("ancho" => 20, "titulo" => "Importe Diferencia"   , "indice" => "importe_diferencia"),
    $columna++ => array("ancho" => 20, "titulo" => "Codigo Recibo"        , "indice" => "codigo_recibo"),
    $columna++ => array("ancho" => 55, "titulo" => "Cliente"              , "indice" => "cliente"),
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

foreach ($vta_recibo_items as $vta_recibo_item)
{
    $importe                         = 0;
    $importe_conciliado              = 0;
    $importe_conciliado_diferencia   = 0;
    
    $id                                = $vta_recibo_item->getId();
    $descripcion                       = $vta_recibo_item->getDescripcion();
    $importe                           = $vta_recibo_item->getImporteUnitario();
    $vta_recibo                        = $vta_recibo_item->getVtaRecibo();
    $vta_recibo_codigo                 = $vta_recibo->getNumeroComprobanteCompleto();
    $vta_recibo_cliente_descripcion    = $vta_recibo->getPersonaDescripcion();
    $gral_fp_forma_pago                = $vta_recibo_item->getGralFpFormaPago();
    $gral_fp_forma_pago_descripcion    = $gral_fp_forma_pago->getDescripcion();
    $vta_recibo_concepto               = $vta_recibo_item->getVtaReciboConcepto();
    $vta_recibo_concepto_descripcion   = $vta_recibo_concepto->getDescripcion();
    $vta_recibo_item_conciliado        = $vta_recibo_item->getVtaReciboItemConciliadoActivo();
    $gral_si_no_conciliado             = GralSiNo::getOxId($vta_recibo_item->getConciliado());
    $gral_si_no_descripcion_conciliado = $gral_si_no_conciliado->getDescripcion();
    $gral_si_no_requiere_conciliacion  = GralSiNo::getOxId($gral_fp_forma_pago->getRequiereConciliacion());
    $gral_si_no_descripcion_requiere_conciliacion = $gral_si_no_requiere_conciliacion->getDescripcion();
    $creado                            = Gral::getFechaToWeb($vta_recibo_item->getCreado());
    
    if($vta_recibo_item_conciliado)
    {
        //$importe_conciliado = Gral::getImporteDesdeDbToPriceFormat($vta_recibo_item_conciliado->getImporteConciliado());
        $importe_conciliado            = $vta_recibo_item_conciliado->getImporteConciliado();
        $importe_conciliado_diferencia = $vta_recibo_item_conciliado->getImporteDiferencia();
    }
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    
    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($id, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna. $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($creado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($gral_fp_forma_pago_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo_concepto_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($gral_si_no_descripcion_requiere_conciliacion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($gral_si_no_descripcion_conciliado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($importe_conciliado, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($importe_conciliado_diferencia, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo_codigo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($vta_recibo_cliente_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
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