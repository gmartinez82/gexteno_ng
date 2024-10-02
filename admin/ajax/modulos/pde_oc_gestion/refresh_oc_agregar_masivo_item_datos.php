<?php
include "_autoload.php";

$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);    
//Gral::prr($_POST);
//Gral::prr($txt_cantidads);

include "modal_oc_agregar_masivo_item_datos.php";
?>