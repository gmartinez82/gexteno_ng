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

$c->add('ins_insumo_costo.actual', 1, Criterio::IGUAL); // solo los repuestos que tienen costo actual = 1

if ($cmb_ins_categoria_id != 0) {
    $c->add('ins_categoria.id', $cmb_ins_categoria_id, Criterio::IGUAL);
}
if ($cmb_ins_etiqueta_id != 0) {
    $c->add('ins_etiqueta.id', $cmb_ins_etiqueta_id, Criterio::IGUAL);
}
if ($cmb_prv_proveedor_id != 0) {
    $c->add('prv_proveedor.id', $cmb_prv_proveedor_id, Criterio::IGUAL);
}
if ($cmb_estado != -1) {
    $c->add('ins_insumo.estado', $cmb_estado, Criterio::IGUAL);
}
if ($txt_descripcion != '') {
    $c->add('ins_insumo.descripcion', $txt_descripcion, Criterio::LIKE);
}
if ($txt_desde != '') {
    $c->add('ins_insumo_costo.modificado', Gral::getFechaToDb($txt_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $c->add('ins_insumo_costo.modificado', Gral::getFechaToDb($txt_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

$c->addTabla('ins_insumo');
$c->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
$c->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$c->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'LEFT JOIN');
$c->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');

$c->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
$c->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_prv_proveedor.prv_proveedor_id', 'LEFT JOIN');

$c->addOrden('ins_insumo.descripcion', 'asc');
$c->setCriterios();
$ins_insumos = InsInsumo::getInsInsumos(null, $c);
//Gral::prr($ins_insumos);
//exit;

$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);


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
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cod Interno', 'indice' => 'codigo_interno'),
    $columna++ => array('ancho' => 70, 'titulo' => 'Descripcion', 'indice' => 'descripcion'),
    $columna++ => array('ancho' => 70, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Marca', 'indice' => 'marca'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Codigo Marca', 'indice' => 'codigo_marca'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Otras Marcas', 'indice' => 'otras_marcas'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Nota Interna', 'indice' => 'nota_interna'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Observaciones', 'indice' => 'observacion'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Costo Neto', 'indice' => 'costo_neto'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo IVA', 'indice' => 'costo_neto'),
    $columna++ => array('ancho' => 60, 'titulo' => 'Proveedor', 'indice' => 'proveedor'),
    $columna++ => array('ancho' => 60, 'titulo' => 'Etiquetas', 'indice' => 'etiquetas'),
);

foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
    $cols[$columna++] = array('ancho' => 25, 'titulo' => '% '.$ins_tipo_lista_precio->getDescripcion());
    $cols[$columna++] = array('ancho' => 25, 'titulo' => '$ '.$ins_tipo_lista_precio->getDescripcion());
}

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

foreach ($ins_insumos as $ins_insumo) {

    $ins_id = $ins_insumo->getId();
    $ins_categoria = $ins_insumo->getInsCategoria();
    $ins_marca = $ins_insumo->getInsMarca();
    $gral_tipo_iva_venta = $ins_insumo->getGralTipoIvaVentaObj();
    $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
    $ins_insumo_ins_marcas = $ins_insumo->getInsInsumoInsMarcas();
    $prv_insumos = $ins_insumo->getPrvInsumos();
    $ins_insumo_prv_proveedors = $ins_insumo->getInsInsumoPrvProveedors();
    $ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();

    $string_descripcion = $ins_insumo->getDescripcion();
    $string_descripcion = html_entity_decode($string_descripcion);
    //$string_descripcion = utf8_encode($string_descripcion);
    //$string_descripcion = utf8_decode($string_descripcion);
    //echo $string_descripcion;
    //exit;

    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    
    if (!$ins_insumo->getEstado()) {
        $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($gris_style); // bordes
    }

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_id, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getCodigoInterno(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($string_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_categoria->getFamiliaDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_marca->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getCodigoMarca(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $string_otras_marcas = '';
    foreach ($ins_insumo_ins_marcas as $ins_insumo_ins_marca) {
        $string_otras_marcas .= $ins_insumo_ins_marca->getInsMarca()->getDescripcion();
        $string_otras_marcas .= ': ';
        $string_otras_marcas .= $ins_insumo_ins_marca->getCodigo();
        $string_otras_marcas = html_entity_decode($string_otras_marcas);
        $string_otras_marcas = htmlspecialchars_decode($string_otras_marcas);
        $string_otras_marcas .= ' - ';
    }
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($string_otras_marcas, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;

    $notas_internas = $ins_insumo->getNotasInternas();
    $notas_internas = html_entity_decode($notas_internas);
    $notas_internas = htmlspecialchars_decode($notas_internas);

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getNotasInternas(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo->getObservacion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
    if ($ins_insumo_costo) {
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_insumo_costo->getCosto(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $columna++;
    } else {
        $columna++;
    }

    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($gral_tipo_iva_venta->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;

    // -------------------------------------------
    // proveedores
    // -------------------------------------------    
    $string_proveedores = '';
    foreach ($prv_insumos as $prv_insumo) {
        $string_proveedores .= $prv_insumo->getPrvProveedor()->getDescripcion();
        $string_proveedores = html_entity_decode($string_proveedores);
        $string_proveedores = htmlspecialchars_decode($string_proveedores);
        $string_proveedores .= ' - ';
    }
    foreach ($ins_insumo_prv_proveedors as $ins_insumo_prv_proveedor) {
        $string_proveedores .= $ins_insumo_prv_proveedor->getPrvProveedor()->getDescripcion();
        $string_proveedores = html_entity_decode($string_proveedores);
        $string_proveedores = htmlspecialchars_decode($string_proveedores);
        if (trim($ins_insumo_prv_proveedor->getCodigo()) != '') {
            $string_proveedores .= '(' . $ins_insumo_prv_proveedor->getCodigo() . ')';
        }
        $string_proveedores .= ' - ';
    }
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($string_proveedores, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
    // -------------------------------------------
    // etiquetas
    // -------------------------------------------    
    $string_etiquetas = '';
    foreach ($ins_etiquetas as $ins_etiqueta) {
        $string_etiquetas .= $ins_etiqueta->getDescripcion();
        $string_etiquetas = html_entity_decode($string_etiquetas);
        $string_etiquetas = htmlspecialchars_decode($string_etiquetas);
        $string_etiquetas .= ' - ';
    }
    //Gral::pr($string_etiquetas);
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($string_etiquetas, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
    foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
        
        $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);

        // -------------------------------------------------------------------------
        // porcentaje de lista de precio
        // -------------------------------------------------------------------------       
        if ($ins_lista_precio) {
            if($ins_lista_precio->getPorcentajeIncremento() > 0){
                $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_lista_precio->getPorcentajeIncremento(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
            }else{
                $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_tipo_lista_precio->getPorcentajeIncremento(), PHPExcel_Cell_DataType::TYPE_NUMERIC);                
            }
            $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("#,##0.00");
            $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        }
        $columna++;
        
        // -------------------------------------------------------------------------
        // importe de lista de precio
        // -------------------------------------------------------------------------       
        if ($ins_lista_precio) {
            $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($ins_lista_precio->getImporteVenta(), PHPExcel_Cell_DataType::TYPE_NUMERIC);
            $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
            $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        }
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