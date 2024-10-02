<?php

include "_autoload.php";

$pde_oc_agrupacion_id            = Gral::getVars(Gral::VARS_POST, 'pde_oc_agrupacion_id', 0);

$txt_vencimiento                 = Gral::getFechaToDb(Gral::getVars(Gral::VARS_POST, 'txt_vencimiento', ''));
$cmb_pde_centro_pedido_id        = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_pedido_id', 0);
$cmb_prv_proveedor_id            = Gral::getVars(Gral::VARS_POST, 'cmb_prv_proveedor_id', 0);
$cmb_pde_centro_recepcion_id     = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_recepcion_id', 0);
$txa_observacion                 = Gral::getVars(Gral::VARS_POST, 'txa_observacion', '');
$cmb_prv_descuento_financiero_id = Gral::getVars(Gral::VARS_POST, 'cmb_prv_descuento_financiero_id', null);
$cmb_iva_incluido                = Gral::getVars(Gral::VARS_POST, 'cmb_iva_incluido', 0);
$txt_cantidads                   = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);
$txt_importe_ocs                 = Gral::getVars(Gral::VARS_POST, 'txt_importe_oc', 0);
$cmb_prv_descuento_comercial_ids = Gral::getVars(Gral::VARS_POST, 'cmb_prv_descuento_comercial_id', null); // se utiliza null para registrar en base casos seleccionados y no seleccionados
$chk_afecta_costos               = Gral::getVars(Gral::VARS_POST, 'chk_afecta_costo', 0);
$arr_items    = array();

//exit;
$arr["error"] = false;

if ($cmb_pde_centro_pedido_id == 0) {
    $arr["cmb_pde_centro_pedido_id"] = Lang::_lang("Debe indicar un Centro de Pedido", true);
    $arr["error"] = true;
}

if ($cmb_prv_proveedor_id == 0) {
    $arr["cmb_prv_proveedor_id"] = Lang::_lang("Debe elegir un Proveedor", true);
    $arr["error"] = true;
}

if (!Ctrl::esFechaValida($txt_vencimiento)) {
    $arr["txt_vencimiento"] = Lang::_lang("Debe indicar una Fecha Valida", true);
    $arr["error"] = true;
}

if ($cmb_pde_centro_recepcion_id == 0) {
    $arr["cmb_pde_centro_recepcion_id"] = Lang::_lang("Debe elegir un Centro de Recepcion", true);
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
    $arr["lbl_general"] = Lang::_lang("Debe agregar como minumo 1 item", true);
    $arr["error"] = true;
}

if (!$arr["error"])
{
    $prv_proveedor = PrvProveedor::getOxId($cmb_prv_proveedor_id);
    foreach ($txt_cantidads as $key => $txt_cantidad)
    {
        $insumo_id = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
        $ins_insumo = InsInsumo::getOxId($insumo_id);

        if ($ins_insumo)
        {
            $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

            // si hay insumo y proveedor, se busca el insumo de proveedor
            if ($ins_insumo && $prv_proveedor)
            {
                $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
                if ($prv_insumo) {
                    $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
                }
            }
        }

        $importe_oc                 = Gral::getImporteDesdePriceFormatToDB($txt_importe_ocs[$key]);
        $afecta_costo               = $chk_afecta_costos[$key];
        $prv_descuento_comercial_id = ($cmb_prv_descuento_comercial_ids[$key] == '') ? 'null' : $cmb_prv_descuento_comercial_ids[$key];

        $arr_items[] = array(
            'ins_insumo_id'              => $ins_insumo->getId(),
            'ins_insumo_descripcion'     => $ins_insumo->getDescripcion(),
            'cantidad'                   => $txt_cantidad,
            'prv_insumo_id'              => ($prv_insumo) ? $prv_insumo->getId() : 'null',
            'prv_insumo_costo_id'        => ($prv_insumo_costo_actual) ? $prv_insumo_costo_actual->getId() : 'null',
            'importe_oc'                 => $importe_oc,
            'afecta_costo'               => ($afecta_costo) ? 1 : 0,
            'prv_descuento_comercial_id' => $prv_descuento_comercial_id,
        );
    }
    
    PdeOcAgrupacion::addPdeOcAgrupacion($pde_oc_agrupacion_id, 
                                        $cmb_pde_centro_pedido_id,
                                        $cmb_prv_proveedor_id,
                                        $cmb_pde_centro_recepcion_id,
                                        $txt_vencimiento,
                                        $cmb_prv_descuento_financiero_id,
                                        $cmb_iva_incluido,
                                        $arr_items,
                                        $txa_observacion);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>