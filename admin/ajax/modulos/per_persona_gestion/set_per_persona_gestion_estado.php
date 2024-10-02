<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$per_persona = PerPersona::getOxId($id);
if($per_persona->getEstado() == 1){
	$per_persona->setEstado(0);
}else{
	$per_persona->setEstado(1);
}
$per_persona->cambiarEstado();
?>

