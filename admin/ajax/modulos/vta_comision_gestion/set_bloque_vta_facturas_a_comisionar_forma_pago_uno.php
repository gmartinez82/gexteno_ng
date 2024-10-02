<?php
include "_autoload.php";

$dbsug_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'dbsug_prv_proveedor_id', 0);
$key = Gral::getVars(Gral::VARS_POST, 'key', 0);

$key++;

include "bloque_vta_facturas_a_comisionar_forma_pago_uno.php";
?>