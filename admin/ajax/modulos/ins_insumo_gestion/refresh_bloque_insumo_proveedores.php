<?php
include "_autoload.php";

$id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($id);
$ins_categoria = $ins_insumo->getInsCategoria();


$prv_insumos = $ins_insumo->getPrvInsumos();
//Gral::prr($prv_insumos); exit;

include "bloque_insumo_proveedores.php";
?>