<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$buscador = Gral::getVars(2, 'buscador', '');

include "bloque_agregar_marcas.php";
?>
