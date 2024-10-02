<?php
include_once '_autoload.php';

$txt_buscador = Gral::getVars(1, 'txt_buscador', '');
$txt_buscador = strtoupper($txt_buscador);
Gral::setSes('PRV_IMPORTACION_LISTA_BUSCADOR_PALABRA', $txt_buscador);

?>
