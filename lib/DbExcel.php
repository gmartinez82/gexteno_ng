<?php

class DbExcel {

    // Constantes
    const FORMATO_NINGUNO = 'ninguno';
    const FORMATO_DESCRIPCION = 'descripcion';
    const FORMATO_FECHA = 'fecha';
    const FORMATO_HORA = 'hora';
    const FORMATO_IMPORTE = 'importe';
    const FORMATO_PORCENTAJE = 'porcentaje';
    const FORMATO_NUMERO = 'numero';

    static function setCelda($xls, $columna, $fila, $valor, $type) {
        $xls->getActiveSheet()->setCellValueExplicitByColumnAndRow($columna, $fila, $valor, $type);
    }
    
    static function getFechaToFormula($fecha) {
        $arr_fecha = Date::getArrFecha($fecha);
        $string_fecha = '=DATE(' . $arr_fecha['anio'] . ',' . $arr_fecha['mes'] . ',' . $arr_fecha['dia'] . ')';

        return $string_fecha;
    }
    
    static function getHoraToFormula($hora){
        $arr_hora = array();
        $arr_hora['hora'] = substr($hora, 11, 2);
        $arr_hora['minuto'] = substr($hora, 14, 2);
        $arr_hora['segundo'] = substr($hora, 17, 2);
        $string_hora = '=TIME(' . $arr_hora['hora']. ',' . $arr_hora['minuto'] . ',' . $arr_hora['segundo'] . ')';
        
        return $string_hora;
    }
    
    static function getEstiloMasivo($xls, $borde_style, $primer_columna, $primer_fila, $ultima_columna, $ultima_fila, $alto_fila = 15) {
        $primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna);
        $ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($ultima_columna);

