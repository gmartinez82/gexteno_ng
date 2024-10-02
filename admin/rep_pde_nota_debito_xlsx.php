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
    $criterio->add(PdeNotaDebito::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if($txt_filtro_hasta != ''){
    $criterio->add(PdeNotaDebito::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_filtro_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if($cmb_filtro_prv_proveedor_id != 0){
    $criterio->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $cmb_filtro_prv_proveedor_id, Criterio::IGUAL);
}

if($cmb_filtro_pde_tipo_nota_credito_id != 0){
    $criterio->add(PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, $cmb_filtro_pde_tipo_nota_credito_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_condicion_iva_id != 0){
    $criterio->add(PdeNotaDebito::GEN_ATTR_GRAL_CONDICION_IVA_ID, $cmb_filtro_gral_condicion_iva_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_empresa_id != 0){
    $criterio->add(PdeNotaDebito::GEN_ATTR_GRAL_EMPRESA_ID, $cmb_filtro_gral_empresa_id, Criterio::IGUAL);
}

$criterio->addTabla(PdeNotaDebito::GEN_TABLA);
$criterio->setCriterios();
$pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos(null, $criterio);
//Gral::prr($vta_nota_creditos);
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
    $columna++ => array("ancho" => 20, "titulo" => "ND AFIP"        , "indice" => "nota_debito_afip"),
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

foreach ($pde_nota_debitos as $pde_nota_debito)
{
    $subtotal      = "";
    $subtotal_iva  = "";
    $subtotal_trib = "";
    $total         = "";
    $fecha             = Gral::getFechaToWeb($pde_nota_debito->getFechaEmision());
    $codigo            = $pde_nota_debito->getCodigo();
    $proveedor         = $pde_nota_debito->getPrvProveedor()->getDescripcion();
    $estado            = $pde_nota_debito->getPdeNotaDebitoTipoEstado()->getDescripcion();
    $tipo_nc           = $pde_nota_debito->getPdeTipoNotaDebito()->getCodigoMin();
    $subtotal          = $pde_nota_debito->getPdeNotaDebitoSubtotal();
    $subtotal_iva      = $pde_nota_debito->getPdeNotaDebitoIva();
    $subtotal_trib     = $pde_nota_debito->getPdeNotaDebitoTributo();
    $total             = $pde_nota_debito->getPdeNotaDebitoTotal();
    $nota_debito_afip  = $pde_nota_debito->getNumeroComprobanteCompleto();
    $cae               = $pde_nota_debito->getCae();
    $cae_vencimiento   = Gral::getFechaToWeb($pde_nota_debito->getCaeVencimiento());
    
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
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($tipo_nc, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
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
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($nota_debito_afip, PHPExcel_Cell_DataType::TYPE_STRING);
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