<?php
include "_autoload.php";

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_prv_proveedor_id', 0);
$pde_centro_pedido_id = Gral::getVars(Gral::VARS_POST, 'cmb_pde_centro_pedido_id', 0);
$cmb_iva_incluido = Gral::getVars(Gral::VARS_POST, 'cmb_iva_incluido', -1);

$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
$pde_centro_pedido = PdeCentroPedido::getOxId($pde_centro_pedido_id);

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);    
//$txt_importe_ocs = Gral::getVars(Gral::VARS_POST, 'txt_importe_oc', 0);

//Gral::prr($_POST);
//Gral::prr($txt_cantidads);

if($cmb_iva_incluido == -1){
    $cmb_iva_incluido = $prv_proveedor->getIvaIncluido();
}

include "modal_oc_agregar_masivo_item_datos.php";
?>