<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_proveedor_prv_rubro = PrvProveedorPrvRubro::getOxId($id);

include 'prv_proveedor_prv_rubro_uno.php';
?>

