<?php
include "_autoload.php";

$arr = array();

$prv_importacion_id = Gral::getVars(2, 'importacion_id', 0);

if ($prv_importacion_id > 0) {
    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
    if ($prv_importacion) {
        
        include 'prv_importacion_logica_tab_3_restaurar_importacion.php';

            
        foreach ($arr_rows as $row => $arr_row) {
            include 'set_excel_variables.php';

            if ($col_nuevo_val == '1') { // si esta tildado nuevo

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
        echo "Error al cargar lista.";
    }
}

$arr_json = json_encode($arr);
echo $arr_json;
?>