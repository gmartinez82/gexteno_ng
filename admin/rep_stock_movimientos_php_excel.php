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
    $criterio->add(InsStockMovimiento::GEN_ATTR_CREADO, $txt_filtro_desde . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(InsStockMovimiento::GEN_ATTR_CREADO, $txt_filtro_hasta . ' 23:59:59', Criterio::MENORIGUAL);
}

if ($txt_descripcion != '') {
    $criterio->add(InsInsumo::GEN_ATTR_DESCRIPCION, $txt_descripcion, Criterio::LIKE);
}

if ($txt_codigo_interno != '') {
    $criterio->add(InsInsumo::GEN_ATTR_CODIGO_INTERNO, $txt_codigo_interno, Criterio::LIKE);
}

if ($cmb_ins_insumo_id != 0) {
    $criterio->add(InsInsumo::GEN_ATTR_ID, $cmb_ins_insumo_id, Criterio::IGUAL);
}

if ($cmb_ins_categoria_id != 0) {
    $criterio->add(InsCategoria::GEN_ATTR_ID, $cmb_ins_categoria_id, Criterio::IGUAL);
}

if ($cmb_ins_etiqueta_id != 0) {
    $criterio->add(InsEtiqueta::GEN_ATTR_ID, $cmb_ins_etiqueta_id, Criterio::IGUAL);
}

if ($cmb_ins_stock_tipo_movimiento_id != 0) {
    $criterio->add(InsStockTipoMovimiento::GEN_ATTR_ID, $cmb_ins_stock_tipo_movimiento_id, Criterio::IGUAL);
}

if ($cmb_pan_panol_id != 0) {
    $criterio->add(PanPanol::GEN_ATTR_ID, $cmb_pan_panol_id, Criterio::IGUAL);
}

if ($cmb_prv_proveedor_id != 0) {
    $criterio->add(PrvProveedor::GEN_ATTR_ID, $cmb_prv_proveedor_id, Criterio::IGUAL);
}

$criterio->addTabla(InsStockMovimiento::GEN_TABLA);
$criterio->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, 'LEFT JOIN');
$criterio->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsEtiqueta::GEN_TABLA, InsEtiqueta::GEN_ATTR_ID, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, 'LEFT JOIN');
$criterio->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
$criterio->setCriterios();

$ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $criterio);
//Gral::prr($ins_stock_movimientos);
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
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 11, 'titulo' => 'Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 10, 'titulo' => 'Hora', 'formato' => DbExcel::FORMATO_HORA),
    $columna++ => array('ancho' => 14, 'titulo' => 'Id Insumo', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cod Insumo', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 60, 'titulo' => 'Insumo', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 21, 'titulo' => 'Tipo Movimiento', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 14, 'titulo' => 'Panol', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 13, 'titulo' => 'Cantidad', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cant Compr', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 14, 'titulo' => 'Cant Real', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 14, 'titulo' => 'Cant Disp', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 74, 'titulo' => 'Observacion', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 11, 'titulo' => 'Estado', 'formato' => DbExcel::FORMATO_NINGUNO),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($ins_stock_movimientos as $ins_stock_movimiento) {
    
    $ins_insumo = $ins_stock_movimiento->getInsInsumo();    
    $gral_si_no_estado_descripcion = GralSiNo::getOxId($ins_stock_movimiento->getEstado())->getDescripcion();
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = $ins_stock_movimiento->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($ins_stock_movimiento->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbExcel::getHoraToFormula($ins_stock_movimiento->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $ins_insumo->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $ins_insumo->getCodigoInterno();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_insumo->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_stock_movimiento->getInsStockTipoMovimiento()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_stock_movimiento->getPanPanol()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_stock_movimiento->getCantidad();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $ins_stock_movimiento->getCantidadComprometida();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $ins_stock_movimiento->getCantidadReal();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $ins_stock_movimiento->getCantidadDisponible();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $ins_stock_movimiento->getObservacion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $gral_si_no_estado_descripcion;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
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