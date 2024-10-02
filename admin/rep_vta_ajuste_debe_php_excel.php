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
    $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $txt_filtro_desde, Criterio::MAYORIGUAL);
}

if ($txt_filtro_hasta != '') {
    $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $txt_filtro_hasta, Criterio::MENORIGUAL);
}

if ($cmb_filtro_cli_cliente_id != 0) {
    $criterio->add(CliCliente::GEN_ATTR_ID, $cmb_filtro_cli_cliente_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_ajuste_debe_tipo_estado_id != 0) {
    $criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ID, $cmb_filtro_vta_ajuste_debe_tipo_estado_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_tipo_ajuste_debe_id != 0) {
    $criterio->add(VtaTipoAjusteDebe::GEN_ATTR_ID, $cmb_filtro_vta_tipo_ajuste_debe_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_sucursal_id != 0) {
    $criterio->add(VtaAjusteDebe::GEN_ATTR_GRAL_SUCURSAL_ID, $cmb_filtro_gral_sucursal_id, Criterio::IGUAL);
}

if ($cmb_filtro_vta_vendedor_id != 0) {
    $criterio->add(VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, $cmb_filtro_vta_vendedor_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_actividad_id != 0) {
    $criterio->add(GralActividad::GEN_ATTR_ID, $cmb_filtro_gral_actividad_id, Criterio::IGUAL);
}

if ($cmb_filtro_gral_escenario_id != 0) {
    $criterio->add(GralEscenario::GEN_ATTR_ID, $cmb_filtro_gral_escenario_id, Criterio::IGUAL);
}

$criterio->addTabla(VtaAjusteDebe::GEN_TABLA);
$criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, 'LEFT JOIN');
$criterio->addRealJoin(VtaTipoAjusteDebe::GEN_TABLA, VtaTipoAjusteDebe::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralActividad::GEN_TABLA, GralActividad::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_GRAL_ACTIVIDAD_ID, 'LEFT JOIN');
$criterio->addRealJoin(GralEscenario::GEN_TABLA, GralEscenario::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_GRAL_ESCENARIO_ID, 'LEFT JOIN');
$criterio->setCriterios();
$vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes(null, $criterio);
//Gral::prr($vta_ajuste_debes);
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
    $columna++ => array('ancho' => 16, 'titulo' => 'Codigo', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 13, 'titulo' => 'Fecha', 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array("ancho" => 17, "titulo" => "Vencimiento", 'formato' => DbExcel::FORMATO_FECHA),
    $columna++ => array("ancho" => 12, "titulo" => "Vencida", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 50, 'titulo' => 'Cliente', 'formato' => DbExcel::FORMATO_DESCRIPCION),
    $columna++ => array('ancho' => 16, 'titulo' => 'CUIT/DNI', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 13, "titulo" => "Pais", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 14, "titulo" => "Provincia", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 22, "titulo" => "Localidad", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 20, "titulo" => "Condicion IVA", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 11, 'titulo' => 'Estado', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 9, 'titulo' => 'Tipo', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 16, "titulo" => "Lista Precio", 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 13, 'titulo' => 'Subtotal', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 11, 'titulo' => 'IVA', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 13, 'titulo' => 'Tributos', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 11, 'titulo' => 'Total', 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 17, "titulo" => "NC Afectadas", 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 18, "titulo" => "RCB Afectados", 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 19, "titulo" => "Imp Real Venta", 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 16, "titulo" => "FAC Saldada", 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array("ancho" => 14, "titulo" => "FAC Saldo", 'formato' => DbExcel::FORMATO_IMPORTE),
    $columna++ => array('ancho' => 15, 'titulo' => 'Nro Ajuste', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 17, 'titulo' => 'CAE', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 18, 'titulo' => 'Actividad', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Escenario', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Preventista', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 17, 'titulo' => 'Forma Pago', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 17, 'titulo' => 'Medio Pago', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 12, 'titulo' => 'Cuota', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 28, 'titulo' => 'Vendedor', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array('ancho' => 15, 'titulo' => 'Comprador', 'formato' => DbExcel::FORMATO_NINGUNO),
    $columna++ => array("ancho" => 15, "titulo" => "Sucursal", 'formato' => DbExcel::FORMATO_NINGUNO),
);

$fila = DB_XLS_CONFIG_PRIMER_FILA;
foreach ($arr_cabeceras as $i => $arr_cabecera) {
    $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($i, $fila, $arr_cabecera['titulo'], $type = PHPExcel_Cell_DataType::TYPE_STRING);
}

// -----------------------------------------------------------------------------
// Datos
// -----------------------------------------------------------------------------
foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
    
    $cli_cliente = $vta_ajuste_debe->getCliCliente();
    $geo_localidad = $cli_cliente->getGeoLocalidad();
    $geo_provincia = $geo_localidad->getGeoProvincia();
    $geo_pais = $geo_provincia->getGeoPais();
    
    // -------------------------------------------------------------------------
    // se instancia la tabla de resumen
    // -------------------------------------------------------------------------
    $vta_ajuste_debe_importe = $vta_ajuste_debe->getResumenComprobante();
    
    // -------------------------------------------------------------------------
    // se consultan las NC vinculadas al AJUSTE DEBE
    // -------------------------------------------------------------------------
    $importe_afectado_nc = 0;
    $vta_ajuste_debe_vta_nota_creditos = $vta_ajuste_debe->getVtaAjusteDebeVtaNotaCreditos(null, null, true);
    foreach($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito){
        $importe_afectado_nc += $vta_ajuste_debe_vta_nota_credito->getImporteAfectado();
    }
    
    // -------------------------------------------------------------------------
    // se consultan las RBO vinculadas al AJUSTE DEBE
    // -------------------------------------------------------------------------
    $importe_afectado_rbo = 0;
    $vta_ajuste_debe_vta_ajuste_habers = $vta_ajuste_debe->getVtaAjusteDebeVtaAjusteHabers(null, null, true);
    foreach($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber){
        $importe_afectado_rbo += $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
    }
    
    $importe_total = $vta_ajuste_debe_importe->getImporteTotal();
    $importe_saldo_imputable = $vta_ajuste_debe->getSaldoImputable();
    
    $importe_venta_real = $importe_total - $importe_afectado_nc; // determina el valor de la venta, sin las anulaciones
    
    $vta_ajuste_debe_tipo_estado = $vta_ajuste_debe->getVtaAjusteDebeTipoEstado();
    $vencida = '-';
    if($vta_ajuste_debe_tipo_estado->getActivo()){
        if(Date::esRangoValido($vta_ajuste_debe->getFechaVencimiento(), date('Y-m-d'))){
            $vencida = 'SI';        
        }
    }
    
    $fila++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
    
    $valor = $vta_ajuste_debe->getCodigo();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($vta_ajuste_debe->getFechaEmision());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    $valor = DbExcel::getFechaToFormula($vta_ajuste_debe->getFechaVencimiento());
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_FORMULA);
    $columna++;
    
    DbExcel::setCelda($xls, $columna, $fila, $vencida, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getPersonaDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getPersonaDocumento();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $geo_pais->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $geo_provincia->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $geo_localidad->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getGralCondicionIva()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getVtaTipoAjusteDebe()->getCodigoMin();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getVtaPresupuesto()->getInsTipoListaPrecio()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe_importe->getImporteSubtotal();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_ajuste_debe_importe->getImporteIva();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_ajuste_debe_importe->getImporteTributo();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_ajuste_debe_importe->getImporteTotal();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $importe_afectado_nc;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $importe_afectado_rbo;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $importe_venta_real;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $importe_total - $importe_saldo_imputable;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    $valor = $importe_saldo_imputable;
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    $valor = $vta_ajuste_debe->getNumeroComprobanteCompleto();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getCae();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getGralActividad()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getGralEscenario()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getVtaPreventista()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getGralFpFormaPago()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getGralFpCuota()->getGralFpMedioPago()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getGralFpCuota()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getVtaVendedor()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getVtaComprador()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
    $valor = $vta_ajuste_debe->getGralSucursal()->getDescripcion();
    DbExcel::setCelda($xls, $columna, $fila, $valor, $type = PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    
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