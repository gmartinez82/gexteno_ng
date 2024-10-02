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

if ($cmb_us_usuario_id != 0) {
    $criterio->add(UsUsuario::GEN_ATTR_ID, $cmb_us_usuario_id, Criterio::IGUAL);
}
if ($txt_desde != '') {
    $criterio->add(UsNavegacion::GEN_ATTR_CREADO, $txt_desde . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $criterio->add(UsNavegacion::GEN_ATTR_CREADO, $txt_hasta . ' 23:59:59', Criterio::MENORIGUAL);
}
if ($txt_hora_desde != '') {
    $criterio->add(UsNavegacion::GEN_ATTR_CREADO.'::TIME', $txt_hora_desde, Criterio::MAYORIGUAL);
}
if ($txt_hora_hasta != '') {
    $criterio->add(UsNavegacion::GEN_ATTR_CREADO.'::TIME', $txt_hora_hasta, Criterio::MENORIGUAL);
}

$criterio->addTabla(UsNavegacion::GEN_TABLA);
$criterio->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, UsNavegacion::GEN_ATTR_US_USUARIO_ID, 'LEFT JOIN');
$criterio->setCriterios();
$us_navegacions = UsNavegacion::getUsNavegacions(null, $criterio);
//Gral::prr($us_navegacions);
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
    $columna++ => array('ancho' => 8, 'titulo' => 'Id', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 12, "titulo" => 'Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array("ancho" => 9, "titulo" => 'Hora', 'formato' => DbExcel::FORMATO_HORA),
    $columna++ => array('ancho' => 25, 'titulo' => 'Usuario', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 31, 'titulo' => 'Sesion', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 30, 'titulo' => 'IP', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 33, 'titulo' => 'Navegador', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 42, 'titulo' => 'Pagina', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 33, 'titulo' => 'URL', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 33, 'titulo' => 'URL Referencia', 'formato' => DbExcel::FORMATO_DESCRIPCION),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($us_navegacions as $us_navegacion) {
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = $us_navegacion->getId();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($us_navegacion->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbExcel::getHoraToFormula($us_navegacion->getCreado());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = $us_navegacion->getUsUsuario()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $us_navegacion->getSession();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $us_navegacion->getIp();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $us_navegacion->getNavegador();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $us_navegacion->getPagina();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $us_navegacion->getUrl();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $us_navegacion->getUrlReferer();
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