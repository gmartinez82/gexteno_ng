<?php 
require_once "base/BVtaAjusteDebeVtaOrdenVenta.php"; 
class VtaAjusteDebeVtaOrdenVenta extends BVtaAjusteDebeVtaOrdenVenta
{
    public function getImporteUnitarioParaComprobante() {
        $vta_tipo_ajuste_debe = $this->getVtaAjusteDebe()->getVtaTipoAjusteDebe();
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;
        $porcentaje = $this->getVtaAjusteDebe()->getPorcentaje() / 100;

        switch ($vta_tipo_ajuste_debe->getCodigo()) {
            default:

                $importe = $this->getImporteUnitario() * (($coeficiente_iva * $porcentaje) + 1);
        }
        return $importe;
    }

    public function getImporteTotal($cantidad = 0) {
        if ($cantidad > 0)
            $importe = $this->getImporteUnitario() * $cantidad;
        else
            $importe = $this->getImporteUnitario() * $this->getCantidad();
        
        return $importe;
    }

    public function getImporteTotalParaComprobante() {
        $vta_tipo_ajuste_debe = $this->getVtaAjusteDebe()->getVtaTipoAjusteDebe();
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;
        $porcentaje = $this->getVtaAjusteDebe()->getPorcentaje() / 100;

        switch ($vta_tipo_ajuste_debe->getCodigo()) {
            default:
                $importe = $this->getImporteUnitario() * $this->getCantidad() * (($coeficiente_iva * $porcentaje) + 1);
        }

        return $importe;
    }

    public function getImporteIva($cantidad = 0) {
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;
        $porcentaje = $this->getVtaAjusteDebe()->getPorcentaje() / 100;

        // se obtiene el importe total incluido en la ajuste_debe, depende de la cantidad ajuste_debeda
        $importe = ($this->getImporteTotal($cantidad) * $coeficiente_iva) * $porcentaje;
        return round($importe, 3);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 22/02/2018 08:00 hs.
     * Metodo que retorna la cantidad de items disponibles para generar la NC.
     * @return Float
     */
    public function getCantidadDisponibleNotaCredito() {
        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta_cantidad = 0;
        $vta_ajuste_debe_vta_orden_venta_cantidad = $this->getCantidad();

        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta::getOsxVtaAjusteDebeVtaOrdenVentaId($this->getId());

        foreach ($vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta) {
            $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta_cantidad += $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getCantidad();
        }

        $cantidad_disponible = $vta_ajuste_debe_vta_orden_venta_cantidad - $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta_cantidad;

        return $cantidad_disponible;
    }
    
    /**
     * Autor: Baez Julian
     * Fecha: 09/08/2022 13:00
     * @param type $gral_tipo_iva_codigo
     * @return type
     */
    public function getImporteTotalPorTipoIVA($gral_tipo_iva_codigo){
        $importe_total = 0;
        
        $c = new Criterio();
        $c->addDistinct(true);
        $c->add(VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GralTipoIva::GEN_ATTR_CODIGO, $gral_tipo_iva_codigo, Criterio::IGUAL);
        $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
        $c->setCriterios();
        $vta_ajuste_debe_vta_orden_ventas = VtaAjusteDebeVtaOrdenVenta::getVtaAjusteDebeVtaOrdenVentas(null, $c);
        //Gral::prr($vta_ajuste_debe_vta_orden_ventas);
        
        foreach($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta){
            $importe_total = $vta_ajuste_debe_vta_orden_venta->getImporteUnitario() * $vta_ajuste_debe_vta_orden_venta->getCantidad() * $vta_ajuste_debe_vta_orden_venta->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_total;
    }
    
}
?>