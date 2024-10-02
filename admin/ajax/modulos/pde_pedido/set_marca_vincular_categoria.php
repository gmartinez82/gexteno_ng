<?php

include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_categoria = $ins_insumo->getInsCategoria();

$marca_id = Gral::getVars(2, 'marca_id', 0);

// si hereda marca, o sea que la marca esta vinculada a la categoria
$array = array(
    array('campo' => 'ins_categoria_id', 'valor' => $ins_categoria->getId()),
    array('campo' => 'ins_marca_id', 'valor' => $marca_id)
);
$ins_categoria_ins_marca = InsCategoriaInsMarca::getOxArray($array);
if (!$ins_categoria_ins_marca) {
    // si no existe vinculo, se crea uno
    $ins_categoria_ins_marca = new InsCategoriaInsMarca();
    $ins_categoria_ins_marca->setInsCategoriaId($ins_categoria->getId());
    $ins_categoria_ins_marca->setInsMarcaId($marca_id);
    $ins_categoria_ins_marca->save();
}
?>