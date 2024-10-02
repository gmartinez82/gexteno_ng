<?php
include "_autoload.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cli_cliente_id', 0);
$key = Gral::getVars(Gral::VARS_POST, 'key', 0);

$key++;

include "bloque_vta_factura_descuento_financiero_items_datos_x_cli_cliente_uno.php";
?>