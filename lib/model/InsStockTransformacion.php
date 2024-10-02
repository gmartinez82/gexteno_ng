<?php

require_once "base/BInsStockTransformacion.php";

class InsStockTransformacion extends BInsStockTransformacion {

    public function getDescripcion() {
        $texto = $this->getCantidad() . ' ' . $this->getInsInsumo()->getDescripcion();
        return $texto;
    }

    static function setRegistrarTransformacion($vp_arr_origen, $vp_arr_destino) {
        //Gral::prr($vp_arr_origen);
        //Gral::prr($vp_arr_destino);

        foreach ($vp_arr_origen as $arr_origen) {
            $panol_id = $arr_origen['panol_id'];
            $insumo_id = $arr_origen['insumo_id'];
            $cantidad = $arr_origen['cantidad'];

            $pan_panol = PanPanol::getOxId($panol_id);
            $ins_insumo_origen = InsInsumo::getOxId($insumo_id);
            $cantidad_origen = $cantidad;
        }

        // ---------------------------------------------------------------------
        // se registra transformacion
        // ---------------------------------------------------------------------
        $ins_stock_transformacion = new InsStockTransformacion();
        $ins_stock_transformacion->setPanPanolId($pan_panol->getId());
        $ins_stock_transformacion->setInsInsumoId($ins_insumo_origen->getId());
        $ins_stock_transformacion->setCantidad($cantidad_origen);
        $ins_stock_transformacion->setEstado(1);
        $ins_stock_transformacion->save();

        foreach ($vp_arr_destino as $arr_destino) {
            $panol_id = $arr_destino['panol_id'];
            $insumo_id = $arr_destino['insumo_id'];
            $cantidad = $arr_destino['cantidad'];
            $afectar_costo = $arr_destino['afectar_costo'];

            $pan_panol = PanPanol::getOxId($panol_id);
            $ins_insumo_destino = InsInsumo::getOxId($insumo_id);
            $cantidad_destino = $cantidad;

            // -----------------------------------------------------------------
            // se registra transformacion destino
            // -----------------------------------------------------------------
            $ins_stock_transformacion_destino = new InsStockTransformacionDestino();
            $ins_stock_transformacion_destino->setInsStockTransformacionId($ins_stock_transformacion->getId());
            $ins_stock_transformacion_destino->setPanPanolId($pan_panol->getId());
            $ins_stock_transformacion_destino->setInsInsumoId($ins_insumo_destino->getId());
            $ins_stock_transformacion_destino->setCantidad($cantidad_destino);
            $ins_stock_transformacion_destino->setEstado(1);
            $ins_stock_transformacion_destino->save();

            if ($afectar_costo) {
                // -----------------------------------------------------------------
                // se registran costos del insumo transformado
                // -----------------------------------------------------------------
                $ins_insumo_destino->setInsInsumoCostoActual(
                        $prv_importacion = false, $costo = false, $observacion = false, $descripcion = false, $ins_stock_transformacion, $ins_stock_transformacion_destino
                );
            }
        }

        // ---------------------------------------------------------------------
        // se registran los movimientos de stock a traves de un pedido
        // ---------------------------------------------------------------------
        PdiPedido::setPdiPedidoPorTransformacionDeInsumo($vp_arr_origen, $vp_arr_destino);
    }

}

?>