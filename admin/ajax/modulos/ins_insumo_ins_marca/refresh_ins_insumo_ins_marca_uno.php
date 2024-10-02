<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_insumo_ins_marca = InsInsumoInsMarca::getOxId($id);

include 'ins_insumo_ins_marca_uno.php';
?>

