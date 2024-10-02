<?php

include "_autoload.php";

$ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, "cmb_ins_tipo_lista_precio_id", 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if ($vta_presupuesto_id == 0) {
    $arr["vta_presupuesto_id"] = Lang::_lang("No se encuentra el presupuesto", true);
    $arr["error"] = true;
}else{
    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);    
}

if ($ins_tipo_lista_precio_id == 0) {
    $arr["ins_tipo_lista_precio_id"] = Lang::_lang("No se encuentra el tipo de lista de precio", true);
    $arr["error"] = true;
}else{
    $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
}

$arr["ins_tipo_lista_precio_id_actual"] = $vta_presupuesto->getInsTipoListaPrecioId();        
$arr["ins_tipo_lista_precio_id_nueva"] = $ins_tipo_lista_precio_id;        

// se verifican los items agregados al presupuesto
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
    $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
    $ins_lista_precio_nueva = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, $solo_habilitado = true);
    if(!$ins_lista_precio_nueva){
        $arr["cmb_ins_tipo_lista_precio_id"] = 'El producto '.$ins_insumo->getCodigoInterno().' no se encuentra habilitado para la lista '.$ins_tipo_lista_precio->getDescripcion().'<br />';
        $arr["error"] = true;        
    }
}

if (!$arr["error"]) {

    if ($vta_presupuesto) {
        if ($ins_tipo_lista_precio_id != $vta_presupuesto->getInsTipoListaPrecioId()) {
            
            $vta_presupuesto->setActualizarImporteItemsPresupuestoXInsTipoListaPrecio($ins_tipo_lista_precio_id);
            $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();
            
            $vta_presupuesto->setInsTipoListaPrecioId($ins_tipo_lista_precio_id);
            $vta_presupuesto->setIncluyeLogistica(0);
            $vta_presupuesto->setPorcentajeLogistica(0);
            $vta_presupuesto->save();
            
            $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
            foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
                $arr["vta_presupuesto_ins_insumos"][$vta_presupuesto_ins_insumo->getId()] = $vta_presupuesto_ins_insumo->getId();

                // -------------------------------------------------------------
                // se quitan los descuentos por el cambio de lista
                // -------------------------------------------------------------
                $vta_presupuesto_ins_insumo->setDescuento(0);
                $vta_presupuesto_ins_insumo->save();
                
                // --------------------------------------------------------------
                // se limpia el conflicto si existiese
                // --------------------------------------------------------------
                $vta_presupuesto_ins_insumo->deleteAllVtaPresupuestoConflicto();

                // -----------------------------------------------------------------
                // se recalcula por potenciales afectaciones (recargos o descuentos)
                // -----------------------------------------------------------------
                $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();
            }
        }
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;

?>