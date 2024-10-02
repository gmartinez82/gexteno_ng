<?php

class VtaComprobante {

    const SES_PAGINACION = 'adm_vtacomprobante_paginas';
    const SES_PAGINACION_REGISTROS = 'adm_vtacomprobante_paginas_registros';
    const SES_CRITERIOS_FACTURA = 'adm_vtacomprobante_factura_criterios';
    const SES_CRITERIOS_RECIBO = 'adm_vtacomprobante_recibo_criterios';
    const SES_CRITERIOS_NOTA_CREDITO = 'adm_vtacomprobante_nota_credito_criterios';
    const SES_CRITERIOS_NOTA_DEBITO = 'adm_vtacomprobante_nota_debito_criterios';
    const SES_CRITERIOS_AJUSTE_DEBE = 'adm_vtacomprobante_ajuste_debe_criterios';
    const SES_CRITERIOS_AJUSTE_HABER = 'adm_vtacomprobante_ajuste_haber_criterios';
    const SES_CRITERIOS_ORDEN_VENTA = 'adm_vtacomprobante_orden_venta_criterios';
    const SES_CLIENTE_SELECCIONADO = 'adm_vtacomprobante_cli_cliente_id';
    const SES_INCLUIR_AJUSTES = 'adm_vtacomprobante_incluir_ajustes';
    const TIPO_SUBTOTAL_GRAVADO = 'SUBTOTAL_GRAVADO';
    const TIPO_SUBTOTAL_NO_GRAVADO = 'SUBTOTAL_NO_GRAVADO';
    const TIPO_SUBTOTAL_EXENTO = 'SUBTOTAL_EXENTO';

    static function getSesPag() {
        if (trim(Gral::getSes(VtaComprobante::SES_PAGINACION)) == '')
            return 1;
        return Gral::getSes(VtaComprobante::SES_PAGINACION);
    }

    static function setSesPag($v) {
        Gral::setSes(VtaComprobante::SES_PAGINACION, $v);
    }

    static function getSesPagCantidad() {
        if (trim(Gral::getSes(VtaComprobante::SES_PAGINACION_REGISTROS)) == '')
            return 3;
        return Gral::getSes(VtaComprobante::SES_PAGINACION_REGISTROS);
    }

    static function setSesPagCantidad($v) {
        Gral::setSes(VtaComprobante::SES_PAGINACION_REGISTROS, $v);
    }

    static function getOxId($id, $class) {
        $o = $class::getOxId($id);
        return $o;
    }

    static function getVtaTipoComprobantes() {
        $arr['FACTURAS'] = array('codigo' => 'FACTURAS', 'descripcion' => 'Facturas');
        $arr['NOTA_DE_CREDITOS'] = array('codigo' => 'NOTA_DE_CREDITOS', 'descripcion' => 'Notas de Crédito');
        $arr['NOTA_DE_DEBITOS'] = array('codigo' => 'NOTA_DE_DEBITOS', 'descripcion' => 'Notas de Débito');

        return $arr;
    }

