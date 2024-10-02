<?php
include "_autoload.php";

$id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($id);
$ins_categoria = $ins_insumo->getInsCategoria();

$ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();
$ins_lista_precios = $ins_insumo->getInsListaPrecios();
//Gral::prr($ins_lista_precios); exit;

include "bloque_insumo_listas_precios.php";
?>