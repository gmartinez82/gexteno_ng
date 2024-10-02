<?php

include "_autoload.php";

$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);

$cmb_vta_remito_tipo_despacho_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_remito_tipo_despacho_id", 0);
$cmb_cli_centro_recepcion_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_centro_recepcion_id", 0);
$cmb_gral_sucursal_retiro = Gral::getVars(Gral::VARS_POST, "cmb_gral_sucursal_retiro", 0);

$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica", '');

$cmb_registrar_movimiento_stock = Gral::getVars(Gral::VARS_POST, "cmb_registrar_movimiento_stock", -1);
$cmb_pan_panol_id = Gral::getVars(Gral::VARS_POST, "cmb_pan_panol_id", 0);
$cmb_finalizar_remito = Gral::getVars(Gral::VARS_POST, "cmb_finalizar_remito", -1);

$cmb_vta_tipo_remito_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_tipo_remito_id", 0);
$cmb_gral_empresa_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_id", 0);
$cmb_vta_punto_venta_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_punto_venta_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if ($cmb_vta_remito_tipo_despacho_id == 0) {
    $arr["cmb_vta_remito_tipo_despacho_id"] = Lang::_lang("Debe seleccionar un tipo de despacho", true);
    $arr["error"] = true;
}else{
    $vta_remito_tipo_despacho = VtaRemitoTipoDespacho::getOxId($cmb_vta_remito_tipo_despacho_id);
    if($vta_remito_tipo_despacho){
        if($vta_remito_tipo_despacho->getCodigo() == VtaRemitoTipoDespacho::TIPO_ENVIO_DOMICILIO){
            if ($cmb_cli_centro_recepcion_id == 0) {
                $arr["cmb_cli_centro_recepcion_id"] = Lang::_lang("Debe seleccionar un centro de recepcion del cliente", true);
                $arr["error"] = true;
            }
        }elseif($vta_remito_tipo_despacho->getCodigo() == VtaRemitoTipoDespacho::TIPO_RETIRO_SUCURSAL){
            if ($cmb_gral_sucursal_retiro == 0) {
                $arr["cmb_gral_sucursal_retiro"] = Lang::_lang("Debe seleccionar una sucursal para el retiro", true);
                $arr["error"] = true;
            }            
        }
    }
}

if (Ctrl::esVacio($txa_nota_interna)) {
    $arr["txa_nota_interna"] = Lang::_lang("Debe indicar una nota interna", true);
    $arr["error"] = true;
}

if (is_null($vta_orden_venta_ids)) {
    $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Venta", true);
    $arr["error"] = true;
}

