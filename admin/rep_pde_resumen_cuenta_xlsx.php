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
$pde_comprobantes = PdeComprobante::getPdeComprobantes($gral_empresa_id, $txt_filtro_desde, $txt_filtro_hasta, $gral_mes_id = false, $anio = false, $prv_proveedor_id = $cmb_filtro_prv_proveedor_id, $incluir_recibos = true, $orden = 'ASC');
//Gral::prr($pde_comprobantes);
//exit;

foreach ($pde_comprobantes as $pde_comprobante) {

    $prv_proveedor = $pde_comprobante->getPrvProveedor();
    if ($prv_proveedor->getId() != 'null') {

        $importe_total_debe = $pde_comprobante->getImporteTotalComprobanteDebe();
        $importe_total_haber = $pde_comprobante->getImporteTotalComprobanteHaber();

        $importe_total_saldo = $importe_total_debe - $importe_total_haber;

        $arr_prv_proveedors[$prv_proveedor->getId()]['PROVEEDOR_ID'] = $prv_proveedor->getId();
        $arr_prv_proveedors[$prv_proveedor->getId()]['PROVEEDOR'] = $prv_proveedor->getDescripcion();
        $arr_prv_proveedors[$prv_proveedor->getId()]['IMPORTE_DEBE'] += $importe_total_debe;
        $arr_prv_proveedors[$prv_proveedor->getId()]['IMPORTE_HABER'] += $importe_total_haber;
        $arr_prv_proveedors[$prv_proveedor->getId()]['IMPORTE_SALDO'] += $importe_total_saldo;

        // ---------------------------------------------------------------------
        // se cargan arrays de cantidad, fecha y dias de comprobantes activos
        // ---------------------------------------------------------------------        
        switch (get_class($pde_comprobante)) {
            case "PdeFactura":
            case "PdeNotaDebito":
                
                $pde_comprobante_tipo_estado = $pde_comprobante->getPdeComprobanteTipoEstado();
                // se consideran solamente los comprobantes en estado activo
                if ($pde_comprobante_tipo_estado->getActivo()) {
                    $arr_contador_fac_nd[$prv_proveedor->getId()] ++;
                    $arr_contador_fac_nd_detalles[$prv_proveedor->getId()][] = $pde_comprobante->getNumeroComprobanteCompleto() . ' - ' . Gral::getFechaToWeb($pde_comprobante->getFechaEmision()) . ' (' . $pde_comprobante_tipo_estado->getDescripcion() . ')'.PHP_EOL;
                    
                    if (array_key_exists($prv_proveedor->getId(), $arr_mas_antigua_fac_nd)) {
                        if (!Date::esRangoValido($arr_mas_antigua_fac_nd[$prv_proveedor->getId()], $pde_comprobante->getFechaEmision())) {
                            $arr_mas_antigua_fac_nd[$prv_proveedor->getId()] = $pde_comprobante->getFechaEmision();
                        }
                    } else {
                        $arr_mas_antigua_fac_nd[$prv_proveedor->getId()] = $pde_comprobante->getFechaEmision();
                    }

                    $arr_dias_fac_nd[$prv_proveedor->getId()] = Date::getDiferenciaTiempo('d', $arr_mas_antigua_fac_nd[$prv_proveedor->getId()], date('Y-m-d'));
                }

                break;
            case "PdeRecibo":
            case "PdeNotaCredito":
                
                $pde_comprobante_tipo_estado = $pde_comprobante->getPdeComprobanteTipoEstado();
                // se consideran solamente los comprobantes en estado activo
                if ($pde_comprobante_tipo_estado->getActivo()) {
                    $arr_contador_rbo_nc[$prv_proveedor->getId()] ++;
                    $arr_contador_rbo_nc_detalles[$prv_proveedor->getId()][] = $pde_comprobante->getNumeroComprobanteCompleto() . ' - ' . Gral::getFechaToWeb($pde_comprobante->getFechaEmision()) . ' (' . $pde_comprobante_tipo_estado->getDescripcion() . ')'.PHP_EOL;
                    
                    if (array_key_exists($prv_proveedor->getId(), $arr_mas_antigua_rbo_nc)) {
                        if (!Date::esRangoValido($arr_mas_antigua_rbo_nc[$prv_proveedor->getId()], $pde_comprobante->getFechaEmision())) {
                            $arr_mas_antigua_rbo_nc[$prv_proveedor->getId()] = $pde_comprobante->getFechaEmision();
                        }
                    } else {
                        $arr_mas_antigua_rbo_nc[$prv_proveedor->getId()] = $pde_comprobante->getFechaEmision();
                    }

                    $arr_dias_rbo_nc[$prv_proveedor->getId()] = Date::getDiferenciaTiempo('d', $arr_mas_antigua_rbo_nc[$prv_proveedor->getId()], date('Y-m-d'));
                }

                break;
        }
    }
}

