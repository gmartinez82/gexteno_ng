<?php

include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);
$vta_presupuesto_tipo_venta_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_tipo_venta_id', 0, Gral::TIPO_INTEGER);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_tipo_venta = VtaPresupuestoTipoVenta::getOxId($vta_presupuesto_tipo_venta_id);

$cli_cliente = $vta_presupuesto->getCliCliente();

// se realizan los controles de datos
$arr["error"] = false;

if (!$arr["error"]) {
    $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
    
    $gral_tipo_iva_exento = GralTipoIva::getOxCodigo(GralTipoIva::TIPO_EXENTO);

    $iva_exceptuado = false;
        
    // -------------------------------------------------------------------------
    // se fuerza el tipo de IVA correspondiente al tipo de venta
    // tambien se considera la condicion de iva del cliente
    // -------------------------------------------------------------------------
    foreach($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
        $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
        
        
        // -------------------------------------------------------------------------
        // se fuerza el tipo de IVA correspondiente al tipo de vent
        // -------------------------------------------------------------------------
        if($vta_presupuesto_tipo_venta->getCodigo() == VtaPresupuestoTipoVenta::TIPO_VENTA_A){
            $gral_tipo_iva = $ins_insumo->getGralTipoIvaVentaObj();
        }else{
            $gral_tipo_iva = $ins_insumo->getGralTipoIvaVentaZObj();        
        }

        if($cli_cliente->getId() != 'null'){
            if($cli_cliente->getGralCondicionIva()->getCodigo() == GralCondicionIva::TIPO_EXENTO){
                $gral_tipo_iva = GralTipoIva::getOxCodigo(GralTipoIva::TIPO_EXENTO);
            }
            
            $iva_exceptuado = $cli_cliente->getIvaExceptuado();            
        }   
        
        // -----------------------------------------------------------------
        // se deduce el tipo de IVA de acuerdo a la condicion del cliente
        // -----------------------------------------------------------------
        if($iva_exceptuado){
            $gral_tipo_iva = $gral_tipo_iva_exento;
        }
        
        $vta_presupuesto_ins_insumo->setGralTipoIvaId($gral_tipo_iva->getId());
        $vta_presupuesto_ins_insumo->save();

        // ----------------------------------------------------------------------
        // se recalcula por potenciales afectaciones (recardos o descuentos)
        // ----------------------------------------------------------------------
        $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();        
    }
    
    $vta_presupuesto->setVtaPresupuestoTipoVentaId($vta_presupuesto_tipo_venta->getId());
    $vta_presupuesto->save();
    
    // ----------------------------------------------------------------------
    // se recalcula totales
    // ----------------------------------------------------------------------
    $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();               
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;