// control por cada orden de venta
foreach($vta_orden_venta_ids as $vta_orden_venta_id => $v){
    $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
    $vta_orden_venta_cantidad = $vta_orden_venta_cantidads[$vta_orden_venta_id];
    $cantidad_disponible_para_agregar = $vta_orden_venta->getCantidadDisponibleEnRemito();
    
    $ins_insumo = $vta_orden_venta->getInsInsumo();
    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
    $gral_sucursal = $vta_presupuesto->getGralSucursal();
    $pan_panol_vinculado = $gral_sucursal->getPanPanolVinculado();
    
    if($pan_panol_vinculado){
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_vinculado);
    }
    
    // se controla cantidad cero
    if($vta_orden_venta_cantidad <= 0){
        $arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("La cantidad debe ser mayor a cero", true).'<br />';
        $arr["error"] = true;            
    }
    
    // se controla que no se remita mas de lo autorizado
    if($vta_orden_venta_cantidad > $cantidad_disponible_para_agregar){
        $arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("La cantidad no puede ser mayor a lo autorizado", true).'<br />';
        $arr["error"] = true;            
    }

    if ($cmb_pan_panol_id != 0) {
        $pan_panol_seleccionado = PanPanol::getOxId($cmb_pan_panol_id);
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_seleccionado);

        if(!VtaRemito::REMITIR_SIN_STOCK){
            // -----------------------------------------------------------------
            // se controla que exista stock en el deposito correspondiente a la sucursal que vendio
            // -----------------------------------------------------------------
            if($ins_stock_resumen && $ins_insumo->getControlStock()){
                if($vta_orden_venta_cantidad > $ins_stock_resumen->getCantidad()){
                    $arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("No se autoriza remitir una cantidad mayor a lo que existe en stock del deposito", true).'<br />';
                    $arr["cmb_pan_panol_id"] = Lang::_lang("No se autoriza remitir una cantidad mayor a lo que existe en stock", true);
                    $arr["div_bloque_stock_".$vta_orden_venta->getId()] = Lang::_lang("Cantidad supera el stock del deposito", true).' '.$pan_panol_seleccionado->getCodigoCorto(). ' - Stock Actual: '.$ins_stock_resumen->getCantidad();
                    $arr["error"] = true;
                }
            }
            
            // -----------------------------------------------------------------
            // se controla que exista stock de la composicion, si lo fuese
            // -----------------------------------------------------------------
            $ins_insumo_composicions = $ins_insumo->getInsInsumoComposicions(null, null, true);
            foreach($ins_insumo_composicions as $ins_insumo_composicion){
                $ins_insumo_hijo = $ins_insumo_composicion->getInsInsumoComposicionObj();
                if ($ins_insumo_hijo->getControlStock()){
                    $ins_stock_resumen = $ins_insumo_hijo->getInsStockResumenEnPanol($pan_panol_seleccionado);
                    if($ins_stock_resumen){
                        if($vta_orden_venta_cantidad > $ins_stock_resumen->getCantidad()){
                            $arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("No se autoriza remitir una cantidad mayor a lo que existe en stock del deposito de la composicion", true).'<br />';
                            $arr["cmb_pan_panol_id"] = Lang::_lang("No se autoriza remitir una cantidad mayor a lo que existe en stock de la composicion", true);
                            $arr["div_bloque_stock_".$vta_orden_venta->getId()] = Lang::_lang("Cantidad supera el stock del deposito", true).' '.$pan_panol_seleccionado->getCodigoCorto(). ' - Stock Actual: '.$ins_stock_resumen->getCantidad().' ('.$ins_insumo_hijo->getDescripcion().')';
                            $arr["error"] = true;
                        }
                    }
                }
            }
        }
    }

    if($gral_sucursal){
        $arr_gral_sucursals_id[$gral_sucursal->getCodigo()] = $gral_sucursal;        
    }
}

if(VtaRemito::REMITIR_SIN_AUTORIZAR){
    if ($cmb_registrar_movimiento_stock == -1) {
        $arr["cmb_registrar_movimiento_stock"] = Lang::_lang("Debe seleccionar si desea o no mover stock en esta instancia", true);
        $arr["error"] = true;
    }elseif($cmb_registrar_movimiento_stock == 1){
        if ($cmb_pan_panol_id == 0) {
            $arr["cmb_pan_panol_id"] = Lang::_lang("Debe seleccionar un deposito", true);
            $arr["error"] = true;
        }

        if(VtaRemito::REMITIR_SIMPLIFICADO){
            if ($cmb_finalizar_remito == -1) {
                $arr["cmb_finalizar_remito"] = Lang::_lang("Debe seleccionar si desea dar por finalizado el remito", true);
                $arr["error"] = true;
            }    
        }    
    }
}

if ($cmb_vta_tipo_remito_id == 0) {
    $arr["cmb_vta_tipo_remito_id"] = Lang::_lang("Debe seleccionar un tipo de remito", true);
    $arr["error"] = true;
}
if ($cmb_gral_empresa_id == 0) {
    $arr["cmb_gral_empresa_id"] = Lang::_lang("Debe seleccionar una Empresa", true);
    $arr["error"] = true;
}
if ($cmb_vta_punto_venta_id == 0) {
    $arr["cmb_vta_punto_venta_id"] = Lang::_lang("Debe seleccionar un Punto de Venta", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    VtaRemito::setInicializarVtaRemito(false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id, $cmb_vta_remito_tipo_despacho_id, $cmb_cli_centro_recepcion_id, $cmb_gral_sucursal_retiro, $txa_nota_interna, $txa_nota_publica, $cmb_registrar_movimiento_stock, $cmb_pan_panol_id, $cmb_finalizar_remito, $cmb_vta_tipo_remito_id, $cmb_gral_empresa_id, $cmb_vta_punto_venta_id);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
