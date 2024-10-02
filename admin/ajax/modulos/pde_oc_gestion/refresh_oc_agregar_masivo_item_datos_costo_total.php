<?php

include "_autoload.php";

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$txt_cantidads = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);
//Gral::prr($_POST);
//Gral::prr($txt_cantidads);

foreach ($txt_cantidads as $key => $txt_cantidad) {
    $insumo_id = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
    $ins_insumo = InsInsumo::getOxId($insumo_id);

    if ($ins_insumo) {
        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

        // si hay insumo y proveedor, se busca el insumo de proveedor
        if ($ins_insumo && $prv_proveedor) {
            $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
            if ($prv_insumo) {
                $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
                
                $arr['costo_total_unitario_oc_masivo']+= $prv_insumo_costo_actual->getImporteNeto();
                $arr['costo_total_total_oc_masivo']+= $prv_insumo_costo_actual->getImporteNeto() * $txt_cantidad;
            }
        }
    }
}
$arr['costo_total_unitario_oc_masivo_formateado'] = Gral::_echoImp($arr['costo_total_unitario_oc_masivo'], false, true);
$arr['costo_total_total_oc_masivo_formateado'] = Gral::_echoImp($arr['costo_total_total_oc_masivo'], false, true);

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>