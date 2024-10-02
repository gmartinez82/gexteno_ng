<?php

$user = UsUsuario::autenticado();
$vta_vendedor = $user->getVtaVendedor();

if ($dbsug_cli_cliente_id != 'null' && $dbsug_cli_cliente_id != '') {
    $cli_cliente = CliCliente::getOxId($dbsug_cli_cliente_id);
    if ($cli_cliente) {
        $vta_presupuesto->setPersonaDescripcion($cli_cliente->getDescripcion());
        $vta_presupuesto->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());
        $vta_presupuesto->setPersonaDocumento($cli_cliente->getCuit());
        $vta_presupuesto->setPersonaEmail($cli_cliente->getEmail());
        
        $vta_presupuesto->setCliCentroRecepcionId($cmb_cli_centro_recepcion_id);        
    }
} else {
    $vta_presupuesto->setPersonaDescripcion($txt_persona_descripcion);
    $vta_presupuesto->setGralTipoDocumentoId($cmb_gral_tipo_documento_id);
    $vta_presupuesto->setPersonaDocumento($txt_persona_documento);
    $vta_presupuesto->setPersonaEmail($txt_persona_email);
    
    $vta_presupuesto->setCliCentroRecepcionId('null');        
}

if ($vta_vendedor) {
    //$vta_presupuesto->setVtaVendedorId($vta_vendedor->getId());
}

$vta_presupuesto->setVtaPreventistaId($cmb_vta_preventista_id);
$vta_presupuesto->setGralFpFormaPagoId($cmb_gral_fp_forma_pago_id);
$vta_presupuesto->setGralFpCuotaId($cmb_gral_fp_cuota_id);
$vta_presupuesto->setVtaCompradorId($cmb_vta_comprador_id);
$vta_presupuesto->setNotaInterna($txa_nota_interna);
$vta_presupuesto->setNotaRecordatorio($txa_nota_recordatorio);
$vta_presupuesto->setObservacion($txa_observacion);
$vta_presupuesto->setFecha($txt_fecha_presupuesto_to_db);
$vta_presupuesto->setFechaVencimiento($txt_fecha_vencimiento_to_db);
$vta_presupuesto->setFechaEntrega($txt_fecha_entrega_to_db);
$vta_presupuesto->setFechaRecordatorio($txt_fecha_recordatorio_to_db);

$vta_presupuesto->setGralActividadId($cmb_gral_actividad_id);
$vta_presupuesto->setGralEscenarioId($cmb_gral_escenario_id);
$vta_presupuesto->setCliCentroRecepcionId($cmb_cli_centro_recepcion_id);
$vta_presupuesto->setVtaPresupuestoTipoVentaId($cmb_vta_presupuesto_tipo_venta_id);

// -----------------------------------------------------------------------------
// se registra el porcentaje de IVA afectado
// -----------------------------------------------------------------------------
if(!is_numeric($cmb_porcentaje_iva)){
    $cmb_porcentaje_iva = 100; // excepcion para cuando no tiene el dato cargado
}
$vta_presupuesto->setPorcentaje($cmb_porcentaje_iva);

// -----------------------------------------------------------------------------
// se registra el tipo de emision del presupuesto
// -----------------------------------------------------------------------------
if($vta_presupuesto_tipo_emision){
    $vta_presupuesto->setVtaPresupuestoTipoEmisionId($vta_presupuesto_tipo_emision->getId());
}

// -----------------------------------------------------------------------------
// se registra el tipo de venta del presupuesto
// -----------------------------------------------------------------------------
if($vta_presupuesto_tipo_venta){
    $vta_presupuesto->setVtaPresupuestoTipoVentaId($vta_presupuesto_tipo_venta->getId());
}

// -----------------------------------------------------------------------------
// se registra el tipo de despacho del presupuesto
// -----------------------------------------------------------------------------
if($vta_presupuesto_tipo_despacho){
    $vta_presupuesto->setVtaPresupuestoTipoDespachoId($vta_presupuesto_tipo_despacho->getId());
    
    if($vta_presupuesto_tipo_despacho->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_RETIRO_SUCURSAL){
        $vta_presupuesto->setGralSucursalRetiro($cmb_gral_sucursal_retiro);
        $vta_presupuesto->setCliCentroRecepcionId(null);
    }elseif($vta_presupuesto_tipo_despacho->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_ENVIO_DOMICILIO){
        $vta_presupuesto->setCliCentroRecepcionId($cmb_cli_centro_recepcion_id);
        $vta_presupuesto->setGralSucursalRetiro(null);
    }
}

$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);

$hay_aprobacion_parcial = false;
if ($vta_presupuesto_ins_insumos) {
    foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {

        // se actualiza solamente si el insumo no genero anteriormente OV
        $vta_orden_venta = $vta_presupuesto_ins_insumo->getVtaOrdenVenta();
        if (!$vta_orden_venta) {
            $txt_cantidad = $txt_cantidads[$vta_presupuesto_ins_insumo->getId()];
            $vta_presupuesto_ins_insumo->setCantidad($txt_cantidad);
            $vta_presupuesto_ins_insumo->save();
        } else {
            $hay_aprobacion_parcial = true;
        }
    }
}

//$vta_presupuesto->setActualizarImporteItemsPresupuestoXInsTipoListaPrecio($ins_tipo_lista_precio->getId());
$vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();

//$vta_presupuesto->setInsTipoListaPrecioId($cmb_ins_tipo_lista_precio_id); // no se puede cambiar una vez generado el presupuesto

// se determina si se puede cambiar el cliente o no de acuerdo al estado de generacion del presupuesto
if (!$hay_aprobacion_parcial) {
    $vta_presupuesto->setCliClienteId($dbsug_cli_cliente_id);
} else {
    
}

$vta_presupuesto->setEstado(1);
$vta_presupuesto->save();
//Gral::prr($vta_presupuesto);
