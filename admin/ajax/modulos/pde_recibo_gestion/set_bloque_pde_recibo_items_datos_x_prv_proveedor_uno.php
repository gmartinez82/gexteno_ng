<?php
include "_autoload.php";

$dbsug_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'dbsug_prv_proveedor_id', 0);
$key = Gral::getVars(Gral::VARS_POST, 'key', 0);

$key++;

include "bloque_pde_recibo_items_datos_x_prv_proveedor_uno.php";
?>