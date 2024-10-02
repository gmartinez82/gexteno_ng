<?php

use PhpOffice\PhpSpreadsheet\Style\Alignment;       //orientacion
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;    //formato
use PhpOffice\PhpSpreadsheet\Style\Fill;            //formato
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;       //obtener indice de columna en letra
use PhpOffice\PhpSpreadsheet\Calculation;           //formulas (traduccion)
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;     //imagenes

class DbPhpSpreadsheet{
    
    // Constantes
    const FORMATO_NINGUNO = 'ninguno';
    const FORMATO_DESCRIPCION = 'descripcion';
    const FORMATO_FECHA = 'fecha';
    const FORMATO_HORA = 'hora';
    const FORMATO_IMPORTE = 'importe';
    
    static function getComprobacionTraduccionFormulas($locale, $validLocale){
        if (!$validLocale) {
            Gral::prr('No se puede establecer la configuración regional en '.$locale.' - volviendo al inglés.');
        } else {
            Gral::prr('Si se puede realizar la traduccion de formulas, Ejemplos:');

            Gral::prr('<br />De ingles a '.$locale);
            $ingles = '=IF(A1=B1,SUM(A10:B10),CONCATENATE(A10:B10)';
            $translatedFormula = Calculation\Calculation::getInstance()->_translateFormulaToLocale($ingles);
            Gral::prr('ingles : ' . $ingles);
            Gral::prr('convertido : ' . $translatedFormula);

            Gral::prr('<br />De '.$locale.' a ingles');
            $espanol = '=SI(A1=B1;SUMA(A10:B10);CONCATENAR(A10:B10)';
            $translatedFormula = Calculation\Calculation::getInstance()->_translateFormulaToEnglish($espanol);
            Gral::prr('español : ' . $espanol);
            Gral::prr('convertido : ' . $translatedFormula);
        }
    }
    
    static function getFechaToFormula($fecha){
        $arr_fecha = Date::getArrFecha($fecha);        
        $formula = '=FECHA('.$arr_fecha['anio'].';'.$arr_fecha['mes'].';'.$arr_fecha['dia'].')';
        $string_fecha = Calculation\Calculation::getInstance()->_translateFormulaToEnglish($formula);
        
        return $string_fecha;
    }
    
    static function getHoraToFormula($hora){
        $arr_hora = array();
        $arr_hora['hora'] = substr($hora, 11, 2);
        $arr_hora['minuto'] = substr($hora, 14, 2);
        $arr_hora['segundo'] = substr($hora, 17, 2);
        
        $formula = '=NSHORA('.$arr_hora['hora'].';'.$arr_hora['minuto'].';'.$arr_hora['segundo'].')';
        $string_hora = Calculation\Calculation::getInstance()->_translateFormulaToEnglish($formula);
        
        return $string_hora;
    }
    
    static function getEstiloMasivo($spreadsheet, $sheet, $borde_style, $primer_columna, $primer_fila, $ultima_columna, $ultima_fila, $alto_fila = 15){
        $primer_columna_letra = Coordinate::stringFromColumnIndex($primer_columna);
        $ultima_columna_letra = Coordinate::stringFromColumnIndex($ultima_columna);
        
        $rango = $primer_columna_letra.$primer_fila.':'.$ultima_columna_letra.$ultima_fila;
        $sheet ->getStyle($rango)->applyFromArray($borde_style);
        $spreadsheet->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getStyle($rango)->getAlignment()->setVertical(Alignment::HORIZONTAL_CENTER);
        $spreadsheet->getActiveSheet()->getDefaultRowDimension()->setRowHeight($alto_fila);
    }
    
