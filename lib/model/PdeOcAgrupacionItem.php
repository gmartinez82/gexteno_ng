<?php 
require_once "base/BPdeOcAgrupacionItem.php"; 
class PdeOcAgrupacionItem extends BPdeOcAgrupacionItem
{
    /**
     * 
     * @return type
     */
    public function getDescripcionFull() {
        $texto = "";

        $pde_oc_agrupacion = $this->getPdeOcAgrupacion();
        $ins_insumo = $this->getInsInsumo();
        $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
        $prv_proveedor = $pde_oc_agrupacion->getPrvProveedor();

        $texto.= $this->getCantidad();
        $texto.= " ";
        $texto.= ($ins_unidad_medida) ? substr($ins_unidad_medida->getDescripcion(), 0, 3) : "";
        $texto.= " (";
        $texto.= $prv_proveedor->getDescripcion();
        $texto.= ") el ";
        $texto.= Gral::getFechaToWEB($pde_oc_agrupacion->getCreado());

        return $texto;
    }
    
    /**
     * 
     * @return type
     */
    public function getImporteTotal(){
        $importe = $this->getImporteUnidad() * $this->getCantidad();
        return $importe;
    }
    
    /**
     * 
     * @param type $iva_incluido
     * @param type $gral_tipo_iva_id
     * @return type
     */
    public function getImporteUnidadNeto($iva_incluido = false, $gral_tipo_iva_id = false) {
        $importe_unidad = $this->getImporteUnidad();
        
        if($iva_incluido){
            if($gral_tipo_iva_id){
                $gral_tipo_iva = GralTipoIva::getOxId($gral_tipo_iva_id);
            }else{
                $gral_tipo_iva = $this->getInsInsumo()->getGralTipoIvaCompraObj();
            }
            $importe_unidad = $importe_unidad * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        return $importe_unidad;
    }
    
    /**
     * 
     * @return type
     */
    public function getImporteUnidadConIva(){
        $gral_tipo_iva = $this->getGralTipoIva();
        $importe = $this->getImporteUnidad();
     
        $importe_con_iva = $importe * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
        return $importe_con_iva;
    }
    
    /**
     * 
     * @return type
     */
    public function getImporteTotalConIva(){
        $gral_tipo_iva = $this->getGralTipoIva();
        $importe = $this->getImporteTotal();
        
        $importe_con_iva = $importe * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
        return $importe_con_iva;
    }
    
}
?>