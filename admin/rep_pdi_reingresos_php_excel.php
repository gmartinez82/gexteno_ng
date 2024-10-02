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
$criterio->add(PdiTipoOrigen::GEN_ATTR_CODIGO, PdiTipoOrigen::TIPO_ORIGEN_AJUSTE, Criterio::IGUAL);

if ($txt_filtro_desde != '') {
    $criterio->add(PdiPedido::GEN_ATTR_CREADO, $txt_filtro_desde . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(PdiPedido::GEN_ATTR_CREADO, $txt_filtro_hasta . ' 23:59:59', Criterio::MENORIGUAL);
}

if ($txt_filtro_descripcion != '') {
    $criterio->add(InsInsumo::GEN_ATTR_DESCRIPCION, $txt_filtro_descripcion, Criterio::LIKE);
}

if ($txt_codigo_interno != '') {
    $criterio->add(InsInsumo::GEN_ATTR_CODIGO_INTERNO, $txt_codigo_interno, Criterio::LIKE);
}

if ($cmb_pan_panol_id != 0) {
    $criterio->add(PanPanol::GEN_ATTR_ID, $cmb_pan_panol_id, Criterio::IGUAL);
}

if ($cmb_ins_categoria_id != 0) {
    $criterio->add(InsCategoria::GEN_ATTR_ID, $cmb_ins_categoria_id, Criterio::IGUAL);
}

if ($cmb_ins_stock_tipo_movimiento_id != 0) {
    $criterio->add(InsStockTipoMovimiento::GEN_ATTR_ID, $cmb_ins_stock_tipo_movimiento_id, Criterio::IGUAL);
}

$criterio->addTabla(PdiPedido::GEN_TABLA);
$criterio->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PAN_PANOL_DESTINO, 'LEFT JOIN');
$criterio->addRealJoin(InsStockMovimiento::GEN_TABLA, InsStockMovimiento::GEN_ATTR_PDI_PEDIDO_ID, PdiPedido::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdiPedido::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, 'LEFT JOIN');
$criterio->addRealJoin(PdiTipoOrigen::GEN_TABLA, PdiTipoOrigen::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ORIGEN_ID, 'LEFT JOIN');
$criterio->addOrden(PdiPedido::GEN_ATTR_ID, Criterio::_DESC);

$criterio->setCriterios();
$pdi_pedidos = PdiPedido::getPdiPedidos(null, $criterio);
//Gral::prr($pdi_pedidos);
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
    $columna++ => array('ancho' => 20, 'titulo' => 'Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 10, 'titulo' => 'Hora', 'formato' => DbExcel::FORMATO_HORA),
    $columna++ => array('ancho' => 8, 'titulo' => 'ID', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cod. Interno', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 60, 'titulo' => 'Producto', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 60, 'titulo' => 'Categoria', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 20, 'titulo' => 'Panol', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 10, 'titulo' => 'Cantidad', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo Movimiento', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Stock Actual', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 50, 'titulo' => 'Observacion', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cant. Dias Ajuste', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 17, 'titulo' => 'Cant. Ajustes', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 25, 'titulo' => 'Usuario', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 8, 'titulo' => 'Moneda', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Costo Actual', 'formato' => DbExcel::FORMATO_IMPORTE),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($pdi_pedidos as $pdi_pedido) {
    
    $ins_insumo = $pdi_pedido->getInsInsumo();
    $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
    $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
    $ins_stock_movimiento = $pdi_pedido->getInsStockMovimiento();
    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
    if($ins_stock_resumen){
        $cantidad_stock_actual = $ins_stock_resumen->getCantidad();
    }
    $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual($pan_panol->getPdeCentroPedido());
    $ins_stock_movimiento_ultimo_dia = $ins_insumo->getCantidadDiasUltimoAjuste($pan_panol);
    $ins_stock_movimiento_cantidad = $ins_insumo->getCantidadAjustesInsumo($pan_panol);
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = DbExcel::getFechaToFormula($pdi_pedido->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbExcel::getHoraToFormula($pdi_pedido->getCreado());
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
    
    $valor = $ins_insumo->getInsCategoria()->getFamiliaDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $pan_panol->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $pdi_estado_actual->getCantidad();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = utf8_encode($ins_stock_movimiento->getInsStockTipoMovimiento()->getDescripcion());//ACAAAAA
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $cantidad_stock_actual;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $pdi_estado_actual->getObservacion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $ins_stock_movimiento_ultimo_dia;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $ins_stock_movimiento_cantidad;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $pdi_pedido->getCreadoPorDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    if ($ins_insumo_costo) {
        $valor = 'AR$';
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;

        $valor = $ins_insumo_costo->getCosto();
        DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    } else {
        $columna++;
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