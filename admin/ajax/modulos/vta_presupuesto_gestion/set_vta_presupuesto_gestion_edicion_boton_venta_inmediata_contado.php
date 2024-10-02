<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxCodigo(VtaPresupuestoTipoEmision::TIPO_INMEDIATA_CONTADO);
$vta_presupuesto_tipo_venta = VtaPresupuestoTipoVenta::getOxCodigo(VtaPresupuestoTipoVenta::TIPO_VENTA_A);
$vta_presupuesto_tipo_despacho = VtaPresupuestoTipoDespacho::getOxCodigo(VtaPresupuestoTipoDespacho::TIPO_RETIRO_SUCURSAL);
$cmb_gral_sucursal_retiro = $gral_sucursal_autenticada->getId();

include "set_control_vta_presupuesto_venta_inmediata_contado.php";

if (!$arr["error"]) {
    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
    if ($vta_presupuesto) {
        
        include "set_vta_presupuesto_guardar.php";

        // ---------------------------------------------------------------------
        // se sobreescribe datos del cliente con los datos confirmacion
        // ---------------------------------------------------------------------
        if ($cmb_confirmacion_cli_cliente_id != 'null' && $cmb_confirmacion_cli_cliente_id != '') {
            $cli_cliente = CliCliente::getOxId($cmb_confirmacion_cli_cliente_id);
            if ($cli_cliente) {
                $vta_presupuesto->setPersonaDescripcion($cli_cliente->getDescripcion());
                $vta_presupuesto->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());
                $vta_presupuesto->setPersonaDocumento($cli_cliente->getCuit());
                $vta_presupuesto->setPersonaEmail($cli_cliente->getEmail());
            }
        } else {
            $vta_presupuesto->setPersonaDescripcion($txt_confirmacion_persona_descripcion);
            $vta_presupuesto->setGralTipoDocumentoId($cmb_confirmacion_gral_tipo_documento_id);
            $vta_presupuesto->setPersonaDocumento($txt_confirmacion_persona_documento);
            $vta_presupuesto->setPersonaEmail($txt_confirmacion_persona_email);
        }

        // ---------------------------------------------------------------------
        // se sobreescribe la forma de pago de presupuesto
        // ---------------------------------------------------------------------
        $vta_presupuesto->setGralFpFormaPagoId($cmb_confirmacion_gral_fp_forma_pago_id);
        $vta_presupuesto->setGralFpCuotaId($cmb_confirmacion_gral_fp_cuota_id);
        $vta_presupuesto->setGralActividadId($cmb_confirmacion_gral_actividad_id);
        $vta_presupuesto->setGralEscenarioId($cmb_confirmacion_gral_escenario_id);
        $vta_presupuesto->save();

        // ---------------------------------------------------------------------
        // se registran las OV
        // ---------------------------------------------------------------------
        $vta_orden_ventas = $vta_presupuesto->setGenerarVtaOrdenVentas($chk_vta_presupuesto_ins_insumo);


        $cli_cliente_id = 0;
        $cli_cliente = $vta_presupuesto->getCliCliente();
        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            $cli_cliente_id = $cli_cliente->getId();
        }
        foreach ($vta_orden_ventas as $vta_orden_venta) {
            $vta_orden_venta_ids[$vta_orden_venta->getId()] = $vta_orden_venta->getId();
            $vta_orden_venta_cantidads[$vta_orden_venta->getId()] = $vta_orden_venta->getCantidad();

            // se fuerza el estado de finalizado por ser una venta contado inmediata
            $vta_orden_venta->setVtaOrdenVentaEstado(VtaOrdenVentaTipoEstado::TIPO_FINALIZADO);
        }

        // ---------------------------------------------------------------------
        // Se genera el remito
        // ---------------------------------------------------------------------
        $vta_remito = VtaRemito::setInicializarVtaRemitoDesdeVentaInmediataContado($vta_presupuesto, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cmb_confirmacion_cli_cliente_id, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $cmb_confirmacion_pan_panol_id, $observacion = 'Venta Inmediata al Contado', $cmb_confirmacion_vta_tipo_remito_id, $cmb_confirmacion_gral_empresa_id, $cmb_confirmacion_vta_punto_venta_id);


        // ---------------------------------------------------------------------
        // Se genera la factura
        // ---------------------------------------------------------------------
        $vta_factura = VtaFactura::setInicializarVtaFacturaDesdeVentaInmediataContado(
                        $vta_presupuesto, $cmb_confirmacion_vta_preventista_id, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cmb_confirmacion_cli_cliente_id, $txt_confirmacion_persona_descripcion, $cmb_confirmacion_gral_tipo_documento_id, $txt_confirmacion_persona_documento, $txt_confirmacion_persona_email, $cmb_confirmacion_gral_empresa_id, $cmb_confirmacion_vta_punto_venta_id, $cmb_confirmacion_gral_fp_forma_pago_id, $cmb_confirmacion_gral_fp_cuota_id, $cmb_confirmacion_gral_actividad_id, $cmb_confirmacion_gral_escenario_id, $vta_tipo_factura_id = 0, $ws_fe_param_tipo_concepto_id = 1, $txa_confirmacion_nota_publica, $observacion = 'Venta Inmediata al Contado'
        );

        // ---------------------------------------------------------------------
        // Se genera el recibo
        // ---------------------------------------------------------------------
        if ($vta_factura) {
            $vta_recibo = VtaRecibo::setInicializarVtaReciboMultiItemDesdeVentaInmediataContado($vta_presupuesto, $vta_factura, $cmb_vta_recibo_item_generico_vta_recibo_concepto_ids, $txt_vta_recibo_item_generico_descripcions, $txt_vta_recibo_item_generico_referencias, $cmb_vta_recibo_item_generico_gral_moneda_ids, $txt_vta_recibo_item_generico_importe_unitario_reals, $txt_vta_recibo_item_generico_importe_unitarios, $cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids, $cmb_fnd_caja_id, $var_sesion_random, $observacion = 'Venta Inmediata de Contado');
        }

        // --------------------------------------------------------------------
        // se concilian la factura y el recibo
        // --------------------------------------------------------------------
        if ($vta_recibo) {
            $vta_factura_ids[] = $vta_factura->getId();
            $vta_recibo->setImputarVtaComprobante($recalcular_estado = true, null, $vta_factura_ids);
        }
        
        // --------------------------------------------------------------------
        // se autoriza Factura
        // --------------------------------------------------------------------        
        $vta_factura->setAutorizarVentaInmediataContado($observacion);
        
        /*
        $vta_punto_venta = $vta_factura->getVtaPuntoVenta();
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
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la factura al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE, $observacion);
        }
        */

        // --------------------------------------------------------------------
        // se concilian la factura y el recibo (forzado post autorizacion)
        // --------------------------------------------------------------------
        if ($vta_recibo) {
            $vta_factura_ids[] = $vta_factura->getId();
            $vta_recibo->setImputarVtaComprobante($recalcular_estado = true, null, $vta_factura_ids);
        }

        $arr["vta_presupuesto_id"] = $vta_presupuesto->getId();        
        $arr["vta_factura_id"] = $vta_factura->getId();        
        $arr["vta_factura_hash"] = $vta_factura->getHash();        
        $arr["vta_remito_id"] = $vta_remito->getId();        
        
        // ---------------------------------------------------------------------
        // se abandona el presupuesto
        // ---------------------------------------------------------------------
        VtaPresupuesto::abandonarPresupuesto();

    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>