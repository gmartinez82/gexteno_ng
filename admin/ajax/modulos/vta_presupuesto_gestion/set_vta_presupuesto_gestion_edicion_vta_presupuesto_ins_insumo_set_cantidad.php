<?php

include_once '_autoload.php';

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0);
$txt_cantidad = Gral::getVars(Gral::VARS_GET, 'txt_cantidad', 1, Gral::TIPO_FLOAT);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_cantidad)) {
    $arr["txt_cantidad"] = Lang::_lang("Error! txt_cantidad se encuentra vacio. ", true);
    $arr["error"] = true;
}
if ($txt_cantidad <= 0) {
    $arr["error"] = true;
    $arr["msg"] = $txt_cantidad.' no es una cantidad valida';
}

if ($vta_presupuesto_ins_insumo_id == 0) {
    $arr["vta_presupuesto_ins_insumo_id"] = Lang::_lang("Error! vta_presupuesto_ins_insumo_id se encuentra vacio. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
    if ($vta_presupuesto_ins_insumo) {

        $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
        $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
        $ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
        $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, $solo_habilitado = true);
        
        // ---------------------------------------------------------------------
        // se fuerza a que como minimo sea siempre uno (1)
        // ---------------------------------------------------------------------
        if($txt_cantidad <= 0){
            $txt_cantidad = 1;
        }
        
        if($txt_cantidad >= $ins_lista_precio->getCantidadMinimaVenta()){
            $vta_presupuesto_ins_insumo->setCantidad($txt_cantidad);
            $vta_presupuesto_ins_insumo->save();

            // ----------------------------------------------------------------------
            // se recalcula por potenciales afectaciones (recardos o descuentos)
            // ----------------------------------------------------------------------
            $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();        

            // ----------------------------------------------------------------------
            // se recalcula totales
            // ----------------------------------------------------------------------
            $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
            $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();
            
            $arr["vta_presupuesto_ins_insumo_id"] = $vta_presupuesto_ins_insumo->getId();
            $arr["msg"] = Lang::_lang("Cantidad Modificada Correctamente", true);
            
        }else{
            $arr["msg"] = Lang::_lang("No Cumple Minimo", true).' - Ingresado '.$txt_cantidad.' - Minimo '.$ins_lista_precio->getCantidadMinimaVenta();
            $arr["error"] = true;            
        }

        /*
        $ins_lista_precio = $vta_presupuesto_ins_insumo->getInsListaPrecio();
        $ins_tipo_lista_precio_id = $ins_lista_precio->getInsTipoListaPrecioId();
        
        if ($ins_tipo_lista_precio_id) {
            $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
            
            $vta_presupuesto->setActualizarImporteItemsPresupuestoXInsTipoListaPrecio($ins_tipo_lista_precio_id);
            $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();
            $vta_presupuesto->save();
        } else {
            $arr["error_general"] = Lang::_lang("No se encontro ins_tipo_lista_precio_id.", true);
            $arr["error"] = true;
        }
        */
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

if ($arr["error"]) {
    $msj = 'Error en archivo set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_cantidad.php. ' . "\n";
    foreach ($arr as $key => $value) {
        $msj .= $key . ' -> ' . $value . "\n";
    }
    //Gral::wLog($msj);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;