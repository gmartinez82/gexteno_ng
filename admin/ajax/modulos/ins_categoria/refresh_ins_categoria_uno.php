<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_categoria = InsCategoria::getOxId($id);

$estado = ($ins_categoria->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_categoria_uno.php';
?>

