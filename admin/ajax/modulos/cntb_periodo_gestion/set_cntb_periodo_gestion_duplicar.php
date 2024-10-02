<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$cntb_periodo = CntbPeriodo::getOxId($id);
$cntb_periodo->duplicarCntbPeriodo();

