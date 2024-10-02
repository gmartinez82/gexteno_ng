<?php

include "_autoload.php";

$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_POST, 'pdi_pedido_agrupacion_id', 0, Gral::TIPO_INTEGER);
$cmb_pan_panol_origen     = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_origen', 0, Gral::TIPO_INTEGER);
$cmb_pan_panol_destino    = Gral::getVars(Gral::VARS_POST, 'cmb_pan_panol_destino', 0, Gral::TIPO_INTEGER);
$cmb_pdi_urgencia_id      = Gral::getVars(Gral::VARS_POST, 'cmb_pdi_urgencia_id', 0, Gral::TIPO_INTEGER);
$txa_observacion          = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '', Gral::TIPO_STRING);
$txt_cantidads            = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0, Gral::TIPO_INTEGER);

$arr_items    = array();
$arr["error"] = false;

if ($cmb_pan_panol_origen == 0) {
    $arr["cmb_pan_panol_origen"] = Lang::_lang("Debe indicar un panol origen", true);
    $arr["error"] = true;
}

if ($cmb_pan_panol_destino == 0) {
    $arr["cmb_pan_panol_destino"] = Lang::_lang("Debe indicar un panol destino", true);
    $arr["error"] = true;
}elseif ($cmb_pan_panol_destino == $cmb_pan_panol_origen) {echo x;
    $arr["cmb_pan_panol_destino"] = Lang::_lang("El destino no debe ser igual al origen", true);
    $arr["error"] = true;
}

if ($cmb_pdi_urgencia_id == 0) {
    $arr["cmb_pdi_urgencia_id"] = Lang::_lang("Debe elegir urgencia del pedido", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe agregar una observacion", true);
    $arr["error"] = true;
}

if ($txt_cantidads != 0)
{
    foreach ($txt_cantidads as $key => $txt_cantidad)
    {
        $insumo_id = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
        $ins_insumo = InsInsumo::getOxId($insumo_id);

        if (!$ins_insumo) {
            $arr["dbsug_ins_insumo_id_" . $key] = Lang::_lang("Debe seleccionar un insumo", true);
            $arr["error"] = true;
        }
    }
}
else
{
    $arr["lbl_general"] = Lang::_lang("Debe agregar como minimo 1 item", true);
    $arr["error"] = true;
}

if (!$arr["error"])
{
    foreach ($txt_cantidads as $key => $txt_cantidad)
    {
        $insumo_id = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
        $ins_insumo = InsInsumo::getOxId($insumo_id);

        $arr_items[] = array(
            'ins_insumo_id'          => $ins_insumo->getId(),
            'ins_insumo_descripcion' => $ins_insumo->getDescripcion(),
            'cantidad'               => $txt_cantidad,
        );
    }
    
    PdiPedidoAgrupacion::addPdiPedidoAgrupacion(
            $pdi_pedido_agrupacion_id,
            $cmb_pan_panol_origen,
            $cmb_pan_panol_destino,
            $cmb_pdi_urgencia_id,
            $arr_items,
            $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>