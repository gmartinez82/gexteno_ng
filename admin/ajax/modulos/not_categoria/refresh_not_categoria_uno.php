<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_categoria = NotCategoria::getOxId($id);

$estado = ($not_categoria->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'not_categoria_uno.php';
?>

