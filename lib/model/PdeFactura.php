<?php
require_once "base/BPdeFactura.php";

class PdeFactura extends BPdeFactura {

    const CANTIDAD_OC_FACTURA = 200;
    const PREFIJO_FACTURA = 'FRA-';

    public function getTipoComprobanteSiglas() {
        return "FAC";
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 22:12 hs.
     * Metodo que genera una factura.
     * @return Obj PdeFactura
     */
    static function setInicializarPdeFactura($pde_oc_ids, $pde_oc_cantidads, $pde_oc_importe_unitarios, $pde_oc_porcentaje_descuentos, $orden_ocs, $prv_proveedor_id = 0, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_nro_despacho, $txt_fecha_vencimiento, $gral_empresa_id, $pde_centro_pedido_id, $gral_fp_forma_pago_id, $gral_actividad_id, $gral_escenario_id, $pde_tipo_factura_id, $ws_fe_param_tipo_concepto_id = 1, $observacion = '', $txt_comprobante_tributos, $cmb_prv_descuento_financiero_id, $gral_centro_costo_id) {

        // se determina el origen del comprobante
        $pde_tipo_origen_factura = PdeTipoOrigenFactura::getOxCodigo(PdeTipoOrigenFactura::ORIGEN_ORDEN_COMPRA);

        $pde_factura = new PdeFactura();

        $pde_factura->setPdeTipoOrigenFacturaId($pde_tipo_origen_factura->getId());
        $pde_factura->setGralEmpresaId($gral_empresa_id);
        $pde_factura->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_factura->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $pde_factura->setGralActividadId($gral_actividad_id);
        $pde_factura->setGralEscenarioId($gral_escenario_id);
        $pde_factura->setFechaEmision($txt_fecha);
        $pde_factura->setGralMesId($cmb_gral_mes_id);
        $pde_factura->setAnio($cmb_anio);
        $pde_factura->setNumeroPuntoVenta($txt_nro_punto_venta);
        $pde_factura->setNumeroFactura($txt_nro_comprobante);
        $pde_factura->setNumeroFacturaCompleto($pde_factura->getNumeroFacturaCompletoFormateado());
        $pde_factura->setNumeroDespacho($txt_nro_despacho);
        $pde_factura->setNumeroTimbrado($txt_nro_timbrado);        
        $pde_factura->setFechaVencimiento($txt_fecha_vencimiento);
        $pde_factura->setPrvDescuentoFinancieroId($cmb_prv_descuento_financiero_id);
        $pde_factura->setObservacion($observacion);
        $pde_factura->setEstado(1);
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $pde_factura->setCodigo(self::PREFIJO_FACTURA . str_pad($pde_factura->getId(), 8, 0, STR_PAD_LEFT));
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la factura
        // --------------------------------------------------------------------
        $pde_factura_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_GENERADO, $observacion);
        $pde_factura_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_PENDIENTE, $observacion);


        // --------------------------------------------------------------------
        // se agregan los items a la factura
        // --------------------------------------------------------------------
        if (!empty($pde_factura->getId())) {
            foreach ($pde_oc_ids as $pde_oc_id) {
                $pde_oc = PdeOc::getOxId($pde_oc_id);
                $ins_insumo = $pde_oc->getInsInsumo();
                $ins_unidad_medida_id = $ins_insumo->getInsUnidadMedidaId();
                $gral_tipo_iva = $pde_oc->getGralTipoIva();
                $cantidad_a_facturar = $pde_oc_cantidads[$pde_oc->getId()];

                $importe_unitario_a_facturar = $pde_oc_importe_unitarios[$pde_oc->getId()];
                $importe_unitario_a_facturar = Gral::getImporteDesdePriceFormatToDB($importe_unitario_a_facturar);

                $porcentaje_descuento_item = $pde_oc_porcentaje_descuentos[$pde_oc->getId()];
                $porcentaje_descuento_item = Gral::getImporteDesdePriceFormatToDB($porcentaje_descuento_item);

                // se quita el iva si se esta operanco con iva incluido
                if($pde_oc->getIvaIncluido()){
                    $importe_unitario_a_facturar = $importe_unitario_a_facturar / $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
                }
                
                $orden = $orden_ocs[$pde_oc->getId()];

                // Si no hay no trae el id de proveedor busco en el presupuesto
                if ($prv_proveedor_id == 0) {
                    $pde_presupuesto = $pde_oc->getPdePresupuesto();
                    $prv_proveedor_id = $pde_presupuesto->getPrvProveedorId();
                    $persona_descripcion = $pde_oc->getPersonaDescripcion();
                }

                // cambio el estado en el caso de factura parcial o total
                if ($pde_oc->getCantidadDisponibleEnFactura() == $cantidad_a_facturar) {
                    $pde_oc->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_TOTAL);
                }
                else {
                    $pde_oc->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_PARCIAL);
                }

