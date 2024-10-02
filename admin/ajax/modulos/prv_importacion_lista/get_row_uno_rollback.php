<?php
while($fila_rs_rollback = pg_fetch_object($cons_rollback->getResultado())){
    
    $rollback_fila = $fila_rs_rollback->fila;
    $rollback_prv_importacion_id = $fila_rs_rollback->prv_importacion_id;
    $rollback_prv_insumo_id = $fila_rs_rollback->prv_insumo_id;
    $rollback_codigo_proveedor = $fila_rs_rollback->codigo_proveedor;
    $rollback_seleccion = $fila_rs_rollback->seleccion;
    $rollback_descripcion = $fila_rs_rollback->descripcion;
    $rollback_descripcion_matriz = $fila_rs_rollback->descripcion_matriz;
    $rollback_importe = $fila_rs_rollback->importe;
    $rollback_descuento = $fila_rs_rollback->descuento;
    $rollback_importe_neto = $fila_rs_rollback->importe_neto;
    $rollback_ultimo_importe = $fila_rs_rollback->ultimo_importe;
    $rollback_fecha_importacion = $fila_rs_rollback->fecha_importacion;
    $rollback_incremento = $fila_rs_rollback->incremento;
    $rollback_costo_actual = $fila_rs_rollback->costo_actual;
    $rollback_variacion = $fila_rs_rollback->variacion;
    $rollback_actualizar_costo = $fila_rs_rollback->actualizar_costo;
    $rollback_codigo_marca = $fila_rs_rollback->codigo_marca;
    $rollback_codigo_oem = $fila_rs_rollback->codigo_oem;
    $rollback_ins_marca_id = $fila_rs_rollback->ins_marca_id;
    $rollback_ins_marca_oem_id = $fila_rs_rollback->ins_marca_oem_id;
    $rollback_ins_insumo_id = $fila_rs_rollback->ins_insumo_id;
    $rollback_ins_matriz_id = $fila_rs_rollback->ins_matriz_id;
    $rollback_modificado = $fila_rs_rollback->modificado;
    $rollback_nuevo = $fila_rs_rollback->nuevo;
    $rollback_permite_desvincular = $fila_rs_rollback->permite_desvincular;
    $rollback_cancelado = $fila_rs_rollback->cancelado;
    $rollback_proveedor_referencial = $fila_rs_rollback->proveedor_referencial;
    
    $arr_row_rollback = array(
        'fila' => $rollback_fila,
        'prv_importacion_id' => $rollback_prv_importacion_id,
        'prv_insumo_id' => $rollback_prv_insumo_id,
        'codigo_proveedor' => $rollback_codigo_proveedor,
        'seleccion' => $rollback_seleccion,
        'descripcion' => $rollback_descripcion,
        'descripcion_matriz' => $rollback_descripcion_matriz,
        'importe' => $rollback_importe,
        'descuento' => $rollback_descuento,
        'importe_neto' => $rollback_importe_neto,
        'ultimo_importe' => $rollback_ultimo_importe,
        'fecha_importacion' => $rollback_fecha_importacion,
        'incremento' => $rollback_incremento,
        'costo_actual' => $rollback_costo_actual,
        'variacion' => $rollback_variacion,
        'actualizar_costo' => $rollback_actualizar_costo,
        'codigo_marca' => $rollback_codigo_marca,
        'codigo_oem' => $rollback_codigo_oem,
        'ins_marca_id' => $rollback_ins_marca_id,
        'ins_marca_oem_id' => $rollback_ins_marca_oem_id,
        'ins_insumo_id' => $rollback_ins_insumo_id,
        'ins_matriz_id' => $rollback_ins_matriz_id,
        'modificado' => $rollback_modificado,
        'nuevo' => $rollback_nuevo,
        'permite_desvicular' => $rollback_permite_desvincular,
        'cancelado' => $rollback_cancelado,
        'proveedor_referencial' => $rollback_proveedor_referencial,
    );
    
}