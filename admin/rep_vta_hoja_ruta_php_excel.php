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
    $criterio->add(VtaHojaRuta::GEN_ATTR_CREADO, $txt_filtro_desde . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(VtaHojaRuta::GEN_ATTR_CREADO, $txt_filtro_hasta . ' 23:59:59', Criterio::MENORIGUAL);
}

if ($txt_filtro_descripcion != '') {
    $criterio->add(VtaHojaRuta::GEN_ATTR_DESCRIPCION, $txt_filtro_descripcion, Criterio::LIKE);
}

if ($cmb_gral_ruta_id != 0) {
    $criterio->add(GralRuta::GEN_ATTR_ID, $cmb_gral_ruta_id, Criterio::IGUAL);
}

if ($cmb_vta_hoja_ruta_tipo_estado_id != 0) {
    $criterio->add(VtaHojaRutaTipoEstado::GEN_ATTR_ID, $cmb_vta_hoja_ruta_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_ope_chofer_id != 0) {
    $criterio->add(OpeChofer::GEN_ATTR_ID, $cmb_ope_chofer_id, Criterio::IGUAL);
}

$criterio->addTabla(VtaHojaRuta::GEN_TABLA);
$criterio->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaHojaRutaTipoEstado::GEN_TABLA, VtaHojaRutaTipoEstado::GEN_ATTR_ID, VtaHojaRuta::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addRealJoin(OpeChofer::GEN_TABLA, OpeChofer::GEN_ATTR_ID, VtaHojaRuta::GEN_ATTR_OPE_CHOFER_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaHojaRutaVtaRemito::GEN_TABLA, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID, VtaHojaRuta::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_ID, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, VtaHojaRuta::GEN_ATTR_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_ID, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, 'LEFT JOIN');
$criterio->addOrden(VtaHojaRuta::GEN_ATTR_CREADO, Criterio::_DESC);

$criterio->setCriterios();
$vta_hoja_rutas = VtaHojaRuta::getVtaHojaRutas(null, $criterio);
//Gral::prr($vta_hoja_rutas);
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
    $columna++ => array('ancho' => 13, 'titulo' => 'Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 17, 'titulo' => 'Codigo', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 36, 'titulo' => 'Descripcion', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 13, 'titulo' => 'Ruta', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 21, 'titulo' => 'Tipo Estado', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 27, 'titulo' => 'Chofer', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 14, 'titulo' => 'Remitos', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 16, 'titulo' => 'Remitos++', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Creado', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 16, 'titulo' => 'Hora Creado', 'formato' => DbExcel::FORMATO_HORA),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($vta_hoja_rutas as $vta_hoja_ruta) {
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = DbExcel::getFechaToFormula($vta_hoja_ruta->getFecha());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $vta_hoja_ruta->getCodigo();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_hoja_ruta->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_hoja_ruta->getGralRuta()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_hoja_ruta->getVtaHojaRutaTipoEstado()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_hoja_ruta->getOpeChofer()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = count($vta_hoja_ruta->getVtaRemitosXVtaHojaRutaVtaRemito(null, null, true));
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = count($vta_hoja_ruta->getVtaRemitoAjustesXVtaHojaRutaVtaRemitoAjuste(null, null, true));
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($vta_hoja_ruta->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbExcel::getHoraToFormula($vta_hoja_ruta->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
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