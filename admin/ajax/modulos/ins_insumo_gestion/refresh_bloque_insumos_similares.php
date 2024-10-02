<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_insumo_similars = $ins_insumo->getInsInsumoSimilarsOrdenados();

include "bloque_insumos_similares.php";
?>