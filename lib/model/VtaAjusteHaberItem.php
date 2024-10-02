<?php 
require_once "base/BVtaAjusteHaberItem.php"; 
class VtaAjusteHaberItem extends BVtaAjusteHaberItem
{
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
            'vta_ajuste_haber' => array(
                'label' => 'Ajuste Haber',
                'dato' => $this->getVtaAjusteHaber()->getDescripcion(),
            ),
            'vta_ajuste_haber_concepto' => array(
                'label' => 'Concepto',
                'dato' => $this->getVtaAjusteHaberConcepto()->getDescripcion(),
            ),
            'gral_tipo_iva' => array(
                'label' => 'TipoIva',
                'dato' => $this->getGralTipoIva()->getDescripcion(),
            ),
        );

        return $array;
    }

    public function getImporteUnitarioParaComprobante() {
        $vta_tipo_ajuste_haber = $this->getVtaAjusteHaber()->getVtaTipoAjusteHaber();

        switch ($vta_tipo_ajuste_haber->getCodigo()) {
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
        $vta_tipo_ajuste_haber = $this->getVtaAjusteHaber()->getVtaTipoAjusteHaber();

        switch ($vta_tipo_ajuste_haber->getCodigo()) {
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

    public function getVtaAjusteHaberItemConciliadoActivo() {
        $criterio = new Criterio();
        $criterio->addTabla(VtaAjusteHaberItemConciliado::GEN_TABLA);
        $criterio->add(VtaAjusteHaberItemConciliado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->setCriterios();

        //1 recibo item conciliado o false
        $vta_ajuste_haber_item_conciliado = $this->getVtaAjusteHaberItemConciliado($criterio);
        if ($vta_ajuste_haber_item_conciliado) {
            return $vta_ajuste_haber_item_conciliado;
        }
        return false;
        //return $this->getVtaAjusteHaberItemConciliado();
    }
}
?>