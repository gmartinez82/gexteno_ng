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
    $criterio->add(PdeRecibo::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if($txt_filtro_hasta != ''){
    $criterio->add(PdeRecibo::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if($cmb_filtro_prv_proveedor_id != 0){
    $criterio->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}

if($cmb_filtro_pde_tipo_recibo_id != 0){
    $criterio->add(PdeRecibo::GEN_ATTR_PDE_TIPO_RECIBO_ID, $cmb_filtro_pde_tipo_recibo_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_condicion_iva_id != 0){
    $criterio->add(PdeRecibo::GEN_ATTR_GRAL_CONDICION_IVA_ID, $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_empresa_id != 0){
    $criterio->add(PdeRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $cmb_filtro_gral_empresa_id, Criterio::IGUAL);
}

//if($cmb_filtro_pde_recibo_tipo_pago_id != 0){
//    $criterio->add(PdeReciboTipoPago::GEN_ATTR_ID, $cmb_filtro_pde_recibo_tipo_pago_id, Criterio::IGUAL);
//}

if($cmb_filtro_pde_recibo_tipo_estado_id != 0){
    $criterio->add(PdeReciboTipoEstado::GEN_ATTR_ID, $cmb_filtro_pde_recibo_tipo_estado_id, Criterio::IGUAL);
}

//if($cmb_filtro_pde_recibo_condicion_pago_id != 0){
//    $criterio->add(PdeReciboCondicionPago::GEN_ATTR_ID, $cmb_filtro_pde_recibo_condicion_pago_id, Criterio::IGUAL);
//}

$criterio->addTabla(PdeRecibo::GEN_TABLA);
//$criterio->addRealJoin(PdeReciboTipoPago::GEN_TABLA, PdeReciboTipoPago::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_PAGO_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdeReciboTipoEstado::GEN_TABLA, PdeReciboTipoEstado::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
//$criterio->addRealJoin(PdeReciboCondicionPago::GEN_TABLA, PdeReciboCondicionPago::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_CONDICION_PAGO_ID, 'LEFT JOIN');
$criterio->setCriterios();
$pde_recibos = PdeRecibo::getPdeRecibos(null, $criterio);
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
    $columna++ => array("ancho" => 20, "titulo" => "Codigo"         , "indice" => "codigo"),
    $columna++ => array("ancho" => 20, "titulo" => "Fecha"          , "indice" => "fecha"),
    $columna++ => array("ancho" => 50, "titulo" => "Proveedor"      , "indice" => "proveedor"),
    $columna++ => array("ancho" => 20, "titulo" => "Tipo"           , "indice" => "tipo"),
    $columna++ => array("ancho" => 20, "titulo" => "Total"          , "indice" => "total"),
    $columna++ => array("ancho" => 20, "titulo" => "NRO AFIP"       , "indice" => "nro_comprobante_afip"),
    $columna++ => array("ancho" => 20, "titulo" => "CAE"            , "indice" => "cae"),
    $columna++ => array("ancho" => 20, "titulo" => "CAE Vencimiento", "indice" => "cae_vencimiento"),
    $columna++ => array("ancho" => 20, "titulo" => "Tipo Estado"   , "indice" => "tipo_estado"),
//    $columna++ => array("ancho" => 29, "titulo" => "Tipo Pago"    , "indice" => "tipo_pago"),
//    $columna++ => array("ancho" => 20, "titulo" => "Condicion Pago"   , "indice" => "condicion_pago"),
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

foreach ($pde_recibos as $pde_recibo)
{
    $total                = "";
    $fecha                = Gral::getFechaToWeb($pde_recibo->getFechaEmision());
    $codigo               = $pde_recibo->getCodigo();
    $proveedor            = $pde_recibo->getPrvProveedor()->getDescripcion();
    $tipo                 = $pde_recibo->getPdeTipoRecibo()->getCodigoMin();
    $total                = $pde_recibo->getPdeReciboTotal();
    $nro_comprobante_afip = $pde_recibo->getNumeroComprobanteCompleto();
    $cae                  = $pde_recibo->getCae();
    $cae_vencimiento      = Gral::getFechaToWeb($pde_recibo->getCaeVencimiento());
    
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
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($proveedor, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($tipo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($nro_comprobante_afip, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cae, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cae_vencimiento, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($pde_recibo->getPdeReciboTipoEstado()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
//    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($pde_recibo->getPdeReciboTipoPago()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
//    $columna++;
//    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($pde_recibo->getPdeReciboCondicionPago()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
//    $columna++;
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