// -----------------------------------------------------------------------------
// se excluyen los que tienen saldo cero, si asi fuese elegido
// -----------------------------------------------------------------------------
if ($cmb_filtro_excluir_saldo_cero) {
    foreach ($arr_prv_proveedors as $i => $arr_prv_proveedor) {
        $importe_saldo = $arr_prv_proveedor['IMPORTE_SALDO'];
        $importe_saldo = round($importe_saldo, 2);
        
        if ($importe_saldo <= $txt_saldo_margen) {
            unset($arr_prv_proveedors[$i]);
        }
    }
}

// -----------------------------------------------------------------------------
// se ordena el array alfabeticamente por nombre
// -----------------------------------------------------------------------------
usort($arr_prv_proveedors, "cmp");
function cmp($a, $b){
    return strcmp($a["PROVEEDOR"], $b["PROVEEDOR"]);
}

//Gral::prr($arr_prv_proveedors);
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
    $columna++ => array("ancho" => 35, "titulo" => "Proveedor", "indice" => "Proveedor"),
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

foreach ($arr_prv_proveedors as $i => $arr_prv_proveedor) {

    $prv_proveedor_id = $arr_prv_proveedor['PROVEEDOR_ID'];
    
    $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
    $gral_condicion_iva = $prv_proveedor->getGralCondicionIva();

    $importe_debe = $arr_prv_proveedor['IMPORTE_DEBE'];
    $importe_haber = $arr_prv_proveedor['IMPORTE_HABER'];
    $importe_saldo = $arr_prv_proveedor['IMPORTE_SALDO'];

    $importe_debe = round($importe_debe, 2);
    $importe_haber = round($importe_haber, 2);
    $importe_saldo = round($importe_saldo, 2);
    
    // -------------------------------------------------------------------------
    // se cargan los detalles de las FAC/ND
    // -------------------------------------------------------------------------
    $fac_nd_detalles = '';
    foreach($arr_contador_fac_nd_detalles[$prv_proveedor->getId()] as $arr_contador_fac_nd_detalle){
        $fac_nd_detalles.= $arr_contador_fac_nd_detalle;
    }
    
    // -------------------------------------------------------------------------
    // se cargan los detalles de las RBO/NC
    // -------------------------------------------------------------------------
    $rbo_nc_detalles = '';
    foreach($arr_contador_rbo_nc_detalles[$prv_proveedor->getId()] as $arr_contador_rbo_nc_detalle){
        $rbo_nc_detalles.= $arr_contador_rbo_nc_detalle;
    }
    
    $linea++;
    $columna = DB_XLS_CONFIG_PRIMER_COLUMNA;
   
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->applyFromArray($borde_style); // bordes
    $xls->getActiveSheet()->getStyle('E' . $linea . ':E' . $linea . '')->applyFromArray($resumen_cuenta_total); // negrita en total
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $xls->getActiveSheet()->getStyle($columna . $linea . ':' . $columna_ultima . $linea . '')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    //$xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(22);
    $xls->getActiveSheet()->getRowDimension($linea)->setRowHeight(-1);

    if ($importe_saldo > 0) {
        $xls->getActiveSheet()->getStyle('E' . $linea . ':E' . $linea . '')->applyFromArray($resumen_cuenta_total_saldo_acreedor); // saldo acreedor        
    } elseif ($importe_saldo < 0) {
        $xls->getActiveSheet()->getStyle('E' . $linea . ':E' . $linea . '')->applyFromArray($resumen_cuenta_total_saldo_deudor); // saldo deudor
    }
    
    // -------------------------------------------------------------------------
    // demas columnas
    // -------------------------------------------------------------------------
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_proveedor->getCuit(), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($prv_proveedor->getDescripcion(), PHPExcel_Cell_DataType::TYPE_STRING);
    $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
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
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_contador_fac_nd[$prv_proveedor->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    if($cmb_filtro_incluir_detalles){
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($fac_nd_detalles, PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setWrapText(true);
        $columna++;
    }else{
        $columna++;        
    }
    
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($arr_mas_antigua_fac_nd[$prv_proveedor->getId()]), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_dias_fac_nd[$prv_proveedor->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_contador_rbo_nc[$prv_proveedor->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
    $columna++;

    if($cmb_filtro_incluir_detalles){
        $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($rbo_nc_detalles, PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        $xls->getActiveSheet()->getStyle($columna . $linea)->getAlignment()->setWrapText(true);
        $columna++;
    }else{
        $columna++;        
    }
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit(Gral::getFechaToWeb($arr_mas_antigua_rbo_nc[$prv_proveedor->getId()]), PHPExcel_Cell_DataType::TYPE_STRING);
    $columna++;
    $xls->getActiveSheet()->getCell($columna . $linea)->setValueExplicit($arr_dias_rbo_nc[$prv_proveedor->getId()], PHPExcel_Cell_DataType::TYPE_NUMERIC);
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