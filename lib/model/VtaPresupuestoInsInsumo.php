<?php

require_once "base/BVtaPresupuestoInsInsumo.php";

class VtaPresupuestoInsInsumo extends BVtaPresupuestoInsInsumo {

    const PREFIJO_OV = 'OV-';

    public function getDescripcionx() {
        $texto = "";

        $texto = $this->getInsInsumo()->getDescripcion();

        return $texto;
    }

    public function setCancelarItemVtaPresupuestoGestionEdicion($observacion = '') {
        $vta_presupuesto_cancelacion = new VtaPresupuestoCancelacion();

        $vta_presupuesto_cancelacion->setDescripcion($this->getDescripcion());
        $vta_presupuesto_cancelacion->setVtaPresupuestoInsInsumoId($this->getId());
        $vta_presupuesto_cancelacion->setObservacion($observacion);
        $vta_presupuesto_cancelacion->save();

        $this->setEstado(0);
        $this->save();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 06/09/2017 09:00 hs.
     * Metodo que genera una orden de venta a partir del VtaPresupuestoInsInsumo.
     * @return Obj VtaOrdenVenta
     */
    public function setGenerarVtaOrdenVenta() {
        
        $cantidad = $this->getCantidad();
        
        $cantidad_bulto = 1;
        $ins_insumo_bulto = $this->getInsInsumoBulto();
        if ($ins_insumo_bulto->getId() != 'null') {
            $cantidad_bulto = $ins_insumo_bulto->getCantidad();
        }        


        // ----------------------------------------------------------------------
        // se registra la orden de venta
        // ----------------------------------------------------------------------
        $vta_orden_venta = new VtaOrdenVenta();
        $vta_orden_venta->setDescripcion($this->getDescripcion());
        $vta_orden_venta->setVtaPresupuestoId($this->getVtaPresupuestoId());
        $vta_orden_venta->setVtaPresupuestoInsInsumoId($this->getId());
        $vta_orden_venta->setInsInsumoId($this->getInsInsumoId());
        $vta_orden_venta->setGralTipoIvaId($this->getGralTipoIvaId());
        $vta_orden_venta->setInsTipoListaPrecioId($this->getInsListaPrecio()->getInsTipoListaPrecioId());
        $vta_orden_venta->setImporteUnitario($this->getImporteUnitario());
        $vta_orden_venta->setCantidad($cantidad * $cantidad_bulto);
        $vta_orden_venta->setDescuento($this->getDescuento());
        $vta_orden_venta->setGralSucursalId($this->getVtaPresupuesto()->getGralSucursalId());

        // ----------------------------------------------------------------------
        // se registra info del bulto
        // ----------------------------------------------------------------------
        $vta_orden_venta->setInsInsumoBultoId($this->getInsInsumoBultoId());
        $vta_orden_venta->setCantidadBulto($this->getCantidadBulto());
        
        // ----------------------------------------------------------------------
        // se registran politicas de descuento
        // ----------------------------------------------------------------------
        $vta_orden_venta->setVtaPoliticaDescuentoId($this->getVtaPoliticaDescuentoId());
        $vta_orden_venta->setVtaPoliticaDescuentoRangoId($this->getVtaPoliticaDescuentoRangoId());
        $vta_orden_venta->setPorcentajePoliticaDescuento($this->getPorcentajePoliticaDescuento());
        $vta_orden_venta->setImportePoliticaDescuento($this->getImportePoliticaDescuento());

        // ----------------------------------------------------------------------
        // se registran costos del venta del insumo
        // ----------------------------------------------------------------------
        $vta_orden_venta->setInsInsumoCostoId($this->getInsInsumoCostoId());
        $vta_orden_venta->setImporteCosto($this->getImporteCosto());

        $vta_orden_venta->setObservacion($this->getObservacion());
        $vta_orden_venta->setPorcentaje($this->getVtaPresupuesto()->getPorcentaje());
        $vta_orden_venta->setEstado(1);
        $vta_orden_venta->save();

        // ----------------------------------------------------------------------
        // se registra codigo de OV
        // ----------------------------------------------------------------------
        $vta_orden_venta->setCodigo(VtaOrdenVenta::PREFIJO_OV . str_pad($vta_orden_venta->getId(), 8, 0, STR_PAD_LEFT));
        $vta_orden_venta->save();

        // ----------------------------------------------------------------------
        // se registran los estados de la OV
        // ----------------------------------------------------------------------
        $vta_orden_venta->setVtaOrdenVentaEstado(VtaOrdenVentaTipoEstado::TIPO_ACTIVO);
        $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_NO_REMITIDO);
        $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_NO_FACTURADO);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_orden_venta->setActualizarResumenComprobante();
        