    /**
     * Metodo que retorna un array procesado para el resumen de cuenta
     * @param type $vta_facturas
     * @param type $vta_nota_debitos
     * @param type $vta_nota_creditos
     * @param type $vta_recibos
     * @return type
     */
    static function getArrTotales($vta_facturas, $vta_nota_debitos, $vta_nota_creditos, $vta_recibos, $vta_ajuste_debes, $vta_ajuste_habers, $importe_total_saldo_inicial_en_fecha = false, $vta_orden_ventas = false) {
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
        if (count($vta_facturas) > 0) {
            foreach ($vta_facturas as $vta_factura) {
                $vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
                $importe_total_comprobante = $vta_factura->getImporteTotalComprobante($resumen = true);
                $importe_saldo_imputable = $vta_factura->getSaldoImputable();
                
                $arr_totales['RESUMEN']['IMPORTE_TOTAL_DEBE'] += $importe_total_comprobante;
                $arr_totales['DEBE']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($vta_factura_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_DEBE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['COMPROBANTES']['FACTURAS']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }
            }
        }

        // ---------------------------------------------------------------------
        // ND
        // ---------------------------------------------------------------------
        if (count($vta_nota_debitos) > 0) {
            foreach ($vta_nota_debitos as $vta_nota_debito) {
                $vta_nota_debito_tipo_estado = $vta_nota_debito->getVtaNotaDebitoTipoEstado();
                $importe_total_comprobante = $vta_nota_debito->getImporteTotalComprobante($resumen = true);
                //$importe_saldo_imputable = $vta_nota_debito->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_DEBE'] += $importe_total_comprobante;
                $arr_totales['DEBE']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['DEBE']['COMPROBANTES']['ND']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['COMPROBANTES']['ND']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($vta_nota_debito_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_DEBE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['COMPROBANTES']['ND']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['COMPROBANTES']['ND']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }
            }
        }

        // ---------------------------------------------------------------------
        // NC
        // ---------------------------------------------------------------------
        if (count($vta_nota_creditos) > 0) {
            foreach ($vta_nota_creditos as $vta_nota_credito) {
                $vta_nota_credito_tipo_estado = $vta_nota_credito->getVtaNotaCreditoTipoEstado();
                $importe_total_comprobante = $vta_nota_credito->getImporteTotalComprobante($resumen = true);
                //$importe_saldo_imputable = $vta_nota_credito->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_HABER'] += $importe_total_comprobante;
                $arr_totales['HABER']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['HABER']['COMPROBANTES']['NC']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['COMPROBANTES']['NC']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($vta_nota_credito_tipo_estado->getImputable()) {
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
        if (count($vta_recibos) > 0) {
            foreach ($vta_recibos as $vta_recibo) {
                $vta_recibo_tipo_estado = $vta_recibo->getVtaReciboTipoEstado();
                $importe_total_comprobante = $vta_recibo->getImporteTotalComprobante($resumen = true);
                //$importe_saldo_imputable = $vta_recibo->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_HABER'] += $importe_total_comprobante;
                $arr_totales['HABER']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['HABER']['COMPROBANTES']['RECIBO']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['COMPROBANTES']['RECIBO']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($vta_recibo_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_HABER'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['COMPROBANTES']['RECIBO']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['COMPROBANTES']['RECIBO']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Ajuste Debe
        // ---------------------------------------------------------------------
        if (count($vta_ajuste_debes) > 0) {
            foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
                $vta_ajuste_tipo_estado = $vta_ajuste_debe->getVtaAjusteDebeTipoEstado();
                $importe_total_comprobante = $vta_ajuste_debe->getImporteTotalComprobante($resumen = true);
                //$importe_saldo_imputable = $vta_ajuste_debe->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_DEBE'] += $importe_total_comprobante;
                $arr_totales['DEBE']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['DEBE']['COMPROBANTES']['AJUSTE']['CANTIDAD_TOTAL'] ++;
                $arr_totales['DEBE']['COMPROBANTES']['AJUSTE']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($vta_ajuste_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_DEBE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['DEBE']['COMPROBANTES']['AJUSTE']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['DEBE']['COMPROBANTES']['AJUSTE']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Ajuste Haber
        // ---------------------------------------------------------------------
        if (count($vta_ajuste_habers) > 0) {
            foreach ($vta_ajuste_habers as $vta_ajuste_haber) {
                $vta_ajuste_tipo_estado = $vta_ajuste_haber->getVtaAjusteHaberTipoEstado();
                $importe_total_comprobante = $vta_ajuste_haber->getImporteTotalComprobante($resumen = true);
                //$importe_saldo_imputable = $vta_ajuste_haber->getSaldoImputable();

                $arr_totales['RESUMEN']['IMPORTE_TOTAL_HABER'] += $importe_total_comprobante;
                $arr_totales['HABER']['RESUMEN']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['RESUMEN']['IMPORTE_TOTAL'] += $importe_total_comprobante;
                $arr_totales['HABER']['COMPROBANTES']['AJUSTE']['CANTIDAD_TOTAL'] ++;
                $arr_totales['HABER']['COMPROBANTES']['AJUSTE']['IMPORTE_TOTAL'] += $importe_total_comprobante;

                if ($vta_ajuste_tipo_estado->getImputable()) {
                    $arr_totales['RESUMEN']['IMPORTE_IMPUTABLE_HABER'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['RESUMEN']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['RESUMEN']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                    $arr_totales['HABER']['COMPROBANTES']['AJUSTE']['CANTIDAD_IMPUTABLE'] ++;
                    $arr_totales['HABER']['COMPROBANTES']['AJUSTE']['IMPORTE_IMPUTABLE'] += $importe_saldo_imputable;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Orden de Venta
        // ---------------------------------------------------------------------
        if (count($vta_orden_ventas) > 0) {
            foreach ($vta_orden_ventas as $vta_orden_venta) {
                $arr_totales['RESUMEN']['ORDEN_VENTA']['CANTIDAD'] ++;
                $arr_totales['RESUMEN']['ORDEN_VENTA']['IMPORTE'] += $vta_orden_venta->getImporteTotalConIva();
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
     * Metodo que retorna un resumen para el libro de ventas
     * @param type $vta_comprobantes
     * @return type
     */
    static function getArrResumenLibroVentas($vta_comprobantes) {

        foreach ($vta_comprobantes as $vta_comprobante) {
            $class = get_class($vta_comprobante);
            switch ($class) {
                case 'VtaFactura': $vta_facturas[] = $vta_comprobante;
                    break;
                case 'VtaNotaDebito': $vta_nota_debitos[] = $vta_comprobante;
                    break;
                case 'VtaNotaCredito': $vta_nota_creditos[] = $vta_comprobante;
                    break;
            }
        }

        $arr_totales = array();

        // ---------------------------------------------------------------------
        // Facturas
        // ---------------------------------------------------------------------
        if (count($vta_facturas) > 0) {
            foreach ($vta_facturas as $vta_factura) {
                $vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
                $vta_punto_venta = $vta_factura->getVtaPuntoVenta();
                $gral_condicion_iva = $vta_factura->getGralCondicionIva();

                $multiplicador = 1;

                $importe_total = $vta_factura->getImporteTotal() * $multiplicador;
                $importe_subtotal = $vta_factura->getImporteSubtotal() * $multiplicador;
                //$importe_subtotal_neto_gravado = $vta_factura->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_GRAVADO) * $multiplicador;
                //$importe_subtotal_neto_no_gravado = $vta_factura->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) * $multiplicador;
                //$importe_subtotal_neto_exento = $vta_factura->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO) * $multiplicador;
                $importe_iva_base_imponible = $vta_factura->getImporteIvaBaseImponible() * $multiplicador;
                $importe_iva_importe = $vta_factura->getImporteIvaImporte() * $multiplicador;
                $importe_tributo_base_imponible = $vta_factura->getImporteTributoBaseImponible() * $multiplicador;
                $importe_tributo_importe = $vta_factura->getImporteTributoImporte() * $multiplicador;

                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // -------------------------------------------------------------
                // punto de venta (total)
                // -------------------------------------------------------------
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$vta_punto_venta->getCodigo()] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$vta_punto_venta->getCodigo()] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$vta_punto_venta->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$vta_punto_venta->getCodigo()] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$vta_punto_venta->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$vta_punto_venta->getCodigo()] += $importe_tributo_importe;

                // punto de venta (detalle)
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto venta / condicion iva (total)
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // punto venta / condicion iva (detalle)
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // -------------------------------------------------------------
                // condicion iva (total)
                // -------------------------------------------------------------
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // condicion iva (detalle)
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                $arr_iva_full = $vta_factura->getArrIvaFacturaFull();
                //Gral::prr($arr_iva_full);
                foreach ($arr_iva_full as $i => $arr_iva) {
                    $gral_tipo_iva = GralTipoIva::getOxCodigo($i);

                    $importe_iva_base_imponible = $vta_factura->getImporteIvaBaseImponible($i, $arr_iva_full) * $multiplicador;
                    $importe_iva_importe = $vta_factura->getImporteIvaImporte($i, $arr_iva_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;

                    // condicion iva / tipo iva (total)
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;
                }

                $arr_tributos_full = $vta_factura->getArrTributoFacturaFull();
                foreach ($arr_tributos_full as $i => $arr_tributo) {
                    $vta_tributo = VtaTributo::getOxCodigo($i);

                    $importe_tributo_base_imponible = $vta_factura->getImporteTributoBaseImponible($i, $arr_tributos_full) * $multiplicador;
                    $importe_tributo_importe = $vta_factura->getImporteTributoImporte($i, $arr_tributos_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;
                    $arr_totales['FACTURAS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['CANTIDAD'] += 1;

                    // condicion iva / tipo iva (total)
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;
                    $arr_totales['FACTURAS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['CANTIDAD'] += 1;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Nota de Credito
        // ---------------------------------------------------------------------
        if (count($vta_nota_creditos) > 0) {
            foreach ($vta_nota_creditos as $vta_nota_credito) {
                $vta_nota_credito_tipo_estado = $vta_nota_credito->getVtaNotaCreditoTipoEstado();
                $vta_punto_venta = $vta_nota_credito->getVtaPuntoVenta();
                $gral_condicion_iva = $vta_nota_credito->getGralCondicionIva();

                $multiplicador = (-1);

                $importe_total = $vta_nota_credito->getImporteTotal() * $multiplicador;
                $importe_subtotal = $vta_nota_credito->getImporteSubtotal() * $multiplicador;
                $importe_iva_base_imponible = $vta_nota_credito->getImporteIvaBaseImponible() * $multiplicador;
                $importe_iva_importe = $vta_nota_credito->getImporteIvaImporte() * $multiplicador;
                $importe_tributo_base_imponible = $vta_nota_credito->getImporteTributoBaseImponible() * $multiplicador;
                $importe_tributo_importe = $vta_nota_credito->getImporteTributoImporte() * $multiplicador;

                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // -------------------------------------------------------------
                // punto de venta (total)
                // -------------------------------------------------------------
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$vta_punto_venta->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$vta_punto_venta->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$vta_punto_venta->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$vta_punto_venta->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$vta_punto_venta->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$vta_punto_venta->getCodigo()] += $importe_tributo_importe;

                // punto de venta (detalle)
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto venta / condicion iva (total)
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // punto venta / condicion iva (detalle)
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // -------------------------------------------------------------
                // condicion iva (total)
                // -------------------------------------------------------------
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // condicion iva (detalle)
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                $arr_iva_full = $vta_nota_credito->getArrIvaNotaCreditoFull();
                //Gral::prr($arr_iva_full);
                foreach ($arr_iva_full as $i => $arr_iva) {
                    $gral_tipo_iva = GralTipoIva::getOxCodigo($i);

                    $importe_iva_base_imponible = $vta_nota_credito->getImporteIvaBaseImponible($i, $arr_iva_full) * $multiplicador;
                    $importe_iva_importe = $vta_nota_credito->getImporteIvaImporte($i, $arr_iva_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;

                    // condicion iva / tipo iva (total)
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;
                }

                $arr_tributos_full = $vta_nota_credito->getArrTributoNotaCreditoFull();
                foreach ($arr_tributos_full as $i => $arr_tributo) {
                    $vta_tributo = VtaTributo::getOxCodigo($i);

                    $importe_tributo_base_imponible = $vta_nota_credito->getImporteTributoBaseImponible($i, $arr_tributos_full) * $multiplicador;
                    $importe_tributo_importe = $vta_nota_credito->getImporteTributoImporte($i, $arr_tributos_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['CANTIDAD'] += 1;

                    // condicion iva / tipo iva (total)
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;
                    $arr_totales['NOTA_DE_CREDITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['CANTIDAD'] += 1;
                }
            }
        }

        // ---------------------------------------------------------------------
        // Nota de Debito
        // ---------------------------------------------------------------------
        if (count($vta_nota_debitos) > 0) {
            foreach ($vta_nota_debitos as $vta_nota_debito) {
                $vta_nota_debito_tipo_estado = $vta_nota_debito->getVtaNotaDebitoTipoEstado();
                $vta_punto_venta = $vta_nota_debito->getVtaPuntoVenta();
                $gral_condicion_iva = $vta_nota_debito->getGralCondicionIva();

                $multiplicador = 1;

                $importe_total = $vta_nota_debito->getImporteTotal() * $multiplicador;
                $importe_subtotal = $vta_nota_debito->getImporteSubtotal() * $multiplicador;
                $importe_iva_base_imponible = $vta_nota_debito->getImporteIvaBaseImponible() * $multiplicador;
                $importe_iva_importe = $vta_nota_debito->getImporteIvaImporte() * $multiplicador;
                $importe_tributo_base_imponible = $vta_nota_debito->getImporteTributoBaseImponible() * $multiplicador;
                $importe_tributo_importe = $vta_nota_debito->getImporteTributoImporte() * $multiplicador;

                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // -------------------------------------------------------------
                // punto de venta (total)
                // -------------------------------------------------------------
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$vta_punto_venta->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$vta_punto_venta->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$vta_punto_venta->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$vta_punto_venta->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$vta_punto_venta->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$vta_punto_venta->getCodigo()] += $importe_tributo_importe;

                // punto de venta (detalle)
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // punto venta / condicion iva (total)
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // punto venta / condicion iva (detalle)
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                // -------------------------------------------------------------
                // condicion iva (total)
                // -------------------------------------------------------------
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'][$gral_condicion_iva->getCodigo()] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'][$gral_condicion_iva->getCodigo()] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'][$gral_condicion_iva->getCodigo()] += $importe_tributo_importe;

                // condicion iva (detalle)
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;

                $arr_iva_full = $vta_nota_debito->getArrIvaNotaDebitoFull();
                //Gral::prr($arr_iva_full);
                foreach ($arr_iva_full as $i => $arr_iva) {
                    $gral_tipo_iva = GralTipoIva::getOxCodigo($i);

                    $importe_iva_base_imponible = $vta_nota_debito->getImporteIvaBaseImponible($i, $arr_iva_full) * $multiplicador;
                    $importe_iva_importe = $vta_nota_debito->getImporteIvaImporte($i, $arr_iva_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;

                    // condicion iva / tipo iva (total)
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_BASE_IMPONIBLE'] += $importe_iva_base_imponible;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_IVA_IMPORTE'] += $importe_iva_importe;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TIPO_IVA']['TIPO_IVA'][$gral_tipo_iva->getCodigo()]['CANTIDAD'] += 1;
                }

                $arr_tributos_full = $vta_nota_debito->getArrTributoNotaDebitoFull();
                foreach ($arr_tributos_full as $i => $arr_tributo) {
                    $vta_tributo = VtaTributo::getOxCodigo($i);

                    $importe_tributo_base_imponible = $vta_nota_debito->getImporteTributoBaseImponible($i, $arr_tributos_full) * $multiplicador;
                    $importe_tributo_importe = $vta_nota_debito->getImporteTributoImporte($i, $arr_tributos_full) * $multiplicador;

                    // punto venta / condicione iva / tipo iva (total)
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_PUNTO_VENTA']['PUNTO_VENTA'][$vta_punto_venta->getCodigo()]['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['CANTIDAD'] += 1;

                    // condicion iva / tipo iva (total)
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_TOTAL'] += $importe_total;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_SUBTOTAL'] += $importe_subtotal;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_BASE_IMPONIBLE'] += $importe_tributo_base_imponible;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['TOTAL']['IMPORTE_COMPROBANTE_OTRO_TRIBUTO_IMPORTE'] += $importe_tributo_importe;
                    $arr_totales['NOTA_DE_DEBITOS']['POR_CONDICION_IVA']['CONDICION_IVA'][$gral_condicion_iva->getCodigo()]['POR_TRIBUTO']['TRIBUTO'][$vta_tributo->getCodigo()]['CANTIDAD'] += 1;
                }
            }
        }

        return $arr_totales;
    }

    /**
     * @creado 13/08/2018
     * @creado_por Pablo Rosen
     */
    static function getVtaComprobantes($gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $gral_mes_id = false, $anio = false, $cli_cliente_id = false, $incluir_recibos = false, $orden = 'DESC', $vta_vendedor_id = false, $incluir_ajustes = false, $cli_categoria_id = false) {
        $vta_comprobantes = array();

        // -----------------------------------------------------------------------------
        // Creo Criterios de VtaFactura
        // -----------------------------------------------------------------------------
        $criterio_factura = new Criterio();
        $criterio_factura->add('', 'true', Criterio::SINCOMPARADOR, false, '');
        $criterio_factura->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
        //$criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
        $criterio_factura->add(VtaFacturaTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);

        if ($gral_empresa_id != 0) {
            $criterio_factura->add(VtaFactura::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if($cli_categoria_id != 0){
            $criterio_factura->add(CliCategoria::GEN_ATTR_ID, $cli_categoria_id, Criterio::IGUAL);            
        }
        if ($cli_cliente_id != 0) {
            $criterio_factura->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id != 0) {
            $criterio_factura->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($fecha_desde) {
            $criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_factura->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_factura->add(VtaFactura::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_factura->add(VtaFactura::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }

        $criterio_factura->addTabla(VtaFactura::GEN_TABLA);
        $criterio_factura->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_factura->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        $criterio_factura->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_factura->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
        $criterio_factura->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        $criterio_factura->setCriterios();
        $vta_facturas = VtaFactura::getVtaFacturas($paginador = null, $criterio_factura);


        // -----------------------------------------------------------------------------
        // Creo Criterios de VtaNotaDebito
        // -----------------------------------------------------------------------------
        $criterio_nota_debito = new Criterio();
        $criterio_nota_debito->add('', 'true', Criterio::SINCOMPARADOR, false, '');
        $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
        //$criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_CODIGO, VtaNotaDebitoTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
        $criterio_nota_debito->add(VtaNotaDebitoTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);

        if ($gral_empresa_id != 0) {
            $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if($cli_categoria_id != 0){
            $criterio_nota_debito->add(CliCategoria::GEN_ATTR_ID, $cli_categoria_id, Criterio::IGUAL);            
        }
        if ($cli_cliente_id != 0) {
            $criterio_nota_debito->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id != 0) {
            $criterio_nota_debito->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($fecha_desde) {
            $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_nota_debito->add(VtaNotaDebito::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }

        $criterio_nota_debito->addTabla(VtaNotaDebito::GEN_TABLA);
        $criterio_nota_debito->addRealJoin(VtaNotaDebitoTipoEstado::GEN_TABLA, VtaNotaDebitoTipoEstado::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_nota_debito->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        $criterio_nota_debito->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_nota_debito->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
        $criterio_nota_debito->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        $criterio_nota_debito->setCriterios();
        $vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos($paginador, $criterio_nota_debito);


        // -----------------------------------------------------------------------------
        // Creo Criterios de VtaNotaCredito
        // -----------------------------------------------------------------------------
        $criterio_nota_credito = new Criterio();
        $criterio_nota_credito->add('', 'true', Criterio::SINCOMPARADOR, false, '');
        $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
        //$criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_CODIGO, VtaNotaCreditoTipoEstado::TIPO_ANULADO_SIN_CAE, Criterio::DISTINTO);
        $criterio_nota_credito->add(VtaNotaCreditoTipoEstado::GEN_ATTR_APROBADO_AFIP, 1, Criterio::IGUAL);

        if ($gral_empresa_id != 0) {
            $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if($cli_categoria_id != 0){
            $criterio_nota_credito->add(CliCategoria::GEN_ATTR_ID, $cli_categoria_id, Criterio::IGUAL);            
        }
        if ($cli_cliente_id != 0) {
            $criterio_nota_credito->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id != 0) {
            $criterio_nota_credito->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($fecha_desde) {
            $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_nota_credito->add(VtaNotaCredito::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }

        $criterio_nota_credito->addTabla(VtaNotaCredito::GEN_TABLA);
        $criterio_nota_credito->addRealJoin(VtaNotaCreditoTipoEstado::GEN_TABLA, VtaNotaCreditoTipoEstado::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_nota_credito->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        $criterio_nota_credito->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_nota_credito->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
        $criterio_nota_credito->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        $criterio_nota_credito->setCriterios();
        $vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos($paginador, $criterio_nota_credito);

        if ($incluir_recibos) {
            // -----------------------------------------------------------------------------
            // Creo Criterios de VtaRecibo
            // -----------------------------------------------------------------------------
            $criterio_recibo = new Criterio();
            $criterio_recibo->add('', 'true', Criterio::SINCOMPARADOR, false, '');
            $criterio_recibo->add(VtaReciboTipoEstado::GEN_ATTR_CODIGO, VtaReciboTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);

            if ($gral_empresa_id != 0) {
                $criterio_recibo->add(VtaRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
            }
            if($cli_categoria_id != 0){
                $criterio_recibo->add(CliCategoria::GEN_ATTR_ID, $cli_categoria_id, Criterio::IGUAL);            
            }
            if ($cli_cliente_id != 0) {
                $criterio_recibo->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
            }
            if ($vta_vendedor_id != 0) {
                $criterio_recibo->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
            }
            if ($fecha_desde) {
                $criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
            }
            if ($fecha_hasta) {
                $criterio_recibo->add(VtaRecibo::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
            }
            if ($gral_mes_id) {
                $criterio_recibo->add(VtaRecibo::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
            }
            if ($anio) {
                $criterio_recibo->add(VtaRecibo::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
            }

            $criterio_recibo->addTabla(VtaRecibo::GEN_TABLA);
            $criterio_recibo->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
            $criterio_recibo->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
            $criterio_recibo->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
            $criterio_recibo->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
            $criterio_recibo->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
            $criterio_recibo->setCriterios();
            $vta_recibos = VtaRecibo::getVtaRecibos($paginador, $criterio_recibo);
        }

        // -----------------------------------------------------------------------------
        // Creo Criterios de VtaAjusteDebe Debe
        // -----------------------------------------------------------------------------
        $criterio_ajuste_debe = new Criterio();
        //$criterio_ajuste_debe->setAmbiguo(false);
        //$criterio_ajuste_debe->addDistinct(true);

        $criterio_ajuste_debe->add('', 'true', '', false, "");
        //$criterio_ajuste_debe->add(VtaAjusteDebeTipoEstado::GEN_ATTR_CODIGO, VtaAjusteDebeTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);
        $criterio_ajuste_debe->add(VtaTipoAjusteDebe::GEN_ATTR_CODIGO, VtaTipoAjusteDebe::TIPO_AJUSTE_X_DEBE, Criterio::IGUAL);

        if ($gral_empresa_id != 0) {
            $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if($cli_categoria_id != 0){
            $criterio_ajuste_debe->add(CliCategoria::GEN_ATTR_ID, $cli_categoria_id, Criterio::IGUAL);            
        }
        if ($cli_cliente_id != 0) {
            $criterio_ajuste_debe->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id != 0) {
            $criterio_ajuste_debe->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }        
        if ($fecha_desde) {
            $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_ajuste_debe->add(VtaAjusteDebe::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }
        
        $criterio_ajuste_debe->addTabla(VtaAjusteDebe::GEN_TABLA);
        $criterio_ajuste_debe->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->addRealJoin(VtaTipoAjusteDebe::GEN_TABLA, VtaTipoAjusteDebe::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
        $criterio_ajuste_debe->setCriterios();
        $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes($paginador, $criterio_ajuste_debe);


        // -----------------------------------------------------------------------------
        // Creo Criterios de VtaAjusteHaber Haber
        // -----------------------------------------------------------------------------
        $criterio_ajuste_haber = new Criterio();
        //$criterio_ajuste_haber->setAmbiguo(false);
        //$criterio_ajuste_haber->addDistinct(true);

        $criterio_ajuste_haber->add('', 'true', '', false, "");
        $criterio_ajuste_haber->add(VtaAjusteHaberTipoEstado::GEN_ATTR_CODIGO, VtaAjusteHaberTipoEstado::TIPO_ANULADO, Criterio::DISTINTO);
        $criterio_ajuste_haber->add(VtaTipoAjusteHaber::GEN_ATTR_CODIGO, VtaTipoAjusteHaber::TIPO_AJUSTE_X_HABER, Criterio::IGUAL);

        if ($gral_empresa_id != 0) {
            $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        if($cli_categoria_id != 0){
            $criterio_ajuste_haber->add(CliCategoria::GEN_ATTR_ID, $cli_categoria_id, Criterio::IGUAL);            
        }
        if ($cli_cliente_id != 0) {
            $criterio_ajuste_haber->add(CliCliente::GEN_ATTR_ID, $cli_cliente_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id != 0) {
            $criterio_ajuste_haber->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }        
        if ($fecha_desde) {
            $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        }
        if ($gral_mes_id) {
            $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_GRAL_MES_ID, $gral_mes_id, Criterio::IGUAL);
        }
        if ($anio) {
            $criterio_ajuste_haber->add(VtaAjusteHaber::GEN_ATTR_ANIO, $anio, Criterio::IGUAL);
        }
        
        $criterio_ajuste_haber->addTabla(VtaAjusteHaber::GEN_TABLA);
        $criterio_ajuste_haber->addRealJoin(VtaAjusteHaberTipoEstado::GEN_TABLA, VtaAjusteHaberTipoEstado::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->addRealJoin(VtaTipoAjusteHaber::GEN_TABLA, VtaTipoAjusteHaber::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCliente::GEN_ATTR_CLI_CATEGORIA_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->addRealJoin(GralZonaCliCliente::GEN_TABLA, GralZonaCliCliente::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->addRealJoin(GralZona::GEN_TABLA, GralZona::GEN_ATTR_ID, GralZonaCliCliente::GEN_ATTR_GRAL_ZONA_ID, 'LEFT JOIN');
        $criterio_ajuste_haber->setCriterios();
        $vta_ajuste_habers = VtaAjusteHaber::getVtaAjusteHabers($paginador, $criterio_ajuste_haber);

        
        // -----------------------------------------------------------------------------
        // se unifica el array
        // -----------------------------------------------------------------------------
        foreach ($vta_facturas as $vta_factura) {
            $vta_comprobantes[] = $vta_factura;
        }

        foreach ($vta_nota_debitos as $vta_nota_debito) {
            $vta_comprobantes[] = $vta_nota_debito;
        }

        foreach ($vta_nota_creditos as $vta_nota_credito) {
            $vta_comprobantes[] = $vta_nota_credito;
        }

        if ($incluir_recibos) {
            foreach ($vta_recibos as $vta_recibo) {
                $vta_comprobantes[] = $vta_recibo;
            }
        }

        // -----------------------------------------------------------------------------
        // solo se incluyen los ajustes, si el usuario opera con ajustes
        // -----------------------------------------------------------------------------
        $filtro_incluir_ajustes = Gral::getSes(VtaComprobante::SES_INCLUIR_AJUSTES);
        if ($filtro_incluir_ajustes == 1 || $incluir_ajustes) {

            foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
                $vta_comprobantes[] = $vta_ajuste_debe;
            }

            foreach ($vta_ajuste_habers as $vta_ajuste_haber) {
                $vta_comprobantes[] = $vta_ajuste_haber;
            }
        }        
        
        usort($vta_comprobantes, 'self::ordenarComprobantes');

        return $vta_comprobantes;
    }

    static function ordenarComprobantes($vta_comprobante, $vta_comprobante_comparacion) {
        //$fecha_emision = strtotime(date($vta_comprobante->getFechaEmision()));
        //$fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getFechaEmision()));
        
        //$fecha_emision = strtotime(date($vta_comprobante->getCreado()));
        //$fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getCreado()));
        //$fecha_emision = $vta_comprobante->getId();
        //$fecha_emision_comparacion = $vta_comprobante_comparacion->getId();

        $fecha_emision = $vta_comprobante->getCreado();
        $fecha_emision_comparacion = $vta_comprobante_comparacion->getCreado();
        
        if ($fecha_emision == $fecha_emision_comparacion)
            return 0;

        return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
    }


    /**
     * @creado_por Esteban Martinez
     * @creado 07/02/2019
     */
    static function getVtaComprobantesNoContabilizados($gral_empresa_id, $fecha_desde, $fecha_hasta, $gral_mes_id, $anio)
    {
        $falta_contabilizar_comprobantes = false;
        $arr_vta_comprobantes = array();
        $vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa_id, $fecha_desde = false, $fecha_hasta = false, $gral_mes_id, $anio);
        
        foreach($vta_comprobantes as $vta_comprobante)
        {
            $class = get_class($vta_comprobante);

            if($class == 'VtaFactura')
            {
                $vta_comprobante_tipo_estado = $vta_comprobante->getVtaFacturaTipoEstado();
                if(!$vta_comprobante_tipo_estado->getContabilizable())
                {
                    $vta_facturas[] = $vta_comprobante;
}
            }
            
            if($class == 'VtaNotaDebito')
            {
                $vta_comprobante_tipo_estado = $vta_comprobante->getVtaNotaDebitoTipoEstado();
                if(!$vta_comprobante_tipo_estado->getContabilizable())
                {
                    $vta_nota_debitos[] = $vta_comprobante;
                }
            }
            
            if($class == 'VtaNotaCredito')
            {
                $vta_comprobante_tipo_estado = $vta_comprobante->getVtaNotaCreditoTipoEstado();
                if(!$vta_comprobante_tipo_estado->getContabilizable())
                {
                    $vta_nota_creditos[] = $vta_comprobante;
                }
            }
            
            if($class == 'VtaRecibo')
            {
                $vta_comprobante_tipo_estado = $vta_comprobante->getVtaReciboTipoEstado();
                if(!$vta_comprobante_tipo_estado->getContabilizable())
                {
                    $vta_recibos[] = $vta_comprobante;
                }
            }
        }

        if(count($vta_facturas) > 0){
            $arr_vta_comprobantes['VtaComprobantes']['VtaFactura']     = $vta_facturas;    
        }

        if(count($vta_nota_debitos) > 0){
            $arr_vta_comprobantes['VtaComprobantes']['VtaNotaDebito']  = $vta_nota_debitos;
        }

        if(count($vta_nota_creditos) > 0){
            $arr_vta_comprobantes['VtaComprobantes']['VtaNotaCredito'] = $vta_nota_creditos;
        }

        if(count($vta_recibos) > 0){
            $arr_vta_comprobantes['VtaComprobantes']['VtaRecibo']      = $vta_recibos;
        }
        
        return $arr_vta_comprobantes;
    }

}
