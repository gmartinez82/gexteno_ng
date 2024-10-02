<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once 'control/seguridad.php';
include_once '_autoload.php';

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_XLS_CONFIG_PRIMER_COLUMNA', 'A');
define('DB_XLS_CONFIG_PRIMER_FILA', '1');
// ----------------------------------------------------------------------------

$gral_empresa_id = 1;

$vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa_id, $txt_filtro_desde, $txt_filtro_hasta, $gral_mes_id = false, $anio = false, $cli_cliente_id = $cmb_filtro_cli_cliente_id, $incluir_recibos = true, $orden = 'ASC', $cmb_filtro_vta_vendedor_id, $cmb_filtro_incluir_ajustes, $cmb_filtro_cli_categoria_id);
//Gral::prr($vta_comprobantes);
//exit;

foreach ($vta_comprobantes as $vta_comprobante) {

    $cli_cliente = $vta_comprobante->getCliCliente();
    if ($cli_cliente->getId() != 'null') {
        
        if($cli_cliente->getId() == 890){
            //Gral::pr($vta_comprobante->getNumeroComprobanteCompleto());
        }

        $importe_total_debe = $vta_comprobante->getImporteTotalComprobanteDebe();
        $importe_total_haber = $vta_comprobante->getImporteTotalComprobanteHaber();

        $importe_total_saldo = $importe_total_debe - $importe_total_haber;

        $arr_cli_clientes[$cli_cliente->getId()]['CLIENTE_ID'] = $cli_cliente->getId();
        $arr_cli_clientes[$cli_cliente->getId()]['CLIENTE'] = $cli_cliente->getDescripcion();
        $arr_cli_clientes[$cli_cliente->getId()]['IMPORTE_DEBE'] += $importe_total_debe;
        $arr_cli_clientes[$cli_cliente->getId()]['IMPORTE_HABER'] += $importe_total_haber;
        $arr_cli_clientes[$cli_cliente->getId()]['IMPORTE_SALDO'] += $importe_total_saldo;

        // ---------------------------------------------------------------------
        // se cargan arrays de cantidad, fecha y dias de comprobantes activos
        // ---------------------------------------------------------------------        
        switch (get_class($vta_comprobante)) {
            case "VtaFactura":
            case "VtaNotaDebito":
            case "VtaAjusteDebe":

                $vta_comprobante_tipo_estado = $vta_comprobante->getVtaComprobanteTipoEstado();
                // se consideran solamente los comprobantes en estado activo
                if ($vta_comprobante_tipo_estado->getActivo()) {
                    $arr_contador_fac_nd[$cli_cliente->getId()] ++;
                    $arr_contador_fac_nd_detalles[$cli_cliente->getId()][] = $vta_comprobante->getNumeroComprobanteCompleto() . ' - ' . Gral::getFechaToWeb($vta_comprobante->getFechaEmision()) . ' (' . $vta_comprobante_tipo_estado->getDescripcion() . ')'.PHP_EOL;

                    if (array_key_exists($cli_cliente->getId(), $arr_mas_antigua_fac_nd)) {
                        if (!Date::esRangoValido($arr_mas_antigua_fac_nd[$cli_cliente->getId()], $vta_comprobante->getFechaEmision())) {
                            $arr_mas_antigua_fac_nd[$cli_cliente->getId()] = $vta_comprobante->getFechaEmision();
                        }
                    } else {
                        $arr_mas_antigua_fac_nd[$cli_cliente->getId()] = $vta_comprobante->getFechaEmision();
                    }

                    $arr_dias_fac_nd[$cli_cliente->getId()] = Date::getDiferenciaTiempo('d', $arr_mas_antigua_fac_nd[$cli_cliente->getId()], date('Y-m-d'));
                }

                break;
            case "VtaRecibo":
            case "VtaNotaCredito":
            case "VtaAjusteHaber":

                $vta_comprobante_tipo_estado = $vta_comprobante->getVtaComprobanteTipoEstado();
                // se consideran solamente los comprobantes en estado activo
                if ($vta_comprobante_tipo_estado->getActivo()) {
                    $arr_contador_rbo_nc[$cli_cliente->getId()] ++;
                    $arr_contador_rbo_nc_detalles[$cli_cliente->getId()][] = $vta_comprobante->getNumeroComprobanteCompleto() . ' - ' . Gral::getFechaToWeb($vta_comprobante->getFechaEmision()) . ' (' . $vta_comprobante_tipo_estado->getDescripcion() . ')'.PHP_EOL;

                    if (array_key_exists($cli_cliente->getId(), $arr_mas_antigua_rbo_nc)) {
                        if (!Date::esRangoValido($arr_mas_antigua_rbo_nc[$cli_cliente->getId()], $vta_comprobante->getFechaEmision())) {
                            $arr_mas_antigua_rbo_nc[$cli_cliente->getId()] = $vta_comprobante->getFechaEmision();
                        }
                    } else {
                        $arr_mas_antigua_rbo_nc[$cli_cliente->getId()] = $vta_comprobante->getFechaEmision();
                    }

                    $arr_dias_rbo_nc[$cli_cliente->getId()] = Date::getDiferenciaTiempo('d', $arr_mas_antigua_rbo_nc[$cli_cliente->getId()], date('Y-m-d'));
                }

                break;
        }
    }
}

