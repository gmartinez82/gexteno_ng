<?php

$arr = PrvInsumo::getPrvInsumosEnArray($prv_proveedor_id);

// ---------------------------------------------------------------------------
// se borran las tablas temporales para la misma importacion
$ejec = new Ejecucion();
$sql = "
    DELETE FROM tmp_prv_importacion_tab_3 WHERE prv_importacion_id = ".$prv_importacion->getId().";
    DELETE FROM tmp_prv_importacion_tab_3_rollback WHERE prv_importacion_id = ".$prv_importacion->getId().";
    ";
$ejec->setSql($sql);
$ejec->execute();
// ---------------------------------------------------------------------------


$cantidad_tab3 = 0;

for ($row = 2; $row <= $highestRow; ++$row) {
    
    $cantidad_tab3++;

    $cod_proveedor_saneado = PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_proveedor, $row)->getValue());
    //$prv_insumo = PrvInsumo::getPrvInsumoXPrvProveedorIdXCodProveedor($prv_proveedor_id, $cod_proveedor_saneado);
    $prv_insumo = $arr[$prv_proveedor_id][$cod_proveedor_saneado];

    if ($prv_insumo) {
        $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
        $ins_insumo_costo_actual = $prv_insumo->getInsInsumoCostoActual($prv_insumo->getInsInsumoId());

        $id = $prv_insumo->getId();
        $codigo_proveedor = $cod_proveedor_saneado;
        $actualiza_descripcion = '0';
        $descripcion = $objWorksheet_tab2->getCellByColumnAndRow($col_web_descripcion, $row)->getValue();
        $importe = number_format($objWorksheet_tab2->getCellByColumnAndRow($col_web_importe, $row)->getValue(), 2, '.', '');
        $importe_neto = number_format($importe * (1 - ($descuento / 100)), 2, '.', '');
        $ultimo_importe = $prv_insumo_costo_actual->getImporteNeto();
        $fecha_importacion = Gral::getFechaHoraToWEB($prv_insumo_costo_actual->getFechaActualizacion());
        $proveedor_referencial = $prv_insumo->getReferencial();

        $incremento = ($importe_neto != $ultimo_importe) ? number_format((($importe_neto - $ultimo_importe) / $ultimo_importe) * 100, 0, '.', '') : "0";

        if ($ins_insumo_costo_actual) {
            $costo_actual = $ins_insumo_costo_actual->getCosto();
            $variacion = number_format((($importe_neto - $ins_insumo_costo_actual->getCosto()) / $ins_insumo_costo_actual->getCosto()) * 100, 0, '.', '');
        } else {
            $costo_actual = '';
            $variacion = '';
        }
        $actualizar_costo = '0';
        if($prv_insumo->getReferencial()) $actualizar_costo = '1'; // si es referencial de precios se configura check = 1

        if (isset($col_web_codigo_marca)) {
            $codigo_marca = ($prv_insumo->getCodigoMarca() != null) ? $prv_insumo->getCodigoMarca() : PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_marca, $row)->getValue());
        } else {
            $codigo_marca = ($prv_insumo->getCodigoMarca() != null) ? $prv_insumo->getCodigoMarca() : '';
        }

        if (isset($col_web_codigo_pieza)) {
            $codigo_pieza = ($prv_insumo->getCodigoPieza() != null) ? $prv_insumo->getCodigoPieza() : PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_pieza, $row)->getValue());
        } else {
            $codigo_pieza = ($prv_insumo->getCodigoPieza() != null) ? $prv_insumo->getCodigoPieza() : '';
        }


        if (isset($web_ins_marca_id)) {
            $marca_id = ($prv_insumo->getInsMarcaId() != 'null') ? $prv_insumo->getInsMarcaId() : $web_ins_marca_id;
        } else {
            $marca_id = ($prv_insumo->getInsMarcaId() != 'null') ? $prv_insumo->getInsMarcaId() : '0';
        }

        if (isset($web_pieza_id)) {
            $pieza_id = ($prv_insumo->getInsMarcaPieza() != 'null') ? $prv_insumo->getInsMarcaPieza() : $web_pieza_id;
        } else {
            $pieza_id = ($prv_insumo->getInsMarcaPieza() != 'null') ? $prv_insumo->getInsMarcaPieza() : '0';
        }

        $ins_insumo_id = ((int) $prv_insumo->getInsInsumoId() != 0) ? (int) $prv_insumo->getInsInsumoId() : '';
        $ins_matriz_id = ((int) $prv_insumo->getInsMatrizId() != 0) ? (int) $prv_insumo->getInsMatrizId() : '';
        $modificado = '0';
        $nuevo = '0';
        $permite_desvincular = '0';
        $cancelado = '0';
        $descripcion_matriz = '';
    } else {
        $id = '';
        $codigo_proveedor = $cod_proveedor_saneado;
        $actualiza_descripcion = '0';
        $descripcion = $objWorksheet_tab2->getCellByColumnAndRow($col_web_descripcion, $row)->getValue();
        $importe = number_format($objWorksheet_tab2->getCellByColumnAndRow($col_web_importe, $row)->getValue(), 2, '.', '');
        $importe_neto = number_format($importe * (1 - ($descuento / 100)), 2, '.', '');
        $ultimo_importe = '';
        $fecha_importacion = '';
        $incremento = '';
        $costo_actual = '';
        $variacion = '';
        $actualizar_costo = '0';

        if (isset($col_web_codigo_marca)) {
            $codigo_marca = PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_marca, $row)->getValue());
        } else {
            $codigo_marca = '';
        }

        if (isset($col_web_codigo_pieza)) {
            $codigo_pieza = PrvInsumoExcel::getCodigoSaneado($objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_pieza, $row)->getValue());
        } else {
            $codigo_pieza = '';
        }

        $marca_id = ($web_ins_marca_id != 0) ? $web_ins_marca_id : '';
        $pieza_id = ($web_pieza_id != 0) ? $web_pieza_id : '';

        $ins_insumo_id = '';
        $ins_matriz_id = '';
        $modificado = '0';
        $nuevo = '0';
        $permite_desvincular = '0';
        $cancelado = '0';
        $descripcion_matriz = '';
        $proveedor_referencial = 0;
    }
    
    
    // ------------------------------------------------------------------------------------- SANEAMIENTO
    // se sanean las descripciones para evitar conflictos con caracteres especiales
    $descripcion = Gral::getVars(Gral::VARS_SANEAMIENTO, $descripcion);
    $descripcion_matriz = Gral::getVars(Gral::VARS_SANEAMIENTO, $descripcion_matriz);

    $descripcion = trim($descripcion);
    $descripcion_matriz = trim($descripcion_matriz);
    // ------------------------------------------------------------------------------------- SANEAMIENTO
    
    // se cargan variables de campos con los valores de variables col
    $fila = $row;
    $prv_importacion_id = $prv_importacion->getId();
    $prv_insumo_id = $id;
    $codigo_proveedor = $cod_proveedor_saneado;
    $seleccion = $actualiza_descripcion;
    $descripcion = $descripcion;
    $descripcion_matriz = $descripcion_matriz;
    $importe = $importe;
    $descuento = $descuento;
    $importe_neto = $importe_neto;
    $ultimo_importe = $ultimo_importe;
    $fecha_importacion = $fecha_importacion;
    $incremento = $incremento;
    $costo_actual = $costo_actual;
    $variacion = $variacion;
    $actualizar_costo = $actualizar_costo;
    $codigo_marca = $codigo_marca;
    $codigo_oem = $codigo_pieza;
    $ins_marca_id = $marca_id;
    $ins_marca_oem_id = $pieza_id;
    $ins_insumo_id = $ins_insumo_id;
    $ins_matriz_id = $ins_matriz_id;
    $modificado = $modificado;
    $nuevo = $nuevo;
    $permite_desvincular = $permite_desvincular;
    $cancelado = $cancelado;
    $proveedor_referencial = $proveedor_referencial;
    
    $arr_rows[$fila] = array(
        'fila' => $fila,
        'prv_importacion_id' => $prv_importacion_id,
        'prv_insumo_id' => $prv_insumo_id,
        'codigo_proveedor' => $codigo_proveedor,
        'seleccion' => $seleccion,
        'descripcion' => $descripcion,
        'descripcion_matriz' => $descripcion_matriz,
        'importe' => $importe,
        'descuento' => $descuento,
        'importe_neto' => $importe_neto,
        'ultimo_importe' => $ultimo_importe,
        'fecha_importacion' => $fecha_importacion,
        'incremento' => $incremento,
        'costo_actual' => $costo_actual,
        'variacion' => $variacion,
        'actualizar_costo' => $actualizar_costo,
        'codigo_marca' => $codigo_marca,
        'codigo_oem' => $codigo_oem,
        'ins_marca_id' => $ins_marca_id,
        'ins_marca_oem_id' => $ins_marca_oem_id,
        'ins_insumo_id' => $ins_insumo_id,
        'ins_matriz_id' => $ins_matriz_id,
        'modificado' => $modificado,
        'nuevo' => $nuevo,
        'permite_desvincular' => $permite_desvincular,
        'cancelado' => $cancelado,
        'proveedor_referencial' => $proveedor_referencial,
    );
      
    $sql = "";
    $arr_tablas_tab_3 = array('tmp_prv_importacion_tab_3', 'tmp_prv_importacion_tab_3_rollback');
    foreach($arr_tablas_tab_3 as $tabla_tab_3){
        $sql.= "
            INSERT INTO ".$tabla_tab_3." (
                id, 
                fila, 
                prv_importacion_id, 
                prv_insumo_id, 
                codigo_proveedor, 
                seleccion, 
                descripcion, 
                descripcion_matriz, 
                importe, 
                descuento, 
                importe_neto, 
                ultimo_importe, 
                fecha_importacion, 
                incremento, 
                costo_actual, 
                variacion, 
                actualizar_costo, 
                codigo_marca, 
                codigo_oem, 
                ins_marca_id,
                ins_marca_oem_id, 
                ins_insumo_id, 
                ins_matriz_id, 
                modificado, 
                nuevo, 
                permite_desvincular, 
                cancelado, 
                proveedor_referencial 
            ) 
            VALUES (
                nextval('".$tabla_tab_3."_seq'), 
                '".$fila."', 
                '".$prv_importacion_id."', 
                '".$prv_insumo_id."', 
                '".$codigo_proveedor."', 
                '".$seleccion."', 
                '".$descripcion."', 
                '".$descripcion_matriz."', 
                '".$importe."', 
                '".$descuento."', 
                '".$importe_neto."', 
                '".$ultimo_importe."', 
                '".$fecha_importacion."', 
                '".$incremento."', 
                '".$costo_actual."', 
                '".$variacion."', 
                '".$actualizar_costo."', 
                '".$codigo_marca."', 
                '".$codigo_oem."', 
                '".$ins_marca_id."', 
                '".$ins_marca_oem_id."', 
                '".$ins_insumo_id."', 
                '".$ins_matriz_id."', 
                '".$modificado."', 
                '".$nuevo."', 
                '".$permite_desvincular."', 
                '".$cancelado."', 
                '".$proveedor_referencial."'
                )
            RETURNING currval('".$tabla_tab_3."_seq')"
                . ";"
                ;
    }
    $ejec = new Ejecucion();
    //Gral::pr($sql);
    $ejec->setSql($sql);
    $ejec->execute();


}

// se registra la cantidad de filas en tab 3
$prv_importacion->setCantidadTab3($cantidad_tab3);
$prv_importacion->save();
