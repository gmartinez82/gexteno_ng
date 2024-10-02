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

$db_nombre_objeto = 'rep_pdi_ajustes';
$db_nombre_pagina = 'rep_pdi_ajustes';

$c = new Criterio();
$c->addDistinct(true);
$c->add('pdi_tipo_origen.codigo', PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL, Criterio::IGUAL);

if ($txt_descripcion != '') {
    $c->add('ins_insumo.descripcion', $txt_descripcion, Criterio::IGUAL);
}
if ($txt_codigo_interno != '') {
    $c->add('ins_insumo.codigo_interno', $txt_codigo_interno, Criterio::IGUAL);
}
if ($cmb_pan_panol_id != 0) {
    $c->add('pan_panol.id', $cmb_pan_panol_id, Criterio::IGUAL);
}
if ($cmb_ins_categoria_id != 0) {
    $c->add('ins_categoria.id', $cmb_ins_categoria_id, Criterio::IGUAL);
}
if ($cmb_ins_stock_tipo_movimiento_id != 0) {
    $c->add('ins_stock_tipo_movimiento.id', $cmb_ins_stock_tipo_movimiento_id, Criterio::IGUAL);
}
if ($txt_desde != '') {
    $c->add('pdi_pedido.creado', Gral::getFechaToDb($txt_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $c->add('pdi_pedido.creado', Gral::getFechaToDb($txt_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$c->addTabla('pdi_pedido');
$c->addRealJoin('pan_panol', 'pan_panol.id', 'pdi_pedido.pan_panol_destino');
$c->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.pdi_pedido_id', 'pdi_pedido.id');
$c->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id');
$c->addRealJoin('ins_insumo', 'ins_insumo.id', 'pdi_pedido.ins_insumo_id');
$c->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id');
$c->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id');
$c->addOrden('pdi_pedido.id', 'desc');
$c->setCriterios();
$pdi_pedidos = PdiPedido::getPdiPedidos(null, $c);
//Gral::prr($pdi_pedidos);
//exit;


/** PHPExcel */
require_once Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php';
require_once Gral::getPathAbs() . 'admin/rep_init.php';

$total_style = array(
    'font' => array(
        'bold' => true,
        'size' => 14
        ));
$subtotal_style = array(
    'font' => array(
        'bold' => true,
        'size' => 12
        ));
$negrita_style = array(
    'font' => array(
        'bold' => true
        ));
$borde_style = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$gris_style = array(
    'font' => array(
        'color' => array('rgb' => '666666'),
        'size' => 8,
        'name' => 'Verdana'
        ));

$dentro_vida_util_style = array(
    'font' => array(
        'color' => array('rgb' => '006600'),
        'size' => 8,
        'name' => 'Verdana'
        ));
$dentro_margen_style = array(
    'font' => array(
        'color' => array('rgb' => 'FF9900'),
        'size' => 8,
        'name' => 'Verdana'
        ));
$fuera_margen_style = array(
    'font' => array(
        'color' => array('rgb' => 'ff0000'),
        'size' => 9,
        'name' => 'Verdana'
        ));


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
    $columna++ => array('ancho' => 20, 'titulo' => 'Fecha', 'indice' => 'fecha'),
    $columna++ => array('ancho' => 8, 'titulo' => 'ID', 'indice' => 'id'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cod Interno', 'indice' => 'codigo_interno'),
    $columna++ => array('ancho' => 60, 'titulo' => 'Producto', 'indice' => 'insumo'),
    $columna++ => array('ancho' => 60, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Panol', 'indice' => 'panol'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Cantidad', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo Movimiento', 'indice' => 'tipo_movimiento'),
    $columna++ => array('ancho' => 15, 'titulo' => 'Stock Actual', 'indice' => 'stock_insumo'),
    $columna++ => array('ancho' => 100, 'titulo' => 'Observacion', 'indice' => 'observacion'),
    $columna++ => array('ancho' => 25, 'titulo' => 'Usuario', 'indice' => 'usuario'),
    $columna++ => array('ancho' => 8, 'titulo' => 'Moneda', 'indice' => 'moneda'),
    $columna++ => array('ancho' => 15, 'titulo' => 'Costo Actual', 'indice' => 'costo_insumo'),
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

$xls->getDefaultStyle()
        ->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getDefaultStyle()
        ->getAlignment()
        ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

$importe_total = 0;

foreach ($pdi_pedidos as $pdi_pedido) {

    $ins_insumo = $pdi_pedido->getInsInsumo();
    $ins_categoria = $ins_insumo->getInsCategoria();
    $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
    $pde_centro_pedido = $pan_panol->getPdeCentroPedido();
    $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual($pde_centro_pedido);

    $ins_stock_movimiento = $pdi_pedido->getInsStockMovimiento();
    $ins_stock_tipo_movimiento = $ins_stock_movimiento->getInsStockTipoMovimiento();

    $pdi_estado = $pdi_pedido->getPdiEstadoActual();
    $cantidad = $pdi_estado->getCantidad();
    $observacion = $pdi_estado->getObservacion();

    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
    if($ins_stock_resumen){
        $cantidad_stock_actual = $ins_stock_resumen->getCantidad();
    }
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaHoraToWeb($pdi_pedido->getCreado()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getId(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_insumo->getCodigoInterno(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getFont()->setBold(true);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_categoria->getFamiliaDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pan_panol->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(utf8_encode($ins_stock_tipo_movimiento->getDescripcion()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_stock_actual, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($observacion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pdi_pedido->getCreadoPorDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    if ($ins_insumo_costo) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit('AR$', PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo_costo->getCosto(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("#,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;        
    } else {
        $columna++;
        $columna++;
    }
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