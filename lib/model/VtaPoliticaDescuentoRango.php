<?php

require_once "base/BVtaPoliticaDescuentoRango.php";

class VtaPoliticaDescuentoRango extends BVtaPoliticaDescuentoRango {

    public function saveDesdeBackend() {
        parent::saveDesdeBackend();
        
        // ----------------------------------------------------------------------
        // se reordenan rangos
        // ----------------------------------------------------------------------
        $this->setReordenarRangos();
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 21/07/2020 18:00
     * Metodo que retordena registros
     */
    public function setReordenarRangos(){
        $c = new Criterio();
        $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, $this->getVtaPoliticaDescuentoId(), Criterio::IGUAL);
        $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
        $c->addOrden(VtaPoliticaDescuentoRango::GEN_ATTR_CANTIDAD_DESDE, Criterio::_ASC);
        $c->setCriterios();
        
        $orden = 0;
        $vta_politica_descuento_rangos = VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangos(null, $c);
        foreach($vta_politica_descuento_rangos as $vta_politica_descuento_rango){
            $orden++;
            $vta_politica_descuento_rango->setOrden($orden);
            $vta_politica_descuento_rango->save();            
        }
    }
    
    public function getImporteCalculadoUnitario($importe_venta) {
        $importe_descuento = $this->getImporteCalculadoUnitarioDescuento($importe_venta);
        $importe_unitario = $importe_venta - $importe_descuento;

        return $importe_unitario;
    }

    public function getImporteCalculadoUnitarioDescuento($importe_venta) {
        $porcentaje_descuento = $this->getPorcentajeDescuento();
        $coeficiente_descuento = $porcentaje_descuento / 100;
        $importe_descuento = $importe_venta * $coeficiente_descuento;

        return $importe_descuento;
    }

    public function getImporteCalculadoTotal($importe_venta, $cantidad) {
        $importe_unitario = $this->getImporteCalculadoUnitario($importe_venta);
        $importe_total = $importe_unitario * $cantidad;

        return $importe_total;
    }

    public function getImporteCalculadoTotalDescuento($importe_venta, $cantidad) {
        $importe_descuento = $this->getImporteCalculadoUnitarioDescuento($importe_venta);
        $importe_total_descuento = $importe_descuento * $cantidad;

        return $importe_total_descuento;
    }

}

?>