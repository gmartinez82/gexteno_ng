<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$cntb_periodo = new CntbPeriodo();
$cntb_periodo->setId($id, false);
$cntb_periodo->deleteAll();
?>

