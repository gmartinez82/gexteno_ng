<?php

include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_categoria = $ins_insumo->getInsCategoria();

$marca_id = Gral::getVars(2, 'marca_id', 0);

// si no hereda marca, o sea que la marca esta vinculada al insumo
$array = array(
    array('campo' => 'ins_insumo_id', 'valor' => $insumo_id),
    array('campo' => 'ins_marca_id', 'valor' => $marca_id)
);
$ins_insumo_ins_marca = InsInsumoInsMarca::getOxArray($array);
if (!$ins_insumo_ins_marca) {
    // si no existe vinculo, se crea uno
    $ins_insumo_ins_marca = new InsInsumoInsMarca();
    $ins_insumo_ins_marca->setInsInsumoId($insumo_id);
    $ins_insumo_ins_marca->setInsMarcaId($marca_id);
    $ins_insumo_ins_marca->save();
}
?>