<?php

require_once "base/BVtaOrdenVenta.php";

class VtaOrdenVenta extends BVtaOrdenVenta {

    const PREFIJO_OV = 'OV-';

    static function getFiltrosArrGral() {
        $arr = array('clase' => 'VtaOrdenVenta', 'tabla' => 'vta_orden_venta', 'archivo' => 'vta_orden_venta_gestion');
        $arr = serialize($arr);
        $arr = urlencode($arr);
        return $arr;
    }

    /**
     * Metodo que permite configurar el alcance a nivel de registros de los usuarios
     * @param type $criterio: es el criterio a intervenir
     * @return type
     */
    static function setAplicarFiltrosDeAlcance($criterio) {

        // ---------------------------------------------------------------------
        // se consulta el alcance de sucursales del usuario
        // ---------------------------------------------------------------------
        $us_usuario_autenticado = UsUsuario::autenticado();
        if ($us_usuario_autenticado) {
            $gral_sucursals_autorizadas_ids = $us_usuario_autenticado->getGralSucursalUsUsuariosId();
        }

        $vta_vendedor_autenticado = $us_usuario_autenticado->getVtaVendedor();
        if ($vta_vendedor_autenticado) {
            // -----------------------------------------------------------------
            // si es vendedor
            // -----------------------------------------------------------------
            $vta_tipo_vendedor = $vta_vendedor_autenticado->getVtaTipoVendedor();
            switch ($vta_tipo_vendedor->getCodigo()) {
                case VtaTipoVendedor::TIPO_PREVENTISTA:
                    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_autenticado->getId(), Criterio::IGUAL);
                    $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
                    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
                    break;
                default:
                    $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursals_autorizadas_ids, Criterio::IN_ARRAY);
                    $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
                    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
            }
        } else {
            // -----------------------------------------------------------------
            // si no es vendedor
            // -----------------------------------------------------------------
            $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursals_autorizadas_ids, Criterio::IN_ARRAY);
            $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
        }

        return $criterio;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 06/09/2017 08:00 hs.
     * Metodo que registra un nuevo estado para la orden de venta.
     * @return Obj VtaOrdenVentaEstado
     */
    public function setVtaOrdenVentaEstado($codigo, $observacion = '') {
        $inicial = 1;
        foreach ($this->getVtaOrdenVentaEstados() as $vta_orden_venta_estado) {
            $vta_orden_venta_estado->setActual(0);
            $vta_orden_venta_estado->save();

            $inicial = 0;
        }

        // se agrega el nuevo estado de la orden de venta
        $vta_orden_venta_tipo_estado = VtaOrdenVentaTipoEstado::getOxCodigo($codigo);

        $vta_orden_venta_estado = new VtaOrdenVentaEstado();
        $vta_orden_venta_estado->setVtaOrdenVentaId($this->getId());
        $vta_orden_venta_estado->setVtaOrdenVentaTipoEstadoId($vta_orden_venta_tipo_estado->getId());
        $vta_orden_venta_estado->setInicial($inicial);
        $vta_orden_venta_estado->setActual(1);
        $vta_orden_venta_estado->setObservacion($observacion);
        $vta_orden_venta_estado->save();

        // actualizamos el estado en vta_orden_venta        
        $this->setVtaOrdenVentaTipoEstadoId($vta_orden_venta_tipo_estado->getId());
        $this->save();

        return $vta_orden_venta_estado;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 26/09/2017 11:07 hs.
     * Metodo que retorna el estado actual de la orden de venta.
     * @return Obj VtaOrdenVentaEstado
     */
    public function getVtaOrdenVentaEstadoActual() {
        $c = new Criterio();
        $c->add(VtaOrdenVentaEstado::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaOrdenVentaEstado::GEN_TABLA);
        $c->setCriterios();

        $vta_orden_venta_estados = VtaOrdenVentaEstado::getVtaOrdenVentaEstados(null, $c);
        foreach ($vta_orden_venta_estados as $vta_orden_venta_estado) {
            return $vta_orden_venta_estado;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna el tipo de estado actual de la orden de venta.
     * @return Obj VtaOrdenVentaEstado
     */
    public function getVtaOrdenVentaTipoEstadoActual() {
        $vta_orden_venta_actual = $this->getVtaOrdenVentaEstadoActual();
        if ($vta_orden_venta_actual) {
            return $vta_orden_venta_actual->getVtaOrdenVentaTipoEstado();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna si la orden de venta esta en un estado terminal.
     * @return Bool
     */
    public function getVtaOrdenVentaTipoEstadoActualTerminal() {
        $terminal = $this->getVtaOrdenVentaTipoEstadoActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna la cantidad de ins_insumos disponibles.
     * @return Float
     */
    public function getCantidadDisponibleEnRemito() {
        $cantidad = $this->getCantidad();
        $cantidad_en_remito = $this->getCantidadEnRemito($incluir_otros = true);
        
        $cantidad_disponible = $cantidad - $cantidad_en_remito;
        return $cantidad_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna la cantidad de ins_insumos disponibles.
     * @return Float
     */
    public function getCantidadDisponibleEnRemitoAjuste() {
        $cantidad = $this->getCantidad();
        $cantidad_en_remito = $this->getCantidadEnRemito($incluir_otros = true);
        
        $cantidad_disponible = $cantidad - $cantidad_en_remito;
        return $cantidad_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/10/2017 11:00 hs.
     * Metodo que retorna la cantidad de ins_insumos en los remitos.
     * @return Float
     */
    public function getCantidadEnRemito($incluir_otros = true) {
        $cantidad_en_remito = 0;
        $criterio = new Criterio();
        $criterio->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);
        $criterio->setCriterios();

        $vta_remito_vta_orden_ventas = $this->getVtaRemitoVtaOrdenVentas(null, $criterio, true);

        foreach ($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta) {
            $cantidad_en_remito += $vta_remito_vta_orden_venta->getCantidad();
        }
        
        // ---------------------------------------------------------------------
        // se incluyen otros comprobantes que afectan a la cantidad
        // ---------------------------------------------------------------------
        if($incluir_otros){
            $cantidad_en_remito += $this->getCantidadEnRemitoAjuste($incluir_otros = false);
        }
        
        return $cantidad_en_remito;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/10/2017 11:00 hs.
     * Metodo que retorna la cantidad de ins_insumos en los remitos.
     * @return Float
     */
    public function getCantidadEnRemitoAjuste($incluir_otros = true) {
        $cantidad_en_remito_ajuste = 0;
        $criterio = new Criterio();
        $criterio->addTabla(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA);
        $criterio->setCriterios();

        $vta_remito_ajuste_vta_orden_ventas = $this->getVtaRemitoAjusteVtaOrdenVentas(null, $criterio, true);

        foreach ($vta_remito_ajuste_vta_orden_ventas as $vta_remito_ajuste_vta_orden_venta) {
            $cantidad_en_remito_ajuste += $vta_remito_ajuste_vta_orden_venta->getCantidad();
        }
        
        // ---------------------------------------------------------------------
        // se incluyen otros comprobantes que afectan a la cantidad
        // ---------------------------------------------------------------------
        if($incluir_otros){
            $cantidad_en_remito_ajuste += $this->getCantidadEnRemito($incluir_otros = false);
        }

        return $cantidad_en_remito_ajuste;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 11/09/2017 08:00 hs.
     * Metodo que retorna el presupuesto al que pertenece la OV.
     * @return Obj VtaPresupuesto
     */
    public function getVtaPresupuesto_OLD() {
        $vta_presupuesto_ins_insumo = $this->getVtaPresupuestoInsInsumo();
        if ($vta_presupuesto_ins_insumo) {
            return $vta_presupuesto_ins_insumo->getVtaPresupuesto();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 11/09/2017 08:00 hs.
     * Metodo que retorna el nombre del cliente del presupuesto.
     * @return String
     */
    public function getPersonaDescripcion() {
        $vta_presupuesto = $this->getVtaPresupuesto();

        if ($vta_presupuesto) {
            return $vta_presupuesto->getPersonaDescripcion();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 29/09/2017 08:00 hs.
     * Metodo que retorna el remito de la OV.
     * @return Obj VtaRemito
     */
    public function getVtaRemito() {
        $vta_remito_vta_orden_ventas = $this->getVtaRemitoVtaOrdenVentas(null, null, true);

        foreach ($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta) {
            return $vta_remito_vta_orden_venta->getVtaremito();
        }

        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 29/09/2017 08:00 hs.
     * Metodo que retorna el remito de la OV.
     * @return Obj VtaRemito
     */
    public function getVtaRemitoAjuste() {
        $vta_remito_ajuste_vta_orden_ventas = $this->getVtaRemitoAjusteVtaOrdenVentas(null, null, true);

        foreach ($vta_remito_ajuste_vta_orden_ventas as $vta_remito_ajuste_vta_orden_venta) {
            return $vta_remito_ajuste_vta_orden_venta->getVtaRemitoAjuste();
        }

        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 29/09/2017 11:07 hs.
     * Metodo que retorna el valor de la OV con el descuento.
     * @return Float
     */
    public function getImporteUnitarioConDescuento() {
        $importe_unitario = $this->getImporteUnitario();
        $porcentaje_descuento = $this->getDescuento() / 100;
        $importe_descuento = $porcentaje_descuento * $importe_unitario;
        $importe_politica_descuento = $importe_unitario * ($this->getPorcentajePoliticaDescuento() / 100);
        $importe_unitario_con_descuento = $importe_unitario - $importe_politica_descuento - $importe_descuento;

        return $importe_unitario_con_descuento;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 29/09/2017 11:07 hs.
     * Metodo que retorna el valor de la OV con el descuento.
     * @return Float
     */
    public function getImporteUnitarioSinDescuentoConIva() {
        $gral_tipo_iva = $this->getGralTipoIva();
        
        $importe = $this->getImporteUnitario();
        $importe = $importe * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo($this->getPorcentaje());
        
        return $importe;
    }
    
    /**
     * Autor: Pablo Rosen.
     * Fecha: 11/11/2020 17:17.
     * Metodo que retorna el valor total de la OV con el descuento.
     * @return Float
     */
    public function getImporteTotalConDescuento() {
        $importe_unitario = $this->getImporteUnitario();
        $porcentaje_descuento = $this->getDescuento() / 100;
        $importe_descuento = $porcentaje_descuento * $importe_unitario;
        $cantidad = $this->getCantidad();
        $importe_unitario_con_descuento = ($importe_unitario - $importe_descuento) * $cantidad;

        return $importe_unitario_con_descuento;
    }

    /**
     * Autor: Pablo Rosen.
     * Fecha: 11/11/2020 17:17.
     * Metodo que retorna el valor total de la OV con el descuento.
     * @return Float
     */
    public function getImporteTotalConIva() {
        $gral_tipo_iva = $this->getGralTipoIva();
        $importe_unitario = $this->getImporteUnitario();
        $porcentaje_descuento = $this->getDescuento() / 100;
        $importe_descuento = $porcentaje_descuento * $importe_unitario;
        $cantidad = $this->getCantidad();
        $importe_unitario_con_descuento = ($importe_unitario - $importe_descuento) * $cantidad * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo($this->getPorcentaje());

        return $importe_unitario_con_descuento;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 15/02/2021 13:01
     * Metodo que retorna el importe subtotal
     * @return Float
     */
    public function getImporteSubtotal() {
        $importe = $this->getImporteUnitarioConDescuento() * $this->getCantidad();
        return $importe;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 15/02/2021 13:01
     * Metodo que retorna el importe total
     * @return Float
     */
    public function getImporteTotal() {
        $importe = $this->getImporteSubtotal() * $this->getGralTipoIva()->getValorIvaDecimalParaSumarEnCalculo($this->getPorcentaje());
        return $importe;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/10/2017 11:07 hs.
     * Metodo que retorna el importe total del iva.
     * @return Float
     */
    public function getIvaVtaOrdenVenta() {
        $porcentaje_iva = $this->getGralTipoIva()->getValorIva() / 100;
        $porcentaje_iva_exencion = $this->getPorcentaje() / 100;
        $importe_unitario = $this->getImporteUnitarioConDescuento();
        $cantidad = $this->getCantidad();
        $iva = $porcentaje_iva * $porcentaje_iva_exencion * $importe_unitario * $cantidad;

        return $iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 06/10/2017 11:07 hs.
     * Metodo que retorna si la OV estuvo en el remito.
     * @return Obj VtaOrdenVentaEstadoRemision
     */
    public function getVtaOrdenVentaEstadoEnRemito() {
        $vta_orden_venta_tipo_estado_remison = VtaOrdenVentaTipoEstadoRemision::getOxCodigo(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_REMITO);

        $c = new Criterio();
        $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, $vta_orden_venta_tipo_estado_remison->getId(), Criterio::IGUAL);
        $c->addTabla(VtaOrdenVentaEstadoRemision::GEN_TABLA);
        $c->setCriterios();

        $vta_orden_venta_estado_remisions = VtaOrdenVentaEstadoRemision::getVtaOrdenVentaEstadoRemisions(null, $c);
        foreach ($vta_orden_venta_estado_remisions as $vta_orden_venta_estado_remision) {
            return $vta_orden_venta_estado_remision;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 06/10/2017 11:07 hs.
     * Metodo que retorna si la OV estuvo en el remito.
     * @return Obj VtaOrdenVentaEstadoRemision
     */
    public function getVtaOrdenVentaEstadoEnRemitoAjuste() {
        $vta_orden_venta_tipo_estado_remison = VtaOrdenVentaTipoEstadoRemision::getOxCodigo(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_AJUSTE);

        $c = new Criterio();
        $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID, $vta_orden_venta_tipo_estado_remison->getId(), Criterio::IGUAL);
        $c->addTabla(VtaOrdenVentaEstadoRemision::GEN_TABLA);
        $c->setCriterios();

        $vta_orden_venta_estado_remisions = VtaOrdenVentaEstadoRemision::getVtaOrdenVentaEstadoRemisions(null, $c);
        foreach ($vta_orden_venta_estado_remisions as $vta_orden_venta_estado_remision) {
            return $vta_orden_venta_estado_remision;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna el remito de la OV.
     * @return Obj VtaRemito
     */
    public function getVtaFactura() {
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, null, true);

        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            return $vta_factura_vta_orden_venta->getVtaFactura();
        }

        return false;
    }
    
    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna el remito de la OV.
     * @return Obj VtaRemito
     */
    public function getVtaAjusteDebe() {
        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, null, true);

        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            return $vta_ajuste_debe_vta_orden_venta->getVtaAjusteDebe();
        }

        return false;
    }    

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que registra un nuevo estado de facturacion para la orden de venta.
     * @return Obj VtaOrdenVentaEstadoFacturacion
     */
    public function setVtaOrdenVentaEstadoFacturacion($codigo, $observacion = '') {
        $inicial = 1;
        foreach ($this->getVtaOrdenVentaEstadoFacturacions() as $vta_orden_venta_estado_facturacion) {
            $vta_orden_venta_estado_facturacion->setActual(0);
            $vta_orden_venta_estado_facturacion->save();

            $inicial = 0;
        }

        // se agrega el nuevo estado de la orden de venta
        $vta_orden_venta_tipo_estado_facturacion = VtaOrdenVentaTipoEstadoFacturacion::getOxCodigo($codigo);

        $vta_orden_venta_estado_facturacion = new VtaOrdenVentaEstadoFacturacion();
        $vta_orden_venta_estado_facturacion->setVtaOrdenVentaId($this->getId());
        $vta_orden_venta_estado_facturacion->setVtaOrdenVentaTipoEstadoFacturacionId($vta_orden_venta_tipo_estado_facturacion->getId());
        $vta_orden_venta_estado_facturacion->setInicial($inicial);
        $vta_orden_venta_estado_facturacion->setActual(1);
        $vta_orden_venta_estado_facturacion->setObservacion($observacion);
        $vta_orden_venta_estado_facturacion->save();

        // actualizamos el estado en vta_orden_venta        
        $this->setVtaOrdenVentaTipoEstadoFacturacionId($vta_orden_venta_tipo_estado_facturacion->getId());
        $this->save();

        return $vta_orden_venta_estado_facturacion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna el estado de facturacion actual de la orden de venta.
     * @return Obj VtaOrdenVentaEstado
     */
    public function getVtaOrdenVentaEstadoFacturacionActual() {
        $c = new Criterio();
        $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaOrdenVentaEstadoFacturacion::GEN_TABLA);
        $c->setCriterios();

        $vta_orden_venta_estado_facturacions = VtaOrdenVentaEstadoFacturacion::getVtaOrdenVentaEstadoFacturacions(null, $c);
        foreach ($vta_orden_venta_estado_facturacions as $vta_orden_venta_estado_facturacion) {
            return $vta_orden_venta_estado_facturacion;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna el tipo de estado facturacion actual de la orden de venta.
     * @return Obj VtaOrdenVentaEstadoFacturacion
     */
    public function getVtaOrdenVentaTipoEstadoFacturacionActual() {
        $vta_orden_venta_actual = $this->getVtaOrdenVentaEstadoFacturacionActual();
        if ($vta_orden_venta_actual) {
            return $vta_orden_venta_actual->getVtaOrdenVentaTipoEstadoFacturacion();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna si la orden de venta esta en un estado terminal.
     * @return Bool
     */
    public function getVtaOrdenVentaTipoEstadoFacturacionActualTerminal() {
        $terminal = $this->getVtaOrdenVentaTipoEstadoFacturacionActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 11:07 hs.
     * Metodo que retorna si la OV estuvo en una factura.
     * @return Obj VtaOrdenVentaEstado
     */
    public function getVtaOrdenVentaEstadoEnFactura() {
        $vta_orden_venta_tipo_estado_facturacion = VtaOrdenVentaTipoEstadoFacturacion::getOxCodigo(VtaOrdenVentaTipoEstadoFacturacion::TIPO_NO_FACTURADO);

        $c = new Criterio();
        $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FATURACION_ID, $vta_orden_venta_tipo_estado_facturacion->getId(), Criterio::IGUAL);
        $c->addTabla(VtaOrdenVentaEstadoFacturacion::GEN_TABLA);
        $c->setCriterios();

        $vta_orden_venta_estado_facturacions = VtaOrdenVentaEstadoFacturacion::getVtaOrdenVentaEstadoFacturacions(null, $c);
        foreach ($vta_orden_venta_estado_facturacions as $vta_orden_venta_estado_facturacion) {
            return $vta_orden_venta_estado_facturacion;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna la cantidad de ins_insumos disponibles para facturar en la OV.
     * @return Float
     */
    public function getCantidadDisponibleEnFactura() {
        $cantidad = $this->getCantidad();
        $cantidad_en_remito = $this->getCantidadEnFactura($incluir_otros = true);
        
        $cantidad_disponible = $cantidad - $cantidad_en_remito;
        return $cantidad_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna la cantidad de ins_insumos disponibles para facturar en la OV.
     * @return Float
     */
    public function getCantidadEnFactura($incluir_otros = true) {
        $cantidad_en_factura = 0;

        $criterio = new Criterio();
        //$criterio->add(VtaFacturaTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $criterio->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
        $criterio->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
        $criterio->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID);
        $criterio->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID);

        $criterio->setCriterios();

        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, $criterio, true);

        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $cantidad_en_factura += $vta_factura_vta_orden_venta->getCantidad();
        }
        
        // ---------------------------------------------------------------------
        // se incluyen otros comprobantes que afectan a la cantidad
        // ---------------------------------------------------------------------
        if($incluir_otros){
            $cantidad_en_factura += $this->getCantidadEnAjusteDebe($incluir_otros = false);
        }

        return $cantidad_en_factura;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 11:07 hs.
     * Metodo que retorna si la OV estuvo en ajuste debe.
     * @return Obj VtaOrdenVentaEstado
     */
    public function getVtaOrdenVentaEstadoEnAjusteDebe() {
        $vta_orden_venta_tipo_estado_facturacion = VtaOrdenVentaTipoEstadoFacturacion::getOxCodigo(VtaOrdenVentaTipoEstadoFacturacion::TIPO_NO_FACTURADO);

        $c = new Criterio();
        $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FATURACION_ID, $vta_orden_venta_tipo_estado_facturacion->getId(), Criterio::IGUAL);
        $c->addTabla(VtaOrdenVentaEstadoFacturacion::GEN_TABLA);
        $c->setCriterios();

        $vta_orden_venta_estado_facturacions = VtaOrdenVentaEstadoFacturacion::getVtaOrdenVentaEstadoFacturacions(null, $c);
        foreach ($vta_orden_venta_estado_facturacions as $vta_orden_venta_estado_facturacion) {
            return $vta_orden_venta_estado_facturacion;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna la cantidad de ins_insumos disponibles para ajustar en la OV.
     * @return Float
     */
    public function getCantidadDisponibleEnAjusteDebe() {
        $cantidad = $this->getCantidad();
        $cantidad_en_remito = $this->getCantidadEnFactura($incluir_otros = true);
        
        $cantidad_disponible = $cantidad - $cantidad_en_remito;
        return $cantidad_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna la cantidad de ins_insumos disponibles para ajustar en la OV.
     * @return Float
     */
    public function getCantidadEnAjusteDebe($incluir_otros = true) {
        $cantidad_en_ajuste_debe = 0;
        $criterio = new Criterio();
        $criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $criterio->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
        $criterio->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_VTA_AJUSTE_DEBE_ID);
        $criterio->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, $criterio, true);

        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            $cantidad_en_ajuste_debe += $vta_ajuste_debe_vta_orden_venta->getCantidad();
        }
        
        // ---------------------------------------------------------------------
        // se incluyen otros comprobantes que afectan a la cantidad
        // ---------------------------------------------------------------------
        if($incluir_otros){
            $cantidad_en_ajuste_debe += $this->getCantidadEnAjusteDebe($incluir_otros = false);
        }
        
        return $cantidad_en_ajuste_debe;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que registra un nuevo estado de remision para la orden de venta.
     * @return Obj VtaOrdenVentaEstadoRemision
     */
    public function setVtaOrdenVentaEstadoRemision($codigo, $observacion = '') {
        $inicial = 1;
        foreach ($this->getVtaOrdenVentaEstadoRemisions() as $vta_orden_venta_estado_remision) {
            $vta_orden_venta_estado_remision->setActual(0);
            $vta_orden_venta_estado_remision->save();

            $inicial = 0;
        }

        // se agrega el nuevo estado de la orden de venta
        $vta_orden_venta_tipo_estado_remision = VtaOrdenVentaTipoEstadoRemision::getOxCodigo($codigo);

        $vta_orden_venta_estado_remision = new VtaOrdenVentaEstadoRemision();
        $vta_orden_venta_estado_remision->setVtaOrdenVentaId($this->getId());
        $vta_orden_venta_estado_remision->setVtaOrdenVentaTipoEstadoRemisionId($vta_orden_venta_tipo_estado_remision->getId());
        $vta_orden_venta_estado_remision->setInicial($inicial);
        $vta_orden_venta_estado_remision->setActual(1);
        $vta_orden_venta_estado_remision->setObservacion($observacion);
        $vta_orden_venta_estado_remision->save();

        // actualizamos el estado en vta_orden_venta        
        $this->setVtaOrdenVentaTipoEstadoRemisionId($vta_orden_venta_tipo_estado_remision->getId());
        $this->save();

        return $vta_orden_venta_estado_remision;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna el estado de remision actual de la orden de venta.
     * @return Obj VtaOrdenVentaEstado
     */
    public function getVtaOrdenVentaEstadoRemisionActual() {
        $c = new Criterio();
        $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaEstadoRemision::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaOrdenVentaEstadoRemision::GEN_TABLA);
        $c->setCriterios();

        $vta_orden_venta_estado_remisions = VtaOrdenVentaEstadoRemision::getVtaOrdenVentaEstadoRemisions(null, $c);
        foreach ($vta_orden_venta_estado_remisions as $vta_orden_venta_estado_remision) {
            return $vta_orden_venta_estado_remision;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna el tipo de estado remision actual de la orden de venta.
     * @return Obj VtaOrdenVentaEstadoRemision
     */
    public function getVtaOrdenVentaTipoEstadoRemisionActual() {
        $vta_orden_venta_actual = $this->getVtaOrdenVentaEstadoRemisionActual();
        if ($vta_orden_venta_actual) {
            return $vta_orden_venta_actual->getVtaOrdenVentaTipoEstadoRemision();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que retorna si la orden de venta esta en un estado terminal.
     * @return Bool
     */
    public function getVtaOrdenVentaTipoEstadoRemisionActualTerminal() {
        $terminal = $this->getVtaOrdenVentaTipoEstadoRemisionActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 18/12/2017 08:00 hs.
     * Metodo que retorna el cli_cliente de la OV.
     * @return CliCliente
     */
    public function getCliCliente() {
        $vta_presupuesto = $this->getVtaPresupuesto();

        if ($vta_presupuesto) {
            return $vta_presupuesto->getCliCliente();
        }
        return false;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 12/11/2019 07:52
     */
    public function getVtaOrdenVentaTipoEstadoFacturacionAnterior() {
        $criterio = new Criterio();
        $criterio->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_VTA_ORDEN_VENTA_ID, $this->getId(), Criterio::IGUAL);
        $criterio->add(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ACTUAL, 0, Criterio::IGUAL);
        $criterio->addTabla(VtaOrdenVentaEstadoFacturacion::GEN_TABLA);
        $criterio->addOrden(VtaOrdenVentaEstadoFacturacion::GEN_ATTR_ID, Criterio::_DESC);
        $criterio->setCriterios();

        $vta_orden_venta_estados_facturacions = VtaOrdenVentaEstadoFacturacion::getVtaOrdenVentaEstadoFacturacions(null, $criterio, true);

        if (count($vta_orden_venta_estados_facturacions) > 0) {
            foreach ($vta_orden_venta_estados_facturacions as $vta_orden_venta_estado_facturacion) {
                return $vta_orden_venta_estado_facturacion->getVtaOrdenVentaTipoEstadoFacturacion();
            }
        } else {
            return $this->getVtaOrdenVentaTipoEstadoFacturacion();
        }
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 12/11/2019 07:52
     */
    public function setRetrotraerVtaOrdenVentaTipoEstadoFacturacion($observacion = '') {
        $vta_factura_tipo_estado_facturacion = $this->getVtaOrdenVentaTipoEstadoFacturacionAnterior();
        $this->setVtaOrdenVentaEstadoFacturacion($vta_factura_tipo_estado_facturacion->getCodigo(), $observacion);
    }

    public function setVtaOrdenVentaAjusteStockPorAjusteDebe($pan_panol, $cantidad, $observacion = '') {

        $ins_insumo = $this->getInsInsumo();

        $pdi_pedido = new PdiPedido();

        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($pan_panol->getId());
        $pdi_pedido->setPanPanolDestino($pan_panol->getId());
        $pdi_pedido->setObservacion($observacion);
        $pdi_pedido->setEstado(1);
        $pdi_pedido->save();

        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);

        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 20/04/2021 17:26 hs.
     * Metodo retorna el importe actual de la OV.
     * @return Float Importe
     */
    public function getImporteUnitarioActual() {
        $ins_lista_precio = $this->getVtaPresupuestoInsInsumo()->getInsListaPrecio();
        $importe_unitario_actual = $ins_lista_precio->getImporteVenta();

        return $importe_unitario_actual;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 20/04/2021 17:26 hs.
     * Metodo genera VtaOrdenVentaConflicto en el caso de cambios de importes o existan conflictos por resolver.
     * @return Bol
     */
    public function setControlVtaOrdenVentaConflicto() {
        $hay_conflicto = false;
        $hay_conflicto_pendiente = false;
        $hay_conflicto_resuelto = false;

        $importe_unitario = $this->getImporteUnitario();
        $importe_unitario_actual = $this->getImporteUnitarioActual();

        $vta_orden_venta_conflictos_no_resueltos = $this->getVtaOrdenVentaConflictos(null, null, true);
        $vta_orden_venta_conflictos_resueltos = $this->getVtaOrdenVentaConflictos(null, null, false);

        // ----------------------------------------------------------------------
        // se recorre para ver si hay conflictos pendientes, si los hay se actualizan los importes
        // ----------------------------------------------------------------------
        if (count($vta_orden_venta_conflictos_no_resueltos) > 0) {

            // ------------------------------------------------------------------
            // existen conflictos no resueltos
            // ------------------------------------------------------------------
            foreach ($vta_orden_venta_conflictos_no_resueltos as $vta_orden_venta_conflictos_no_resuelto) {
                $vta_orden_venta_conflictos_no_resuelto->setImporteInicial($importe_unitario);
                $vta_orden_venta_conflictos_no_resuelto->setImporteActualizado($importe_unitario_actual);
                $vta_orden_venta_conflictos_no_resuelto->save();

                // ----------------------------------------------------------
                // se marca la orden de venta como conflictiva
                // ----------------------------------------------------------
                $this->setConflicto(1);
                $this->save();
            }
            $hay_conflicto = true;
            $hay_conflicto_pendiente = true;
        } elseif (count($vta_orden_venta_conflictos_resueltos) > 0) {

            // ------------------------------------------------------------------
            // existen conflictos resueltos
            // ------------------------------------------------------------------
            if (($importe_unitario != $importe_unitario_actual)) {
                foreach ($vta_orden_venta_conflictos_resueltos as $vta_orden_venta_conflicto_resuelto) {
                    $hay_conflicto_resuelto = true;
                    if ($importe_unitario_actual != $vta_orden_venta_conflicto_resuelto->getImporteActualizado()) {
                        $hay_conflicto_resuelto = false;
                    }
                }
            }
        }

        // ----------------------------------------------------------------------
        // Creo un conflicto si no se encontraron conflictos anteriores pendientes ni resueltos
        // ----------------------------------------------------------------------
        if (!$hay_conflicto_pendiente && !$hay_conflicto_resuelto) {
            if (($importe_unitario != $importe_unitario_actual)) {

                $vta_vta_factura = $this->getVtaFactura();
                if (!$vta_vta_factura) {

                    $importe_diferencia = $importe_unitario_actual - $importe_unitario;

                    // ---------------------------------------------------------
                    // solamente puede generar conflicto cuando no ha generado aun orden de venta
                    // ---------------------------------------------------------
                    $vta_orden_venta_conflicto_nuevo = new VtaOrdenVentaConflicto();
                    $vta_orden_venta_conflicto_nuevo->setVtaOrdenVentaId($this->getId());
                    $vta_orden_venta_conflicto_nuevo->setImporteInicial($importe_unitario);
                    $vta_orden_venta_conflicto_nuevo->setImporteActualizado($importe_unitario_actual);
                    $vta_orden_venta_conflicto_nuevo->setImporteDiferencia($importe_diferencia);
                    $vta_orden_venta_conflicto_nuevo->setFechaConflicto(Gral::getFechaActual());
                    $vta_orden_venta_conflicto_nuevo->setFechaResolucion(Gral::getFechaActual());
                    $vta_orden_venta_conflicto_nuevo->setResuelto(0);
                    $vta_orden_venta_conflicto_nuevo->setEstado(1);
                    $vta_orden_venta_conflicto_nuevo->save();

                    $vta_orden_venta_conflicto_nuevo->setCodigo(VtaOrdenVentaConflicto::PREFIJO_CONF . str_pad($vta_orden_venta_conflicto_nuevo->getId(), 8, 0, STR_PAD_LEFT));
                    $vta_orden_venta_conflicto_nuevo->save();

                    // ----------------------------------------------------------
                    // se marca la orden de venta como conflictiva
                    // ----------------------------------------------------------
                    $this->setConflicto(1);
                    $this->save();

                    $hay_conflicto = true;
                }
            }
        }

        return $hay_conflicto;
    }
    
    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $vta_orden_venta_importe = $this->getVtaOrdenVentaImporte();

        if (!$vta_orden_venta_importe) {
            $vta_orden_venta_importe = new VtaOrdenVentaImporte();
        }

        $importe_subtotal = $this->getImporteSubtotal();
        $importe_iva = $this->getIvaVtaOrdenVenta();
        $importe_tributo = 0;
        $importe_total = $this->getImporteTotal();

        $vta_orden_venta_importe->setDescripcion($this->getCodigo());
        $vta_orden_venta_importe->setVtaOrdenVentaId($this->getId());
        $vta_orden_venta_importe->setImporteSubtotal($importe_subtotal);
        $vta_orden_venta_importe->setImporteIva($importe_iva);
        $vta_orden_venta_importe->setImporteTributo($importe_tributo);
        $vta_orden_venta_importe->setImporteTotal($importe_total);
        $vta_orden_venta_importe->setEstado(1);
        $vta_orden_venta_importe->save();

        return $vta_orden_venta_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getVtaOrdenVentaImporte();
        if ($o) {
            return $o;
        }

        return new VtaOrdenVentaImporte();
    }
    
    /**
     * 
     */
    public function getResumenComprobanteFromArray($vta_orden_venta_importes) {
        $vta_orden_venta_importe = $vta_orden_venta_importes[$this->getId()];
        if(isset($vta_orden_venta_importe)){
            return $vta_orden_venta_importe;
        }

        return new VtaOrdenVentaImporte();
    }    
    
    /**
     * 
     * @return type
     */
    public function getMargenAplicadoDecimal() {
        $margen = 0;
        if($this->getImporteCosto() > 0){
            $margen = ($this->getImporteUnitarioConDescuento() / $this->getImporteCosto()) - 1;
        }
        
        return $margen;
    }
    
    /**
     * 
     * @param type $txt_desde
     * @param type $txt_hasta
     * @param type $widget_cmb_pan_panol_id
     * @param type $widget_cmb_vta_presupuesto_tipo_venta_id
     * @return type
     */
    static function getVtaOrdenVentasRemitidasNoFacturadas($txt_desde, $txt_hasta, $widget_cmb_pan_panol_id, $widget_cmb_vta_presupuesto_tipo_venta_id){
        $criterio = new Criterio();
        $criterio->addDistinct(true);

        $criterio->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        if ($txt_desde != '') {
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_desde . ' 00:00:00', Criterio::MAYORIGUAL);
        }
        if ($txt_hasta != '') {
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_hasta . ' 23:59:59', Criterio::MENORIGUAL);
        }
        if ($widget_cmb_pan_panol_id != 0) {
            $criterio->add(PanPanol::GEN_ATTR_ID, $widget_cmb_pan_panol_id, Criterio::IGUAL);
        }
        if ($widget_cmb_vta_presupuesto_tipo_venta_id != 0) {
            $criterio->add(VtaPresupuestoTipoVenta::GEN_ATTR_ID, $widget_cmb_vta_presupuesto_tipo_venta_id, Criterio::IGUAL);
        }

        $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
        $criterio->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoRemision::TIPO_NO_REMITIDO, Criterio::DISTINTO); // distinto a no remitido

        $criterio->addInicioSubconsulta();
        $criterio->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoFacturacion::TIPO_NO_FACTURADO, Criterio::IGUAL); // igual a no facturado
        $criterio->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoFacturacion::TIPO_FACTURA_PARCIAL, Criterio::IGUAL, false, Criterio::_OR); // igual a factura parcial
        $criterio->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoFacturacion::TIPO_AJUSTE_PARCIAL, Criterio::IGUAL, false, Criterio::_OR); // igual a ajuste parcial
        $criterio->addFinSubconsulta();

        $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $criterio->addRealJoin(VtaPresupuestoTipoVenta::GEN_TABLA, VtaPresupuestoTipoVenta::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_ID, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, "LEFT JOIN");
        $criterio->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, VtaRemito::GEN_ATTR_PAN_PANOL_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $criterio->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);
        $criterio->addRealJoin(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID);
        $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $criterio->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
        //Gral::prr($vta_orden_ventas);
        //exit;
        
        return $vta_orden_ventas;
    }
    
    /**
     * 
     * @param type $txt_desde
     * @param type $txt_hasta
     * @param type $widget_cmb_gral_sucursal_id
     * @param type $widget_cmb_vta_presupuesto_tipo_venta_id
     * @return type
     */
    static function getVtaOrdenVentasFacturadasNoRemitidas($txt_desde, $txt_hasta, $widget_cmb_gral_sucursal_id, $widget_cmb_vta_presupuesto_tipo_venta_id){
        $criterio = new Criterio();
        $criterio->addDistinct(true);

        $criterio->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        if ($txt_desde != '') {
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_desde . ' 00:00:00', Criterio::MAYORIGUAL);
        }
        if ($txt_hasta != '') {
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_hasta . ' 23:59:59', Criterio::MENORIGUAL);
        }
        if ($widget_cmb_gral_sucursal_id != 0) {
            $criterio->add(GralSucursal::GEN_ATTR_ID, $widget_cmb_gral_sucursal_id, Criterio::IGUAL);
        }
        if ($widget_cmb_vta_presupuesto_tipo_venta_id != 0) {
            $criterio->add(VtaPresupuestoTipoVenta::GEN_ATTR_ID, $widget_cmb_vta_presupuesto_tipo_venta_id, Criterio::IGUAL);
        }

        $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
        $criterio->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoFacturacion::TIPO_NO_FACTURADO, Criterio::DISTINTO); // distinto a no facturado

        $criterio->addInicioSubconsulta();
        $criterio->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoRemision::TIPO_NO_REMITIDO, Criterio::IGUAL); // igual a no remitido
        $criterio->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_PARCIAL, Criterio::IGUAL, false, Criterio::_OR); // igual a remitido parcial
        $criterio->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstadoRemision::TIPO_AJUSTE_PARCIAL, Criterio::IGUAL, false, Criterio::_OR); // igual a ajuste parcial
        $criterio->addFinSubconsulta();

        $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $criterio->addRealJoin(VtaPresupuestoTipoVenta::GEN_TABLA, VtaPresupuestoTipoVenta::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_VENTA_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaFacturaVtaOrdenVenta::GEN_TABLA, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_VTA_FACTURA_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_ID, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, "LEFT JOIN");
        $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID, "LEFT JOIN");
        $criterio->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $criterio->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);
        $criterio->addRealJoin(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID);
        $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $criterio->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
        //Gral::prr($vta_orden_ventas);
        //exit;
        
        return $vta_orden_ventas;
    }
    
    /**
     * 
     * @return type
     */
    public function getImporteCostoTotal(){
        $costo_total = $this->getImporteCosto() * $this->getCantidad();
        return $costo_total;
    }

}

?>