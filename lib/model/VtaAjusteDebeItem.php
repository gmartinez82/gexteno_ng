<?php 
require_once "base/BVtaAjusteDebeItem.php"; 
class VtaAjusteDebeItem extends BVtaAjusteDebeItem
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
            'vta_ajuste' => array(
                'label' => 'Ajuste',
                'dato' => $this->getVtaAjusteDebe()->getDescripcion(),
            ),
            'vta_ajuste_concepto' => array(
                'label' => 'Concepto',
                'dato' => $this->getVtaAjusteConcepto()->getDescripcion(),
            ),
            'gral_tipo_iva' => array(
                'label' => 'TipoIva',
                'dato' => $this->getGralTipoIva()->getDescripcion(),
            ),
        );

        return $array;
    }

    public function getImporteUnitarioParaComprobante() {
        $vta_tipo_ajuste_debe = $this->getVtaAjusteDebe()->getVtaTipoAjusteDebe();

        switch ($vta_tipo_ajuste_debe->getCodigo()) {
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
        $vta_tipo_ajuste_debe = $this->getVtaAjusteDebe()->getVtaTipoAjusteDebe();

        switch ($vta_tipo_ajuste_debe->getCodigo()) {
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

    public function getVtaAjusteDebeItemConciliadoActivo() {
        $criterio = new Criterio();
        $criterio->addTabla(VtaAjusteDebeItemConciliado::GEN_TABLA);
        $criterio->add(VtaAjusteDebeItemConciliado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->setCriterios();

        //1 ajuste item conciliado o false
        $vta_ajuste_debe_item_conciliado = $this->getVtaAjusteDebeItemConciliado($criterio);
        if ($vta_ajuste_debe_item_conciliado) {
            return $vta_ajuste_debe_item_conciliado;
        }
        return false;
        //return $this->getVtaAjusteItemConciliado();
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
        $c->add(VtaAjusteDebeItem::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GralTipoIva::GEN_ATTR_CODIGO, $gral_tipo_iva_codigo, Criterio::IGUAL);
        $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
        $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_ID, VtaAjusteDebeItem::GEN_ATTR_VTA_AJUSTE_DEBE_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaAjusteDebeItem::GEN_ATTR_GRAL_TIPO_IVA_ID, 'LEFT JOIN');
        $c->setCriterios();
        $vta_ajuste_debe_items = VtaAjusteDebeItem::getVtaAjusteDebeItems(null, $c);
        //Gral::prr($vta_ajuste_debe_items);
        
        foreach($vta_ajuste_debe_items as $vta_ajuste_debe_item){
            $importe_total = $vta_ajuste_debe_item->getImporteUnitario() * $vta_ajuste_debe_item->getCantidad() * $vta_ajuste_debe_item->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_total;
    }
    
}
?>