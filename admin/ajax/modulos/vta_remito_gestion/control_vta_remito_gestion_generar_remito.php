<?php

include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_POST, "tipo", '');

// se obtienen variables si es factura de orden-venta
$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, "cli_cliente_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if ($cli_cliente_id == 0) {
    //$arr["cmb_cli_cliente_id"] = Lang::_lang("Debe indicar un cliente.", true);
    //$arr["error"] = true;
}

// -----------------------------------------------------------------------------
// controles de facturas por orden venta
// -----------------------------------------------------------------------------    
if (is_null($vta_orden_venta_ids)) {
    $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Venta", true).'<br />';
    $arr["error"] = true;
}

$arr_gral_sucursals_id = array();

// control por cada orden de venta
foreach($vta_orden_venta_ids as $vta_orden_venta_id => $v){
    $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
    $vta_orden_venta_cantidad = $vta_orden_venta_cantidads[$vta_orden_venta_id];
    $cantidad_disponible_para_agregar = $vta_orden_venta->getCantidadDisponibleEnRemito();
    
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
    
    // se controla que no se remita mas de lo autorizado
    if($vta_orden_venta_cantidad > $cantidad_disponible_para_agregar){
        $arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("La cantidad no puede ser mayor a lo autorizado", true).'<br />';
        $arr["error"] = true;            
    }

    // se controla que exista stock en el deposito correspondiente a la sucursal que vendio
    if($ins_stock_resumen){
        if($vta_orden_venta_cantidad > $ins_stock_resumen->getCantidad()){
            //$arr["error_general"] .= $vta_orden_venta->getCodigo().' - '.Lang::_lang("No se autoriza remitir una cantidad mayor a lo que existe en stock", true).'<br />';
            //$arr["div_bloque_stock_".$vta_orden_venta->getId()] = Lang::_lang("Cantidad supera el stock del deposito", true).' '.$pan_panol_vinculado->getCodigoCorto();
            //$arr["error"] = true;
        }
    }

    $arr_gral_sucursals_id[$gral_sucursal->getCodigo()] = $gral_sucursal;
}
if(count($arr_gral_sucursals_id) > 1 && array_key_exists(GralSucursal::SUCURSAL_VIRTUAL, $arr_gral_sucursals_id)){
    //$arr["error_general"] .= Lang::_lang("No se pueden facturar OV de distintas sucursales existiendo alguna OV de la sucursal VIRTUAL", true).'<br />';
    //$arr["error"] = true;            
}


// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>