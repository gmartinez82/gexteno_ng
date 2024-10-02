<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once '_autoload.php';
include_once 'control/seguridad.php';
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_ALTO_FILA', 22);
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 1);
define('DB_XLS_CONFIG_PRIMER_FILA', 1);

define('DB_XLS_CONFIG_FILA_VENTAS_NETAS', 2);
define('DB_XLS_CONFIG_FILA_COSTO_MERCADERIA', 3);
define('DB_XLS_CONFIG_FILA_RESULTADO_BRUTO', 4);
// ----------------------------------------------------------------------------

// ----------------------------------------------------------------------------
// obtencion de datos
// ----------------------------------------------------------------------------
$array_resumens = RepReporte::getArrayResultadosPorSucursal($txt_filtro_desde, $txt_filtro_hasta);
//Gral::prr($array_resumens);exit;

$pde_factura_tipo_conceptos = PdeFacturaTipoConcepto::getPdeFacturaTipoConceptos(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
//Gral::prr($pde_factura_tipo_conceptos);exit;

// -----------------------------------------------------------------------------
// se inicializa libro y se les da propiedades
// -----------------------------------------------------------------------------
$xls = new PHPExcel();
$xls->getProperties()->setCreator(Gral::getConfig("sistema_nombre"))
        ->setLastModifiedBy(Gral::getConfig("sistema_nombre"))
        ->setTitle(Gral::getConfig("sistema_nombre"))
        ->setSubject(Gral::getConfig("sistema_nombre"))
        ->setDescription(Gral::getConfig("sistema_nombre"))
        ->setKeywords(Gral::getConfig("sistema_nombre"))
        ->setCategory(Gral::getConfig("sistema_nombre"));

// -----------------------------------------------------------------------------
// se inicializa hoja/s
// -----------------------------------------------------------------------------
$xls->setActiveSheetIndex(0);
$xls->getActiveSheet()->setTitle('Datos');

// -----------------------------------------------------------------------------
// Cabeceras
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
foreach ($array_resumens as $i => $array_resumen) {
    $arr_cabeceras[$columna++] = array('ancho' => 18, 'titulo' => $array_resumen['DESCRIPCION'], 'formato' => DbExcel::FORMATO_IMPORTE);
}
//Gral::prr($arr_cabeceras);exit;

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Cabeceras Estaticas
// -----------------------------------------------------------------------------
$xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, DB_XLS_CONFIG_FILA_VENTAS_NETAS, 'Ventas Netas', $type = PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, DB_XLS_CONFIG_FILA_COSTO_MERCADERIA, 'Costo Mercaderia', $type = PHPExcel_Cell_DataType::TYPE_STRING);
$xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, DB_XLS_CONFIG_FILA_RESULTADO_BRUTO, 'Resultado Bruto', $type = PHPExcel_Cell_DataType::TYPE_STRING);
$fila = DB_XLS_CONFIG_FILA_RESULTADO_BRUTO;
if (count($pde_factura_tipo_conceptos) > 0) {
    foreach ($pde_factura_tipo_conceptos as $pde_factura_tipo_concepto) {
        $fila++;
        $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, $fila, $pde_factura_tipo_concepto->getDescripcion(), $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $array_gastos_dinamicos[$pde_factura_tipo_concepto->getCodigo()]['FILA'] = $fila;
    }
}
$fila++;
$xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, $fila, 'Gastos Compras', $type = PHPExcel_Cell_DataType::TYPE_STRING);
$fila_gastos_compras = $fila;
$fila++;
$xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, $fila, 'Gastos Totales', $type = PHPExcel_Cell_DataType::TYPE_STRING);
$fila_gastos_totales = $fila;
$fila++;
$xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, $fila, 'Resultado Neto', $type = PHPExcel_Cell_DataType::TYPE_STRING);
$fila_resultado_neto = $fila;
$fila++;
$xls->getActiveSheet()->setCellValueExplicitByColumnAndRow(0, $fila, 'Participacion', $type = PHPExcel_Cell_DataType::TYPE_STRING);
$fila_participacion = $fila;

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
foreach ($array_resumens as $array_resumen) {
    // Ventas Netas
    if($array_resumen['VENTAS_NETAS'] > 0){
        $valor = $array_resumen['VENTAS_NETAS'];
        DbExcel::setCelda($xls, $columna, DB_XLS_CONFIG_FILA_VENTAS_NETAS, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    }

    // Costo Mercaderia
    if($array_resumen['COSTO_MERCADERIA'] > 0){
        $valor = $array_resumen['COSTO_MERCADERIA'];
        DbExcel::setCelda($xls, $columna, DB_XLS_CONFIG_FILA_COSTO_MERCADERIA, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    }

    // Resultado Bruto
    if($array_resumen['RESULTADO_BRUTO'] > 0){
        $valor = $array_resumen['RESULTADO_BRUTO'];
        DbExcel::setCelda($xls, $columna, DB_XLS_CONFIG_FILA_RESULTADO_BRUTO, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    }
    
    // Gastos Dinamicos
    if (count($pde_factura_tipo_conceptos) > 0) {
        foreach ($pde_factura_tipo_conceptos as $pde_factura_tipo_concepto) {
            if($array_resumen[$pde_factura_tipo_concepto->getCodigo()] > 0){
                $valor = $array_resumen[$pde_factura_tipo_concepto->getCodigo()];
                DbExcel::setCelda($xls, $columna, $array_gastos_dinamicos[$pde_factura_tipo_concepto->getCodigo()]['FILA'], $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
            }
        }
    }
    
    // Ordenes de Compras
    if($array_resumen['COMPRAS'] > 0){
        $valor = $array_resumen['COMPRAS'];
        DbExcel::setCelda($xls, $columna, $fila_gastos_compras, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    }
    
    // Gastos Totales
    if($array_resumen['GASTOS'] > 0){
        $valor = $array_resumen['GASTOS'];
        DbExcel::setCelda($xls, $columna, $fila_gastos_totales, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    }
    
    // Resultado Neto
    if($array_resumen['RESULTADO_NETO'] != 0){
        $valor = $array_resumen['RESULTADO_NETO'];
        DbExcel::setCelda($xls, $columna, $fila_resultado_neto, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        if($valor < 0){
            $columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
            $xls->getActiveSheet()->getStyle($columna_letra . $fila_resultado_neto)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD1D1');
        }
    }
    
    // Participacion
    if($array_resumen['PARTICIPACION_DECIMAL'] != 0){
        $valor = $array_resumen['PARTICIPACION_DECIMAL'];
        DbExcel::setCelda($xls, $columna, $fila_participacion, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        if($valor < 0){
            $columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
            $xls->getActiveSheet()->getStyle($columna_letra . $fila_participacion)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD1D1');
        }
    }
    
    $columna++;
}

// -----------------------------------------------------------------------------
// Estilo y Formato
// -----------------------------------------------------------------------------
$columna--;
$fila = $fila_participacion;
DbExcel::getEstiloMasivo($xls, $borde_style, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_XLS_CONFIG_ALTO_FILA);
DbExcel::getEstiloPersonalizado($xls, $arr_cabeceras, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);
// Estilo UNICAMENTE para el rango de Gastos
$primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex(DB_XLS_CONFIG_PRIMER_COLUMNA);
$ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
if (count($pde_factura_tipo_conceptos) > 0) {
    $rango = $primer_columna_letra . reset($array_gastos_dinamicos)['FILA'] . ':' . $ultima_columna_letra . $fila_gastos_totales;
} else {
    $rango = $primer_columna_letra . $fila_gastos_totales . ':' . $ultima_columna_letra . $fila_gastos_totales;
}
$xls->getActiveSheet()->getStyle($rango)->getFont()->getColor()->setRGB('FF0000');
// Estilo UNICAMENTE para la fila de Gastos Totales
$rango = $primer_columna_letra . $fila_gastos_totales . ':' . $ultima_columna_letra . $fila_gastos_totales;
$xls->getActiveSheet()->getStyle($rango)->getFont()->setBold(true);
// Estilo y Formato UNICAMENTE para la fila de Participacion
$primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex(DB_XLS_CONFIG_PRIMER_COLUMNA);
$ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
$rango = $primer_columna_letra . $fila_participacion . ':' . $ultima_columna_letra . $fila_participacion;
$xls->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);

// -----------------------------------------------------------------------------
// Insertar filtros
// -----------------------------------------------------------------------------
$ultima_columna = PHPExcel_Cell::stringFromColumnIndex($columna);
$primer_columna = PHPExcel_Cell::stringFromColumnIndex(DB_XLS_CONFIG_PRIMER_COLUMNA);
$xls->getActiveSheet()->setAutoFilter($primer_columna.DB_XLS_CONFIG_PRIMER_FILA.':'.$ultima_columna.DB_XLS_CONFIG_PRIMER_FILA);

// -----------------------------------------------------------------------------
// Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
$xls->getActiveSheet()->freezePane($columna_letra.(DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
// Cabeceras Estaticas (Formato)
// -----------------------------------------------------------------------------
$rango = 'A' . DB_XLS_CONFIG_FILA_VENTAS_NETAS . ':' . 'A' . $fila_participacion;
$xls->getActiveSheet()->getStyle($rango)->applyFromArray($borde_style);
$xls->getActiveSheet()->getStyle($rango)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$xls->getActiveSheet()->getDefaultRowDimension()->setRowHeight(DB_XLS_CONFIG_ALTO_FILA);
$xls->getActiveSheet()->getStyle($rango)->getFont()->setBold(true);
$xls->getActiveSheet()->getStyle($rango)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB(DB_COLOR_ESTANDAR_FONDO_CABECERA);
$xls->getActiveSheet()->getStyle($rango)->getFont()->getColor()->setRGB(DB_COLOR_ESTANDAR_LETRA_CABECERA);
$xls->getActiveSheet()->getColumnDimension('A')->setWidth(25);

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