<?php

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
