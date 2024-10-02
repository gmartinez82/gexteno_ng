<?php

error_reporting(E_ERROR);
ini_set('display_errors', '1');
set_time_limit(0);

include_once 'control/seguridad.php';
include_once '_autoload.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 'A');
define('DB_XLS_CONFIG_PRIMER_FILA', '1');
// ----------------------------------------------------------------------------

$db_nombre_objeto = 'rep_pdi_solicitudes';
$db_nombre_pagina = 'rep_pdi_solicitudes';

$c = new Criterio();
$c->addDistinct(true);

$c->add('pdi_tipo_origen.codigo', PdiTipoOrigen::TIPO_ORIGEN_PANOL, Criterio::IGUAL);
$c->add('pdi_pedido.pan_panol_origen', 'pdi_pedido.pan_panol_destino', Criterio::DISTINTO, false, 'AND', false);

if ($cmb_pan_panol_origen != 0) {
    $c->add('pdi_pedido.pan_panol_origen', $cmb_pan_panol_origen, Criterio::IGUAL);
}
if ($cmb_pan_panol_destino != 0) {
    $c->add('pdi_pedido.pan_panol_destino', $cmb_pan_panol_destino, Criterio::IGUAL);
}
if ($txt_descripcion != '') {
    $c->add('ins_insumo.descripcion', $txt_descripcion, Criterio::IGUAL);
}
if ($txt_codigo_interno != '') {
    $c->add('ins_insumo.codigo_interno', $txt_codigo_interno, Criterio::IGUAL);
}
if ($cmb_ins_categoria_id != 0) {
    $c->add('ins_categoria.id', $cmb_ins_categoria_id, Criterio::IGUAL);
}
if ($txt_desde != '') {
    $c->add('pdi_pedido.creado', Gral::getFechaToDb($txt_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $c->add('pdi_pedido.creado', Gral::getFechaToDb($txt_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$c->addTabla('pdi_pedido');
$c->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id');
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
    $columna++ => array('ancho' => 20, 'titulo' => 'Solicitante', 'indice' => 'panol'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Solicita a', 'indice' => 'panol'),
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cod Interno', 'indice' => 'codigo_interno'),
    $columna++ => array('ancho' => 60, 'titulo' => 'Insumo', 'indice' => 'insumo'),
    $columna++ => array('ancho' => 25, 'titulo' => 'Stock Actual en Solicitante'),
    $columna++ => array('ancho' => 25, 'titulo' => 'Stock Actual en Destinatario'),
    $columna++ => array('ancho' => 12, 'titulo' => 'Clsf Origen', 'indice' => 'clasificacion_origen'),
    $columna++ => array('ancho' => 12, 'titulo' => 'Clsf Destino', 'indice' => 'clasificacion_destino'),
    $columna++ => array('ancho' => 14, 'titulo' => 'Solicitado', 'indice' => 'fecha'),
    $columna++ => array('ancho' => 14, 'titulo' => 'Cant Sol', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 14, 'titulo' => 'Despachado', 'indice' => 'fecha'),
    $columna++ => array('ancho' => 14, 'titulo' => 'Cant Desp', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 14, 'titulo' => 'Recibido', 'indice' => 'fecha'),
    $columna++ => array('ancho' => 14, 'titulo' => 'Cant Recib', 'indice' => 'cantidad'),
    $columna++ => array('ancho' => 18, 'titulo' => 'Dias Sol/Desp', 'indice' => 'dias_solicitud_despacho'),
    $columna++ => array('ancho' => 18, 'titulo' => 'Dias Sol/Recep', 'indice' => 'dias_solicitud_recepcion'),
    $columna++ => array('ancho' => 16, 'titulo' => 'Estado Actual', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 40, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 25, 'titulo' => 'Usuario', 'indice' => 'usuario'),
    $columna++ => array('ancho' => 22, 'titulo' => 'Costo en Fecha', 'indice' => 'costo_insumo'),
    $columna++ => array('ancho' => 22, 'titulo' => 'Costo Actual', 'indice' => 'costo_insumo'),
    $columna++ => array('ancho' => 12, 'titulo' => 'Urgencia', 'indice' => 'urgencia'),
    $columna++ => array('ancho' => 70, 'titulo' => 'Proveedor', 'indice' => 'proveedor'),
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
    $ins_id = $ins_insumo->getId();
    $ins_categoria = $ins_insumo->getInsCategoria();
    $pan_panol_origen = PanPanol::getOxId($pdi_pedido->getPanPanolOrigen());
    $pan_panol_destino = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
    $fecha = substr($pdi_pedido->getCreado(), 0, 10);

    $ins_stock_resumen_origen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_origen);
    if($ins_stock_resumen_origen){
        $cantidad_stock_origen_actual = $ins_stock_resumen_origen->getCantidad();
    }

    $ins_stock_resumen_destino = $ins_insumo->getInsStockResumenEnPanol($pan_panol_destino);
    if($ins_stock_resumen_destino){
        $cantidad_stock_destino_actual = $ins_stock_resumen_destino->getCantidad();
    }

    $pde_centro_pedido = $pan_panol_destino->getPdeCentroPedido();
    $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual($pde_centro_pedido);
    $ins_insumo_costo_en_fecha = $ins_insumo->getInsInsumoCostoEnFecha($fecha, $pde_centro_pedido);

    $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
    $pdi_tipo_estado_actual = $pdi_estado_actual->getPdiTipoEstado();

    $pdi_urgencia = $pdi_pedido->getPdiUrgencia();
    $ins_insumo_pan_panol_origen = $ins_insumo->getUbicacionEnPanol($pan_panol_origen);
    $ins_insumo_pan_panol_destino = $ins_insumo->getUbicacionEnPanol($pan_panol_destino);

    $ins_clasificacion_origen = ($ins_insumo_pan_panol_origen) ? $ins_insumo_pan_panol_origen->getInsClasificacion() : false;
    $ins_clasificacion_destino = ($ins_insumo_pan_panol_destino) ? $ins_insumo_pan_panol_destino->getInsClasificacion() : false;

    $arr_pedido_movimientos = $pdi_pedido->getPdiPedidoMovimientos();
    //Gral::prr($arr_pedido_movimientos);
    //exit;

    $pdi_estados = $pdi_pedido->getPdiEstados();
    //Gral::prr($pdi_estados);
    //exit;
    // se determina si fue redireccionado alguna vez
    $redireccionado_cantidad = 0;
    $redireccionado_por = '';
    foreach ($pdi_estados as $pdi_estado) {
        $pdi_tipo_estado = $pdi_estado->getPdiTipoEstado();
        if ($pdi_tipo_estado->getCodigo() == PdiTipoEstado::TIPO_ESTADO_REDIRIGIDO) {
            $redireccionado_cantidad++;

            if ($redireccionado_cantidad > 1) {
                $redireccionado_por .= ' / ';
            }
            $redireccionado_por .= $pdi_estado->getCreadoPorDescripcion();
        }
    }

    $dias_solicitud_despacho = Date::getDiferenciaTiempo('d', $arr_pedido_movimientos['SOLICITADO']['FECHA'], $arr_pedido_movimientos['DESPACHADO']['FECHA']);
    $dias_solicitud_recepcion = Date::getDiferenciaTiempo('d', $arr_pedido_movimientos['SOLICITADO']['FECHA'], $arr_pedido_movimientos['RECIBIDO']['FECHA']);
    
    $prv_proveedores_descripcion   = '';
    
    $prv_proveedores = $ins_insumo->getPrvProveedorsXInsInsumoPrvProveedor();
    foreach($prv_proveedores as $prv_proveedor){
        $prv_proveedores_descripcion .= $prv_proveedor->getDescripcion();
        $prv_proveedores_descripcion .= Gral::REPORTES_SEPARADOR.' ';
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
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pan_panol_origen->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pan_panol_destino->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_id, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_insumo->getCodigoInterno(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_stock_origen_actual, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cantidad_stock_destino_actual, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(($ins_clasificacion_origen) ? $ins_clasificacion_origen->getDescripcion() : '', PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(($ins_clasificacion_destino) ? $ins_clasificacion_destino->getDescripcion() : '', PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_pedido_movimientos['SOLICITADO']['FECHA'], PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_pedido_movimientos['SOLICITADO']['CANTIDAD'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_pedido_movimientos['DESPACHADO']['FECHA'], PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_pedido_movimientos['DESPACHADO']['CANTIDAD'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_pedido_movimientos['RECIBIDO']['FECHA'], PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_pedido_movimientos['RECIBIDO']['CANTIDAD'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    if ($dias_solicitud_despacho >= 0) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($dias_solicitud_despacho, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
    } else {
        $columna++;
    }
    if ($dias_solicitud_recepcion >= 0) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($dias_solicitud_recepcion, PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $columna++;
    } else {
        $columna++;
    }
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pdi_tipo_estado_actual->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_categoria->getFamiliaDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pdi_pedido->getCreadoPorDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    if ($ins_insumo_costo_en_fecha) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo_costo_en_fecha->getCosto(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("#,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }    
    if ($ins_insumo_costo_actual) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo_costo_actual->getCosto(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("#,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($pdi_urgencia->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_proveedores_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
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