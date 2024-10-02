<?php

require_once "base/BVtaNotaCreditoItem.php";

class VtaNotaCreditoItem extends BVtaNotaCreditoItem {

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
    
    /**
     * 
     */
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
        $c->add(VtaNotaCreditoItem::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GralTipoIva::GEN_ATTR_CODIGO, $gral_tipo_iva_codigo, Criterio::IGUAL);
        $c->addTabla(VtaNotaCreditoItem::GEN_TABLA);
        $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_ID, VtaNotaCreditoItem::GEN_ATTR_VTA_NOTA_CREDITO_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
        $c->setCriterios();
        $vta_nota_credito_items = VtaNotaCreditoItem::getVtaNotaCreditoItems(null, $c);
        //Gral::prr($vta_nota_credito_items);
        
        foreach($vta_nota_credito_items as $vta_nota_credito_item){
            $importe_total = $vta_nota_credito_item->getImporteUnitario() * $vta_nota_credito_item->getCantidad() * $vta_nota_credito_item->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_total;
    }

}

?>