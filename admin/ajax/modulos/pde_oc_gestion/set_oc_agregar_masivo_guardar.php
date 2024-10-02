<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$cmb_pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_pedido_id', '');
$cmb_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_prv_proveedor_id', '');
$txt_vencimiento = Gral::getFechaToDb(Gral::getVars(Gral::VARS_POST, 'txt_vencimiento', ''));
$cmb_pde_centro_recepcion_id = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_recepcion_id', null);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');
$txt_cantidads = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);

$arr_items = array();

$arr["error"] = false;

// controles
if (Ctrl::esVacio($cmb_pde_centro_pedido_id)) {
    $arr["cmb_pde_centro_pedido_id"] = Lang::_lang("Debe indicar un Centro de Pedido", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($cmb_prv_proveedor_id)) {
    $arr["cmb_prv_proveedor_id"] = Lang::_lang("Debe elegir un Proveedor", true);
    $arr["error"] = true;
}
if (!Ctrl::esFechaValida($txt_vencimiento)) {
    $arr["txt_vencimiento"] = Lang::_lang("Debe indicar una Fecha Valida", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($cmb_pde_centro_recepcion_id)) {
    $arr["cmb_pde_centro_recepcion_id"] = Lang::_lang("Debe elegir un Centro de Recepcionn", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe agregar una observacion", true);
    $arr["error"] = true;
}

foreach ($txt_cantidads as $key => $txt_cantidad) {
    $insumo_id = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
    $ins_insumo = InsInsumo::getOxId($insumo_id);

    if (!$ins_insumo) {
        $arr["dbsug_ins_insumo_id_" . $key] = Lang::_lang("Debe seleccionar un insumo", true);
        $arr["error"] = true;
    }
}

if (!$arr["error"]) {
    $prv_proveedor = PrvProveedor::getOxId($cmb_prv_proveedor_id);

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
                }
            }
        }

        $arr_items[$ins_insumo->getId()] = array(
            'ins_insumo_id' => $ins_insumo->getId(),
            'ins_insumo_descripcion' => $ins_insumo->getDescripcion(),
            'cantidad' => $txt_cantidad,
            'prv_insumo_id' => ($prv_insumo) ? $prv_insumo->getId() : 'null',
            'prv_insumo_costo_id' => ($prv_insumo_costo_actual) ? $prv_insumo_costo_actual->getId() : 'null',
        );
    }

    PdeOc::addPdeOcAgrupacion(
            $cmb_pde_centro_pedido_id, $cmb_prv_proveedor_id, $cmb_pde_centro_recepcion_id, $txt_vencimiento, $arr_items, $txa_observacion = ''
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>