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

$db_nombre_objeto = 'rep_stock_resumen';
$db_nombre_pagina = 'rep_stock_resumen';

$c = new Criterio();
$c->addDistinct(true);

if ($cmb_pan_panol_id != 0) {
    $c->add('pan_panol.id', $cmb_pan_panol_id, Criterio::IGUAL);
}
if ($cmb_ins_categoria_id != 0) {
    $c->add('ins_categoria.id', $cmb_ins_categoria_id, Criterio::IGUAL);
}
if ($cmb_ins_stock_resumen_tipo_estado_id != 0) {
    $c->add('ins_stock_resumen_tipo_estado.id', $cmb_ins_stock_resumen_tipo_estado_id, Criterio::IGUAL);
}
if ($txt_descripcion != '') {
    $c->add('ins_insumo.descripcion', $txt_descripcion, Criterio::LIKE);
}
if ($txt_codigo_interno != '') {
    $c->add('ins_insumo.codigo_interno', $txt_codigo_interno, Criterio::LIKE);
}
if ($cmb_ins_etiqueta_id != 0) {
    $c->add('ins_etiqueta.id', $cmb_ins_etiqueta_id, Criterio::IGUAL);
}
if ($cmb_prv_proveedor_id != 0) {
    $c->add('prv_proveedor.id', $cmb_prv_proveedor_id, Criterio::IGUAL);
}
if ($txt_desde != '') {
    $c->add('ins_stock_resumen.modificado', Gral::getFechaToDb($txt_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $c->add('ins_stock_resumen.modificado', Gral::getFechaToDb($txt_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$c->addTabla('ins_stock_resumen');

$c->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_resumen.pan_panol_id');
$c->addRealJoin('ins_stock_resumen_tipo_estado', 'ins_stock_resumen_tipo_estado.id', 'ins_stock_resumen.ins_stock_resumen_tipo_estado_id');

$c->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_resumen.ins_insumo_id');
$c->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');

$c->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$c->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');

//$c->addRealJoin('prv_insumo', 'prv_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
//$c->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_insumo.prv_proveedor_id', 'LEFT JOIN');
$c->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$c->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_prv_proveedor.prv_proveedor_id', 'LEFT JOIN');

$c->addOrden('ins_stock_resumen.id', 'desc');
$c->setCriterios();
$ins_stock_resumens = InsStockResumen::getInsStockResumens(null, $c);
//Gral::prr($ins_stock_resumens);
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
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array('ancho' => 25, 'titulo' => 'Cod Interno', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Insumo', 'indice' => 'insumo'),
    $columna++ => array('ancho' => 40, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Deposito', 'indice' => 'panol'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Cantidad', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Reservados', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Total', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Ult Modif Stock', 'indice' => 'utl_modificacion'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo Estado', 'indice' => 'tipo_estado'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Costo Actual', 'indice' => 'costo_insumo'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Costo en Panol', 'indice' => 'costo_panol'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Ult Modif Costo', 'indice' => 'utl_modificacion'),
    $columna++ => array('ancho' => 10, 'titulo' => 'PtoMin', 'indice' => 'pto_min'),
    $columna++ => array('ancho' => 10, 'titulo' => 'PtoPed', 'indice' => 'pto_ped'),
    $columna++ => array('ancho' => 10, 'titulo' => 'PtoMax', 'indice' => 'pto_max'),
    $columna++ => array('ancho' => 15, 'titulo' => 'Ubicacion', 'indice' => 'ubicacion'),
    $columna++ => array('ancho' => 40, 'titulo' => 'Proveedores', 'indice' => 'proveedor'),
    $columna++ => array('ancho' => 100, 'titulo' => 'Etiquetas', 'indice' => 'etiquetas'),
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
//Gral::prr($eve_agencias);

$xls->getDefaultStyle()
        ->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getDefaultStyle()
        ->getAlignment()
        ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);


$importe_total = 0;

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

foreach ($ins_stock_resumens as $ins_stock_resumen) {

    $ins_insumo = $ins_stock_resumen->getInsInsumo();
    $ins_categoria = $ins_insumo->getInsCategoria();
    $pan_panol = $ins_stock_resumen->getPanPanol();
    $pde_centro_pedido = $pan_panol->getPdeCentroPedido();
    $ins_insumo_costo = $ins_stock_resumen->getInsInsumo()->getInsInsumoCostoActual($pde_centro_pedido);
    $ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstadoActual();
    $ult_modificacion_stock = $ins_stock_resumen->getModificado();

    $prv_proveedors_descripcion        = '';
    $prv_proveedors = $ins_insumo->getPrvProveedorsXInsInsumoPrvProveedor();
    foreach($prv_proveedors as $prv_proveedor){
        $prv_proveedors_descripcion .= $prv_proveedor->getDescripcion();
        $prv_proveedors_descripcion .= Gral::REPORTES_SEPARADOR.' ';
    }
    
    $ins_etiquetas_descripcion          = '';
    $ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
    foreach($ins_etiquetas as $ins_etiqueta){
        $ins_etiquetas_descripcion .= $ins_etiqueta->getDescripcion();
        $ins_etiquetas_descripcion .= Gral::REPORTES_SEPARADOR.' ';
    }
    
    $costo_insumo = 0;
    $costo_en_panol = 0;
    $ult_modificacion_costo = '-';

    $cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol);
    $cantidad_total = $ins_stock_resumen->getCantidad() + $cantidad_reservados;

    if ($ins_insumo_costo) {
        $costo_insumo = $ins_insumo_costo->getCosto();
        $costo_en_panol = $ins_insumo_costo->getCosto() * $cantidad_total;
        $ult_modificacion_costo = Gral::getFechaHoraToWeb($ins_insumo_costo->getModificado());
        $ult_modificacion_costo = $ins_insumo_costo->getModificado(); // se sobreescribe con formato natural para ordenar en excel generado
    }

    $arr_puntos_insumo = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);
    $ins_insumo_pan_panol = $ins_insumo->getUbicacionEnPanol($pan_panol);

    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    
    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getId(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getCodigoInterno(), PHPExcel_Cell_DataType::TYPE_STRING);
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
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_stock_resumen->getCantidad(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_reservados, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ult_modificacion_stock, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_stock_resumen_tipo_estado->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($costo_insumo, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("AR$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($costo_en_panol, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("AR$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ult_modificacion_costo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_puntos_insumo[InsInsumo::PUNTO_MINIMO], PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_puntos_insumo[InsInsumo::PUNTO_PEDIDO], PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_puntos_insumo[InsInsumo::PUNTO_MAXIMO], PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(($ins_insumo_pan_panol) ? $ins_insumo_pan_panol->getDescripcion() : '', PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($prv_proveedors_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_etiquetas_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
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