                $pde_factura_pde_oc = new PdeFacturaPdeOc();
                $pde_factura_pde_oc->setDescripcion($pde_oc->getDescripcion());
                $pde_factura_pde_oc->setPdeFacturaId($pde_factura->getId());
                $pde_factura_pde_oc->setPdeOcId($pde_oc->getId());
                $pde_factura_pde_oc->setInsInsumoId($pde_oc->getInsInsumoId());
                $pde_factura_pde_oc->setInsUnidadMedidaId($ins_unidad_medida_id);
                $pde_factura_pde_oc->setCantidad($cantidad_a_facturar);
                $pde_factura_pde_oc->setImporteUnitario($importe_unitario_a_facturar);
                $pde_factura_pde_oc->setPorcentajeDescuento($porcentaje_descuento_item);
                $pde_factura_pde_oc->setCodigo('');
                $pde_factura_pde_oc->setObservacion('');
                $pde_factura_pde_oc->setOrden($orden);
                $pde_factura_pde_oc->setEstado(1);
                $pde_factura_pde_oc->setGralTipoIvaId($gral_tipo_iva->getId());
                $pde_factura_pde_oc->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el proveedor a la factura, si hubiese proveedor
        // --------------------------------------------------------------------  
        // Si viene como parametro (!=0) o si lo toma del presupuesto (!is_null)
        if ($prv_proveedor_id != 0 && !is_null($prv_proveedor_id)) {
            $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
            $persona_descripcion = $prv_proveedor->getRazonSocial();

            if ($prv_proveedor) {
                $pde_factura->setPrvProveedorId($prv_proveedor->getId());
                $pde_factura->setRazonSocial($prv_proveedor->getRazonSocial());
                $pde_factura->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
                $pde_factura->setCuit($prv_proveedor->getCuit());
                $pde_factura->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
                $pde_factura->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());
            }
        }

        // --------------------------------------------------------------------
        // se determina el tipo de factura
        // --------------------------------------------------------------------
        //$pde_tipo_factura = self::getDeterminacionTipoFactura($prv_proveedor_id);
        //$pde_factura->setPdeTipoFacturaId($pde_tipo_factura->getId());
        $pde_factura->setPdeTipoFacturaId($pde_tipo_factura_id);

        $pde_factura->setPersonaDescripcion($persona_descripcion);
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la factura
        // --------------------------------------------------------------------
        $pde_factura->setAgregarTributos($txt_comprobante_tributos);

        /*
          // --------------------------------------------------------------------
          // se inicializan registros ws fe para solicitud en afip
          // --------------------------------------------------------------------
          $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($pde_factura->getId(), $gral_empresa_id, $pde_centro_pedido_id, $pde_tipo_factura_id, $ws_fe_param_tipo_concepto_id);

          if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
          echo 'Error al enviar factura electronica. ';
          }
         */

        //---------------------------------------
        //se vincula el centro de costo
        //---------------------------------------
        if ($gral_centro_costo_id != 0) {
            $pde_factura->setPorcentajeAfectadoEnCentroCosto(array($gral_centro_costo_id => 100));
        }

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $pde_factura->setActualizarResumenComprobante();

        return $pde_factura;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 08/08/2018 14:25 hs.
     * Metodo que genera una factura de items.
     * @return Obj PdeFactura
     */
    static function setInicializarPdeFacturaItem($gral_empresa_id, $pde_centro_pedido_id, $gral_fp_forma_pago_id, $gral_actividad_id, $gral_escenario_id, $pde_tipo_factura_id, $prv_proveedor_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_nro_despacho, $txt_fecha_vencimiento, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_pde_factura_concepto_ids, $observacion = '', $txt_comprobante_tributos, $cmb_prv_descuento_financiero_id, $gral_centro_costo_id) {

        // se determina el origen del comprobante       
        $pde_tipo_origen_factura = PdeTipoOrigenFactura::getOxCodigo(PdeTipoOrigenFactura::ORIGEN_ITEM);

        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        $pde_factura = new PdeFactura();

        $pde_factura->setPdeTipoOrigenFacturaId($pde_tipo_origen_factura->getId());
        $pde_factura->setGralEmpresaId($gral_empresa_id);
        $pde_factura->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_factura->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $pde_factura->setGralActividadId($gral_actividad_id);
        $pde_factura->setGralEscenarioId($gral_escenario_id);
        $pde_factura->setFechaEmision($txt_fecha);
        $pde_factura->setGralMesId($cmb_gral_mes_id);
        $pde_factura->setAnio($cmb_anio);
        $pde_factura->setNumeroPuntoVenta($txt_nro_punto_venta);
        $pde_factura->setNumeroFactura($txt_nro_comprobante);
        $pde_factura->setNumeroFacturaCompleto($pde_factura->getNumeroFacturaCompletoFormateado());
        $pde_factura->setNumeroDespacho($txt_nro_despacho);
        $pde_factura->setNumeroTimbrado($txt_nro_timbrado);        
        $pde_factura->setFechaVencimiento($txt_fecha_vencimiento);
        $pde_factura->setPrvDescuentoFinancieroId($cmb_prv_descuento_financiero_id);
        $pde_factura->setObservacion($observacion);
        $pde_factura->setEstado(1);
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $pde_factura->setCodigo(self::PREFIJO_FACTURA . str_pad($pde_factura->getId(), 8, 0, STR_PAD_LEFT));
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la factura
        // --------------------------------------------------------------------
        $pde_factura_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_GENERADO, $observacion);
        $pde_factura_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_PENDIENTE, $observacion);

        // --------------------------------------------------------------------
        // se agregan los items a la factura
        // --------------------------------------------------------------------
        if (!empty($pde_factura->getId())) {

            foreach ($txt_descripcions as $key => $txt_descripcion) {

                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle de la Factura
                $pde_factura_item = new PdeFacturaItem();

                $pde_factura_item->setDescripcion($txt_descripcions[$key]);
                $pde_factura_item->setPdeFacturaId($pde_factura->getId());
                $pde_factura_item->setGralTipoIvaId($cmb_gral_tipo_iva_ids[$key]);
                $pde_factura_item->setPdeFacturaConceptoId($cmb_pde_factura_concepto_ids[$key]);

                //$pde_factura_item->setCantidad($txt_cantidads[$key]);
                $pde_factura_item->setCantidad(1);
                $pde_factura_item->setImporteUnitario($importe_unitario);
                $pde_factura_item->setCodigo('');
                $pde_factura_item->setObservacion('');
                $pde_factura_item->setEstado(1);

                $pde_factura_item->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el proveedor a la NC
        // --------------------------------------------------------------------        
        $persona_descripcion = $prv_proveedor->getDescripcion();

        $pde_factura->setPrvProveedorId($prv_proveedor->getId());
        $pde_factura->setRazonSocial($prv_proveedor->getRazonSocial());
        $pde_factura->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
        $pde_factura->setCuit($prv_proveedor->getCuit());
        $pde_factura->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
        $pde_factura->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());
        $pde_factura->setPersonaDescripcion($persona_descripcion);

        // --------------------------------------------------------------------
        // se determina el tipo de Factura
        // --------------------------------------------------------------------
        //$pde_tipo_factura = self::getDeterminacionTipoFactura($prv_proveedor_id);
        //$pde_factura->setPdeTipoFacturaId($pde_tipo_factura->getId());
        $pde_factura->setPdeTipoFacturaId($pde_tipo_factura_id);
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la Factura
        // --------------------------------------------------------------------
        $pde_factura->setAgregarTributos($txt_comprobante_tributos);

        /*
          // --------------------------------------------------------------------
          // se inicializan registros ws fe para solicitud en afip
          // --------------------------------------------------------------------
          $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudFacturaItem($pde_factura->getId());

          if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
          echo 'Error al enviar factura electronica. ';
          }
         */

        //---------------------------------------
        //se vincula el centro de costo
        //---------------------------------------
        if ($gral_centro_costo_id != 0) {
            $pde_factura->setPorcentajeAfectadoEnCentroCosto(array($gral_centro_costo_id => 100));
        }

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $pde_factura->setActualizarResumenComprobante();

        return $pde_factura;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 22:12 hs.
     * Metodo que genera una factura.
     * @return Obj PdeFactura
     */
    static function setPdeFacturaAgregarOCs($pde_oc_ids, $pde_oc_cantidads, $pde_oc_importe_unitarios, $pde_oc_porcentaje_descuentos, $orden_ocs, $pde_factura_id) {

        $pde_tipo_origen_factura = PdeTipoOrigenFactura::getOxCodigo(PdeTipoOrigenFactura::ORIGEN_ORDEN_COMPRA);

        $pde_factura = PdeFactura::getOxId($pde_factura_id);
        if ($pde_factura) {

            // --------------------------------------------------------------------
            // se agregan los OCs a la factura
            // --------------------------------------------------------------------
            foreach ($pde_oc_ids as $pde_oc_id) {
                $pde_oc = PdeOc::getOxId($pde_oc_id);
                $ins_insumo = $pde_oc->getInsInsumo();
                $ins_unidad_medida_id = $ins_insumo->getInsUnidadMedidaId();
                $cantidad_a_facturar = $pde_oc_cantidads[$pde_oc->getId()];

                $importe_unitario_a_facturar = $pde_oc_importe_unitarios[$pde_oc->getId()];
                $importe_unitario_a_facturar = Gral::getImporteDesdePriceFormatToDB($importe_unitario_a_facturar);

                $porcentaje_descuento_item = $pde_oc_porcentaje_descuentos[$pde_oc->getId()];
                $porcentaje_descuento_item = Gral::getImporteDesdePriceFormatToDB($porcentaje_descuento_item);

                $orden = $orden_ocs[$pde_oc->getId()];

                // cambio el estado en el caso de factura parcial o total
                if ($pde_oc->getCantidadDisponibleEnFactura() == $cantidad_a_facturar) {
                    $pde_oc->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_TOTAL);
                }
                else {
                    $pde_oc->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_PARCIAL);
                }

                $array = array(
                    array('campo' => 'pde_factura_id', 'valor' => $pde_factura->getId()),
                    array('campo' => 'pde_oc_id', 'valor' => $pde_oc->getId()),
                );
                $pde_factura_pde_oc = PdeFacturaPdeOc::getOxArray($array);
                if (!$pde_factura_pde_oc) {
                    $pde_factura_pde_oc = new PdeFacturaPdeOc();
                    $pde_factura_pde_oc->setCantidad($cantidad_a_facturar);
                }
                else {
                    $cantidad_facturada = $pde_factura_pde_oc->getCantidad();
                    $pde_factura_pde_oc->setCantidad($cantidad_a_facturar + $cantidad_facturada);
                }

                $pde_factura_pde_oc->setDescripcion($pde_oc->getDescripcion());
                $pde_factura_pde_oc->setPdeFacturaId($pde_factura->getId());
                $pde_factura_pde_oc->setPdeOcId($pde_oc->getId());
                $pde_factura_pde_oc->setInsInsumoId($pde_oc->getInsInsumoId());
                $pde_factura_pde_oc->setInsUnidadMedidaId($ins_unidad_medida_id);
                $pde_factura_pde_oc->setImporteUnitario($importe_unitario_a_facturar);
                $pde_factura_pde_oc->setPorcentajeDescuento($porcentaje_descuento_item);
                $pde_factura_pde_oc->setGralTipoIvaId($ins_insumo->getGralTipoIvaCompra());
                $pde_factura_pde_oc->setCodigo('');
                $pde_factura_pde_oc->setObservacion('');
                $pde_factura_pde_oc->setOrden($orden);
                $pde_factura_pde_oc->setEstado(1);
                $pde_factura_pde_oc->save();
            }

            // ---------------------------------------------------------------------
            // se fuerza el cambio de origen de la factura, por si nacio siendo factura de items
            // ---------------------------------------------------------------------
            $pde_factura->setPdeTipoOrigenFacturaId($pde_tipo_origen_factura->getId());
            $pde_factura->save();

            // ---------------------------------------------------------------------
            // se inhabilitan los items, en el caso de tener
            // ---------------------------------------------------------------------
            foreach ($pde_factura->getPdeFacturaItems() as $pde_factura_item) {
                if ($pde_factura_item->getEstado()) {
                    $pde_factura_item->setEstado(0);
                    $pde_factura_item->save();
                }
            }
        }

        return $pde_factura;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 09:00 hs.
     * Metodo que genera una factura.
     * @return Obj PdeFactura
     */
    static function setInicializarPdeFactura_OLD_RECEPCIONES($pde_recepcion_ids, $pde_recepcion_cantidads, $prv_proveedor_id = 0, $txt_fecha, $txt_nro_punto_venta, $txt_nro_comprobante, $gral_empresa_id, $pde_centro_pedido_id, $gral_fp_forma_pago_id, $pde_tipo_factura_id = 0, $ws_fe_param_tipo_concepto_id = 1, $observacion = '') {

        // se determina el origen del comprobante
        $pde_tipo_origen_factura = PdeTipoOrigenFactura::getOxCodigo(PdeTipoOrigenFactura::ORIGEN_RECEPCION);

        $pde_factura = new PdeFactura();

        $pde_factura->setPdeTipoOrigenFacturaId($pde_tipo_origen_factura->getId());
        $pde_factura->setGralEmpresaId($gral_empresa_id);
        $pde_factura->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_factura->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $pde_factura->setFechaEmision($txt_fecha);
        $pde_factura->setNumeroPuntoVenta($txt_nro_punto_venta);
        $pde_factura->setNumeroFactura($txt_nro_comprobante);
        $pde_factura->setObservacion($observacion);
        $pde_factura->setEstado(1);
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $pde_factura->setCodigo(self::PREFIJO_FACTURA . str_pad($pde_factura->getId(), 8, 0, STR_PAD_LEFT));
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la factura
        // --------------------------------------------------------------------
        $pde_factura_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_GENERADO, $observacion);
        $pde_factura_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_PENDIENTE, $observacion);


        // --------------------------------------------------------------------
        // se agregan los items a la factura
        // --------------------------------------------------------------------
        if (!empty($pde_factura->getId())) {
            foreach ($pde_recepcion_ids as $pde_recepcion_id) {
                $pde_recepcion = PdeRecepcion::getOxId($pde_recepcion_id);
                $ins_insumo = $pde_recepcion->getInsInsumo();
                $ins_unidad_medida_id = $ins_insumo->getInsUnidadMedidaId();
                $cantidad_a_facturar = $pde_recepcion_cantidads[$pde_recepcion->getId()];

                // Si no hay no trae el id de proveedor busco en el presupuesto
                if ($prv_proveedor_id == 0) {
                    $pde_presupuesto = $pde_recepcion->getPdePresupuesto();
                    $prv_proveedor_id = $pde_presupuesto->getPrvProveedorId();
                    $persona_descripcion = $pde_recepcion->getPersonaDescripcion();
                }

                // cambio el estado en el caso de factura parcial o total
                if ($pde_recepcion->getCantidadDisponibleEnFactura() == $cantidad_a_facturar) {
                    $pde_recepcion->setPdeRecepcionEstadoFacturacion(PdeRecepcionTipoEstadoFacturacion::TIPO_FACTURA_TOTAL);
                }
                else {
                    $pde_recepcion->setPdeRecepcionEstadoFacturacion(PdeRecepcionTipoEstadoFacturacion::TIPO_FACTURA_PARCIAL);
                }

                $pde_factura_pde_recepcion = new PdeFacturaPdeRecepcion();
                $pde_factura_pde_recepcion->setDescripcion($pde_recepcion->getDescripcion());
                $pde_factura_pde_recepcion->setPdeFacturaId($pde_factura->getId());
                $pde_factura_pde_recepcion->setPdeRecepcionId($pde_recepcion->getId());
                $pde_factura_pde_recepcion->setInsInsumoId($pde_recepcion->getInsInsumoId());
                $pde_factura_pde_recepcion->setInsUnidadMedidaId($ins_unidad_medida_id);
                $pde_factura_pde_recepcion->setCantidad($cantidad_a_facturar);
                $pde_factura_pde_recepcion->setImporteUnitario($pde_recepcion->getImporteUnidad());
                $pde_factura_pde_recepcion->setCodigo('');
                $pde_factura_pde_recepcion->setObservacion('');
                $pde_factura_pde_recepcion->setEstado(1);
                $pde_factura_pde_recepcion->setGralTipoIvaId($ins_insumo->getGralTipoIvaCompra());
                $pde_factura_pde_recepcion->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el proveedor a la factura, si hubiese proveedor
        // --------------------------------------------------------------------  
        // Si viene como parametro (!=0) o si lo toma del presupuesto (!is_null)
        if ($prv_proveedor_id != 0 && !is_null($prv_proveedor_id)) {
            $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
            $persona_descripcion = $prv_proveedor->getRazonSocial();

            if ($prv_proveedor) {
                $pde_factura->setPrvProveedorId($prv_proveedor->getId());
                $pde_factura->setRazonSocial($prv_proveedor->getRazonSocial());
                $pde_factura->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
                $pde_factura->setCuit($prv_proveedor->getCuit());
                $pde_factura->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
                $pde_factura->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());
            }
        }

        // --------------------------------------------------------------------
        // se determina el tipo de factura
        // --------------------------------------------------------------------
        $pde_tipo_factura = self::getDeterminacionTipoFactura($prv_proveedor_id);
        $pde_factura->setPdeTipoFacturaId($pde_tipo_factura->getId());

        $pde_factura->setPersonaDescripcion($persona_descripcion);
        $pde_factura->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la factura
        // --------------------------------------------------------------------
        $pde_factura->setAgregarTributos();

        /*
          // --------------------------------------------------------------------
          // se inicializan registros ws fe para solicitud en afip
          // --------------------------------------------------------------------
          $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($pde_factura->getId(), $gral_empresa_id, $pde_centro_pedido_id, $pde_tipo_factura_id, $ws_fe_param_tipo_concepto_id);

          if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
          echo 'Error al enviar factura electronica. ';
          }
         */

        return $pde_factura;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/09/2018 18:15 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj PdeFactura
     */
    public function setModificarDatosComprobante($cmb_gral_escenario_id, $pde_tipo_factura_id, $prv_proveedor_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_nro_despacho, $txt_fecha_vencimiento, $txa_observacion, $txa_nota_interna, $prv_descuento_financiero_id, $txt_comprobante_tributos) {
        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        $this->setGralEscenarioId($cmb_gral_escenario_id);
        $this->setPdeTipoFacturaId($pde_tipo_factura_id);
        $this->setPrvProveedorId($prv_proveedor_id);
        $this->setFechaEmision($txt_fecha);
        $this->setGralMesId($cmb_gral_mes_id);
        $this->setAnio($cmb_anio);
        $this->setNumeroTimbrado($txt_nro_timbrado);        
        $this->setNumeroPuntoVenta($txt_nro_punto_venta);
        $this->setNumeroFactura($txt_nro_comprobante);
        $this->setNumeroFacturaCompleto($this->getNumeroFacturaCompletoFormateado());
        $this->setNumeroDespacho($txt_nro_despacho);
        $this->setFechaVencimiento($txt_fecha_vencimiento);
        $this->setObservacion($txa_observacion);
        $this->setNotaInterna($txa_nota_interna);
        $this->setPrvDescuentoFinancieroId($prv_descuento_financiero_id);

        if ($prv_proveedor) {
            $this->setRazonSocial($prv_proveedor->getRazonSocial());
            $this->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
            $this->setCuit($prv_proveedor->getCuit());
            $this->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
            $this->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());

            $this->setPersonaDescripcion($prv_proveedor->getRazonSocial());
        }

        // ---------------------------------------------------------------------
        // se confirman los tributos
        // ---------------------------------------------------------------------
        $this->setAgregarTributos($txt_comprobante_tributos);

        $this->save();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 25/09/2018
     */
    public function getWsFeParamTipoComprobante() {
        $pde_tipo_factura = $this->getPdeTipoFactura();
        $ws_fe_param_tipo_comprobante = $pde_tipo_factura->getWsFeParamTipoComprobanteXPdeTipoFacturaWsFeParamTipoComprobante();
        return $ws_fe_param_tipo_comprobante;
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroFacturaCompletoFormateado() {
        $numero_punto_venta = str_pad($this->getNumeroPuntoVenta(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA, 0, STR_PAD_LEFT);
        $numero_factura = str_pad($this->getNumeroFactura(), DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);

        $numero_factura_completo = $numero_punto_venta . '-' . $numero_factura;
        return $numero_factura_completo;
    }

    /**
     * Metodo que retorna la fecha de vencimiento del CAE obtenida desde RESPUESTA AFIP
     * @return string
     */
    public function getCaeVencimiento() {
        if ($this->getCae() != '') {
            $ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxWsFeAfipCae($this->getCae());
            if ($ws_fe_ope_solicitud_respuesta) {
                $fecha_vencimiento_cae = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento();

                $anio = substr($fecha_vencimiento_cae, 0, 4);
                $mes = substr($fecha_vencimiento_cae, 4, 2);
                $dia = substr($fecha_vencimiento_cae, 6, 2);

                $fecha_vencimiento_cae = $anio . '-' . $mes . '-' . $dia;
            }
        }
        return $fecha_vencimiento_cae;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que registra un nuevo estado de la factura.
     * @return Obj PdeFacturaEstado
     */
    public function setPdeFacturaEstado($codigo, $observacion = '') {
        $inicial = 1;
        $pde_factura_estado = false;

        // se agrega el nuevo estado del factura
        $pde_factura_tipo_estado = PdeFacturaTipoEstado::getOxCodigo($codigo);

        if ($pde_factura_tipo_estado) {
            foreach ($this->getPdeFacturaEstados() as $pde_factura_estado) {
                $pde_factura_estado->setActual(0);
                $pde_factura_estado->save();
                $inicial = 0;
            }

            $pde_factura_estado = new PdeFacturaEstado();
            $pde_factura_estado->setPdeFacturaId($this->getId());
            $pde_factura_estado->setPdeFacturaTipoEstadoId($pde_factura_tipo_estado->getId());
            $pde_factura_estado->setInicial($inicial);
            $pde_factura_estado->setActual(1);
            $pde_factura_estado->setObservacion($observacion);
            $pde_factura_estado->save();

            // actualizamos el estado en pde_factura      
            $this->setPdeFacturaTipoEstadoId($pde_factura_tipo_estado->getId());
            $this->save();
        }

        // ---------------------------------------------------------------------
        // se registran los movimientos contables, si lo requiere
        // ---------------------------------------------------------------------
        //$this->setRegistrarContabilidad();
        // ---------------------------------------------------------------------

        return $pde_factura_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $pde_factura_tipo_estado = $this->getPdeFacturaTipoEstado();

        if ($pde_factura_tipo_estado->getContabilizable()) {
            $prv_proveedor = $this->getPrvProveedor();
            $gral_empresa = $this->getGralEmpresa();
            $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
            $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
            $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
            $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_COMPRAS);
            $descripcion = 'Asiento de PdeFactura ' . $this->getId();

            $array_cuentas_debe = array();
            $array_cuentas_haber = array();

            $pde_tipo_origen_factura = $this->getPdeTipoOrigenFactura();
            $gral_actividad = $this->getGralActividad();
            //$gral_tipo_documento     = $this->getGralTipoDocumento();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_fp_forma_pago = $this->getGralFpFormaPago();
            $cntb_cuenta_compra_haber = $gral_fp_forma_pago->getCntbCuentaCompraObj();

            $importe_iva = $this->getPdeFacturaIva();
            $importe_tributo = $this->getPdeFacturaTributo();
            //$importe_subtotal = $this->getPdeFacturaSubtotal();
            $importe_total = $this->getPdeFacturaTotal();

            $pde_factura_pde_tributos = $this->getPdeFacturaPdeTributos(null, null, true);

            // -----------------------------------------------------------------
            // DEBE
            // -----------------------------------------------------------------
            if ($pde_tipo_origen_factura && $pde_tipo_origen_factura->getCodigo() == PdeTipoOrigenFactura::ORIGEN_ITEM) {
                // -------------------------------------------------------------
                // si nace desde ITEM
                // -------------------------------------------------------------
                $pde_factura_items = $this->getPdeFacturaItems();
                foreach ($pde_factura_items as $pde_factura_item) {
                    $importe_subtotal = $pde_factura_item->getImporteUnitario();
                    $pde_factura_concepto = $pde_factura_item->getPdeFacturaConcepto();
                    $cntb_cuenta_venta_debe = $pde_factura_concepto->getCntbCuenta();

                    if ($cntb_cuenta_venta_debe && $importe_subtotal > 0) {
                        $array_cuentas_debe[] = array(
                            //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('xxxxxxx'), // CUENTA DE GASTOS
                            'cntb_cuenta' => $cntb_cuenta_venta_debe,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_subtotal,
                        );
                    }
                }
            }
            elseif ($pde_tipo_origen_factura && $pde_tipo_origen_factura->getCodigo() == PdeTipoOrigenFactura::ORIGEN_ORDEN_COMPRA) {
                // -------------------------------------------------------------
                // si nace desde OV
                // -------------------------------------------------------------
                $ins_tipo_insumos = $this->getInsTipoInsumosVinculados();
                foreach ($ins_tipo_insumos as $ins_tipo_insumo) {
                    $importe_subtotal = $this->getPdeFacturaSubtotal($ins_tipo_insumo, false);
                    $cntb_cuenta_venta_debe = $ins_tipo_insumo->getCntbCuentaCompraObj();

                    if ($cntb_cuenta_venta_debe && $importe_subtotal > 0) {
                        $array_cuentas_debe[] = array(
                            //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('xxxxxxxx'), // CUENTA DE COMPRA DE REP
                            'cntb_cuenta' => $cntb_cuenta_venta_debe,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_subtotal,
                        );
                    }
                }
            }

            if ($importe_iva > 0) {
                $array_cuentas_debe[] = array(
                    'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010404'), //IVA CREDITO FISCAL 
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_iva,
                );
            }

            if ($importe_tributo > 0) {
                foreach ($pde_factura_pde_tributos as $pde_factura_pde_tributo) {
                    $pde_tributo = $pde_factura_pde_tributo->getPdeTributo();
                    $importe_tributo_uno = $pde_factura_pde_tributo->getImporteTributo();
                    $cntb_cuenta_tributo = $pde_tributo->getCntbCuenta();
                    if ($cntb_cuenta_tributo && $importe_tributo_uno > 0) {
                        $array_cuentas_debe[] = array(
                            //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('53010118'), // INGRESOS BRUTOS 
                            'cntb_cuenta' => $cntb_cuenta_tributo,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_tributo_uno,
                        );
                    }
                }
            }

            // -----------------------------------------------------------------
            // HABER
            // -----------------------------------------------------------------
            if ($cntb_cuenta_compra_haber) {
                $array_cuentas_haber[] = array(
                    //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010101'), // CAJA ADMINISTRACION 
                    'cntb_cuenta' => $cntb_cuenta_compra_haber,
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_total,
                );
            }

            //Gral::prr($array_cuentas_debe);
            //Gral::prr($array_cuentas_haber);

            if ($cntb_ejercicio) {

                $cntb_diario_asiento = false;
                $fecha = $this->getFechaEmision();

                $arr_estado_control = $cntb_ejercicio->setRegistrarAsiento($cntb_diario_asiento, $fecha, $cntb_tipo_asiento, $gral_actividad, $cntb_tipo_origen, $cntb_tipo_movimiento, $descripcion, $array_cuentas_debe, $array_cuentas_haber, $cntb_periodo);
                //Gral::prr($arr_estado_control);
                //--------------------------------------------------------------
                // se vincula el comprobante con el asiento contable
                //--------------------------------------------------------------
                if ($arr_estado_control['error'] == 0) {
                    $cntb_diario_asiento = $arr_estado_control['cntb_diario_asiento'];

                    $this->setVincularAsientoContable($cntb_diario_asiento);
                }
                else {
                    Gral::prr($arr_estado_control);
                }

                return $arr_estado_control;
            }
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 16/08/2018 17:52h
     * Metodo que vincula el comprobante con su correspondiente asiento contable
     * @param type $cntb_diario_asiento
     */
    public function setVincularAsientoContable($cntb_diario_asiento) {
        if ($cntb_diario_asiento) {
            $cntb_diario_asiento_pde_factura = new CntbDiarioAsientoPdeFactura();
            $cntb_diario_asiento_pde_factura->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_pde_factura->setPdeFacturaId($this->getId());
            $cntb_diario_asiento_pde_factura->save();

            $pde_tipo_factura = $this->getPdeTipoFactura();
            $pde_tipo_origen_factura = $this->getPdeTipoOrigenFactura();
            $gral_condicion_iva = $this->getGralCondicionIva();
            //$gral_tipo_documento = $this->getGralTipoDocumento();
            //
            // --------------------------------------------------------------------------
            // si fueron ocs
            // --------------------------------------------------------------------------
            $pde_ocs = $this->getPdeOcXPdeFacturaPdeOc();
            if (count($pde_ocs) > 0) {
                $cantidad_items = count($pde_ocs) . " OCs";
            }

            // --------------------------------------------------------------------------
            // si fueron items
            // --------------------------------------------------------------------------
            $pde_factura_items = $this->getPdeFacturaItems();
            if (count($pde_factura_items) > 0) {
                $cantidad_items = count($pde_factura_items) . " Items";
            }

            $descripcion = $pde_tipo_factura->getDescripcion() . " " . $this->getNumeroComprobanteCompleto();
            $observacion = "Emitida por " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " CUIT " . $this->getCuit() . " por " . $cantidad_items;

            // --------------------------------------------------------------------------
            // se actualiza la descripcion y observacion del asiento
            // --------------------------------------------------------------------------
            $cntb_diario_asiento->setDescripcion($descripcion);
            $cntb_diario_asiento->setObservacion($observacion);
            $cntb_diario_asiento->save();
        }
    }

    public function getInsTipoInsumosVinculados() { // -------------------- TEMPORAL
        $ins_tipo_insumos = array();

        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, null, true);
        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $ins_insumo = $pde_factura_pde_oc->getInsInsumo();
            $ins_tipo_insumo = $ins_insumo->getInsTipoInsumo();
            $ins_tipo_insumos[$ins_tipo_insumo->getId()] = $ins_tipo_insumo;
        }

        return $ins_tipo_insumos;
    }

    /**
     * Metodo que retorna el tipo de factura que tiene un proveedor.
     * @param type $prv_proveedor_id
     * @return type PdeTipoFactura
     */
    static function getDeterminacionTipoFactura($prv_proveedor_id) {
        $pde_tipo_factura = PdeTipoFactura::getOxCodigo(PdeTipoFactura::TIPO_FACTURA_B);

        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        if ($prv_proveedor) {
            $gra_condicion_iva_id = $prv_proveedor->getGralCondicionIvaId();

            $gra_condicion_iva_pde_tipo_facturas = GralCondicionIvaPdeTipoFactura::getOsxGralCondicionIvaId($gra_condicion_iva_id);
            foreach ($gra_condicion_iva_pde_tipo_facturas as $gra_condicion_iva_pde_tipo_factura) {
                $pde_tipo_factura = $gra_condicion_iva_pde_tipo_factura->getPdeTipoFactura();
                return $pde_tipo_factura;
            }
        }
        return $pde_tipo_factura;
    }

    /**
     * Metodo que retorna el valor del iva de la factura.
     * @return type float
     */
    public function getPdeFacturaIva() {
        $iva = 0;

        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, null, true);
        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $importe_unitario = $pde_factura_pde_oc->getImporteUnitarioConDescuento();
            $cantidad = $pde_factura_pde_oc->getCantidad();
            $gral_tipo_iva = $pde_factura_pde_oc->getGralTipoIva();
            $valor_iva = $gral_tipo_iva->getValorIva();
            $iva += ($importe_unitario * $cantidad) * ($valor_iva / 100);
        }

        $pde_factura_pde_recepcions = $this->getPdeFacturaPdeRecepcions(null, null, true);
        foreach ($pde_factura_pde_recepcions as $pde_factura_pde_recepcion) {
            $importe_unitario = $pde_factura_pde_recepcion->getImporteUnitario();
            $cantidad = $pde_factura_pde_recepcion->getCantidad();
            $gral_tipo_iva = $pde_factura_pde_recepcion->getGralTipoIva();
            $valor_iva = $gral_tipo_iva->getValorIva();
            $iva += ($importe_unitario * $cantidad) * ($valor_iva / 100);
        }

        // se suman los items sueltos de la factura
        $pde_factura_items = $this->getPdeFacturaItems(null, null, true);
        foreach ($pde_factura_items as $pde_factura_item) {
            $gral_tipo_iva = $pde_factura_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($pde_factura_item->getImporteUnitario(), 2);
            $cantidad = $pde_factura_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }


        return round($iva, 2);
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getPdeFacturaTributo() {
        $pde_factura_pde_tributos = $this->getPdeFacturaPdeTributos(null, null, true);
        $importe_total_tributo = 0;

        foreach ($pde_factura_pde_tributos as $pde_factura_pde_tributo) {
            $importe_total_tributo += $pde_factura_pde_tributo->getImporteTributo();
        }

        return $importe_total_tributo;
    }

    /**
     * Metodo que retorna el subtotal de la factura sin iva.
     * @return type float
     */
    public function getPdeFacturaSubtotal($ins_tipo_insumo = false, $tipo_subtotal = false) {

        // ---------------------------------------------------------------------
        // se suman los items vinculados a OC
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($ins_tipo_insumo) {
            $c->add(InsTipoInsumo::GEN_ATTR_ID, $ins_tipo_insumo->getId(), Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(PdeFacturaPdeOc::GEN_TABLA);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdeFacturaPdeOc::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(InsTipoInsumo::GEN_TABLA, InsTipoInsumo::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, PdeFacturaPdeOc::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, $c, true);
        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $importe_unitario = $pde_factura_pde_oc->getImporteUnitarioConDescuento();
            $cantidad = $pde_factura_pde_oc->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        // ---------------------------------------------------------------------
        // se suman los items vinculados a RCP
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, PdeFacturaPdeRecepcion::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $pde_factura_pde_recepcions = $this->getPdeFacturaPdeRecepcions(null, $c, true);
        foreach ($pde_factura_pde_recepcions as $pde_factura_pde_recepcion) {
            $importe_unitario = $pde_factura_pde_recepcion->getImporteUnitario();
            $cantidad = $pde_factura_pde_recepcion->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        // ---------------------------------------------------------------------
        // se suman los items sueltos de la factura
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(PdeFacturaItem::GEN_TABLA);
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, PdeFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $pde_factura_items = $this->getPdeFacturaItems(null, $c, true);
        foreach ($pde_factura_items as $pde_factura_item) {
            $importe_unitario = $pde_factura_item->getImporteUnitario();
            $cantidad = $pde_factura_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        return $subtotal;
    }

    public function getPdeFacturaSubtotalParaComprobante() {
        $pde_tipo_factura = $this->getPdeTipoFactura();

        switch ($pde_tipo_factura->getCodigo()) {
            case PdeTipoFactura::TIPO_FACTURA_A:
                $importe = $this->getPdeFacturaSubtotal();
                break;
            case PdeTipoFactura::TIPO_FACTURA_B:
                $importe = $this->getPdeFacturaSubtotal() + $this->getPdeFacturaIva();
                break;
            default:
                $importe = $this->getImporteUnitario();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getArrPdeTributosAplicados() {
        $pde_factura_pde_tributos = $this->getPdeFacturaPdeTributos(null, null, true);

        foreach ($pde_factura_pde_tributos as $pde_factura_pde_tributo) {
            $pde_tributo = $pde_factura_pde_tributo->getPdeTributo();
            $importe_total_tributo = $pde_factura_pde_tributo->getImporteTributo();

            $arr_tributos[$pde_tributo->getId()] = array(
                'pde_tributo_id' => $pde_tributo->getId(),
                'pde_tributo_descripcion' => $pde_tributo->getDescripcion(),
                'importe' => $importe_total_tributo,
            );
        }
        return $arr_tributos;
    }

    /**
     * Metodo que retorna el total de la factura con iva.
     * @return type float
     */
    public function getPdeFacturaTotal() {
        $total = $this->getPdeFacturaSubtotal() + $this->getPdeFacturaIva() + $this->getPdeFacturaTributo();
//        $total = round($total, 2);
        return $total;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 20/12/2017 11:00 hs.
     * Metodo que envia el factura por email.
     * @return 
     */
    public function enviarFacturaEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Factura #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'pde_factura_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_factura.php";
        $msg = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        if (!empty($archivo_adjunto_urls)) {
            foreach ($archivo_adjunto_urls as $nombre_archivo => $contenido_archivo) {
                $strContenidoPdf = $contenido_archivo;
            }
        }

        $pde_factura_enviado = $this->inicializarPdeFacturaEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

        $mail = new PHPMailer(); // defaults to using php "mail()"

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port = Mail::MAIL_PUERTO_ENVIO;

            $mail->From = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            if (!empty($arr_destinatarios)) {
                foreach ($arr_destinatarios as $arr_destinatario) {
                    if (filter_var($arr_destinatario, FILTER_VALIDATE_EMAIL)) { // comprobarEmail($destinatario)
                        $mail->AddAddress($arr_destinatario); //destinatarios
                    }
                }
            }

            if (!empty($archivo_adjunto_urls)) {
                foreach ($archivo_adjunto_urls as $nombre_archivo => $contenido_archivo) {
                    $mail->AddStringAttachment($contenido_archivo, $nombre_archivo, 'base64', 'application/pdf');
                }
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();
            if ($envio_ok) {
                $pde_factura_enviado->setConfirmarPdeFacturaEnviado(1, PdeFacturaEnviado::FACTURA_ENVIADO_CORRECTAMENTE);
            }
            else {
                $pde_factura_enviado->setConfirmarPdeFacturaEnviado(0, $mail->ErrorInfo);
            }

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 19/10/2017 11:00 hs.
     * Metodo que Inicializa el envio por mail del factura.
     * @return PdeFacturaEnviado
     */
    public function inicializarPdeFacturaEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pde_factura_enviado = new PdeFacturaEnviado();
        $pde_factura_enviado->setDescripcion('');
        $pde_factura_enviado->setPdeFacturaId($this->getId());
        $pde_factura_enviado->setAsunto($mail_asunto);
        $pde_factura_enviado->setDestinatario($destinatarios);

        $pde_factura_enviado->setCuerpo(addslashes($mail_contenido));
        $pde_factura_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pde_factura_enviado->setCodigoEnvio(0);
        $pde_factura_enviado->setObservacion($observacion);
        $pde_factura_enviado->setEstado(0);

        $pde_factura_enviado->save();

        return $pde_factura_enviado;
    }

    public function getNombreArchivoAdjuntoFactura() {
        return Gral::getConfig('gral_cliente') . ' - Factura #' . $this->getCodigo() . '.pdf';
    }

    /**
     * Autor: Romo Gustavo.
     * Fecha: 02/08/2018 16:32 hs.
     * Metodo que retorna un array full con los valores de iva del presupuestos.
     * @return Float
     */
    public function getArrIvaFacturaFull() {
        $arr_iva = array();

        // se suman las ordenes de compra
        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, null, true);
        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $gral_tipo_iva = $pde_factura_pde_oc->getGralTipoIva();

            $importe_unitario = $pde_factura_pde_oc->getImporteUnitarioConDescuento();
            $iva = ($pde_factura_pde_oc->getGralTipoIva()->getValorIva() / 100) * $importe_unitario * $pde_factura_pde_oc->getCantidad();

            $acu_importe_unitario[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()] += $importe_unitario * $pde_factura_pde_oc->getCantidad();
            $acu_iva[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()] += $iva;

            $arr_iva[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()] = array(
                'id' => $pde_factura_pde_oc->getGralTipoIvaId(),
                'descripcion' => $pde_factura_pde_oc->getGralTipoIva()->getDescripcion(),
                'codigo' => $pde_factura_pde_oc->getGralTipoIva()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()],
                'importe_iva' => $acu_iva[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()],
            );
        }

        // se suman los items sueltos de la factura
        $pde_factura_items = $this->getPdeFacturaItems(null, null, true);
        foreach ($pde_factura_items as $pde_factura_item) {
            $gral_tipo_iva = $pde_factura_item->getGralTipoIva();

            $importe_unitario = $pde_factura_item->getImporteUnitario();
            $iva = ($pde_factura_item->getGralTipoIva()->getValorIva() / 100) * $importe_unitario * $pde_factura_item->getCantidad();

            $acu_importe_unitario[$pde_factura_item->getGralTipoIva()->getCodigo()] += $importe_unitario * $pde_factura_item->getCantidad();
            $acu_iva[$pde_factura_item->getGralTipoIva()->getCodigo()] += $iva;

            $arr_iva[$pde_factura_item->getGralTipoIva()->getCodigo()] = array(
                'id' => $pde_factura_item->getGralTipoIvaId(),
                'descripcion' => $pde_factura_item->getGralTipoIva()->getDescripcion(),
                'codigo' => $pde_factura_item->getGralTipoIva()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$pde_factura_item->getGralTipoIva()->getCodigo()],
                'importe_iva' => $acu_iva[$pde_factura_item->getGralTipoIva()->getCodigo()],
            );
        }

        return $arr_iva;
    }

    /**
     * Autor: Romo Gustavo.
     * Fecha: 02/08/2018 16:32 hs.
     * Metodo que retorna un array full con los valores de iva del presupuestos.
     * @return Float
     */
    public function getArrIvaFacturaParaCitiFull() {
        $arr_iva = array();

        // se suman las ordenes de compra
        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, null, true);
        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $gral_tipo_iva = $pde_factura_pde_oc->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $pde_factura_pde_oc->getImporteUnitarioConDescuento();
                $iva = ($pde_factura_pde_oc->getGralTipoIva()->getValorIva() / 100) * $importe_unitario * $pde_factura_pde_oc->getCantidad();

                $acu_importe_unitario[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()] += $importe_unitario * $pde_factura_pde_oc->getCantidad();
                $acu_iva[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()] += $iva;

                $arr_iva[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()] = array(
                    'id' => $pde_factura_pde_oc->getGralTipoIvaId(),
                    'descripcion' => $pde_factura_pde_oc->getGralTipoIva()->getDescripcion(),
                    'codigo' => $pde_factura_pde_oc->getGralTipoIva()->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()],
                    'importe_iva' => $acu_iva[$pde_factura_pde_oc->getGralTipoIva()->getCodigo()],
                );
            }
        }

        // se suman los items sueltos de la factura
        $pde_factura_items = $this->getPdeFacturaItems(null, null, true);
        foreach ($pde_factura_items as $pde_factura_item) {
            $gral_tipo_iva = $pde_factura_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $pde_factura_item->getImporteUnitario();
                $iva = ($pde_factura_item->getGralTipoIva()->getValorIva() / 100) * $importe_unitario * $pde_factura_item->getCantidad();

                $acu_importe_unitario[$pde_factura_item->getGralTipoIva()->getCodigo()] += $importe_unitario * $pde_factura_item->getCantidad();
                $acu_iva[$pde_factura_item->getGralTipoIva()->getCodigo()] += $iva;

                $arr_iva[$pde_factura_item->getGralTipoIva()->getCodigo()] = array(
                    'id' => $pde_factura_item->getGralTipoIvaId(),
                    'descripcion' => $pde_factura_item->getGralTipoIva()->getDescripcion(),
                    'codigo' => $pde_factura_item->getGralTipoIva()->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$pde_factura_item->getGralTipoIva()->getCodigo()],
                    'importe_iva' => $acu_iva[$pde_factura_item->getGralTipoIva()->getCodigo()],
                );
            }
        }

        return $arr_iva;
    }

    /**
     * @creado_por Pablo Rosenperger
     * @creado 15/08/2018
     */
    public function getArrTributoFacturaFull() {
        $arr_tributo = array();
        $pde_factura_pde_tributos = $this->getPdeFacturaPdeTributos(null, null, true);

        foreach ($pde_factura_pde_tributos as $pde_factura_pde_tributo) {
            $importe_unitario = $pde_factura_pde_tributo->getImporteImponible();
            //$importe_tributo = ($pde_factura_pde_tributo->getPdeTributo()->getAlicuotaPorcentual() / 100) * $importe_unitario;
            $importe_tributo = ($pde_factura_pde_tributo->getAlicuotaPorcentual() / 100) * $importe_unitario;

            $acu_importe_unitario[$pde_factura_pde_tributo->getPdeTributo()->getCodigo()] += $importe_unitario;
            $acu_iva[$pde_factura_pde_tributo->getPdeTributo()->getCodigo()] += $importe_tributo;

            $arr_tributo[$pde_factura_pde_tributo->getPdeTributo()->getCodigo()] = array(
                'id' => $pde_factura_pde_tributo->getPdeTributoId(),
                'descripcion' => $pde_factura_pde_tributo->getPdeTributo()->getDescripcion(),
                'codigo' => $pde_factura_pde_tributo->getPdeTributo()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$pde_factura_pde_tributo->getPdeTributo()->getCodigo()],
                'importe_tributo' => $acu_iva[$pde_factura_pde_tributo->getPdeTributo()->getCodigo()],
            );
        }
        return $arr_tributo;
    }

    public function getArrTributoParaAfip() {
        $arr = array();

        $pde_factura_pde_tributos = $this->getPdeFacturaPdeTributos(null, null, true);

        foreach ($pde_factura_pde_tributos as $pde_factura_pde_tributo) {

            $importe_imponible = round($pde_factura_pde_tributo->getImporteImponible(), 2);
            $importe_tributo = round($pde_factura_pde_tributo->getImporteTributo(), 2);
            $pde_tributo = $pde_factura_pde_tributo->getPdeTributo();
            $ws_fe_param_tipo_tributo = $pde_tributo->getWsFeParamTipoTributoXPdeTributoWsFeParamTipoTributo();

            $arr[$pde_factura_pde_tributo->getPdeTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            $arr[$pde_factura_pde_tributo->getPdeTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$pde_factura_pde_tributo->getPdeTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$pde_factura_pde_tributo->getPdeTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$pde_factura_pde_tributo->getPdeTributoId()]['Alic'] = $pde_factura_pde_tributo->getAlicuotaPorcentual();
            $arr[$pde_factura_pde_tributo->getPdeTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    public function setAgregarTributos($txt_comprobante_tributos) {

        // ---------------------------------------------------------------------
        // se eliminan los tributos existentes para cargarlos nuevamente
        // ---------------------------------------------------------------------
        $this->deletePdeFacturaPdeTributos();

        if (is_array($txt_comprobante_tributos)) {
            foreach ($txt_comprobante_tributos as $pde_tributo_id => $txt_comprobante_tributo) {

                $txt_comprobante_tributo = Gral::getImporteDesdePriceFormatToDB($txt_comprobante_tributo);

                if ($txt_comprobante_tributo != 0) {
                    $pde_tributo = PdeTributo::getOxId($pde_tributo_id);
                    $array = array(
                        array('campo' => 'pde_factura_id', 'valor' => $this->getId()),
                        array('campo' => 'pde_tributo_id', 'valor' => $pde_tributo->getId()),
                    );
                    $pde_factura_pde_tributo = PdeFacturaPdeTributo::getOxArray($array);
                    if (!$pde_factura_pde_tributo) {
                        $pde_factura_pde_tributo = new PdeFacturaPdeTributo();
                        $pde_factura_pde_tributo->setPdeFacturaId($this->getId());
                        $pde_factura_pde_tributo->setPdeTributoId($pde_tributo->getId());
                    }

                    $importe_imponible = $this->getPdeFacturaSubtotal();
                    $importe_tributo = $txt_comprobante_tributo;

                    $alicuota_porcentual = ($txt_comprobante_tributo / $importe_imponible) * 100;
                    $alicuota_decimal = ($txt_comprobante_tributo / $importe_imponible);

                    $pde_factura_pde_tributo->setImporteImponible($importe_imponible);
                    $pde_factura_pde_tributo->setImporteTributo($importe_tributo);
                    $pde_factura_pde_tributo->setAlicuotaPorcentual($alicuota_porcentual);
                    $pde_factura_pde_tributo->setAlicuotaDecimal($alicuota_decimal);
                    $pde_factura_pde_tributo->setEstado(1);
                    $pde_factura_pde_tributo->save();
                }
            }
        }

        return; // los tributos de PDE no se calculan ni deducen, se registran de manera explicita
        $pde_tributos_vigentes = $this->getTributosAAplicar();

        // ----------------------------------------------------------------
        // se agrega cada tributo que afecta a la factura
        // ----------------------------------------------------------------
        if (count($pde_tributos_vigentes) > 0) {
            foreach ($pde_tributos_vigentes as $pde_tributo) {

                $array = array(
                    array('campo' => 'pde_factura_id', 'valor' => $this->getId()),
                    array('campo' => 'pde_tributo_id', 'valor' => $pde_tributo->getId()),
                );
                $pde_factura_pde_tributo = PdeFacturaPdeTributo::getOxArray($array);
                if (!$pde_factura_pde_tributo) {
                    $pde_factura_pde_tributo = new PdeFacturaPdeTributo();
                    $pde_factura_pde_tributo->setPdeFacturaId($this->getId());
                    $pde_factura_pde_tributo->setPdeTributoId($pde_tributo->getId());
                }

                $importe_imponible = $this->getPdeFacturaSubtotal();
                $importe_tributo = $this->getPdeFacturaSubtotal() * $pde_tributo->getAlicuotaDecimal();

                $pde_factura_pde_tributo->setImporteImponible($importe_imponible);
                $pde_factura_pde_tributo->setImporteTributo($importe_tributo);
                $pde_factura_pde_tributo->setAlicuotaPorcentual($pde_tributo->getAlicuotaPorcentual());
                $pde_factura_pde_tributo->setAlicuotaDecimal($pde_tributo->getAlicuotaDecimal());
                $pde_factura_pde_tributo->setEstado(1);
                $pde_factura_pde_tributo->save();
            }
        }
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 23/04/2018 11:00 hs.
     * Metodo que retorna los tributos a aplicar.
     * @return PdeTributos
     */
    public function getTributosAAplicar() {
        $pde_tributos_vigentes = array();

        $pde_tributos = PdeTributo::getPdeTributos(null, null, true);

        foreach ($pde_tributos as $pde_tributo) {
            $pde_tributo_aplica = false;

            $formula = $pde_tributo->getFormula();

            eval($formula);

            if ($pde_tributo_aplica) {
                $pde_tributos_vigentes[] = $pde_tributo_aplica;
            }
        }
        return $pde_tributos_vigentes;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo que retorna el numero de comprobante formato "pto pde - num comp afip".
     * @return String
     */
    public function getNumeroComprobanteCompleto() {
        $pde_centro_pedido = $this->getPdeCentroPedido();

        //$numero_punto_venta = $pde_centro_pedido->getNumero();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $numero_comprobante = $this->getNumeroFactura();

        return str_pad($numero_punto_venta, DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
    }

    /**
     * Metodo que retorna el numero de comprobante formato "siglas - letra - pto-vta - num-comp-afip". 
     * @creado_por Esteban Martinez
     * @creado 10/02/2019
     * @return String
     */
    public function getNumeroComprobanteCompletoFull() {
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $siglas_tipo_comprobante = $this->getTipoComprobanteSiglas();
        $numero_comprobante = $this->getNumeroFactura();
        $letra_tipo_comprobante = $this->getPdeTipoFactura()->getCodigoMin();

        return $siglas_tipo_comprobante . ' ' . $letra_tipo_comprobante . ' ' . str_pad($numero_punto_venta, DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     */
    public function getNumeroComprobante() {
        $numero_comprobante = $this->getNumeroFactura();
        return $numero_comprobante;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrIvaParaCitiComprobanteFull() {
        return $this->getArrIvaFacturaParaCitiFull();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrIvaComprobanteFull() {
        return $this->getArrIvaFacturaFull();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrTributoComprobanteFull() {
        return $this->getArrTributoFacturaFull();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 04/01/2021 21:58 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna importe del comprobante.
     * @return Float
     */
    public function getImporteSubtotalComprobante($ins_tipo_insumo = false, $tipo_subtotal = false) {
        return $this->getPdeFacturaSubtotal($ins_tipo_insumo, $tipo_subtotal);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna importe del comprobante.
     * @return Float
     */
    public function getImporteTotalComprobante() {
        return $this->getPdeFacturaTotal();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteDebe() {
        $importe_total_debe = 0;
        return $importe_total_debe;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteHaber() {
        $importe_total_haber = $this->getImporteTotalComprobante();
        return $importe_total_haber;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotal($tipo_subtotal = false) {

        return $this->getPdeFacturaSubtotal(false, $tipo_subtotal);
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 01/10/2018
     */
    public function getImporteIvaBaseImponible($codigo = false, $arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_iva = $arr_iva_full[$codigo];
            $importe = $arr_iva['base_imponible'];
        }
        else {
            foreach ($arr_iva_full as $arr_iva) {
                $importe += $arr_iva['base_imponible'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 01/10/2018
     */
    public function getImporteIvaImporte($codigo = false, $arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_iva = $arr_iva_full[$codigo];
            $importe = $arr_iva['importe_iva'];
        }
        else {
            foreach ($arr_iva_full as $arr_iva) {
                $importe += $arr_iva['importe_iva'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotalNeto105($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }

        $arr_iva = $arr_iva_full["10.5"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotalNeto21($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }

        $arr_iva = $arr_iva_full["21"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 19/10/2018 15:18
     * 
     * Esto devuelve la Base Imponible sobre el cual se calculo el impuesto
     */
    public function getImporteSubtotalNeto0($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }

        $arr_iva = $arr_iva_full["0"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     * 
     * Esto devuelve la Base Imponible sobre el cual se calculo el impuesto
     */
    public function getImporteSubtotalNetoNoGravado($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }

        //$arr_iva = $arr_iva_full["0"]; // anterior
        $arr_iva = $arr_iva_full["NO_GRAVADO"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 19/10/2018 15:18
     * 
     * Esto devuelve la Base Imponible sobre el cual se calculo el impuesto
     */
    public function getImporteSubtotalNetoExento($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }

        $arr_iva = $arr_iva_full["EXENTO"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteIva105($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }

        $arr_iva = $arr_iva_full["10.5"];

        return (is_array($arr_iva)) ? $arr_iva['importe_iva'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteIva21($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaFacturaFull();
        }

        $arr_iva = $arr_iva_full["21"];

        return (is_array($arr_iva)) ? $arr_iva['importe_iva'] : 0;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 03/10/2018
     */
    public function getImporteTributoBaseImponible($codigo = false, $arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoFacturaFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_tributo = $arr_tributo_full[$codigo];
            $importe = $arr_tributo['base_imponible'];
        }
        else {
            foreach ($arr_tributo_full as $arr_tributo) {
                $importe += $arr_tributo['base_imponible'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 03/10/2018
     */
    public function getImporteTributoImporte($codigo = false, $arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoFacturaFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_tributo = $arr_tributo_full[$codigo];
            $importe = $arr_tributo['importe_tributo'];
        }
        else {
            foreach ($arr_tributo_full as $arr_tributo) {
                $importe += $arr_tributo['importe_tributo'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 02/10/2018
     */
    public function getImportePercepcionIIBBMnes($arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoFacturaFull();
        }

        $arr_tributo = $arr_tributo_full[PERCEPCIONES_IIBB_MNES];

        return $arr_tributo['importe_tributo'];
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 02/10/2018
     */
    public function getImportePercepcionIIBBBsAs($arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoFacturaFull();
        }

        $arr_tributo = $arr_tributo_full[PERCEPCIONES_IIBB_BSAS];

        return $arr_tributo['importe_tributo'];
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteTotal() {
        return $this->getPdeFacturaTotal();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna la forma de pago si existe.
     * @return String
     */
    public function getFormaPagoComprobante() {
        $gral_fp_forma_pago = $this->getGralFpFormaPago();
        $descripcion = $gral_fp_forma_pago->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobante() {
        return $this->getPdeTipoFactura()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        return $this->getPdeTipoFactura()->getCodigoMin();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteCodigo() {
        return $this->getPdeTipoFactura()->getCodigo();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo estado si existe.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        $comprobante_tipo_estado = $this->getPdeFacturaTipoEstado();
        $descripcion = $comprobante_tipo_estado->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getPdeTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getPdeTipoOrigenFactura()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getPdeTipoComprobanteDescripcion() {
        $descripcion = $this->getPdeTipoFactura()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 15/05/2018 11:00 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarPdeComprobante_OLD($pde_nota_credito_ids = null, $pde_recibo_ids = null) {
        // Importe a imputar
        $pde_factura_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($pde_recibo_ids as $pde_recibo_id) {
            $pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
            $pde_comprobantes[] = $pde_recibo;
        }
        foreach ($pde_nota_credito_ids as $pde_nota_credito_id) {
            $pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);
            $pde_comprobantes[] = $pde_nota_credito;
        }

        // Ordeno los comprobantes
        usort($pde_comprobantes, array($this, 'getOrdenarColeccionComprobantes'));

        $pde_factura_importe_a_imputar = $pde_factura_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($pde_comprobantes as $pde_comprobante) {

            if ((int) ($pde_factura_importe_a_imputar * 100) > 0) {
                $clase = get_class($pde_comprobante);

                if ($clase == 'PdeNotaCredito') {
                    $pde_nota_credito = PdeNotaCredito::getOxId($pde_comprobante->getId());
                    $pde_nota_credito_importe_disponible = $pde_nota_credito->getSaldoImputable();

                    // Genero la relacion
                    $pde_factura_pde_nota_credito = new PdeFacturaPdeNotaCredito();

                    $pde_factura_pde_nota_credito->setPdeFacturaId($this->getId());
                    $pde_factura_pde_nota_credito->setPdeNotaCreditoId($pde_nota_credito->getId());
                    $pde_factura_pde_nota_credito->setEstado(1);

                    // Monto de la factura mayor o igual al de la NC
                    if ((int) ($pde_factura_importe_a_imputar * 100) < (int) ($pde_nota_credito_importe_disponible * 100)) {

                        $pde_factura_pde_nota_credito->setImporteAfectado($pde_factura_importe_a_imputar);
                        // Cambio el estado de la NC
                        $pde_nota_credito->setPdeNotaCreditoEstado(PdeNotaCreditoTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
//                        $pde_factura_importe_a_imputar = 0;
                    }
                    else {
                        $pde_factura_pde_nota_credito->setImporteAfectado($pde_nota_credito_importe_disponible);

                        // Cambio el estado de la NC
                        $pde_nota_credito->setPdeNotaCreditoEstado(PdeNotaCreditoTipoEstado::TIPO_IMPUTADO, '');
//                        $pde_factura_importe_a_imputar -= $pde_nota_credito_importe_disponible;
                    }
                    $pde_factura_importe_a_imputar -= $pde_nota_credito_importe_disponible;

                    $pde_factura_pde_nota_credito->save();
                }
                elseif ($clase == 'PdeRecibo') {
                    $pde_recibo = PdeRecibo::getOxId($pde_comprobante->getId());

                    $pde_recibo_importe_disponible = $pde_recibo->getSaldoImputable();

                    // Genero la relacion
                    $pde_factura_pde_recibo = new PdeFacturaPdeRecibo();

                    $pde_factura_pde_recibo->setPdeFacturaId($this->getId());
                    $pde_factura_pde_recibo->setPdeReciboId($pde_recibo->getId());
                    $pde_factura_pde_recibo->setEstado(1);

                    // Monto de la factura mayor o igual al del Recibo
                    if ((int) ($pde_factura_importe_a_imputar * 100) < (int) ($pde_recibo_importe_disponible * 100)) {
                        $pde_factura_pde_recibo->setImporteAfectado($pde_factura_importe_a_imputar);
                        // Cambio el estado del Recibo
                        $pde_recibo_tipo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
//                        $pde_factura_importe_a_imputar = 0;
                    }
                    else {
                        $pde_factura_pde_recibo->setImporteAfectado($pde_recibo_importe_disponible);
                        // Cambio el estado del Recibo
                        $pde_recibo_tipo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO, '');
//                        $pde_factura_importe_a_imputar -= $pde_recibo_importe_disponible;
                    }
                    $pde_factura_importe_a_imputar -= $pde_recibo_importe_disponible;
                    $pde_factura_pde_recibo->save();
                }

                // Cambio el estado de la Factura
                if ((int) ($pde_factura_importe_a_imputar * 100) > 0) {
                    $this->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_SALDADO_PARCIAL, '');
                }
                else {
                    $this->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_SALDADO, '');
                }
            }
        }

        return $this;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarPdeComprobante($pde_nota_credito_ids = null, $pde_recibo_ids = null) {
        // Importe a imputar
        $pde_factura_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($pde_recibo_ids as $pde_recibo_id) {
            $pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
            $pde_comprobantes[] = $pde_recibo;
        }
        foreach ($pde_nota_credito_ids as $pde_nota_credito_id) {
            $pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);
            $pde_comprobantes[] = $pde_nota_credito;
        }

        // Ordeno los comprobantes
        usort($pde_comprobantes, array($this, 'self::getOrdenarColeccionComprobantes'));

        $pde_factura_importe_a_imputar = $pde_factura_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($pde_comprobantes as $pde_comprobante) {

            if ((int) ($pde_factura_importe_a_imputar * 100) > 0) {
                $clase = get_class($pde_comprobante);

                if ($clase == 'PdeNotaCredito') {
                    $pde_nota_credito = PdeNotaCredito::getOxId($pde_comprobante->getId());
                    $pde_nota_credito_importe_disponible = $pde_nota_credito->getSaldoImputable();

                    // Genero la relacion
                    $pde_factura_pde_nota_credito = new PdeFacturaPdeNotaCredito();

                    $pde_factura_pde_nota_credito->setPdeFacturaId($this->getId());
                    $pde_factura_pde_nota_credito->setPdeNotaCreditoId($pde_nota_credito->getId());

                    // Monto de la factura mayor o igual al de la NC
                    if ((int) ($pde_factura_importe_a_imputar * 100) < (int) ($pde_nota_credito_importe_disponible * 100)) {
                        $pde_factura_pde_nota_credito->setImporteAfectado($pde_factura_importe_a_imputar);
                    }
                    else {
                        $pde_factura_pde_nota_credito->setImporteAfectado($pde_nota_credito_importe_disponible);
                    }

                    $pde_factura_pde_nota_credito->setEstado(1);
                    $pde_factura_pde_nota_credito->save();

                    $pde_factura_importe_a_imputar -= $pde_nota_credito_importe_disponible;
                }
                elseif ($clase == 'PdeRecibo') {
                    $pde_recibo = PdeRecibo::getOxId($pde_comprobante->getId());

                    $pde_recibo_importe_disponible = $pde_recibo->getSaldoImputable();

                    // Genero la relacion
                    $pde_factura_pde_recibo = new PdeFacturaPdeRecibo();

                    $pde_factura_pde_recibo->setPdeFacturaId($this->getId());
                    $pde_factura_pde_recibo->setPdeReciboId($pde_recibo->getId());

                    // Monto de la factura mayor o igual al del Recibo
                    if ((int) ($pde_factura_importe_a_imputar * 100) < (int) ($pde_recibo_importe_disponible * 100)) {
                        $pde_factura_pde_recibo->setImporteAfectado($pde_factura_importe_a_imputar);
                    }
                    else {
                        $pde_factura_pde_recibo->setImporteAfectado($pde_recibo_importe_disponible);
                    }

                    $pde_factura_pde_recibo->setEstado(1);
                    $pde_factura_pde_recibo->save();

                    $pde_factura_importe_a_imputar -= $pde_recibo_importe_disponible;
                }
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado de los comprobantes vinculados
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado($recursivo = true);

        return $this;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo que redefine el estado del comprobante de acuerdo a sus conciliaciones actuales
     * @return Obj PdeFacturaEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        $pde_factura_pde_nota_creditos = $this->getPdeFacturaPdeNotaCreditos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $importe_afectado = $pde_factura_pde_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $pde_factura_pde_recibo->getPdeRecibo()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) {
            $importe_afectado = $pde_factura_pde_nota_credito->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $pde_factura_pde_nota_credito->getPdeNotaCredito()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= 0.1)) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------
            $pde_factura_estado = $this->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_SALDADO, '');
        }
        elseif ($importe_comprobante_saldo > 0.1 && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $pde_factura_estado = $this->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_SALDADO_PARCIAL, '');
        }
        elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $pde_factura_estado = $this->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_PENDIENTE, '');
        }

        return $pde_factura_estado;
    }

    static function getOrdenarColeccionComprobantes($pde_comprobante, $pde_comprobante_comparacion) {
        $fecha_emision = strtotime(date($pde_comprobante->getFechaEmision()));
        $fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getFechaEmision()));

        if ($fecha_emision == $fecha_emision_comparacion)
            return 0;

        return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 06/11/2018 20:04 hs.
     * Metodo que rompe los vinculos del comprobante conciliado
     * @return Booleano
     */
    public function setDesvincularComprobantesConciliados($recursivo = false) {

        $pde_factura_pde_nota_creditos = $this->getPdeFacturaPdeNotaCreditos(null, null, true);
        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) {
            $pde_factura_pde_nota_credito->setEstado(0);
            $pde_factura_pde_nota_credito->save();

            if ($recursivo) {
                $pde_factura_pde_nota_credito->getPdeNotaCredito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $pde_factura_pde_recibo->setEstado(0);
            $pde_factura_pde_recibo->save();

            if ($recursivo) {
                $pde_factura_pde_recibo->getPdeRecibo()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado del comprobante
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado(false);

        return true;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 15/05/2018 11:00 hs.
     * Metodo que retorna el importe disponible a imputar de una Factura.
     * @return Float
     */
    public function getSaldoImputable() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total de la Factura
        $importe_total_comprobante = $this->getImporteTotalComprobante();

        // Busco el importe total ya imputado con Recibos
        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $importe_total_comprobante_afectado += $pde_factura_pde_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Creditos
        $pde_factura_pde_nota_creditos = $this->getPdeFacturaPdeNotaCreditos(null, null, true);
        foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) {
            $importe_total_comprobante_afectado += $pde_factura_pde_nota_credito->getImporteAfectado();
        }

        $importe_total_comprobante = round($importe_total_comprobante, 2);
        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante - $importe_total_comprobante_afectado;

        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/208 21:34 hs.
     * Metodo que retorna el importe disponible a imputar de una Factura.
     * @return Float
     */
    public function getSaldoImputado() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total ya imputado con Recibos
        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $importe_total_comprobante_afectado += $pde_factura_pde_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Creditos
        $pde_factura_pde_nota_creditos = $this->getPdeFacturaPdeNotaCreditos(null, null, true);
        foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) {
            $importe_total_comprobante_afectado += $pde_factura_pde_nota_credito->getImporteAfectado();
        }

        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante_afectado;

        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de Facturas para imputar en las NC y Recibos.
     * @return PdeFacturas
     */
    static function getPdeFacturasImputables($prv_proveedor_id, $gral_empresa_id) {
        $criterio = new Criterio(PdeFactura::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        $criterio->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $criterio->add(PdeFactura::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        //$criterio->add('', 'true', '', false, "");
//        $criterio->add(PdeFacturaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(PdeFacturaTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
//        $criterio->add(PdeFacturaTipoEstado::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);

        $criterio->addRealJoin(PdeFacturaTipoEstado::GEN_TABLA, PdeFacturaTipoEstado::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(PdeFactura::GEN_TABLA);
        $criterio->setCriterios();

        $pde_facturas = PdeFactura::getPdeFacturas(null, $criterio, true);

        return $pde_facturas;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe disponible para ser imputado en un Recibo o una Nota de Credito.
     * @return Float
     */
    public function getImporteDisponibleComprobante() {
        return $this->getImporteTotalComprobante();
    }

    public function getPdeComprobanteTipoEstado() {
        return $this->getPdeFacturaTipoEstado();
    }

    //--------------------------------------------------------------------------
    // Fin - Metodos de conciliacion de comprobantes
    //--------------------------------------------------------------------------

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/09/2018 10:24
     * @return Float
     */
    public function getImporteDisponibleParaOrdenPago($aplicar_df_tentativo = false) {
        $importe_disponible = $this->getImporteTotal();
        $importe_saldado = $this->getSaldoImputado();

        $prv_descuento_financiero = $this->getPrvDescuentoFinanciero();
        $porcentaje_descuento_tentativo = $prv_descuento_financiero->getPorcentajeDescuento();

        if ($aplicar_df_tentativo) {
            $importe_disponible = $importe_disponible - ($importe_disponible * ($porcentaje_descuento_tentativo / 100));
        }

        $pde_orden_pago_pde_facturas = $this->getPdeOrdenPagoPdeFacturasActivas();
        foreach ($pde_orden_pago_pde_facturas as $pde_orden_pago_pde_factura) {
            $importe_disponible -= $pde_orden_pago_pde_factura->getImporteAfectado();
        }

        // se resta lo que ya esta pagado
        $importe_disponible = $importe_disponible - $importe_saldado;

        return $importe_disponible;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/01/2021 15:11
     * @return Float
     */
    public function getImporteImponibleDisponibleParaOrdenPago($aplicar_df_tentativo = false) {
        $importe_disponible = $this->getImporteTotal();

        $porcentaje_imponible_decimal = $this->getPorcentajeImponibleDecimal();

        $importe_saldado = $this->getSaldoImputado();

        $prv_descuento_financiero = $this->getPrvDescuentoFinanciero();
        $porcentaje_descuento_tentativo = $prv_descuento_financiero->getPorcentajeDescuento();

        if ($aplicar_df_tentativo) {
            $importe_disponible = $importe_disponible - ($importe_disponible * ($porcentaje_descuento_tentativo / 100));
        }

        $pde_orden_pago_pde_facturas = $this->getPdeOrdenPagoPdeFacturasActivas();
        foreach ($pde_orden_pago_pde_facturas as $pde_orden_pago_pde_factura) {
            $importe_disponible -= $pde_orden_pago_pde_factura->getImporteAfectado();
        }

        // se resta lo que ya esta pagado
        $importe_disponible = $importe_disponible - $importe_saldado;
        $importe_disponible = $importe_disponible * $porcentaje_imponible_decimal;

        return $importe_disponible;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/01/2021 15:11
     * @return Float
     */
    public function getPorcentajeImponibleDecimal() {
        $importe_disponible = $this->getImporteTotal();
        $importe_imponible_disponible = $this->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_GRAVADO);

        $porcentaje_imponible_decimal = $importe_imponible_disponible / $importe_disponible;
        return $porcentaje_imponible_decimal;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 18/12/2019
     */
    public function getImporteDescuentoFinancieroAplicado() {
        $importe_afectado = 0;
        $pde_factura_pde_nota_creditos = $this->getPdeFacturaPdeNotaCreditos(null, null, true);
        foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) {
            $importe_afectado += $pde_factura_pde_nota_credito->getImporteAfectado();
        }

        return $importe_afectado;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 18/12/2019
     */
    public function getImporteEnOtrasOP($pde_orden_pago) {
        $importe_afectado = 0;
        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $pde_recibo = $pde_factura_pde_recibo->getPdeRecibo();
            if ($pde_recibo) {
                $pde_orden_pago_vinculado_al_comprobante = $pde_recibo->getPdeOrdenPago();
                if ($pde_orden_pago_vinculado_al_comprobante && $pde_orden_pago_vinculado_al_comprobante->getId() != $pde_orden_pago->getId()) {
                    $importe_afectado += $pde_factura_pde_recibo->getImporteAfectado();
                }
            }
        }

        return $importe_afectado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 10/10/2018 15:50
     * @return PdeOrdenPagoPdeFacturas
     */
    public function getPdeOrdenPagoPdeFacturasActivas() {
        $c = new Criterio();
        $c->addDistinct(false);
        $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);
        $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_ID, PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID);
        $c->addRealJoin(PdeOrdenPagoTipoEstado::GEN_TABLA, PdeOrdenPagoTipoEstado::GEN_ATTR_ID, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID);
        $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_orden_pago_pde_facturas = $this->getPdeOrdenPagoPdeFacturas(null, $c, true);
        return $pde_orden_pago_pde_facturas;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/09/2018 10:24
     * @return Float
     */
    public function getImporteEnOrdenPago($pde_orden_pago = false) {
        $importe_en_orden_pago = 0;
        $criterio = new Criterio();
        $criterio->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        if ($pde_orden_pago) {
            $criterio->add('pde_orden_pago_id', $pde_orden_pago->getId(), Criterio::IGUAL);
        }
        $criterio->addTabla(PdeOrdenPagoPdeFactura::GEN_TABLA);
        $criterio->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_ID, PdeOrdenPagoPdeFactura::GEN_ATTR_PDE_ORDEN_PAGO_ID);
        $criterio->addRealJoin(PdeOrdenPagoTipoEstado::GEN_TABLA, PdeOrdenPagoTipoEstado::GEN_ATTR_ID, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $pde_orden_pago_pde_facturas = $this->getPdeOrdenPagoPdeFacturas(null, $criterio, true);

        foreach ($pde_orden_pago_pde_facturas as $pde_orden_pago_pde_factura) {
            $importe_en_orden_pago += $pde_orden_pago_pde_factura->getImporteAfectado();
        }

        return $importe_en_orden_pago;
    }

    /* Método getInfoBtnVolver */

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'pde_factura_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getPdeComprobantesVinculadosPorConciliacion() {
        $pde_factura_pde_nota_creditos = $this->getPdeFacturaPdeNotaCreditos(null, null, true);
        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);

        $pde_nota_creditos = $this->getPdeNotaCreditosXPdeFacturaPdeNotaCredito(null, null, true);
        $pde_recibos = $this->getPdeRecibosXPdeFacturaPdeRecibo(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($pde_factura_pde_nota_creditos, $pde_factura_pde_recibos);
        $arr_comprobantes['EXTREMO'] = array_merge($pde_nota_creditos, $pde_recibos);

        // ---------------------------------------------------------------------
        // generacion de string para CSS
        // ---------------------------------------------------------------------
        $css_comprobantes_vinculados_por_conciliacion = '';
        foreach ($arr_comprobantes['EXTREMO'] as $arr_comprobante) {
            $css_comprobantes_vinculados_por_conciliacion .= ' CC_' . $arr_comprobante->getCodigo();
        }
        $arr_comprobantes['CSS_VINCULACION'] = $css_comprobantes_vinculados_por_conciliacion;
        // ---------------------------------------------------------------------

        return $arr_comprobantes;
    }

    /**
     * Metodo que retorna las ordenes de pago activas vinculadas
     */
    public function getPdeOrdenPagoPdeComprobanteActivas() {
        $pde_orden_pago_pde_facturas = $this->getPdeOrdenPagoPdeFacturasActivas();

        $arr_comprobantes['INTERMEDIO'] = $pde_orden_pago_pde_facturas;

        return $arr_comprobantes;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteTotalOperacion() {
        $afip_citi_importe_total_operacion = $this->getImporteTotal();

        $afip_citi_importe_total_operacion = round($afip_citi_importe_total_operacion, 2);
        $afip_citi_importe_total_operacion = Gral::completar_decimales($afip_citi_importe_total_operacion);

        $afip_citi_importe_total_operacion = str_replace(".", '', $afip_citi_importe_total_operacion);
        $afip_citi_importe_total_operacion = str_pad($afip_citi_importe_total_operacion, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_total_operacion = substr($afip_citi_importe_total_operacion, 0, 15);

        return $afip_citi_importe_total_operacion;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     * 
     * Campo 10: Importe total de conceptos que no integran el precio neto gravado. 
      Se procedera a informar los importes que no integren el hecho imponible. Dicho importe podrá ser cero.
     */
    public function getAfipCitiComprasCbteImporteTotalConceptos() {
        $importe_base_imponible_no_gravado = $this->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_NO_GRAVADO);

        $afip_citi_importe_total_conceptos = $importe_base_imponible_no_gravado;

        $afip_citi_importe_total_conceptos = round($afip_citi_importe_total_conceptos, 2);
        $afip_citi_importe_total_conceptos = Gral::completar_decimales($afip_citi_importe_total_conceptos);
        $afip_citi_importe_total_conceptos = str_replace(".", '', $afip_citi_importe_total_conceptos);
        $afip_citi_importe_total_conceptos = str_pad($afip_citi_importe_total_conceptos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_total_conceptos = substr($afip_citi_importe_total_conceptos, 0, 15);

        return $afip_citi_importe_total_conceptos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteOperacionesExentas() {
        $importe_base_imponible_exento = $this->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_EXENTO);

        $afip_citi_importe_operaciones_exentas = $importe_base_imponible_exento;

        $afip_citi_importe_operaciones_exentas = round($afip_citi_importe_operaciones_exentas, 2);
        $afip_citi_importe_operaciones_exentas = Gral::completar_decimales($afip_citi_importe_operaciones_exentas);

        $afip_citi_importe_operaciones_exentas = str_replace(".", '', $afip_citi_importe_operaciones_exentas);
        $afip_citi_importe_operaciones_exentas = str_pad($afip_citi_importe_operaciones_exentas, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_operaciones_exentas = substr($afip_citi_importe_operaciones_exentas, 0, 15);

        return $afip_citi_importe_operaciones_exentas;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImportePercepcionIva($arr_tributo_full = false) {
        $importe_perc_iva = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_IVA, $arr_tributo_full);
        $importe_iva_adicional = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_IVA_ADICIONAL, $arr_tributo_full);
        $afip_citi_importe_percepciones_iva = $importe_perc_iva + $importe_iva_adicional;

        $afip_citi_importe_percepciones_iva = round($afip_citi_importe_percepciones_iva, 2);
        $afip_citi_importe_percepciones_iva = Gral::completar_decimales($afip_citi_importe_percepciones_iva);

        $afip_citi_importe_percepciones_iva = str_replace(".", '', $afip_citi_importe_percepciones_iva);
        $afip_citi_importe_percepciones_iva = str_pad($afip_citi_importe_percepciones_iva, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_iva = substr($afip_citi_importe_percepciones_iva, 0, 15);

        return $afip_citi_importe_percepciones_iva;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImportePercepcionesImpuestosNacionales($arr_tributo_full = false) {
        $importe_perc_impuestos_nacionales = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_IMPUESTOS_NACIONALES, $arr_tributo_full);
        $importe_perc_ganancias = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_GANANCIAS, $arr_tributo_full);
        $afip_citi_importe_percepciones_impuestos_nacionales = $importe_perc_impuestos_nacionales + $importe_perc_ganancias;

        $afip_citi_importe_percepciones_impuestos_nacionales = round($afip_citi_importe_percepciones_impuestos_nacionales, 2);
        $afip_citi_importe_percepciones_impuestos_nacionales = Gral::completar_decimales($afip_citi_importe_percepciones_impuestos_nacionales);

        $afip_citi_importe_percepciones_impuestos_nacionales = str_replace(".", '', $afip_citi_importe_percepciones_impuestos_nacionales);
        $afip_citi_importe_percepciones_impuestos_nacionales = str_pad($afip_citi_importe_percepciones_impuestos_nacionales, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_impuestos_nacionales = substr($afip_citi_importe_percepciones_impuestos_nacionales, 0, 15);

        return $afip_citi_importe_percepciones_impuestos_nacionales;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     * @modificado 02/10/2018
     */
    public function getAfipCitiComprasCbteImportePercepcionesIngresosBrutos($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_ingresos_brutos_mnes = $this->getImportePercepcionIIBBMnes($arr_tributo_full);
        $afip_citi_importe_percepciones_ingresos_brutos_bsas = $this->getImportePercepcionIIBBBsAs($arr_tributo_full);

        $afip_citi_importe_percepciones_ingresos_brutos = $afip_citi_importe_percepciones_ingresos_brutos_mnes + $afip_citi_importe_percepciones_ingresos_brutos_bsas;

        $afip_citi_importe_percepciones_ingresos_brutos = round($afip_citi_importe_percepciones_ingresos_brutos, 2);
        $afip_citi_importe_percepciones_ingresos_brutos = Gral::completar_decimales($afip_citi_importe_percepciones_ingresos_brutos);

        $afip_citi_importe_percepciones_ingresos_brutos = str_replace(".", '', $afip_citi_importe_percepciones_ingresos_brutos);
        $afip_citi_importe_percepciones_ingresos_brutos = str_pad($afip_citi_importe_percepciones_ingresos_brutos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_ingresos_brutos = substr($afip_citi_importe_percepciones_ingresos_brutos, 0, 15);

        return $afip_citi_importe_percepciones_ingresos_brutos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImportePercepcionesImpuestosMunicipales($arr_tributo_full = false) {
        $importe = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_IMPUESTOS_MUNICIPALES, $arr_tributo_full);
        $afip_citi_importe_percepciones_impuestos_municipales = $importe;

        $afip_citi_importe_percepciones_impuestos_municipales = round($afip_citi_importe_percepciones_impuestos_municipales, 2);
        $afip_citi_importe_percepciones_impuestos_municipales = Gral::completar_decimales($afip_citi_importe_percepciones_impuestos_municipales);

        $afip_citi_importe_percepciones_impuestos_municipales = str_replace(".", '', $afip_citi_importe_percepciones_impuestos_municipales);
        $afip_citi_importe_percepciones_impuestos_municipales = str_pad($afip_citi_importe_percepciones_impuestos_municipales, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_impuestos_municipales = substr($afip_citi_importe_percepciones_impuestos_municipales, 0, 15);

        return $afip_citi_importe_percepciones_impuestos_municipales;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteImpuestosInternos($arr_tributo_full = false) {
        $importe = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_IMPUESTOS_INTERNOS, $arr_tributo_full);
        $afip_citi_importe_impuestos_internos = $importe;

        $afip_citi_importe_impuestos_internos = round($afip_citi_importe_impuestos_internos, 2);
        $afip_citi_importe_impuestos_internos = Gral::completar_decimales($afip_citi_importe_impuestos_internos);

        $afip_citi_importe_impuestos_internos = str_replace(".", '', $afip_citi_importe_impuestos_internos);
        $afip_citi_importe_impuestos_internos = str_pad($afip_citi_importe_impuestos_internos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_impuestos_internos = substr($afip_citi_importe_impuestos_internos, 0, 15);

        return $afip_citi_importe_impuestos_internos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteCfComputable($arr_tributo_full = false) {
        $importe = $this->getImporteIvaImporte(); // si no se prrorratea debe indicarse el valor del IVA liquidado, aqui hay que analizar opciones de PRORRATEO del CF (Global o Por Comprobante)
        $afip_citi_importe_cf_computable = $importe;

        $afip_citi_importe_cf_computable = round($afip_citi_importe_cf_computable, 2);
        $afip_citi_importe_cf_computable = Gral::completar_decimales($afip_citi_importe_cf_computable);

        $afip_citi_importe_cf_computable = str_replace(".", '', $afip_citi_importe_cf_computable);
        $afip_citi_importe_cf_computable = str_pad($afip_citi_importe_cf_computable, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_cf_computable = substr($afip_citi_importe_cf_computable, 0, 15);

        return $afip_citi_importe_cf_computable;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteOtrosTributos($arr_tributo_full = false) {
        $importe = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_OTROS_TRIBUTOS, $arr_tributo_full);
        $afip_citi_importe_otros_tributos = $importe;

        $afip_citi_importe_otros_tributos = round($afip_citi_importe_otros_tributos, 2);
        $afip_citi_importe_otros_tributos = Gral::completar_decimales($afip_citi_importe_otros_tributos);

        $afip_citi_importe_otros_tributos = str_replace(".", '', $afip_citi_importe_otros_tributos);
        $afip_citi_importe_otros_tributos = str_pad($afip_citi_importe_otros_tributos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_otros_tributos = substr($afip_citi_importe_otros_tributos, 0, 15);

        return $afip_citi_importe_otros_tributos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteIvaComision() {
        $afip_citi_importe_iva_comision = "0.00"; //revisar logica.

        $afip_citi_importe_iva_comision = round($afip_citi_importe_iva_comision, 2);
        $afip_citi_importe_iva_comision = Gral::completar_decimales($afip_citi_importe_iva_comision);

        $afip_citi_importe_iva_comision = str_replace(".", '', $afip_citi_importe_iva_comision);
        $afip_citi_importe_iva_comision = str_pad($afip_citi_importe_iva_comision, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_iva_comision = substr($afip_citi_importe_iva_comision, 0, 15);

        return $afip_citi_importe_iva_comision;
    }

    /*
     * @creado_por Esteban Martinez
     * @creado 10/10/2018
     */

    public function getAfipCitiVentasDenominacionVendedor() {
        $denominacion_vendedor = $this->getPersonaDescripcion();

        $find = array('/[^A-Za-z0-9\- <>]/');
        $repl = array('');
        $denominacion_vendedor = preg_replace($find, $repl, $denominacion_vendedor);

        //se rellena
        $denominacion_vendedor = str_pad($denominacion_vendedor, 30, " ", STR_PAD_RIGHT);
        //se corta
        $denominacion_vendedor = substr($denominacion_vendedor, 0, 30);
        return $denominacion_vendedor;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/12/2018 11:06
     * Metodo que verifica la existencia o no de un numero de comprobante para un mismo proveedor
     * @return PdeFactura
     */
    static function getPdeFacturaXProveedorYNumero($prv_proveedor_id, $numero_comprobante_completo) {
        $c = new Criterio();
        $c->add(PdeFacturaTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->add(PrvProveedor::GEN_ATTR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $c->add(PdeFactura::GEN_ATTR_NUMERO_FACTURA_COMPLETO, $numero_comprobante_completo, Criterio::IGUAL);
        $c->addTabla(PdeFactura::GEN_TABLA);
        $c->addRealJoin(PdeFacturaTipoEstado::GEN_TABLA, PdeFacturaTipoEstado::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID);
        $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $pde_facturas = PdeFactura::getPdeFacturas($p, $c);
        foreach ($pde_facturas as $pde_factura) {
            return $pde_factura;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 13/06/2019 13:45
     * Metodo que registra la anulacion del comprobante
     */
    public function setAnularComprobante($observacion) {
        // ---------------------------------------------------------------------
        // se registra nuevo estado de anulado
        // ---------------------------------------------------------------------
        $pde_factura_estado = $this->setPdeFacturaEstado(
                PdeFacturaTipoEstado::TIPO_ANULADO, $observacion
        );

        foreach ($this->getPdeFacturaPdeOcs() as $pde_factura_pde_oc) {
            $pde_factura_pde_oc->setDesvincularOC($observacion = 'Se retrotrae estado por anulacion de Factura ' . $this->getNumeroComprobanteCompleto());
        }

        return $pde_factura_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/06/202023:42
     * Metodo que retorna un array con reclamos vinculados al comprobante
     */
    public function getArrReclamosComprobante() {
        $array_reclamos = array();

        $pde_ocs = $this->getPdeOcsXPdeFacturaPdeOc();
        foreach ($pde_ocs as $pde_oc) {
            $pde_oc_reclamo = $pde_oc->getPdeOcReclamo();
            if ($pde_oc_reclamo) {
                $array_reclamo = array(
                    'motivo' => $pde_oc_reclamo->getPdeOcReclamoMotivo()->getDescripcion(),
                    'observacion' => $pde_oc_reclamo->getObservacion(),
                    'creado' => $pde_oc_reclamo->getCreado(),
                    'creado_por' => $pde_oc_reclamo->getCreadoPorDescripcion(),
                    'descripcion_full' => $pde_oc_reclamo->getDescripcionFull(),
                );
                $array_reclamos[] = $array_reclamo;
            }
        }

        return $array_reclamos;
    }
    
    /**
     * 
     * @return type
     */
    public function getFechaVencimientoDiferenciaDias() {
        $fecha_hace = Date::getDiferenciaTiempo('d', $this->getFechaVencimiento(), $fecha_hasta = date('Y-m-d'));
        return $fecha_hace;
    }

    /**
     * 
     * @return string
     */
    public function getFechaVencimientoDiferenciaDiasDescripcion() {
        if($this->getFechaVencimiento() == '1900-01-01'){
            return '';
        }
        
        $dias = $this->getFechaVencimientoDiferenciaDias();

        if ($dias > 0) {
            $dias_descripcion = 'hace ' . abs($dias) . ' dias';
        } elseif ($dias < 0) {
            $dias_descripcion = 'faltan ' . abs($dias) . ' dias';
        } else {
            $dias_descripcion = 'hoy';
        }
        return $dias_descripcion;
    }

    /**
     * 
     * @return string
     */
    public function getFechaVencimientoDiferenciaDiasCss() {
        if($this->getFechaVencimiento() == '1900-01-01'){
            return '';
        }
        
        $dias = $this->getFechaVencimientoDiferenciaDias();

        if ($dias < -10) {
            $css = 'regular';
        } elseif ($dias < 0) {
            $css = 'vence-pronto';
        } elseif ($dias == 0) {
            $css = 'vence-hoy';
        } else {
            $css = 'vencido';
        }
        return $css;
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $pde_factura_importe = $this->getPdeFacturaImporte();

        if (!$pde_factura_importe) {
            $pde_factura_importe = new PdeFacturaImporte();
        }

        $importe_subtotal = $this->getPdeFacturaSubtotal(false, false);
        $importe_iva = $this->getPdeFacturaIva();
        $importe_tributo = $this->getPdeFacturaTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $pde_factura_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $pde_factura_importe->setPdeFacturaId($this->getId());
        $pde_factura_importe->setImporteSubtotal($importe_subtotal);
        $pde_factura_importe->setImporteIva($importe_iva);
        $pde_factura_importe->setImporteTributo($importe_tributo);
        $pde_factura_importe->setImporteTotal($importe_total);
        $pde_factura_importe->setEstado(1);
        $pde_factura_importe->save();

        return $pde_factura_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getPdeFacturaImporte();
        if ($o) {
            return $o;
        }        

        return new PdeFacturaImporte();
    }

    /**
     * Registra para la factura los porcentajes afectados a centro de costos
     *
     * @param [array] $arr_porcentaje_afectado array con los porcentajes afectados. Cada indice es centro_costo_id
     * @param [string] opcional $observacion Observacion sobre los porcentajes afectados
     * @return void
     * @creado_por Esteban Martinez
     * @creado 20/08/2021
     */
    public function setPorcentajeAfectadoEnCentroCosto($arr_porcentaje_afectado) {
        if (!empty($arr_porcentaje_afectado)) {
            //---------------------------------------
            //Se borra porcentajes afectados previamente
            //---------------------------------------
            $this->deletePdeFacturaGralCentroCostos();

            $importe_afectado = 0;
            foreach ($arr_porcentaje_afectado as $gral_centro_costo_id => $porcentaje_afectado) {
                $porcentaje_afectado = Gral::getImporteDesdePriceFormatToDB($porcentaje_afectado);
                if ($porcentaje_afectado > 0) {
                    //$importe_afectado = ($this->getPdeFacturaTotal() * $porcentaje_afectado) / 100;
                    $importe_afectado = ($this->getPdeFacturaSubtotal() * $porcentaje_afectado) / 100;

                    $pde_factura_gral_centro_costo = new PdeFacturaGralCentroCosto();
                    $pde_factura_gral_centro_costo->setPdeFacturaId($this->getId());
                    $pde_factura_gral_centro_costo->setGralCentroCostoId($gral_centro_costo_id);
                    $pde_factura_gral_centro_costo->setPorcentajeAfectado($porcentaje_afectado);
                    $pde_factura_gral_centro_costo->setImporteAfectado($importe_afectado);
                    $pde_factura_gral_centro_costo->setEstado(1);
                    $pde_factura_gral_centro_costo->save();
                }
            }
        }
    }
    
    /**
     * 
     * @return string
     */
    public function getCondicionVentaDescripcion(){
        switch ($this->getGralFpFormaPago()->getCodigo()){
            case GralFpFormaPago::TIPO_CUENTA_CORRIENTE:
                $texto = 'Credito';
                break;
            default:
                $texto = 'Contado';
        }
        return $texto;
    }

}

?>