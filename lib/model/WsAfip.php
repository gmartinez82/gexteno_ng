<?php

require_once Gral::getPathAbs() . "comps/afip/BWsAfip.php";

class WsAfip extends BWsAfip {

    /**
     * Faltan los arrays $array_fe_comprobante_asociado, $array_fe_opcional
     */
    static function setGenerarFacturaOnline($ws_fe_ope_solicitud) {

        $gral_empresa = GralEmpresa::getOxId($ws_fe_ope_solicitud->getGralEmpresaId());
        $ws_fe_afip_punto_venta = $ws_fe_ope_solicitud->getWsFeAfipPuntoVenta(); // Hasta que solocione el pto vta
        $ws_fe_afip_tipo_comprobante = $ws_fe_ope_solicitud->getWsFeAfipTipoComprobante();

        // ---------------------------------------------------------------------
        // Cargo al array de iva
        // ---------------------------------------------------------------------
        $ws_fe_ope_solicitud_ivas = $ws_fe_ope_solicitud->getWsFeOpeSolicitudIvas();

        foreach ($ws_fe_ope_solicitud_ivas as $ws_fe_ope_solicitud_iva) {
            $array_fe_iva['Id'] = $ws_fe_ope_solicitud_iva->getWsFeAfipCodigo();
            $array_fe_iva['BaseImp'] = $ws_fe_ope_solicitud_iva->getWsFeAfipBaseImponible();
            $array_fe_iva['Importe'] = $ws_fe_ope_solicitud_iva->getWsFeAfipImporte();
            $array_fe_ivas['AlicIva'][] = $array_fe_iva;
        }

        // ---------------------------------------------------------------------
        // Cargo al array de Tributos
        // ---------------------------------------------------------------------
        $ws_fe_ope_solicitud_tributos = $ws_fe_ope_solicitud->getWsFeOpeSolicitudTributos();

        foreach ($ws_fe_ope_solicitud_tributos as $ws_fe_ope_solicitud_tributo) {
            $array_fe_tributo['Id'] = $ws_fe_ope_solicitud_tributo->getWsFeAfipCodigo();
            $array_fe_tributo['Desc'] = $ws_fe_ope_solicitud_tributo->getWsFeAfipDescripcion();
            $array_fe_tributo['BaseImp'] = $ws_fe_ope_solicitud_tributo->getWsFeAfipBaseImponible();
            $array_fe_tributo['Alic'] = $ws_fe_ope_solicitud_tributo->getWsFeAfipAlicuota();
            $array_fe_tributo['Importe'] = $ws_fe_ope_solicitud_tributo->getWsFeAfipImporte();
            $array_fe_tributos['Tributo'][] = $array_fe_tributo;
        }

        // ---------------------------------------------------------------------
        // Cargo al array de Comprobantes asociados (solo notas de crédito y débito)
        // ---------------------------------------------------------------------
        $ws_fe_ope_solicitud_comprobante_asociados = $ws_fe_ope_solicitud->getWsFeOpeSolicitudComprobanteAsociados();

        foreach ($ws_fe_ope_solicitud_comprobante_asociados as $ws_fe_ope_solicitud_comprobante_asociado) {

            $array_fe_comprobante_asociado['Tipo'] = $ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipTipoComprobante();
            $array_fe_comprobante_asociado['PtoVta'] = $ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipPuntoVenta();
            $array_fe_comprobante_asociado['Nro'] = $ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipNumero();
            $array_fe_comprobante_asociado['Cuit'] = $ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipCuit();
            $array_fe_comprobante_asociados['CbteAsoc'][] = $array_fe_comprobante_asociado;
        }

        // Comprobantes opcionales: (No aplica es segun el rubro)
        //$array_fe_comprobante_opcional['Id'] = ;		
        //$array_fe_comprobante_opcional['Valor'] = ;
        //$array_fe_comprobante_opcionals[] = $array_fe_comprobante_opcional;
        // ---------------------------------------------------------------------
        // Cargo los valores en la cabecera de la factura
        // ---------------------------------------------------------------------
        $array_fe['CbteTipo'] = $ws_fe_afip_tipo_comprobante; // 1=Factura A, 6=Factura B
        $array_fe['Concepto'] = $ws_fe_ope_solicitud->getWsFeAfipTipoConcepto(); // 1 Productos, 2 Servicios o 3 Productos y Servicios
        $array_fe['DocTipo'] = $ws_fe_ope_solicitud->getWsFeAfipTipoDocumento(); // 80=CUIT
        $array_fe['DocNro'] = $ws_fe_ope_solicitud->getWsFeAfipNumeroDocumento();
        $array_fe['CbteFch'] = $ws_fe_ope_solicitud->getWsFeAfipComprobanteFecha();  // fecha emision de factura
        $array_fe['ImpNeto'] = $ws_fe_ope_solicitud->getWsFeAfipImporteNeto();   // Neto gravado
        $array_fe['ImpTotConc'] = $ws_fe_ope_solicitud->getWsFeAfipImporteTotalConcepto();   // No gravado
        $array_fe['ImpIVA'] = $ws_fe_ope_solicitud->getWsFeAfipImporteIva();   // IVA liquidado
        $array_fe['ImpTrib'] = $ws_fe_ope_solicitud->getWsFeAfipImporteTributo();   // Otros tributos
        $array_fe['ImpOpEx'] = $ws_fe_ope_solicitud->getWsFeAfipImporteOperacionExenta();   // Operacion Exentas
        $array_fe['ImpTotal'] = $ws_fe_ope_solicitud->getWsFeAfipImporteTotal();   // Total de la factura. ImpNeto + ImpTotConc + ImpIVA + ImpTrib + ImpOpEx
        $array_fe['FchServDesde'] = $ws_fe_ope_solicitud->getWsFeAfipFechaServicioDesde(); // solo concepto 2 o 3
        $array_fe['FchServHasta'] = $ws_fe_ope_solicitud->getWsFeAfipFechaServicioHasta(); // solo concepto 2 o 3
        $array_fe['FchVtoPago'] = $ws_fe_ope_solicitud->getWsFeAfipVencimientoPago();  // solo concepto 2 o 3
        $array_fe['MonId'] = $ws_fe_ope_solicitud->getWsFeAfipTipoMoneda();    // Id de moneda 'PES'
        $array_fe['MonCotiz'] = $ws_fe_ope_solicitud->getWsFeAfipCotizacionMoneda();   // Cotizacion moneda. Solo exportacion

        $wsaa = new WsAa($gral_empresa);

        // Controlo la fecha de expiracion del TA que tengo o genero uno nuevo.
        if ($wsaa->get_expiration() < date("c")) {
            // Genera el "Ticket de Acceso" (TA)
            if (!$wsaa->generar_TA()) { // Retorna False si hay algun error.
                $error['descripcion'] = "Error al obtener el Ticket de Acceso.";
                $errores[] = $error;
            }
        }

        $ws_afip = new WsAfip($gral_empresa->getCuit());

        // Carga el archivo TA.xml
        $ws_afip->openTA();


        if (trim($ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde()) == '') {
            // ---------------------------------------------------------------------
            // se obtiene el nuevo numero del comprobante
            // ---------------------------------------------------------------------
            $numero_factura = 0;

            $numero_ultima_factura = $ws_afip->FECompUltimoAutorizado($ws_fe_afip_punto_venta, $ws_fe_afip_tipo_comprobante);

            if ($numero_ultima_factura >= 0) {
                if ($numero_ultima_factura == 0) {
                    // si no existe aun numero de comprobante
                    $numero_factura = 1;
                } else {
                    // si ya existe numero de comprobante
                    $numero_factura = $numero_ultima_factura + 1;
                }
            } else {
                // si hubo un error
            }

            $ws_fe_ope_solicitud->setWsFeAfipComprobanteDesde($numero_factura);
            $ws_fe_ope_solicitud->setWsFeAfipComprobanteHasta($numero_factura);
            $ws_fe_ope_solicitud->save();
        }else{
            $numero_factura = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();
        }

        $array_fe['CbteDesde'] = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();  // nro de comprobante desde (para cuando es lote)
        $array_fe['CbteHasta'] = $ws_fe_ope_solicitud->getWsFeAfipComprobanteHasta(); // nro de comprobante hasta (para cuando es lote)

        if (count($errores) > 0) {
            //Gral::prr($errores);
            throw new Exception("<br>ERROR al generar la Factura Online. <br>");
        }

        $datos = $ws_afip->FECAESolicitar($ws_fe_afip_punto_venta, $numero_factura, $array_fe, $array_fe_tributos, $array_fe_ivas, $array_fe_comprobante_asociados, $array_fe_opcionals);

        return $e == false ? $datos : false;
    }