    static function getEstiloPersonalizado($spreadsheet, $arr_cabeceras, $primer_columna, $primer_fila, $ultima_columna, $ultima_fila, $colorFondo, $colorLetra){
        $primer_columna_letra = Coordinate::stringFromColumnIndex($primer_columna);
        $ultima_columna_letra = Coordinate::stringFromColumnIndex($ultima_columna);

        $rango = $primer_columna_letra.$primer_fila.':'.$ultima_columna_letra.$primer_fila;
        $spreadsheet->getActiveSheet()->getStyle($rango)->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle($rango)->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB($colorFondo);
        $spreadsheet->getActiveSheet()->getStyle($rango)->getFont()->getColor()->setRGB($colorLetra);
        
        foreach ($arr_cabeceras as $columna => $arr_cabecera) {
            $columna_letra = Coordinate::stringFromColumnIndex($columna);
            $spreadsheet->getActiveSheet()->getColumnDimension($columna_letra)->setWidth($arr_cabecera['ancho']);
            
            $rango = $columna_letra.($primer_fila+1).':'.$columna_letra.$ultima_fila;
            
            if ($arr_cabecera['formato'] == DbPhpSpreadsheet::FORMATO_DESCRIPCION) {
                $spreadsheet->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
            }
            if ($arr_cabecera['formato'] == DbPhpSpreadsheet::FORMATO_FECHA) {
                $spreadsheet->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_DATE_DDMMYYYY);
            }
            if ($arr_cabecera['formato'] == DbPhpSpreadsheet::FORMATO_HORA) {
                $spreadsheet->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_DATE_TIME3);
            }
            if ($arr_cabecera['formato'] == DbPhpSpreadsheet::FORMATO_IMPORTE) {
                $spreadsheet->getActiveSheet()->getStyle($rango)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_RIGHT);
                $spreadsheet->getActiveSheet()->getStyle($rango)->getNumberFormat()->setFormatCode("$ #,##0.00");
            }
        }
    }
    
    static function setCombinarCeldas($spreadsheet, $titulo, $primer_columna, $primer_fila, $ultima_columna, $ultima_fila) {
        $spreadsheet->getActiveSheet()->mergeCells($primer_columna.$primer_fila.':'.$ultima_columna.$ultima_fila)->setCellValue($primer_columna.$primer_fila, $titulo);
    }
    
    static function getImagenEmpresa($spreadsheet, $sheet, $borde_style, $fila, $ultima_columna, $primer_columna) {
        
        // combinar
        $titulo = '                                                                                                         Desarrollado por';
        $primer_fila = $fila+2;
        $ultima_fila = $primer_fila+1;
        $ultima_columna = Coordinate::stringFromColumnIndex($ultima_columna);
        $primer_columna = Coordinate::stringFromColumnIndex($primer_columna);
        DbPhpSpreadsheet::setCombinarCeldas($spreadsheet, $titulo, $primer_columna, $primer_fila, $ultima_columna, $ultima_fila);

        $spreadsheet->getActiveSheet()->getStyle($primer_columna . $primer_fila)->getFont()->setBold(true);
        $spreadsheet->getActiveSheet()->getStyle($primer_columna . $primer_fila)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
        $spreadsheet->getActiveSheet()->getStyle($primer_columna . $primer_fila)->getAlignment()->setVertical(Alignment::HORIZONTAL_CENTER);
        $sheet ->getStyle($primer_columna.$primer_fila.':'.$ultima_columna.$ultima_fila)->applyFromArray($borde_style);

        // Imagen
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath('aLogo.png');
        $drawing->setHeight(45);
        $drawing->setCoordinates('D'.$primer_fila);
        $drawing->setOffsetX(155);
        $drawing->setOffsetY(-2);
        $drawing->setRotation(0);
        $drawing->getShadow()->setVisible(true);
        $drawing->getShadow()->setDirection(45);

        $drawing->setWorksheet($spreadsheet->getActiveSheet());
    }
    
    static function setCelda($sheet, $columna, $fila, $valor, $type){
        $sheet->setCellValueByColumnAndRow($columna, $fila, $valor, $type);
    }
}