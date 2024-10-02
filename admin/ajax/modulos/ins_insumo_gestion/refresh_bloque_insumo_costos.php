<?php
include "_autoload.php";

$id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($id);
$ins_categoria = $ins_insumo->getInsCategoria();


$ins_insumo_costos = $ins_insumo->getInsInsumoCostos(null, null, true, $arr_ordens = array(array('campo' => InsInsumoCosto::GEN_ATTR_CREADO, 'orden' => 'desc')));
//Gral::prr($ins_insumo_costos); exit;

include "bloque_insumo_costos.php";
?>