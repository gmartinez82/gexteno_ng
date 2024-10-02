<?php

include 'cabecera_phpexcel_tab_3.php';

// solo ins_insumo_id, sin matriz y prv_insumo
if (!empty($insumo_id) && empty($matriz_id) && $col_prv_insumo_id_val == '') {
    $ins_insumo = InsInsumo::getOxId($insumo_id);

    if ($ins_insumo) {
        $criterio = new Criterio();
        $criterio->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $criterio->add(InsInsumoCosto::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $criterio->addTabla(InsInsumoCosto::GEN_TABLA);
        $criterio->setCriterios();

        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCosto($criterio);

        $importe_neto = number_format($col_importe_val * (1 - ($col_descuento_val / 100)), 2, '.', '');

        if ($ins_insumo_costo_actual) {
            $costo_actual = $ins_insumo_costo_actual->getCosto();
            $variacion = number_format((($importe_neto - $ins_insumo_costo_actual->getCosto()) / $ins_insumo_costo_actual->getCosto()) * 100, 0, '.', '');
        }

        $codigo_marca = $ins_insumo->getCodigoMarca();
        $marca_id = $ins_insumo->getInsMarcaId();

        $objWorksheet->setCellValueByColumnAndRow($col_costo_actual, $row, $costo_actual);
        $objWorksheet->setCellValueByColumnAndRow($col_variacion, $row, $variacion);

        if ($codigo_marca != '') {
            $objWorksheet->setCellValueByColumnAndRow($col_codigo_marca, $row, $codigo_marca);
        }

        if ($marca_id > 0) {
            $objWorksheet->setCellValueByColumnAndRow($col_marca_id, $row, $marca_id);
        }

        $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, $row, $insumo_id);
        $objWorksheet->setCellValueByColumnAndRow($col_nuevo, $row, 0);
        $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, $row, '');
    }
}

// Con ins_insumo_id, prv_insumo y sin matriz
else if (!empty($insumo_id) && empty($matriz_id) && $col_prv_insumo_id_val > 0) {
    $ins_insumo = InsInsumo::getOxId($insumo_id);
    $prv_insumo = PrvInsumo::getOxId((int) $col_prv_insumo_id_val);

    if ($ins_insumo && $prv_insumo) {
        $criterio = new Criterio();
        $criterio->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $criterio->add(InsInsumoCosto::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $criterio->addTabla(InsInsumoCosto::GEN_TABLA);
        $criterio->setCriterios();

        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCosto($criterio);
        $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual($prv_insumo->getId());


        $importe_neto = number_format($col_importe_val * (1 - ($col_descuento_val / 100)), 2, '.', '');
        if ($prv_insumo_costo_actual) {
            $ultimo_importe = number_format($prv_insumo_costo_actual->getImporteBruto() * (1 - ($prv_insumo_costo_actual->getDescuento() / 100)), 2, '.', '');
            $fecha_importacion = Gral::getFechaHoraToWEB($prv_insumo_costo_actual->getFechaActualizacion());
            $incremento = number_format((($importe_neto - $ultimo_importe) / $ultimo_importe) * 100, 0, '.', '');
        }

        if ($ins_insumo_costo_actual) {
            $costo_actual = $ins_insumo_costo_actual->getCosto();
            $variacion = number_format((($importe_neto - $ins_insumo_costo_actual->getCosto()) / $ins_insumo_costo_actual->getCosto()) * 100, 0, '.', '');
        }
        $codigo_marca = $ins_insumo->getCodigoMarca();
        $marca_id = $ins_insumo->getInsMarcaId();


        $objWorksheet->setCellValueByColumnAndRow($col_ultimo_importe, $row, $ultimo_importe);
        $objWorksheet->setCellValueByColumnAndRow($col_fecha_importacion, $row, $fecha_importacion);
        $objWorksheet->setCellValueByColumnAndRow($col_incremento, $row, $incremento);
        $objWorksheet->setCellValueByColumnAndRow($col_costo_actual, $row, $costo_actual);
        $objWorksheet->setCellValueByColumnAndRow($col_variacion, $row, $variacion);

        if ($codigo_marca != '') {
            $objWorksheet->setCellValueByColumnAndRow($col_codigo_marca, $row, $codigo_marca);
        }

        if ($marca_id > 0) {
            $objWorksheet->setCellValueByColumnAndRow($col_marca_id, $row, $marca_id);
        }

        $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, $row, $insumo_id);
        $objWorksheet->setCellValueByColumnAndRow($col_nuevo, $row, 0);
        $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, $row, '');
    }
}

// solo matriz sin ins_insumo_id con y sin prv_insumo
else if (empty($insumo_id) && !empty($matriz_id)) {
    $ins_matriz = InsMatriz::getOxId($matriz_id);
            
    if ($ins_matriz) {
        $codigo_pieza = $ins_matriz->getCodigoPieza();
        $pieza_id = $ins_matriz->getInsMarcaId();

        if (!empty($col_prv_insumo_id_val)) {
            $prv_insumo = PrvInsumo::getOxId((int) $col_prv_insumo_id_val);

            if ($prv_insumo) {
                $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual($prv_insumo->getId());

                $importe_neto = number_format($col_importe_val * (1 - ($col_descuento_val / 100)), 2, '.', '');
                if ($prv_insumo_costo_actual) {
                    $ultimo_importe = number_format($prv_insumo_costo_actual->getImporteBruto() * (1 - ($prv_insumo_costo_actual->getDescuento() / 100)), 2, '.', '');
                    $fecha_importacion = Gral::getFechaHoraToWEB($prv_insumo_costo_actual->getFechaActualizacion());
                    $incremento = number_format((($importe_neto - $ultimo_importe) / $ultimo_importe) * 100, 0, '.', '');
                }
            }
        }

        if ($codigo_pieza != '') {
            $objWorksheet->setCellValueByColumnAndRow($col_codigo_pieza, $row, $codigo_pieza);
        }

        if ($pieza_id > 0) {
            $objWorksheet->setCellValueByColumnAndRow($col_pieza_id, $row, $pieza_id);
        }

        $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, $row, $matriz_id);
        $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, $row, '');

        $objWorksheet->setCellValueByColumnAndRow($col_ultimo_importe, $row, $ultimo_importe);
        $objWorksheet->setCellValueByColumnAndRow($col_fecha_importacion, $row, $fecha_importacion);
        $objWorksheet->setCellValueByColumnAndRow($col_incremento, $row, $incremento);
        
        $objWorksheet->setCellValueByColumnAndRow($col_costo_actual, $row, '');
        $objWorksheet->setCellValueByColumnAndRow($col_variacion, $row, '');
        $objWorksheet->setCellValueByColumnAndRow($col_nuevo, $row, 0);
    }
}

$objWorksheet->setCellValueByColumnAndRow($col_modificado, $row, 1);

// Guarda e imprime una fila de el excel
include "pie_phpexcel_tab_3.php";
