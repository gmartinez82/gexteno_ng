<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de = EkuDe::getOxId($id);

$estado = ($eku_de->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_uno.php';
?>

