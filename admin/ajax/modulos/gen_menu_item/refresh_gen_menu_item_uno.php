<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gen_menu_item = GenMenuItem::getOxId($id);

$estado = ($gen_menu_item->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gen_menu_item_uno.php';
?>