// -----------------------------------------------------------------------------
// se agrega el saldo inicial en fecha al array de clientes
// -----------------------------------------------------------------------------
foreach ($arr_cli_clientes as $i => $arr_cli_cliente) {
    $cli_cliente_id = $arr_cli_cliente['CLIENTE_ID'];
    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
    
    $importe_saldo_inicial = $cli_cliente->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, Date::sumarDias($txt_filtro_desde, -1));
    
    $arr_cli_cliente['IMPORTE_SALDO_INICIAL'] = $importe_saldo_inicial;
    $arr_cli_cliente['IMPORTE_SALDO'] = $importe_saldo_inicial + $arr_cli_cliente['IMPORTE_SALDO'];
    $arr_cli_clientes[$i] = $arr_cli_cliente;
}

//Gral::prr($arr_cli_clientes);
//exit;

// -----------------------------------------------------------------------------
// se excluyen los que tienen saldo cero, si asi fuese elegido
// -----------------------------------------------------------------------------
if ($cmb_filtro_excluir_saldo_cero) {
    foreach ($arr_cli_clientes as $i => $arr_cli_cliente) {
        $importe_saldo = $arr_cli_cliente['IMPORTE_SALDO'];
        $importe_saldo = round($importe_saldo, 2);

        if ($importe_saldo <= $txt_saldo_margen) {
            unset($arr_cli_clientes[$i]);
        }
    }
}

// -----------------------------------------------------------------------------
// se ordena el array alfabeticamente por nombre
// -----------------------------------------------------------------------------
usort($arr_cli_clientes, "cmp");
function cmp($a, $b) {
    return strcmp($a["CLIENTE"], $b["CLIENTE"]);
}

//Gral::prr($arr_cli_clientes);
//Gral::prr($arr_contador_fac_nd_detalles);
//Gral::prr($arr_contador_rbo_nc_detalles);
//exit;


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
    $columna++ => array("ancho" => 16, "titulo" => "CUIT", "indice" => "CUIT"),
    $columna++ => array("ancho" => 50, "titulo" => "Cliente", "indice" => "Cliente"),
    $columna++ => array("ancho" => 35, "titulo" => "Telefono", "indice" => "Cliente"),
    $columna++ => array("ancho" => 17, "titulo" => "Saldo Inicial", "indice" => "importe_debe"),
    $columna++ => array("ancho" => 18, "titulo" => "Importe Debe", "indice" => "importe_debe"),
    $columna++ => array("ancho" => 18, "titulo" => "Importe Haber", "indice" => "importe_haber"),
    $columna++ => array("ancho" => 18, "titulo" => "Importe Saldo", "indice" => "importe_saldo"),
    $columna++ => array("ancho" => 19, "titulo" => "FAC/ND Activas", "indice" => "cantidad_fac_nd"),
    $columna++ => array("ancho" => 45, "titulo" => "FAC/ND Detalle", "indice" => "vendedor"),
    $columna++ => array("ancho" => 24, "titulo" => "FAC/ND Mas Antigua", "indice" => "antigua_fac_nd"),
    $columna++ => array("ancho" => 17, "titulo" => "FAC/ND Dias", "indice" => "dias_fac_nd"),
    $columna++ => array("ancho" => 19, "titulo" => "RBO/NC Activas", "indice" => "cantidad_rbo_nc"),
    $columna++ => array("ancho" => 45, "titulo" => "RBO/NC Detalle", "indice" => "vendedor"),
    $columna++ => array("ancho" => 24, "titulo" => "RBO/NC Mas Antigua", "indice" => "antigua_rbo_nc"),
    $columna++ => array("ancho" => 17, "titulo" => "RBO/NC Dias", "indice" => "dias_rbo_nc"),
    $columna++ => array("ancho" => 50, "titulo" => "Vendedor", "indice" => "vendedor"),
    $columna++ => array("ancho" => 35, "titulo" => "Localidad", "indice" => "localidad"),
    $columna++ => array("ancho" => 25, "titulo" => "Provincia", "indice" => "provincia"),
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

