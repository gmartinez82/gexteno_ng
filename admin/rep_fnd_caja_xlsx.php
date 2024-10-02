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

$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);

$criterio->setAmbiguo(false);
$criterio->addDistinct(true);


$criterio->addInicioSubconsulta();

$criterio->add('', 'true', '', false, "");



$cmb_filtro_gral_caja_id = Gral::getVars(1, 'cmb_filtro_gral_caja_id', 0);
$cmb_filtro_fnd_cajero_id = Gral::getVars(1, 'cmb_filtro_fnd_cajero_id', 0);
$cmb_filtro_fnd_caja_tipo_estado_id = Gral::getVars(1, 'cmb_filtro_fnd_caja_tipo_estado_id', 0);

$txt_filtro_fecha_apertura_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_apertura_desde', '');
$txt_filtro_fecha_apertura_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_apertura_hasta', '');

$txt_filtro_fecha_cierre_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cierre_desde', '');
$txt_filtro_fecha_cierre_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_cierre_hasta', '');

$txt_filtro_fecha_rendicion_desde = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_rendicion_desde', '');
$txt_filtro_fecha_rendicion_hasta = Gral::getVars(Gral::VARS_POST, 'txt_filtro_fecha_rendicion_hasta', '');


if ($cmb_filtro_gral_caja_id != 0) {
    $criterio->add(GralCaja::GEN_ATTR_ID, $cmb_filtro_gral_caja_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_cajero_id != 0) {
    $criterio->add(FndCajero::GEN_ATTR_ID, $cmb_filtro_fnd_cajero_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_caja_tipo_estado_id != 0) {
    $criterio->add(FndCajaTipoEstado::GEN_ATTR_ID, $cmb_filtro_fnd_caja_tipo_estado_id, Criterio::IGUAL);
}

if ($txt_filtro_fecha_apertura_desde != "") {
    $criterio->add(FndCaja::GEN_ATTR_FECHA_APERTURA, Gral::getFechaToDB($txt_filtro_fecha_apertura_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_apertura_hasta != "") {
    $criterio->add(FndCaja::GEN_ATTR_FECHA_APERTURA, Gral::getFechaToDB($txt_filtro_fecha_apertura_hasta), Criterio::MENORIGUAL);
}

if ($txt_filtro_fecha_cierre_desde != "") {
    $criterio->add(FndCaja::GEN_ATTR_FECHA_CIERRE, Gral::getFechaToDB($txt_filtro_fecha_cierre_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_cierre_hasta != "") {
    $criterio->add(FndCaja::GEN_ATTR_FECHA_CIERRE, Gral::getFechaToDB($txt_filtro_fecha_cierre_hasta), Criterio::MENORIGUAL);
}

if ($txt_filtro_fecha_rendicion_desde != "") {
    $criterio->add(FndCaja::GEN_ATTR_FECHA_RENDICION, Gral::getFechaToDB($txt_filtro_fecha_rendicion_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_rendicion_hasta != "") {
    $criterio->add(FndCaja::GEN_ATTR_FECHA_RENDICION, Gral::getFechaToDB($txt_filtro_fecha_rendicion_hasta), Criterio::MENORIGUAL);
}

$criterio->addFinSubconsulta();

$criterio->addTabla(FndCaja::GEN_TABLA);
$criterio->addRealJoin(FndCajero::GEN_TABLA, FndCajero::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJERO_ID);
$criterio->addRealJoin(GralCaja::GEN_TABLA, GralCaja::GEN_ATTR_ID, FndCaja::GEN_ATTR_GRAL_CAJA_ID);

$criterio->addOrden(FndCaja::GEN_ATTR_ID, Criterio::_ASC);

$criterio->setCriterios();
$fnd_cajas = FndCaja::getFndCajas(null, $criterio);
//Gral::prr($fnd_cajas);
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
    $columna++ => array("ancho" => 6, "titulo" => "Id", "indice" => "emision"),
    $columna++ => array("ancho" => 20, "titulo" => "Caja", "indice" => "emision"),
    $columna++ => array("ancho" => 20, "titulo" => "Cajero", "indice" => "cobro"),
    $columna++ => array("ancho" => 12, "titulo" => "Apertura", "indice" => "nro_cheque"),
    $columna++ => array("ancho" => 12, "titulo" => "Cierre", "indice" => "banco"),
    $columna++ => array("ancho" => 12, "titulo" => "Rendicion", "indice" => "importe"),
    $columna++ => array("ancho" => 14, "titulo" => "Tipo Estado", "indice" => "estado"),
    $columna++ => array("ancho" => 16, "titulo" => "Saldo Inicial", "indice" => "en_cartera"),
    $columna++ => array("ancho" => 16, "titulo" => "Cobros", "indice" => "tipo_emisor"),
    $columna++ => array("ancho" => 16, "titulo" => "Pagos", "indice" => "firmante"),
    $columna++ => array("ancho" => 16, "titulo" => "Ordenes de Pago", "indice" => "entregador"),
    $columna++ => array("ancho" => 16, "titulo" => "Ing Extra", "indice" => "entregador"),
    $columna++ => array("ancho" => 16, "titulo" => "Egr Extra", "indice" => "entregador"),
    $columna++ => array("ancho" => 16, "titulo" => "Saldo Final", "indice" => "entregador"),
    $columna++ => array("ancho" => 16, "titulo" => "Total Efectivo", "indice" => "total_efectivo"),
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

foreach ($fnd_cajas as $fnd_caja) {
    $total = "";

    $gral_caja = $fnd_caja->getGralCaja();
    $fnd_cajero = $fnd_caja->getFndCajero();

    $arr_resumen_caja = $fnd_caja->getArrResumenCaja($incluir_movimiento_activos = true);
    //Gral::prr($arr_resumen_caja);

    $fnd_caja_estado_apertura = $fnd_caja->getEstadoApertura();
    $fnd_caja_estado_cierre = $fnd_caja->getEstadoCierre();
    $fnd_caja_estado_rendicion = $fnd_caja->getEstadoRendicion();

    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fnd_caja->getId(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_caja->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fnd_cajero->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    if ($fnd_caja_estado_apertura) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($fnd_caja->getFechaApertura()), PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
    } else {
        $columna++;
    }
    if ($fnd_caja_estado_cierre) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($fnd_caja->getFechaCierre()), PHPExcel_Cell_DataType::TYPE_STRING); 
        $columna++;
    } else {
        $columna++;
    }
    if ($fnd_caja_estado_rendicion) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($fnd_caja->getFechaRendicion()), PHPExcel_Cell_DataType::TYPE_STRING); 
        $columna++;
    } else {
        $columna++;
    }
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fnd_caja->getFndCajaTipoEstado()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fnd_caja->getImporteSaldoInicialReal(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    if ($arr_resumen_caja['general']['cobro']['importe'] > 0) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_resumen_caja['general']['cobro']['importe'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }
    if ($arr_resumen_caja['general']['pago']['importe'] > 0) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_resumen_caja['general']['pago']['importe'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }
    if ($arr_resumen_caja['general']['orden_pago']['importe'] > 0) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_resumen_caja['general']['orden_pago']['importe'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }
    if ($arr_resumen_caja['general']['ingreso']['importe'] > 0) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_resumen_caja['general']['ingreso']['importe'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }
    if ($arr_resumen_caja['general']['egreso']['importe'] > 0) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_resumen_caja['general']['egreso']['importe'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fnd_caja->getImporteSaldoFinal(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++; 
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fnd_caja->getImporteEfectivoFinalInformado(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
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
