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
    $criterio->add(PdeFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if($txt_filtro_hasta != ''){
    $criterio->add(PdeFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if($cmb_filtro_prv_proveedor_id != 0){
    $criterio->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}

if($cmb_filtro_pde_factura_tipo_estado_id != 0){
    $criterio->add(PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, $cmb_filtro_pde_factura_tipo_estado_id, Criterio::IGUAL);
}

if($cmb_filtro_pde_tipo_factura_id != 0){
    $criterio->add(PdeFactura::GEN_ATTR_PDE_TIPO_FACTURA_ID, $cmb_filtro_pde_tipo_factura_id, Criterio::IGUAL);
}

$criterio->addTabla(PdeFactura::GEN_TABLA);
$criterio->setCriterios();
$pde_facturas = PdeFactura::getPdeFacturas(null, $criterio);
//Gral::prr($pde_facturas);
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
    $columna++ => array("ancho" => 20, "titulo" => "Estado"         , "indice" => "estado"),
    $columna++ => array("ancho" => 20, "titulo" => "Tipo"           , "indice" => "tipo"),
    $columna++ => array("ancho" => 20, "titulo" => "Subtotal"       , "indice" => "subtotal"),
    $columna++ => array("ancho" => 20, "titulo" => "IVA"            , "indice" => "subtotal_iva"),
    $columna++ => array("ancho" => 20, "titulo" => "Tributos"       , "indice" => "subtotal_trib"),
    $columna++ => array("ancho" => 20, "titulo" => "Total"          , "indice" => "total"),
    $columna++ => array("ancho" => 20, "titulo" => "Nro Factura"    , "indice" => "nro_factura"),
    $columna++ => array("ancho" => 20, "titulo" => "CAE"            , "indice" => "cae"),
    $columna++ => array("ancho" => 20, "titulo" => "CAE Vencimiento", "indice" => "cae_vencimiento"),
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

foreach ($pde_facturas as $pde_factura)
{
    $subtotal      = "";
    $subtotal_iva  = "";
    $subtotal_trib = "";
    $total         = "";
    $codigo          = $pde_factura->getCodigo();
    $fecha           = Gral::getFechaToWeb($pde_factura->getFechaEmision());
    $proveedor       = $pde_factura->getPrvProveedor()->getDescripcion();
    //$proveedor       = $pde_factura->getPersonaDescripcion();
    //$cliente_cuit    = $pde_factura->getCuit();
    $estado          = $pde_factura->getPdeFacturaTipoEstado()->getDescripcion();
    $tipo_factura    = $pde_factura->getPdeTipoFactura()->getCodigoMin();
    $subtotal        = $pde_factura->getPdeFacturaSubtotal();
    $subtotal_iva    = $pde_factura->getPdeFacturaIva();
    $subtotal_trib   = $pde_factura->getPdeFacturaTributo();
    $total           = $pde_factura->getPdeFacturaTotal();
    $nro_factura     = $pde_factura->getNumeroComprobanteCompleto();
    $cae             = $pde_factura->getCae();
    $cae_vencimiento = Gral::getFechaToWeb($pde_factura->getCaeVencimiento());
    
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
    //$xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cliente_cuit, PHPExcel_Cell_DataType::TYPE_STRING);
    //$xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);  
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($tipo_factura, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna .$linea)->setValueExplicit($subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($subtotal_iva, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($subtotal_trib, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($nro_factura, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cae, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cae_vencimiento, PHPExcel_Cell_DataType::TYPE_STRING);
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