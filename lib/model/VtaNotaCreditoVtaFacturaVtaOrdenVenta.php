<?php

require_once "base/BVtaNotaCreditoVtaFacturaVtaOrdenVenta.php";

class VtaNotaCreditoVtaFacturaVtaOrdenVenta extends BVtaNotaCreditoVtaFacturaVtaOrdenVenta {

    public function getImporteUnitarioParaComprobante() {
        /*
        $vta_tipo_nota_credito = $this->getVtaNotaCredito()->getVtaTipoNotaCredito();

        switch ($vta_tipo_nota_credito->getCodigo()) {
            case VtaTipoNotaCredito::TIPO_NOTA_CREDITO_A:
                $importe = $this->getImporteUnitario();
                break;
            case VtaTipoNotaCredito::TIPO_NOTA_CREDITO_B:
                $importe = $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
                break;
            default:
                $importe = $this->getImporteUnitario();
        }
        */
        $importe = $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        return $importe;
    } 
    
    public function getImporteTotal() {
        $importe = $this->getImporteUnitario() * $this->getCantidad();
        return Gral::rnd($importe);
    }

    public function getImporteTotalParaComprobante() {
        $vta_tipo_nota_credito = $this->getVtaNotaCredito()->getVtaTipoNotaCredito();

        switch ($vta_tipo_nota_credito->getCodigo()) {
            case VtaTipoNotaCredito::TIPO_NOTA_CREDITO_A:
                $importe = $this->getImporteTotal();
                break;
            case VtaTipoNotaCredito::TIPO_NOTA_CREDITO_B:
                $importe = $this->getImporteTotal() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
                break;
            default:
                $importe = $this->getImporteTotal();
        }
        return $importe;
    }    
    
    public function getImporteIva() {
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;

        // se obtiene el importe total incluido en la nota de credito
        $importe = $this->getImporteTotal() * $coeficiente_iva;
        return Gral::rnd($importe);
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
        $c->add(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GralTipoIva::GEN_ATTR_CODIGO, $gral_tipo_iva_codigo, Criterio::IGUAL);
        $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_ID, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_VTA_ORDEN_VENTA_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
        $c->setCriterios();
        $vta_nota_credito_vta_factura_vta_orden_ventas = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, $c);
        //Gral::prr($vta_nota_credito_vta_factura_vta_orden_ventas);
        
        foreach($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta){
            $importe_total = $vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario() * $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad() * $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_total;
    }

}

?>