<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_categoria_ins_marca = InsCategoriaInsMarca::getOxId($id);

include 'ins_categoria_ins_marca_uno.php';
?>

