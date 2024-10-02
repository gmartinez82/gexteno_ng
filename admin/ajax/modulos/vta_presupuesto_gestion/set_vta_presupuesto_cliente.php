<?php

include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0, Gral::TIPO_INTEGER);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

// se realizan los controles de datos
$arr["error"] = false;

if (!$arr["error"]) {
    if($cli_cliente){
        $gral_condicion_iva = $cli_cliente->getGralCondicionIva();
        
        $vta_presupuesto->setCliClienteId($cli_cliente->getId());
        $vta_presupuesto->setPersonaDescripcion($cli_cliente->getDescripcion());
        $vta_presupuesto->save();
        
        // -------------------------------------------------------------------------
        // se genera la exencion de iva para clientes exentos
        // -------------------------------------------------------------------------
        if($cli_cliente->getIvaExceptuado()){
            $gral_tipo_iva_exento = GralTipoIva::getOxCodigo(GralTipoIva::TIPO_EXENTO);
            
            $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
            foreach($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
                $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
                $vta_presupuesto_ins_insumo->setGralTipoIvaId($gral_tipo_iva_exento->getId());
                $vta_presupuesto_ins_insumo->save();

                // ----------------------------------------------------------------------
                // se recalcula por potenciales afectaciones (recardos o descuentos)
                // ----------------------------------------------------------------------
                $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();        
            }
        }            
    }else{

        $vta_presupuesto->setCliClienteId('null');        
        $vta_presupuesto->setPersonaDescripcion(VtaPresupuesto::TEXTO_CONSUMIDOR_FINAL);
        $vta_presupuesto->setPersonaDocumento('');
        $vta_presupuesto->save();
                    
        $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
        foreach($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
            $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
            $vta_presupuesto_ins_insumo->setGralTipoIvaId($ins_insumo->getGralTipoIvaVenta());
            $vta_presupuesto_ins_insumo->save();

            // ----------------------------------------------------------------------
            // se recalcula por potenciales afectaciones (recardos o descuentos)
            // ----------------------------------------------------------------------
            $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();        
        }
    }
    
    // ----------------------------------------------------------------------
    // se recalcula totales
    // ----------------------------------------------------------------------
    $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;