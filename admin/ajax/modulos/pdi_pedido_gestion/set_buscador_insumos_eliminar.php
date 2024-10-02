<?php
include "_autoload.php";

$indice = Gral::getVars(2, 'indice', 0);

$array_imputar_masivo = Gral::getSes('PDI_PEDIDO_IMPUTAR_MASIVO');
unset($array_imputar_masivo[$indice]);

Gral::setSes('PDI_PEDIDO_IMPUTAR_MASIVO', $array_imputar_masivo);
?>