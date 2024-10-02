<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$os_orden_servicio = OsOrdenServicio::getOxId($id);
if($os_orden_servicio->getEstado() == 1){
	$os_orden_servicio->setEstado(0);
}else{
	$os_orden_servicio->setEstado(1);
}
$os_orden_servicio->cambiarEstado();
?>

