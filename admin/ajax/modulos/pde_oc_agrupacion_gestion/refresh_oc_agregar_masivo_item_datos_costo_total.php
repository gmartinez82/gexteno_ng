<?php

include "_autoload.php";

$prv_proveedor_id                = Gral::getVars(Gral::VARS_POST, 'cmb_prv_proveedor_id', 0);
$prv_proveedor                   = PrvProveedor::getOxId($prv_proveedor_id);
$pde_centro_pedido_id            = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_pedido_id', 0);
$pde_centro_pedido               = PdeCentroPedido::getOxId($pde_centro_pedido_id);
$txt_cantidads                   = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);
$txt_importe_ocs                 = Gral::getVars(Gral::VARS_POST, 'txt_importe_oc', 0);
$cmb_prv_descuento_comercial_ids = Gral::getVars(Gral::VARS_POST, 'cmb_prv_descuento_comercial_id', 0); // se utiliza cero solo en el refresh

$txt_importe_oc = 0;

foreach ($txt_cantidads as $key => $txt_cantidad)
{
    $insumo_id                       = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
    $ins_insumo                      = InsInsumo::getOxId($insumo_id);
    $cmb_prv_descuento_comercial_id  = $cmb_prv_descuento_comercial_ids[$key];
    $txt_importe_oc                  = $txt_importe_ocs[$key];

    $txt_importe_oc = Gral::getImporteDesdePriceFormatToDB($txt_importe_oc);
    // se afecta al importe oc con el descuento comercial, si lo hubiese
    //$txt_importe_oc = PdeOcAgrupacion::getImporteConDescuentoComercial($cmb_prv_descuento_comercial_id, $txt_importe_oc);
    $txt_importe_oc_con_descuento_comercial = PdeOcAgrupacion::getImporteConDescuentoComercial($cmb_prv_descuento_comercial_id, $txt_importe_oc);
    if ($ins_insumo)
    {
        $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();
        // si hay insumo y proveedor, se busca el insumo de proveedor
        if ($ins_insumo && $prv_proveedor)
        {
            $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
            if ($prv_insumo)
            {
                $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
            }

            $arr['costo_total_unitario_oc_masivo'] += $txt_importe_oc;
            $arr['costo_total_unitario_oc_con_descuento_comercial_masivo'] += $txt_importe_oc_con_descuento_comercial;
            $arr['costo_total_total_oc_masivo']    += $txt_importe_oc_con_descuento_comercial * $txt_cantidad;
        }
    }
}

$arr['costo_total_unitario_oc_masivo_formateado'] = Gral::_echoImp($arr['costo_total_unitario_oc_masivo'], false, true);
$arr['costo_total_unitario_oc_con_descuento_comercial_masivo_formateado'] = Gral::_echoImp($arr['costo_total_unitario_oc_con_descuento_comercial_masivo'], false, true);
$arr['costo_total_total_oc_masivo_formateado']    = Gral::_echoImp($arr['costo_total_total_oc_masivo'], false, true);

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>