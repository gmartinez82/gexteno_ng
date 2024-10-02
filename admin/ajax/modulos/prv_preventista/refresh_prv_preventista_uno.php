<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_preventista = PrvPreventista::getOxId($id);

$estado = ($prv_preventista->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_preventista_uno.php';
?>

