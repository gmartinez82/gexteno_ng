<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_proveedor_ins_marca = PrvProveedorInsMarca::getOxId($id);

include 'prv_proveedor_ins_marca_uno.php';
?>

