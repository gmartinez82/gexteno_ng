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

//if ($txt_filtro_desde != '') {
//    $criterio->add(CliCliente::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
//}
//
//if ($txt_filtro_hasta != '') {
//    $criterio->add(CliCliente::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
//}

if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add(VtaVendedor::GEN_ATTR_ID, $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

$criterio->addTabla(CliCliente::GEN_TABLA);
$criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
$criterio->addOrden(CliCliente::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$criterio->setCriterios();
$cli_clientes = CliCliente::getCliClientes(null, $criterio);
//Gral::prr($cli_clientes);
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
    $columna++ => array("ancho" => 10, "titulo" => "ID Cliente"),
    $columna++ => array("ancho" => 30, "titulo" => "Cliente"),
    $columna++ => array("ancho" => 10, "titulo" => "Ventas"),
    $columna++ => array("ancho" => 10, "titulo" => "OVs"),
    $columna++ => array("ancho" => 14, "titulo" => "Importe Total"),
    $columna++ => array("ancho" => 14, "titulo" => "Ultima Venta"),
    $columna++ => array("ancho" => 14, "titulo" => "Hace (dias)"),
    $columna++ => array("ancho" => 19, "titulo" => "Hace (semanas)"),
    $columna++ => array("ancho" => 18, "titulo" => "Estado Cliente"),
    $columna++ => array("ancho" => 24, "titulo" => "Categoria"),
    $columna++ => array("ancho" => 24, "titulo" => "Condicion IVA"),
    $columna++ => array("ancho" => 16, "titulo" => "CUIT"),
    $columna++ => array("ancho" => 30, "titulo" => "Telefono"),
    $columna++ => array("ancho" => 30, "titulo" => "Email"),
    $columna++ => array("ancho" => 10, "titulo" => "Zona"),
    $columna++ => array("ancho" => 26, "titulo" => "Localidad"),
    $columna++ => array("ancho" => 13, "titulo" => "Provincia"),
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

foreach ($cli_clientes as $cli_cliente) {
    
    $arr_ventas_en_periodo = $cli_cliente->getArrVentasEnPeriodo($txt_filtro_desde, $txt_filtro_hasta, $cmb_vendedor_id);
    //Gral::prr($arr_ventas_en_periodo);continue;
    
    if ($arr_ventas_en_periodo[$cli_cliente->getId()]['ULTIMA_FECHA_VENTA'] === false) {
        $ultima_fecha = '';
        $hace_dias = '';
        $hace_semanas = '';
        $cliente_tipo_estado = '';
    } else {
        $ultima_fecha = DbExcel::getFechaToFormula($arr_ventas_en_periodo[$cli_cliente->getId()]['ULTIMA_FECHA_VENTA']);
        $hace_dias = $arr_ventas_en_periodo[$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'];
        $hace_semanas = $arr_ventas_en_periodo[$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS'];
        $cliente_tipo_estado = $arr_ventas_en_periodo[$cli_cliente->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'];
    }
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    ($arr_ventas_en_periodo[$cli_cliente->getId()]['CANTIDAD_VENTAS'] == 0) ? $color_rango = 'E4DFEB' : $color_rango = 'FFFFFF';
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getFill()->getStartColor()->setARGB($color_rango);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getId(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_ventas_en_periodo[$cli_cliente->getId()]['CANTIDAD_VENTAS'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_ventas_en_periodo[$cli_cliente->getId()]['CANTIDAD_OVS'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_ventas_en_periodo[$cli_cliente->getId()]['IMPORTE_TOTAL'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    
    if ($ultima_fecha == '') {
        
        $columna++;
        
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ultima_fecha, PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit('', PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit('', PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
    } else {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ultima_fecha, PHPExcel_Cell_DataType::TYPE_FORMULA);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode('dd/mm/yyyy');
        $columna++;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($hace_dias, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;

        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($hace_semanas, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
        
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cliente_tipo_estado, PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
    }
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getCliCategoria()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getGralCondicionIva()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getCuit(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getTelefono(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getEmail(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getGeoZona()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getGeoLocalidad()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getGeoLocalidad()->getGeoProvincia()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
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
