<?php

require_once "base/BVtaNotaDebitoItem.php";

class VtaNotaDebitoItem extends BVtaNotaDebitoItem {

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
        $vta_tipo_nota_debito = $this->getVtaNotaDebito()->getVtaTipoNotaDebito();

        switch ($vta_tipo_nota_debito->getCodigo()) {
            case VtaTipoNotaDebito::TIPO_NOTA_DEBITO_A:
                $importe = $this->getImporteUnitario();
                break;
            case VtaTipoNotaDebito::TIPO_NOTA_DEBITO_B:
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
        $vta_tipo_nota_debito = $this->getVtaNotaDebito()->getVtaTipoNotaDebito();

        switch ($vta_tipo_nota_debito->getCodigo()) {
            case VtaTipoNotaDebito::TIPO_NOTA_DEBITO_A:
                $importe = $this->getImporteTotal();
                break;
            case VtaTipoNotaDebito::TIPO_NOTA_DEBITO_B:
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

        // se obtiene el importe total incluido en la nota de debito
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
        $c->add(VtaNotaDebitoItem::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GralTipoIva::GEN_ATTR_CODIGO, $gral_tipo_iva_codigo, Criterio::IGUAL);
        $c->addTabla(VtaNotaDebitoItem::GEN_TABLA);
        $c->addRealJoin(VtaNotaDebito::GEN_TABLA, VtaNotaDebito::GEN_ATTR_ID, VtaNotaDebitoItem::GEN_ATTR_VTA_NOTA_DEBITO_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
        $c->setCriterios();
        $vta_nota_debito_items = VtaNotaDebitoItem::getVtaNotaDebitoItems(null, $c);
        //Gral::prr($vta_nota_debito_items);
        
        foreach($vta_nota_debito_items as $vta_nota_debito_item){
            $importe_total = $vta_nota_debito_item->getImporteUnitario() * $vta_nota_debito_item->getCantidad() * $vta_nota_debito_item->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_total;
    }

}

?>