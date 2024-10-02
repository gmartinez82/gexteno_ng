<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

require '../vendor/autoload.php'; // autoload del composer
include_once 'control/seguridad.php';
require_once Gral::getPathAbs() . 'admin/rep_init_PhpSpreadsheet.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;           //libro
use PhpOffice\PhpSpreadsheet\IOFactory;             //descargar libro
use PhpOffice\PhpSpreadsheet\Cell\DataType;         //celdas (tipo de datos)
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;       //obtener indice de columna en letra
use PhpOffice\PhpSpreadsheet\Settings;              //formulas (elegir idioma de traduccion)
use PhpOffice\PhpSpreadsheet\Calculation;           //formulas (traduccion)

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_ALTO_FILA', 22);
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 1);
define('DB_XLS_CONFIG_PRIMER_FILA', 1);
// ----------------------------------------------------------------------------

$criterio = new Criterio();
$criterio->addDistinct(true);

if ($txt_filtro_desde != '') {
    $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_desde) . ' 00:00:00', Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, Gral::getFechaToDb($txt_filtro_hasta) . ' 23:59:59', Criterio::MENORIGUAL);
}

if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_factura_tipo_estado_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, $cmb_filtro_vta_factura_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_tipo_factura_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_VTA_TIPO_FACTURA_ID, $cmb_filtro_vta_tipo_factura_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_sucursal_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_actividad_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_GRAL_ACTIVIDAD_ID, $cmb_filtro_gral_actividad_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_escenario_id != 0) {
    $criterio->add(VtaFactura::GEN_ATTR_GRAL_ESCENARIO_ID, $cmb_filtro_gral_escenario_id, Criterio::IGUAL);
}

$criterio->addTabla(VtaFactura::GEN_TABLA);
//$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
//$criterio->addRealJoin(VtaRemitoTipoEstado::GEN_TABLA, VtaRemitoTipoEstado::GEN_ATTR_ID, VtaRemito::GEN_ATTR_VTA_REMITO_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->setCriterios();
$vta_facturas = VtaFactura::getVtaFacturas(null, $criterio);
//Gral::prr($vta_facturas);
//exit;

// -----------------------------------------------------------------------------
// Configurar traduccion de formulas
// -----------------------------------------------------------------------------
$locale = 'es';
$validLocale = Settings::setLocale($locale);
//DbPhpSpreadsheet::getComprobacionTraduccionFormulas($locale, $validLocale);
//exit;

// -----------------------------------------------------------------------------
// se inicializa libro y se les da propiedades
// -----------------------------------------------------------------------------
$spreadsheet = new Spreadsheet();
$spreadsheet->getProperties()
    ->setCreator(Gral::getConfig("sistema_nombre"))
    ->setLastModifiedBy(Gral::getConfig("sistema_nombre"))
    ->setTitle(Gral::getConfig("sistema_nombre"))
    ->setSubject(Gral::getConfig("sistema_nombre"))
    ->setDescription(Gral::getConfig("sistema_nombre"))
    ->setKeywords(Gral::getConfig("sistema_nombre"))
    ->setCategory(Gral::getConfig("sistema_nombre"));

// -----------------------------------------------------------------------------
// se inicializa hoja/s
// -----------------------------------------------------------------------------
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Datos');

