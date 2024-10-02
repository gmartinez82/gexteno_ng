<?php
include "_autoload.php";

/*$key                  = Gral::getVars(Gral::VARS_POST, 'key', 0);
$cmb_prv_proveedor_id     = Gral::getVars(Gral::VARS_POST, 'cmb_prv_proveedor_id', 0);
$cmb_pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_pedido_id', 0);
$insumo_id            = Gral::getVars(Gral::VARS_POST, 'insumo_id', 0);
$cantidad             = Gral::getVars(Gral::VARS_POST, 'cantidad', 0);
$txt_importe_oc           = Gral::getVars(Gral::VARS_POST, 'importe_oc', 0);
$pde_oc_agrupacion_id = Gral::getVars(Gral::VARS_POST, 'agrupacion_id', 0);*/

$key                             = Gral::getVars(Gral::VARS_POST, 'key', 0);
$pde_oc_agrupacion_id            = Gral::getVars(Gral::VARS_POST, 'agrupacion_id', 0);

$cmb_pde_centro_pedido_id        = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_pedido_id', 0);
$cmb_prv_proveedor_id            = Gral::getVars(Gral::VARS_POST, 'cmb_prv_proveedor_id', 0);
$cmb_prv_descuento_financiero_id = Gral::getVars(Gral::VARS_POST, 'cmb_prv_descuento_financiero_id', 0);
$iva_incluido                    = Gral::getVars(Gral::VARS_POST, 'cmb_iva_incluido', 0);

$insumo_id                       = Gral::getVars(Gral::VARS_POST, 'dbsug_ins_insumo_' . $key . '_id', 0);
$txt_cantidads                   = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);
$txt_importe_ocs                 = Gral::getVars(Gral::VARS_POST, 'txt_importe_oc', 0);
$chk_afecta_costos               = Gral::getVars(Gral::VARS_POST, 'chk_afecta_costo', 0);
$cmb_prv_descuento_comercial_ids = Gral::getVars(Gral::VARS_POST, 'cmb_prv_descuento_comercial_id', 0); // se utiliza cero solo en el refresh

$txt_cantidad                    = $txt_cantidads[$key];
$txt_importe_oc                  = $txt_importe_ocs[$key];
$chk_afecta_costo                = $chk_afecta_costos[$key];
$cmb_prv_descuento_comercial_id  = $cmb_prv_descuento_comercial_ids[$key];

$chk_afecta_costo_checked[$key]  = ($chk_afecta_costo) ? "checked='checked'" : "";

$txt_importe_oc = Gral::getImporteDesdePriceFormatToDB($txt_importe_oc);

$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);

$array = array(
    array('campo' => 'pde_oc_agrupacion_id', 'valor' => $pde_oc_agrupacion_id),
    array('campo' => 'orden', 'valor' => $key),
);

$pde_oc_agrupacion_item  = PdeOcAgrupacionItem::getOxArray($array);
$prv_proveedor           = PrvProveedor::getOxId($cmb_prv_proveedor_id);
$pde_centro_pedido       = PdeCentroPedido::getOxId($cmb_pde_centro_pedido_id);
$ins_insumo              = InsInsumo::getOxId($insumo_id);
if($ins_insumo){
    $ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();
}

if($ins_insumo && $prv_proveedor)
{
    $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
    if($prv_insumo){
        $prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
    }
}


if($txt_importe_oc > 0)
{
    // -----------------------------------------------------------------
    // si se edito manualmente el importe
    // -----------------------------------------------------------------
    $txt_importe_oc = $txt_importe_oc;
}
elseif($pde_oc_agrupacion_item)
{
    // -----------------------------------------------------------------
    // si hay item de agrupacion se carga el importe guardado para el item
    // -----------------------------------------------------------------
    $txt_importe_oc = $pde_oc_agrupacion_item->getImporteUnidad();
}
else
{
    // -----------------------------------------------------------------
    // si hay insumo y proveedor, se busca el insumo de proveedor
    // -----------------------------------------------------------------
    if($prv_insumo_costo_actual){
        //$txt_importe_oc = $prv_insumo_costo_actual->getImporteNeto();
        $txt_importe_oc = $prv_insumo_costo_actual->getImporteBruto();
    }
}

if($pde_oc_agrupacion){
    $iva_incluido = $pde_oc_agrupacion->getIvaIncluido();
}

//$txt_cantidad = $cantidad;

include "modal_oc_agregar_masivo_item_uno.php";
?>