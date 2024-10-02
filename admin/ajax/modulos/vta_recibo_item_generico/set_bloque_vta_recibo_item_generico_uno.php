<?php
include "_autoload.php";

$dbsug_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'dbsug_cli_cliente_id', 0);
$key                  = Gral::getVars(Gral::VARS_POST, 'key', 0);

$key++;

include "bloque_vta_recibo_item_generico_uno.php";
?>