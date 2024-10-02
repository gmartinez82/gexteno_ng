<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_relacionada = NotRelacionada::getOxId($id);

$estado = ($not_relacionada->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'not_relacionada_uno.php';
?>

