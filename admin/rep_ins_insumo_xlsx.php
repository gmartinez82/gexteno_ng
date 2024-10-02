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

if($txt_creado_desde != ''){
    $criterio->add(InsInsumo::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_creado_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if($txt_creado_hasta != ''){
    $criterio->add(InsInsumo::GEN_ATTR_CREADO, Gral::getFechaToDb($txt_creado_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if($cmb_ins_marca_id != 0){
    $criterio->add(InsInsumo::GEN_ATTR_INS_MARCA_ID, $cmb_ins_marca_id, Criterio::IGUAL);
}

if($cmb_ins_categoria_id != 0){
    $criterio->add(InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, $cmb_ins_categoria_id, Criterio::IGUAL);
}

if($cmb_ins_tipo_insumo_id != 0){
    $criterio->add(InsInsumo::GEN_ATTR_INS_TIPO_CONSUMO_ID, $cmb_ins_tipo_insumo_id, Criterio::LIKE);
}

if ($cmb_estado != -1) {
    $criterio->add(InsInsumo::GEN_ATTR_ESTADO, $cmb_estado, Criterio::IGUAL);
}

if($cmb_veh_modelo_id != 0){
    $criterio->add(VehModelo::GEN_ATTR_ID, $cmb_veh_modelo_id, Criterio::LIKE);
}

if($cmb_ins_etiqueta_id != 0){
    $criterio->add(InsEtiqueta::GEN_ATTR_ID, $cmb_ins_etiqueta_id, Criterio::LIKE);
}

if($cmb_veh_marca_id != 0){
    $criterio->add(VehMarca::GEN_ATTR_ID, $cmb_veh_marca_id, Criterio::LIKE);
}

if($cmb_ins_unidad_medida_id != 0){
    $criterio->add(InsInsumo::GEN_ATTR_INS_UNIDAD_MEDIDA_ID, $cmb_ins_unidad_medida_id, Criterio::LIKE);
}

if ($cmb_ins_tipo_fabricante_id != 0) {
    $criterio->add(InsInsumo::GEN_ATTR_INS_TIPO_FABRICANTE_ID, $cmb_ins_tipo_fabricante_id, Criterio::IGUAL);
}

if ($cmb_gral_tipo_iva_compra != 0) {
    $criterio->add(InsInsumo::GEN_ATTR_GRAL_TIPO_IVA_COMPRA, $cmb_gral_tipo_iva_compra, Criterio::IGUAL);
}

if ($cmb_gral_tipo_iva_venta != 0) {
    $criterio->add(InsInsumo::GEN_ATTR_GRAL_TIPO_IVA_VENTA, $cmb_gral_tipo_iva_venta, Criterio::IGUAL);
}

if ($cmb_venta_web != -1) {
    $criterio->add(InsInsumo::GEN_ATTR_VENTA_WEB, $cmb_venta_web, Criterio::IGUAL);
}

if ($cmb_venta_mercadolibre != -1) {
    $criterio->add(InsInsumo::GEN_ATTR_VENTA_MERCADOLIBRE, $cmb_venta_mercadolibre, Criterio::IGUAL);
}

//$criterio->add(InsInsumo::GEN_ATTR_DESCRIPCION, $txt_descripcion, Criterio::LIKE, false, Criterio::_AND);
//$criterio->add(InsInsumo::GEN_ATTR_CODIGO_INTERNO, $txt_codigo_interno, Criterio::LIKE, false, Criterio::_AND);

$criterio->addTabla(InsInsumo::GEN_TABLA);
$criterio->addRealJoin(InsInsumoVehModelo::GEN_TABLA, InsInsumoVehModelo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(InsEtiqueta::GEN_TABLA, InsEtiqueta::GEN_ATTR_ID, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID, 'LEFT JOIN');
$criterio->addRealJoin(VehModelo::GEN_TABLA, VehModelo::GEN_ATTR_ID, InsInsumoVehModelo::GEN_ATTR_VEH_MODELO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VehMarca::GEN_TABLA, VehMarca::GEN_ATTR_ID, VehModelo::GEN_ATTR_VEH_MARCA_ID, 'LEFT JOIN');
$criterio->setCriterios();
$ins_insumos = InsInsumo::getInsInsumos(null, $criterio);
//Gral::prr($ins_insumos);
//exit;

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
    $columna++ => array('ancho' => 10, 'titulo' => 'Id', 'indice' => 'id'),
    $columna++ => array('ancho' => 16, 'titulo' => 'Cod Interno', 'indice' => 'codigo_interno'),
    $columna++ => array('ancho' => 80, 'titulo' => 'Insumo', 'indice' => 'cliente'),
    $columna++ => array('ancho' => 70, 'titulo' => 'Categoria', 'indice' => 'categoria'),
    $columna++ => array('ancho' => 40, 'titulo' => 'Ins Marca', 'indice' => 'insumo_marca'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Cod Marca', 'indice' => 'codigo_marca'),
    $columna++ => array('ancho' => 20, 'titulo' => 'Tipo Insumo', 'indice' => 'tipo_insumo'),
    $columna++ => array('ancho' => 100, 'titulo' => 'Notas Int', 'indice' => 'notas_internas'),
    $columna++ => array('ancho' => 100, 'titulo' => 'Observaciones', 'indice' => 'observaciones'),
    $columna++ => array('ancho' => 70, 'titulo' => 'Desc Corta', 'indice' => 'descripcion_corta'),
    $columna++ => array('ancho' => 50, 'titulo' => 'Codigo Barra', 'indice' => 'codigo_barra'),
    $columna++ => array('ancho' => 30, 'titulo' => 'Unidad Medida', 'indice' => 'unidad_medida'),
    $columna++ => array("ancho" => 20, "titulo" => 'Iva Compra', 'indice' => 'tipo_iva_compra'),
    $columna++ => array("ancho" => 20, "titulo" => 'Iva Venta', 'indice' => 'tipo_iva_venta'),
    $columna++ => array("ancho" => 15, "titulo" => 'Venta Web', 'indice' => 'venta_web'),
    $columna++ => array("ancho" => 15, "titulo" => 'Venta ML', 'indice' => 'venta_ml'),
    $columna++ => array("ancho" => 20, "titulo" => 'Fecha Creado', 'indice' => 'creado'),
    $columna++ => array("ancho" => 20, "titulo" => 'Hora Creado', 'indice' => 'hora'),
    $columna++ => array("ancho" => 20, "titulo" => 'Estado', 'indice' => 'estado'),
    $columna++ => array("ancho" => 100, "titulo" => 'Proveedores', 'indice' => 'proveedores'),
    $columna++ => array("ancho" => 100, "titulo" => 'Marca Alts', 'indice' => 'marcas_alt'),
    $columna++ => array("ancho" => 100, "titulo" => 'Modelo Vehs', 'indice' => 'modelos'),
    $columna++ => array("ancho" => 100, "titulo" => 'Etiquetas', 'indice' => 'etiquetas'),
    $columna++ => array("ancho" => 100, "titulo" => 'Atributos', 'indice' => 'atributos'),
    $columna++ => array("ancho" => 15, "titulo" => 'Imagenes', 'indice' => 'imagenes'),
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

// -----------------------------------------------------------------------------
// se obtiene el valor de la ultima columna
// -----------------------------------------------------------------------------
$columna_ultima = array_pop(array_keys($cols));

foreach ($ins_insumos as $ins_insumo)
{
    $gral_si_no_estado    = GralSiNo::getOxId($ins_insumo->getEstado());
    $gral_si_no_venta_web = GralSiNo::getOxId($ins_insumo->getVentaWeb());
    $gral_si_no_venta_ml  = GralSiNo::getOxId($ins_insumo->getVentaMercadolibre());
    $gral_tipo_iva_venta  = GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta());
    $gral_tipo_iva_compra = GralTipoIva::getOxId($ins_insumo->getGralTipoIvaCompra());
    
    $id               = $ins_insumo->getId();
    $insumo           = $ins_insumo->getDescripcion();
    $categoria        = $ins_insumo->getInsCategoria()->getFamiliaDescripcion();
    $marca            = $ins_insumo->getInsMarca()->getDescripcion();
    $codigo_marca     = $ins_insumo->getCodigoMarca();
    $codigo_interno   = $ins_insumo->getCodigoInterno();
    $tipo_insumo      = $ins_insumo->getInsTipoInsumo()->getDescripcion();
    $notas_internas   = $ins_insumo->getNotasInternas();
    $observaciones    = $ins_insumo->getObservacion();
    $descripion_corta = $ins_insumo->getDescripcionCorta();
    $codigo_barra     = $ins_insumo->getCodigoBarra();
    $unidad_medida    = $ins_insumo->getInsUnidadMedida()->getDescripcion();
    $tipo_iva_compra  = $gral_tipo_iva_compra->getDescripcion();
    $tipo_iva_venta   = $gral_tipo_iva_venta->getDescripcion();
    $venta_web        = $gral_si_no_venta_web->getDescripcion();
    $venta_ml         = $gral_si_no_venta_ml->getDescripcion();
    $estado           = $gral_si_no_estado->getDescripcion();
    $creado           = Gral::getFechaToWEB($ins_insumo->getCreado());
    $hora_creado      = Gral::getHoraToWEB($ins_insumo->getCreado());
    
    $proveedores        = '';
    $marcas_alt         = '';
    $modelos_vehiculos  = '';
    $etiquetas          = '';
    $atributos          = '';
    
    $prv_proveedores   = array();
    $ins_insumo_marcas = array();
    $veh_modelos       = array();
    $ins_etiquetas     = array();
    $ins_atributos     = array();
    
    $prv_proveedores = $ins_insumo->getPrvProveedorsXInsInsumoPrvProveedor();
    foreach($prv_proveedores as $prv_proveedor){
        $proveedores .= $prv_proveedor->getDescripcion();
        $proveedores .= Gral::REPORTES_SEPARADOR.' ';
    }

    $ins_insumo_marcas = $ins_insumo->getInsInsumoInsMarcas();//$ins_insumo->getInsInsumoXInsInsumoInsMarca();
    foreach($ins_insumo_marcas as $ins_insumo_marca){
        $marcas_alt .= $ins_insumo_marca->getInsMarca()->getDescripcion(). ' : '.$ins_insumo_marca->getCodigo();
        $marcas_alt .= Gral::REPORTES_SEPARADOR.' ';
    }

    $veh_modelos = $ins_insumo->getVehModelosXInsInsumoVehModelo();
    foreach($veh_modelos as $veh_modelo){
        $modelos_vehiculos .= $veh_modelo->getDescripcion();
        $modelos_vehiculos .= Gral::REPORTES_SEPARADOR.' ';
    }

    $ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
    foreach($ins_etiquetas as $ins_etiqueta){
        $etiquetas .= $ins_etiqueta->getDescripcion();
        $etiquetas .= Gral::REPORTES_SEPARADOR.' ';
    }

    $ins_atributos = $ins_insumo->getInsInsumoInsAtributos();
    foreach($ins_atributos as $ins_atributo){
        $atributos .= $ins_atributo->getInsAtributo()->getDescripcion().' : '.$ins_atributo->getValor();
        $atributos .= Gral::REPORTES_SEPARADOR.' ';
    }

    $ins_insumo_imagens = $ins_insumo->getInsInsumoImagens(null, null, true);
    $cantidad_imagenes = count($ins_insumo_imagens);

    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    
    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($id, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($ins_insumo->getCodigoInterno(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit(html_entity_decode($insumo), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($categoria, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($marca, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($codigo_marca, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($tipo_insumo, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit(html_entity_decode($notas_internas), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit(html_entity_decode($observaciones), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit(html_entity_decode($descripion_corta), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($codigo_barra, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($unidad_medida, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($tipo_iva_compra, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($tipo_iva_venta, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($venta_web, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($venta_ml, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($creado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($hora_creado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($estado, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($proveedores, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($marcas_alt, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($modelos_vehiculos, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($etiquetas, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($atributos, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna.$linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    
    $xls->getActiveSheet()->getCell($columna.$linea)->setValueExplicit($cantidad_imagenes, PHPExcel_Cell_DataType::TYPE_NUMERIC);
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