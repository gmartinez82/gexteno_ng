<?php

class PdeComprobante {

    const SES_PAGINACION = 'adm_pdecomprobante_paginas';
    const SES_PAGINACION_REGISTROS = 'adm_pdecomprobante_paginas_registros';
    const SES_CRITERIOS_FACTURA = 'adm_pdecomprobante_factura_criterios';
    const SES_CRITERIOS_RECIBO = 'adm_pdecomprobante_recibo_criterios';
    const SES_CRITERIOS_NOTA_CREDITO = 'adm_pdecomprobante_nota_credito_criterios';
    const SES_CRITERIOS_NOTA_DEBITO = 'adm_pdecomprobante_nota_debito_criterios';
    const SES_PROVEEDOR_SELECCIONADO = 'adm_vtacomprobante_prv_proveedor_id';
    const TIPO_SUBTOTAL_GRAVADO = 'SUBTOTAL_GRAVADO';
    const TIPO_SUBTOTAL_NO_GRAVADO = 'SUBTOTAL_NO_GRAVADO';
    const TIPO_SUBTOTAL_EXENTO = 'SUBTOTAL_EXENTO';

    static function getSesPag() {
        if (trim(Gral::getSes(PdeComprobante::SES_PAGINACION)) == '')
            return 1;
        return Gral::getSes(PdeComprobante::SES_PAGINACION);
    }

    static function setSesPag($v) {
        Gral::setSes(PdeComprobante::SES_PAGINACION, $v);
    }

    static function getSesPagCantidad() {
        if (trim(Gral::getSes(PdeComprobante::SES_PAGINACION_REGISTROS)) == '')
            return 3;
        return Gral::getSes(PdeComprobante::SES_PAGINACION_REGISTROS);
    }

    static function setSesPagCantidad($v) {
        Gral::setSes(PdeComprobante::SES_PAGINACION_REGISTROS, $v);
    }

    static function getOxId($id, $class) {
        $o = $class::getOxId($id);
        return $o;
    }

