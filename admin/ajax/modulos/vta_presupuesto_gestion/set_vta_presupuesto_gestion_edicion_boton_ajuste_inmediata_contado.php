<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxCodigo(VtaPresupuestoTipoEmision::TIPO_INMEDIATA_CONTADO);
$vta_presupuesto_tipo_venta = VtaPresupuestoTipoVenta::getOxCodigo(VtaPresupuestoTipoVenta::TIPO_VENTA_Z);
$vta_presupuesto_tipo_despacho = VtaPresupuestoTipoDespacho::getOxCodigo(VtaPresupuestoTipoDespacho::TIPO_RETIRO_SUCURSAL);
$cmb_gral_sucursal_retiro = $gral_sucursal_autenticada->getId();

include "set_control_vta_presupuesto_ajuste_inmediata_contado.php";

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

        $vta_presupuesto->setPorcentaje($cmb_porcentaje_iva);
        //$vta_presupuesto->setPorcentaje(100);

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
        $vta_remito_ajuste = VtaRemitoAjuste::setInicializarVtaRemitoAjusteDesdeVentaInmediataContado($vta_presupuesto, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cmb_confirmacion_cli_cliente_id, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $cmb_confirmacion_pan_panol_id, $observacion = 'Ajuste Inmediata al Contado', $cmb_confirmacion_vta_tipo_remito_ajuste_id, $cmb_confirmacion_gral_empresa_id, $cmb_confirmacion_vta_punto_venta_id);

        // ---------------------------------------------------------------------
        // Se genera el ajuste debe
        // ---------------------------------------------------------------------
        $vta_ajuste_debe = VtaAjusteDebe::setInicializarVtaAjusteDebeDesdeVentaInmediataContado(
                        $vta_presupuesto, $cmb_confirmacion_vta_preventista_id, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cmb_confirmacion_cli_cliente_id, $txt_confirmacion_persona_descripcion, $cmb_confirmacion_gral_tipo_documento_id, $txt_confirmacion_persona_documento, $txt_confirmacion_persona_email, $cmb_confirmacion_gral_empresa_id, $cmb_confirmacion_vta_punto_venta_id, $cmb_confirmacion_gral_fp_forma_pago_id, $cmb_confirmacion_gral_fp_cuota_id, $cmb_confirmacion_gral_actividad_id, $cmb_confirmacion_gral_escenario_id, $vta_tipo_factura_id = 0, $ws_fe_param_tipo_concepto_id = 1, $txa_confirmacion_nota_publica, $observacion = 'Venta Inmediata al Contado'
        );

        // ---------------------------------------------------------------------
        // Se genera el ajuste haber
        // ---------------------------------------------------------------------
        if ($vta_ajuste_debe) {
            $vta_ajuste_haber = VtaAjusteHaber::setInicializarVtaAjusteHaberMultiItemDesdeVentaInmediataContado(
                            $vta_presupuesto, $vta_ajuste_debe, $cmb_vta_recibo_item_generico_vta_recibo_concepto_ids, $txt_vta_recibo_item_generico_descripcions, $txt_vta_recibo_item_generico_referencias, $cmb_vta_recibo_item_generico_gral_moneda_ids, $txt_vta_recibo_item_generico_importe_unitario_reals, $txt_vta_recibo_item_generico_importe_unitarios, $cmb_vta_recibo_item_generico_gral_fp_forma_pago_ids, $cmb_fnd_caja_id, $var_sesion_random, $observacion = 'Ajuste Inmediata de Contado'
            );
        }

        // --------------------------------------------------------------------
        // se concilian la factura y el recibo
        // --------------------------------------------------------------------
        if ($vta_ajuste_haber) {
            $vta_ajuste_debe_ids[] = $vta_ajuste_debe->getId();
            $vta_ajuste_haber->setImputarVtaComprobante($recalcular_estado = true, null, null, $vta_ajuste_debe_ids);
        }
        
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