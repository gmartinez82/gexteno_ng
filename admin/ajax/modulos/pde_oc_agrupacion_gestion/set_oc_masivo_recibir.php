<?php

include "_autoload.php";

$pde_oc_agrupacion_id = Gral::getVars(Gral::VARS_POST, 'pde_oc_agrupacion_id', 0);

$txt_fecha_recepcion = Gral::getFechaToDb(Gral::getVars(Gral::VARS_POST, 'txt_fecha_recepcion', ''));
$cmb_pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_pedido_id', 0);
$cmb_pde_centro_recepcion_id = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_recepcion_id', 0);
$cmb_pan_panol_id = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_id', 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');

$chk_recibirs = Gral::getVars(Gral::VARS_POST, 'chk_recibir', 0);
$txt_cantidad_recibirs = Gral::getVars(Gral::VARS_POST, 'txt_cantidad_recibir', 0);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, 'txt_importe_unitario', 0);

$arr_items = array();

$arr["error"] = false;

// controles
if (!Ctrl::esFechaValida($txt_fecha_recepcion)) {
    $arr["txt_fecha_recepcion"] = Lang::_lang("Debe indicar una Fecha Valida", true);
    $arr["error"] = true;
}
if ($cmb_pde_centro_pedido_id == 0) {
    $arr["cmb_pde_centro_pedido_id"] = Lang::_lang("Debe indicar un Centro de Pedido", true);
    $arr["error"] = true;
}
if ($cmb_pde_centro_recepcion_id == 0) {
    $arr["cmb_pde_centro_recepcion_id"] = Lang::_lang("Debe elegir un Centro de Recepcion", true);
    $arr["error"] = true;
}
if ($cmb_pan_panol_id == 0) {
    $arr["cmb_pan_panol_id"] = Lang::_lang("Debe elegir un panol", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe agregar una observacion", true);
    $arr["error"] = true;
}
if ($txt_cantidad_recibirs != 0) {
    
} else {
    $arr["lbl_general"] = Lang::_lang("Debe agregar como minumo 1 item", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    
    $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);

    foreach ($chk_recibirs as $key => $pde_oc_id) {

        $txt_cantidad_recibida = $txt_cantidad_recibirs[$key];
        $txt_importe_unitario = $txt_importe_unitarios[$key];
        
        $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);
        
        $arr_items[] = array(
            'pde_oc_id' => $pde_oc_id,
            'cantidad_recibida' => $txt_cantidad_recibida,
            'importe_unitario' => $txt_importe_unitario,
        );
    }
        
    $pde_oc_agrupacion->addPdeRecepcionAgrupacion(
            $txt_fecha_recepcion, $cmb_pde_centro_pedido_id, $cmb_pde_centro_recepcion_id, $cmb_pan_panol_id, $arr_items, $txa_observacion
    );
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>