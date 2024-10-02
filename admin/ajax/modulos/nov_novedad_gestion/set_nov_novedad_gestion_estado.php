<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$nov_novedad = NovNovedad::getOxId($id);
if($nov_novedad->getEstado() == 1){
	$nov_novedad->setEstado(0);
}else{
	$nov_novedad->setEstado(1);
}
$nov_novedad->cambiarEstado();
?>

