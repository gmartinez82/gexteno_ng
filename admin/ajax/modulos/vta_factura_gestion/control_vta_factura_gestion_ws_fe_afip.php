<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

// se obtienen variables si es factura de orden-venta
$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);

// se obtienen variables si es factura de item
$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_vta_factura_concepto_ids = Gral::getVars(Gral::VARS_POST, "cmb_vta_factura_concepto_id", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

// se realizan los controles de datos
$arr["error"] = false;

if ($cli_cliente_id == 0) {
    //$arr["cmb_cli_cliente_id"] = Lang::_lang("Debe indicar un cliente.", true);
    //$arr["error"] = true;
}

// -----------------------------------------------------------------------------
// controles de facturas por orden venta
// -----------------------------------------------------------------------------
if ($tipo == 'orden-venta') {
    
    if (is_null($vta_orden_venta_ids)) {
        $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Venta", true);
        $arr["error"] = true;
    }

    $arr_gral_sucursals_id = array();
    
    // control por cada orden de venta
    foreach($vta_orden_venta_ids as $vta_orden_venta_id => $v){
        $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
        $vta_orden_venta_cantidad = $vta_orden_venta_cantidads[$vta_orden_venta_id];
        $cantidad_disponible_para_agregar = $vta_orden_venta->getCantidadDisponibleEnFactura();

        $ins_insumo = $vta_orden_venta->getInsInsumo();
        $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
        $gral_sucursal = $vta_presupuesto->getGralSucursal();
        $pan_panol_vinculado = $gral_sucursal->getPanPanolVinculado();

        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_vinculado);
        
        // se controla cantidad cero
        if($vta_orden_venta_cantidad <= 0){
            $arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("La cantidad debe ser mayor a cero", true).'<br />';
            $arr["error"] = true;            
        }

        // se controla que la cantidad sea un dato numerico
        if(!Ctrl::esNumero($vta_orden_venta_cantidad)){
            $arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("La cantidad debe ser un valor numerico, para valores decimales debe utilizarse el PUNTO como separador decimal", true).'<br />';
            $arr["error"] = true;            
        }  
        
        // se controla que no se facture mas de lo autorizado
        if($vta_orden_venta_cantidad > $cantidad_disponible_para_agregar){
            //$arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("La cantidad no puede ser mayor a lo autorizado", true).'<br />';
            //$arr["error"] = true;            
        }  
        
        // se controla que exista stock en el deposito correspondiente a la sucursal que vendio
        if($ins_stock_resumen){
            if($vta_orden_venta_cantidad > $ins_stock_resumen->getCantidad()){
                //$arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("No se autoriza facturar una cantidad mayor a lo que existe en stock", true).'<br />';
                //$arr["div_bloque_stock_".$vta_orden_venta->getId()] = Lang::_lang("Cantidad supera el stock del deposito", true).' '.$pan_panol_vinculado->getCodigoCorto();
                //$arr["error"] = true;
            }
        }
        
        if($gral_sucursal){
            $arr_gral_sucursals_id[$gral_sucursal->getCodigo()] = $gral_sucursal;
        }
    }
    //if(count($arr_gral_sucursals_id) > 1 && array_key_exists(GralSucursal::SUCURSAL_VIRTUAL, $arr_gral_sucursals_id)){
    //    $arr["error_general"] .= Lang::_lang("No se pueden facturar OV de distintas sucursales existiendo alguna OV de la sucursal VIRTUAL", true).'<br />';
    //    $arr["error"] = true;            
    //}
}

// -----------------------------------------------------------------------------
// controles de facturas por item
// -----------------------------------------------------------------------------
if ($tipo == 'item') {
    
    if (is_null($txt_descripcions)) {
        $arr["error_general"] = Lang::_lang("Debe agregar una descripcion de los Items.", true);
        $arr["error"] = true;
    } else {
        foreach ($txt_descripcions as $key => $txt_descripcion) {
            if ($txt_descripcion == '') {
                $arr["txt_descripcion_" . $key] = Lang::_lang("Debe agregar una descripcion del Item.", true);
                $arr["error"] = true;
            }
        }
    }

    if (is_null($txt_importe_unitarios)) {
        $arr["error_general"] .= Lang::_lang(" El importe es incorrecto.", true);
        $arr["error"] = true;
    } else {
        foreach ($txt_importe_unitarios as $key => $txt_importe_unitario) {
            
            $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

            if ($txt_importe_unitario == 0) {
                $arr["txt_importe_unitario_" . $key] = Lang::_lang("Debe agregar un importe valido.", true);
                $arr["error"] = true;
            } elseif (!Ctrl::esNumero($txt_importe_unitario)) {
                $arr["txt_importe_unitario_" . $key] = Lang::_lang("Debe indicar el importe en numeros.", true);
                $arr["error"] = true;
            }
        }
    }

    if (is_null($cmb_gral_tipo_iva_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar un tipo de Iva.", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_gral_tipo_iva_ids as $key => $cmb_gral_tipo_iva_id) {
            if ($cmb_gral_tipo_iva_id == '') {
                $arr["cmb_gral_tipo_iva_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de Iva valido.", true);
                $arr["error"] = true;
            }
        }
    }

    if (is_null($cmb_vta_factura_concepto_ids)) {
        $arr["error_general"] .= Lang::_lang(" Debe seleccionar un concepto.", true);
        $arr["error"] = true;
    } else {
        foreach ($cmb_vta_factura_concepto_ids as $key => $cmb_vta_factura_concepto_id) {
            if ($cmb_vta_factura_concepto_id == '') {
                $arr["cmb_vta_factura_concepto_id_" . $key] = Lang::_lang("Debe seleccionar un tipo de concepto.", true);
                $arr["error"] = true;
            }
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>