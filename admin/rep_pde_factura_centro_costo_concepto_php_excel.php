<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once 'control/seguridad.php';
include_once '_autoload.php';
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_ALTO_FILA', 22);
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 0);
define('DB_XLS_CONFIG_PRIMER_FILA', 1);
// ----------------------------------------------------------------------------

$criterio = new Criterio();
$criterio->addDistinct(true);

if ($txt_filtro_desde != '') {
    $criterio->add(PdeFactura::GEN_ATTR_FECHA_EMISION, $txt_filtro_desde, Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(PdeFactura::GEN_ATTR_FECHA_EMISION, $txt_filtro_hasta, Criterio::MENORIGUAL);
}

if ($cmb_gral_centro_costo_id != 0) {
    $criterio->add(GralCentroCosto::GEN_ATTR_ID, $cmb_gral_centro_costo_id, Criterio::IGUAL);
}

if ($cmb_prv_proveedor_id != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_ID, $cmb_prv_proveedor_id, Criterio::IGUAL);
}

if ($cmb_pde_factura_concepto_id != 0) {
    $criterio->add(PdeFacturaConcepto::GEN_ATTR_ID, $cmb_pde_factura_concepto_id, Criterio::IGUAL);
}

$criterio->addSelect(PdeFactura::GEN_ATTR_FECHA_EMISION);
$criterio->addTabla(PdeFacturaItem::GEN_TABLA);
$criterio->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_ID, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdeFacturaGralCentroCosto::GEN_TABLA, PdeFacturaGralCentroCosto::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralCentroCosto::GEN_TABLA, GralCentroCosto::GEN_ATTR_ID, PdeFacturaGralCentroCosto::GEN_ATTR_GRAL_CENTRO_COSTO_ID, 'LEFT JOIN');
$criterio->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdeFacturaConcepto::GEN_TABLA, PdeFacturaConcepto::GEN_ATTR_ID, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_CONCEPTO_ID, 'LEFT JOIN');
$criterio->addOrden(PdeFactura::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
$criterio->setCriterios();

$pde_factura_items = PdeFacturaItem::getPdeFacturaItems(null, $criterio);
//Gral::prr($pde_factura_items);
//exit;

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
$arr_cabeceras = array(
    $columna++ => array('ancho' => 13, 'titulo' => 'Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 15, 'titulo' => 'Nro Factura', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 19, 'titulo' => 'ID Factura Item', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 34, 'titulo' => 'Proveedor', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 28, 'titulo' => 'Concepto', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 17, 'titulo' => 'Importe Item', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 17, 'titulo' => 'Centro Costo', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 18, 'titulo' => 'Afectacion (%)', 'formato' => DbExcel::FORMATO_PORCENTAJE),
    $columna++ => array('ancho' => 20, 'titulo' => 'Importe Afectacion', 'formato' => DbExcel::FORMATO_IMPORTE),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($pde_factura_items as $pde_factura_item) {
    
    $pde_factura = $pde_factura_item->getPdeFactura();
    $pde_factura_gral_centro_costos = $pde_factura->getPdeFacturaGralCentroCostos(null, null, true);
    
    foreach ($pde_factura_gral_centro_costos as $pde_factura_gral_centro_costo) {
        
        $fila++;
        $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;

        $valor = DbExcel::getFechaToFormula($pde_factura->getFechaEmision());
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
        $columna++;

        $valor = $pde_factura->getNumeroFacturaCompleto();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
        
        $valor = $pde_factura_item->getId();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;

        $valor = $pde_factura->getPrvProveedor()->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $pde_factura_item->getPdeFacturaConcepto()->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $pde_factura_item->getImporteTotal();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;

        $valor = $pde_factura_gral_centro_costo->getGralCentroCosto()->getDescripcion();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = ($pde_factura_gral_centro_costo->getPorcentajeAfectado()) / 100;
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;

        $valor = $pde_factura_item->getImporteAfectadoParaGralCentroCosto($pde_factura_gral_centro_costo->getPorcentajeAfectado());
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    }
}

// -----------------------------------------------------------------------------
// Estilo y Formato
// -----------------------------------------------------------------------------
DbExcel::getEstiloMasivo($xls, $borde_style, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_XLS_CONFIG_ALTO_FILA);
DbExcel::getEstiloPersonalizado($xls, $arr_cabeceras, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);

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
// Genera el archivo de salida
// -----------------------------------------------------------------------------
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . DbConfig::CONFIG_GRAL_CLIENTE_MIN.'-'. $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');

$oWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$oWriter->save('php://output');
exit;
?>