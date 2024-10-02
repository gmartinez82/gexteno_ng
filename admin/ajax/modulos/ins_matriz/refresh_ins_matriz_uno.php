<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_matriz = InsMatriz::getOxId($id);

$estado = ($ins_matriz->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_matriz_uno.php';
?>

