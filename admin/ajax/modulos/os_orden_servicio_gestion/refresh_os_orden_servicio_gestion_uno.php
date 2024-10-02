<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$os_orden_servicio = OsOrdenServicio::getOxId($id);

$estado = ($os_orden_servicio->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'os_orden_servicio_gestion_uno.php';
?>

