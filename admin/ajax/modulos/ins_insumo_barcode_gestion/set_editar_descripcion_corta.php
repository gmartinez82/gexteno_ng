<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$insumo_id = Gral::getVars(1, 'hdn_insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_categoria = $ins_insumo->getInsCategoria();

$txt_coche_descripcion_corta = Gral::getVars(1, 'txt_coche_descripcion_corta', '');

$ins_insumo->setDescripcionCorta($txt_coche_descripcion_corta);
$ins_insumo->save();

?>