        return $vta_orden_venta;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 21/09/2017 09:00 hs.
     * Metodo retorna el importe con el descuento.
     * @return Float Importe
     */
    public function getImporteUnitarioConDescuento() {
        $importe_unitario = $this->getImporteUnitario();
        $importe_descuento = $importe_unitario * ($this->getDescuento() / 100);
        $importe_politica_descuento = $importe_unitario * ($this->getPorcentajePoliticaDescuento() / 100);
        $importe_unitario_con_descuento = $importe_unitario - $importe_politica_descuento - $importe_descuento;

        return $importe_unitario_con_descuento;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 10/10/2017 09:00 hs.
     * Metodo retorna el importe actual del InsInsumo.
     * @return Float Importe
     */
    public function getImporteUnitarioActual() {
        $ins_lista_precio = $this->getInsListaPrecio();
        $importe_unitario_actual = $ins_lista_precio->getImporteVenta();

        return $importe_unitario_actual;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 10/10/2017 09:00 hs.
     * Metodo retorna el importe actual del InsInsumo con el descuento.
     * @return Float Importe
     */
    public function getImporteUnitarioActualConDescuento() {
        $importe_unitario = $this->getImporteUnitario();
        $importe_descuento = $importe_unitario * ($this->getDescuento() / 100);
        $importe_politica_descuento = $importe_unitario * ($this->getPorcentajePoliticaDescuento() / 100);
        $importe_unitario_con_descuento = $importe_unitario - $importe_politica_descuento - $importe_descuento;

        return $importe_unitario_con_descuento;
    }

    /**
     * Autor: Pablo Rosen.
     * Fecha: 17/11/2020 21:09 hs.
     * Metodo retorna el importe total del insumo incluido al presupuesto.
     * @return Float Importe
     */
    public function getImporteSubtotal() {
        $importe_unitario_con_descuento = $this->getImporteUnitarioConDescuento();
        $cantidad = $this->getCantidad();

        $cantidad_bulto = 1;
        $ins_insumo_bulto = $this->getInsInsumoBulto();
        if ($ins_insumo_bulto->getId() != 'null') {
            $cantidad_bulto = $ins_insumo_bulto->getCantidad();
        }

        $importe_total_con_descuento = $importe_unitario_con_descuento * $cantidad * $cantidad_bulto;

        return $importe_total_con_descuento;
    }
    
    /**
     * Autor: Pablo Rosen.
     * Fecha: 17/11/2020 21:09 hs.
     * Metodo retorna el importe total del insumo incluido al presupuesto.
     * @return Float Importe
     */
    public function getImporteTotal() {
        $importe_unitario_con_descuento = $this->getImporteUnitarioConDescuento();
        $cantidad = $this->getCantidad();
        $gral_tipo_iva = $this->getGralTipoIva();

        $cantidad_bulto = 1;
        $ins_insumo_bulto = $this->getInsInsumoBulto();
        if ($ins_insumo_bulto->getId() != 'null') {
            $cantidad_bulto = $ins_insumo_bulto->getCantidad();
        }

        $importe_total_con_descuento = $importe_unitario_con_descuento * $cantidad * $cantidad_bulto * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();

        return $importe_total_con_descuento;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 10/10/2017 09:00 hs.
     * Metodo genera VtaPresupuestoConflicto en el caso de cambios de importes o existan conflictos por resolver.
     * @return Bol
     */
    public function setControlVtaPresupuestoConflicto() {

        return false; // temporalmente inhabilitado

        $vta_presupuesto = $this->getVtaPresupuesto();
        $vta_presupuesto_tipo_estado = $vta_presupuesto->getVtaPresupuestoTipoEstado();
        
        // ---------------------------------------------------------------------
        // excepcion para no afectar con conflictos presupuestos que se estan
        // en estado EN PROCESO TIENDA
        // ---------------------------------------------------------------------
        if($vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EN_PROCESO_TIENDA){
            return false;
        }
        
        $hay_conflicto = false;
        $hay_conflicto_pendiente = false;
        $hay_conflicto_resuelto = false;
        $vta_presupuesto_conflicto = false;

        $importe_unitario = $this->getImporteUnitario();
        $importe_unitario_actual = $this->getImporteUnitarioActual();

        $vta_presupuesto_conflictos_no_resueltos = $this->getVtaPresupuestoConflictos(null, null, true);
        $vta_presupuesto_conflictos_resueltos = $this->getVtaPresupuestoConflictos(null, null, false);

        // ---------------------------------------------------------------------
        // se recorre para determinar si hay conflictos pendientes, si los hay se actualizan los importes
        // ---------------------------------------------------------------------
        if (count($vta_presupuesto_conflictos_no_resueltos) > 0) {
            // existen conflictos no resueltos
            foreach ($vta_presupuesto_conflictos_no_resueltos as $vta_presupuesto_conflictos_no_resuelto) {
                $vta_presupuesto_conflictos_no_resuelto->setImporteInicial($importe_unitario);
                $vta_presupuesto_conflictos_no_resuelto->setImporteActualizado($importe_unitario_actual);
                $vta_presupuesto_conflictos_no_resuelto->save();
            }
            $hay_conflicto = true;
            $hay_conflicto_pendiente = true;
            $vta_presupuesto_conflicto = $vta_presupuesto_conflictos_no_resuelto;
        } elseif (count($vta_presupuesto_conflictos_resueltos) > 0) {
            // existen conflictos resueltos

            if (($importe_unitario != $importe_unitario_actual)) {
                foreach ($vta_presupuesto_conflictos_resueltos as $vta_presupuesto_conflicto_resuelto) {
                    $hay_conflicto_resuelto = true;
                    if ($importe_unitario_actual != $vta_presupuesto_conflicto_resuelto->getImporteActualizado()) {
                        $hay_conflicto_resuelto = false;
                    }
                }
            }
        }

        // ---------------------------------------------------------------------
        // Se crea un conflicto si no se encontraron conflictos anteriores pendientes ni resueltos
        // ---------------------------------------------------------------------
        if (!$hay_conflicto_pendiente && !$hay_conflicto_resuelto) {
            if (($importe_unitario != $importe_unitario_actual)) {

                $vta_orden_venta = $this->getVtaOrdenVenta();
                if (!$vta_orden_venta) {

                    $importe_diferencia = $importe_unitario_actual - $importe_unitario;

                    // ---------------------------------------------------------
                    // solamente puede generar conflicto cuando no ha generado aun orden de venta
                    // ---------------------------------------------------------
                    $vta_presupuesto_conflicto_nuevo = new VtaPresupuestoConflicto();
                    $vta_presupuesto_conflicto_nuevo->setVtaPresupuestoInsInsumoId($this->getId());
                    $vta_presupuesto_conflicto_nuevo->setImporteInicial($importe_unitario);
                    $vta_presupuesto_conflicto_nuevo->setImporteActualizado($importe_unitario_actual);
                    $vta_presupuesto_conflicto_nuevo->setImporteDiferencia($importe_diferencia);
                    $vta_presupuesto_conflicto_nuevo->setFechaConflicto(Gral::getFechaActual());
                    $vta_presupuesto_conflicto_nuevo->setFechaResolucion(Gral::getFechaActual());
                    $vta_presupuesto_conflicto_nuevo->setResuelto(0);
                    $vta_presupuesto_conflicto_nuevo->setEstado(1);
                    $vta_presupuesto_conflicto_nuevo->save();

                    $vta_presupuesto_conflicto_nuevo->setCodigo(VtaPresupuestoConflicto::PREFIJO_CONF . str_pad($vta_presupuesto_conflicto_nuevo->getId(), 8, 0, STR_PAD_LEFT));
                    $vta_presupuesto_conflicto_nuevo->save();
                    
                    $hay_conflicto = true;
                    $vta_presupuesto_conflicto = $vta_presupuesto_conflicto_nuevo;
                    //Gral::prr($vta_presupuesto_conflicto_nuevo);
                    
                    // ---------------------------------------------------------
                    // se marca el presupuesto con conflicto
                    // ---------------------------------------------------------
                    $this->setConflicto(1);
                    $this->save();
                    
                    // ---------------------------------------------------------
                    // se marca el presupuesto con conflicto
                    // ---------------------------------------------------------
                    $vta_presupuesto->setConflicto(1);
                    $vta_presupuesto->save();
                    //Gral::prr($vta_presupuesto);
                }
            }
        }

        return $vta_presupuesto_conflicto;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 10/10/2017 09:00 hs.
     * Metodo que elimina todos los conflictos que tiene el insumo del presupuesto.
     * @return 
     */
    public function deleteAllVtaPresupuestoConflicto() {
        $vta_presupuesto_conflictos = $this->getVtaPresupuestoConflictos();

        foreach ($vta_presupuesto_conflictos as $vta_presupuesto_conflicto) {
            $vta_presupuesto_conflicto->deleteAll();
        }
    }

    /**
     * 
     */
    public function setRecalcularImportePorAfectaciones() {

        // ---------------------------------------------------------------------
        // TEMPORAL 
        //if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_EDITAR_IMPORTE')) {
            
        //} else {
            //$this->setImporteUnitario(0); // temporal solo para que comiencen a operar los preventistas
            //$this->save(); // temporal solo para que comiencen a operar los preventistas
            //return; // temporal solo para que comiencen a operar los preventistas            
        //}

        $ins_insumo = $this->getInsInsumo();
        $ins_lista_precio = $this->getInsListaPrecio();
        $ins_tipo_lista_precio = $ins_lista_precio->getInsTipoListaPrecio();
        $cantidad = $this->getCantidad();
        $importe_unitario = $this->getImporteUnitario();

        $ins_insumo_bulto = $this->getInsInsumoBulto();
        if ($ins_insumo_bulto->getId() != 'null') {
            //$importe_unitario = $importe_unitario * $ins_insumo_bulto->getCantidad();
            //$this->setImporteUnitario($importe_unitario);
        }


        // ----------------------------------------------------------------------
        // Se deterina si existe politica de descuento
        // ----------------------------------------------------------------------
        $vta_politica_descuento_rango = $ins_insumo->getVtaPoliticaDescuentoRangoActiva($ins_tipo_lista_precio, $cantidad);

        // -----------------------------------------------------------------
        // se registra politica de descuento si la tiene
        // -----------------------------------------------------------------
        if ($vta_politica_descuento_rango) {
            $this->setVtaPoliticaDescuentoRangoId($vta_politica_descuento_rango->getId());
            $this->setVtaPoliticaDescuentoId($vta_politica_descuento_rango->getVtaPoliticaDescuentoId());
            $this->setPorcentajePoliticaDescuento($vta_politica_descuento_rango->getPorcentajeDescuento());
            $this->setImportePoliticaDescuento((($vta_politica_descuento_rango->getPorcentajeDescuento() / 100)) * $importe_unitario);
        } else {
            $this->setVtaPoliticaDescuentoRangoId(null);
            $this->setVtaPoliticaDescuentoId(null);
            $this->setPorcentajePoliticaDescuento(0);
            $this->setImportePoliticaDescuento(0);            
        }
        $this->save();
                
        // -----------------------------------------------------------------
        // se determina si existe conflicto para cada una de los items del presupuesto
        // -----------------------------------------------------------------
        $this->getVtaPresupuesto()->setControlVtaPresupuestoConflicto();
    }

    /**
     * 
     * @return type
     */
    public function getImporteUnitarioParaComprobante() {
        $cli_cliente = $this->getVtaPresupuesto()->getCliCliente();

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            switch ($cli_cliente->getGralCondicionIva()->getCodigo()) {
                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                    $importe = $this->getImporteUnitarioConDescuento();
                    break;
                default:
                    $importe = $this->getImporteUnitarioConDescuento() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
            }
        } else {
            $importe = $this->getImporteUnitarioConDescuento() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }

        return $importe;
    }

    /**
     * 
     * @return type
     */
    public function getImporteTotalParaComprobante() {
        $cli_cliente = $this->getVtaPresupuesto()->getCliCliente();

        $cantidad = $this->getCantidad();
        
        $cantidad_bulto = 1;
        $ins_insumo_bulto = $this->getInsInsumoBulto();
        if ($ins_insumo_bulto->getId() != 'null') {
            $cantidad_bulto = $ins_insumo_bulto->getCantidad();
        }        

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            switch ($cli_cliente->getGralCondicionIva()->getCodigo()) {
                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                    $importe = $this->getImporteUnitarioConDescuento() * ($cantidad * $cantidad_bulto);
                    break;
                default:
                    $importe = $this->getImporteUnitarioConDescuento() * ($cantidad * $cantidad_bulto) * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
            }
        } else {
            $importe = $this->getImporteUnitarioConDescuento() * ($cantidad * $cantidad_bulto) * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo();
        }

        return $importe;
    }
    
    /**
     * Calcula la cantidad del presupuesto tomando en cuenta los insumos con bulto
     * @return integer 
     * @creado_por Pablo
     */
    public function getCantidadTotalCalculada()
    {
        $cantidad = $this->getCantidad();
            
        $cantidad_bulto = 1;
        $ins_insumo_bulto = $this->getInsInsumoBulto();
        if ($ins_insumo_bulto->getId() != 'null') {
            $cantidad_bulto = $ins_insumo_bulto->getCantidad();
        }
        
        return $cantidad * $cantidad_bulto;
    }

}

?>