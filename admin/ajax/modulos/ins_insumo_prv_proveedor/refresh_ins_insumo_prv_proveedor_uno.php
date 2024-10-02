<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_insumo_prv_proveedor = InsInsumoPrvProveedor::getOxId($id);

include 'ins_insumo_prv_proveedor_uno.php';
?>

