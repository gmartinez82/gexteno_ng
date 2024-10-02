<?php

include "_autoload.php";

$cmb_pde_centro_pedido_id = Gral::getVars(2, 'cmb_pde_centro_pedido_id', null);
$dbsug_ins_insumo_id = Gral::getVars(2, 'dbsug_ins_insumo_id', null);
$cmb_pde_urgencia_id = Gral::getVars(2, 'cmb_pde_urgencia_id', null);
$txt_cantidad = Gral::getVars(2, 'txt_cantidad', 0);
$txt_vencimiento = Gral::getFechaToDb(Gral::getVars(2, 'txt_vencimiento', ''));
$txa_observacion = Gral::getVars(2, 'txa_observacion', '');

$chk_proveedor_id = $_GET['chk_proveedor_id'];
$chk_marca_id = $_GET['chk_marca_id'];


$arr['error'] = false;

/* Controles */
if (!Ctrl::esNumero($cmb_pde_centro_pedido_id)) {
    $arr['cmb_pde_centro_pedido_id_error'] = 'Debe seleccionar un Centro de Pedido';
    $arr['error'] = true;
}
if (!Ctrl::esNumero($dbsug_ins_insumo_id)) {
    $arr['dbsug_ins_insumo_id_error'] = 'Debe seleccionar un Insumo';
    $arr['error'] = true;
}
if (!Ctrl::esNumero($cmb_pde_urgencia_id)) {
    $arr['cmb_pde_urgencia_id_error'] = 'Debe seleccionar una Urgencia';
    $arr['error'] = true;
}
if (!Ctrl::esNumero($txt_cantidad)) {
    $arr['txt_cantidad_error'] = 'Debe seleccionar un numero';
    $arr['error'] = true;
} else {
    if ($txt_cantidad <= 0) {
        $arr['txt_cantidad_error'] = 'Debe seleccionar un numero mayor a cero';
        $arr['error'] = true;
    }
}
if (!Ctrl::esFechaValida($txt_vencimiento)) {
    $arr['txt_vencimiento_error'] = 'Debe seleccionar una fecha valida';
    $arr['error'] = true;
}

if (!is_array($chk_proveedor_id)) {
    $arr['chk_proveedor_error'] = 'Debe seleccionar minimo un proveedor';
    $arr['error'] = true;
}

if (!is_array($chk_marca_id)) {
    //$arr['chk_marca_error'] = 'Debe seleccionar minimo una marca';
    //$arr['error'] = true;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>