foreach ($arr_cli_clientes as $i => $arr_cli_cliente) {

    $cli_cliente_id = $arr_cli_cliente['CLIENTE_ID'];

    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
    $vta_vendedors = $cli_cliente->getVtaVendedorsXCliClienteVtaVendedor();
    $gral_condicion_iva = $cli_cliente->getGralCondicionIva();
    $geo_localidad = $cli_cliente->getGeoLocalidad();
    $geo_provincia = $geo_localidad->getGeoProvincia();

    $importe_debe = $arr_cli_cliente['IMPORTE_DEBE'];
    $importe_haber = $arr_cli_cliente['IMPORTE_HABER'];
    $importe_saldo = $arr_cli_cliente['IMPORTE_SALDO'];
    $importe_saldo_inicial = $arr_cli_cliente['IMPORTE_SALDO_INICIAL'];

    $importe_debe = round($importe_debe, 2);
    $importe_haber = round($importe_haber, 2);
    $importe_saldo = round($importe_saldo, 2);
    $importe_saldo_inicial = round($importe_saldo_inicial, 2);

    // -------------------------------------------------------------------------
    // se cargan los telefonos del cliente
    // -------------------------------------------------------------------------
    $cli_cliente_telefonos = $cli_cliente->getTelefono().',';
    foreach($cli_cliente->getCliTelefonos() as $cli_telefono){
        $cli_cliente_telefonos.= $cli_telefono->getDescripcion.',';
    }
    $cli_cliente_telefonos = substr($cli_cliente_telefonos, 0, -1);

    // -------------------------------------------------------------------------
    // se cargan los vendedores del cliente
    // -------------------------------------------------------------------------
    $vta_vendedors_descripcion = '';
    foreach($vta_vendedors as $vta_vendedor){
        $vta_vendedors_descripcion.= $vta_vendedor->getDescripcion().'; ';
    }
    $vta_vendedors_descripcion = substr($vta_vendedors_descripcion, 0, -1);    

    if ($cmb_filtro_excluir_saldo_cero) {
        $importe_saldo = round($importe_saldo, 2);

        if ($importe_saldo <= $txt_saldo_margen) {
            continue;
        }
    }

    // -------------------------------------------------------------------------
    // se cargan los detalles de las FAC/ND
    // -------------------------------------------------------------------------
    $fac_nd_detalles = '';
    foreach($arr_contador_fac_nd_detalles[$cli_cliente->getId()] as $arr_contador_fac_nd_detalle){
        $fac_nd_detalles.= $arr_contador_fac_nd_detalle;
    }
    
    // -------------------------------------------------------------------------
    // se cargan los detalles de las RBO/NC
    // -------------------------------------------------------------------------
    $rbo_nc_detalles = '';
    foreach($arr_contador_rbo_nc_detalles[$cli_cliente->getId()] as $arr_contador_rbo_nc_detalle){
        $rbo_nc_detalles.= $arr_contador_rbo_nc_detalle;
    }
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle('G' . $linea . ':G' . $linea . '')->applyFromArray($resumen_cuenta_total); // negrita en total
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    //$xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(-1);

    if ($importe_saldo > 0) {
        $xls->getActiveSheet()->getStyle('G' . $linea . ':G' . $linea . '')->applyFromArray($resumen_cuenta_total_saldo_deudor); // saldo deudor
    } elseif ($importe_saldo < 0) {
        $xls->getActiveSheet()->getStyle('G' . $linea . ':G' . $linea . '')->applyFromArray($resumen_cuenta_total_saldo_acreedor); // saldo acreedor        
    }

    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getCuit(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($cli_cliente_telefonos, PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_saldo_inicial, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_debe, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_haber, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($importe_saldo, PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getNumberFormat()->setFormatCode("$ #,##0.00");
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_contador_fac_nd[$cli_cliente->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    if($cmb_filtro_incluir_detalles){
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fac_nd_detalles, PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setWrapText(true);
        $columna++;
    }else{
        $columna++;        
    }
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($arr_mas_antigua_fac_nd[$cli_cliente->getId()]), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_dias_fac_nd[$cli_cliente->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_contador_rbo_nc[$cli_cliente->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    
    if($cmb_filtro_incluir_detalles){
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($rbo_nc_detalles, PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setWrapText(true);
        $columna++;
    }else{
        $columna++;        
    }
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($arr_mas_antigua_rbo_nc[$cli_cliente->getId()]), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_dias_rbo_nc[$cli_cliente->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($vta_vendedors_descripcion, PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($geo_localidad->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($geo_provincia->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
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