    static function getArrTotales($pde_facturas, $pde_nota_debitos, $pde_nota_creditos, $pde_recibos, $importe_total_saldo_inicial_en_fecha = false) {
        $arr_totales = array();

        // ---------------------------------------------------------------------
        // Se inicialza resumen con el saldo inicial a fecha dada
        // ---------------------------------------------------------------------        
        if ($importe_total_saldo_inicial_en_fecha !== false) {
            if ($importe_total_saldo_inicial_en_fecha > 0) {
                $arr_totales['RESUMEN']['SALDO_EN_FECHA_DEBE'] = abs($importe_total_saldo_inicial_en_fecha);
                $arr_totales['RESUMEN']['SALDO_EN_FECHA_HABER'] = 0;
            } else {
                $arr_totales['RESUMEN']['SALDO_EN_FECHA_DEBE'] = 0;
                $arr_totales['RESUMEN']['SALDO_EN_FECHA_HABER'] = abs($importe_total_saldo_inicial_en_fecha);
            }
        }
        
        // ---------------------------------------------------------------------
        // Facturas
        // ---------------------------------------------------------------------
        if (count($pde_facturas) > 0) {
            foreach ($pde_facturas as $pde_factura) {
                $pde_factura_tipo_estado = $pde_factura->getPdeFacturaTipoEstado();
                $importe_total_comprobante = $pde_factura->getImporteTotalComprobante();
                $importe_saldo_imputable = $pde_factura->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_DEBE'] += $importe_total_comprobante;
                $arr_totales['DEBE']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($pde_factura_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_DEBE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }

                // ---------------------------------------------------------------------
                // Ordenes de Pago de la Factura
                // ---------------------------------------------------------------------
                foreach ($pde_factura->getPdeOrdenPagoPdeFacturasActivas() as $pde_orden_pago_pde_factura) {
                    $arr_totales['RESUMEN']['IMPORTE_TOTAL_ORDEN_PAGO'] += $pde_orden_pago_pde_factura->getImporteAfectado();
                }
            }
        }

        // ---------------------------------------------------------------------
        // ND
        // ---------------------------------------------------------------------
        if (count($pde_nota_debitos) > 0) {
            foreach ($pde_nota_debitos as $pde_nota_debito) {
                $pde_nota_debito_tipo_estado = $pde_nota_debito->getPdeNotaDebitoTipoEstado();
                $importe_total_comprobante = $pde_nota_debito->getImporteTotalComprobante();
                $importe_saldo_imputable = $pde_nota_debito->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_DEBE'] += $importe_total_comprobante;
                $arr_totales['DEBE']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['DEBE']['COMPROBANTES']['ND']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['COMPROBANTES']['ND']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($pde_nota_debito_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_DEBE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['COMPROBANTES']['ND']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['COMPROBANTES']['ND']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }

                // ---------------------------------------------------------------------
                // Ordenes de Pago de la ND
                // ---------------------------------------------------------------------
                foreach ($pde_nota_debito->getPdeOrdenPagoPdeNotaDebitosActivas() as $pde_orden_pago_pde_nota_debito) {
                    $arr_totales['RESUMEN']['IMPORTE_TOTAL_ORDEN_PAGO'] += $pde_orden_pago_pde_nota_debito->getImporteAfectado();
                }
            }
        }

        // ---------------------------------------------------------------------
        // NC
        // ---------------------------------------------------------------------
        if (count($pde_nota_creditos) > 0) {
            foreach ($pde_nota_creditos as $pde_nota_credito) {
                $pde_nota_credito_tipo_estado = $pde_nota_credito->getPdeNotaCreditoTipoEstado();
                $importe_total_comprobante = $pde_nota_credito->getImporteTotalComprobante();
                $importe_saldo_imputable = $pde_nota_credito->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_HABER'] += $importe_total_comprobante;
                $arr_totales['HABER']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['HABER']['COMPROBANTES']['NC']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['COMPROBANTES']['NC']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($pde_nota_credito_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_HABER'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['COMPROBANTES']['NC']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['COMPROBANTES']['NC']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Recibo
        // ---------------------------------------------------------------------
        if (count($pde_recibos) > 0) {
            foreach ($pde_recibos as $pde_recibo) {
                $pde_recibo_tipo_estado = $pde_recibo->getPdeReciboTipoEstado();
                $importe_total_comprobante = $pde_recibo->getImporteTotalComprobante();
                $importe_saldo_imputable = $pde_recibo->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_HABER'] += $importe_total_comprobante;
                $arr_totales['HABER']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['HABER']['COMPROBANTES']['RECIBO']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['COMPROBANTES']['RECIBO']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($pde_recibo_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_HABER'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['COMPROBANTES']['RECIBO']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['COMPROBANTES']['RECIBO']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }
            }
        }

        $importe_total_total_debe = $arr_totales['RESUMEN']['SALDO_EN_FECHA_DEBE'] + $arr_totales['RESUMEN']['IMPORTE_TOTAL_DEBE'];
        $importe_total_total_haber = $arr_totales['RESUMEN']['SALDO_EN_FECHA_HABER'] + $arr_totales['RESUMEN']['IMPORTE_TOTAL_HABER'];

        if ($importe_total_total_debe > $importe_total_total_haber) {
            $arr_totales['RESUMEN']['IMPORTE_SALDO_DEBE'] = $importe_total_total_debe - $importe_total_total_haber;
            $arr_totales['RESUMEN']['IMPORTE_SALDO_HABER'] = 0;
        } else {
            $arr_totales['RESUMEN']['IMPORTE_SALDO_DEBE'] = 0;
            $arr_totales['RESUMEN']['IMPORTE_SALDO_HABER'] = $importe_total_total_haber - $importe_total_total_debe;
        }

        return $arr_totales;
    }

    /**
     * Metodo que retorna un resumen para el libro de compras
     * @param type $pde_comprobantes
     * @return type
     */
    static function getArrResumenLibroVentas($pde_comprobantes) {

        foreach ($pde_comprobantes as $pde_comprobante) {
            $class = get_class($pde_comprobante);
            switch ($class) {
                case 'PdeFactura': $pde_facturas[] = $pde_comprobante;
                    break;
                case 'PdeNotaDebito': $pde_nota_debitos[] = $pde_comprobante;
                    break;
                case 'PdeNotaCredito': $pde_nota_creditos[] = $pde_comprobante;
                    break;
            }
        }

        $arr_totales = array();

        // ---------------------------------------------------------------------
        // Facturas
        // ---------------------------------------------------------------------
        if (count($pde_facturas) > 0) {
            foreach ($pde_facturas as $pde_factura) {
                $pde_factura_tipo_estado = $pde_factura->getPdeFacturaTipoEstado();
                $pde_centro_pedido = $pde_factura->getPdeCentroPedido();
                $gral_condicion_iva = $pde_factura->getGralCondicionIva();

                $multiplicador = 1;

                $importe_total = $pde_factura->getImporteTotal() * $multiplicador;
                $importe_subtotal = $pde_factura->getImporteSubtotal() * $multiplicador;
                $importe_iva_base_imponible = $pde_factura->getImporteIvaBaseImponible() * $multiplicador;
                $importe_iva_importe = $pde_factura->getImporteIvaImporte() * $multiplicador;
                $importe_tributo_base_imponible = $pde_factura->getImporteTributoBaseImponible() * $multiplicador;
                $importe_tributo_importe = $pde_factura->getImporteTributoImporte() * $multiplicador;

                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto de venta (total)
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$pde_centro_pedido->getCodigo()] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$pde_centro_pedido->getCodigo()] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$pde_centro_pedido->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$pde_centro_pedido->getCodigo()] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$pde_centro_pedido->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$pde_centro_pedido->getCodigo()] += $importe_tributo_importe;

                // punto de venta (detalle)
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto venta / condicion iva (total)
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // punto venta / condicion iva (detalle)
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                $arr_iva_full = $pde_factura->getArrIvaFacturaFull();
                //Gral::prr($arr_iva_full);
                foreach ($arr_iva_full as $i => $arr_iva) {
                    $gral_tipo_iva = GralTipoIva::getOxCodigo($i);

                    $importe_iva_base_imponible = $pde_factura->getImporteIvaBaseImponible($i, $arr_iva_full) * $multiplicador;
                    $importe_iva_importe = $pde_factura->getImporteIvaImporte($i, $arr_iva_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;

                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;
                }

                $arr_tributos_full = $pde_factura->getArrTributoFacturaFull();
                foreach ($arr_tributos_full as $i => $arr_tributo) {
                    $pde_tributo = PdeTributo::getOxCodigo($i);

                    $importe_tributo_base_imponible = $pde_factura->getImporteTributoBaseImponible($i, $arr_tributos_full) * $multiplicador;
                    $importe_tributo_importe = $pde_factura->getImporteTributoImporte($i, $arr_tributos_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['CANTIDAD'] += 1;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Nota de Credito
        // ---------------------------------------------------------------------
        if (count($pde_nota_creditos) > 0) {
            foreach ($pde_nota_creditos as $pde_nota_credito) {
                $pde_nota_credito_tipo_estado = $pde_nota_credito->getPdeNotaCreditoTipoEstado();
                $pde_centro_pedido = $pde_nota_credito->getPdeCentroPedido();
                $gral_condicion_iva = $pde_nota_credito->getGralCondicionIva();

                $multiplicador = (-1);

                $importe_total = $pde_nota_credito->getImporteTotal() * $multiplicador;
                $importe_subtotal = $pde_nota_credito->getImporteSubtotal() * $multiplicador;
                $importe_iva_base_imponible = $pde_nota_credito->getImporteIvaBaseImponible() * $multiplicador;
                $importe_iva_importe = $pde_nota_credito->getImporteIvaImporte() * $multiplicador;
                $importe_tributo_base_imponible = $pde_nota_credito->getImporteTributoBaseImponible() * $multiplicador;
                $importe_tributo_importe = $pde_nota_credito->getImporteTributoImporte() * $multiplicador;

                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto de venta (total)
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$pde_centro_pedido->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$pde_centro_pedido->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$pde_centro_pedido->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$pde_centro_pedido->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$pde_centro_pedido->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$pde_centro_pedido->getCodigo()] += $importe_tributo_importe;

                // punto de venta (detalle)
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto venta / condicion iva (total)
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // punto venta / condicion iva (detalle)
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                $arr_iva_full = $pde_nota_credito->getArrIvaNotaCreditoFull();
                //Gral::prr($arr_iva_full);
                foreach ($arr_iva_full as $i => $arr_iva) {
                    $gral_tipo_iva = GralTipoIva::getOxCodigo($i);

                    $importe_iva_base_imponible = $pde_nota_credito->getImporteIvaBaseImponible($i, $arr_iva_full) * $multiplicador;
                    $importe_iva_importe = $pde_nota_credito->getImporteIvaImporte($i, $arr_iva_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;

                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;
                }

                $arr_tributos_full = $pde_nota_credito->getArrTributoNotaCreditoFull();
                foreach ($arr_tributos_full as $i => $arr_tributo) {
                    $pde_tributo = PdeTributo::getOxCodigo($i);

                    $importe_tributo_base_imponible = $pde_nota_credito->getImporteTributoBaseImponible($i, $arr_tributos_full) * $multiplicador;
                    $importe_tributo_importe = $pde_nota_credito->getImporteTributoImporte($i, $arr_tributos_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['CANTIDAD'] += 1;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Nota de Debito
        // ---------------------------------------------------------------------
        if (count($pde_nota_debitos) > 0) {
            foreach ($pde_nota_debitos as $pde_nota_debito) {
                $pde_nota_debito_tipo_estado = $pde_nota_debito->getPdeNotaDebitoTipoEstado();
                $pde_centro_pedido = $pde_nota_debito->getPdeCentroPedido();
                $gral_condicion_iva = $pde_nota_debito->getGralCondicionIva();

                $multiplicador = 1;

                $importe_total = $pde_nota_debito->getImporteTotal() * $multiplicador;
                $importe_subtotal = $pde_nota_debito->getImporteSubtotal() * $multiplicador;
                $importe_iva_base_imponible = $pde_nota_debito->getImporteIvaBaseImponible() * $multiplicador;
                $importe_iva_importe = $pde_nota_debito->getImporteIvaImporte() * $multiplicador;
                $importe_tributo_base_imponible = $pde_nota_debito->getImporteTributoBaseImponible() * $multiplicador;
                $importe_tributo_importe = $pde_nota_debito->getImporteTributoImporte() * $multiplicador;

                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto de venta (total)
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$pde_centro_pedido->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$pde_centro_pedido->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$pde_centro_pedido->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$pde_centro_pedido->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$pde_centro_pedido->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$pde_centro_pedido->getCodigo()] += $importe_tributo_importe;

                // punto de venta (detalle)
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto venta / condicion iva (total)
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // punto venta / condicion iva (detalle)
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                $arr_iva_full = $pde_nota_debito->getArrIvaNotaDebitoFull();
                //Gral::prr($arr_iva_full);
                foreach ($arr_iva_full as $i => $arr_iva) {
                    $gral_tipo_iva = GralTipoIva::getOxCodigo($i);

                    $importe_iva_base_imponible = $pde_nota_debito->getImporteIvaBaseImponible($i, $arr_iva_full) * $multiplicador;
                    $importe_iva_importe = $pde_nota_debito->getImporteIvaImporte($i, $arr_iva_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;

                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;
                }

                $arr_tributos_full = $pde_nota_debito->getArrTributoNotaDebitoFull();
                foreach ($arr_tributos_full as $i => $arr_tributo) {
                    $pde_tributo = PdeTributo::getOxCodigo($i);

                    $importe_tributo_base_imponible = $pde_nota_debito->getImporteTributoBaseImponible($i, $arr_tributos_full) * $multiplicador;
                    $importe_tributo_importe = $pde_nota_debito->getImporteTributoImporte($i, $arr_tributos_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$pde_centro_pedido->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$pde_tributo->getCodigo()]['CANTIDAD'] += 1;
                }
            }
        }

        return $arr_totales;
    }

    /**
     * @creado 13/08/2018
     * @creado_por Pablo Rosen
     */
    static function getPdeComprobantes($gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $gral_mes_id = false, $anio = false, $prv_proveedor_id = false, $incluir_recibos = false, $orden = 'DESC', $solo_importaciones = false, $incluir_retenciones_ventas = false) {
        unset($pde_comprobantes);

        // -----------------------------------------------------------------------------
        // Creo Criterios de PdeFactura
        // -----------------------------------------------------------------------------
        $criterio_factura = new Criterio();
        $criterio_factura->add('', 'true', Criterio::SINCOMPARADOR, false, '');
        $criterio_factura->add(PdeFacturaTipoEstado::GEN_ATTR_CODIGO, PdeFacturaTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

        if ($gral_empresa_id != 0) {
            $criterio_factura->add(PdeFactura::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if ($prv_proveedor_id != 0) {
            $criterio_factura->add(PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        }
        if ($solo_importaciones) {
            $criterio_factura->add(PdeTipoFactura::GEN_ATTR_CODIGO, PdeTipoFactura::TIPO_DESPACHO_IMPORTACION, Criterio::IGUAL);
        }
        if ($fecha_desde) {
            $criterio_factura->add(PdeFactura::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_factura->add(PdeFactura::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_factura->add(PdeFactura::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_factura->add(PdeFactura::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }

        $criterio_factura->addTabla(PdeFactura::GEN_TABLA);
        $criterio_factura->addRealJoin(PdeFacturaTipoEstado::GEN_TABLA, PdeFacturaTipoEstado::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_factura->addRealJoin(PdeTipoFactura::GEN_TABLA, PdeTipoFactura::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PDE_TIPO_FACTURA_ID, 'LEFT JOIN');
        $criterio_factura->setCriterios();
        $pde_facturas = PdeFactura::getPdeFacturas($paginador = null, $criterio_factura);


        // -----------------------------------------------------------------------------
        // Creo Criterios de PdeNotaDebito
        // -----------------------------------------------------------------------------
        $criterio_nota_debito = new Criterio();
        $criterio_nota_debito->add('', 'true', Criterio::SINCOMPARADOR, false, '');
        $criterio_nota_debito->add(PdeNotaDebitoTipoEstado::GEN_ATTR_CODIGO, PdeNotaDebitoTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

        if ($gral_empresa_id != 0) {
            $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if ($prv_proveedor_id != 0) {
            $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        }
        if ($solo_importaciones) {
            $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_CODIGO, PdeTipoNotaDebito::TIPO_NOTA_DEBITO_DI, Criterio::IGUAL);
        }
        if ($fecha_desde) {
            $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_nota_debito->add(PdeNotaDebito::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }

        $criterio_nota_debito->addTabla(PdeNotaDebito::GEN_TABLA);
        $criterio_nota_debito->addRealJoin(PdeNotaDebitoTipoEstado::GEN_TABLA, PdeNotaDebitoTipoEstado::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_nota_debito->addRealJoin(PdeTipoNotaDebito::GEN_TABLA, PdeTipoNotaDebito::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PDE_TIPO_NOTA_DEBITO_ID, 'LEFT JOIN');
        $criterio_nota_debito->setCriterios();
        $pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos($paginador, $criterio_nota_debito);


        // -----------------------------------------------------------------------------
        // Creo Criterios de PdeNotaCredito
        // -----------------------------------------------------------------------------
        $criterio_nota_credito = new Criterio();
        $criterio_nota_credito->add('', 'true', Criterio::SINCOMPARADOR, false, '');
        $criterio_nota_credito->add(PdeNotaCreditoTipoEstado::GEN_ATTR_CODIGO, PdeNotaCreditoTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

        if ($gral_empresa_id != 0) {
            $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if ($prv_proveedor_id != 0) {
            $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        }
        if ($solo_importaciones) {
            $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_CODIGO, PdeTipoNotaCredito::TIPO_NOTA_CREDITO_DI, Criterio::IGUAL);
        }

        if ($fecha_desde) {
            $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_nota_credito->add(PdeNotaCredito::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }

        $criterio_nota_credito->addTabla(PdeNotaCredito::GEN_TABLA);
        $criterio_nota_credito->addRealJoin(PdeNotaCreditoTipoEstado::GEN_TABLA, PdeNotaCreditoTipoEstado::GEN_ATTR_ID, PdeNotaCredito::GEN_ATTR_PDE_NOTA_CREDITO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_nota_credito->addRealJoin(PdeTipoNotaCredito::GEN_TABLA, PdeTipoNotaCredito::GEN_ATTR_ID, PdeNotaCredito::GEN_ATTR_PDE_TIPO_NOTA_CREDITO_ID, 'LEFT JOIN');
        $criterio_nota_credito->setCriterios();
        $pde_nota_creditos = PdeNotaCredito::getPdeNotaCreditos($paginador, $criterio_nota_credito);

        if ($incluir_recibos) {
            // -----------------------------------------------------------------------------
            // Creo Criterios de PdeRecibo
            // -----------------------------------------------------------------------------
            $criterio_recibo = new Criterio();
            $criterio_recibo->add('', 'true', Criterio::SINCOMPARADOR, false, '');
            $criterio_recibo->add(PdeReciboTipoEstado::GEN_ATTR_CODIGO, PdeReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

            if ($gral_empresa_id != 0) {
                $criterio_recibo->add(PdeRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
            }
            if ($prv_proveedor_id != 0) {
                $criterio_recibo->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
            }
            if ($fecha_desde) {
                $criterio_recibo->add(PdeRecibo::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
            }
            if ($fecha_hasta) {
                $criterio_recibo->add(PdeRecibo::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
            }
            if ($gral_mes_id) {
                $criterio_recibo->add(PdeRecibo::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
            }
            if ($anio) {
                $criterio_recibo->add(PdeRecibo::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
            }

            $criterio_recibo->addTabla(PdeRecibo::GEN_TABLA);
            $criterio_recibo->addRealJoin(PdeReciboTipoEstado::GEN_TABLA, PdeReciboTipoEstado::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
            $criterio_recibo->setCriterios();
            $pde_recibos = PdeRecibo::getPdeRecibos($paginador, $criterio_recibo);
        }

        if ($incluir_retenciones_ventas && $prv_proveedor_id == 0) {
            // -----------------------------------------------------------------------------
            // Creo Criterios de PdeRecibo
            // -----------------------------------------------------------------------------
            
            $gral_mes = GralMes::getOxId($gral_mes_id);
            $fecha_desde_periodo = Date::getPrimeraFechaDelMes($gral_mes->getCodigoNumero(), $anio);
            $fecha_hasta_periodo = Date::getUltimaFechaDelMes($gral_mes->getCodigoNumero(), $anio);

            $criterio_retenciones_venta = new Criterio();
            $criterio_retenciones_venta->add('', 'true', Criterio::SINCOMPARADOR, false, '');
            
            if ($gral_empresa_id != 0) {
                $criterio_retenciones_venta->add(VtaRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
            }
            
            $criterio_retenciones_venta->add(VtaReciboTipoEstado::GEN_ATTR_CODIGO, VtaReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);
            $criterio_retenciones_venta->add(VtaReciboItemRetencion::GEN_ATTR_FECHA_EMISION, $fecha_desde_periodo, Criterio::MAYORIGUAL);
            $criterio_retenciones_venta->add(VtaReciboItemRetencion::GEN_ATTR_FECHA_EMISION, $fecha_hasta_periodo, Criterio::MENORIGUAL);
            $criterio_retenciones_venta->addTabla(VtaReciboItemRetencion::GEN_TABLA);
            $criterio_retenciones_venta->addRealJoin(VtaRecibo::GEN_TABLA, VtaRecibo::GEN_ATTR_ID, VtaReciboItemRetencion::GEN_ATTR_VTA_RECIBO_ID);
            $criterio_retenciones_venta->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID);
            $criterio_retenciones_venta->addOrden(VtaReciboItemRetencion::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
            $criterio_retenciones_venta->setCriterios();

            $vta_recibo_item_retencions = VtaReciboItemRetencion::getVtaReciboItemRetencions($p = null, $criterio_retenciones_venta);
        }
        
        // -----------------------------------------------------------------------------
        // se unifica el array
        // -----------------------------------------------------------------------------
        foreach ($pde_facturas as $pde_factura) {
            $pde_comprobantes[] = $pde_factura;
        }

        foreach ($pde_nota_debitos as $pde_nota_debito) {
            $pde_comprobantes[] = $pde_nota_debito;
        }

        foreach ($pde_nota_creditos as $pde_nota_credito) {
            $pde_comprobantes[] = $pde_nota_credito;
        }

        if ($incluir_recibos) {
            foreach ($pde_recibos as $pde_recibo) {
                $pde_comprobantes[] = $pde_recibo;
            }
        }

        if ($incluir_retenciones_ventas) {
            // se agregan retenciones por ventas el libro de compras
            foreach ($vta_recibo_item_retencions as $vta_recibo_item_retencion) {
                $pde_comprobantes[] = $vta_recibo_item_retencion;
            }
        }
        
        usort($pde_comprobantes, 'self::ordenarComprobantes');

        return $pde_comprobantes;
    }

    static function ordenarComprobantes($pde_comprobante, $pde_comprobante_comparacion) {
        $fecha_emision = strtotime(date($pde_comprobante->getFechaEmision()));
        //$fecha_emision = strtotime(date($pde_comprobante->getCreado()));
        $fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getFechaEmision()));
        //$fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getCreado()));

        if ($fecha_emision == $fecha_emision_comparacion)
            return 0;

        return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 07/02/2019
     */
    static function getPdeComprobantesNoContabilizados($gral_empresa_id, $fecha_desde, $fecha_hasta, $gral_mes_id, $anio)
    {
        $falta_contabilizar_comprobantes = false;
        $arr_pde_comprobantes = array();
        $pde_comprobantes = PdeComprobante::getPdeComprobantes($gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $gral_mes_id, $anio);
        
        foreach($pde_comprobantes as $pde_comprobante)
        {
            $class = get_class($pde_comprobante);
            
            if($class == 'PdeFactura')
            {
                $pde_comprobante_tipo_estado = $pde_comprobante->getPdeFacturaTipoEstado();
                if(!$pde_comprobante_tipo_estado->getContabilizable())
                {
                    $pde_facturas[] = $pde_comprobante;
}
            }
            
            if($class == 'PdeNotaDebito')
            {
                $pde_comprobante_tipo_estado = $pde_comprobante->getPdeNotaDebitoTipoEstado();
                if(!$pde_comprobante_tipo_estado->getContabilizable())
                {
                    $pde_nota_debitos[] = $pde_comprobante;
                }
            }
            
            if($class == 'PdeNotaCredito')
            {
                $pde_comprobante_tipo_estado = $pde_comprobante->getPdeNotaCreditoTipoEstado();
                if(!$pde_comprobante_tipo_estado->getContabilizable())
                {
                    $pde_nota_creditos[] = $pde_comprobante;
                }
            }
            
            if($class == 'PdeRecibo')
            {
                $pde_comprobante_tipo_estado = $pde_comprobante->getVtaReciboTipoEstado();
                if(!$pde_comprobante_tipo_estado->getContabilizable())
                {
                    $pde_recibos[] = $pde_comprobante;
                }
            }
        }

        if(count($pde_facturas) > 0){
            $arr_pde_comprobantes['PdeComprobantes']['PdeFactura']     = $pde_facturas;    
        }

        if(count($pde_nota_debitos) > 0){
            $arr_pde_comprobantes['PdeComprobantes']['PdeNotaDebito']  = $pde_nota_debitos;
        }

        if(count($pde_nota_creditos) > 0){
            $arr_pde_comprobantes['PdeComprobantes']['PdeNotaCredito'] = $pde_nota_creditos;
        }

        if(count($pde_recibos) > 0){
            $arr_pde_comprobantes['PdeComprobantes']['PdeRecibo']      = $pde_recibos;
        }
        return $arr_pde_comprobantes;
    }

}
