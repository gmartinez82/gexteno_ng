<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$fnd_chq_cheque = new FndChqCheque();
$fnd_chq_cheque->setId($id, false);
$fnd_chq_cheque->deleteAll();
?>

