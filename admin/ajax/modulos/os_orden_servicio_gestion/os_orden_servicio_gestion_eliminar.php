<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$os_orden_servicio = new OsOrdenServicio();
$os_orden_servicio->setId($id, false);
$os_orden_servicio->deleteAll();
?>

