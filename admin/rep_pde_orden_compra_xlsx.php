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

$c = new Criterio();
$c->addDistinct(true);
$c->add('', 'true', '');

if ($cmb_actual) {
    $c->addInicioSubconsulta();
    $c->add('pde_oc_estado.actual', 1, Criterio::IGUAL);
    $c->addFinSubconsulta();
}

if ($cmb_pde_centro_pedido_id != 0) {
    $c->add('pde_centro_pedido.id', $cmb_pde_centro_pedido_id, Criterio::IGUAL);
}
if ($cmb_ins_categoria_id != 0) {
    $c->add('ins_categoria.id', $cmb_ins_categoria_id, Criterio::IGUAL);
}
if ($cmb_ins_insumo_id != 0) {
    $c->add('ins_insumo.id', $cmb_ins_insumo_id, Criterio::IGUAL);
}
if ($txt_descripcion != '') {
    $c->add('ins_insumo.descripcion', $txt_descripcion, Criterio::LIKE);
}
if ($cmb_prv_proveedor_id != 0) {
    $c->add('prv_proveedor.id', $cmb_prv_proveedor_id, Criterio::IGUAL);
}
if ($txt_codigo_aoc != '') {
    $c->add('pde_oc_agrupacion.descripcion', $txt_codigo_aoc, Criterio::LIKE);
}
if ($cmb_pde_tipo_estado_id != 0) {
    $c->add('pde_oc_tipo_estado.id', $cmb_pde_oc_tipo_estado_id, Criterio::IGUAL);
}
if ($cmb_pde_centro_recepcion_id != 0) {
    $c->add('pde_centro_recepcion.id', $cmb_pde_centro_recepcion_id, Criterio::IGUAL);
}
if ($txt_desde != '') {
    $c->add('pde_oc.creado', Gral::getFechaToDb($txt_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $c->add('pde_oc.creado', Gral::getFechaToDb($txt_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$c->addTabla('pde_oc');
$c->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_oc.pde_pedido_id', 'LEFT JOIN');
$c->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc.pde_oc_agrupacion_id', 'LEFT JOIN');
$c->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc.pde_centro_pedido_id');
$c->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id');
$c->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc.ins_insumo_id');
$c->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$c->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc.prv_proveedor_id');
$c->addRealJoin('pde_oc_estado', 'pde_oc_estado.pde_oc_id', 'pde_oc.id');
$c->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc_estado.pde_oc_tipo_estado_id');
$c->addOrden('pde_oc.id', 'asc');
$c->setCriterios();
$pde_ocs = PdeOc::getPdeOcs(null, $c);
//Gral::prr($pde_ocs);
//exit;

/** PHPExcel */
require_once '../comps/phpexcel/PHPExcel.php';
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
    $columna++ => array('ancho' => 12, 'titulo' => 'Fecha', 'indice' => 'fecha'),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cod OC', 'indice' => 'codigo'),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cod AOC', 'indice' => 'codigo_aoc'),
    $columna++ => array('ancho' => 40, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cod Proveedor', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cod Interno', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Producto', 'indice' => 'insumo'),
    $columna++ => array('ancho' => 8, 'titulo' => 'Cant', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Imp Unit', 'indice' => 'importe_unitario'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Imp Total', 'indice' => 'importe_total'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Proveedor', 'indice' => 'proveedor'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Ctr Recepcion', 'indice' => 'ctr_recepcion'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Ctr Pedido', 'indice' => 'ctr_pedido'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Estado Actual', 'indice' => 'estado_actual'),
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

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

// Registros
foreach ($pde_ocs as $pde_oc) {

    $pde_pedido = $pde_oc->getPdePedido();
    $ins_insumo = $pde_oc->getInsInsumo();
    $ins_id = $ins_insumo->getId();
    $ins_categoria = $ins_insumo->getInsCategoria();
    $prv_proveedor = $pde_oc->getPrvProveedor();
    $pde_centro_recepcion = $pde_oc->getPdeCentroRecepcion();
    $pde_centro_pedido = $pde_pedido->getPdeCentroPedido();
    $pde_oc_tipo_estado = $pde_oc->getPdeOcTipoEstadoActual();
    $pde_oc_agrupacion = $pde_oc->getPdeOcAgrupacion();
    
    $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);

    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($pde_oc->getCreado()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_oc->getCodigo(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    if($pde_oc_agrupacion){
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_oc_agrupacion->getCodigo(), PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
    } else {
        $columna++;
    }
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_categoria->getFamiliaDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    if($prv_insumo){
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(html_entity_decode($prv_insumo->getCodigoProveedor()), PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;        
    } else {
        $columna++;
    }
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_id, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(html_entity_decode($ins_insumo->getCodigoInterno()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(html_entity_decode($ins_insumo->getDescripcion()), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_oc->getCantidad(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_oc->getImporteUnidad(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("#,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_oc->getImporteTotal(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("#,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_proveedor->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_centro_recepcion->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_centro_pedido->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_oc_tipo_estado->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING); 
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