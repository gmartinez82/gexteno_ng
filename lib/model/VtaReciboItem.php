<?php
require_once "base/BVtaReciboItem.php";

class VtaReciboItem extends BVtaReciboItem {
    /* Método que retorna un array con la descripcion extendida del objeto */

    public function getArrDescripcionExtendidaParaBackend() {
        $array = array();
        $array = array(
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
            ),
            'descripcion' => array(
                'label' => 'Descripcion',
                'dato' => $this->getDescripcion(),
            ),
            'vta_recibo' => array(
                'label' => 'Recibo',
                'dato' => $this->getVtaRecibo()->getDescripcion(),
            ),
            'vta_recibo_concepto' => array(
                'label' => 'Concepto',
                'dato' => $this->getVtaReciboConcepto()->getDescripcion(),
            ),
            'gral_tipo_iva' => array(
                'label' => 'TipoIva',
                'dato' => $this->getGralTipoIva()->getDescripcion(),
            ),
        );

        return $array;
    }

    public function getImporteUnitarioParaComprobante() {
        $vta_tipo_recibo = $this->getVtaRecibo()->getVtaTipoRecibo();

        switch ($vta_tipo_recibo->getCodigo()) {
            case VtaTipoRecibo::TIPO_RECIBO_A:
                $importe = $this->getImporteUnitario();
                break;
            case VtaTipoRecibo::TIPO_RECIBO_B:
                $importe = $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
                break;
            default:
                $importe = $this->getImporteUnitario() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        return $importe;
    }

    public function getImporteTotal() {
        $importe = $this->getImporteUnitario() * $this->getCantidad();
        return Gral::rnd($importe);
    }

    public function getImporteTotalParaComprobante() {
        $vta_tipo_recibo = $this->getVtaRecibo()->getVtaTipoRecibo();

        switch ($vta_tipo_recibo->getCodigo()) {
            case VtaTipoRecibo::TIPO_RECIBO_A:
                $importe = $this->getImporteTotal();
                break;
            case VtaTipoRecibo::TIPO_RECIBO_B:
                $importe = $this->getImporteTotal() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
                break;
            default:
                $importe = $this->getImporteTotal() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        return $importe;
    }

    public function getImporteIva() {
        $gral_tipo_iva = $this->getGralTipoIva();
        $valor_iva = $gral_tipo_iva->getValorIva();
        $coeficiente_iva = $valor_iva / 100;

        // se obtiene el importe total incluido en la nota de debito
        $importe = $this->getImporteTotal() * $coeficiente_iva;
        return Gral::rnd($importe);
    }

    /*
     * Metodo que se utiliza para las conciliaciones bancarias de TC/TD y otras
     * formas de pago que requieren conciliacion
     */

    public function getVtaReciboItemConciliadoActivo() {
        $criterio = new Criterio();
        $criterio->addTabla(VtaReciboItemConciliado::GEN_TABLA);
        $criterio->add(VtaReciboItemConciliado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->setCriterios();

        //1 recibo item conciliado o false
        $vta_recibo_item_conciliado = $this->getVtaReciboItemConciliado($criterio);
        if ($vta_recibo_item_conciliado) {
            return $vta_recibo_item_conciliado;
        }
        return false;
        //return $this->getVtaReciboItemConciliado();
    }


}

?>