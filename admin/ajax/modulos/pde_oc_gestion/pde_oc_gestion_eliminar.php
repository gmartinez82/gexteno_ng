<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_oc = new PdeOc();
$pde_oc->setId($id, false);
$pde_oc->deleteAll();
?>