// -----------------------------------------------------------------------------
// Cabeceras
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$arr_cabeceras = array(
    $columna++ => array("ancho" => 18, "titulo" => "Codigo", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 14, "titulo" => "Fecha", 'formato' => DbPhpSpreadsheet::FORMATO_FECHA),
    $columna++ => array("ancho" => 14, "titulo" => "Vencimiento", 'formato' => DbPhpSpreadsheet::FORMATO_FECHA),
    $columna++ => array("ancho" => 10, "titulo" => "Vencida", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 50, "titulo" => "Cliente", 'formato' => DbPhpSpreadsheet::FORMATO_DESCRIPCION),
    $columna++ => array("ancho" => 18, "titulo" => "Cuit", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Estado", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 5, "titulo" => "Tipo", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Subtotal", 'formato' => DbPhpSpreadsheet::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 20, "titulo" => "IVA", 'formato' => DbPhpSpreadsheet::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 20, "titulo" => "Tributos", 'formato' => DbPhpSpreadsheet::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 20, "titulo" => "Total", 'formato' => DbPhpSpreadsheet::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 20, "titulo" => "Saldada", 'formato' => DbPhpSpreadsheet::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 20, "titulo" => "Saldo", 'formato' => DbPhpSpreadsheet::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 20, "titulo" => "Nro Factura", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "CAE", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Actividad", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Escenario", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Preventista", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 32, "titulo" => "Vendedor", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Comprador", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Sucursal", 'formato' => DbPhpSpreadsheet::FORMATO_NINGUNO),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $sheet->setCellValueByColumnAndRow($i, $fila, $arr_cabecera['titulo']);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($vta_facturas as $vta_factura) {

    $vta_factura_importe = $vta_factura->getResumenComprobante();
    
    $subtotal = "";
    $subtotal_iva = "";
    $subtotal_trib = "";
    $total = "";
    
    $importe_total = $vta_factura_importe->getImporteTotal();
    $importe_saldo_imputable = $vta_factura->getSaldoImputable();
    
    $vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
    $vencida = '-';
    if($vta_factura_tipo_estado->getActivo()){
        if(Date::esRangoValido($vta_factura->getFechaVencimiento(), date('Y-m-d'))){
            $vencida = 'SI';        
        }
    }
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = $vta_factura->getCodigo();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = DbPhpSpreadsheet::getFechaToFormula($vta_factura->getFechaEmision());
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_FORMULA);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbPhpSpreadsheet::getFechaToFormula($vta_factura->getFechaVencimiento());
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_FORMULA);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_FORMULA);
    $columna++;
    
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $vencida, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $vencida, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getPersonaDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getCuit();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura_tipo_estado->getDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getVtaTipoFactura()->getCodigoMin();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    //$subtotal = $vta_factura->getVtaFacturaSubtotal();
    $valor = $vta_factura_importe->getImporteSubtotal();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $subtotal, DataType::TYPE_NUMERIC);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_NUMERIC);
    $columna++;

    //$subtotal_iva = $vta_factura->getVtaFacturaIva();
    $valor = $vta_factura_importe->getImporteIva();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $subtotal_iva, DataType::TYPE_NUMERIC);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_NUMERIC);
    $columna++;
    
    //$subtotal_trib = $vta_factura->getVtaFacturaTributo();
    $valor = $vta_factura_importe->getImporteTributo();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $subtotal_trib, DataType::TYPE_NUMERIC);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_NUMERIC);
    $columna++;

    //$total = $vta_factura->getVtaFacturaTotal();
    $valor = $importe_total;
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $total, DataType::TYPE_NUMERIC);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_NUMERIC);
    $columna++;
    
    //$valor = ($vta_factura->getVtaFacturaTotal()) - ($vta_factura->getSaldoImputable());
    $valor = $importe_total - $importe_saldo_imputable;
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_NUMERIC);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $importe_saldo_imputable;
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_NUMERIC);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_factura->getNumeroComprobanteCompleto();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = ''.$vta_factura->getCae().' ';
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getGralActividad()->getDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getGralEscenario()->getDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getVtaPreventista()->getDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getVtaVendedor()->getDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getVtaComprador()->getDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_factura->getGralSucursal()->getDescripcion();
    //$sheet->setCellValueByColumnAndRow($columna, $fila, $valor, DataType::TYPE_STRING);
    DbPhpSpreadsheet::setCelda($sheet, $columna, $fila, $valor, $type = DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Estilo y Formato
// -----------------------------------------------------------------------------
DbPhpSpreadsheet::getEstiloMasivo($spreadsheet, $sheet, $borde_style, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_XLS_CONFIG_ALTO_FILA);
DbPhpSpreadsheet::getEstiloPersonalizado($spreadsheet, $arr_cabeceras, DB_XLS_CONFIG_PRIMER_COLUMNA, DB_XLS_CONFIG_PRIMER_FILA, $columna, $fila, DB_COLOR_ESTANDAR_FONDO_CABECERA, DB_COLOR_ESTANDAR_LETRA_CABECERA);

// -----------------------------------------------------------------------------
// Insertar filtros
// -----------------------------------------------------------------------------
$ultima_columna = Coordinate::stringFromColumnIndex($columna);
$primer_columna = Coordinate::stringFromColumnIndex(DB_XLS_CONFIG_PRIMER_COLUMNA);
$spreadsheet->getActiveSheet()->setAutoFilter($primer_columna.DB_XLS_CONFIG_PRIMER_FILA.':'.$ultima_columna.DB_XLS_CONFIG_PRIMER_FILA);

// -----------------------------------------------------------------------------
// Zocalo de empresa
// -----------------------------------------------------------------------------
DbPhpSpreadsheet::getImagenEmpresa($spreadsheet, $sheet, $borde_style, $fila, $columna, DB_XLS_CONFIG_PRIMER_COLUMNA);

// -----------------------------------------------------------------------------
// Inmovilizar filas y columnas
// -----------------------------------------------------------------------------
$columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
$columna_letra = Coordinate::stringFromColumnIndex($columna);
$spreadsheet->getActiveSheet()->freezePane($columna_letra.(DB_XLS_CONFIG_PRIMER_FILA + 1));

// -----------------------------------------------------------------------------
// se genera el archivo de salida - descargar documento 
// -----------------------------------------------------------------------------
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . DbConfig::CONFIG_GRAL_CLIENTE_MIN.'-'. $db_nombre_pagina . '.xlsx"');
header('Cache-Control: max-age=0');
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
exit;