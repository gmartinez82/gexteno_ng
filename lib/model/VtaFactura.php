<?php

require_once "base/BVtaFactura.php";

class VtaFactura extends BVtaFactura {

    const PREFIJO_FACTURA = 'FRA-';

    public function getTipoComprobanteSiglas() {
        return "FAC";
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
                    $criterio->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_autenticado->getId(), Criterio::IGUAL);
                    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID);
                    break;
                default:
                    $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursals_autorizadas_ids, Criterio::IN_ARRAY);
                    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID);
            }
        } else {
            // -----------------------------------------------------------------
            // si no es vendedor
            // -----------------------------------------------------------------
            $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursals_autorizadas_ids, Criterio::IN_ARRAY);
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaFactura::GEN_ATTR_GRAL_SUCURSAL_ID);
        }

        return $criterio;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 09:00 hs.
     * Metodo que genera una factura.
     * @return Obj VtaFactura
     */
    static function setInicializarVtaFacturaOrdenVenta($vta_presupuesto = false, $cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $txt_persona_descripcion, $cmb_gral_tipo_documento_id, $txt_persona_documento, $txt_persona_email, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $gral_fp_cuota_id, $txt_nro_timbrado, $txt_fecha_vencimiento, $gral_actividad_id, $gral_escenario_id, $cli_centro_recepcion_id, $vta_tipo_factura_id = 0, $ws_fe_param_tipo_concepto_id = 1, $txa_nota_publica = '', $observacion = '') {
        
        // se determina el origen del comprobante
        $vta_tipo_origen_factura = VtaTipoOrigenFactura::getOxCodigo(VtaTipoOrigenFactura::ORIGEN_ORDEN_VENTA);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);

        $vta_factura = new VtaFactura();

        $vta_factura->setVtaTipoOrigenFacturaId($vta_tipo_origen_factura->getId());

        if ($vta_presupuesto) {
            $gral_sucursal = $vta_presupuesto->getGralSucursal();
        
            $vta_factura->setVtaPresupuestoId($vta_presupuesto->getId());
            $vta_factura->setGralSucursalId($vta_presupuesto->getGralSucursalId());
            $vta_factura->setPorcentaje($vta_presupuesto->getPorcentaje());
        }else{
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $gral_sucursal = $vta_orden_venta->getVtaPresupuesto()->getGralSucursal();
            }
        }
        $vta_factura->setPorcentaje(100); // hardcodeado para asegurar, momentaneamente

        $vta_factura->setVtaPreventistaId($cmb_vta_preventista_id);
        $vta_factura->setVtaCompradorId($cmb_vta_comprador_id);
        $vta_factura->setVtaVendedorId($cmb_vta_vendedor_id);
        $vta_factura->setGralEmpresaId($gral_empresa_id);
        $vta_factura->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_factura->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), 3, 0, STR_PAD_LEFT));
        $vta_factura->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), 3, 0, STR_PAD_LEFT));
        $vta_factura->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $vta_factura->setGralFpCuotaId($gral_fp_cuota_id);
        $vta_factura->setGralActividadId($gral_actividad_id);
        $vta_factura->setGralEscenarioId($gral_escenario_id);
        $vta_factura->setCliCentroRecepcionId($cli_centro_recepcion_id);
        $vta_factura->setFechaEmision(Gral::getFechaActual());
        $vta_factura->setNumeroTimbrado($txt_nro_timbrado);        
        $vta_factura->setFechaVencimiento($txt_fecha_vencimiento);
        if ($gral_mes) {
            $vta_factura->setGralMesId($gral_mes->getId());
        }
        $vta_factura->setAnio(date('Y'));
        $vta_factura->setNotaPublica($txa_nota_publica);
        $vta_factura->setObservacion($observacion);
        $vta_factura->setEstado(1);
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $vta_factura->setCodigo(self::PREFIJO_FACTURA . str_pad($vta_factura->getId(), 8, 0, STR_PAD_LEFT));
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la factura
        // --------------------------------------------------------------------
        $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_GENERADO, $observacion);


        // --------------------------------------------------------------------
        // se agregan los items a la factura
        // --------------------------------------------------------------------
        if (!empty($vta_factura->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $ins_insumo = $vta_orden_venta->getInsInsumo();
                $ins_unidad_medida_id = $ins_insumo->getInsUnidadMedidaId();
                $cantidad_a_facturar = $vta_orden_venta_cantidads[$vta_orden_venta->getId()];

                // Si no hay no trae el id de cliente busco en el presupuesto
                if ($cli_cliente_id == 0) {
                    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
                    $cli_cliente_id = $vta_presupuesto->getCliClienteId();

                    $persona_descripcion = $vta_presupuesto->getPersonaDescripcion();
                    $gral_tipo_documento_id = $vta_presupuesto->getGralTipoDocumentoId();
                    $persona_documento = $vta_presupuesto->getPersonaDocumento();
                    $persona_email = $vta_presupuesto->getPersonaEmail();

                    $persona_descripcion = $txt_persona_descripcion;
                    $gral_tipo_documento_id = $cmb_gral_tipo_documento_id;
                    $persona_documento = $txt_persona_documento;
                    $persona_email = $txt_persona_email;
                } else {
                    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
                    if ($cli_cliente) {
                        $persona_descripcion = $cli_cliente->getRazonSocial();
                        $gral_tipo_documento_id = 1;
                        $gral_tipo_documento_id = $cli_cliente->getGralTipoDocumentoId();
                        $persona_documento = $cli_cliente->getCuit();
                        $persona_email = $cli_cliente->getEmail();
                    }
                }

                // cambio el estado en el caso de factura parcial o total
                if ($cantidad_a_facturar >= $vta_orden_venta->getCantidadDisponibleEnFactura()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_FACTURA_TOTAL);
                } else {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_FACTURA_PARCIAL);
                }

                $vta_factura_vta_orden_venta = new VtaFacturaVtaOrdenVenta();
                $vta_factura_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_factura_vta_orden_venta->setVtaFacturaId($vta_factura->getId());
                $vta_factura_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_factura_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_factura_vta_orden_venta->setInsUnidadMedidaId($ins_unidad_medida_id);
                $vta_factura_vta_orden_venta->setCantidad($cantidad_a_facturar);
                $vta_factura_vta_orden_venta->setImporteUnitario($vta_orden_venta->getImporteUnitarioConDescuento());
                $vta_factura_vta_orden_venta->setCodigo('');
                $vta_factura_vta_orden_venta->setObservacion('');
                $vta_factura_vta_orden_venta->setEstado(1);
                $vta_factura_vta_orden_venta->setGralTipoIvaId($vta_orden_venta->getGralTipoIvaId());
                $vta_factura_vta_orden_venta->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente a la factura, si hubiese cliente
        // --------------------------------------------------------------------  
        // Si viene como parametro (!=0) o si lo toma del presupuesto (!is_null)
        if ($cli_cliente_id != 0 && !is_null($cli_cliente_id)) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            $persona_descripcion = $cli_cliente->getRazonSocial();

            if ($cli_cliente) {
                $vta_factura->setCliClienteId($cli_cliente->getId());
                $vta_factura->setRazonSocial($cli_cliente->getRazonSocial());
                $vta_factura->setDomicilioLegal($cli_cliente->getDomicilioLegal());
                $vta_factura->setCuit($cli_cliente->getCuit());
                $vta_factura->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
                $vta_factura->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            }
        }

        // --------------------------------------------------------------------
        // se determina la condicion de iva de la factura
        // --------------------------------------------------------------------
        $gral_condicion_iva = self::getDeterminacionGralCondicionIva($cli_cliente_id);
        $vta_factura->setGralCondicionIvaId($gral_condicion_iva->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de factura
        // --------------------------------------------------------------------
        $vta_tipo_factura = self::getDeterminacionTipoFactura($cli_cliente_id);
        $vta_tipo_factura_id = $vta_tipo_factura->getId();
        $vta_factura->setVtaTipoFacturaId($vta_tipo_factura->getId());

        $vta_factura->setPersonaDescripcion($persona_descripcion);
        if ($gral_tipo_documento_id) {
            $vta_factura->setGralTipoDocumentoId($gral_tipo_documento_id);
        }
        $vta_factura->setPersonaDocumento($persona_documento);
        $vta_factura->setPersonaEmail($persona_email);
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la factura
        // --------------------------------------------------------------------
        $importe_subtotal_neto_gravado = $vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO);
        $vta_factura->setAgregarTributos($importe_subtotal_neto_gravado);

        // --------------------------------------------------------------------
        // se autoriza factura
        // --------------------------------------------------------------------
        if ($vta_punto_venta->getSolicitaCae()) {

            // --------------------------------------------------------------------
            // se inicializan registros ws fe para solicitud en afip
            // --------------------------------------------------------------------
            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($vta_factura->getId(), $gral_empresa_id, $vta_punto_venta_id, $vta_tipo_factura_id, $ws_fe_param_tipo_concepto_id);
            //
            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
                //echo 'Error al enviar factura electronica. ';
            //}
            
            //$ekuatia = Ekuatia::setInicializarSolicitud();

            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_factura->setAutogenerarNumeroComprobante($asignar_cae = false);
            
            // -------------------------------------------------------------------------
            // Se genera DE e intenta autorizar
            // -------------------------------------------------------------------------
            $eku_de = $vta_factura->setAutorizarDE_SIFEN();
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la factura al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE, $observacion);
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_factura->setAutogenerarNumeroComprobante();
        }

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_factura->setActualizarResumenComprobante();

        return $vta_factura;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 08/08/2018 14:25 hs.
     * Metodo que genera una factura de items.
     * @return Obj VtaFactura
     */
    static function setInicializarVtaFacturaItem($cmb_gral_sucursal_id, $cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $gral_fp_cuota_id, $txt_nro_timbrado, $txt_fecha_vencimiento, $gral_actividad_id, $gral_escenario_id, $cli_cliente_id, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_vta_factura_concepto_ids, $txa_nota_publica = '', $observacion = '') {

        // se determina el origen del comprobante       
        $vta_tipo_origen_factura = VtaTipoOrigenFactura::getOxCodigo(VtaTipoOrigenFactura::ORIGEN_ITEM);
        $gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
        $gral_sucursal = GralSucursal::getOxId($cmb_gral_sucursal_id);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $vta_factura = new VtaFactura();

        $vta_factura->setGralSucursalId($cmb_gral_sucursal_id);
        $vta_factura->setVtaTipoOrigenFacturaId($vta_tipo_origen_factura->getId());
        $vta_factura->setVtaPreventistaId($cmb_vta_preventista_id);
        $vta_factura->setVtaCompradorId($cmb_vta_comprador_id);
        $vta_factura->setVtaVendedorId($cmb_vta_vendedor_id);
        $vta_factura->setGralEmpresaId($gral_empresa_id);
        $vta_factura->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_factura->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), 3, 0, STR_PAD_LEFT));
        $vta_factura->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), 3, 0, STR_PAD_LEFT));
        $vta_factura->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $vta_factura->setGralFpCuotaId($gral_fp_cuota_id);
        $vta_factura->setGralActividadId($gral_actividad_id);
        $vta_factura->setGralEscenarioId($gral_escenario_id);
        $vta_factura->setFechaEmision(Gral::getFechaActual());
        $vta_factura->setNumeroTimbrado($txt_nro_timbrado);        
        $vta_factura->setFechaVencimiento($txt_fecha_vencimiento);
        if ($gral_mes) {
            $vta_factura->setGralMesId($gral_mes->getId());
        }
        $vta_factura->setAnio(date('Y'));
        $vta_factura->setNotaPublica($txa_nota_publica);
        $vta_factura->setObservacion($observacion);
        $vta_factura->setPorcentaje(100); // hardcodeado para asegurar, momentaneamente
        $vta_factura->setEstado(1);
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $vta_factura->setCodigo(self::PREFIJO_FACTURA . str_pad($vta_factura->getId(), 8, 0, STR_PAD_LEFT));
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la factura
        // --------------------------------------------------------------------
        $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se agregan los items a la factura
        // --------------------------------------------------------------------
        if (!empty($vta_factura->getId())) {

            foreach ($txt_descripcions as $key => $txt_descripcion) {

                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle de la NC
                $vta_factura_item = new VtaFacturaItem();

                $vta_factura_item->setDescripcion($txt_descripcions[$key]);
                $vta_factura_item->setVtaFacturaId($vta_factura->getId());
                $vta_factura_item->setGralTipoIvaId($cmb_gral_tipo_iva_ids[$key]);
                $vta_factura_item->setVtaFacturaConceptoId($cmb_vta_factura_concepto_ids[$key]);

                //$vta_factura_item->setCantidad($txt_cantidads[$key]);
                $vta_factura_item->setCantidad(1);
                $vta_factura_item->setImporteUnitario($importe_unitario);
                $vta_factura_item->setCodigo('');
                $vta_factura_item->setObservacion('');
                $vta_factura_item->setEstado(1);

                $vta_factura_item->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente a la NC
        // --------------------------------------------------------------------        
        $vta_factura->setCliClienteId($cli_cliente->getId());
        $vta_factura->setRazonSocial($cli_cliente->getRazonSocial());
        $vta_factura->setDomicilioLegal($cli_cliente->getDomicilioLegal());
        $vta_factura->setCuit($cli_cliente->getCuit());
        $vta_factura->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
        $vta_factura->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
        $vta_factura->setPersonaDescripcion($cli_cliente->getDescripcion());
        if ($gral_tipo_documento_cuit) {
            $vta_factura->setGralTipoDocumentoId($gral_tipo_documento_cuit->getId());
        }
        $vta_factura->setPersonaDocumento($cli_cliente->getCuit());
        $vta_factura->setPersonaEmail($cli_cliente->getEmail());

        // --------------------------------------------------------------------
        // se determina el tipo de Factura
        // --------------------------------------------------------------------
        $vta_tipo_factura = self::getDeterminacionTipoFactura($cli_cliente_id);
        $vta_factura->setVtaTipoFacturaId($vta_tipo_factura->getId());
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la Factura
        // --------------------------------------------------------------------
        $importe_subtotal_neto_gravado = $vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO);
        $vta_factura->setAgregarTributos($importe_subtotal_neto_gravado);

        // --------------------------------------------------------------------
        // se autoriza factura
        // --------------------------------------------------------------------
        if ($vta_punto_venta->getSolicitaCae()) {

            // --------------------------------------------------------------------
            // se inicializan registros ws fe para solicitud en afip
            // --------------------------------------------------------------------
            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudFacturaItem($vta_factura->getId());

            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
                //echo 'Error al enviar factura electronica. ';
            //}
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_factura->setAutogenerarNumeroComprobante($asignar_cae = false);
            
            // -------------------------------------------------------------------------
            // Se genera DE e intenta autorizar
            // -------------------------------------------------------------------------
            $eku_de = $vta_factura->setAutorizarDE_SIFEN();            
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la factura al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE, $observacion);
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_factura->setAutogenerarNumeroComprobante();
        }

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_factura->setActualizarResumenComprobante();

        return $vta_factura;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 09:00 hs.
     * Metodo que genera una factura.
     * @return Obj VtaFactura
     */
    static function setInicializarVtaFacturaDesdeVentaInmediataContado($vta_presupuesto = false, $cmb_confirmacion_vta_preventista_id, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $txt_confirmacion_persona_descripcion, $cmb_confirmacion_gral_tipo_documento_id, $txt_confirmacion_persona_documento, $txt_confirmacion_persona_email, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $gral_fp_cuota_id, $gral_actividad_id, $gral_escenario_id, $vta_tipo_factura_id = 0, $ws_fe_param_tipo_concepto_id = 1, $txa_nota_publica = '', $observacion = '') {

        // se determina el origen del comprobante
        $vta_tipo_origen_factura = VtaTipoOrigenFactura::getOxCodigo(VtaTipoOrigenFactura::ORIGEN_ORDEN_VENTA);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);

        $vta_factura = new VtaFactura();

        $vta_factura->setVtaTipoOrigenFacturaId($vta_tipo_origen_factura->getId());

        if ($vta_presupuesto) {
            $gral_sucural = $vta_presupuesto->getGralSucursal();
            
            $vta_factura->setVtaPresupuestoId($vta_presupuesto->getId());
            $vta_factura->setVtaVendedorId($vta_presupuesto->getVtaVendedorId());
            $vta_factura->setVtaCompradorId($vta_presupuesto->getVtaCompradorId());
            $vta_factura->setVtaPreventistaId($vta_presupuesto->getVtaPreventistaId());
            $vta_factura->setGralSucursalId($vta_presupuesto->getGralSucursalId());
            $vta_factura->setCliCentroRecepcionId($vta_presupuesto->getCliCentroRecepcionId());
            $vta_factura->setPorcentaje($vta_presupuesto->getPorcentaje());
        }
        $vta_factura->setPorcentaje(100); // hardcodeado para asegurar, momentaneamente

        $vta_factura->setVtaPreventistaId($cmb_confirmacion_vta_preventista_id);
        $vta_factura->setGralEmpresaId($gral_empresa_id);
        $vta_factura->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_factura->setNumeroSucursal(str_pad($gral_sucural->getNumero(), 3, 0, STR_PAD_LEFT));
        $vta_factura->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), 3, 0, STR_PAD_LEFT));
        $vta_factura->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $vta_factura->setGralFpCuotaId($gral_fp_cuota_id);
        $vta_factura->setGralActividadId($gral_actividad_id);
        $vta_factura->setGralEscenarioId($gral_escenario_id);
        $vta_factura->setFechaEmision(Gral::getFechaActual());
        $vta_factura->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_factura->setGralMesId($gral_mes->getId());
        }
        $vta_factura->setAnio(date('Y'));
        $vta_factura->setNotaPublica($txa_nota_publica);
        $vta_factura->setObservacion($observacion);
        $vta_factura->setEstado(1);
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $vta_factura->setCodigo(self::PREFIJO_FACTURA . str_pad($vta_factura->getId(), 8, 0, STR_PAD_LEFT));
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la factura
        // --------------------------------------------------------------------
        $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_GENERADO, $observacion);


        // --------------------------------------------------------------------
        // se agregan los items a la factura
        // --------------------------------------------------------------------
        if (!empty($vta_factura->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $ins_insumo = $vta_orden_venta->getInsInsumo();
                $ins_unidad_medida_id = $ins_insumo->getInsUnidadMedidaId();
                $cantidad_a_facturar = $vta_orden_venta_cantidads[$vta_orden_venta->getId()];

                // Si no hay no trae el id de cliente busco en el presupuesto
                if ($cli_cliente_id == 0) {
                    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
                    $cli_cliente_id = $vta_presupuesto->getCliClienteId();

                    $persona_descripcion = $vta_presupuesto->getPersonaDescripcion();
                    $gral_tipo_documento_id = $vta_presupuesto->getGralTipoDocumentoId();
                    $persona_documento = $vta_presupuesto->getPersonaDocumento();
                    $persona_email = $vta_presupuesto->getPersonaEmail();

                    $persona_descripcion = $txt_confirmacion_persona_descripcion;
                    $gral_tipo_documento_id = $cmb_confirmacion_gral_tipo_documento_id;
                    $persona_documento = $txt_confirmacion_persona_documento;
                    $persona_email = $txt_confirmacion_persona_email;
                } else {
                    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
                    if ($cli_cliente) {
                        $persona_descripcion = $cli_cliente->getRazonSocial();
                        $gral_tipo_documento_id = 1;
                        $gral_tipo_documento_id = $cli_cliente->getGralTipoDocumentoId();
                        $persona_documento = $cli_cliente->getCuit();
                        $persona_email = $cli_cliente->getEmail();
                    }
                }

                // cambio el estado en el caso de factura parcial o total
                if ($vta_orden_venta->getCantidadDisponibleEnFactura() == $cantidad_a_facturar) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_FACTURA_TOTAL);
                } else {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_FACTURA_PARCIAL);
                }

                $vta_factura_vta_orden_venta = new VtaFacturaVtaOrdenVenta();
                $vta_factura_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_factura_vta_orden_venta->setVtaFacturaId($vta_factura->getId());
                $vta_factura_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_factura_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_factura_vta_orden_venta->setInsUnidadMedidaId($ins_unidad_medida_id);
                $vta_factura_vta_orden_venta->setCantidad($cantidad_a_facturar);
                $vta_factura_vta_orden_venta->setImporteUnitario($vta_orden_venta->getImporteUnitarioConDescuento());
                $vta_factura_vta_orden_venta->setCodigo('');
                $vta_factura_vta_orden_venta->setObservacion('');
                $vta_factura_vta_orden_venta->setEstado(1);
                $vta_factura_vta_orden_venta->setGralTipoIvaId($vta_orden_venta->getGralTipoIvaId());
                $vta_factura_vta_orden_venta->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente a la factura, si hubiese cliente
        // --------------------------------------------------------------------  
        // Si viene como parametro (!=0) o si lo toma del presupuesto (!is_null)
        if ($cli_cliente_id != 0 && !is_null($cli_cliente_id)) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            $persona_descripcion = $cli_cliente->getRazonSocial();

            if ($cli_cliente) {
                $vta_factura->setCliClienteId($cli_cliente->getId());
                $vta_factura->setRazonSocial($cli_cliente->getRazonSocial());
                $vta_factura->setDomicilioLegal($cli_cliente->getDomicilioLegal());
                $vta_factura->setCuit($cli_cliente->getCuit());
                $vta_factura->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
                $vta_factura->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            }
        }

        // --------------------------------------------------------------------
        // se determina la condicion de iva de la factura
        // --------------------------------------------------------------------
        $gral_condicion_iva = self::getDeterminacionGralCondicionIva($cli_cliente_id);
        $vta_factura->setGralCondicionIvaId($gral_condicion_iva->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de factura
        // --------------------------------------------------------------------
        $vta_tipo_factura = self::getDeterminacionTipoFactura($cli_cliente_id);
        $vta_tipo_factura_id = $vta_tipo_factura->getId();
        $vta_factura->setVtaTipoFacturaId($vta_tipo_factura->getId());

        $vta_factura->setPersonaDescripcion($persona_descripcion);
        if ($gral_tipo_documento_id) {
            $vta_factura->setGralTipoDocumentoId($gral_tipo_documento_id);
        }
        $vta_factura->setPersonaDocumento($persona_documento);
        $vta_factura->setPersonaEmail($persona_email);
        $vta_factura->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la factura
        // --------------------------------------------------------------------
        $importe_subtotal_neto_gravado = $vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO);
        $vta_factura->setAgregarTributos($importe_subtotal_neto_gravado);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_factura->setActualizarResumenComprobante();
        
        if ($vta_punto_venta->getSolicitaCae()) {            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_factura->setAutogenerarNumeroComprobante($asignar_cae = false);
        }else{
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_factura->setAutogenerarNumeroComprobante();            
        }

        return $vta_factura;
    }
    
    /**
     * 
     */
    public function setAutorizarVentaInmediataContado($observacion = ''){
        // --------------------------------------------------------------------
        // se autoriza Factura
        // --------------------------------------------------------------------        
        $vta_punto_venta = $this->getVtaPuntoVenta();
        if ($vta_punto_venta->getSolicitaCae()) {

            // ---------------------------------------------------------------------
            // Se genera el CAE de la factura
            // ---------------------------------------------------------------------
            $ws_fe_param_tipo_concepto_id = 1;
            $ws_fe_afip_tipo_documento = 80;

            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($vta_factura->getId(), $vta_factura->getGralEmpresaId(), $vta_factura->getVtaPuntoVentaId(), $vta_factura->getVtaTipoFacturaId(), $ws_fe_param_tipo_concepto_id, $ws_fe_afip_tipo_documento, $observacion = 'Venta Inmediata de Contado');
            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
            //    $arr["error_general"] = Lang::_lang("Error al enviar factura electronica.", true);
            //    $arr["error"] = true;
            //}
            //
            
            // -------------------------------------------------------------------------
            // Se genera DE e intenta autorizar
            // -------------------------------------------------------------------------
            $eku_de = $this->setAutorizarDE_SIFEN();
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la factura al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_factura_estado = $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE, $observacion);
        }
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 18/01/2019 15:36 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj VtaFactura
     */
    public function setModificarDatosComprobante($cmb_gral_fp_cuota_id, $cmb_gral_escenario_id, $vta_preventista_id, $vta_comprador_id, $vta_vendedor_id, $txt_nro_timbrado, $txt_fecha_vencimiento, $txt_nro_sucursal, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_cae, $txa_nota_publica, $txa_observacion) {

        $this->setGralFpCuotaId($cmb_gral_fp_cuota_id);
        $this->setGralEscenarioId($cmb_gral_escenario_id);
        $this->setVtaPreventistaId($vta_preventista_id);
        $this->setVtaCompradorId($vta_comprador_id);
        $this->setVtaVendedorId($vta_vendedor_id);
        $this->setNumeroTimbrado($txt_nro_timbrado);        
        $this->setFechaVencimiento($txt_fecha_vencimiento);

        if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_MODIFICAR_NRO_COMPROBANTE')) {
            $this->setNumeroSucursal($txt_nro_sucursal);
            $this->setNumeroPuntoVenta($txt_nro_punto_venta);
            $this->setNumeroFactura($txt_nro_comprobante);
            $this->setNumeroFacturaCompleto($this->getNumeroFacturaCompletoFormateado());
            $this->setCae($txt_cae);
        }

        $this->setNotaPublica($txa_nota_publica);
        $this->setObservacion($txa_observacion);

        $this->save();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 02/08/2018 09:00 hs.
     * Metodo que genera una factura.
     * @return Obj VtaFactura
     */
    static function setRegistrarDescuentoFinanciero($vta_factura_ids, $var_sesion_random, $descuento_financiero, $cmb_generar_recibo, $cmb_gral_fp_forma_pago_id, $txa_nota_publica, $observacion, $vta_recibo_concepto_ids, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_forma_pago_ids) {
        foreach ($vta_factura_ids as $vta_factura_id) {
            $vta_factura = VtaFactura::getOxId($vta_factura_id);
            $vta_nota_credito = VtaNotaCredito::setInicializarVtaNotaCreditoDesdeDescuentoFinanciero($vta_factura, $descuento_financiero, $txa_nota_publica, $observacion);
        }

        if ($cmb_generar_recibo == 1) {
            $vta_recibo = VtaRecibo::setInicializarVtaReciboDesdeDescuentoFinanciero($vta_factura_ids, $var_sesion_random, $descuento_financiero, $cmb_gral_fp_forma_pago_id, $txa_nota_publica, $observacion, $vta_recibo_concepto_ids, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_forma_pago_ids);
        }

        return true;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 15/09/2018
     */
    public function getWsFeParamTipoComprobante() {
        $vta_tipo_factura = $this->getVtaTipoFactura();
        $ws_fe_param_tipo_comprobante = $vta_tipo_factura->getWsFeParamTipoComprobanteXVtaTipoFacturaWsFeParamTipoComprobante();
        return $ws_fe_param_tipo_comprobante;
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroFacturaCompletoFormateado() {
        $numero_sucursal = str_pad($this->getGralSucursal()->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT);
        $numero_punto_venta = str_pad($this->getVtaPuntoVenta()->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT);
        $numero_factura = str_pad($this->getNumeroFactura(), DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);

        $numero_factura_completo = $numero_sucursal . '-' . $numero_punto_venta . '-' . $numero_factura;
        return $numero_factura_completo;
    }

    /**
     * Metodo que retorna el codigo numerico para el barcode de afip
     */
    public function getBarcodeAFIPParaComprobante() {
        $barcode = "";

        $gral_empresa = $this->getGralEmpresa();
        $ws_fe_param_tipo_comprobante = $this->getVtaTipoFactura()->getWsFeParamTipoComprobanteXVtaTipoFacturaWsFeParamTipoComprobante();

        $barcode .= str_replace("-", "", $gral_empresa->getCuit());
        //$barcode .= str_pad($ws_fe_param_tipo_comprobante->getCodigoAfip(), 3, 0, STR_PAD_LEFT);
        $barcode .= str_pad($this->getNumeroPuntoVenta(), 5, 0, STR_PAD_LEFT);
        $barcode .= str_replace("-", "", $this->getCae());
        $barcode .= str_replace("-", "", $this->getFechaEmision());

        return $barcode;
    }

    /**
     * Metodo que retorna la fecha de vencimiento del CAE obtenida desde RESPUESTA AFIP
     * @return string
     */
    public function getCaeVencimiento() {
        $ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxWsFeAfipCae($this->getCae());
        if ($ws_fe_ope_solicitud_respuesta) {
            $fecha_vencimiento_cae = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento();

            $anio = substr($fecha_vencimiento_cae, 0, 4);
            $mes = substr($fecha_vencimiento_cae, 4, 2);
            $dia = substr($fecha_vencimiento_cae, 6, 2);

            $fecha_vencimiento_cae = $anio . '-' . $mes . '-' . $dia;
        }

        return $fecha_vencimiento_cae;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que registra un nuevo estado de la factura.
     * @return Obj VtaFacturaEstado
     */
    public function setVtaFacturaEstado($codigo, $observacion = '') {
        $inicial = 1;
        $vta_factura_estado = false;

        // se agrega el nuevo estado del factura
        $vta_factura_tipo_estado = VtaFacturaTipoEstado::getOxCodigo($codigo);

        if ($vta_factura_tipo_estado) {
            foreach ($this->getVtaFacturaEstados() as $vta_factura_estado) {
                $vta_factura_estado->setActual(0);
                $vta_factura_estado->save();
                $inicial = 0;
            }

            $vta_factura_estado = new VtaFacturaEstado();
            $vta_factura_estado->setVtaFacturaId($this->getId());
            $vta_factura_estado->setVtaFacturaTipoEstadoId($vta_factura_tipo_estado->getId());
            $vta_factura_estado->setInicial($inicial);
            $vta_factura_estado->setActual(1);
            $vta_factura_estado->setObservacion($observacion);
            $vta_factura_estado->save();

            // actualizamos el estado en vta_factura      
            $this->setVtaFacturaTipoEstadoId($vta_factura_tipo_estado->getId());
            $this->save();
        }

        // ---------------------------------------------------------------------
        // se registran los movimientos contables, si lo requiere
        // ---------------------------------------------------------------------
        //$this->setRegistrarContabilidad();
        // ---------------------------------------------------------------------

        return $vta_factura_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {

        // -----------------------------------------------------------------
        // se controla que no haya sido ya contabilizado
        // -----------------------------------------------------------------
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $vta_factura_tipo_estado = $this->getVtaFacturaTipoEstado();

        if ($vta_factura_tipo_estado->getContabilizable()) {

            // -----------------------------------------------------------------
            // registro del asiento de venta
            // -----------------------------------------------------------------
            $arr_estado_control_asiento_venta = $this->setRegistrarContabilidadVenta($cntb_periodo);

            // -----------------------------------------------------------------
            // registro del asiento de costo de la venta
            // -----------------------------------------------------------------
            //$arr_estado_control_asiento_venta_costo = $this->setRegistrarContabilidadVentaCosto($cntb_periodo);

            return $arr_estado_control_asiento_venta;
        }
        return false;
    }

    public function setRegistrarContabilidadVenta($cntb_periodo = false) {

        $cli_cliente = $this->getCliCliente();
        $gral_empresa = $this->getGralEmpresa();
        $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
        $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
        $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
        $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_VENTAS);
        $descripcion = 'Asiento de VtaFactura ' . $this->getId();

        $array_cuentas_debe = array();
        $array_cuentas_haber = array();

        $vta_tipo_origen_factura = $this->getVtaTipoOrigenFactura();
        $gral_actividad = $this->getGralActividad();
        $gral_tipo_documento = $this->getGralTipoDocumento();
        $gral_condicion_iva = $this->getGralCondicionIva();
        $gral_fp_forma_pago = $this->getGralFpFormaPago();
        $cntb_cuenta_venta_debe = $gral_fp_forma_pago->getCntbCuentaVentaObj();

        $importe_iva = $this->getVtaFacturaIva();
        $importe_tributo = $this->getVtaFacturaTributo();
        //$importe_subtotal = $this->getVtaFacturaSubtotal();
        $importe_total = $this->getVtaFacturaTotal();

        $vta_factura_vta_tributos = $this->getVtaFacturaVtaTributos(null, null, true);

        // -----------------------------------------------------------------
        // DEBE
        // -----------------------------------------------------------------
        if ($cntb_cuenta_venta_debe) {
            $array_cuentas_debe[] = array(
                //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010101'), // CAJA ADMINISTRACION 
                'cntb_cuenta' => $cntb_cuenta_venta_debe,
                'codigo_comprobante' => $txt_comprobante = '',
                'importe' => $importe_total,
            );
        }

        // -----------------------------------------------------------------
        // HABER
        // -----------------------------------------------------------------
        if ($importe_iva > 0) {
            $array_cuentas_haber[] = array(
                'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('21030103'), // IVA DEBITO FISCAL 
                'codigo_comprobante' => $txt_comprobante = '',
                'importe' => $importe_iva,
            );
        }

        if ($importe_tributo > 0) {
            foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {
                $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
                $importe_tributo_uno = $vta_factura_vta_tributo->getImporteTributo();
                $cntb_cuenta_tributo = $vta_tributo->getCntbCuenta();
                if ($cntb_cuenta_tributo && $importe_tributo_uno > 0) {
                    $array_cuentas_haber[] = array(
                        //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('53010118'), // INGRESOS BRUTOS 
                        'cntb_cuenta' => $cntb_cuenta_tributo,
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_tributo_uno,
                    );
                }
            }
        }

        if ($vta_tipo_origen_factura && $vta_tipo_origen_factura->getCodigo() == VtaTipoOrigenFactura::ORIGEN_ITEM) {
            // -------------------------------------------------------------
            // si nace desde ITEM
            // -------------------------------------------------------------
            $vta_factura_items = $this->getVtaFacturaItems();
            //Gral::prr($vta_factura_items);
            foreach ($vta_factura_items as $vta_factura_item) {
                $importe_subtotal = $vta_factura_item->getImporteUnitario();
                $vta_factura_concepto = $vta_factura_item->getVtaFacturaConcepto();
                $cntb_cuenta_venta_haber = $vta_factura_concepto->getCntbCuenta();
                //Gral::prr($cntb_cuenta_venta_haber);

                if ($cntb_cuenta_venta_haber && $importe_subtotal > 0) {
                    $array_cuentas_haber[] = array(
                        //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('22010102'), // INGRESOS POR VENTA REPUESTOS
                        'cntb_cuenta' => $cntb_cuenta_venta_haber,
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_subtotal,
                    );
                }
            }
        } elseif ($vta_tipo_origen_factura && $vta_tipo_origen_factura->getCodigo() == VtaTipoOrigenFactura::ORIGEN_ORDEN_VENTA) {
            // -------------------------------------------------------------
            // si nace desde OV
            // -------------------------------------------------------------
            $ins_tipo_insumos = $this->getInsTipoInsumosVinculados();
            //Gral::prr($ins_tipo_insumos);
            foreach ($ins_tipo_insumos as $ins_tipo_insumo) {
                $importe_subtotal = $this->getVtaFacturaSubtotal($ins_tipo_insumo);
                $cntb_cuenta_venta_haber = $ins_tipo_insumo->getCntbCuentaVentaObj();

                if ($cntb_cuenta_venta_haber && $importe_subtotal > 0) {
                    $array_cuentas_haber[] = array(
                        //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('22010102'), // INGRESOS POR VENTA REPUESTOS
                        'cntb_cuenta' => $cntb_cuenta_venta_haber,
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_subtotal,
                    );
                }
            }
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
            } else {
                //Gral::prr($arr_estado_control);            
            }

            return $arr_estado_control;
        }

        return false;
    }

    public function setRegistrarContabilidadVentaCosto($cntb_periodo = false) {
        $cli_cliente = $this->getCliCliente();
        $gral_empresa = $this->getGralEmpresa();
        $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
        $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
        $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
        $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_VENTAS);
        $descripcion = 'Asiento de Costo de VtaFactura';

        $array_cuentas_debe = array();
        $array_cuentas_haber = array();

        $vta_tipo_origen_factura = $this->getVtaTipoOrigenFactura();
        $gral_actividad = $this->getGralActividad();
        $gral_tipo_documento = $this->getGralTipoDocumento();
        $gral_condicion_iva = $this->getGralCondicionIva();
        $gral_fp_forma_pago = $this->getGralFpFormaPago();
        $cntb_cuenta_venta_debe = $gral_fp_forma_pago->getCntbCuentaVentaObj();

        $importe_total_cmv = $this->getVtaFacturaImporteCMV();

        if ($importe_total_cmv > 0) {
            // -----------------------------------------------------------------
            // DEBE
            // -----------------------------------------------------------------
            $array_cuentas_debe[] = array(
                'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('51010101'), // COSTO DE VENTAS
                'codigo_comprobante' => $txt_comprobante = '',
                'importe' => $importe_total_cmv,
            );

            // -----------------------------------------------------------------
            // HABER
            // -----------------------------------------------------------------
            $array_cuentas_haber[] = array(
                'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010601'), // REPUESTOS VARIOS 
                'codigo_comprobante' => $txt_comprobante = '',
                'importe' => $importe_total_cmv,
            );

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
            $cntb_diario_asiento_vta_factura = new CntbDiarioAsientoVtaFactura();
            $cntb_diario_asiento_vta_factura->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_vta_factura->setVtaFacturaId($this->getId());
            $cntb_diario_asiento_vta_factura->save();

            $vta_tipo_factura = $this->getVtaTipoFactura();
            $vta_tipo_origen_factura = $this->getVtaTipoOrigenFactura();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_tipo_documento = $this->getGralTipoDocumento();

            // --------------------------------------------------------------------------
            // si fueron ovs
            // --------------------------------------------------------------------------
            $vta_orden_ventas = $this->getVtaOrdenVentaXVtaFacturaVtaOrdenVenta();
            if (count($vta_orden_ventas) > 0) {
                $cantidad_items = count($vta_orden_ventas) . " OVs";
            }

            // --------------------------------------------------------------------------
            // si fueron items
            // --------------------------------------------------------------------------
            $vta_factura_items = $this->getVtaFacturaItems();
            if (count($vta_factura_items) > 0) {
                $cantidad_items = count($vta_factura_items) . " Items";
            }

            $descripcion = $vta_tipo_factura->getDescripcion() . " " . $this->getNumeroComprobanteCompleto() . ' ' . $vta_tipo_origen_factura->getDescripcion();
            $observacion = "Emitida a " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " " . $gral_tipo_documento->getDescripcion() . " " . $this->getPersonaDocumento() . " por " . $cantidad_items;

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

        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, null, true);
        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $ins_insumo = $vta_factura_vta_orden_venta->getInsInsumo();
            $ins_tipo_insumo = $ins_insumo->getInsTipoInsumo();
            $ins_tipo_insumos[$ins_tipo_insumo->getId()] = $ins_tipo_insumo;
        }

        return $ins_tipo_insumos;
    }

    /**
     * Metodo que retorna el tipo de factura que tiene un cliente.
     * @param type $cli_cliente_id
     * @return type GralCondicionIva
     */
    static function getDeterminacionGralCondicionIva($cli_cliente_id) {
        $gral_condicion_iva = GralCondicionIva::getOxCodigo(GralCondicionIva::TIPO_CONSUMIDOR_FINAL);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        if ($cli_cliente) {
            $gral_condicion_iva = $cli_cliente->getGralCondicionIva();
        }
        return $gral_condicion_iva;
    }

    /**
     * Metodo que retorna el tipo de factura que tiene un cliente.
     * @param type $cli_cliente_id
     * @return type VtaTipoFactura
     */
    static function getDeterminacionTipoFactura($cli_cliente_id) {
        //$vta_tipo_factura = VtaTipoFactura::getOxCodigo(VtaTipoFactura::TIPO_FACTURA_B);
        $vta_tipo_factura = VtaTipoFactura::getOxCodigo(VtaTipoFactura::TIPO_FACTURA_A);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        if ($cli_cliente) {
            $gra_condicion_iva_id = $cli_cliente->getGralCondicionIvaId();

            $gra_condicion_iva_vta_tipo_facturas = GralCondicionIvaVtaTipoFactura::getOsxGralCondicionIvaId($gra_condicion_iva_id);
            foreach ($gra_condicion_iva_vta_tipo_facturas as $gra_condicion_iva_vta_tipo_factura) {
                $vta_tipo_factura = $gra_condicion_iva_vta_tipo_factura->getVtaTipoFactura();
                return $vta_tipo_factura;
            }
        }
        return $vta_tipo_factura;
    }

    /**
     * Metodo que retorna el valor del iva de la factura.
     * @return type float
     */
    public function getVtaFacturaIva($ins_tipo_insumo = false) {
        $iva = 0;

        if ($ins_tipo_insumo) {
            $c = new Criterio();
            $c->add(InsTipoInsumo::GEN_ATTR_ID, $ins_tipo_insumo->getId(), Criterio::IGUAL);
            $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
            $c->addRealJoin(InsTipoInsumo::GEN_TABLA, InsTipoInsumo::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID);
            $c->setCriterios();
            $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, $c, true);
        } else {
            $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, null, true);
        }

        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitario();
            $cantidad = $vta_factura_vta_orden_venta->getCantidad();
            $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();
            $valor_iva = $gral_tipo_iva->getValorIva();
            $iva += ($importe_unitario * $cantidad) * ($valor_iva / 100);
        }

        // se suman los items sueltos de la factura
        $vta_factura_items = $this->getVtaFacturaItems(null, null, true);
        foreach ($vta_factura_items as $vta_factura_item) {
            $gral_tipo_iva = $vta_factura_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_factura_item->getImporteUnitario(), 2);
            $cantidad = $vta_factura_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }

        return round($iva, 2);
    }

    public function getVtaComprobanteIva($ins_tipo_insumo = false) {
        return $this->getVtaFacturaIva($ins_tipo_insumo);
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getVtaFacturaTributo() {
        $vta_factura_vta_tributos = $this->getVtaFacturaVtaTributos(null, null, true);
        $importe_total_tributo = 0;

        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {
            $importe_total_tributo += $vta_factura_vta_tributo->getImporteTributo();
        }

        return $importe_total_tributo;
    }

    public function getVtaComprobanteTributo($ins_tipo_insumo = false) {
        return $this->getVtaFacturaTributo($ins_tipo_insumo);
    }

    /**
     * Metodo que retorna el subtotal de la factura sin iva.
     * @return type float
     */
    public function getVtaFacturaSubtotal($ins_tipo_insumo = false, $tipo_subtotal = false) {

        // ---------------------------------------------------------------------
        // se suman las ordenes de venta
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($ins_tipo_insumo) {
            $c->add(InsTipoInsumo::GEN_ATTR_ID, $ins_tipo_insumo->getId(), Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
        $c->addRealJoin(InsTipoInsumo::GEN_TABLA, InsTipoInsumo::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, $c, true);

        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitario();
            $cantidad = $vta_factura_vta_orden_venta->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        // ---------------------------------------------------------------------
        // se suman los items sueltos de la factura
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(VtaFacturaItem::GEN_TABLA);
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaFacturaItem::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $vta_factura_items = $this->getVtaFacturaItems(null, $c, true);
        foreach ($vta_factura_items as $vta_factura_item) {
            $importe_unitario = $vta_factura_item->getImporteUnitario();
            $cantidad = $vta_factura_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        return $subtotal;
    }

    public function getVtaComprobanteSubtotal($ins_tipo_insumo = false, $tipo_subtotal = false) {
        return $this->getVtaFacturaSubtotal($ins_tipo_insumo, $tipo_subtotal);
    }

    public function getVtaFacturaSubtotalParaComprobante() {
        $vta_tipo_factura = $this->getVtaTipoFactura();

        switch ($vta_tipo_factura->getCodigo()) {
            case VtaTipoFactura::TIPO_FACTURA_A:
                $importe = $this->getVtaFacturaSubtotal();
                break;
            case VtaTipoFactura::TIPO_FACTURA_B:
                $importe = $this->getVtaFacturaSubtotal() + $this->getVtaFacturaIva();
                break;
            default:
                $importe = $this->getImporteUnitario();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el subtotal de los items de la NC sin iva.
     * @return type float
     */
    public function getVtaFacturaItemSubtotal() {

        // proximamente discontinuado!
        $vta_factura_items = $this->getVtaFacturaItems(null, null, true);

        foreach ($vta_factura_items as $vta_factura_item) {
            $importe_unitario = round($vta_factura_item->getImporteUnitario(), 2);
            $cantidad = $vta_factura_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getArrVtaTributosAplicados() {
        $vta_factura_vta_tributos = $this->getVtaFacturaVtaTributos(null, null, true);

        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {
            $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
            $importe_total_tributo = $vta_factura_vta_tributo->getImporteTributo();

            $arr_tributos[$vta_tributo->getId()] = array(
                'vta_tributo_id' => $vta_tributo->getId(),
                'vta_tributo_descripcion' => $vta_tributo->getDescripcion(),
                'importe' => $importe_total_tributo,
            );
        }
        return $arr_tributos;
    }

    /**
     * Metodo que retorna el total de la factura con iva.
     * @return type float
     */
    public function getVtaFacturaTotal($ins_tipo_insumo = false) {
        $total = $this->getVtaFacturaSubtotal($ins_tipo_insumo) +
                $this->getVtaFacturaIva($ins_tipo_insumo) +
                $this->getVtaFacturaTributo()
        ;
        // $total = round($total, 2);
        return $total;
    }

    /**
     * Metodo que CMV de la Factura
     * @return type float
     */
    public function getVtaFacturaImporteCMV($ins_tipo_insumo = false) {

        // ---------------------------------------------------------------------
        // se suman las ordenes de venta
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($ins_tipo_insumo) {
            $c->add(InsTipoInsumo::GEN_ATTR_ID, $ins_tipo_insumo->getId(), Criterio::IGUAL);
        }
        $c->addTabla(VtaFacturaVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(InsTipoInsumo::GEN_TABLA, InsTipoInsumo::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, $c, true);

        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
            $importe_costo_unitario = $vta_orden_venta->getImporteCosto();
            $cantidad = $vta_factura_vta_orden_venta->getCantidad();
            $importe_costo_subtotal = $importe_costo_unitario * $cantidad;

            $importe_costo_total += $importe_costo_subtotal;
        }

        $importe_costo_total = round($importe_costo_total, 2);
        return $importe_costo_total;
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
            'vta_factura_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_factura.php";
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

        $vta_factura_enviado = $this->inicializarVtaFacturaEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $vta_factura_enviado->setConfirmarVtaFacturaEnviado(1, VtaFacturaEnviado::FACTURA_ENVIADO_CORRECTAMENTE);
            } else {
                $vta_factura_enviado->setConfirmarVtaFacturaEnviado(0, $mail->ErrorInfo);
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
     * @return VtaFacturaEnviado
     */
    public function inicializarVtaFacturaEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_factura_enviado = new VtaFacturaEnviado();
        $vta_factura_enviado->setDescripcion('');
        $vta_factura_enviado->setVtaFacturaId($this->getId());
        $vta_factura_enviado->setAsunto($mail_asunto);
        $vta_factura_enviado->setDestinatario($destinatarios);

        $vta_factura_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_factura_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_factura_enviado->setCodigoEnvio(0);
        $vta_factura_enviado->setObservacion($observacion);
        $vta_factura_enviado->setEstado(0);

        $vta_factura_enviado->save();

        return $vta_factura_enviado;
    }

    public function getNombreArchivoAdjuntoFactura() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_FAC_' . $this->getVtaTipoFactura()->getCodigoMin() . '_' . $this->getNumeroComprobanteCompleto() . '_' . $this->getPersonaDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * Autor: Romo Gustavo.
     * Fecha: 02/08/2018 16:32 hs.
     * Metodo que retorna un array full con los valores de iva del presupuestos.
     * @return Float
     */
    public function getArrIvaFacturaFull() {
        $arr_iva = array();

        // se suman las ordenes de venta
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, null, true);
        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();

            $importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitario();
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_factura_vta_orden_venta->getCantidad();

            $acu_importe_unitario[$vta_factura_vta_orden_venta->getGralTipoIva()->getCodigo()] += $importe_unitario * $vta_factura_vta_orden_venta->getCantidad();
            $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

            $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                'id' => $vta_factura_vta_orden_venta->getGralTipoIvaId(),
                'descripcion' => $gral_tipo_iva->getDescripcion(),
                'codigo' => $gral_tipo_iva->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
            );
        }

        // se suman los items sueltos de la factura
        $vta_factura_items = $this->getVtaFacturaItems(null, null, true);
        foreach ($vta_factura_items as $vta_factura_item) {
            $gral_tipo_iva = $vta_factura_item->getGralTipoIva();

            $importe_unitario = $vta_factura_item->getImporteUnitario();
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_factura_item->getCantidad();

            $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_factura_item->getCantidad();
            $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

            $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                'id' => $vta_factura_item->getGralTipoIvaId(),
                'descripcion' => $gral_tipo_iva->getDescripcion(),
                'codigo' => $gral_tipo_iva->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
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
    public function getArrIvaParaCitiFacturaFull() {
        $arr_iva = array();

        // se suman las ordenes de venta
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, null, true);
        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitario();
                $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_factura_vta_orden_venta->getCantidad();

                $acu_importe_unitario[$vta_factura_vta_orden_venta->getGralTipoIva()->getCodigo()] += $importe_unitario * $vta_factura_vta_orden_venta->getCantidad();
                $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

                $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                    'id' => $vta_factura_vta_orden_venta->getGralTipoIvaId(),
                    'descripcion' => $gral_tipo_iva->getDescripcion(),
                    'codigo' => $gral_tipo_iva->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                    'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
                );
            }
        }

        // se suman los items sueltos de la factura
        $vta_factura_items = $this->getVtaFacturaItems(null, null, true);
        foreach ($vta_factura_items as $vta_factura_item) {
            $gral_tipo_iva = $vta_factura_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $vta_factura_item->getImporteUnitario();
                $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_factura_item->getCantidad();

                $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_factura_item->getCantidad();
                $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

                $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                    'id' => $vta_factura_item->getGralTipoIvaId(),
                    'descripcion' => $gral_tipo_iva->getDescripcion(),
                    'codigo' => $gral_tipo_iva->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                    'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
                );
            }
        }

        return $arr_iva;
    }

    public function getArrIvaParaAfip() {

        $arr = array();

        // se suman las ordenes de venta
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, null, true);
        foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

                $importe_total = round($vta_factura_vta_orden_venta->getImporteTotal(), 3);
                $importe_iva = round($vta_factura_vta_orden_venta->getImporteIva(), 3);

                $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
                //$arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
                $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
                $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
            }
        }

        // se suman los items sueltos de la factura
        $vta_factura_items = $this->getVtaFacturaItems(null, null, true);
        foreach ($vta_factura_items as $vta_factura_item) {
            $gral_tipo_iva = $vta_factura_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

                $importe_total = round($vta_factura_item->getImporteTotal(), 3);
                $importe_iva = round($vta_factura_item->getImporteIva(), 3);

                $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
                //$arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
                $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
                $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
            }
        }

        return $arr;
    }

    /**
     * @creado_por Pablo Rosenperger
     * @creado 15/08/2018
     */
    public function getArrTributoFacturaFull() {
        $arr_tributo = array();
        $vta_factura_vta_tributos = $this->getVtaFacturaVtaTributos(null, null, true);

        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {
            $importe_unitario = $vta_factura_vta_tributo->getImporteImponible();
            $importe_tributo = ($vta_factura_vta_tributo->getVtaTributo()->getAlicuotaPorcentual() / 100) * $importe_unitario;

            $acu_importe_unitario[$vta_factura_vta_tributo->getVtaTributo()->getCodigo()] += $importe_unitario;
            $acu_iva[$vta_factura_vta_tributo->getVtaTributo()->getCodigo()] += $importe_tributo;

            $arr_tributo[$vta_factura_vta_tributo->getVtaTributo()->getCodigo()] = array(
                'id' => $vta_factura_vta_tributo->getVtaTributoId(),
                'descripcion' => $vta_factura_vta_tributo->getVtaTributo()->getDescripcion(),
                'codigo' => $vta_factura_vta_tributo->getVtaTributo()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$vta_factura_vta_tributo->getVtaTributo()->getCodigo()],
                'importe_tributo' => $acu_iva[$vta_factura_vta_tributo->getVtaTributo()->getCodigo()],
            );
        }
        return $arr_tributo;
    }

    public function getArrTributoParaAfip() {
        $arr = array();

        $vta_factura_vta_tributos = $this->getVtaFacturaVtaTributos(null, null, true);

        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {

            $importe_imponible = round($vta_factura_vta_tributo->getImporteImponible(), 2);
            $importe_tributo = round($vta_factura_vta_tributo->getImporteTributo(), 2);
            $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
            $ws_fe_param_tipo_tributo = $vta_tributo->getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo();

            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            //$arr[$vta_factura_vta_tributo->getVtaTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Alic'] = $vta_factura_vta_tributo->getAlicuotaPorcentual();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    public function getArrTributoParaAfipVtaFacturaItems() {
        $arr = array();

        $vta_factura_vta_tributos = $this->getVtaFacturaVtaTributos(null, null, true);

        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {

            $importe_imponible = round($vta_factura_vta_tributo->getImporteImponible(), 2);
            $importe_tributo = round($vta_factura_vta_tributo->getImporteTributo(), 2);
            $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
            $ws_fe_param_tipo_tributo = $vta_tributo->getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo();

            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            //$arr[$vta_factura_vta_tributo->getVtaTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Alic'] = $vta_factura_vta_tributo->getAlicuotaPorcentual();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    public function setAgregarTributos($subtotal_calculado) {

        $arr_vta_tributos_vigentes = $this->getTributosAAplicar($subtotal_calculado);

        // ----------------------------------------------------------------
        // se agrega cada tributo que afecta a la factura
        // ----------------------------------------------------------------
        if (count($arr_vta_tributos_vigentes) > 0) {
            foreach ($arr_vta_tributos_vigentes as $arr_vta_tributo_vigente) {

                //Gral::prr($arr_vta_tributo_vigente);
                $vta_tributo = $arr_vta_tributo_vigente['vta_tributo'];
                $vta_tributo_vigente_aplica = $arr_vta_tributo_vigente['aplica'];
                $vta_tributo_vigente_exento = $arr_vta_tributo_vigente['exento'];
                $vta_tributo_vigente_supera_minimo = $arr_vta_tributo_vigente['supera_minimo'];

                if ($vta_tributo_vigente_aplica && !$vta_tributo_vigente_exento && $vta_tributo_vigente_supera_minimo) {
                    $array = array(
                        array('campo' => 'vta_factura_id', 'valor' => $this->getId()),
                        array('campo' => 'vta_tributo_id', 'valor' => $vta_tributo->getId()),
                    );
                    $vta_factura_vta_tributo = VtaFacturaVtaTributo::getOxArray($array);
                    if (!$vta_factura_vta_tributo) {
                        $vta_factura_vta_tributo = new VtaFacturaVtaTributo();
                        $vta_factura_vta_tributo->setVtaFacturaId($this->getId());
                        $vta_factura_vta_tributo->setVtaTributoId($vta_tributo->getId());
                    }

                    $importe_neto_gravado = $this->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO);
                    $importe_tributo = $importe_neto_gravado * $vta_tributo->getAlicuotaDecimal();

                    $vta_factura_vta_tributo->setImporteImponible($importe_neto_gravado);
                    $vta_factura_vta_tributo->setImporteTributo($importe_tributo);
                    $vta_factura_vta_tributo->setAlicuotaPorcentual($vta_tributo->getAlicuotaPorcentual());
                    $vta_factura_vta_tributo->setAlicuotaDecimal($vta_tributo->getAlicuotaDecimal());
                    $vta_factura_vta_tributo->setEstado(1);
                    $vta_factura_vta_tributo->save();
                }
            }
        }
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/02/2020 20:32
     * Metodo que retorna los tributos a aplicar de acuerdo a criterios indicados.
     * Se utiliza antes de tener una factura generada
     * @return VtaTributos
     */
    static function getTributosAAplicarDeduccion($cli_cliente_id, $vta_punto_venta_id, $importe) {
        $arr_vta_tributos_aplicados = array();
        $vta_recibo_concepto = VtaReciboConcepto::getOxCodigo(VtaReciboConcepto::TIPO_COBRO_FACTURA);
        $vta_recibo_concepto_id = ($vta_recibo_concepto) ? $vta_recibo_concepto->getId() : 0;

        $vta_factura = new VtaFactura();
        $vta_factura->setCliClienteId($cli_cliente_id);
        $vta_factura->setVtaPuntoVentaId($vta_punto_venta_id);

        $gral_condicion_iva = VtaFactura::getDeterminacionGralCondicionIva($cli_cliente_id);
        if ($gral_condicion_iva) {
            $vta_factura->setGralCondicionIvaId($gral_condicion_iva->getId());
        }

        $arr_vta_tributos_vigentes = $vta_factura->getTributosAAplicar($importe);

        foreach ($arr_vta_tributos_vigentes as $arr_vta_tributo_vigente) {
            $vta_tributo_vigente = $arr_vta_tributo_vigente['vta_tributo'];
            $vta_tributo_vigente_aplica = $arr_vta_tributo_vigente['aplica'];
            $vta_tributo_vigente_exento = $arr_vta_tributo_vigente['exento'];
            $vta_tributo_vigente_supera_minimo = $arr_vta_tributo_vigente['supera_minimo'];

            if ($vta_tributo_vigente_aplica && !$vta_tributo_vigente_exento && $vta_tributo_vigente_supera_minimo) {
                $alicuota_decimal = $vta_tributo_vigente->getAlicuotaDecimal();
                $importe_tributo = $importe * $alicuota_decimal;

                $arr_vta_tributos_aplicado = array(
                    'vta_recibo_item_generico_vta_recibo_concepto_id' => $vta_recibo_concepto_id,
                    'txt_vta_recibo_item_generico_descripcion' => $vta_tributo_vigente->getDescripcion(),
                    'txt_vta_recibo_item_generico_importe_unitario' => $importe_tributo,
                );
                $arr_vta_tributos_aplicados[] = $arr_vta_tributos_aplicado;
            }
        }
        return $arr_vta_tributos_aplicados;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 23/04/2018 11:00 hs.
     * Metodo que retorna los tributos a aplicar.
     * @return VtaTributos
     */
    public function getTributosAAplicar($subtotal_calculado) {
        $arr_vta_tributos_vigentes = array();

        $vta_tributos = VtaTributo::getVtaTributos(null, null, true);

        foreach ($vta_tributos as $vta_tributo) {
            $vta_tributo_aplica = false;
            $vta_tributo_aplica = $vta_tributo->getVtaTributoAplica($this, $subtotal_calculado);

            if ($vta_tributo_aplica) {
                $arr_vta_tributos_vigentes[] = $vta_tributo_aplica;
            }
        }
        return $arr_vta_tributos_vigentes;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo que retorna el numero de comprobante formato "pto vta - num comp afip".
     * @return String
     */
    public function getNumeroComprobanteCompleto() {
        $gral_sucursal = $this->getGralSucursal();
        $vta_punto_venta = $this->getVtaPuntoVenta();

        $numero_sucursal = $gral_sucursal->getNumero();
        $numero_punto_venta = $vta_punto_venta->getNumero();
        $numero_comprobante = $this->getNumeroFactura();

        return str_pad($numero_sucursal, DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT) . '-' . str_pad($numero_punto_venta, DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
    }

    /**
     * Metodo que retorna el numero de comprobante formato "siglas - letra - pto-vta - num-comp-afip". 
     * @creado_por Esteban Martinez
     * @creado 10/02/2019
     * @return String
     */
    public function getNumeroComprobanteCompletoFull() {
        $gral_sucursal = $this->getGralSucursal();
        $vta_punto_venta = $this->getVtaPuntoVenta();
        $numero_sucursal = $gral_sucursal->getNumero();
        $numero_punto_venta = $vta_punto_venta->getNumero();
        $siglas_tipo_comprobante = $this->getTipoComprobanteSiglas();
        $numero_comprobante = $this->getNumeroFactura();
        $letra_tipo_comprobante = $this->getVtaTipoFactura()->getCodigoMin();

        return $siglas_tipo_comprobante . ' ' . $letra_tipo_comprobante . ' ' . str_pad($numero_sucursal, DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT) . '-' . str_pad($numero_punto_venta, DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
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
    public function getArrIvaComprobanteFull() {
        return $this->getArrIvaFacturaFull();
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 22/10/2018
     */
    public function getArrIvaParaCitiComprobanteFull() {
        return $this->getArrIvaParaCitiFacturaFull();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrTributoComprobanteFull() {
        return $this->getArrTributoFacturaFull();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna importe del comprobante.
     * @return Float
     */
    public function getImporteTotalComprobante($resumen = false) {

        if($resumen){
            // -------------------------------------------------------------------------
            // se instancia la tabla de resumen
            // -------------------------------------------------------------------------
            $vta_factura_importe = $this->getResumenComprobante();
            return $vta_factura_importe->getImporteTotal();
        }
                
        return $this->getVtaFacturaTotal();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteDebe() {
        $importe_total_debe = $this->getImporteTotalComprobante($resumen = true);
        return $importe_total_debe;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteHaber() {
        $importe_total_haber = 0;
        return $importe_total_haber;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotal($tipo_subtotal = false) {

        return $this->getVtaFacturaSubtotal(false, $tipo_subtotal);
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
        } else {
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
        } else {
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
        } else {
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
        } else {
            foreach ($arr_tributo_full as $arr_tributo) {
                $importe += $arr_tributo['importe_tributo'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImportePercepcionIIBB($arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoFacturaFull();
        }

        $arr_tributo = $arr_tributo_full[PERCEPCIONES_IIBB];

        return $arr_tributo['importe_tributo'];
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteTotal() {
        return $this->getVtaFacturaTotal();
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
        $tipo_comprobante = $this->getVtaTipoFactura();
        $descripcion = $tipo_comprobante->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        $tipo_comprobante = $this->getVtaTipoFactura();
        $descripcion = $tipo_comprobante->getCodigoMin();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo estado si existe.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        $comprobante_tipo_estado = $this->getVtaFacturaTipoEstado();
        $descripcion = $comprobante_tipo_estado->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getVtaTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoOrigenFactura()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getVtaTipoComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoFactura()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarVtaComprobante($recalcular_estado, $vta_nota_credito_ids = null, $vta_recibo_ids = null, $vta_ajuste_haber_ids = null) {
        // Importe a imputar
        $vta_factura_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($vta_recibo_ids as $vta_recibo_id) {
            $vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
            $vta_comprobantes[] = $vta_recibo;
        }

        foreach ($vta_nota_credito_ids as $vta_nota_credito_id) {
            $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
            $vta_comprobantes[] = $vta_nota_credito;
        }

        foreach ($vta_ajuste_haber_ids as $vta_ajuste_haber_id) {
            $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
            $vta_comprobantes[] = $vta_ajuste_haber;
        }

        // Ordeno los comprobantes
        usort($vta_comprobantes, array($this, 'self::getOrdenarColeccionComprobantes'));

        $vta_factura_importe_a_imputar = $vta_factura_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($vta_comprobantes as $vta_comprobante) {

            if ((int) ($vta_factura_importe_a_imputar * 100) > 0) {
                $clase = get_class($vta_comprobante);

                if ($clase == 'VtaNotaCredito') {
                    $vta_nota_credito = VtaNotaCredito::getOxId($vta_comprobante->getId());
                    $vta_nota_credito_importe_disponible = $vta_nota_credito->getSaldoImputable();

                    // Genero la relacion
                    $vta_factura_vta_nota_credito = new VtaFacturaVtaNotaCredito();
                    $vta_factura_vta_nota_credito->setVtaFacturaId($this->getId());
                    $vta_factura_vta_nota_credito->setVtaNotaCreditoId($vta_nota_credito->getId());

                    // Monto de la factura mayor o igual al de la NC
                    if ((int) ($vta_factura_importe_a_imputar * 100) < (int) ($vta_nota_credito_importe_disponible * 100)) {

                        $vta_factura_vta_nota_credito->setImporteAfectado($vta_factura_importe_a_imputar);
                    } else {
                        $vta_factura_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_disponible);
                    }
                    $vta_factura_vta_nota_credito->setEstado(1);
                    $vta_factura_vta_nota_credito->save();

                    $vta_factura_importe_a_imputar -= $vta_nota_credito_importe_disponible;
                } elseif ($clase == 'VtaRecibo') {
                    $vta_recibo = VtaRecibo::getOxId($vta_comprobante->getId());

                    $vta_recibo_importe_disponible = $vta_recibo->getSaldoImputable();

                    // Genero la relacion
                    $vta_factura_vta_recibo = new VtaFacturaVtaRecibo();
                    $vta_factura_vta_recibo->setVtaFacturaId($this->getId());
                    $vta_factura_vta_recibo->setVtaReciboId($vta_recibo->getId());

                    // Monto de la factura mayor o igual al del Recibo
                    if ((int) ($vta_factura_importe_a_imputar * 100) < (int) ($vta_recibo_importe_disponible * 100)) {
                        $vta_factura_vta_recibo->setImporteAfectado($vta_factura_importe_a_imputar);
                    } else {
                        $vta_factura_vta_recibo->setImporteAfectado($vta_recibo_importe_disponible);
                    }
                    $vta_factura_vta_recibo->setEstado(1);
                    $vta_factura_vta_recibo->save();

                    $vta_factura_importe_a_imputar -= $vta_recibo_importe_disponible;
                } elseif ($clase == 'VtaAjusteHaber') {
                    $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_comprobante->getId());

                    $vta_ajuste_haber_importe_disponible = $vta_ajuste_haber->getSaldoImputable();

                    // Genero la relacion
                    $vta_factura_vta_ajuste_haber = new VtaFacturaVtaAjusteHaber();
                    $vta_factura_vta_ajuste_haber->setVtaFacturaId($this->getId());
                    $vta_factura_vta_ajuste_haber->setVtaAjusteHaberId($vta_ajuste_haber->getId());

                    // Monto de la factura mayor o igual al del Ajuste
                    if ((int) ($vta_factura_importe_a_imputar * 100) < (int) ($vta_ajuste_haber_importe_disponible * 100)) {
                        $vta_factura_vta_ajuste_haber->setImporteAfectado($vta_factura_importe_a_imputar);
                    } else {
                        $vta_factura_vta_ajuste_haber->setImporteAfectado($vta_ajuste_haber_importe_disponible);
                    }
                    $vta_factura_vta_ajuste_haber->setEstado(1);
                    $vta_factura_vta_ajuste_haber->save();

                    $vta_factura_importe_a_imputar -= $vta_ajuste_haber_importe_disponible;
                }
            }
        }

        if ($recalcular_estado) {
            // ---------------------------------------------------------------------
            // se recalcula estado de los comprobantes vinculados
            // ---------------------------------------------------------------------        
            $this->setRecalcularEstado($recursivo = true);
        }

        return $this;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo que redefine el estado del comprobante de acuerdo a sus conciliaciones actuales
     * @return Obj VtaFacturaEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) {
            $importe_afectado = $vta_factura_vta_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_factura_vta_recibo->getVtaRecibo()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $importe_afectado = $vta_factura_vta_nota_credito->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_factura_vta_nota_credito->getVtaNotaCredito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_ajuste_habers as $vta_factura_vta_ajuste_haber) {
            $importe_afectado = $vta_factura_vta_ajuste_haber->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_factura_vta_ajuste_haber->getVtaAjusteHaber()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= ConfVariable::getImporteMargenToleranciaConciliacionSaldado())) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------
            $vta_factura_estado = $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_SALDADO, '' . $importe_comprobante_saldo);
        } elseif ($importe_comprobante_saldo > ConfVariable::getImporteMargenToleranciaConciliacionSaldado() && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $vta_factura_estado = $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_SALDADO_PARCIAL, '');
        } elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $vta_factura_estado = $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE, '');
        }

        return $vta_factura_estado;
    }

    static function getOrdenarColeccionComprobantes($vta_comprobante, $vta_comprobante_comparacion) {
        $fecha_emision = strtotime(date($vta_comprobante->getFechaEmision()));
        $fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getFechaEmision()));

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

        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $vta_factura_vta_nota_credito->setEstado(0);
            $vta_factura_vta_nota_credito->save();

            if ($recursivo) {
                $vta_factura_vta_nota_credito->getVtaNotaCredito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) {
            $vta_factura_vta_recibo->setEstado(0);
            $vta_factura_vta_recibo->save();

            if ($recursivo) {
                $vta_factura_vta_recibo->getVtaRecibo()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_ajuste_habers as $vta_factura_vta_ajuste_haber) {
            $vta_factura_vta_ajuste_haber->setEstado(0);
            $vta_factura_vta_ajuste_haber->save();

            if ($recursivo) {
                $vta_factura_vta_ajuste_haber->getVtaAjusteHaber()->setRecalcularEstado(false);
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
        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) {
            $importe_total_comprobante_afectado += $vta_factura_vta_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Creditos
        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $importe_total_comprobante_afectado += $vta_factura_vta_nota_credito->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Ajustes
        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);
        foreach ($vta_factura_vta_ajuste_habers as $vta_factura_vta_ajuste_haber) {
            $importe_total_comprobante_afectado += $vta_factura_vta_ajuste_haber->getImporteAfectado();
        }

        $importe_total_comprobante = round($importe_total_comprobante, 2);
        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante - $importe_total_comprobante_afectado;

        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de Facturas para imputar en las NC y Recibos.
     * @return VtaFacturas
     */
    static function getVtaFacturasImputables($cli_cliente_id, $gral_empresa_id = null, $vta_comprobante_seleccionado = false) {
        $criterio = new Criterio(VtaFactura::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        if ($cli_cliente_id != 'null') {
            $criterio->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
        } elseif ($vta_comprobante_seleccionado) {
            $criterio->add(VtaFactura::GEN_ATTR_PERSONA_DESCRIPCION, $vta_comprobante_seleccionado->getPersonaDescripcion(), Criterio::IGUAL);
        }
        if ($gral_empresa_id != 'null') {
            $criterio->add(VtaFactura::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        $criterio->add(VtaFacturaTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);

        $criterio->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(VtaFactura::GEN_TABLA);
        $criterio->setCriterios();

        $vta_facturas = VtaFactura::getVtaFacturas(null, $criterio, true);

        return $vta_facturas;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/05/2021 11:00 hs.
     * Metodo que retorna una coleccion de Facturas para imputar en las NC y Recibos.
     * @return VtaFacturas
     */
    static function getVtaFacturasImputablesANotaDebito($cli_cliente_id, $gral_empresa_id = null, $vta_comprobante_seleccionado = false) {
        $criterio = new Criterio(VtaFactura::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");
        $criterio->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);

        if ($cli_cliente_id != 'null') {
            $criterio->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
        } elseif ($vta_comprobante_seleccionado) {
            $criterio->add(VtaFactura::GEN_ATTR_PERSONA_DESCRIPCION, $vta_comprobante_seleccionado->getPersonaDescripcion(), Criterio::IGUAL);
        }
        if ($gral_empresa_id != 'null') {
            $criterio->add(VtaFactura::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        $criterio->addFinSubconsulta();

        $criterio->addTabla(VtaFactura::GEN_TABLA);
        $criterio->setCriterios();

        $vta_facturas = VtaFactura::getVtaFacturas(null, $criterio, true);

        return $vta_facturas;
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

    public function getVtaComprobanteTipoEstado() {
        return $this->getVtaFacturaTipoEstado();
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getVtaComprobantesVinculadosPorConciliacion() {
        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);

        $vta_nota_creditos = $this->getVtaNotaCreditosXVtaFacturaVtaNotaCredito(null, null, true);
        $vta_recibos = $this->getVtaRecibosXVtaFacturaVtaRecibo(null, null, true);
        $vta_ajuste_habers = $this->getVtaAjusteHabersXVtaFacturaVtaAjusteHaber(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($vta_factura_vta_nota_creditos, $vta_factura_vta_recibos, $vta_factura_vta_ajuste_habers);
        $arr_comprobantes['EXTREMO'] = array_merge($vta_nota_creditos, $vta_recibos, $vta_ajuste_habers);

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
     * Autor: Pablo Rosen
     * Fecha: 28/02/2019 10:47
     * Metodo que retorna un booleano indicando si el comprobante puede desvincularse de conciliacion o no
     * @return boolean
     */
    public function esComprobanteDesvinculable() {

        // ---------------------------------------------------------------------
        // se verifica que el comprobante no este vinculado a ninguna comision
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(VtaComisionVtaFactura::GEN_TABLA);
        $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID);
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID);
        $c->setCriterios();

        $vta_comision_vta_facturas = $this->getVtaComisionVtaFacturas(null, $c);
        if (count($vta_comision_vta_facturas) > 0) {
            return false;
        }
        return true;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImporteTotalOperacion() {
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
      Se consignara el importe que surja de sumar los montos que no integren la base imponible.
      Podrá ser cero.
     */
    public function getAfipCitiVentasCbteImporteTotalConceptos() {
        $importe_base_imponible_no_gravado = $this->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO);

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
    public function getAfipCitiVentasCbteImportePercepcionNoCategorizados() {
        $afip_citi_importe_percepcion_no_categorizados = "0.00"; //revisar logica

        $afip_citi_importe_percepcion_no_categorizados = round($afip_citi_importe_percepcion_no_categorizados, 2);
        $afip_citi_importe_percepcion_no_categorizados = Gral::completar_decimales($afip_citi_importe_percepcion_no_categorizados);

        $afip_citi_importe_percepcion_no_categorizados = str_replace(".", '', $afip_citi_importe_percepcion_no_categorizados);
        $afip_citi_importe_percepcion_no_categorizados = str_pad($afip_citi_importe_percepcion_no_categorizados, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepcion_no_categorizados = substr($afip_citi_importe_percepcion_no_categorizados, 0, 15);

        return $afip_citi_importe_percepcion_no_categorizados;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImporteOperacionesExentas() {
        $importe_base_imponible_exento = $this->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO);

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
    public function getAfipCitiVentasCbteImportePercepcionesImpuestosNacionales($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_impuestos_nacionales = "0.00"; //revisar logica 

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
     */
    public function getAfipCitiVentasCbteImportePercepcionesIngresosBrutos($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_ingresos_brutos = $this->getImportePercepcionIIBB($arr_tributo_full);

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
    public function getAfipCitiVentasCbteImportePercepcionesImpuestosMunicipales($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_impuestos_municipales = "0.00"; //revisar logica 

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
    public function getAfipCitiVentasCbteImporteImpuestosInternos($arr_tributo_full = false) {
        $afip_citi_importe_impuestos_internos = "0.00"; //revisar logica 

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
    public function getAfipCitiVentasCbteImporteOtrosTributos($arr_tributo_full = false) {
        $afip_citi_importe_otros_tributos = "0.00"; //revisar logica.

        $afip_citi_importe_otros_tributos = round($afip_citi_importe_otros_tributos, 2);
        $afip_citi_importe_otros_tributos = Gral::completar_decimales($afip_citi_importe_otros_tributos);

        $afip_citi_importe_otros_tributos = str_replace(".", '', $afip_citi_importe_otros_tributos);
        $afip_citi_importe_otros_tributos = str_pad($afip_citi_importe_otros_tributos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_otros_tributos = substr($afip_citi_importe_otros_tributos, 0, 15);

        return $afip_citi_importe_otros_tributos;
    }

    /*
     * @creado_por Esteban Martinez
     * @creado 10/10/2018
     */

    public function getAfipCitiVentasDenominacionComprador() {
        $denominacion_comprador = $this->getPersonaDescripcion();

        $find = array('/[^A-Za-z0-9\- <>]/');
        $repl = array('');
        $denominacion_comprador = preg_replace($find, $repl, $denominacion_comprador);

        //se rellena
        $denominacion_comprador = str_pad($denominacion_comprador, 30, " ", STR_PAD_RIGHT);
        //se corta
        $denominacion_comprador = substr($denominacion_comprador, 0, 30);
        return $denominacion_comprador;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 20/10/2018 21:53
     * Metodo que retorna una coleccion con las observaciones de AFIP para el comprobante
     */
    public function getWsFeOpeSolicitudRespuestaObservacions() {
        $ws_fe_ope_solicitud_respuesta_observacions_full = array();

        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud();
        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {
            $ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuesta();
            if ($ws_fe_ope_solicitud_respuesta) {
                $ws_fe_ope_solicitud_respuesta_observacions = $ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitudRespuestaObservacions();
            }
            if (is_array($ws_fe_ope_solicitud_respuesta_observacions)) {
                $ws_fe_ope_solicitud_respuesta_observacions_full = array_merge($ws_fe_ope_solicitud_respuesta_observacions_full, $ws_fe_ope_solicitud_respuesta_observacions);
            }
        }

        return $ws_fe_ope_solicitud_respuesta_observacions_full;
    }

    /**
     * @creado_por Esteban Martinez, Pablo Rosenberger
     * @creado 21/11/2018
     */
    static function getVtaFacturasSinCaeParaWidget($fecha_desde = "", $fecha_hasta = "") {
        $criterio = new Criterio();

        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add(VtaFacturaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL, false, '');
        $criterio->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_GENERADO, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_RECHAZADO_AFIP, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_OBSERVADO_AFIP, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_SALDADO, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->addFinSubconsulta();

        if ($fecha_desde != "") {
            $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL, 'fecha_desde');
        }

        if ($fecha_hasta != "") {
            $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL, 'fecha_hasta');
        }

        $criterio->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::IGUAL); // CAE vacio

        $criterio->addTabla(VtaFactura::GEN_TABLA);
        $criterio->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $vta_facturas = VtaFactura::getVtaFacturas($paginador = null, $criterio, $estado = null, $arr_ordens = false);
        return $vta_facturas;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 08/01/2019
     * @modificado_por Esteban Martinez
     * @modificado 10/01/2019
     */
    public function getArrComprobantesParaAtender($fecha_desde, $fecha_hasta) {
        $vta_tipo_facturas = VtaTipoFactura::getVtaTipoFacturas();
        $vta_punto_ventas = VtaPuntoVenta::getVtaPuntoVentas();
        $arr_nro_comprobantes_inexistentes = array();

        foreach ($vta_punto_ventas as $vta_punto_venta) {
            foreach ($vta_tipo_facturas as $vta_tipo_factura) {
                $arr_nro_comprobantes = array();
                $array_keys_arr_nro_comprobante = array();
                $vta_facturas = self::getVtaFacturasXVtaTipoFacturaYFechaEmision($vta_punto_venta->getId(), $vta_tipo_factura->getId(), $fecha_desde, $fecha_hasta);
                if (count($vta_facturas) > 0) {
                    foreach ($vta_facturas as $vta_factura) {
                        if (array_key_exists($vta_factura->getNumeroFactura(), $arr_nro_comprobantes)) {
                            $mensaje = "Comprobante duplicado nro '" . $vta_factura->getNumeroFactura() . "' - " . $vta_tipo_factura->getDescripcion() . " (" . $vta_punto_venta->getDescripcion() . ")";
                            $arr_nro_comprobantes_inexistentes[$i] = array('nro_comprobante' => $vta_factura->getNumeroFactura(), 'mensaje' => $mensaje);
                        }
                        $arr_nro_comprobantes[$vta_factura->getNumeroFactura()] = $vta_factura;
                    }

                    if ($vta_facturas) {
                        $array_keys_arr_nro_comprobantes = array_keys($arr_nro_comprobantes);

                        $primer_nro_comprobante = $array_keys_arr_nro_comprobantes[0];
                        $ultimo_nro_comprobante = $array_keys_arr_nro_comprobantes[count($array_keys_arr_nro_comprobantes) - 1];

                        if ($primer_nro_comprobante != '' && $ultimo_nro_comprobante != '') {
                            for ($i = $primer_nro_comprobante; $i <= $ultimo_nro_comprobante; $i++) {
                                if (!in_array($i, $array_keys_arr_nro_comprobantes)) {
                                    $mensaje = "No se encuentra el comprobante nro '" . $i . "' - " . $vta_tipo_factura->getDescripcion() . " (" . $vta_punto_venta->getDescripcion() . ")";
                                    $arr_nro_comprobantes_inexistentes[$i] = array('nro_comprobante' => $i, 'mensaje' => $mensaje);
                                }
                            }
                        } else {
                            $mensaje = "Hay comprobantes sin nro";
                            $arr_nro_comprobantes_inexistentes[$i] = array('nro_comprobante' => $i, 'mensaje' => $mensaje);
                        }
                    }
                }
            }
        }

        return $arr_nro_comprobantes_inexistentes;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 08/01/2020
     */
    static function getVtaFacturasXVtaTipoFacturaYFechaEmision($vta_punto_venta_id, $vta_tipo_factura_id, $fecha_desde, $fecha_hasta) {
        $vta_facturas = array();
        if ($vta_tipo_factura_id) {
            $criterio = new Criterio();
            if ($fecha_desde != '') {
                $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
            }

            if ($fecha_hasta != '') {
                $criterio->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
            }

            $criterio->add(VtaFactura::GEN_ATTR_VTA_TIPO_FACTURA_ID, $vta_tipo_factura_id, Criterio::IGUAL);
            $criterio->add(VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID, $vta_punto_venta_id, Criterio::IGUAL);
            $criterio->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
            $criterio->addTabla(VtaFactura::GEN_TABLA);
            $criterio->addOrden(VtaFactura::GEN_ATTR_NUMERO_FACTURA_COMPLETO, Criterio::_ASC);
            $criterio->setCriterios();

            $vta_facturas = VtaFactura::getVtaFacturas($paginador = null, $criterio, $estado = null, $arr_ordens = false);
        }

        return $vta_facturas;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/01/2019 18:48
     * Metodo que retorna una comision activa de la factura
     */
    public function getVtaComisionActiva($vta_preventista_id = false, $vta_comprador_id = false, $vta_vendedor_id = false) {
        // ---------------------------------------------------------------------
        // se consultan las facturas comisionadas de un comisionista
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaFactura::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL); // comision no anulada

        if ($vta_preventista_id) {
            $c->add(VtaComision::GEN_ATTR_VTA_PREVENTISTA_ID, $vta_preventista_id, Criterio::IGUAL);
        }
        if ($vta_comprador_id) {
            $c->add(VtaComision::GEN_ATTR_VTA_COMPRADOR_ID, $vta_comprador_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id) {
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }

        $c->addTabla(VtaComision::GEN_TABLA);
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID);
        $c->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID);
        $c->addOrden(VtaComision::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        //$p = new Paginador(5, 1);
        $p = null;

        $vta_comisions = VtaComision::getVtaComisions($p, $c);
        foreach ($vta_comisions as $vta_comision) {
            return $vta_comision;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/01/2019 10:40
     * Metodo que calcula el importe base comisionable de una factura
     * @return type
     */
    public function getImporteBaseComisionable($vta_factura_vta_nota_creditos = false) {
        $vta_presupuesto = $this->getVtaPresupuesto();

        $importe_total_comprobante = $this->getImporteTotalComprobante();
        $importe_subtotal_comprobante = $this->getImporteSubtotal();
        $importe_logistica = $vta_presupuesto->getImporteLogistica();

        // se resta el importe vinculado a la logistica
        $importe_subtotal_comprobante = $importe_subtotal_comprobante - $importe_logistica;

        if (!$vta_factura_vta_nota_creditos) {
            $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        }

        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $importe_nota_credito_afectado = $vta_factura_vta_nota_credito->getImporteAfectado();

            // se calcula el porcentaje sin impuestos de la factura            
            $porcentaje_factura_sin_impuestos = $importe_subtotal_comprobante / $importe_total_comprobante;

            // se determina el importe afectado menos impuestos
            $importe_nota_credito_afectado_sin_impuestos = $importe_nota_credito_afectado * $porcentaje_factura_sin_impuestos;

            // se suman todos los valores afectados sin impuesto
            $importe_notas_credito_vinculados += $importe_nota_credito_afectado_sin_impuestos;
        }

        // la base comisionable es el importe subtotal de la factura (no incluye impuestos) menos las NC vinculadas sin impuestos
        $importe_base_comisionable = $importe_subtotal_comprobante - $importe_notas_credito_vinculados;
        return $importe_base_comisionable;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 12/11/2019 07:45
     * Metodo que registra la anulacion del comprobante
     */
    public function setAnularComprobanteSinCAE($observacion) {
        // ---------------------------------------------------------------------
        // se registra nuevo estado de anulado
        // ---------------------------------------------------------------------
        $vta_factura_estado = $this->setVtaFacturaEstado(
                VtaFacturaTipoEstado::TIPO_ANULADO_SIN_CAE, $observacion
        );

        foreach ($this->getVtaFacturaVtaOrdenVentas() as $vta_factura_vta_orden_venta) {

            $vta_factura_vta_orden_venta->setEstado(0);
            $vta_factura_vta_orden_venta->save();

            $vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
            $vta_orden_venta->setRetrotraerVtaOrdenVentaTipoEstadoFacturacion($observacion = 'Se retrotrae estado por anulacion sin CAE de Factura ' . $this->getNumeroComprobanteCompleto());
        }

        return $vta_factura_estado;
    }

    /*
     * Metodo que verifica si la factura tiene alguna solicitud con nro de comprobante asignado 
     * que fue autorizada en AFIP pero no registrada en sistema 
     */

    public function getWsFeOpeSolicitudConNroComprobanteAutorizadoEnAfip() {

        $wsaa = new WsAa($this->getGralEmpresa());

        // Controlo la fecha de expiracion del TA que tengo o genero uno nuevo.
        if ($wsaa->get_expiration() < date("c")) {
            // Genera el "Ticket de Acceso" (TA)
            if (!$wsaa->generar_TA()) { // Retorna False si hay algun error.
                $error['descripcion'] = "Error al obtener el Ticket de Acceso.";
                $errores[] = $error;
            }
        }

        $ws_afip = new WsAfip($this->getGralEmpresa()->getCuit());

        // Carga el archivo TA.xml
        $ws_afip->openTA();

        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud();
        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {

            $ws_fe_afip_punto_venta = $ws_fe_ope_solicitud->getWsFeAfipPuntoVenta();
            $ws_fe_afip_comprobante_desde = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();
            $ws_fe_afip_tipo_comprobante = $ws_fe_ope_solicitud->getWsFeAfipTipoComprobante();

            //Gral::pr($ws_fe_afip_punto_venta);
            //Gral::pr($ws_fe_afip_comprobante_desde);
            //Gral::pr($ws_fe_afip_tipo_comprobante);

            $datos[$ws_fe_ope_solicitud->getId()] = $ws_afip->FECompConsultar($ws_fe_afip_punto_venta, $ws_fe_afip_comprobante_desde, $ws_fe_afip_tipo_comprobante);
        }
        return $datos;
    }

    /**
     * 
     * @param type $nro_comprobante
     */
    public function setAfipAnomaliaDesvincularNroComprobante($nro_comprobante) {
        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud();

        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {
            $ws_fe_afip_comprobante_desde = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();

            if ($nro_comprobante == $ws_fe_afip_comprobante_desde) {
                $sql = "UPDATE ws_fe_ope_solicitud "
                        . "SET "
                        . "ws_fe_afip_comprobante_desde = '', "
                        . "ws_fe_afip_comprobante_hasta = '' "
                        . "WHERE id = " . $ws_fe_ope_solicitud->getId();
                //Gral::_echo($sql);
                $ejec = new Ejecucion();
                $ejec->setSql($sql);
                $ejec->execute();
            }
        }
    }

    /**
     * 
     * @param type $ws_fe_ope_solicitud
     */
    public function setAfipAnomaliaClonarNroComprobante($ws_fe_ope_solicitud) {

        $arr_comprobantes_afip = $this->getWsFeOpeSolicitudConNroComprobanteAutorizadoEnAfip();
        $arr_comprobante_afip = $arr_comprobantes_afip[$ws_fe_ope_solicitud->getId()];

        $afip_codigo_autorizacion = $arr_comprobante_afip['codigo_autorizacion'];
        $afip_fecha_vencimiento = $arr_comprobante_afip['fecha_vencimiento'];
        $afip_comprobante_desde = $arr_comprobante_afip['comprobante_desde'];
        $afip_comprobante_fecha = $arr_comprobante_afip['comprobante_fecha'];
        $afip_fecha_proceso = $arr_comprobante_afip['fecha_proceso'];
        $afip_tipo_documento = $arr_comprobante_afip['tipo_documento'];
        $afip_resultado = $arr_comprobante_afip['resultado'];
        $afip_concepto = $arr_comprobante_afip['concepto'];
        $afip_punto_venta = $arr_comprobante_afip['punto_venta'];
        $afip_numero_documento = $arr_comprobante_afip['numero_documento'];
        $afip_tipo_comprobante = $arr_comprobante_afip['tipo_comprobante'];

        $afip_numero_punto_venta = str_pad($afip_punto_venta, 4, 0, STR_PAD_LEFT);
        $afip_numero_comprobante_completo = str_pad($afip_punto_venta, 4, 0, STR_PAD_LEFT) . '-' . str_pad($afip_comprobante_desde, 8, 0, STR_PAD_LEFT);

        $ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuesta();
        if (!$ws_fe_ope_solicitud_respuesta) {
            $ws_fe_ope_solicitud_respuesta = new WsFeOpeSolicitudRespuesta();
            $ws_fe_ope_solicitud_respuesta->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCae($afip_codigo_autorizacion);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCaeFechaVencimiento($afip_fecha_vencimiento);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteDesde($afip_comprobante_desde);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteHasta($afip_comprobante_desde);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteFecha($afip_comprobante_fecha);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCuit($this->getGralEmpresa()->getCuit()); // cuit de la empresa emisora
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipFechaProceso($afip_fecha_proceso);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoDocumento($afip_tipo_documento);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipNumeroDocumento($afip_numero_documento);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipPuntoVenta($afip_punto_venta);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoComprobante($afip_tipo_comprobante);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCantidadRegistro('1');
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoCabecera($afip_resultado);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipReproceso('N');
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoConcepto($afip_concepto);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoDetalle($afip_resultado);
            $ws_fe_ope_solicitud_respuesta->setEstado(1);
            $ws_fe_ope_solicitud_respuesta->save();
        }
        //Gral::prr($ws_fe_ope_solicitud_respuesta);

        $vta_factura_tipo_estado_actual = $this->getVtaFacturaTipoEstado();
        if ($vta_factura_tipo_estado_actual->getCodigo() == VtaFacturaTipoEstado::TIPO_GENERADO) {
            $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
            $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE, $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
        } else {
            $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
            $this->setVtaFacturaEstado($vta_factura_tipo_estado_actual->getCodigo(), $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
        }

        $sql = "UPDATE vta_factura "
                . "SET "
                . "numero_factura='" . $afip_comprobante_desde . "', "
                . "numero_factura_completo='" . $afip_numero_comprobante_completo . "', "
                . "cae='" . $afip_codigo_autorizacion . "', "
                . "numero_punto_venta='" . $afip_numero_punto_venta . "' "
                . "WHERE id = " . $this->getId();
        //Gral::_echo($sql);
        $ejec = new Ejecucion();
        $ejec->setSql($sql);
        $ejec->execute();
    }

    /**
     * Arma un json con los campos requeridos por la AFIP
     * https://www.afip.gob.ar/fe/qr/especificaciones.asp
     * [getQRAfipComprobanteJson description]
     * @return [array] [array de campos]
     */
    public function getAfipComprobanteJsonQR() {
        $ws_fe_ope_solicitud_respuesta = $this->getWsFeOpeSolicitudRespuestaAutorizada();
        if ($ws_fe_ope_solicitud_respuesta) {
            $ws_fe_ope_solicitud = $ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitud();
            if ($ws_fe_ope_solicitud) {
                $arr_campos = array();

                $ver = 1;
                $fecha = $this->getFechaEmision();
                $cuit = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCuit();
                $punto_venta = $ws_fe_ope_solicitud->getWsFeAfipPuntoVenta();
                $tipo_comprobante = $ws_fe_ope_solicitud->getWsFeAfipTipoComprobante();
                $numero_comprobante = $ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteDesde();
                $importe = $ws_fe_ope_solicitud->getWsFeAfipImporteTotal();
                $importe = number_format($importe, 2, '.', '');

                $moneda = $ws_fe_ope_solicitud->getWsFeAfipTipoMoneda();
                $cotizacion = 1;
                $tipo_documento_receptor = $ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoDocumento();
                $numero_documento_receptor = $ws_fe_ope_solicitud_respuesta->getWsFeAfipNumeroDocumento();
                $tipo_codigo_autorizacion = 'E';
                $codigo_autorizacion = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCae();

                $arr_campos['ver'] = $ver;
                $arr_campos['fecha'] = $fecha;
                $arr_campos['cuit'] = $cuit;
                $arr_campos['ptoVta'] = $punto_venta;
                $arr_campos['tipoCmp'] = $tipo_comprobante;
                $arr_campos['nroCmp'] = $numero_comprobante;
                $arr_campos['importe'] = $importe;
                $arr_campos['moneda'] = $moneda;
                $arr_campos['ctz'] = $cotizacion;
                $arr_campos['tipoDocRec'] = $tipo_documento_receptor;
                $arr_campos['nroDocRec'] = $numero_documento_receptor;
                $arr_campos['tipoCodAut'] = $tipo_codigo_autorizacion;
                $arr_campos['codAut'] = $codigo_autorizacion;

                return json_encode($arr_campos);
            }
        }

        return false;
    }

    /**
     * Arma la URL requerida por la AFIP con los datos del comprobante cifrado en base64
     * https://www.afip.gob.ar/fe/qr/especificaciones.asp
     * [getQRAfipComprobanteUrl description]
     * @return [string] [url cifrado en b64]
     */
    public function getAfipComprobanteUrlQR() {
        $comprobante_json = $this->getAfipComprobanteJsonQR();
        if ($comprobante_json) {
            $url = 'https://www.afip.gob.ar/fe/qr/?p=';
            $comprobante_json_b64 = base64_encode($comprobante_json);
            $url .= $comprobante_json_b64;

            return $url;
        }
        return false;
    }

    /**
     * [getWsFeOpeSolicitudRespuestaAutorizada description]
     * @return [coleccion] [La respuesta a la solicitud]
     */
    public function getWsFeOpeSolicitudRespuestaAutorizada() {
        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud();
        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {
            $ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuesta();
            if ($ws_fe_ope_solicitud_respuesta) {
                $cae = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCae();

                if (trim($cae) != '') {
                    return $ws_fe_ope_solicitud_respuesta;
                }
            }
        }
        return false;
    }

    public function getVtaOrdenVentasParaSorteoJunio2021() {
        $arr_ov_ids = array();

        $fecha_emision = $this->getFechaEmision();
        if (Date::esRangoValido('2021-06-01', $fecha_emision)) {
            $vta_orden_ventas = $this->getVtaOrdenVentasXVtaFacturaVtaOrdenVenta();
            foreach ($vta_orden_ventas as $vta_orden_venta) {
                $ins_insumo = $vta_orden_venta->getInsInsumo();
                $ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
                foreach ($ins_etiquetas as $ins_etiqueta) {
                    if ($ins_etiqueta->getCodigo() == InsEtiqueta::ETIQUETA_SORTEO_ANIVERSARIO_2021) {
                        $arr_ov_ids[] = $vta_orden_venta->getId();
                    }
                }
            }
        }
        return $arr_ov_ids;
    }      

    public function getCodigoOpCliente(){
        return ''; // para evitar errores en vta_comprobante_gestion
    }
    
    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $vta_factura_importe = $this->getVtaFacturaImporte();

        if (!$vta_factura_importe) {
            $vta_factura_importe = new VtaFacturaImporte();
        }

        $importe_subtotal = $this->getVtaFacturaSubtotal(false, false);
        $importe_iva = $this->getVtaFacturaIva(false);
        $importe_tributo = $this->getVtaFacturaTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $vta_factura_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $vta_factura_importe->setVtaFacturaId($this->getId());
        $vta_factura_importe->setImporteSubtotal($importe_subtotal);
        $vta_factura_importe->setImporteIva($importe_iva);
        $vta_factura_importe->setImporteTributo($importe_tributo);
        $vta_factura_importe->setImporteTotal($importe_total);
        $vta_factura_importe->setEstado(1);
        $vta_factura_importe->save();

        return $vta_factura_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getVtaFacturaImporte();
        if ($o) {
            return $o;
        }

        return new VtaFacturaImporte();
    }
    
    /**
     * donde se utilice el pdf agregar un parametro mas y enviar este hash.
     * despues donde se quiera acceder , instanciar objeto y llamar a este metodo, y comprar con hash y hash recibido
     */
    public function getHash() {
        return md5($this->getCreado());
    }
    
    /**
     * Metodo que deduce si una sucursal puede o no reintentar solicitud de CAE
     * @return boolean
     */
    public function getPermiteReintentarCAEParaSucursal(){
        $fecha_emision = $this->getFechaEmision();
        $arr_fecha_emision = Date::getArrFecha($fecha_emision);
        
        $mes_comprobante = $arr_fecha_emision['mes'];
        $anio_comprobante = $arr_fecha_emision['anio'];
        
        $mes_actual = date('m');
        $anio_actual = date('Y');
        
        if($anio_comprobante == $anio_actual && $mes_comprobante == $mes_actual){
            return true;
        }
        return false;
    }
    
    /**
     * Metodo que retorna los remitos vinculados a la factura
     * @return type
     */
    public function getVtaRemitosVinculados(){
        $vta_remitos_vinculados = array();
        
        $vta_orden_ventas = $this->getVtaOrdenVentasXVtaFacturaVtaOrdenVenta();
        foreach($vta_orden_ventas as $vta_orden_venta){
            $vta_remitos = $vta_orden_venta->getVtaRemitosXVtaRemitoVtaOrdenVenta();
            foreach($vta_remitos as $vta_remito){
                $vta_remitos_vinculados[$vta_remito->getId()] = $vta_remito;
            }
        }
        
        return $vta_remitos_vinculados;
    }
    
    /**
     * Metodo que retorna el ultimo numero de comprobante asignado
     * @return boolean
     */
    public function getUltimoNumeroComprobante(){
        $ultimo = 0;

        $c = new Criterio();
        $c->addSelect(self::GEN_ATTR_NUMERO_FACTURA.'::INTEGER');
        $c->add(self::GEN_ATTR_VTA_TIPO_FACTURA_ID, $this->getVtaTipoFacturaId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getVtaPuntoVentaId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_NUMERO_FACTURA, Criterio::VACIO, Criterio::DISTINTO);
        $c->addTabla(self::GEN_TABLA);
        $c->addOrden(self::GEN_ATTR_NUMERO_FACTURA.'::INTEGER', Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        
        $vta_facturas = VtaFactura::getVtaFacturas($p, $c);
        foreach($vta_facturas as $vta_factura){
            $numero_comprobante = $vta_factura->getNumeroComprobante();
            $numero_comprobante_numerico = (int) $numero_comprobante;
            $ultimo = $numero_comprobante_numerico;
        }
        return $ultimo;
    }
        
    /**
     * Metodo que retorna el proximo numero de comprobante que debe asignado
     * @return boolean
     */
    public function getProximoNumeroComprobante(){
        $ultimo = $this->getUltimoNumeroComprobante();
        $proximo = $ultimo + 1;
        return $proximo;
    }
    
    /**
     * Metodo que registra el proximo numero de comprobante automatico
     * @return boolean
     */
    public function setAutogenerarNumeroComprobante($asignar_cae = true){
        $vta_punto_venta = $this->getVtaPuntoVenta();
        $cae = $this->getCae();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        
        if($vta_punto_venta->getAutoincremental()){
            if(trim($cae) == ''){
                $numero_comprobante = $this->getProximoNumeroComprobante();
                $numero_comprobante_pad = str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
                $numero_comprobante_completo = $numero_punto_venta.'-'.$numero_comprobante_pad;
                $this->setNumeroFactura($numero_comprobante_pad);
                $this->setNumeroFacturaCompleto($numero_comprobante_completo);
                if($asignar_cae){
                    $this->setCae(ConfVariable::CODIGO_CAE_ALTERNATIVO);
                }
                $this->save();
                //Gral::prr($this);
                
                return true;
            }
        }
        return false;
    } 
    
    /**
     * 
     * @param type $solo_productos
     * @return type
     */
    public function getCantidadItems($solo_productos = false){
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas();
        $vta_factura_items = $this->getVtaFacturaItems();
        $cantidad_items = count($vta_factura_vta_orden_ventas) + count($vta_factura_items);
        
        if($solo_productos){
            // restar OVs que no sean productos
        }

        return $cantidad_items;        
    }
    
    /**
     *
     *
     */
    public function getVtaComisionVtaFacturaXComisionista($vta_vendedor_id = 0, $vta_preventista_id = 0, $vta_comprador_id = 0) {
        $c = new Criterio();
        $c->addDistinct(true);
        VtaComisionVtaFactura::setAplicarFiltrosDeAlcance($c);
        $c->add(VtaFactura::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL); // comision no anulada
        
        if ($vta_vendedor_id != 0) {
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($vta_preventista_id != 0) {
            $c->add(VtaComision::GEN_ATTR_VTA_PREVENTISTA_ID, $vta_preventista_id, Criterio::IGUAL);
        }
        if ($vta_comprador_id != 0) {
            $c->add(VtaComision::GEN_ATTR_VTA_COMPRADOR_ID, $vta_comprador_id, Criterio::IGUAL);
        }
        
        $c->addTabla(VtaComisionVtaFactura::GEN_TABLA);
        $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
        $c->addOrden(VtaComisionVtaFactura::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        //$p = new Paginador(5, 1);
        $p = null;

        $vta_comision_vta_facturas = VtaComisionVtaFactura::getVtaComisionVtaFacturas($p, $c);
        foreach ($vta_comision_vta_facturas as $vta_comision_vta_factura) {
            return $vta_comision_vta_factura;
        }
        return false;
    }
    
    /**
     * Autor: Baez Julian
     * Fecha: 24/06/2022 12:00
     * @param type $gral_tipo_iva_codigo
     * @return type
     */
    public function getImporteTotalPorTipoIVA($gral_tipo_iva_codigo){
        $importe_total = 0;
        
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentas(null, null, true);
        foreach($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta){
            $importe_total+=$vta_factura_vta_orden_venta->getImporteTotalPorTipoIVA($gral_tipo_iva_codigo);
        }
        
        $vta_factura_items = $this->getVtaFacturaItems(null, null, true);
        foreach ($vta_factura_items as $vta_factura_item) {
            $importe_total+=$vta_factura_item->getImporteTotalPorTipoIVA($gral_tipo_iva_codigo);
        }
        
        return $importe_total;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/09/2022 15:30
     * Metodo que reasigna el numero de comprobante al registro, en el caso de 
     * posibles errores de impresion o danio del papel
     * @param type $nro_comprobante
     * @param type $nota_interna
     */
    public function setReasignarNumeroComprobante($nro_comprobante, $nota_interna){
        
        $numero_comprobante_actual = $this->getNumeroFactura();
        $numero_comprobante_nuevo = $nro_comprobante;
        
        // ---------------------------------------------------------------------
        // se genera una nueva factura con estado de ANULADA con el numero que se modifico
        // ---------------------------------------------------------------------
        $vta_factura = clone $this;
        $vta_factura->setId(null, false);
        $vta_factura->save();
        
        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $vta_factura->setCodigo(self::PREFIJO_FACTURA . str_pad($vta_factura->getId(), 8, 0, STR_PAD_LEFT));
        $vta_factura->save();
        
        $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_ANULADO_RENUMERADO, 'Reasignacion de Numero de Comprobante - Cambia '.$numero_comprobante_actual.' por '.$numero_comprobante_nuevo.' - '.$nota_interna);
        
        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_factura->setActualizarResumenComprobante();
        
        // ---------------------------------------------------------------------
        // se reasigna el numero de factura
        // ---------------------------------------------------------------------
        $numero_sucursal = $this->getNumeroSucursal();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $numero_comprobante_pad = str_pad($nro_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
        $numero_comprobante_completo = $numero_sucursal.'-'.$numero_punto_venta.'-'.$numero_comprobante_pad;
        
        $this->setNumeroFactura($numero_comprobante_pad);
        $this->setNumeroFacturaCompleto($numero_comprobante_completo);
        $this->save();   

        $vta_factura_tipo_estado_actual = $this->getVtaFacturaTipoEstado();
        
        $this->setVtaFacturaEstado($vta_factura_tipo_estado_actual->getCodigo(), 'Reasignacion de Numero de Comprobante - Cambia '.$numero_comprobante_actual.' por '.$numero_comprobante_nuevo.' - Genero Factura de Transicion '.$vta_factura->getCodigo().' - '.$nota_interna);
        
    }
    
    /**
     * 
     */
    public function getArrItemsFormateadoParaSIFEN(){
        $arr_items = array();
        
        // ---------------------------------------------------------------------
        // Factura de OVs
        // ---------------------------------------------------------------------
        $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentasHabilitados();
        foreach($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta){
            $vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
            $ins_insumo = $vta_orden_venta->getInsInsumo();
            $gral_tipo_iva = $vta_factura_vta_orden_venta->getGralTipoIva();
            $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
    
            // -----------------------------------------------------------------
            // relaciones codigos ekuatia
            // -----------------------------------------------------------------
            $eku_param_unidad_medida = $ins_unidad_medida->getEkuParamUnidadMedidaXEkuParamUnidadMedidaInsUnidadMedida();
            $eku_param_tipo_afectacion_tributaria = $gral_tipo_iva->getEkuParamTipoAfectacionTributariaXEkuParamTipoAfectacionTributariaGralTipoIva();
            
            $cantidad = $vta_factura_vta_orden_venta->getCantidad();
            
            $importe_unitario_sin_descuento = $vta_orden_venta->getImporteUnitario();
            $importe_total_sin_descuento = $importe_unitario_sin_descuento * $cantidad;
            
            $importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitario();
            $importe_total = $vta_factura_vta_orden_venta->getImporteTotal();
            $importe_total_con_iva = $vta_factura_vta_orden_venta->getImporteTotalConIva();
            
            $importe_unitario_sin_descuento_con_iva = $vta_orden_venta->getImporteUnitarioSinDescuentoConIva();
            $importe_total_sin_descuento_con_iva = $importe_unitario_sin_descuento_con_iva * $cantidad;            
            
            $descuento_unitario_porcentaje = $vta_orden_venta->getDescuento();
            $descuento_unitario_importe = $importe_unitario_sin_descuento_con_iva * ($descuento_unitario_porcentaje/100);
            $descuento_total_importe = $descuento_unitario_importe * $cantidad;

            $importe_total_con_descuento = $importe_total_sin_descuento - $descuento_total_importe;
            $importe_total_con_descuento_con_iva = $importe_total_con_iva;
            
            $importe_iva = $vta_factura_vta_orden_venta->getImporteIva();

            // ---------------------------------------------------------------------
            // se redondean los importes (se redondea y agregan 8 ceros)
            // ---------------------------------------------------------------------
            $importe_unitario = Gral::completar_decimales(Gral::rnd($importe_unitario, 4), 8);
            $importe_unitario_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento, 4), 8);
            $importe_unitario_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento_con_iva, 4), 8);      
            
            $importe_total = Gral::completar_decimales(Gral::rnd($importe_total, 4), 8);
            $importe_total_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento, 4), 8);
            $importe_total_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento_con_iva, 4), 8);
            $importe_total_con_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento_con_iva, 4), 8);
            
            $descuento_unitario_importe = Gral::completar_decimales(Gral::rnd($descuento_unitario_importe, 4), 8);
            $descuento_total_importe = Gral::completar_decimales(Gral::rnd($descuento_total_importe, 4), 8);   
            $importe_total_con_descuento = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento, 4), 8);

            $importe_iva = Gral::completar_decimales(Gral::rnd($importe_iva, 4), 8);
            
            $arr_item = array(
                "id" => $vta_factura_vta_orden_venta->getId(),
                "descripcion" => $vta_orden_venta->getDescripcion(),
                "codigo_interno" => $ins_insumo->getCodigoInterno(),
                "codigo_barra" => $ins_insumo->getCodigoBarra(),
                "ins_unidad_medida_id" => $ins_unidad_medida->getId(),
                "ins_unidad_medida_descripcion" => $ins_unidad_medida->getDescripcion(),
                "eku_param_unidad_medida_codigo" => $eku_param_unidad_medida->getCodigoEku(),
                "eku_param_unidad_medida_representacion" => $eku_param_unidad_medida->getRepresentacion(),
                "cantidad" => $cantidad,
                "importe_unitario" => $importe_unitario,
                "importe_unitario_sin_descuento" => $importe_unitario_sin_descuento,
                "importe_unitario_sin_descuento_con_iva" => $importe_unitario_sin_descuento_con_iva,
                "importe_total" => $importe_total,
                "importe_total_sin_descuento" => $importe_total_sin_descuento,
                "importe_total_sin_descuento_con_iva" => $importe_total_sin_descuento_con_iva,
                "importe_total_con_descuento" => $importe_total_con_descuento,
                "importe_total_con_descuento_con_iva" => $importe_total_con_descuento_con_iva,
                "proporcion_iva" => $ins_insumo->getProporcionIva(),
                "valor_iva" => $gral_tipo_iva->getValorIva(),
                "descuento_unitario_porcentaje" => $descuento_unitario_porcentaje,
                "descuento_unitario_importe" => $descuento_unitario_importe,
                "descuento_total_importe" => $descuento_total_importe,                
                "eku_param_tipo_afectacion_tributaria_codigo" => $eku_param_tipo_afectacion_tributaria->getCodigoEku(),
                "eku_param_tipo_afectacion_tributaria_descripcion" => $eku_param_tipo_afectacion_tributaria->getDescripcion(),
                "importe_iva" => $importe_iva,
            );
            
            $arr_items[] = $arr_item;
        }
    
        // ---------------------------------------------------------------------
        // Factura de Items
        // ---------------------------------------------------------------------
        $vta_factura_items = $this->getVtaFacturaItemsHabilitados();
        foreach($vta_factura_items as $vta_factura_item){
            
            $vta_factura_concepto = $vta_factura_item->getVtaFacturaConcepto();
            $ins_unidad_medida = InsUnidadMedida::getOxCodigo(InsUnidadMedida::TIPO_UNIDAD);            
            $gral_tipo_iva = $vta_factura_item->getGralTipoIva();
    
            // -----------------------------------------------------------------
            // relaciones codigos ekuatia
            // -----------------------------------------------------------------
            $eku_param_unidad_medida = $ins_unidad_medida->getEkuParamUnidadMedidaXEkuParamUnidadMedidaInsUnidadMedida();
            $eku_param_tipo_afectacion_tributaria = $gral_tipo_iva->getEkuParamTipoAfectacionTributariaXEkuParamTipoAfectacionTributariaGralTipoIva();
            
            $cantidad = $vta_factura_item->getCantidad();
            
            $importe_unitario = $vta_factura_item->getImporteUnitario();
            $importe_unitario_sin_descuento = $vta_factura_item->getImporteUnitarioSinDescuento();
            $importe_unitario_sin_descuento_con_iva = $vta_factura_item->getImporteUnitarioSinDescuentoConIva();
            
            $importe_total = $vta_factura_item->getImporteTotal();
            $importe_total_con_iva = $vta_factura_item->getImporteTotalConIva();
            $importe_total_sin_descuento = $vta_factura_item->getImporteTotalSinDescuento();
            $importe_total_sin_descuento_con_iva = $vta_factura_item->getImporteTotalSinDescuentoConIva();
            $importe_total_con_descuento_con_iva = $vta_factura_item->getImporteTotalSinDescuentoConIva();
            
            $descuento_unitario_porcentaje = $vta_factura_item->getDescuento();
            $descuento_unitario_importe = $importe_unitario_sin_descuento_con_iva * ($descuento_unitario_porcentaje/100);
            $descuento_total_importe = $descuento_unitario_importe * $cantidad;
            
            $importe_total_con_descuento = $importe_total_sin_descuento - $descuento_total_importe;
            $importe_total_con_descuento_con_iva = $importe_total_con_iva;
                        
            $importe_iva = $vta_factura_item->getImporteIva();            
            
            // ---------------------------------------------------------------------
            // se redondean los importes (se redondea y agregan 8 ceros)
            // ---------------------------------------------------------------------
            $importe_unitario = Gral::completar_decimales(Gral::rnd($importe_unitario, 4), 8);
            $importe_unitario_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento, 4), 8);
            $importe_unitario_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento_con_iva, 4), 8);      
            
            $importe_total = Gral::completar_decimales(Gral::rnd($importe_total, 4), 8);
            $importe_total_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento, 4), 8);
            $importe_total_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento_con_iva, 4), 8);
            $importe_total_con_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento_con_iva, 4), 8);
            
            $descuento_unitario_importe = Gral::completar_decimales(Gral::rnd($descuento_unitario_importe, 4), 8);
            $descuento_total_importe = Gral::completar_decimales(Gral::rnd($descuento_total_importe, 4), 8);   
            $importe_total_con_descuento = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento, 4), 8);

            $importe_iva = Gral::completar_decimales(Gral::rnd($importe_iva, 4), 8);
            
            $arr_item = array(
                "id" => $vta_factura_item->getId(),
                "descripcion" => $vta_factura_item->getDescripcion(),
                "codigo_interno" => $vta_factura_item->getCodigo(),
                "codigo_barra" => "",
                "ins_unidad_medida_id" => $ins_unidad_medida->getId(),
                "ins_unidad_medida_descripcion" => $ins_unidad_medida->getDescripcion(),
                "eku_param_unidad_medida_codigo" => $eku_param_unidad_medida->getCodigoEku(),
                "eku_param_unidad_medida_representacion" => $eku_param_unidad_medida->getRepresentacion(),
                "cantidad" => $cantidad,
                "importe_unitario" => $importe_unitario,
                "importe_unitario_sin_descuento" => $importe_unitario_sin_descuento,
                "importe_unitario_sin_descuento_con_iva" => $importe_unitario_sin_descuento_con_iva,
                "importe_total" => $importe_total,
                "importe_total_sin_descuento" => $importe_total_sin_descuento,
                "importe_total_sin_descuento_con_iva" => $importe_total_sin_descuento_con_iva,
                "importe_total_con_descuento" => $importe_total_con_descuento,
                "importe_total_con_descuento_con_iva" => $importe_total_con_descuento_con_iva,
                "proporcion_iva" => 100,
                "valor_iva" => $gral_tipo_iva->getValorIva(),
                "descuento_unitario_porcentaje" => $descuento_unitario_porcentaje,
                "descuento_unitario_importe" => $descuento_unitario_importe,
                "descuento_total_importe" => $descuento_total_importe,                
                "eku_param_tipo_afectacion_tributaria_codigo" => $eku_param_tipo_afectacion_tributaria->getCodigoEku(),
                "eku_param_tipo_afectacion_tributaria_descripcion" => $eku_param_tipo_afectacion_tributaria->getDescripcion(),
                "importe_iva" => $importe_iva,
            );
            
            $arr_items[] = $arr_item;
        }        
        
        return $arr_items;
    }
    
    /**
     * 
     */
    public function getEkuDeActualDelComprobante(){
        
        $array = array(
            array('campo' => EkuDeVtaFactura::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $this->getId()),
            array('campo' => EkuDeVtaFactura::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_factura = EkuDeVtaFactura::getOxArray($array);
        if($eku_de_vta_factura){
            return $eku_de_vta_factura->getEkuDe();
        }
        
        return false;
    }
    
    /**
     * 
     */
    public function getEkuDesDelComprobante(){
        
        $eku_des = $this->getEkuDesXEkuDeVtaFactura();        
        return $eku_des;
    }
    
    /**
     * 
     */
    public function getSIFEN_DTE_URL(){
        $url = "";
        
        $eku_de = $this->getEkuDeActualDelComprobante();
        $url = $eku_de->getSIFEN_DTE_URL();
        
        return $url;
    }    

    /**
     * 
     */
    public function getSIFEN_DTE_XML(){
        $xml = "";
        
        $eku_de = $this->getEkuDeActualDelComprobante();
        $xml = $eku_de->getSIFEN_DTE_XML();
        
        return $xml;
    }
    
    /**
     * 
     */
    public function setAutorizarDE_SIFEN(){
        return false;
        
        // ---------------------------------------------------------------------
        // se inicializa DE
        // ---------------------------------------------------------------------
        $eku_de = EkuDe::setInicializarDEDesdeComprobante(EkuParamTipoDe::TIPO_FACTURA_ELECTRONICA, $this);
        
        // ---------------------------------------------------------------------
        // se genera XML
        // ---------------------------------------------------------------------
        $xml_de = $eku_de->setGenerarXmlDE();
        //Gral::prr($xml_de);
        //echo $xml_de;

        // ---------------------------------------------------------------------
        // se firma XML
        // ---------------------------------------------------------------------
        $xml_de_firmado = $eku_de->setFirmarXmlDERobRichards($xml_de);
        //echo($xml_de_firmado);
        
        $eku_de->setInicializarDEGrupoJ001(); // Campos Fuera de la Firma

        // ---------------------------------------------------------------------
        // se agrega QR
        // ---------------------------------------------------------------------
        $xml_de_firmado_con_qr = $eku_de->setAgregarQrAlXmlDEFirmado($xml_de_firmado);

        // ---------------------------------------------------------------------
        // se envia al SIFEN
        // ---------------------------------------------------------------------
        $eku_de = EkuDeAsch01Req::setEkuatiaRecibeDe($eku_de->getId(), $xml_de_firmado_con_qr);

        // ---------------------------------------------------------------------
        // se procesa respuesta
        // ---------------------------------------------------------------------
        $eku_de_ope_tipo_estado = $eku_de->getEkuDeOpeTipoEstado();
        $vta_factura_tipo_estado = $this->getVtaFacturaTipoEstado();
        
        if($eku_de_ope_tipo_estado){
            $observacion = $eku_de->getDescripcionCompleta();
            
            switch($eku_de_ope_tipo_estado->getCodigo()){
                case EkuDeOpeTipoEstado::TIPO_APROBADO:
                        $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_APROBADO_AFIP, $observacion);
                        $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE);

                        // -----------------------------------------------------
                        // se actualiza codigo de autorizacion
                        // -----------------------------------------------------
                        //$this->setCae(ConfVariable::CODIGO_CAE_AUTORIZADO);
                        $this->setCae($eku_de->getEkuA002IdCdc());
                        $this->save();
                    break;
                case EkuDeOpeTipoEstado::TIPO_APROBADO_CON_OBSERVACION:
                        $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_OBSERVADO_AFIP, $observacion);
                        $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_APROBADO_AFIP, $observacion);
                        $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE);

                        // -----------------------------------------------------
                        // se actualiza codigo de autorizacion
                        // -----------------------------------------------------
                        //$this->setCae(ConfVariable::CODIGO_CAE_AUTORIZADO);
                        $this->setCae($eku_de->getEkuA002IdCdc());
                        $this->save();
                    break;
                case EkuDeOpeTipoEstado::TIPO_RECHAZADO:
                        $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_RECHAZADO_AFIP, $observacion);
                    break;
            }
        }
        
        // ---------------------------------------------------------------------
        // se controla actualizacion de estado en funcion al estado anterior del comprobante
        // ---------------------------------------------------------------------
        if($vta_factura_tipo_estado->getCodigo() != VtaFacturaTipoEstado::TIPO_GENERADO){
            $this->setVtaFacturaEstado($vta_factura_tipo_estado->getCodigo(), 'Se manteniene estado por autorizacion fuera de tiempo');            
        }
        
        return $eku_de;
    }    
    
    /**
     * 
     */
    public function getConsultarEventosEnSIFEN(){
        $eku_de = $this->getEkuDeActualDelComprobante();
        if($eku_de){
            $array_eventos_sifen = $eku_de->getConsultarEventosEnSIFEN();            
            return $array_eventos_sifen;
        }
    }

    /**
     * 
     */
    public function setImportarEventosEnSIFEN(){
        $array_eventos_sifen = $this->getConsultarEventosEnSIFEN();
        
        if($array_eventos_sifen && $array_eventos_sifen['eventos']){
            foreach($array_eventos_sifen['eventos'] as $i => $array_datos_sifen_evento){ 
                $eku_de_id = $array_eventos_sifen['eku_de_id'];
                
                $eku_eve_tipo_evento_codigo = $array_datos_sifen_evento['eku_eve_tipo_evento_codigo'];
                $id = $array_datos_sifen_evento['id'];
                $mOtEve = $array_datos_sifen_evento['mOtEve'];
                $dFecFirma = $array_datos_sifen_evento['dFecFirma'];

                $eku_de = EkuDe::getOxId($eku_de_id);
                $eku_eve_tipo_evento = EkuEveTipoEvento::getOxCodigo($eku_eve_tipo_evento_codigo);
                
                // -------------------------------------------------------------
                // se importa evento
                // -------------------------------------------------------------
                $evu_eve = $eku_de->setImporteEventoEmisor($array_datos_sifen_evento);
                
                if($evu_eve){
                    switch ($eku_eve_tipo_evento->getCodigo()){
                        // ---------------------------------------------------------
                        // Evento Cancelacion
                        // ---------------------------------------------------------
                        case EkuEveTipoEvento::TIPO_CANCELACION:
                            $observacion = 'Comprobante Cancelado - ID Evento: '.$id.' - Motivo: '.$mOtEve.' - Fecha firma: '.$dFecFirma;
                            $this->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_CANCELADO_SIFEN, $observacion);
                            break;
                    }
                }
            }
            
            return $array_eventos_sifen;
        }
        return false;
    }
    
    /**
     * 
     */
    public function setImporteEventoEmisorCancelacion(){
        
    }
    
    /**
     * 
     */
    public function setGenerarEventoEmisorCancelacion($observacion){
        $eku_de = $this->getEkuDeActualDelComprobante();
        if($eku_de){
            // ---------------------------------------------------------------------
            // se registra el evento
            // ---------------------------------------------------------------------
            $eku_eve_resp = EkuEve::setRegistrarEventoCancelacion($eku_de, $observacion);
            
            if($eku_eve_resp){
                // importar evento desde SIFEN ?
            }
            
            return $eku_eve_resp;
        }
        return false;
    }

    /**
     * 
     */
    public function setGenerarEventoEmisorInutilizacion($observacion){
        $eku_de = $this->getEkuDeActualDelComprobante();
        if($eku_de){
            // ---------------------------------------------------------------------
            // se registra el evento
            // ---------------------------------------------------------------------
            $eku_eve_resp = EkuEve::setRegistrarEventoInutilizacion($eku_de, $observacion); // ********** FALTA PROGRAMAR
            
            if($eku_eve_resp){
                // importar evento desde SIFEN ?
            }
            
            return $eku_eve_resp;
        }
        return false;
    }
    
}

?>