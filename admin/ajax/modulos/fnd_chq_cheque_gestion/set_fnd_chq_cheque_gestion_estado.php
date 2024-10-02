<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$fnd_chq_cheque = FndChqCheque::getOxId($id);
if($fnd_chq_cheque->getEstado() == 1){
	$fnd_chq_cheque->setEstado(0);
}else{
	$fnd_chq_cheque->setEstado(1);
}
$fnd_chq_cheque->cambiarEstado();
?>

