<?php
include "_autoload.php";

$fnd_caja_origen_id = Gral::getVars(Gral::VARS_POST, 'fnd_caja_origen_id', 0);
$fnd_caja_destino_id = Gral::getVars(Gral::VARS_POST, 'fnd_caja_destino_id', 0);
$key = Gral::getVars(Gral::VARS_POST, 'key', 0);

$key++;

include "bloque_fnd_caja_movimiento_items_datos_x_fnd_caja_destino_uno.php";
?>