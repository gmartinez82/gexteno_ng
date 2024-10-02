<?php

require_once "base/BPdeFacturaPdeOc.php";

class PdeFacturaPdeOc extends BPdeFacturaPdeOc {

    /**
     * Autor: Pablo Rosen
     * Fecha: 10/09/2018 14:04 hs.
     * Metodo que retorna el valor del item de la factura/OC con el descuento
     * @return Float
     */
    public function getImporteUnitarioConDescuento() {
        $importe_unitario = $this->getImporteUnitario();
        $porcentaje_descuento = $this->getPorcentajeDescuento() / 100;
        $importe_descuento = $porcentaje_descuento * $importe_unitario;
        $importe_unitario_con_descuento = $importe_unitario - $importe_descuento;

        return $importe_unitario_con_descuento;
    }

    public function getImporteTotalConDescuento() {
        $cantidad = $this->getCantidad();
        $importe_total = $this->getImporteUnitario();
        $porcentaje_descuento = $this->getPorcentajeDescuento() / 100;
        $importe_descuento = $porcentaje_descuento * $importe_total;
        $importe_total_con_descuento = ($importe_total - $importe_descuento) * $cantidad;

        return $importe_total_con_descuento;
    }

    /**
     * 
     * @param type $porcentaje
     * @return type
     */
    public function getImporteAfectadoParaGralCentroCosto($porcentaje) {
        return $this->getImporteTotalConDescuento() * ($porcentaje / 100);
    }

    /**
     * 
     * @param type $observacion
     */
    public function setDesvincularOC($observacion) {
        $pde_oc = $this->getPdeOc();
        if($pde_oc){
            $pde_oc->setRetrotraerPdeOcTipoEstadoFacturacion($observacion);
        }
        $this->delete();        
    }

}

?>