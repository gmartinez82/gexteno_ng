<?php

require_once "base/BInsListaPrecio.php";

class InsListaPrecio extends BInsListaPrecio {

    const GEN_CLASE_AUDITORIA = false;
    const REDONDEAR_IMPORTE_UNITARIO = false;

    public function saveDesdeRelacion() {
        $this->setCalcularImporte();

        parent::save();
    }

    public function saveDesdeBackend() {
        $this->setCalcularImporte();

        parent::saveDesdeBackend();
    }

    public function setCalcularImporte($save = false) {
        $ins_insumo = $this->getInsInsumo();
        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

        // si no tiene costo actual no realiza el calculo
        if (!$ins_insumo_costo_actual)
            return false;

        $ins_tipo_lista_precio = $this->getInsTipoListaPrecio();

        // calculo a partir del porcentaje del tipo de lista
        $importe_calculado = $ins_insumo_costo_actual->getCosto() * $ins_tipo_lista_precio->getPorcentajeIncrementoParaCalculo();
        
        if ($this->getPorcentajeIncremento() > 0) {
            // excepcion cuando el insumo tiene un porcentaje de incremento particular
            $importe_calculado = $ins_insumo_costo_actual->getCosto() * $this->getPorcentajeIncrementoParaCalculo();
        }

        // se interviene para redondeo
        if(self::REDONDEAR_IMPORTE_UNITARIO){
            $importe_calculado = floor($importe_calculado);
        }
        
        $this->setImporteCalculado($importe_calculado);

        if ($this->getImporteManual() > 0) {
            $this->setImporteVenta($this->getImporteManual());
        } else {
            $this->setImporteVenta($this->getImporteCalculado());
        }

        if ($save) {
            $this->save();
        }
    }

    public function getPorcentajeIncrementoParaCalculo() {
        $porcentaje = $this->getPorcentajeIncremento();
        $porcentaje = 1 + ($porcentaje / 100);

        return $porcentaje;
    }

    static function getOrdenarPorCmb() {
        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = 'importe-venta-mayor';
        $arr[$cont]['descripcion'] = 'Mayor Importe de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'importe-venta-menor';
        $arr[$cont]['descripcion'] = 'Menor Importe de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'porcentaje-venta-mayor';
        $arr[$cont]['descripcion'] = 'Mayor Porcentaje de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'porcentaje-venta-menor';
        $arr[$cont]['descripcion'] = 'Menor Porcentaje de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'costo-fecha-mayor';
        $arr[$cont]['descripcion'] = 'Mayor Fecha de Act Costo';

        $cont++;
        $arr[$cont]['cod'] = 'costo-fecha-menor';
        $arr[$cont]['descripcion'] = 'Menor Fecha de Act Costo';

        $cont++;
        $arr[$cont]['cod'] = 'descripcion';
        $arr[$cont]['descripcion'] = 'Descripcion';

        $cont++;
        $arr[$cont]['cod'] = 'codigo_interno';
        $arr[$cont]['descripcion'] = 'Codigo Interno';

        return $arr;
    }

    public function getImporteVentaConIVA() {

        $ins_insumo = $this->getInsInsumo();
        $gral_tipo_iva_venta = $ins_insumo->getGralTipoIvaVentaObj();

        $importe_venta = parent::getImporteVenta();
        $importe_venta_con_iva = $importe_venta * $gral_tipo_iva_venta->getValorIvaDecimalParaSumarEnCalculo();

        return $importe_venta_con_iva;
    }    

}

?>