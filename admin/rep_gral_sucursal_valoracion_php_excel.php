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

if ($txt_creado_desde != '') {
    $criterio->add(GralSucursalValoracion::GEN_ATTR_FECHA, Gral::getFechaToDb($txt_creado_desde), Criterio::MAYORIGUAL);
}
if ($txt_creado_hasta != '') {
    $criterio->add(GralSucursalValoracion::GEN_ATTR_FECHA, Gral::getFechaToDb($txt_creado_hasta), Criterio::MENORIGUAL);
}
if ($cmb_gral_sucursal_id != 0) {
    $criterio->add(GralSucursal::GEN_ATTR_ID, $cmb_gral_sucursal_id, Criterio::IGUAL);
}

$criterio->addTabla(GralSucursalValoracion::GEN_TABLA);
$criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalValoracion::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
$criterio->addOrden(GralSucursalValoracion::GEN_ATTR_FECHA, Criterio::_DESC);
$criterio->setCriterios();
$gral_sucursal_valoracions = GralSucursalValoracion::getGralSucursalValoracions(null, $criterio);
//Gral::prr($gral_sucursal_valoracions);
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
    $columna++ => array('ancho' => 9, 'titulo' => 'Año', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 9, 'titulo' => 'Mes', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 12, 'titulo' => 'Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array('ancho' => 30, 'titulo' => 'Sucursal', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Valoracion', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 24, 'titulo' => 'Apellido', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 24, 'titulo' => 'Nombre', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 17, 'titulo' => 'Telefono', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 27, 'titulo' => 'Email', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 100, "titulo" => 'Observacion', 'formato' => DbExcel::FORMATO_DESCRIPCION),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($gral_sucursal_valoracions as $gral_sucursal_valoracion) {
    
    $arr_fecha = Date::getArrFecha($gral_sucursal_valoracion->getFecha());
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = $arr_fecha['anio'];
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $arr_fecha['mes'];
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($gral_sucursal_valoracion->getFecha());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $gral_sucursal_valoracion->getGralSucursal()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $gral_sucursal_valoracion->getValoracion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $gral_sucursal_valoracion->getApellido();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $gral_sucursal_valoracion->getNombre();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $gral_sucursal_valoracion->getTelefono();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $gral_sucursal_valoracion->getEmail();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $gral_sucursal_valoracion->getObservacion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
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