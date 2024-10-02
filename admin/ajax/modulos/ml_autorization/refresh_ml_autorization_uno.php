<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ml_autorization = MlAutorization::getOxId($id);

$estado = ($ml_autorization->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ml_autorization_uno.php';
?>

