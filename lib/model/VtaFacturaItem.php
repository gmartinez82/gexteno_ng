<?php

require_once "base/BVtaFacturaItem.php";

class VtaFacturaItem extends BVtaFacturaItem {
    
    /**
     * 
     */
     public function getCodigo(){
         return str_pad($this->getId(), 8, 0, STR_PAD_LEFT);
     }
     
     
    /**
     * 
     */
    public function getDescuento(){
        return $descuento = 0;
    }
     
    /**
     * 
     */
     public function getImporteUnitarioSinDescuento(){
         return $this->getImporteUnitario();
     }

    /**
     * 
     */
     public function getImporteUnitarioSinDescuentoConIva(){        
         return $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
     }
     
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
    public function getImporteTotal() {
        $importe = $this->getImporteUnitario() * $this->getCantidad();
        return Gral::rnd($importe);
    }
    
    /**
     * 
     */
    public function getImporteTotalConIva() {
        $importe = $this->getImporteUnitario() * $this->getCantidad() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();        
        return $importe;
    }

    /**
     * 
     */
    public function getImporteTotalSinDescuento() {
        $importe = $this->getImporteUnitario() * $this->getCantidad();
        return Gral::rnd($importe);
    }
    
    /**
     * 
     */
    public function getImporteTotalSinDescuentoConIva() {
        $importe = $this->getImporteUnitario() * $this->getCantidad() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        return Gral::rnd($importe);
    }

    /**
     * 
     */
    public function getImporteTotalConDescuentoConIva() {
        $importe = $this->getImporteUnitario() * $this->getCantidad() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        return Gral::rnd($importe);
    }
    
    /**
     * 
     */
    public function getImporteTotalParaComprobante() {
        $vta_tipo_factura = $this->getVtaFactura()->getVtaTipoFactura();

        switch ($vta_tipo_factura->getCodigo()) {
            case VtaTipoFactura::TIPO_FACTURA_A:
                $importe = $this->getImporteTotal();
                break;
            case VtaTipoFactura::TIPO_FACTURA_B:
                $importe = $this->getImporteTotal() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
                break;
            default:
                $importe = $this->getImporteTotal();
        }
        return $importe;
    }

    /**
     * 
     */
    public function getImporteIva() {
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;

        // se obtiene el importe total incluido en la nota de credito
        $importe = $this->getImporteTotal() * $coeficiente_iva;
        return round($importe, 3);
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
        $c->add(VtaFacturaItem::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GralTipoIva::GEN_ATTR_CODIGO, $gral_tipo_iva_codigo, Criterio::IGUAL);
        $c->addTabla(VtaFacturaItem::GEN_TABLA);
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaItem::GEN_ATTR_VTA_FACTURA_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
        $c->setCriterios();
        $vta_factura_items = VtaFacturaItem::getVtaFacturaItems(null, $c);
        //Gral::prr($vta_factura_items);
        
        foreach($vta_factura_items as $vta_factura_item){
            $importe_total = $vta_factura_item->getImporteUnitario() * $vta_factura_item->getCantidad() * $vta_factura_item->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_total;
    }    

}

?>