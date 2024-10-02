<?php

$col_nuevo_val = $arr_row['nuevo'];
$col_modificado_val = $arr_row['modificado'];
$col_ins_matriz_id_val = $arr_row['ins_matriz_id'];
$col_ins_insumo_id_val = $arr_row['ins_insumo_id'];
$col_prv_insumo_id_val = $arr_row['prv_insumo_id'];
$col_marca_id_val = $arr_row['ins_marca_id'];
$col_marca_pieza_val = $arr_row['ins_marca_oem_id'];
$col_codigo_marca_val = PrvInsumoExcel::getCodigoSaneado($arr_row['codigo_marca']);
$col_codigo_pieza_val = PrvInsumoExcel::getCodigoSaneado($arr_row['codigo_oem']);
$col_actualiza_descripcion_val = $arr_row['seleccion'];
$col_descripcion_val = $arr_row['descripcion'];
$col_importe_neto_val = number_format($arr_row['importe_neto'], 2, '.', '');
$col_descuento_val = number_format($arr_row['descuento'], 2, '.', '');
$col_codigo_proveedor_val = PrvInsumoExcel::getCodigoSaneado($arr_row['codigo_proveedor']);
$col_importe_val = number_format($arr_row['importe'], 2, '.', '');
$col_actualizar_costo_val = $arr_row['actualizar_costo'];


$col_ultimo_importe_val = $arr_row['ultimo_importe'];
$col_fecha_importacion_val = $arr_row['fecha_importacion'];
$col_incremento_val = $arr_row['incremento'];
$col_costo_actual_val = $arr_row['costo_actual'];
$col_variacion_val = $arr_row['variacion'];

$col_permite_desvincular_val = $arr_row['permite_desvincular'];
$col_cancelado_val = $arr_row['cancelado'];

$col_descripcion_matriz_val = $arr_row['descripcion_matriz'];
$col_proveedor_referencial_val = $arr_row['proveedor_referencial'];



return;
$col_nuevo_val = $objWorksheet->getCellByColumnAndRow($col_nuevo, $row)->getValue();
$col_modificado_val = $objWorksheet->getCellByColumnAndRow($col_modificado, $row)->getValue();
$col_ins_matriz_id_val = $objWorksheet->getCellByColumnAndRow($col_ins_matriz_id, $row)->getValue();
$col_ins_insumo_id_val = $objWorksheet->getCellByColumnAndRow($col_ins_insumo_id, $row)->getValue();
$col_prv_insumo_id_val = $objWorksheet->getCellByColumnAndRow($col_prv_insumo_id, $row)->getValue();
$col_marca_id_val = ((int) $objWorksheet->getCellByColumnAndRow($col_marca_id, $row)->getValue() != 0) ? (int) $objWorksheet->getCellByColumnAndRow($col_marca_id, $row)->getValue() : '';
$col_marca_pieza_val = ((int) $objWorksheet->getCellByColumnAndRow($col_pieza_id, $row)->getValue() != 0) ? (int) $objWorksheet->getCellByColumnAndRow($col_pieza_id, $row)->getValue() : '';
$col_codigo_marca_val = PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_codigo_marca, $row)->getValue());
$col_codigo_pieza_val = PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_codigo_pieza, $row)->getValue());
$col_actualiza_descripcion_val = (int) $objWorksheet->getCellByColumnAndRow($col_seleccion, $row)->getValue();
$col_descripcion_val = $objWorksheet->getCellByColumnAndRow($col_descripcion, $row)->getValue();
$col_importe_neto_val = number_format($objWorksheet->getCellByColumnAndRow($col_importe_neto, $row)->getValue(), 2, '.', '');
$col_descuento_val = number_format($objWorksheet->getCellByColumnAndRow($col_descuento, $row)->getValue(), 2, '.', '');
$col_codigo_proveedor_val = PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_codigo_proveedor, $row)->getValue());
$col_importe_val = number_format($objWorksheet->getCellByColumnAndRow($col_importe, $row)->getValue(), 2, '.', '');
$col_actualizar_costo_val = $objWorksheet->getCellByColumnAndRow($col_actualizar_costo, $row)->getValue();

// No se usan estos valores por el momento
$col_ultimo_importe_val = $objWorksheet->getCellByColumnAndRow($col_ultimo_importe, $row)->getValue();
$col_fecha_importacion_val = $objWorksheet->getCellByColumnAndRow($col_fecha_importacion, $row)->getValue();
$col_incremento_val = $objWorksheet->getCellByColumnAndRow($col_incremento, $row)->getValue();
$col_costo_actual_val = $objWorksheet->getCellByColumnAndRow($col_costo_actual, $row)->getValue();
$col_variacion_val = $objWorksheet->getCellByColumnAndRow($col_variacion, $row)->getValue();

$col_cancelado_val = $objWorksheet->getCellByColumnAndRow($col_cancelado, $row)->getValue();
$col_descripcion_matriz_val = $objWorksheet->getCellByColumnAndRow($col_descripcion_matriz, $row)->getValue();
$col_proveedor_referencial_val = $objWorksheet->getCellByColumnAndRow($col_proveedor_referencial, $row)->getValue();
