<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$nov_novedad_leido = NovNovedadLeido::getOxId($id);

$estado = ($nov_novedad_leido->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'nov_novedad_leido_uno.php';
?>

