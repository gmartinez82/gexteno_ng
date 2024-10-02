<?php
include "_autoload.php";

$arr = array();

require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');
include 'prv_insumo_variables_cabecera.php';

$prv_importacion_id = Gral::getVars(2, 'importacion_id', 0);

if ($prv_importacion_id > 0) {

    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);

    if ($prv_importacion) {

        $nombre_archivo = $prv_importacion->getId() . ".xlsx";
        $path_destino = Gral::getPathAbs() . 'excel/tab_3/' . $nombre_archivo;

        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objReader->setReadDataOnly(false);

        if (file_exists($path_destino)) {
            $objPHPExcel = $objReader->load($path_destino);
            $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
            $highestRow = $objWorksheet->getHighestRow();
            
            for ($row = 2; $row <= $highestRow; ++$row) {
                include 'set_excel_variables.php';
                
                if ($col_nuevo_val > 0) { // si esta tildado nuevo

                    if(trim($col_descripcion_val) == ''){
                        $arr['error'] = true;
        
                        $arr['error_arr'][] = array(
                            'mensaje' => Lang::_lang('Conflicto en linea', true).' '.($row - 1).': '.Lang::_lang('Debe ingresar un nombre para el insumo', true).' "'.$col_codigo_proveedor_val.' '.$col_descripcion_val.'"',    
                        );                        
                    }else{
                        $ins_insumo_descripcion_duplicados = InsInsumo::controlDescripcionInsInsumoDuplicado($col_descripcion_val);

                        $control_descripcion_matriz = ($col_descripcion_matriz_val != '') ? $col_descripcion_matriz_val : $col_descripcion_val;
                        $ins_matriz_descripcion_duplicadas = InsInsumo::controlDescripcionInsMatrizDuplicada($control_descripcion_matriz);

                        if (count($ins_insumo_descripcion_duplicados) > 0) {
                            $arr['error'] = true;

                            $arr['error_arr'][] = array(
                                'mensaje' => Lang::_lang('Conflicto en linea', true).' '.($row - 1).': '.Lang::_lang('Ya existe un INSUMO con el nombre', true).' "'.$col_descripcion_val.'"',    
                            );                        
                        }

                        if (count($ins_matriz_descripcion_duplicadas) > 0) {
                            $arr['error'] = true;

                            $arr['error_arr'][] = array(
                                'mensaje' => Lang::_lang('Conflicto en linea', true).' '.($row - 1).': '.Lang::_lang('Ya existe una MATRIZ con el nombre', true).' "'.$col_descripcion_val.'"',    
                            );                        
                        }
                        
                    }
                                        
                    $marca_id_cod_marca_duplicadas = InsInsumo::controlCombinacionInsMarcaIdCodMarcaDuplicada($col_codigo_marca_val, $col_marca_id_val);
                    $marca_id_cod_oem_duplicadas = InsInsumo::controlCombinacionInsMarcaIdCodOemDuplicada($col_codigo_pieza_val, $col_marca_pieza_val);
                    
                    if ($marca_id_cod_marca_duplicadas) {
                        $arr['error'] = true;
        
                        $arr['error_arr'][] = array(
                            'mensaje' => Lang::_lang('Conflicto en linea', true).' '.($row - 1).': '.Lang::_lang('Ya existe un INSUMO con ese codigo y marca', true),    
                        );                        
                    }
                    if ($marca_id_cod_oem_duplicadas) {
                        $arr['error'] = true;
        
                        $arr['error_arr'][] = array(
                            'mensaje' => Lang::_lang('Conflicto en linea', true).' '.($row - 1).': '.Lang::_lang('Ya existe una MATRIZ con ese codigo y marca', true),    
                        );                        
                    }
                }                
                
                
            }
            
        } else {
            echo "Error no se encontro archivo " . $nombre_archivo . " .";
        }
        
    } else {
        echo "Error al cargar lista.";
    }
}

$arr_json = json_encode($arr);
echo $arr_json;
?>