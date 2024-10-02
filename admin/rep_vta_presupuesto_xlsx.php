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

$criterio = new Criterio();
$criterio->addDistinct(true);
VtaPresupuesto::setAplicarFiltrosDeAlcance($criterio);

if($txt_filtro_desde != ''){
    $criterio->add('vta_presupuesto.fecha', $txt_filtro_desde, Criterio::MAYORIGUAL);
}

if($txt_filtro_hasta != ''){
    $criterio->add('vta_presupuesto.fecha', $txt_filtro_hasta, Criterio::MENORIGUAL);
}

if($cmb_filtro_vta_presupuesto_tipo_estado_id != 0){
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_estado_id', $cmb_filtro_vta_presupuesto_tipo_estado_id, Criterio::IGUAL);
}

if($cmb_filtro_cli_cliente_id != 0){
    $criterio->add('vta_presupuesto.cli_cliente_id', $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if($cmb_filtro_ins_tipo_lista_precio_id != 0){
    $criterio->add('vta_presupuesto.ins_tipo_lista_precio_id', $cmb_filtro_ins_tipo_lista_precio_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_sucursal_id != 0){
    $criterio->add('vta_presupuesto.gral_sucursal_id', $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_vendedor_id != 0){
    $criterio->add('vta_presupuesto.vta_vendedor_id', $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_presupuesto_tipo_despacho_id != 0){
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_despacho_id', $cmb_filtro_vta_presupuesto_tipo_despacho_id, Criterio::IGUAL);
}

if($cmb_filtro_gral_sucursal_retiro != 0){
    $criterio->add('vta_presupuesto.gral_sucursal_retiro', $cmb_filtro_gral_sucursal_retiro, Criterio::IGUAL);
}

if($cmb_filtro_vta_presupuesto_tipo_venta_id != 0){
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_venta_id', $cmb_filtro_vta_presupuesto_tipo_venta_id, Criterio::IGUAL);
}

if($cmb_filtro_vta_presupuesto_tipo_emision_id != 0){
    $criterio->add('vta_presupuesto.vta_presupuesto_tipo_emision_id', $cmb_filtro_vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_actividad_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_ACTIVIDAD_ID, $cmb_filtro_gral_actividad_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_escenario_id != 0) {
    $criterio->add(VtaPresupuesto::GEN_ATTR_GRAL_ESCENARIO_ID, $cmb_filtro_gral_escenario_id, Criterio::IGUAL);
}


$criterio->addTabla('vta_presupuesto');
$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_presupuesto.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
$criterio->setCriterios();

$vta_presupuestos = VtaPresupuesto::getVtaPresupuestos(null, $criterio);
//Gral::prr($vta_presupuestos);
//exit;

/** PHPExcel */
require_once Gral::getPathAbs().'comps/phpexcel/PHPExcel.php';
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
    $columna++ => array('ancho' => 20, 'titulo' => 'Fecha', 'indice' => 'fecha'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Codigo', 'indice' => 'codigo'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Cliente', 'indice' => 'cliente'),
    $columna++ => array('ancho' => 25, 'titulo' => 'Estado', 'indice' => 'estado'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Vencimiento', 'indice' => 'vencimiento'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Lista', 'indice' => 'tipo_lista'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Items', 'indice' => 'Items'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Subtotal', 'indice' => 'subtotal'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Descuento', 'indice' => 'descuento'),
    $columna++ => array('ancho' => 20, 'titulo' => 'IVA', 'indice' => 'iva'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Total', 'indice' => 'total'),
    $columna++ => array("ancho" => 20, "titulo" => "Actividad", "indice" => "actividad"),
    $columna++ => array("ancho" => 20, "titulo" => "Escenario", "indice" => "escenario"),
    $columna++ => array("ancho" => 30, "titulo" => "Vendedor", "indice" => "vendedor"),
    $columna++ => array("ancho" => 20, "titulo" => "Sucursal", "indice" => "sucursal"),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Despacho', 'indice' => 'tipo_despacho'),
    $columna++ => array("ancho" => 20, "titulo" => "Sucursal Retiro", "indice" => "sucursal"),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Venta', 'indice' => 'tipo_venta'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Tipo Emision', 'indice' => 'tipo_emision'),
);

$linea = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($cols as $i => $col)
{
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

foreach ($vta_presupuestos as $vta_presupuesto)
{
    
    $fecha       = Gral::getFechaToWeb($vta_presupuesto->getFecha());
    $codigo      = $vta_presupuesto->getCodigo();
    $cliente     = $vta_presupuesto->getPersonaDescripcion();
    $estado      = $vta_presupuesto->getVtaPresupuestoTipoEstado()->getDescripcion();
    $vencimiento = Gral::getFechaToWeb($vta_presupuesto->getFechaVencimiento());
    $tipo_lista  = $vta_presupuesto->getInsTipoListaPrecio()->getDescripcion();
    $items       = $vta_presupuesto->getCantidadItems();
    $subtotal    = ($vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva());
    $descuento   = ($vta_presupuesto->getImporteTotalDescuento());
    $iva         = ($vta_presupuesto->getIvaPresupuesto());
    $total       = ($vta_presupuesto->getImporteTotalPresupuestoConIva());
    $gral_actividad_descripcion = $vta_presupuesto->getGralActividad()->getDescripcion();
    $gral_escenario_descripcion = $vta_presupuesto->getGralEscenario()->getDescripcion();
    $vta_vendedor_descripcion = $vta_presupuesto->getVtaVendedor()->getDescripcion();
    $gral_sucursal_descripcion = $vta_presupuesto->getGralSucursal()->getDescripcion();


    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    
    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fecha, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($codigo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cliente, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vencimiento, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($tipo_lista, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($items, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($subtotal, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($descuento, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($iva, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($total, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_actividad_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_escenario_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_vendedor_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_sucursal_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_presupuesto->getVtaPresupuestoTipoDespacho()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_presupuesto->getGralSucursalRetiroObj()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_presupuesto->getVtaPresupuestoTipoVenta()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_presupuesto->getVtaPresupuestoTipoEmision()->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
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