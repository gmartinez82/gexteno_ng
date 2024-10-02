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


if ($cmb_filtro_fnd_chq_tipo_emisor_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, $cmb_filtro_fnd_chq_tipo_emisor_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_emision_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, $cmb_filtro_fnd_chq_tipo_emision_id, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_pago_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, $cmb_filtro_fnd_chq_tipo_pago_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_banco_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, $cmb_filtro_gral_banco_id, Criterio::IGUAL);
}

if ($cmb_fnd_chq_en_cartera != -1) {
    $criterio->add(FndChqTipoEstado::GEN_ATTR_EN_CARTERA, $cmb_fnd_chq_en_cartera, Criterio::IGUAL);
}

if ($cmb_filtro_fnd_chq_tipo_estado_id != 0) {
    $criterio->add(FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, $cmb_filtro_fnd_chq_tipo_estado_id, Criterio::IGUAL);
}

if ($txt_filtro_fecha_cobro_desde != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($txt_filtro_fecha_cobro_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_cobro_hasta != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($txt_filtro_fecha_cobro_hasta), Criterio::MENORIGUAL);
}

if ($txt_filtro_fecha_creado_desde != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_CREADO, Gral::getFechaToDB($txt_filtro_fecha_creado_desde), Criterio::MAYORIGUAL);
}

if ($txt_filtro_fecha_creado_hasta != "") {
    $criterio->add(FndChqCheque::GEN_ATTR_CREADO, Gral::getFechaToDB($txt_filtro_fecha_creado_hasta), Criterio::MENORIGUAL);
}

$criterio->addFinSubconsulta();

$criterio->addTabla(FndChqCheque::GEN_TABLA);
$criterio->addRealJoin(FndChqChequera::GEN_TABLA, FndChqChequera::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralBanco::GEN_TABLA, GralBanco::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEmisor::GEN_TABLA, FndChqTipoEmisor::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEmision::GEN_TABLA, FndChqTipoEmision::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISION_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoPago::GEN_TABLA, FndChqTipoPago::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_PAGO_ID, 'LEFT JOIN');
$criterio->addRealJoin(FndChqTipoEstado::GEN_TABLA, FndChqTipoEstado::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addOrden(FndChqCheque::GEN_ATTR_FECHA_COBRO, Criterio::_ASC);
$criterio->addOrden(FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, Criterio::_ASC);
$criterio->addOrden(FndChqCheque::GEN_ATTR_IMPORTE, Criterio::_ASC);

$criterio->setCriterios();
$fnd_chq_cheques = FndChqCheque::getFndChqCheques(null, $criterio);
//Gral::prr($fnd_chq_cheques);
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
    $columna++ => array("ancho" => 20, "titulo" => "Tipo Emision", "indice" => "emision"),
    $columna++ => array("ancho" => 20, "titulo" => "Emision", "indice" => "emision"),
    $columna++ => array("ancho" => 20, "titulo" => "Cobro", "indice" => "cobro"),
    $columna++ => array("ancho" => 20, "titulo" => "Nro Cheque", "indice" => "nro_cheque"),
    $columna++ => array("ancho" => 50, "titulo" => "Banco", "indice" => "banco"),
    $columna++ => array("ancho" => 20, "titulo" => "Importe", "indice" => "importe"),
    $columna++ => array("ancho" => 40, "titulo" => "Estado", "indice" => "estado"),
    $columna++ => array("ancho" => 20, "titulo" => "En Cartera", "indice" => "en_cartera"),
    $columna++ => array("ancho" => 20, "titulo" => "Tipo Emisor", "indice" => "tipo_emisor"),
    $columna++ => array("ancho" => 40, "titulo" => "Firmante", "indice" => "firmante"),
    $columna++ => array("ancho" => 40, "titulo" => "Entregador", "indice" => "entregador"),
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

foreach ($fnd_chq_cheques as $fnd_chq_cheque) {
    $total = "";

    $tipo_emision = $fnd_chq_cheque->getFndChqTipoEmision()->getDescripcion();
    $fecha_emision = Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision());
    $fecha_cobro = Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro());
    $nro_cheque = $fnd_chq_cheque->getNumero();
    $banco = $fnd_chq_cheque->getGralBanco()->getDescripcionCorta();
    $importe = $fnd_chq_cheque->getImporte();
    $estado = $fnd_chq_cheque->getFndChqTipoEstado()->getDescripcion();
    $en_cartera = GralSiNo::getOxId($fnd_chq_cheque->getFndChqTipoEstado()->getEnCartera())->getDescripcion();
    $tipo_emisor = $fnd_chq_cheque->getFndChqTipoEmisor()->getDescripcion();
    $firmante = $fnd_chq_cheque->getFirmante();
    $entregador = $fnd_chq_cheque->getEntregador();
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;

    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($tipo_emision, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fecha_emision, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fecha_cobro, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($nro_cheque, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($banco, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($en_cartera, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($tipo_emisor, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($firmante, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($entregador, PHPExcel_Cell_DataType::TYPE_STRING);
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
