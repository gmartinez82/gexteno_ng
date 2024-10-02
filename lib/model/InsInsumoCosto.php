<?php

require_once "base/BInsInsumoCosto.php";

class InsInsumoCosto extends BInsInsumoCosto {

    const GEN_CLASE_AUDITORIA = false;

    /**
     * 
     */
    public function saveDesdeBackend() {
        $ins_insumo = $this->getInsInsumo();

        parent::saveDesdeBackend();

        // se deben actualizar las listas de precios
        $ins_insumo->setActualizarListasDePrecios();
    }
    
    /**
     * 
     * @param type $iva_incluido
     * @param type $gral_tipo_iva_id
     * @return type
     */
    public function getCostoNeto($iva_incluido = false, $gral_tipo_iva_id = false) {
        $importe_costo = $this->getCosto();
        
        if($iva_incluido){
            if($gral_tipo_iva_id){
                $gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);
            }else{
                $gral_tipo_iva = $this->getInsInsumo()->getGralTipoIvaCompraObj();
            }
            $importe_costo = $importe_costo * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_costo;
    }

}

?>