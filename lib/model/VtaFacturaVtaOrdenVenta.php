<?php

require_once "base/BVtaFacturaVtaOrdenVenta.php";

class VtaFacturaVtaOrdenVenta extends BVtaFacturaVtaOrdenVenta {

    /**
     * 
     */
    public function getImporteUnitarioParaComprobante() {
        /*
        $vta_tipo_factura = $this->getVtaFactura()->getVtaTipoFactura();
        
        switch ($vta_tipo_factura->getCodigo()) {
            case VtaTipoFactura::TIPO_FACTURA_A:
                $importe = $this->getImporteUnitario();
                break;
            case VtaTipoFactura::TIPO_FACTURA_B:
                $importe = $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
                break;
            default:
                $importe = $this->getImporteUnitario();
        }
        */
        $importe = $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        return $importe;
    }

    /**
     * 
     */
    public function getImporteUnitarioConImpuestos() {
        $importe = $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        return $importe;
    }
    
    /**
     * 
     */
    public function getImporteTotal($cantidad = 0) {
        if ($cantidad > 0){
            $importe = $this->getImporteUnitario() * $cantidad;
        }else{
            $importe = $this->getImporteUnitario() * $this->getCantidad();
        }
        
        return $importe;
    }

    /**
     * 
     */
    public function getImporteTotalConIva($cantidad = 0) {
        if ($cantidad > 0){
            $importe = $this->getImporteUnitario() * $cantidad * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }else{
            $importe = $this->getImporteUnitario() * $this->getCantidad() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe;
    }
    
    /**
     * 
     */
    public function getImporteTotalParaComprobante() {
        /*
        $vta_tipo_factura = $this->getVtaFactura()->getVtaTipoFactura();

        switch ($vta_tipo_factura->getCodigo()) {
            case VtaTipoFactura::TIPO_FACTURA_A:
                $importe = $this->getImporteUnitario() * $this->getCantidad();
                break;
            case VtaTipoFactura::TIPO_FACTURA_B:
                $importe = $this->getImporteUnitario() * $this->getCantidad() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
                break;
            default:
                $importe = $this->getImporteUnitario() * $this->getCantidad();
        }   
        */     
        
        $importe = $this->getImporteUnitario() * $this->getCantidad() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();

        return $importe;
    }

    /**
     * 
     */
    public function getImporteIva($cantidad = 0) {
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;

        // se obtiene el importe total incluido en la factura, depende de la cantidad facturada
        $importe = $this->getImporteTotal($cantidad) * $coeficiente_iva;
        return round($importe, 3);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 22/02/2018 08:00 hs.
     * Metodo que retorna la cantidad de items disponibles para generar la NC.
     * @return Float
     */
    public function getCantidadDisponibleNotaCredito() {
        $vta_nota_credito_vta_factura_vta_orden_venta_cantidad = 0;
        $vta_factura_vta_orden_venta_cantidad = $this->getCantidad();

        $vta_nota_credito_vta_factura_vta_orden_ventas = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getOsxVtaFacturaVtaOrdenVentaId($this->getId());

        foreach ($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta) {
            $vta_nota_credito_vta_factura_vta_orden_venta_cantidad += $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();
        }

        $cantidad_disponible = $vta_factura_vta_orden_venta_cantidad - $vta_nota_credito_vta_factura_vta_orden_venta_cantidad;

        return $cantidad_disponible;
    }
    
    /**
     * Autor: Baez Julian
     * Fecha: 24/06/2022 12:00
     * @param type $gral_tipo_iva_codigo
     * @return type
     */
    public function getImporteTotalPorTipoIVA($gral_tipo_iva_codigo){
        $importe_total = 0;
        
        $c = new Criterio();
        $c->addDistinct(true);
        $c->add(VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GralTipoIva::GEN_ATTR_CODIGO, $gral_tipo_iva_codigo, Criterio::IGUAL);
        $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
        $c->setCriterios();
        $vta_factura_vta_orden_ventas = VtaFacturaVtaOrdenVenta::getVtaFacturaVtaOrdenVentas(null, $c);
        //Gral::prr($vta_factura_vta_orden_ventas);
        
        foreach($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta){
            $importe_total = $vta_factura_vta_orden_venta->getImporteUnitario() * $vta_factura_vta_orden_venta->getCantidad() * $vta_factura_vta_orden_venta->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_total;
    }

}

?>