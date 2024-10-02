<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

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

if ($txt_filtro_desde != '') {
    $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_factura_tipo_estado_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, $cmb_filtro_vta_factura_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_tipo_factura_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_VTA_TIPO_FACTURA_ID, $cmb_filtro_vta_tipo_factura_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_sucursal_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_actividad_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_GRAL_ACTIVIDAD_ID, $cmb_filtro_gral_actividad_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_escenario_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_GRAL_ESCENARIO_ID, $cmb_filtro_gral_escenario_id, Criterio::IGUAL);
}

$criterio->addTabla(VtaFactura::GEN_TABLA);
//$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
//$criterio->addRealJoin(VtaRemitoTipoEstado::GEN_TABLA, VtaRemitoTipoEstado::GEN_ATTR_ID, VtaRemito::GEN_ATTR_VTA_REMITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->setCriterios();
$vta_facturas = VtaFactura::getVtaFacturas(null, $criterio);
//Gral::prr($vta_facturas);
//exit;

/** PHPExcel */
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
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
    $columna++ => array("ancho" => 18, "titulo" => "Codigo", "indice" => "codigo"),
    $columna++ => array("ancho" => 14, "titulo" => "Fecha", "indice" => "fecha"),
    $columna++ => array("ancho" => 14, "titulo" => "Vencimiento", "indice" => "vencimiento"),
    $columna++ => array("ancho" => 10, "titulo" => "Vencida", "indice" => "vencida"),
    $columna++ => array("ancho" => 50, "titulo" => "Cliente", "indice" => "cliente"),
    $columna++ => array("ancho" => 18, "titulo" => "Cuit", "indice" => "cuit"),
    $columna++ => array("ancho" => 20, "titulo" => "Estado", "indice" => "estado"),
    $columna++ => array("ancho" => 5, "titulo" => "Tipo", "indice" => "tipo"),
    $columna++ => array("ancho" => 20, "titulo" => "Subtotal", "indice" => "subtotal"),
    $columna++ => array("ancho" => 20, "titulo" => "IVA", "indice" => "subtotal_iva"),
    $columna++ => array("ancho" => 20, "titulo" => "Tributos", "indice" => "subtotal_trib"),
    $columna++ => array("ancho" => 20, "titulo" => "Total", "indice" => "total"),
    $columna++ => array("ancho" => 20, "titulo" => "Saldada", "indice" => "saldada"),
    $columna++ => array("ancho" => 20, "titulo" => "Saldo", "indice" => "saldo"),
    $columna++ => array("ancho" => 20, "titulo" => "Nro Factura", "indice" => "nro_factura"),
    $columna++ => array("ancho" => 20, "titulo" => "CAE", "indice" => "cae"),
    $columna++ => array("ancho" => 20, "titulo" => "CAE Vencimiento", "indice" => "cae_vencimiento"),
    $columna++ => array("ancho" => 20, "titulo" => "Actividad", "indice" => "actividad"),
    $columna++ => array("ancho" => 20, "titulo" => "Escenario", "indice" => "escenario"),
    $columna++ => array("ancho" => 20, "titulo" => "Preventista", "indice" => "preventista"),
    $columna++ => array("ancho" => 30, "titulo" => "Vendedor", "indice" => "vendedor"),
    $columna++ => array("ancho" => 20, "titulo" => "Comprador", "indice" => "comprador"),
    $columna++ => array("ancho" => 20, "titulo" => "Sucursal", "indice" => "sucursal"),
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

foreach ($vta_facturas as $vta_factura) {
    
    $vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
    
    $subtotal = "";
    $subtotal_iva = "";
    $subtotal_trib = "";
    $total = "";
    
    $fecha_emision = $vta_factura->getFechaEmision();
    $fecha_vencimiento = $vta_factura->getFechaVencimiento();
    $codigo = $vta_factura->getCodigo();
    $cliente = $vta_factura->getPersonaDescripcion();
    $cliente_cuit = $vta_factura->getCuit();
    $estado = $vta_factura_tipo_estado->getDescripcion();
    $tipo_factura = $vta_factura->getVtaTipoFactura()->getCodigoMin();
    
    $subtotal = $vta_factura->getVtaFacturaSubtotal();
    $subtotal_iva = $vta_factura->getVtaFacturaIva();
    $subtotal_trib = $vta_factura->getVtaFacturaTributo();
    $total = $vta_factura->getVtaFacturaTotal();
    
    $nro_factura = $vta_factura->getNumeroComprobanteCompleto();
    $cae = $vta_factura->getCae();
    $cae_vencimiento = Gral::getFechaToWeb($vta_factura->getCaeVencimiento());
    $gral_actividad_descripcion = $vta_factura->getGralActividad()->getDescripcion();
    $gral_escenario_descripcion = $vta_factura->getGralEscenario()->getDescripcion();
    $vta_preventista_descripcion = $vta_factura->getVtaPreventista()->getDescripcion();
    $vta_vendedor_descripcion = $vta_factura->getVtaVendedor()->getDescripcion();
    $vta_comprador_descripcion = $vta_factura->getVtaComprador()->getDescripcion();
    $gral_sucursal_descripcion = $vta_factura->getGralSucursal()->getDescripcion();

    $vencida = '-';
    if($vta_factura_tipo_estado->getActivo()){
        if(Date::esRangoValido($fecha_vencimiento, date('Y-m-d'))){
            $vencida = 'SI';        
        }
    }
    
    $importe_saldo = $vta_factura->getSaldoImputable();
    $importe_saldado = $total - $importe_saldo;
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;

    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($codigo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($fecha_emision), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($fecha_vencimiento), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vencida, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cliente, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cliente_cuit, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($tipo_factura, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($subtotal_iva, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($subtotal_trib, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_saldado, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_saldo, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($nro_factura, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cae, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cae_vencimiento, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_actividad_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_escenario_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_preventista_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_vendedor_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_comprador_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_sucursal_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
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