<?php

require_once "base/BWsFeOpeSolicitud.php";

class WsFeOpeSolicitud extends BWsFeOpeSolicitud {

    static function setInicializarWsFeOpeSolicitud($vta_factura_id, $gral_empresa_id, $vta_punto_venta_id, $vta_tipo_factura_id = 0, $ws_fe_param_tipo_concepto_id = 1, $ws_fe_afip_tipo_documento = 80, $txa_observacion = '') {

        $vta_factura = VtaFactura::getOxId($vta_factura_id);
        $cli_cliente = $vta_factura->getCliCliente();

        if ($cli_cliente->getId() != 'null') {
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $cli_cliente->getCuit());
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $vta_factura->getPersonaDocumento());

            $ws_fe_afip_tipo_documento = 80; // CUIT

            $gral_tipo_documento = $vta_factura->getGralTipoDocumento();
            if ($gral_tipo_documento && $gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                if ($ws_fe_param_tipo_documento) {
                    $ws_fe_afip_tipo_documento = $ws_fe_param_tipo_documento->getCodigoAfip(); // valor dinamico
                }
            }
        } else {
            //$cli_cliente_cuit = 11111111111;
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $vta_factura->getPersonaDocumento());
            if ($cli_cliente_cuit == "") {
                $cli_cliente_cuit = 0;
            }
            $ws_fe_afip_tipo_documento = 99; // Doc (Otro)

            // -----------------------------------------------------------------
            // se obtiene el tipo de documento desde el comprobante
            // -----------------------------------------------------------------
            $gral_tipo_documento = $vta_factura->getGralTipoDocumento();
            if ($gral_tipo_documento && $gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                if ($ws_fe_param_tipo_documento) {
                    $ws_fe_afip_tipo_documento = $ws_fe_param_tipo_documento->getCodigoAfip(); // valor dinamico
                }
            }
        }

        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
        $ws_fe_param_punto_venta = $vta_punto_venta->getWsFeParamPuntoVentaXVtaPuntoVentaWsFeParamPuntoVenta();
        $ws_fe_param_punto_venta_id = $ws_fe_param_punto_venta->getId();
        $ws_fe_afip_punto_venta = $ws_fe_param_punto_venta->getNumero();

        // ---------------------------------------------------------------------
        // Declaracion de variables
        // ---------------------------------------------------------------------        
        $importe_total_neto_gravado = 0;
        $importe_total_neto_no_gravado = 0;
        $importe_total_neto_exento = 0;

        $importe_total_iva = 0;
        $importe_total_tributo = 0;
        $importe_total = 0;

        if ($vta_factura) {

            // -----------------------------------------------------------------
            // Si no mando ningun tipo de comprobante seteo el que tiene la factura. (Para nota credito y debito)
            // -----------------------------------------------------------------
            if ($vta_tipo_factura_id != 0) {
                $vta_tipo_factura = VtaTipoFactura::getOxId($vta_tipo_factura_id);
            } else {
                $vta_tipo_factura = $vta_factura->getVtaTipoFactura();
            }
            $ws_fe_param_tipo_comprobante = $vta_tipo_factura->getWsFeParamTipoComprobanteXVtaTipoFacturaWsFeParamTipoComprobante();

            // -----------------------------------------------------------------
            // Genero el Objeto WsFeOpeSolicitud
            // -----------------------------------------------------------------
            $ws_fe_ope_solicitud = new WsFeOpeSolicitud();
            $ws_fe_ope_solicitud->save();

            $arr_iva_para_afips = $vta_factura->getArrIvaParaAfip();
            foreach ($arr_iva_para_afips as $array_fe_iva) {

                $ws_fe_ope_solicitud_iva = new WsFeOpeSolicitudIva();

                $ws_fe_ope_solicitud_iva->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_iva->setWsFeParamTipoIvaId($array_fe_iva['WS_FE_PARAM_TIPO_IVA_ID']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipCodigo($array_fe_iva['Id']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipBaseImponible(round($array_fe_iva['BaseImp'], 2));
                $ws_fe_ope_solicitud_iva->setWsFeAfipImporte(round($array_fe_iva['Importe'], 2));

                $ws_fe_ope_solicitud_iva->save();

                $importe_total_iva += $array_fe_iva['Importe'];
            }

            $arr_tributo_para_afips = $vta_factura->getArrTributoParaAfip();

            foreach ($arr_tributo_para_afips as $array_fe_tributo) {
                $ws_fe_ope_solicitud_tributo = new WsFeOpeSolicitudTributo();

                $ws_fe_ope_solicitud_tributo->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_tributo->setWsFeParamTipoTributoId($array_fe_tributo['WS_FE_PARAM_TIPO_TRIBUTO_ID']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipCodigo($array_fe_tributo['Id']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipDescripcion($array_fe_tributo['Desc']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipBaseImponible(round($array_fe_tributo['BaseImp'], 2));
                $ws_fe_ope_solicitud_tributo->setWsFeAfipAlicuota($array_fe_tributo['Alic']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipImporte(round($array_fe_tributo['Importe'], 2));

                $ws_fe_ope_solicitud_tributo->save();

                $importe_total_tributo += $array_fe_tributo['Importe'];
            }

            /*
              //Comprobantes opcionales: (No aplica, es segun el rubro)
              $array_fe_comprobante_opcional['Id'] = ;
              $array_fe_comprobante_opcional['Valor'] = ;
              $array_fe_comprobante_opcionals[] = $array_fe_comprobante_opcional;
             */

            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            // neto gravado
            $importe_total_neto_gravado = round($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteNeto($importe_total_neto_gravado);

            // neto no gravado
            $importe_total_neto_no_gravado = round($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotalConcepto($importe_total_neto_no_gravado);

            // neto exento
            $importe_total_neto_exento = round($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_EXENTO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteOperacionExenta($importe_total_neto_exento);

            // iva
            $importe_total_iva = round($importe_total_iva, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteIva($importe_total_iva);

            // tributos
            $importe_total_tributo = round($importe_total_tributo, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTributo($importe_total_tributo);

            // total de la factura. ImpNeto + ImpTotConc + ImpIVA + ImpTrib + ImpOpEx
            $importe_total = round($vta_factura->getVtaFacturaTotal(), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotal($importe_total);


            // ----------------------------------------------------------------

            $ws_fe_ope_solicitud->setGralEmpresaId($gral_empresa_id);
            $ws_fe_ope_solicitud->setWsFeParamPuntoVentaId($ws_fe_param_punto_venta_id);
            $ws_fe_ope_solicitud->setWsFeParamTipoComprobanteId($ws_fe_param_tipo_comprobante->getId());

            $ws_fe_ope_solicitud->setWsFeParamTipoConceptoId(1); // 1 Productos
            $ws_fe_ope_solicitud->setWsFeParamTipoDocumentoId(1); // 1 CUIT
            $ws_fe_ope_solicitud->setWsFeParamTipoMonedaId(1); // Pesos

            $ws_fe_ope_solicitud->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);

            $ws_fe_afip_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $ws_fe_ope_solicitud->setWsFeAfipTipoComprobante($ws_fe_afip_tipo_comprobante); // 1=Factura A, 6=Factura B

            $tipo_concepto = $ws_fe_param_tipo_concepto_id;
            $ws_fe_ope_solicitud->setWsFeAfipTipoConcepto($tipo_concepto); // 1 Productos, 2 Servicios o 3 Productos y Servicios

            $ws_fe_ope_solicitud->setWsFeAfipTipoDocumento($ws_fe_afip_tipo_documento); // 80=CUIT

            $ws_fe_afip_cantidad_registro = 1;
            $ws_fe_ope_solicitud->setWsFeAfipCantidadRegistro($ws_fe_afip_cantidad_registro);

            $ws_fe_ope_solicitud->setWsFeAfipNumeroDocumento($cli_cliente_cuit);

            $ws_fe_ope_solicitud->setWsFeAfipVencimientoPago(null); // solo concepto 2 o 3

            $ws_fe_afip_tipo_moneda = 'PES'; // Id de moneda 'PES'
            $ws_fe_ope_solicitud->setWsFeAfipTipoMoneda($ws_fe_afip_tipo_moneda);

            $ws_fe_afip_cotizacion_moneda = 1; // Cotizacion moneda. Solo exportacion
            $ws_fe_ope_solicitud->setWsFeAfipCotizacionMoneda($ws_fe_afip_cotizacion_moneda);

            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioDesde(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioHasta(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde(null); // nro de comprobante desde (para cuando es lote)
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta(null); // nro de comprobante hasta (para cuando es lote)

            $ws_fe_afip_comprobante_fecha = date('Ymd');
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteFecha($ws_fe_afip_comprobante_fecha); // fecha emision de factura

            $ws_fe_ope_solicitud->setDescripcion('');
            $ws_fe_ope_solicitud->setEstado(1);
            $ws_fe_ope_solicitud->setObservacion($txa_observacion);

            $ws_fe_ope_solicitud->save();

            // Genero la relacion con la factura (Falta la logica de mantener el ultimo o el estado actual)
            $vta_factura_ws_fe_ope_solicitud = new VtaFacturaWsFeOpeSolicitud();
            $vta_factura_ws_fe_ope_solicitud->setEstado(1);
            $vta_factura_ws_fe_ope_solicitud->setVtaFacturaId($vta_factura_id);
            $vta_factura_ws_fe_ope_solicitud->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
            $vta_factura_ws_fe_ope_solicitud->save();
        } else {
            $error['descripcion'] = "Error al obtener comprobante.";
            $errores[] = $error;
        }

        return $ws_fe_ope_solicitud;
    }

    static function setInicializarWsFeOpeSolicitudFacturaItem($vta_factura_id) {
        // ---------------------------------------------------------------------
        // Valores preconfigurados
        // ---------------------------------------------------------------------
        $ws_fe_afip_tipo_documento = 80;
        $ws_fe_param_tipo_concepto_id = 1; // Productos
        // ---------------------------------------------------------------------
        // Declaracion de variables
        // ---------------------------------------------------------------------
        $importe_total_neto_gravado = 0;
        $importe_total_neto_no_gravado = 0;
        $importe_total_neto_exento = 0;

        $importe_total_iva = 0;
        $importe_total_tributo = 0;
        $importe_total = 0;

        // ---------------------------------------------------------------------
        // Obtengo los datos
        // ---------------------------------------------------------------------
        $vta_factura = VtaFactura::getOxId($vta_factura_id);

        $gral_empresa_id = $vta_factura->getGralEmpresaId();

        $vta_punto_venta = $vta_factura->getVtaPuntoventa();
        $ws_fe_param_punto_venta = $vta_punto_venta->getWsFeParamPuntoVentaXVtaPuntoVentaWsFeParamPuntoVenta();
        $ws_fe_param_punto_venta_id = $ws_fe_param_punto_venta->getId();
        $ws_fe_afip_punto_venta = $ws_fe_param_punto_venta->getNumero();

        $cli_cliente = $vta_factura->getCliCliente();

        if ($cli_cliente->getId() != 'null') {
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $cli_cliente->getCuit());
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $vta_factura->getPersonaDocumento());

            $ws_fe_afip_tipo_documento = 80; // CUIT

            $gral_tipo_documento = $vta_factura->getGralTipoDocumento();
            if ($gral_tipo_documento && $gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                if ($ws_fe_param_tipo_documento) {
                    $ws_fe_afip_tipo_documento = $ws_fe_param_tipo_documento->getCodigoAfip(); // valor dinamico
                }
            }
        } else {
            //$cli_cliente_cuit = 11111111111;
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $vta_factura->getPersonaDocumento());
            if ($cli_cliente_cuit == "") {
                $cli_cliente_cuit = 0;
            }
            $ws_fe_afip_tipo_documento = 99; // Doc (Otro)

            // -----------------------------------------------------------------
            // se obtiene el tipo de documento desde el comprobante
            // -----------------------------------------------------------------
            $gral_tipo_documento = $vta_factura->getGralTipoDocumento();
            if ($gral_tipo_documento && $gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                if ($ws_fe_param_tipo_documento) {
                    $ws_fe_afip_tipo_documento = $ws_fe_param_tipo_documento->getCodigoAfip(); // valor dinamico
                }
            }
        }

        if ($vta_factura) {

            // -----------------------------------------------------------------
            // Genero el Objeto WsFeOpeSolicitud
            // -----------------------------------------------------------------
            $ws_fe_ope_solicitud = new WsFeOpeSolicitud();
            $ws_fe_ope_solicitud->save();

            // -----------------------------------------------------------------
            // Asigno el tipo de comprobante
            // -----------------------------------------------------------------
            $vta_tipo_factura = $vta_factura->getVtaTipoFactura();
            $ws_fe_param_tipo_comprobante = $vta_tipo_factura->getWsFeParamTipoComprobanteXVtaTipoFacturaWsFeParamTipoComprobante();

            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            $arr_iva_para_afips = $vta_factura->getArrIvaParaAfip();
            foreach ($arr_iva_para_afips as $array_fe_iva) {
                $ws_fe_ope_solicitud_iva = new WsFeOpeSolicitudIva();

                $ws_fe_ope_solicitud_iva->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_iva->setWsFeParamTipoIvaId($array_fe_iva['WS_FE_PARAM_TIPO_IVA_ID']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipCodigo($array_fe_iva['Id']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipBaseImponible($array_fe_iva['BaseImp']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipImporte($array_fe_iva['Importe']);

                $ws_fe_ope_solicitud_iva->save();

                $importe_total_iva += $array_fe_iva['Importe'];
            }

            $arr_tributo_para_afips = $vta_factura->getArrTributoParaAfipVtaFacturaItems();
            foreach ($arr_tributo_para_afips as $array_fe_tributo) {
                $ws_fe_ope_solicitud_tributo = new WsFeOpeSolicitudTributo();

                $ws_fe_ope_solicitud_tributo->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_tributo->setWsFeParamTipoTributoId($array_fe_tributo['WS_FE_PARAM_TIPO_TRIBUTO_ID']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipCodigo($array_fe_tributo['Id']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipDescripcion($array_fe_tributo['Desc']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipBaseImponible($array_fe_tributo['BaseImp']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipAlicuota($array_fe_tributo['Alic']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipImporte($array_fe_tributo['Importe']);

                $ws_fe_ope_solicitud_tributo->save();

                $importe_total_tributo += $array_fe_tributo['Importe'];
            }

            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            // neto gravado
            $importe_total_neto_gravado = round($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteNeto($importe_total_neto_gravado);

            // neto no gravado
            $importe_total_neto_no_gravado = round($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotalConcepto($importe_total_neto_no_gravado);

            // neto exento
            $importe_total_neto_exento = round($vta_factura->getVtaFacturaSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_EXENTO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteOperacionExenta($importe_total_neto_exento);

            // iva
            $importe_total_iva = round($importe_total_iva, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteIva($importe_total_iva);

            // tributos
            $importe_total_tributo = round($importe_total_tributo, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTributo($importe_total_tributo);

            // total de la factura. ImpNeto + ImpTotConc + ImpIVA + ImpTrib + ImpOpEx
            $importe_total = round($vta_factura->getVtaFacturaTotal(), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotal($importe_total);


            // ----------------------------------------------------------------

            $ws_fe_ope_solicitud->setGralEmpresaId($gral_empresa_id);
            $ws_fe_ope_solicitud->setWsFeParamPuntoVentaId($ws_fe_param_punto_venta_id);
            $ws_fe_ope_solicitud->setWsFeParamTipoComprobanteId($ws_fe_param_tipo_comprobante->getId());

            $ws_fe_ope_solicitud->setWsFeParamTipoConceptoId(1); // 1 Productos
            $ws_fe_ope_solicitud->setWsFeParamTipoDocumentoId(1); // 1 CUIT
            $ws_fe_ope_solicitud->setWsFeParamTipoMonedaId(1); // Pesos

            $ws_fe_ope_solicitud->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);

            $ws_fe_afip_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $ws_fe_ope_solicitud->setWsFeAfipTipoComprobante($ws_fe_afip_tipo_comprobante); // 1=Factura A, 6=Factura B

            $tipo_concepto = $ws_fe_param_tipo_concepto_id;
            $ws_fe_ope_solicitud->setWsFeAfipTipoConcepto($tipo_concepto); // 1 Productos, 2 Servicios o 3 Productos y Servicios

            $ws_fe_ope_solicitud->setWsFeAfipTipoDocumento($ws_fe_afip_tipo_documento); // 80=CUIT

            $ws_fe_afip_cantidad_registro = 1;
            $ws_fe_ope_solicitud->setWsFeAfipCantidadRegistro($ws_fe_afip_cantidad_registro);

            $ws_fe_ope_solicitud->setWsFeAfipNumeroDocumento($cli_cliente_cuit);

            $ws_fe_ope_solicitud->setWsFeAfipVencimientoPago(null); // solo concepto 2 o 3

            $ws_fe_afip_tipo_moneda = 'PES'; // Id de moneda 'PES'
            $ws_fe_ope_solicitud->setWsFeAfipTipoMoneda($ws_fe_afip_tipo_moneda);

            $ws_fe_afip_cotizacion_moneda = 1; // Cotizacion moneda. Solo exportacion
            $ws_fe_ope_solicitud->setWsFeAfipCotizacionMoneda($ws_fe_afip_cotizacion_moneda);

            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioDesde(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioHasta(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde(null); // nro de comprobante desde (para cuando es lote)
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta(null); // nro de comprobante hasta (para cuando es lote)

            $ws_fe_afip_comprobante_fecha = date('Ymd');
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteFecha($ws_fe_afip_comprobante_fecha); // fecha emision de factura

            $ws_fe_ope_solicitud->setDescripcion('');
            $ws_fe_ope_solicitud->setEstado(1);
            $ws_fe_ope_solicitud->setObservacion('');

            $ws_fe_ope_solicitud->save();

            // Genero la relacion con la factura 
            $vta_factura_ws_fe_ope_solicitud = new VtaFacturaWsFeOpeSolicitud();
            $vta_factura_ws_fe_ope_solicitud->setEstado(1);
            $vta_factura_ws_fe_ope_solicitud->setVtaFacturaId($vta_factura_id);
            $vta_factura_ws_fe_ope_solicitud->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
            $vta_factura_ws_fe_ope_solicitud->save();
        } else {
            $error['descripcion'] = "Error al obtener comprobante.";
            $errores[] = $error;
        }

        return $ws_fe_ope_solicitud;
    }

    static function setInicializarWsFeOpeSolicitudNotaCredito($vta_nota_credito_id) {
        // ---------------------------------------------------------------------
        // Valores preconfigurados
        // ---------------------------------------------------------------------
        $ws_fe_afip_tipo_documento = 80; // CUIT
        $ws_fe_param_tipo_concepto_id = 1; // Productos
        // ---------------------------------------------------------------------
        // Declaracion de variables
        // ---------------------------------------------------------------------
        $importe_total_neto_gravado = 0;
        $importe_total_neto_no_gravado = 0;
        $importe_total_neto_exento = 0;

        $importe_total_iva = 0;
        $importe_total_tributo = 0;
        $importe_total = 0;

        // ---------------------------------------------------------------------
        // Obtengo los datos
        // ---------------------------------------------------------------------
        $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

        $gral_empresa_id = $vta_nota_credito->getGralEmpresaId();

        $vta_punto_venta = $vta_nota_credito->getVtaPuntoVenta();
        $ws_fe_param_punto_venta = $vta_punto_venta->getWsFeParamPuntoVentaXVtaPuntoVentaWsFeParamPuntoVenta();
        $ws_fe_param_punto_venta_id = $ws_fe_param_punto_venta->getId();
        $ws_fe_afip_punto_venta = $ws_fe_param_punto_venta->getNumero();

        $cli_cliente = $vta_nota_credito->getCliCliente();

        if ($cli_cliente->getId() != 'null') {
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $cli_cliente->getCuit());
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $vta_nota_credito->getPersonaDocumento());

            $gral_tipo_documento = $vta_nota_credito->getGralTipoDocumento();
            if ($gral_tipo_documento && $gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                if ($ws_fe_param_tipo_documento) {
                    $ws_fe_afip_tipo_documento = $ws_fe_param_tipo_documento->getCodigoAfip(); // valor dinamico
                }
            }
        } else {
            //$cli_cliente_cuit = 11111111111;
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $vta_nota_credito->getPersonaDocumento());
            if ($cli_cliente_cuit == "") {
                $cli_cliente_cuit = 0;
            }
            $ws_fe_afip_tipo_documento = 99; // Doc (Otro)
            
            // -----------------------------------------------------------------
            // se obtiene el tipo de documento desde el comprobante
            // -----------------------------------------------------------------
            $gral_tipo_documento = $vta_nota_credito->getGralTipoDocumento();
            if ($gral_tipo_documento && $gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                if ($ws_fe_param_tipo_documento) {
                    $ws_fe_afip_tipo_documento = $ws_fe_param_tipo_documento->getCodigoAfip(); // valor dinamico
                }
            }
            
        }

        if ($vta_nota_credito) {

            $importe_total_neto = round($vta_nota_credito->getVtaNotaCreditoSubtotal(), 2);

            // -----------------------------------------------------------------
            // Asigno el tipo de comprobante
            // -----------------------------------------------------------------
            $vta_tipo_nota_credito = $vta_nota_credito->getVtaTipoNotaCredito();
            $ws_fe_param_tipo_comprobante = $vta_tipo_nota_credito->getWsFeParamTipoComprobanteXVtaTipoNotaCreditoWsFeParamTipoComprobante();

            // -----------------------------------------------------------------
            // Genero el Objeto WsFeOpeSolicitud
            // -----------------------------------------------------------------
            $ws_fe_ope_solicitud = new WsFeOpeSolicitud();
            $ws_fe_ope_solicitud->save();

            $arr_iva_para_afips = $vta_nota_credito->getArrIvaParaAfip();
            foreach ($arr_iva_para_afips as $array_fe_iva) {

                $ws_fe_ope_solicitud_iva = new WsFeOpeSolicitudIva();

                $ws_fe_ope_solicitud_iva->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_iva->setWsFeParamTipoIvaId($array_fe_iva['WS_FE_PARAM_TIPO_IVA_ID']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipCodigo($array_fe_iva['Id']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipBaseImponible($array_fe_iva['BaseImp']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipImporte($array_fe_iva['Importe']);

                $ws_fe_ope_solicitud_iva->save();

                $importe_total_iva += $array_fe_iva['Importe'];
            }

            $arr_tributo_para_afips = $vta_nota_credito->getArrTributoParaAfip();
            foreach ($arr_tributo_para_afips as $array_fe_tributo) {
                $ws_fe_ope_solicitud_tributo = new WsFeOpeSolicitudTributo();

                $ws_fe_ope_solicitud_tributo->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_tributo->setWsFeParamTipoTributoId($array_fe_tributo['WS_FE_PARAM_TIPO_TRIBUTO_ID']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipCodigo($array_fe_tributo['Id']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipDescripcion($array_fe_tributo['Desc']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipBaseImponible($array_fe_tributo['BaseImp']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipAlicuota($array_fe_tributo['Alic']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipImporte($array_fe_tributo['Importe']);

                $ws_fe_ope_solicitud_tributo->save();

                $importe_total_tributo += $array_fe_tributo['Importe'];
            }

            // ----------------------------------------------------------------
            // Agrego los comprobantes asociados
            // ----------------------------------------------------------------
            $vta_facturas = $vta_nota_credito->getVtaFacturasXVtaFacturaVtaNotaCredito();
            foreach($vta_facturas as $vta_factura){
                $numero_comprobante = $vta_factura->getNumeroFactura();

                $vta_tipo_factura = $vta_factura->getVtaTipoFactura();
                $ws_fe_param_tipo_comprobante_asociado = $vta_tipo_factura->getWsFeParamTipoComprobanteXVtaTipoFacturaWsFeParamTipoComprobante();

                if($ws_fe_param_tipo_comprobante_asociado){
                    $ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante($ws_fe_param_tipo_comprobante_asociado->getCodigoAfip());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero($numero_comprobante);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(str_replace('-', '', $vta_factura->getCuit()));
                    $ws_fe_ope_solicitud_comprobante_asociado->save();
                }
            }

            $vta_nota_debitos = $vta_nota_credito->getVtaNotaDebitosXVtaNotaDebitoVtaNotaCredito();
            foreach($vta_nota_debitos as $vta_nota_debito){
                $numero_comprobante = $vta_nota_debito->getNumeroNotaDebito();

                $vta_tipo_nota_debito = $vta_nota_debito->getVtaTipoNotaDebito();
                $ws_fe_param_tipo_comprobante_asociado = $vta_tipo_nota_debito->getWsFeParamTipoComprobanteXVtaTipoNotaDebitoWsFeParamTipoComprobante();

                if($ws_fe_param_tipo_comprobante_asociado){
                    $ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante($ws_fe_param_tipo_comprobante_asociado->getCodigoAfip());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero($numero_comprobante);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(str_replace('-', '', $vta_nota_debito->getCuit()));
                    $ws_fe_ope_solicitud_comprobante_asociado->save();
                }
            }

            // Comprobantes opcionales: (No aplica, es segun el rubro)
            //$array_fe_comprobante_opcional['Id'] = ;		
            //$array_fe_comprobante_opcional['Valor'] = ;
            //$array_fe_comprobante_opcionals[] = $array_fe_comprobante_opcional;
            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            // neto gravado
            $importe_total_neto_gravado = round($vta_nota_credito->getVtaNotaCreditoSubtotal(VtaComprobante::TIPO_SUBTOTAL_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteNeto($importe_total_neto_gravado);

            // neto no gravado
            $importe_total_neto_no_gravado = round($vta_nota_credito->getVtaNotaCreditoSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotalConcepto($importe_total_neto_no_gravado);

            // neto exento
            $importe_total_neto_exento = round($vta_nota_credito->getVtaNotaCreditoSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteOperacionExenta($importe_total_neto_exento);

            // iva
            $importe_total_iva = round($importe_total_iva, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteIva($importe_total_iva);

            // tributos
            $importe_total_tributo = round($importe_total_tributo, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTributo($importe_total_tributo);

            // total de la factura. ImpNeto + ImpTotConc + ImpIVA + ImpTrib + ImpOpEx
            $importe_total = round($vta_nota_credito->getVtaNotaCreditoTotal(), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotal($importe_total);

            // ----------------------------------------------------------------

            $ws_fe_ope_solicitud->setGralEmpresaId($gral_empresa_id);
            $ws_fe_ope_solicitud->setWsFeParamPuntoVentaId($ws_fe_param_punto_venta_id);
            $ws_fe_ope_solicitud->setWsFeParamTipoComprobanteId($ws_fe_param_tipo_comprobante->getId());

            $ws_fe_ope_solicitud->setWsFeParamTipoConceptoId(1); // 1 Productos
            $ws_fe_ope_solicitud->setWsFeParamTipoDocumentoId(1); // 1 CUIT
            $ws_fe_ope_solicitud->setWsFeParamTipoMonedaId(1); // Pesos

            $ws_fe_ope_solicitud->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);

            $ws_fe_afip_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $ws_fe_ope_solicitud->setWsFeAfipTipoComprobante($ws_fe_afip_tipo_comprobante); // 1=Factura A, 6=Factura B

            $tipo_concepto = $ws_fe_param_tipo_concepto_id;
            $ws_fe_ope_solicitud->setWsFeAfipTipoConcepto($tipo_concepto); // 1 Productos, 2 Servicios o 3 Productos y Servicios

            $ws_fe_ope_solicitud->setWsFeAfipTipoDocumento($ws_fe_afip_tipo_documento); // 80=CUIT

            $ws_fe_afip_cantidad_registro = 1;
            $ws_fe_ope_solicitud->setWsFeAfipCantidadRegistro($ws_fe_afip_cantidad_registro);

            $ws_fe_ope_solicitud->setWsFeAfipNumeroDocumento($cli_cliente_cuit);

            $ws_fe_ope_solicitud->setWsFeAfipVencimientoPago(null); // solo concepto 2 o 3

            $ws_fe_afip_tipo_moneda = 'PES'; // Id de moneda 'PES'
            $ws_fe_ope_solicitud->setWsFeAfipTipoMoneda($ws_fe_afip_tipo_moneda);

            $ws_fe_afip_cotizacion_moneda = 1; // Cotizacion moneda. Solo exportacion
            $ws_fe_ope_solicitud->setWsFeAfipCotizacionMoneda($ws_fe_afip_cotizacion_moneda);

            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioDesde(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioHasta(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde(null); // nro de comprobante desde (para cuando es lote)
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta(null); // nro de comprobante hasta (para cuando es lote)

            $ws_fe_afip_comprobante_fecha = date('Ymd');
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteFecha($ws_fe_afip_comprobante_fecha); // fecha emision de factura

            $ws_fe_ope_solicitud->setDescripcion('');
            $ws_fe_ope_solicitud->setEstado(1);
            $ws_fe_ope_solicitud->setObservacion('');

            $ws_fe_ope_solicitud->save();

            // Genero la relacion con la factura 
            $vta_nota_credito_ws_fe_ope_solicitud = new VtaNotaCreditoWsFeOpeSolicitud();
            $vta_nota_credito_ws_fe_ope_solicitud->setEstado(1);
            $vta_nota_credito_ws_fe_ope_solicitud->setVtaNotaCreditoId($vta_nota_credito_id);
            $vta_nota_credito_ws_fe_ope_solicitud->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
            $vta_nota_credito_ws_fe_ope_solicitud->save();
        } else {
            $error['descripcion'] = "Error al obtener comprobante.";
            $errores[] = $error;
        }

        return $ws_fe_ope_solicitud;
    }

    static function setInicializarWsFeOpeSolicitudNotaCreditoItem($vta_nota_credito_id) {
        // ---------------------------------------------------------------------
        // Valores preconfigurados
        // ---------------------------------------------------------------------
        $ws_fe_afip_tipo_documento = 80;
        $ws_fe_param_tipo_concepto_id = 1; // Productos
        // ---------------------------------------------------------------------
        // Declaracion de variables
        // ---------------------------------------------------------------------
        $importe_total_neto_gravado = 0;
        $importe_total_neto_no_gravado = 0;
        $importe_total_neto_exento = 0;

        $importe_total_iva = 0;
        $importe_total_tributo = 0;
        $importe_total = 0;


        // ---------------------------------------------------------------------
        // Obtengo los datos
        // ---------------------------------------------------------------------
        $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

        $gral_empresa_id = $vta_nota_credito->getGralEmpresaId();

        $vta_punto_venta = $vta_nota_credito->getVtaPuntoventa();
        $ws_fe_param_punto_venta = $vta_punto_venta->getWsFeParamPuntoVentaXVtaPuntoVentaWsFeParamPuntoVenta();
        $ws_fe_param_punto_venta_id = $ws_fe_param_punto_venta->getId();
        $ws_fe_afip_punto_venta = $ws_fe_param_punto_venta->getNumero();

        $cli_cliente = $vta_nota_credito->getCliCliente();

        if ($cli_cliente->getId() != 'null') {
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $cli_cliente->getCuit());
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $vta_nota_credito->getPersonaDocumento());

            $gral_tipo_documento = $vta_nota_credito->getGralTipoDocumento();
            if ($gral_tipo_documento && $gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                if ($ws_fe_param_tipo_documento) {
                    $ws_fe_afip_tipo_documento = $ws_fe_param_tipo_documento->getCodigoAfip(); // valor dinamico
                }
            }
        } else {
            $cli_cliente_cuit = 11111111111;
        }

        if ($vta_nota_credito) {

            // -----------------------------------------------------------------
            // Genero el Objeto WsFeOpeSolicitud
            // -----------------------------------------------------------------
            $ws_fe_ope_solicitud = new WsFeOpeSolicitud();
            $ws_fe_ope_solicitud->save();

            // -----------------------------------------------------------------
            // Asigno el tipo de comprobante
            // -----------------------------------------------------------------
            $vta_tipo_nota_credito = $vta_nota_credito->getVtaTipoNotaCredito();
            $ws_fe_param_tipo_comprobante = $vta_tipo_nota_credito->getWsFeParamTipoComprobanteXVtaTipoNotaCreditoWsFeParamTipoComprobante();

            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            $arr_iva_para_afips = $vta_nota_credito->getArrIvaParaAfip();
            foreach ($arr_iva_para_afips as $array_fe_iva) {

                $ws_fe_ope_solicitud_iva = new WsFeOpeSolicitudIva();

                $ws_fe_ope_solicitud_iva->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_iva->setWsFeParamTipoIvaId($array_fe_iva['WS_FE_PARAM_TIPO_IVA_ID']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipCodigo($array_fe_iva['Id']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipBaseImponible($array_fe_iva['BaseImp']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipImporte($array_fe_iva['Importe']);

                $ws_fe_ope_solicitud_iva->save();

                $importe_total_iva += $array_fe_iva['Importe'];
            }

            //$arr_tributo_para_afips = $vta_nota_credito->getArrTributoParaAfipVtaNotaCreditoItems();
            $arr_tributo_para_afips = $vta_nota_credito->getArrTributoParaAfip();
            foreach ($arr_tributo_para_afips as $array_fe_tributo) {
                $ws_fe_ope_solicitud_tributo = new WsFeOpeSolicitudTributo();

                $ws_fe_ope_solicitud_tributo->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_tributo->setWsFeParamTipoTributoId($array_fe_tributo['WS_FE_PARAM_TIPO_TRIBUTO_ID']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipCodigo($array_fe_tributo['Id']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipDescripcion($array_fe_tributo['Desc']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipBaseImponible($array_fe_tributo['BaseImp']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipAlicuota($array_fe_tributo['Alic']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipImporte($array_fe_tributo['Importe']);

                $ws_fe_ope_solicitud_tributo->save();

                $importe_total_tributo += $array_fe_tributo['Importe'];
            }

            // ----------------------------------------------------------------
            // Agrego los comprobantes asociados
            // ----------------------------------------------------------------
            $vta_facturas = $vta_nota_credito->getVtaFacturasXVtaFacturaVtaNotaCredito();
            foreach($vta_facturas as $vta_factura){
                $numero_comprobante = $vta_factura->getNumeroFactura();

                $vta_tipo_factura = $vta_factura->getVtaTipoFactura();
                $ws_fe_param_tipo_comprobante_asociado = $vta_tipo_factura->getWsFeParamTipoComprobanteXVtaTipoFacturaWsFeParamTipoComprobante();

                if($ws_fe_param_tipo_comprobante_asociado){
                    $ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante($ws_fe_param_tipo_comprobante_asociado->getCodigoAfip());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero($numero_comprobante);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(str_replace('-', '', $vta_factura->getCuit()));
                    $ws_fe_ope_solicitud_comprobante_asociado->save();
                }
            }

            $vta_nota_debitos = $vta_nota_credito->getVtaNotaDebitosXVtaNotaDebitoVtaNotaCredito();
            foreach($vta_nota_debitos as $vta_nota_debito){
                $numero_comprobante = $vta_nota_debito->getNumeroNotaDebito();

                $vta_tipo_nota_debito = $vta_nota_debito->getVtaTipoNotaDebito();
                $ws_fe_param_tipo_comprobante_asociado = $vta_tipo_nota_debito->getWsFeParamTipoComprobanteXVtaTipoNotaDebitoWsFeParamTipoComprobante();

                if($ws_fe_param_tipo_comprobante_asociado){
                    $ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante($ws_fe_param_tipo_comprobante_asociado->getCodigoAfip());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero($numero_comprobante);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(str_replace('-', '', $vta_nota_debito->getCuit()));
                    $ws_fe_ope_solicitud_comprobante_asociado->save();
                }
            }

            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            // neto gravado
            $importe_total_neto_gravado = round($vta_nota_credito->getVtaNotaCreditoSubtotal(VtaComprobante::TIPO_SUBTOTAL_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteNeto($importe_total_neto_gravado);

            // neto no gravado
            $importe_total_neto_no_gravado = round($vta_nota_credito->getVtaNotaCreditoSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotalConcepto($importe_total_neto_no_gravado);

            // neto exento
            $importe_total_neto_exento = round($vta_nota_credito->getVtaNotaCreditoSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteOperacionExenta($importe_total_neto_exento);

            // iva
            $importe_total_iva = round($importe_total_iva, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteIva($importe_total_iva);

            // tributos
            $importe_total_tributo = round($importe_total_tributo, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTributo($importe_total_tributo);

            // total de la nota de credito. ImpNeto + ImpTotConc + ImpIVA + ImpTrib + ImpOpEx
            $importe_total = round($vta_nota_credito->getVtaNotaCreditoTotal(), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotal($importe_total);


            // ----------------------------------------------------------------

            $ws_fe_ope_solicitud->setGralEmpresaId($gral_empresa_id);
            $ws_fe_ope_solicitud->setWsFeParamPuntoVentaId($ws_fe_param_punto_venta_id);
            $ws_fe_ope_solicitud->setWsFeParamTipoComprobanteId($ws_fe_param_tipo_comprobante->getId());

            $ws_fe_ope_solicitud->setWsFeParamTipoConceptoId(1); // 1 Productos
            $ws_fe_ope_solicitud->setWsFeParamTipoDocumentoId(1); // 1 CUIT
            $ws_fe_ope_solicitud->setWsFeParamTipoMonedaId(1); // Pesos

            $ws_fe_ope_solicitud->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);

            $ws_fe_afip_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $ws_fe_ope_solicitud->setWsFeAfipTipoComprobante($ws_fe_afip_tipo_comprobante); // 1=Factura A, 6=Factura B

            $tipo_concepto = $ws_fe_param_tipo_concepto_id;
            $ws_fe_ope_solicitud->setWsFeAfipTipoConcepto($tipo_concepto); // 1 Productos, 2 Servicios o 3 Productos y Servicios

            $ws_fe_ope_solicitud->setWsFeAfipTipoDocumento($ws_fe_afip_tipo_documento); // 80=CUIT

            $ws_fe_afip_cantidad_registro = 1;
            $ws_fe_ope_solicitud->setWsFeAfipCantidadRegistro($ws_fe_afip_cantidad_registro);

            $ws_fe_ope_solicitud->setWsFeAfipNumeroDocumento($cli_cliente_cuit);

            $ws_fe_ope_solicitud->setWsFeAfipVencimientoPago(null); // solo concepto 2 o 3

            $ws_fe_afip_tipo_moneda = 'PES'; // Id de moneda 'PES'
            $ws_fe_ope_solicitud->setWsFeAfipTipoMoneda($ws_fe_afip_tipo_moneda);

            $ws_fe_afip_cotizacion_moneda = 1; // Cotizacion moneda. Solo exportacion
            $ws_fe_ope_solicitud->setWsFeAfipCotizacionMoneda($ws_fe_afip_cotizacion_moneda);

            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioDesde(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioHasta(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde(null); // nro de comprobante desde (para cuando es lote)
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta(null); // nro de comprobante hasta (para cuando es lote)

            $ws_fe_afip_comprobante_fecha = date('Ymd');
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteFecha($ws_fe_afip_comprobante_fecha); // fecha emision de factura

            $ws_fe_ope_solicitud->setDescripcion('');
            $ws_fe_ope_solicitud->setEstado(1);
            $ws_fe_ope_solicitud->setObservacion('');

            $ws_fe_ope_solicitud->save();

            // Genero la relacion con la factura 
            $vta_nota_credito_ws_fe_ope_solicitud = new VtaNotaCreditoWsFeOpeSolicitud();
            $vta_nota_credito_ws_fe_ope_solicitud->setEstado(1);
            $vta_nota_credito_ws_fe_ope_solicitud->setVtaNotaCreditoId($vta_nota_credito_id);
            $vta_nota_credito_ws_fe_ope_solicitud->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
            $vta_nota_credito_ws_fe_ope_solicitud->save();
        } else {
            $error['descripcion'] = "Error al obtener comprobante.";
            $errores[] = $error;
        }

        return $ws_fe_ope_solicitud;
    }

    static function setInicializarWsFeOpeSolicitudNotaDebitoItem($vta_nota_debito_id) {
        // ---------------------------------------------------------------------
        // Valores preconfigurados
        // ---------------------------------------------------------------------
        $ws_fe_afip_tipo_documento = 80;
        $ws_fe_param_tipo_concepto_id = 1; // Productos
        // ---------------------------------------------------------------------
        // Declaracion de variables
        // ---------------------------------------------------------------------
        $importe_total_neto_gravado = 0;
        $importe_total_neto_no_gravado = 0;
        $importe_total_neto_exento = 0;

        $importe_total_iva = 0;
        $importe_total_tributo = 0;
        $importe_total = 0;


        // ---------------------------------------------------------------------
        // Obtengo los datos
        // ---------------------------------------------------------------------
        $vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);

        $cli_cliente = $vta_nota_debito->getCliCliente();

        $gral_empresa_id = $vta_nota_debito->getGralEmpresaId();

        $vta_punto_venta = $vta_nota_debito->getVtaPuntoventa();
        $ws_fe_param_punto_venta = $vta_punto_venta->getWsFeParamPuntoVentaXVtaPuntoVentaWsFeParamPuntoVenta();
        $ws_fe_param_punto_venta_id = $ws_fe_param_punto_venta->getId();
        $ws_fe_afip_punto_venta = $ws_fe_param_punto_venta->getNumero();

        if ($cli_cliente->getId() != 'null') {
            $cli_cliente_cuit = preg_replace('([^0-9])', '', $cli_cliente->getCuit());
        } else {
            $cli_cliente_cuit = 11111111111;
        }

        if ($vta_nota_debito) {

            // -----------------------------------------------------------------
            // Genero el Objeto WsFeOpeSolicitud
            // -----------------------------------------------------------------
            $ws_fe_ope_solicitud = new WsFeOpeSolicitud();
            $ws_fe_ope_solicitud->save();

            // -----------------------------------------------------------------
            // Asigno el tipo de comprobante
            // -----------------------------------------------------------------
            $vta_tipo_nota_debito = $vta_nota_debito->getVtaTipoNotaDebito();
            $ws_fe_param_tipo_comprobante = $vta_tipo_nota_debito->getWsFeParamTipoComprobanteXVtaTipoNotaDebitoWsFeParamTipoComprobante();

            // -----------------------------------------------------------------
            // Genero el Objeto WsFeOpeSolicitud
            // -----------------------------------------------------------------
            $ws_fe_ope_solicitud = new WsFeOpeSolicitud();
            $ws_fe_ope_solicitud->save();


            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            $arr_iva_para_afips = $vta_nota_debito->getArrIvaParaAfip();
            foreach ($arr_iva_para_afips as $array_fe_iva) {

                $ws_fe_ope_solicitud_iva = new WsFeOpeSolicitudIva();

                $ws_fe_ope_solicitud_iva->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_iva->setWsFeParamTipoIvaId($array_fe_iva['WS_FE_PARAM_TIPO_IVA_ID']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipCodigo($array_fe_iva['Id']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipBaseImponible($array_fe_iva['BaseImp']);
                $ws_fe_ope_solicitud_iva->setWsFeAfipImporte($array_fe_iva['Importe']);

                $ws_fe_ope_solicitud_iva->save();

                $importe_total_iva += $array_fe_iva['Importe'];
            }

            $arr_tributo_para_afips = $vta_nota_debito->getArrTributoParaAfip();
            foreach ($arr_tributo_para_afips as $array_fe_tributo) {
                $ws_fe_ope_solicitud_tributo = new WsFeOpeSolicitudTributo();

                $ws_fe_ope_solicitud_tributo->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                $ws_fe_ope_solicitud_tributo->setWsFeParamTipoTributoId($array_fe_tributo['WS_FE_PARAM_TIPO_TRIBUTO_ID']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipCodigo($array_fe_tributo['Id']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipDescripcion($array_fe_tributo['Desc']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipBaseImponible($array_fe_tributo['BaseImp']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipAlicuota($array_fe_tributo['Alic']);
                $ws_fe_ope_solicitud_tributo->setWsFeAfipImporte($array_fe_tributo['Importe']);

                $ws_fe_ope_solicitud_tributo->save();

                $importe_total_tributo += $array_fe_tributo['Importe'];
            }

            // ----------------------------------------------------------------
            // Agrego los comprobantes asociados (NC)
            // ----------------------------------------------------------------
            $vta_nota_creditos = $vta_nota_debito->getVtaNotaCreditosXVtaNotaDebitoVtaNotaCredito();
            foreach($vta_nota_creditos as $vta_nota_credito){
                $numero_comprobante = $vta_nota_credito->getNumeroNotaCredito();

                $vta_tipo_nota_credito = $vta_nota_credito->getVtaTipoNotaCredito();
                $ws_fe_param_tipo_comprobante_asociado = $vta_tipo_nota_credito->getWsFeParamTipoComprobanteXVtaTipoNotaCreditoWsFeParamTipoComprobante();

                if($ws_fe_param_tipo_comprobante_asociado){
                    $ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante($ws_fe_param_tipo_comprobante_asociado->getCodigoAfip());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero($numero_comprobante);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(str_replace('-', '', $vta_nota_credito->getCuit()));
                    $ws_fe_ope_solicitud_comprobante_asociado->save();
                }
            }

            // ----------------------------------------------------------------
            // Agrego los comprobantes asociados (Facturas)
            // ----------------------------------------------------------------
            $vta_facturas = $vta_nota_debito->getVtaFacturasXVtaFacturaVtaNotaDebito();
            foreach($vta_facturas as $vta_factura){
                $numero_comprobante = $vta_factura->getNumeroFactura();

                $vta_tipo_factura = $vta_factura->getVtaTipoFactura();
                $ws_fe_param_tipo_comprobante_asociado = $vta_tipo_factura->getWsFeParamTipoComprobanteXVtaTipoFacturaWsFeParamTipoComprobante();

                if($ws_fe_param_tipo_comprobante_asociado){
                    $ws_fe_ope_solicitud_comprobante_asociado = new WsFeOpeSolicitudComprobanteAsociado();
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipTipoComprobante($ws_fe_param_tipo_comprobante_asociado->getCodigoAfip());
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipNumero($numero_comprobante);
                    $ws_fe_ope_solicitud_comprobante_asociado->setWsFeAfipCuit(str_replace('-', '', $vta_factura->getCuit()));
                    $ws_fe_ope_solicitud_comprobante_asociado->save();
                }
            }
            
            // ----------------------------------------------------------------
            // Valores calculados
            // ----------------------------------------------------------------
            // neto gravado
            $importe_total_neto_gravado = round($vta_nota_debito->getVtaNotaDebitoSubtotal(VtaComprobante::TIPO_SUBTOTAL_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteNeto($importe_total_neto_gravado);

            // neto no gravado
            $importe_total_neto_no_gravado = round($vta_nota_debito->getVtaNotaDebitoSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotalConcepto($importe_total_neto_no_gravado);

            // neto exento
            $importe_total_neto_exento = round($vta_nota_debito->getVtaNotaDebitoSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteOperacionExenta($importe_total_neto_exento);

            // iva
            $importe_total_iva = round($importe_total_iva, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteIva($importe_total_iva);

            // tributos
            $importe_total_tributo = round($importe_total_tributo, 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTributo($importe_total_tributo);

            // total de la nota de debito. ImpNeto + ImpTotConc + ImpIVA + ImpTrib + ImpOpEx
            $importe_total = round($vta_nota_debito->getVtaNotaDebitoTotal(), 2);
            $ws_fe_ope_solicitud->setWsFeAfipImporteTotal($importe_total);


            // ----------------------------------------------------------------

            $ws_fe_ope_solicitud->setGralEmpresaId($gral_empresa_id);
            $ws_fe_ope_solicitud->setWsFeParamPuntoVentaId($ws_fe_param_punto_venta_id);
            $ws_fe_ope_solicitud->setWsFeParamTipoComprobanteId($ws_fe_param_tipo_comprobante->getId());

            $ws_fe_ope_solicitud->setWsFeParamTipoConceptoId(1); // 1 Productos
            $ws_fe_ope_solicitud->setWsFeParamTipoDocumentoId(1); // 1 CUIT
            $ws_fe_ope_solicitud->setWsFeParamTipoMonedaId(1); // Pesos

            $ws_fe_ope_solicitud->setWsFeAfipPuntoVenta($ws_fe_afip_punto_venta);

            $ws_fe_afip_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $ws_fe_ope_solicitud->setWsFeAfipTipoComprobante($ws_fe_afip_tipo_comprobante); // 1=Factura A, 6=Factura B

            $tipo_concepto = $ws_fe_param_tipo_concepto_id;
            $ws_fe_ope_solicitud->setWsFeAfipTipoConcepto($tipo_concepto); // 1 Productos, 2 Servicios o 3 Productos y Servicios

            $ws_fe_ope_solicitud->setWsFeAfipTipoDocumento($ws_fe_afip_tipo_documento); // 80=CUIT

            $ws_fe_afip_cantidad_registro = 1;
            $ws_fe_ope_solicitud->setWsFeAfipCantidadRegistro($ws_fe_afip_cantidad_registro);

            $ws_fe_ope_solicitud->setWsFeAfipNumeroDocumento($cli_cliente_cuit);

            $ws_fe_ope_solicitud->setWsFeAfipVencimientoPago(null); // solo concepto 2 o 3

            $ws_fe_afip_tipo_moneda = 'PES'; // Id de moneda 'PES'
            $ws_fe_ope_solicitud->setWsFeAfipTipoMoneda($ws_fe_afip_tipo_moneda);

            $ws_fe_afip_cotizacion_moneda = 1; // Cotizacion moneda. Solo exportacion
            $ws_fe_ope_solicitud->setWsFeAfipCotizacionMoneda($ws_fe_afip_cotizacion_moneda);

            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioDesde(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipFechaServicioHasta(null); // solo concepto 2 o 3
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde(null); // nro de comprobante desde (para cuando es lote)
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta(null); // nro de comprobante hasta (para cuando es lote)

            $ws_fe_afip_comprobante_fecha = date('Ymd');
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteFecha($ws_fe_afip_comprobante_fecha); // fecha emision de factura

            $ws_fe_ope_solicitud->setDescripcion('');
            $ws_fe_ope_solicitud->setEstado(1);
            $ws_fe_ope_solicitud->setObservacion('');

            $ws_fe_ope_solicitud->save();

            // Genero la relacion con la ND 
            $vta_nota_debito_ws_fe_ope_solicitud = new VtaNotaDebitoWsFeOpeSolicitud();
            $vta_nota_debito_ws_fe_ope_solicitud->setEstado(1);
            $vta_nota_debito_ws_fe_ope_solicitud->setVtaNotaDebitoId($vta_nota_debito_id);
            $vta_nota_debito_ws_fe_ope_solicitud->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
            $vta_nota_debito_ws_fe_ope_solicitud->save();
        } else {
            $error['descripcion'] = "Error al obtener comprobante.";
            $errores[] = $error;
        }

        return $ws_fe_ope_solicitud;
    }

    public function setEnviarWsFeOpeSolicitud() {
        $ws_afip_respuesta = WsAfip::setGenerarFacturaOnline($this);
        $ws_fe_ope_solicitud_respuesta = $this->setWsFeOpeSolicitudRegistarRespuesta($ws_afip_respuesta);

        return $ws_fe_ope_solicitud_respuesta;
    }

    public function setWsFeOpeSolicitudRegistarRespuesta($ws_afip_respuestas) {
        $ws_afip_respuesta = $ws_afip_respuestas[0];

        // Cabecera de la respuesta
        $fe_cab_resp_cuit = $ws_afip_respuesta->FeCabResp->Cuit;
        $fe_cab_resp_punto_venta = $ws_afip_respuesta->FeCabResp->PtoVta;
        $fe_cab_resp_tipo_comprobante = $ws_afip_respuesta->FeCabResp->CbteTipo;
        $fe_cab_resp_fecha_proceso = $ws_afip_respuesta->FeCabResp->FchProceso;
        $fe_cab_resp_cantidad_registro = $ws_afip_respuesta->FeCabResp->CantReg;
        $fe_cab_resp_resultado = $ws_afip_respuesta->FeCabResp->Resultado;
        $fe_cab_resp_reproceso = $ws_afip_respuesta->FeCabResp->Reproceso;

        // Detalle de la respuesta
        $fe_det_resp_concepto = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->Concepto;
        $fe_det_resp_tipo_documento = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->DocTipo;
        $fe_det_resp_numero_documento = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->DocNro;
        $fe_det_resp_comprobante_desde = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->CbteDesde;
        $fe_det_resp_comprobante_hasta = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->CbteHasta;
        $fe_det_resp_comprobante_fecha = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->CbteFch;
        $fe_det_resp_resultado = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->Resultado;
        $fe_det_resp_cae = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->CAE;
        $fe_det_resp_cae_fecha_vencimiento = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->CAEFchVto;

        $fe_det_resp_observacions = $ws_afip_respuesta->FeDetResp->FECAEDetResponse->Observaciones;
        $fe_errors = $ws_afip_respuesta->Errors;

        $ws_fe_ope_solicitud_respuesta = new WsFeOpeSolicitudRespuesta();

        $afip_observado = false;
        $afip_observaciones_rechazo = '';

        // ---------------------------------------------------------------------
        // Seteo la cabecera
        // ---------------------------------------------------------------------
        $ws_fe_ope_solicitud_respuesta->setWsFeOpeSolicitudId($this->getId());
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipCuit($fe_cab_resp_cuit);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipPuntoVenta($fe_cab_resp_punto_venta);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoComprobante($fe_cab_resp_tipo_comprobante);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipFechaProceso($fe_cab_resp_fecha_proceso);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipCantidadRegistro($fe_cab_resp_cantidad_registro);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoCabecera($fe_cab_resp_resultado);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipReproceso($fe_cab_resp_reproceso);

        // ---------------------------------------------------------------------
        // Seteo el detalle
        // ---------------------------------------------------------------------
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoConcepto($fe_det_resp_concepto);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoDocumento($fe_det_resp_tipo_documento);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipNumeroDocumento($fe_det_resp_numero_documento);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteDesde($fe_det_resp_comprobante_desde);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteHasta($fe_det_resp_comprobante_hasta);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteFecha($fe_det_resp_comprobante_fecha);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoDetalle($fe_det_resp_resultado);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipCae($fe_det_resp_cae);
        $ws_fe_ope_solicitud_respuesta->setWsFeAfipCaeFechaVencimiento($fe_det_resp_cae_fecha_vencimiento);

        $ws_fe_ope_solicitud_respuesta_observacion = print_r($ws_afip_respuesta, true);
        $ws_fe_ope_solicitud_respuesta_observacion = str_replace("'", '', $ws_fe_ope_solicitud_respuesta_observacion);

        $ws_fe_ope_solicitud_respuesta->setObservacion($ws_fe_ope_solicitud_respuesta_observacion);
        $ws_fe_ope_solicitud_respuesta->setEstado(1);
        $ws_fe_ope_solicitud_respuesta->save();

        foreach ($fe_det_resp_observacions as $fe_det_resp_observacion) {

            if (is_array($fe_det_resp_observacion)) {
                foreach ($fe_det_resp_observacion as $fe_det_resp_observacion_uno) {
                    $fe_det_resp_observacion_msg = 'OBS: ' . str_replace("'", '"', $fe_det_resp_observacion_uno->Msg);

                    $ws_fe_ope_solicitud_respuesta_observacion = new WsFeOpeSolicitudRespuestaObservacion();

                    $ws_fe_ope_solicitud_respuesta_observacion->setWsFeOpeSolicitudRespuestaId($ws_fe_ope_solicitud_respuesta->getId());
                    $ws_fe_ope_solicitud_respuesta_observacion->setWsFeAfipCodigo($fe_det_resp_observacion_uno->Code);
                    $ws_fe_ope_solicitud_respuesta_observacion->setWsFeAfipMensaje($fe_det_resp_observacion_msg);
                    $ws_fe_ope_solicitud_respuesta_observacion->setCodigo('OBSERVACION_ARR');
                    $ws_fe_ope_solicitud_respuesta_observacion->save();

                    $afip_observaciones_rechazo .= 'OBS: ' . $fe_det_resp_observacion_uno->Code . ' - ' . $fe_det_resp_observacion_msg . PHP_EOL;
                }
            } else {
                $fe_det_resp_observacion_msg = 'OBS: ' . str_replace("'", '"', $fe_det_resp_observacion->Msg);

                $ws_fe_ope_solicitud_respuesta_observacion = new WsFeOpeSolicitudRespuestaObservacion();

                $ws_fe_ope_solicitud_respuesta_observacion->setWsFeOpeSolicitudRespuestaId($ws_fe_ope_solicitud_respuesta->getId());
                $ws_fe_ope_solicitud_respuesta_observacion->setWsFeAfipCodigo($fe_det_resp_observacion->Code);
                $ws_fe_ope_solicitud_respuesta_observacion->setWsFeAfipMensaje($fe_det_resp_observacion_msg);
                $ws_fe_ope_solicitud_respuesta_observacion->setCodigo('OBSERVACION');
                $ws_fe_ope_solicitud_respuesta_observacion->save();

                $afip_observaciones_rechazo .= 'OBS: ' . $fe_det_resp_observacion->Code . ' - ' . $fe_det_resp_observacion_msg . PHP_EOL;
            }

            $afip_observado = true;
        }

        foreach ($fe_errors as $fe_error) {
            $fe_error_msg = 'ERROR: ' . str_replace("'", '"', $fe_error->Msg);

            $ws_fe_ope_solicitud_respuesta_observacion = new WsFeOpeSolicitudRespuestaObservacion();

            $ws_fe_ope_solicitud_respuesta_observacion->setWsFeOpeSolicitudRespuestaId($ws_fe_ope_solicitud_respuesta->getId());
            $ws_fe_ope_solicitud_respuesta_observacion->setWsFeAfipCodigo($fe_error->Code);
            $ws_fe_ope_solicitud_respuesta_observacion->setWsFeAfipMensaje($fe_error_msg);
            $ws_fe_ope_solicitud_respuesta_observacion->setCodigo('ERROR');
            $ws_fe_ope_solicitud_respuesta_observacion->save();

            $afip_observaciones_rechazo .= 'ERROR: ' . $fe_error->Code . ' - ' . $fe_error_msg . PHP_EOL;
            $afip_observado = true;
        }

        // ---------------------------------------------------------------------
        // Guardo el numero de Factura y el CAE
        // ---------------------------------------------------------------------
        $vta_factura_ws_fe_ope_solicitud = $this->getVtaFacturaWsFeOpeSolicitud();
        if ($vta_factura_ws_fe_ope_solicitud) {
            $vta_factura = $vta_factura_ws_fe_ope_solicitud->getVtaFactura();
            $vta_factura->setNumeroFactura($fe_det_resp_comprobante_desde);
            $vta_factura->setNumeroFacturaCompleto($vta_factura->getNumeroFacturaCompletoFormateado());
            $vta_factura->setCae($fe_det_resp_cae);
            $vta_factura->save();

            // -----------------------------------------------------------------
            $vta_factura_tipo_estado_persistente = false;
            $vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
            if ($vta_factura_tipo_estado && $vta_factura_tipo_estado->getAprobadoAfip()) {
                $vta_factura_tipo_estado_persistente = $vta_factura_tipo_estado;
            }
            // -----------------------------------------------------------------

            if ($afip_observado) {
                // se agrega estado de OBSERVADO
                $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_OBSERVADO_AFIP, $observacion = $afip_observaciones_rechazo);
            }

            switch ($fe_cab_resp_resultado) {
                case "A": // solicitud APROBADA
                    $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Generado Correctamente');
                    $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE, $observacion = '');
                    break;
                case "R": // solicitud RECHAZADO
                    $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_RECHAZADO_AFIP, $observacion = 'Rechazado');
                    break;
                case "P": // solicitud PARCIAL
                    break;
            }

            // -----------------------------------------------------------------
            if ($vta_factura_tipo_estado_persistente) {
                // se mantiene estado anterior, CAE solicitado a destiempo
                $vta_factura_estado = $vta_factura->setVtaFacturaEstado($vta_factura_tipo_estado_persistente->getCodigo(), $observacion = 'Se mantiene ' . $vta_factura_tipo_estado_persistente->getDescripcion() . ' por generacion de CAE a destiempo.');
            }
            // -----------------------------------------------------------------
        }

        // ---------------------------------------------------------------------
        // Guardo el numero de NC y el CAE
        // ---------------------------------------------------------------------
        $vta_nota_credito_ws_fe_ope_solicitud = $this->getVtaNotaCreditoWsFeOpeSolicitud();
        if ($vta_nota_credito_ws_fe_ope_solicitud) {
            $vta_nota_credito = $vta_nota_credito_ws_fe_ope_solicitud->getVtaNotaCredito();
            $vta_nota_credito->setNumeroNotaCredito($fe_det_resp_comprobante_desde);
            $vta_nota_credito->setNumeroNotaCreditoCompleto($vta_nota_credito->getNumeroNotaCreditoCompletoFormateado());
            $vta_nota_credito->setCae($fe_det_resp_cae);
            $vta_nota_credito->save();

            // -----------------------------------------------------------------
            $vta_nota_credito_tipo_estado_persistente = false;
            $vta_nota_credito_tipo_estado = $vta_nota_credito->getVtaNotaCreditoTipoEstado();
            if ($vta_nota_credito_tipo_estado && $vta_nota_credito_tipo_estado->getAprobadoAfip()) {
                $vta_nota_credito_tipo_estado_persistente = $vta_nota_credito_tipo_estado;
            }
            // -----------------------------------------------------------------

            if ($afip_observado) {
                // se agrega estado de OBSERVADO
                $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_OBSERVADO_AFIP, $observacion = $afip_observaciones_rechazo);
            }

            switch ($fe_cab_resp_resultado) {
                case "A": // solicitud APROBADA
                    $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Generado Correctamente');
                    $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, $observacion = '');
                    break;
                case "R": // solicitud RECHAZADO
                    $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_RECHAZADO_AFIP, $observacion = 'Rechazado');
                    break;
                case "P": // solicitud PARCIAL
                    break;
            }

            // -----------------------------------------------------------------
            if ($vta_nota_credito_tipo_estado_persistente) {
                // se mantiene estado anterior, CAE solicitado a destiempo
                $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado($vta_nota_credito_tipo_estado_persistente->getCodigo(), $observacion = 'Se mantiene ' . $vta_nota_credito_tipo_estado_persistente->getDescripcion() . ' por generacion de CAE a destiempo.');
            }
            // -----------------------------------------------------------------
        }

        // ---------------------------------------------------------------------
        // Guardo el numero de NC y el CAE
        // ---------------------------------------------------------------------
        $vta_nota_debito_ws_fe_ope_solicitud = $this->getVtaNotaDebitoWsFeOpeSolicitud();
        if ($vta_nota_debito_ws_fe_ope_solicitud) {
            $vta_nota_debito = $vta_nota_debito_ws_fe_ope_solicitud->getVtaNotaDebito();
            $vta_nota_debito->setNumeroNotaDebito($fe_det_resp_comprobante_desde);
            $vta_nota_debito->setNumeroNotaDebitoCompleto($vta_nota_debito->getNumeroNotaDebitoCompletoFormateado());
            $vta_nota_debito->setCae($fe_det_resp_cae);
            $vta_nota_debito->save();

            // -----------------------------------------------------------------
            $vta_nota_debito_tipo_estado_persistente = false;
            $vta_nota_debito_tipo_estado = $vta_nota_debito->getVtaNotaDebitoTipoEstado();
            if ($vta_nota_debito_tipo_estado && $vta_nota_debito_tipo_estado->getAprobadoAfip()) {
                $vta_nota_debito_tipo_estado_persistente = $vta_nota_debito_tipo_estado;
            }
            // -----------------------------------------------------------------

            if ($afip_observado) {
                // se agrega estado de OBSERVADO
                $vta_nota_debito_estado = $vta_nota_debito->setVtaNotaDebitoEstado(VtaNotaDebitoTipoEstado::TIPO_OBSERVADO_AFIP, $observacion = $afip_observaciones_rechazo);
            }

            switch ($fe_cab_resp_resultado) {
                case "A": // solicitud APROBADA
                    $vta_nota_debito_estado = $vta_nota_debito->setVtaNotaDebitoEstado(VtaNotaDebitoTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Generado Correctamente');
                    $vta_nota_debito_estado = $vta_nota_debito->setVtaNotaDebitoEstado(VtaNotaDebitoTipoEstado::TIPO_PENDIENTE, $observacion = '');
                    break;
                case "R": // solicitud RECHAZADO
                    $vta_nota_debito_estado = $vta_nota_debito->setVtaNotaDebitoEstado(VtaNotaDebitoTipoEstado::TIPO_RECHAZADO_AFIP, $observacion = 'Rechazado');
                    break;
                case "P": // solicitud PARCIAL
                    break;
            }

            // -----------------------------------------------------------------
            if ($vta_nota_debito_tipo_estado_persistente) {
                // se mantiene estado anterior, CAE solicitado a destiempo
                $vta_nota_debito_estado = $vta_nota_debito->setVtaNotaDebitoEstado($vta_nota_debito_tipo_estado_persistente->getCodigo(), $observacion = 'Se mantiene ' . $vta_nota_debito_tipo_estado_persistente->getDescripcion() . ' por generacion de CAE a destiempo.');
            }
            // -----------------------------------------------------------------
        }

        // ---------------------------------------------------------------------
        // Guardo el numero de Recibo y el CAE
        // ---------------------------------------------------------------------
        $vta_recibo_ws_fe_ope_solicitud = $this->getVtaReciboWsFeOpeSolicitud();
        if ($vta_recibo_ws_fe_ope_solicitud) {
            $vta_recibo = $vta_recibo_ws_fe_ope_solicitud->getVtaRecibo();
            $vta_recibo->setNumeroRecibo($fe_det_resp_comprobante_desde);
            $vta_recibo->setNumeroReciboCompleto($vta_recibo->getNumeroReciboCompletoFormateado());
            $vta_recibo->setCae($fe_det_resp_cae);
            $vta_recibo->save();

            if ($afip_observado) {
                // se agrega estado de OBSERVADO
                $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_OBSERVADO_AFIP, $observacion = $afip_observaciones_rechazo);
            }

            switch ($fe_cab_resp_resultado) {
                case "A": // solicitud APROBADA
                    $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Generado Correctamente');
                    $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_PENDIENTE, $observacion = '');
                    break;
                case "R": // solicitud RECHAZADO
                    $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_RECHAZADO_AFIP, $observacion = 'Rechazado');
                    break;
                case "P": // solicitud PARCIAL
                    break;
            }
        }

        return $ws_fe_ope_solicitud_respuesta;
    }

    public function getFechaDesdeAfip($fecha) {
        $fecha = trim($fecha);

        /* Se retorna vacio si es vacio */
        if ($fecha == "")
            return "";

        $ano = substr($fecha, 0, 4);
        $mes = substr($fecha, 4, 2);
        $dia = substr($fecha, 6, 2);

        $hora = substr($fecha, 8, 2);
        $min = substr($fecha, 10, 2);
        $seg = substr($fecha, 12, 2);

        return $ano . "-" . $mes . "-" . $dia . " " . $hora . ":" . $min . ":" . $seg;
    }

}

?>