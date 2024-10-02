<?php

require_once "base/BVtaReciboItemRetencion.php";

class VtaReciboItemRetencion extends BVtaReciboItemRetencion {


    static function getVtaReciboItemsRetenciones($fecha_desde, $fecha_hasta) {

        $c = new Criterio();
        $c->add(VtaReciboTipoEstado::GEN_ATTR_CODIGO, VtaReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);
        $c->add(VtaReciboItemRetencion::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(VtaReciboItemRetencion::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        $c->addTabla(VtaReciboItemRetencion::GEN_TABLA);
        $c->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_ID, VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ID);
        $c->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID);
        $c->addOrden(VtaReciboItemRetencion::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
        $c->setCriterios();

        $p = null;

        $vta_recibo_item_retencions = VtaReciboItemRetencion::getVtaReciboItemRetencions($p, $c);
        return $vta_recibo_item_retencions;
    }

    public function getStringConcatenadoParaResumenATM() {
        $texto = '';

        $vta_recibo_item = $this->getVtaReciboItem();
        $vta_recibo = $vta_recibo_item->getVtaRecibo();
        $vta_recibo_concepto = $vta_recibo_item->getVtaReciboConcepto();
        $cli_cliente = $vta_recibo->getCliCliente();

        $fecha_emision = $this->getFechaEmision();
        $codigo_retencion = $this->getNumeroComprobanteCompleto();
        $importe_imponible = round($this->getImporteBaseImponible(), 2);
        $importe_tributo = round($this->getImporteRetencion(), 2);
        $cliente_cuit = $cli_cliente->getCuit();
        $cliente_domicilio = $cli_cliente->getDomicilioLegal();
        $cliente_razon_social = $cli_cliente->getRazonSocial();

        $cliente_domicilio = str_replace(',', '', $cliente_domicilio);
        $cliente_razon_social = str_replace(',', '', $cliente_razon_social);

        $texto .= str_replace('/', '-', Gral::getFechaToWEB($fecha_emision));
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto .= $codigo_retencion;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto .= $cliente_razon_social;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto .= $cliente_domicilio;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto .= $cliente_cuit;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto .= $importe_imponible;

        //15-12-1999,412323,PEREZ JULIO,San Martín 1718,11-1111111-3,100.00,2.5        
        return $texto;
    }

    public function getGralCondicionIva() {
        return $this->getVtaReciboItem()->getVtaRecibo()->getGralCondicionIva();
    }

    public function getTipoComprobante() {
        return "Cbte " . $this->getVtaReciboItem()->getVtaReciboConcepto()->getDescripcion();
    }

    public function getNumeroComprobanteCompleto() {
        return $this->getNumeroComprobante();
        //return $this->getVtaReciboItem()->getVtaRecibo()->getNumeroComprobanteCompleto();
    }

    public function getCae() {
        return '';
    }

    public function getRazonSocial() {
        return $this->getVtaReciboItem()->getVtaRecibo()->getPersonaDescripcion();
    }

    public function getPersonaDescripcion() {
        return $this->getVtaReciboItem()->getVtaRecibo()->getPersonaDescripcion();
    }
    
    public function getCuit() {
        return $this->getVtaReciboItem()->getVtaRecibo()->getPersonaDocumento();
    }

    public function getArrIvaComprobanteFull() {
        return array();
    }

    public function getArrTributoComprobanteFull() {
        return array();
    }

    public function getImporteSubtotal($tipo_subtotal = false) {
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            return $this->getImporteBaseImponible();
        }
        return 0;
    }

    public function getImporteTotal() {
        return $this->getImporteRetencion();
    }

    public function getImporteIvaBaseImponible() {
        return 0;
    }

    public function getImporteIvaImporte() {
        return 0;
    }

    public function getImporteTributoBaseImponible() {
        return 0;
    }

    public function getImporteTributoImporte($codigo = false) {

        if ($codigo) {
            $vta_recibo_concepto = $this->getVtaReciboItem()->getVtaReciboConcepto();
            if ($vta_recibo_concepto) {

                // si es retencion de IIBB Misiones
                if ($vta_recibo_concepto->getCodigo() == VtaReciboConcepto::TIPO_RETENCION_IIBB_MNES) {
                    if ($codigo == PdeTributo::TRIBUTO_PERCEPCIONES_IIBB_MNES) {
                        return $this->getImporteRetencion();
                    }
                }

                // si es retencion de IIBB BsAs
                if ($vta_recibo_concepto->getCodigo() == VtaReciboConcepto::TIPO_RETENCION_IIBB_BSAS) {
                    if ($codigo == PdeTributo::TRIBUTO_PERCEPCIONES_IIBB_BSAS) {
                        return $this->getImporteRetencion();
                    }
                }

                // si es retencion de IVA
                if ($vta_recibo_concepto->getCodigo() == VtaReciboConcepto::TIPO_RETENCIONES_IVA) {
                    if ($codigo == PdeTributo::TRIBUTO_PERCEPCIONES_IVA) {
                        return $this->getImporteRetencion();
                    }
                }

                // si es retencion de GANANCIAS
                if ($vta_recibo_concepto->getCodigo() == VtaReciboConcepto::TIPO_RETENCIONES_GANANCIAS) {
                    if ($codigo == PdeTributo::TRIBUTO_PERCEPCIONES_IMPUESTOS_NACIONALES) {
                        return $this->getImporteRetencion();
                    }
                }

                // si es retencion de SUSS
                if ($vta_recibo_concepto->getCodigo() == VtaReciboConcepto::TIPO_RETENCIONES_SUSS) {
                    if ($codigo == PdeTributo::TRIBUTO_PERCEPCIONES_IMPUESTOS_NACIONALES) {
                        return $this->getImporteRetencion();
                    }
                }
            }
            return 0;
        } else {
            return $this->getImporteRetencion();
        }
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 14/03/2018 20:06.
     * Metodo que retorna el tipo comprobante min de una retencion.
     * @return String
     */
    public function getTipoComprobanteSiglas() {
        return "CBTE";
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 14/03/2018 20:06.
     * Metodo que retorna el tipo comprobante min de una retencion.
     * @return String
     */
    public function getTipoComprobanteMin() {
        return '';
        //return $this->getVtaReciboItem()->getVtaReciboConcepto()->getDescripcion();
    }

}

?>
