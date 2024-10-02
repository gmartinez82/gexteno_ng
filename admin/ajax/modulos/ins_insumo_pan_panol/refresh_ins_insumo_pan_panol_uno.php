<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($id);

include 'ins_insumo_pan_panol_uno.php';
?>

