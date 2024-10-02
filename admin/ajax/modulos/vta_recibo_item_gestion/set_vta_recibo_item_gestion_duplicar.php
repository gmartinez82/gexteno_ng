<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_recibo_item = VtaReciboItem::getOxId($id);
$vta_recibo_item->duplicarVtaReciboItem();