        $rango = $primer_columna_letra . $primer_fila . ':' . $ultima_columna_letra . $ultima_fila;
        $xls->getActiveSheet()->getStyle($rango)->applyFromArray($borde_style);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $xls->getActiveSheet()->getDefaultRowDimension()->setRowHeight($alto_fila);
    }

    static function getEstiloPersonalizado($xls, $arr_cabeceras, $primer_columna, $primer_fila, $ultima_columna, $ultima_fila, $colorFondo, $colorLetra) {
        $primer_columna_letra = PHPExcel_Cell::stringFromColumnIndex($primer_columna);
        $ultima_columna_letra = PHPExcel_Cell::stringFromColumnIndex($ultima_columna);

        $rango = $primer_columna_letra . $primer_fila . ':' . $ultima_columna_letra . $primer_fila;
        $xls->getActiveSheet()->getStyle($rango)->getFont()->setBold(true);
        $xls->getActiveSheet()->getStyle($rango)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB($colorFondo);
        $xls->getActiveSheet()->getStyle($rango)->getFont()->getColor()->setRGB($colorLetra);

        foreach ($arr_cabeceras as $columna => $arr_cabecera) {
            $columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
            $xls->getActiveSheet()->getColumnDimension($columna_letra)->setWidth($arr_cabecera['ancho']);

            $rango = $columna_letra . ($primer_fila + 1) . ':' . $columna_letra . $ultima_fila;

            if ($arr_cabecera['formato'] == DbExcel::FORMATO_DESCRIPCION) {
                $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            }
            if ($arr_cabecera['formato'] == DbExcel::FORMATO_FECHA) {
                $xls->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode('dd/mm/yyyy');
            }
            if ($arr_cabecera['formato'] == DbExcel::FORMATO_HORA) {
                $xls->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_TIME3);
            }
            if ($arr_cabecera['formato'] == DbExcel::FORMATO_IMPORTE) {
                $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                $xls->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode("$ #,##0.00");
            }
            if ($arr_cabecera['formato'] == DbExcel::FORMATO_PORCENTAJE) {
                $xls->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
            }
            if ($arr_cabecera['formato'] == DbExcel::FORMATO_NUMERO) {
                $xls->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }
        }
    }
    
    static function estiloRango($xls = null, $borde_style = null, $rango = '', $colorFondo = '', $colorLetra = '') {
        $xls->getActiveSheet()->getStyle($rango)->applyFromArray($borde_style);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $xls->getActiveSheet()->getDefaultRowDimension()->setRowHeight(DB_XLS_CONFIG_ALTO_FILA);
        $xls->getActiveSheet()->getStyle($rango)->getFont()->setBold(true);
        $xls->getActiveSheet()->getStyle($rango)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB($colorFondo);
        $xls->getActiveSheet()->getStyle($rango)->getFont()->getColor()->setRGB($colorLetra);
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 12/1/2023 13:00
     */
    static function getEstiloRangoPersonalizado($xls = null, $borde_style = null, $rango = '', $colorFondo = '', $colorLetra = '', $negrita = false) {
        if ($borde_style <> null) {
            $xls->getActiveSheet()->getStyle($rango)->applyFromArray($borde_style);
        }
        if ($colorFondo <> '') {
            $xls->getActiveSheet()->getStyle($rango)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB($colorFondo);
        }
        if ($colorLetra <> '') {
            $xls->getActiveSheet()->getStyle($rango)->getFont()->getColor()->setRGB($colorLetra);
        }
        if ($negrita) {
            $xls->getActiveSheet()->getStyle($rango)->getFont()->setBold(true);
        }
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 18/01/2023 18:30
     */
    static function getInsertarComentario($xls = null, $columna, $fila, $texto) {
        $columna_letra = PHPExcel_Cell::stringFromColumnIndex($columna);
        $rango = $columna_letra . $fila;
        $xls->getActiveSheet()->getComment($rango)->getText()->createTextRun($texto);
    }
    
    /* ------------------------------------- 
     * los metodos siguiente se utilizan para el repo ventas sucursales resumen
     * en el futuro podrian redefinirse o eliminarse de esta clase
     * ----------------------------------------------------------------------- */
    static function estiloCabecera($xls = null, $borde_style = null, $rango = '', $columna = '', $fila = '', $titulo = '', $colorFondo = '', $colorLetra = '', $ancho_columna = 10.71, $alto_fila = 15) {
        $xls->getActiveSheet()->getStyle($rango)->applyFromArray($borde_style); // bordes
        $xls->getActiveSheet()->getStyle($rango)->getFont()->setBold(true);
        $xls->getActiveSheet()->getColumnDimension($columna)->setWidth($ancho_columna);
        $xls->getActiveSheet()->getStyle($rango)->getFont()->getColor()->setARGB($colorLetra);
        $xls->getActiveSheet()->getStyle($rango)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $xls->getActiveSheet()->getStyle($rango)->getFill()->getStartColor()->setARGB($colorFondo);
        $xls->getActiveSheet()->setCellValue($rango, $titulo);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight($alto_fila);
    }

    static function estiloCelda($xls = null, $borde_style = null, $rango = '', $fila = '', $colorFondo = '', $alto_fila = 15) {
        $xls->getActiveSheet()->getStyle($rango)->applyFromArray($borde_style); // bordes
        $xls->getActiveSheet()->getStyle($rango)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $xls->getActiveSheet()->getStyle($rango)->getFill()->getStartColor()->setARGB($colorFondo);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $xls->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight($alto_fila);
    }

    static function estiloCeldaCombinada($xls = null, $borde_style = null, $primer_celda = '', $rango_combinacion = '', $columna = '', $fila = '', $titulo = '', $colorFondo = '', $colorLetra = '', $ancho_columna = 10.71, $alto_fila = 15) {
        $xls->setActiveSheetIndex(0)->mergeCells($rango_combinacion);
        $xls->getActiveSheet()->getCell($primer_celda)->setValueExplicit($titulo, PHPExcel_Cell_DataType::TYPE_STRING);
        $xls->getActiveSheet()->getStyle($primer_celda)->applyFromArray($borde_style); // bordes
        $xls->getActiveSheet()->getStyle($primer_celda)->getFont()->setBold(true);
        $xls->getActiveSheet()->getColumnDimension($columna)->setWidth($ancho_columna);
        $xls->getActiveSheet()->getStyle($primer_celda)->getFont()->getColor()->setARGB($colorLetra);
        $xls->getActiveSheet()->getStyle($primer_celda)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $xls->getActiveSheet()->getStyle($primer_celda)->getFill()->getStartColor()->setARGB($colorFondo);
        $xls->getActiveSheet()->getStyle($primer_celda)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $xls->getActiveSheet()->getStyle($primer_celda)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $xls->getActiveSheet()->getRowDimension($fila)->setRowHeight($alto_fila);
    }    

}