    static function setActualizarTipificacionesAfip($gral_empresa) {
        $dummy = WsAfipProceso::FEDummy($gral_empresa);
        Gral::prr($dummy);

        //$punto_ventas = WsAfipProceso::setWsFeParamPuntoVentasDesdeWsAfip($gral_empresa); // ws_fe_param_punto_venta
        //Gral::prr($punto_ventas);
        
        //$tipo_comprobantes = WsAfipProceso::setWsFeParamTipoComprobantesDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_comprobante
        //Gral::prr($tipo_comprobantes);

        //$tipo_conceptos = WsAfipProceso::setWsFeParamTipoConceptosDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_concepto
        //Gral::prr($tipo_conceptos);

        //$tipo_documentos = WsAfipProceso::setWsFeParamTipoDocumentosDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_documento
        //Gral::prr($tipo_documentos);

        //$tipo_ivas = WsAfipProceso::setWsFeParamTipoIvaDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_iva
        //Gral::prr($tipo_ivas);

        //$tipo_monedas = WsAfipProceso::setWsFeParamTipoMonedasDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_moneda
        //Gral::prr($tipo_monedas);

        //$tipo_opcionals = WsAfipProceso::setWsFeParamTipoOpcionalDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_opcional
        //Gral::prr($tipo_opcionals);

        //$tipo_paiss = WsAfipProceso::setWsFeParamTipoPaisDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_opcional
        //Gral::prr($tipo_paiss);

        //$tipo_tributos = WsAfipProceso::setWsFeParamTipoTributoDesdeWsAfip($gral_empresa); // ws_fe_param_tipo_tributo
        //Gral::prr($tipo_tributos);        
    }

}
