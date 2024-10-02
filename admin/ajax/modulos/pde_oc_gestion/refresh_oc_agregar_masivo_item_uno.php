<?php
include "_autoload.php";

$key = Gral::getVars(Gral::VARS_POST, 'key', 0);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
$insumo_id = Gral::getVars(Gral::VARS_POST, 'insumo_id', 0);
$cantidad = Gral::getVars(Gral::VARS_POST, 'cantidad', 0);

$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

// si hay insumo y proveedor, se busca el insumo de proveedor
if($ins_insumo && $prv_proveedor){
    $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
    if($prv_insumo){
        $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
    }
}

$txt_cantidad = $cantidad;

include "modal_oc_agregar_masivo_item_uno.php";
?>