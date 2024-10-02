<?php
include '_autoload.php';

$fnd_caja_id = Gral::getVars(2, 'fnd_caja_id', 0);
$fnd_caja = FndCaja::getOxId($fnd_caja_id);

$fnd_caja_movimientos_origen = $fnd_caja->getMovimientosCaja('origen', false);
$fnd_caja_movimientos_destino = $fnd_caja->getMovimientosCaja('destino', false);

include 'bloque_ficha_movimientos.php'

?>