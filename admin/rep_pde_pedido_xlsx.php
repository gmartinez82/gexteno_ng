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
    $c->add('pde_estado.actual', 1, Criterio::IGUAL);
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
if ($cmb_pde_tipo_estado_id != 0) {
    $c->add('pde_tipo_estado.id', $cmb_pde_tipo_estado_id, Criterio::IGUAL);
}
if ($txt_desde != '') {
    $c->add('pde_pedido.creado', Gral::getFechaToDb($txt_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $c->add('pde_pedido.creado', Gral::getFechaToDb($txt_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$c->addTabla('pde_pedido');
$c->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_pedido.pde_centro_pedido_id');
$c->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_pedido.ins_insumo_id');
$c->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id');
$c->addRealJoin('pde_pedido_prv_proveedor', 'pde_pedido_prv_proveedor.pde_pedido_id', 'pde_pedido.id');
$c->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_pedido_prv_proveedor.prv_proveedor_id');
$c->addRealJoin('pde_estado', 'pde_estado.pde_pedido_id', 'pde_pedido.id');
$c->addRealJoin('pde_tipo_estado', 'pde_tipo_estado.id', 'pde_estado.pde_tipo_estado_id');
$c->addOrden('pde_pedido.id', 'asc');
$c->setCriterios();
$pde_pedidos = PdePedido::getPdePedidos(null, $c);
//Gral::prr($pde_pedidos);
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
    $columna++ => array('ancho' => 12, 'titulo' => 'Fecha', 'indice' => 'fecha'),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cod', 'indice' => 'codigo'),
    $columna++ => array('ancho' => 35, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array("ancho" => 20, "titulo" => "Codigo Interno", "indice" => "codigo_interno"),
    $columna++ => array('ancho' => 60, 'titulo' => 'Insumo', 'indice' => 'insumo'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Provs', 'indice' => 'proveedores'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Cots', 'indice' => 'cotizaciones'),
    $columna++ => array('ancho' => 10, 'titulo' => 'OCs', 'indice' => 'ocs'),
    $columna++ => array('ancho' => 12, 'titulo' => 'Fecha OC', 'indice' => 'fecha_oc'),
    $columna++ => array('ancho' => 8 , 'titulo' => 'Dias OC', 'indice' => 'dias_oc'),
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

$xls->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$xls->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

// Registros
foreach ($pde_pedidos as $pde_pedido)
{
    $ins_insumo      = $pde_pedido->getInsInsumo();
    $ins_id          = $ins_insumo->getId();
    $ins_categoria   = $ins_insumo->getInsCategoria();
    //$ins_clasificacion = $ins_insumo->getInsClasificacion();
    $prv_proveedors  = $pde_pedido->getPrvProveedorsXPdePedidoPrvProveedor();
    $pde_cotizacions = $pde_pedido->getPdeCotizacions();
    $pde_ocs         = $pde_pedido->getPdeOcs();
    $pde_oc          = $pde_pedido->getPdeOc();
        
    if($pde_oc){
        $dias_oc = Date::getDiferenciaTiempo('d', $pde_pedido->getCreado(), $pde_oc->getCreado());
    }
    
    $cantidad_provs = count($prv_proveedors);
    $cantidad_cots = count($pde_cotizacions);
    $cantidad_ocs = count($pde_ocs);
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    
    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($pde_pedido->getCreado()), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pde_pedido->getCodigo(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_categoria->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_id, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_insumo->getCodigoInterno(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);  
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    //$xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_clasificacion->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_provs, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_cots, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_ocs, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    if($pde_oc){
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($pde_oc->getCreado()), PHPExcel_Cell_DataType::TYPE_STRING);
        $columna++;
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($dias_oc, PHPExcel_Cell_DataType::TYPE_NUMERIC);
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